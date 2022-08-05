<?php
/* Smarty version 3.1.45, created on 2022-08-03 07:30:43
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\scaning.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62ea0803655d38_45651191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ba4242ea4f6ed499684d59b86e5169fc60ec9f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\scaning.html',
      1 => 1659497719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ea0803655d38_45651191 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="p-3 h-screen w-full">
        <div class="bg-cyan-50 rounded-2xl h-full overflow-auto flex justify-center flex-wrap items-center">
            <div class="p-2">
                <h1 class="mb-10 text-6xl font-semibold  w-full">e-Guestbook</h1>
            </div>
            <div id="faceio-modal"></div>
        </div>
    </div>

    
    <?php echo '<script'; ?>
 src="https://cdn.faceio.net/fio.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        // Initialize the library first with your application Public ID.
        // Grab your public ID from the Application Manager on the FACEIO console at: https://console.faceio.net/
        const faceio = new faceIO("fioa3e5d"); // Replace with your application Public ID
        function enrollNewUser() {
            // Start the facial enrollment process
            faceio.enroll({
                "locale": "auto", // Default user locale
                "userConsent": false, // Set to true if you have already collected user consent
                "payload": {
                    /* The payload we want to associate with this user
                     * which is forwarded back to us upon future
                     * authentication of this particular user.*/
                    "image": `<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
`, // Example of dummy ID linked to this particular user
                }
            }).then(userInfo => {
                // User Successfully Enrolled!
                alert(
                    `User Successfully Enrolled! Details:
			Unique Facial ID: ${userInfo.facialId}
			Enrollment Date: ${userInfo.timestamp}
			Gender: ${userInfo.details.gender}
			Age Approximation: ${userInfo.details.age}`
                );
                console.log(userInfo);
                // handle success, save the facial ID, redirect to ...
                document.location.pathname = `/`;
                
            }).catch(errCode => {
                // handle enrollment failure. Visit:
                // https://faceio.net/integration-guide#error-codes
                // for the list of all possible error codes
                handleError(errCode);
            });
        }

        function handleError(errCode) {
            // Log all possible error codes during user interaction..
            // Refer to: https://faceio.net/integration-guide#error-codes
            // for a detailed overview when these errors are triggered.
            switch (errCode) {
                case fioErrCode.PERMISSION_REFUSED:
                    console.log("Access to the Camera stream was denied by the end user");
                    break;
                case fioErrCode.NO_FACES_DETECTED:
                    console.log("No faces were detected during the enroll or authentication process");
                    break;
                case fioErrCode.UNRECOGNIZED_FACE:
                    console.log("Unrecognized face on this application's Facial Index");
                    document.location.pathname = `/daftar`;
                    break;
                case fioErrCode.MANY_FACES:
                    console.log("Two or more faces were detected during the scan process");
                    break;
                case fioErrCode.PAD_ATTACK:
                    console.log("Presentation (Spoof) Attack (PAD) detected during the scan process");
                    break;
                case fioErrCode.FACE_MISMATCH:
                    console.log("Calculated Facial Vectors of the user being enrolled do not matches");
                    document.location.pathname = `/`;
                    break;
                case fioErrCode.WRONG_PIN_CODE:
                    console.log("Wrong PIN code supplied by the user being authenticated");
                    break;
                case fioErrCode.PROCESSING_ERR:
                    console.log("Server side error");
                    document.location.pathname = `/home`;
                    break;
                case fioErrCode.UNAUTHORIZED:
                    console.log(
                        "Your application is not allowed to perform the requested operation (eg. Invalid ID, Blocked, Paused, etc.). Refer to the FACEIO Console for additional information"
                    );
                    document.location.pathname = `/`;
                    break;
                case fioErrCode.TERMS_NOT_ACCEPTED:
                    console.log("Terms & Conditions set out by FACEIO/host application rejected by the end user");
                    break;
                case fioErrCode.UI_NOT_READY:
                    console.log("The FACEIO Widget code could not be (or is being) injected onto the client DOM");
                    document.location.pathname = `/`;
                    break;
                case fioErrCode.SESSION_EXPIRED:
                    console.log(
                        "Client session expired. The first promise was already fulfilled but the host application failed to act accordingly"
                    );
                    break;
                case fioErrCode.TIMEOUT:
                    console.log(
                        "Ongoing operation timed out (eg, Camera access permission, ToS accept delay, Face not yet detected, Server Reply, etc.)"
                    );
                    document.location.pathname = `/`;
                    break;
                case fioErrCode.TOO_MANY_REQUESTS:
                    console.log(
                        "Widget instantiation requests exceeded for freemium applications. Does not apply for upgraded applications"
                    )
                        break;
                case fioErrCode.EMPTY_ORIGIN:
                    console.log("Origin or Referer HTTP request header is empty or missing");
                    break;
                case fioErrCode.FORBIDDDEN_ORIGIN:
                    console.log("Domain origin is forbidden from instantiating fio.js");
                    break;
                case fioErrCode.FORBIDDDEN_COUNTRY:
                    console.log("Country ISO-3166-1 Code is forbidden from instantiating fio.js");
                    break;
                case fioErrCode.SESSION_IN_PROGRESS:
                    console.log("Another authentication or enrollment session is in progress");
                    break;
                case fioErrCode.NETWORK_IO:
                default:
                    console.log("Error while establishing network connection with the target FACEIO processing node");
                    break;
            }
            
        }

        enrollNewUser();
    <?php echo '</script'; ?>
>
    
</body>

</html><?php }
}
