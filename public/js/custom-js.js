$(document).ready(function () {
    var CONFIG = (function () {
        var private = {
            'MEMBER_ADULT_PRICE': 18,
            'NON_MEMBER_ADULT_PRICE': 20,
            'SENIOR_PRICE': 10,
            'CHILDREN_PRICE': 10,
            'ADULT_GROUP': 4,
            'ADULT_GROUP_PRICE': 70
        };

        return {
            get: function (name) {
                return private[name];
            }
        };
    })();
    $("#participant_name").autocomplete({
        source: "search/autocomplete",
        minLength: 3,
        select: function (event, ui) {
            $('#participant_name').val(ui.item.value);
        }
    });

    $('#example').DataTable();

    $("#participant_name").keyup(function () {
        var name = $('#participant_name').val();
        if (name.length > 0) {
            $('#pt_name').text(name);
        } else {
            $('#pt_name').text('Participant Name');
        }
    });
    $("#participant_adult,#participant_children,#participant_senior,#received_amt").change(function () {
        var adult_no = $('#participant_adult').val();
        var children_no = $('#participant_children').val();
        var senior_no = $('#participant_senior').val();
        var cal_adult, cal_children, cal_senior;
        var data = {};
        data = calculatePrice(adult_no, children_no, senior_no);
        $('#adult_total_disp').text(data.cal_adult);
        $('#senior_total_disp').text(data.cal_senior);
        $('#children_total_disp').text(data.cal_children);
        $('#total_cost_disp').text(data.total_cost);
        $('#cost_amt').val(data.total_cost);
    });

    $("#received_amt").change(function () {
        var last_cost = $('#cost_amt').val();
        var rec_amt = $('#received_amt').val();
        var ret_amt = rec_amt - last_cost;
        $('#return_amt').val(ret_amt);
    });

    // For calculating the total cost
    calculatePrice = function (adult_no, children_no, senior_no) {
        var cal_adult, cal_children, cal_senior;
        if (adult_no > 0 && adult_no < CONFIG.get('ADULT_GROUP')) {
            if ($('#participant_type').val() == 1) {
                cal_adult = adult_no * CONFIG.get('MEMBER_ADULT_PRICE');
            } else {
                cal_adult = adult_no * CONFIG.get('NON_MEMBER_ADULT_PRICE');
            }
        } else if (adult_no == CONFIG.get('ADULT_GROUP')) {
            cal_adult = CONFIG.get('ADULT_GROUP_PRICE');
        } else if (adult_no >= CONFIG.get('ADULT_GROUP')) {
            cal_adult = CONFIG.get('ADULT_GROUP_PRICE') + (adult_no - CONFIG.get('ADULT_GROUP')) * 15;
        }
        else {
            cal_adult = 0;
        }

        if (children_no > 0) {
            cal_children = children_no * CONFIG.get('CHILDREN_PRICE');
        } else {
            cal_children = 0;
        }

        if (senior_no > 0) {
            cal_senior = senior_no * CONFIG.get('CHILDREN_PRICE');
        } else {
            cal_senior = 0;
        }

        var total_cost = cal_senior + cal_adult + cal_children;
        return data = {
            'total_cost': total_cost,
            'cal_adult': cal_adult,
            'cal_children': cal_children,
            'cal_senior': cal_senior
        }
    }



});


