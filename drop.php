<style>
#drop_zone{
       background-color: #EEE;
       broder: #999 5px dashed;
       width: 290px;
       height: 200px;
       padding: 8px;
       font_size: 18px;
}
</style>
<script>
function drag_drop(event)  {
       event.preventDefault();
       alert(event.dataTransfer.files[0]);
       alert(event.dataTransfer.files[0].name);
       alert(event.dataTransfer.files[0].size+"bytes");
       

}
</script>
<h1>File Upload Rop Zone</h1>
<div id="drop_zone" ondrop="drag_drop(event)" ondragover="return false"></div>