<html>
<body>
<h>Hello  {!! $firstName.' '.$lastName!!},</h><br>
<p>congratulation! you accepted the offer on Wannabei. Here you find details about the purchase and how to contact to seller</p><br>
<table>
	<tr>
		<td>Inquiry</td>
		<td>{!! $Inquiry !!}</td>
	</tr>
	<tr>
		<td>Your Offer</td>
		<td>{!! $Cost !!}</td>
	</tr>	

	<tr>
		<td>Name Of buyer</td>
		<td>{!! $firstname_buyer.' '. $lastname_buyer !!}</td>
	</tr>

	<tr>
		<td>Phone</td>
		<td>{!! $phone !!}</td>
	</tr>

</table>
<p>Best Regards</p><br>
<p>Your wannabei team</p>
</body>
</html>