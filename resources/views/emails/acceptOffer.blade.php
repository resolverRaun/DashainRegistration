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
		<td>Costs</td>
		<td>{!! $Cost !!}</td>
	</tr>	
	<tr>
		<td>store</td>
		<td>{!! $store !!}</td>
	</tr>
	<tr>
		<td>Name</td>
		<td>{!! $firstName_ceo.' '. $lastName_ceo !!}</td>
	</tr>

	<tr>
		<td>Address</td>
		<td>{!! $street.' '. $streetNbr !!}</td>
	</tr>

	<tr>
		<td>Phone</td>
		<td>{!! $phone !!}</td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td>{!! $email !!}</td>
	</tr>
</table>
<p>Best Regards</p><br>
<p>Your wannabei team</p>
</body>
</html>