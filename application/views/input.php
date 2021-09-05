  <div class="container">
  <h2 class="text-left">Input Penjualan</h2>
  <hr>
  <div class="container-fluid">

   
    <form action="#" method="" >
		  <div class="form-group">
		    <label for="formGroupExampleInput">Tanggal Transaksi</label>
		  	<input id="datepicker" value="<?=  date('Y-m-d') ?>" name="tanggal" class="form-control">
		 </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Pilih Item</label>
		    <select id="item" name="item" class="custom-select">
		    	<option value="">Cari Barang</option>
		    	<option value="1">Madu 150 gr</option>
		    	<option value="2">Madu 250 gr</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Harga Satuan</label>
		    <input type="number" id="harga_satuan" autocomplete="off" placeholder="Ex : 12000" readonly="" class="form-control">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">QTY Barang</label>
		    <input type="number" id="qty" autocomplete="off" name="qty" placeholder="Ex : 2" class="form-control">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Total Harga</label>
		    <input type="number" name="total" id="total" placeholder="Ex : 10000" readonly="" class="form-control">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Pembeli</label>
		    <input type="text" class="form-control" autocomplete="off" placeholder="Pembeli">
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="col-lg-12 btn btn-info ">Simpan</button>
		  </div>
	</form>
</div>


<script type="text/javascript">
	$(function(){
		$('#item').change(function(){
			var val = $(this).val();
			if(val == ""){
				$("#harga_satuan").val("") ;
			}else {
				$.ajax({
					url : "<?= base_url('Input/harga') ?>" ,
					method : "POST" ,
					data : "id="+ val ,
					success : function(result){
						console.log(result);
						$("#harga_satuan").val(result) ;
					}
				})

			}
		})

		$("#qty").keyup(function(){
			//console.log( $("#qty").val() );
			let total = $("#qty").val() * $("#harga_satuan").val();
			$("#total").val(total);
		})
	})
</script>