<!DOCTYPE HTML>
<html>
<head>
    <title>Sms Gratis</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="col-xs-12 col-md-8 col-md-offset-2" ng-controller ="listContactCtrl">
        <div class="header yy">
            <h1>Kirim Sms Gratis</h1>
        </div>
        <div class="well">
            <form  action="kirimsms.php"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="row">
                    <div class="col-md-2 control-label">
                        <label>Nomor Tujuan:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="tujuan" name="tujuan" class="form-control" placeholder="ex:08890xxxxx">
                    </div>
                </div>
                <div class="jarak row " >
                    <div class="col-md-2 control-label">
                        <label>Isi Pesan:</label>
                    </div>
                    <div class="col-md-4" >
                        <textarea style="height:100px" cols="35" id="isi" name="isi" class="form-control" placeholder="ex:ini adalah pesan.... dari Anonim"></textarea>
                    </div>
                </div>
                <div class="row jarak" >
                    <div class="col-sm-8" style="text-align:center">
                        <input type="submit" value="Kirim" class="btn btn-success" id="kirim" name="kirim">
                    </div>
                </div>
                
            </form>
        </div>
        <!--Konten LIFF v2-->
        <div id="liffAppContent">
            <!-- ACTION BUTTONS -->
            <div class="buttonGroup yy">
                <div class="buttonRow">
                    <button id="openWindowButton" class="btn btn-success btn-small">Buka Browser Eksternal</button>
                    <button id="sendMessageButton" class="btn btn-warning btn-small">Kirim Pesan</button>
                    <button id="closeWindowButton" class="btn btn-danger btn-small">Keluar</button>
                </div>
            </div>
 
            <!-- LIFF DATA -->
            <div id="liffData">
                <h3 id="liffDataHeader" class="textLeft">Informasi:</h3>
                <table>
                    <tr>
                        <th>Nama Pengguna : </th>
                        <td id="username" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>OS Pengguna: </th>
                        <td id="os" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>Bahasa: </th>
                        <td id="lang" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>Client : </th>
                        <td id="isInClient" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>Masuk : </th>
                        <td id="isLoggedIn" class="textLeft"></td>
                    </tr>
                </table>
            </div>
            <!-- LOGIN LOGOUT BUTTONS -->
            <div class="buttonGroup yy">
                <button id="liffLoginButton" class="btn btn-success btn-small">Log in</button>
                <button id="liffLogoutButton" class="btn btn-warning btn-small">Log out</button>
            </div>
            <div id="statusMessage" class="yy">
                <div id="isInClientMessage"></div>
                <hr>
                <div id="apiReferenceMessage">
                    <p>Available LIFF methods vary depending on the browser you use to open the LIFF app.</p>
                    <p>Please refer to the <a
                            href="https://developers.line.biz/en/reference/liff/#initialize-liff-app">API reference
                            page</a> for more information.</p>
                </div>
            </div>
        </div>
        <!-- LIFF ID ERROR -->
        <div id="liffIdErrorMessage" class="hidden yy">
            <p>You have not assigned any value for LIFF ID.</p>
            <p>If you are running the app using Node.js, please set the LIFF ID as an environment variable in your
                Heroku account follwing the below steps: </p>
            <code id="code-block">
                <ol>
                    <li>Go to `Dashboard` in your Heroku account.</li>
                    <li>Click on the app you just created.</li>
                    <li>Click on `Settings` and toggle `Reveal Config Vars`.</li>
                    <li>Set `MY_LIFF_ID` as the key and the LIFF ID as the value.</li>
                    <li>Your app should be up and running. Enter the URL of your app in a web browser.</li>
                </ol>
            </code>
            <p>If you are using any other platform, please add your LIFF ID in the <code>index.html</code> file.</p>
            <p>For more information about how to add your LIFF ID, see <a
                    href="https://developers.line.biz/en/reference/liff/#initialize-liff-app">Initializing the LIFF
                    app</a>.</p>
        </div>
        <!-- LIFF INIT ERROR -->
        <div id="liffInitErrorMessage" class="hidden yy">
            <p>Something went wrong with LIFF initialization.</p>
            <p>LIFF initialization can fail if a user clicks "Cancel" on the "Grant permission" screen, or if an error occurs in the process of <code>liff.init()</code>.
        </div>
        <!-- NODE.JS LIFF ID ERROR -->
        <div id="nodeLiffIdErrorMessage" class="hidden yy">
            <p>Unable to receive the LIFF ID as an environment variable.</p>
        </div>
    </div>
</body>
<!-- <script src="config.js"></script> -->
<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
<script src="liff.js"></script>
</html>