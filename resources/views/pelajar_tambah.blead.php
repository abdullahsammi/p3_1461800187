<form action="{( route ('mahasiswa.store')}" method="post">
        @csrf 
        NBI:<input type="text" name="nbi">
        nama:<input type="text" name="nama_pljr">
        <button type = "submit ">simpan</button>
</form>