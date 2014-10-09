<?php
$email = $name = $pwd = "";
foreach($basic as $row) {
    $email = $row->cEmail;
    $pwd = $row->cPwd;
    $name = $row->cName;
}
?>
<!DOCTYPE html>
<div>    
    <div id="basictop">&nbsp;&nbsp;Basic Information</div>
    <form id="basicform">
        <div>
            <label for="curName">Current Name</label>
            <input id="curName" name="curName" type="text" <?php echo'value="' . $name . '"' ?> readonly><br>
        </div>
        <div>
            <label for="curName">New Name</label>
            <input id="newName" name="newName" type="text"><br>
            <p id="pn1">Please enter a new name.</p>
        </div>
        <div>
            <label for="curEmail">Current Email</label>
            <input id="curEmail" name="curEmail" type="text" <?php echo'value="' . $email . '"' ?> readonly><br>
        </div>
        <div>
            <label for="newEmail">New Email</label>
            <input id="newEmail" name="newEmail" type="email"><br>
            <p id="pe2">Please enter a new Email.</p>
        </div>
        <div>
            <label for="curPwd">Current Password</label>
            <input id="curPwd" name="curPwd" type="password" <?php echo'value="' . $pwd . '"' ?> readonly><br>
        </div>
        <div>
            <label for="newPwd">New Password</label>
            <input id="newPwd" name="newPwd" type="password"><br>
            <p id="pd3">Please enter a new password.</p>
        </div>
        <button type="button" id="btn" value="save" onclick="sendBasic()">save</button>
    </form>

</div>
<?php
$this->db->close();
