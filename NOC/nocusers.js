function setUpdateAction() {
document.frmUser.action = "nocedit_user.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "nocdelete_user.php";
document.frmUser.submit();
}
}
function setPrintAction() {
document.frmUser.action = "nocpdf.php";
document.frmUser.submit();
}