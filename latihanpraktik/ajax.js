<script type="text/javascript">
    $(document).ready(function(){
 
        $("#btn_kirim").on('click',function(){
            var nama    = $("input[name='nama']").val();
            var umur    = $("input[name='umur']").val();
            $.ajax({
                url: 'terima.php',
                type: 'POST',
                dataType: 'json',
                data: {nama:nama,umur:umur},
                success: function(response){
                    alert('Nama anda adalah '+response['nama']+ '. Umur Anda adalah '+response['umur']+' tahun.');  
                }
            })
        })
    })
</script>