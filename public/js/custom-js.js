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

    calculateAuto = function () {
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

    }

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

    var pathArray = window.location.pathname.split( '/' );
    if(pathArray[1] == 'home' && pathArray[2]=='participants' && pathArray[3]=='edit'){
        var edit_adult = $('#participant_adult').val();
        calculateAuto();
//        $("#participant_adult").val('edit_adult').change();
    }

    $("#participant_name").autocomplete({
        source: "search/autocomplete",
        minLength: 3,
        select: function (event, ui) {
            $('#participant_name').val(ui.item.value);
            $('#participant_type').val('1');
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

    $("#reset").click(function () {
        $(this).closest('form').find("input[type=text], textarea").val("");
        $('#adult_total_disp').text(0);
        $('#children_total_disp').text(0);
        $('#senior_total_disp').text(0);
        $('#total_cost_disp').text(0);
    });


    $("#participant_adult,#participant_type,#participant_children,#participant_senior,#received_amt").change(function () {
        calculateAuto();
    });


    $("#received_amt").change(function () {
        var last_cost = $('#cost_amt').val();
        var rec_amt = $('#received_amt').val();
        var ret_amt = rec_amt - last_cost;
        $('#return_amt').val(ret_amt);
    });



    $("#hundred,#fifty,#twenty,#ten,#one").change(function () {
        $('.add-hundred').text('100 * ' + $('#hundred').val());
        $('#hunderd_total_disp').text(100 *  $('#hundred').val());
        $('.add-fifty').text('50 * ' + $('#fifty').val());
        $('#fifty_total_disp').text(50 *  $('#fifty').val());
        $('.add-twenty').text('20 * ' + $('#twenty').val());
        $('#twenty_total_disp').text(20 *  $('#twenty').val());
        $('.add-ten').text('10 * ' + $('#ten').val());
        $('#ten_total_disp').text(10 *  $('#ten').val());
        $('.add-one').text('1 * ' + $('#one').val());
        $('#one_total_disp').text(1 *  $('#one').val());

        $('#grandtotal_cost_disp').text(parseInt($('#hunderd_total_disp').text()) + parseInt($('#fifty_total_disp').text()) + parseInt($('#twenty_total_disp').text()) + parseInt($('#ten_total_disp').text()) + parseInt($('#one_total_disp').text()));

    });

    $( "#received_amt" ).change(function() {
        debugger;
        if($('#return_amt').val()<0){
            $('#submit_participant').prop('disabled', true);
        }
        else
            $('#submit_participant').prop('disabled', false);
    });
 });


