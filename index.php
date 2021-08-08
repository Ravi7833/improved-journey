<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>APTRON PHP Application</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>Congratulations!</h1>
        <p>Welcome to APTRON Solutions Pvt.Ltd. <emb>AWS</emb> Certification Progoram</p>
        <p>You are Attending AWS Certified Solutions Architect - Associate training Progoram </p>
    </section>

    <section class="instructions">
        <h2>We also offering?</h2>
        <ul>
            <li><a href="http://aptronnoida.in/best-ccna-training-in-noida.html">Cisco CCNA Certification Training</a></li>
            <li><a href="http://aptronnoida.in/best-ccnp-training-in-noida.html">Cisco CCNP Certification Training</a></li>
            <li><a href="http://aptronnoida.in/best-cloud-computing-training-in-noida.html">VMWARE Certified Profesional -VCP-DCV 6.5</a>
            <li><a href="http://aptronnoida.in/best-mcsa-training-in-noida.html">Microsoft MCSA Certification Training</a></li>
            <li><a href="hhttp://aptronnoida.in/best-linux-training-in-noida.html">Redhat RHCE Certification Training </a></li>
        </ul>

    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>


<table border="1" width="100%" cellpadding="10">
	<tr>
		<td rowspan="3" width="500"></td>
		<td><a href="upload-file.php">File Upload</a></td>
	</tr>
	<tr>
		<td><a href="userdet.php">Users Details</a></td>
	</tr>
	<tr>
		<td><a href="newuser.php">New User</a></td>
	</tr>
</table>


