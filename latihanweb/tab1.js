$(document).ready(function(){
    $('#tab1').click(function(){
        $.post("",{kode:'m001',nama:'cpu',satuan:'pcs'},function(data,status)
        {
            $('#isidata').text(data);
            $('#isistatus').text(status);
            const obj = JSON.parse(data);
            $('#isidataitem1').text(obj.kode);
            $('#isidataitem2').text(obj.nama);
        });
    });
});