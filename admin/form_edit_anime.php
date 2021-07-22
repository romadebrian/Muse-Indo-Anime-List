<div class="modal fade" id="Form_Edit_Anime<?php echo $data['No']; ?>" tabindex="-1" aria-labelledby="Form Edit Anime" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Edit Anime</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" id="contact-form" class="form-horizontal modal-content" action="proses_edit_anime.php" onSubmit="alert( 'PEMBARUAN BERHASIL' );">
		<div class="modal-body">
			<div class="form-group">
				<input type="text" name="Form_Name" id="Form_Name" class="form-control wow fadeInUp" placeholder="Nama Anime" value="<?php echo  $data['Nama']; ?>" required/>
			</div>
			<div class="form-group">
				<input type="text" name="Form_Alternatif" id="Form_Alternatif" class="form-control wow fadeInUp" placeholder="Nama Alternatif" value="<?php echo  $data['Alternatif']; ?>"/>
			</div>
			<div class="form-group">
				<input type="text" name="Form_Kategori" id="Form_Kategori" class="form-control wow fadeInUp" placeholder="Kategori" value="<?php echo  $data['Kategori']; ?>" required/>
			</div>
			<div class="form-group">
				<textarea name="Form_Link_Youtube" rows="5" cols="20" id="Form_Link_Youtube" class="form-control input-message wow fadeInUp"  placeholder="Link Playlist Youtube" required><?php echo  $data['Link']; ?></textarea>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
			<button type="submit" class="btn btn-primary">UPDATE</button>
		</div>
	  </form>
    </div>
  </div>
</div>