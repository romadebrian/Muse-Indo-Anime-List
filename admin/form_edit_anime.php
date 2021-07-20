<div class="modal fade" id="form_input_anime" tabindex="-1" aria-labelledby="Form Input Anime" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Form_Input_Anime">Form Input Anime</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" id="contact-form" class="form-horizontal modal-content" action="proses_input_anime.php" onSubmit="alert( 'TERSIMPAN' );">
		<div class="modal-body">
			<div class="form-group">
				<input type="text" name="Form_Name" id="Form_Name" class="form-control wow fadeInUp" placeholder="Nama Anime" required/>
			</div>
			<div class="form-group">
				<input type="text" name="Form_Alternatif" id="Form_Alternatif" class="form-control wow fadeInUp" placeholder="Nama Alternatif"/>
			</div>
			<div class="form-group">
				<input type="text" name="Form_Kategori" id="Form_Kategori" class="form-control wow fadeInUp" placeholder="Kategori" required/>
			</div>
			<div class="form-group">
				<textarea name="Form_Link_Youtube" rows="5" cols="20" id="Form_Link_Youtube" class="form-control input-message wow fadeInUp"  placeholder="Link Playlist Youtube" required></textarea>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
		</div>
	  </form>
    </div>
  </div>
</div>