<div id="center">
	<div style="background-color: #003f66; background-image: url(assets/images/title_bg.png); background-repeat: repeat-x;">
        <div id="motto">
            <img src="assets/images/submit-project.png" />
        </div>
    </div>    
   	<div id="submit-panel">
        <div>
        	<form method="post" action="project/submit/project">
        	<div class="q">Apa yang ingin kamu buat?</div>
            <div>Ide kamu, lokasi, tujuan, hasil akhir, perkembangan, tanggal eksekusi, dll.</div>
            <br />
            <div><textarea name="ide" rows="10" cols="70"></textarea></div>
            <br /><br />
            <div class="q">Hadiah apa yang ingin kamu berikan?</div>
            <div>Apa yang ingin kamu berikan ke pendukung? Berapa nilai donasi untuk masing-masing<br /> hadiah?</div>
            <br />
            <div><textarea name="reward" rows="10" cols="70"></textarea></div>
            <br /><br />
            <div class="q">Dimana kami bisa mendapatkan informasi lebih lanjut?</div>
            <div >Berikan alamat website, artikel, facebook, twitter, dll.</div>
            <br />
            <div><textarea name="address" rows="10" cols="70"></textarea></div>
            <br /><br />
            <div class="q">Berapa jumlah dana yang kamu butuhkan?</div>
            <br />
            <div>
            <select name="" class="select">
            	<option>Pilih jumlah</option>
                <option>Kurang dari Rp 10.000.000,-</option>
                <option>Rp 10.000.000,- sampai Rp 25.000.000,-</option>
                <option>Rp 25.000.000,- sampai Rp 50.000.000,-</option>
                <option>Rp 50.000.000,- sampai Rp 75.000.000,-</option>
                <option>Rp 75.000.000,- sampai Rp 100.000.000,-</option>
                <option>Lebih dari Rp 100.000.000,-</option>
            </select>
            </div>
            <br /><br />
            <div style="color: #000000">Perhatikan bahwa ini bukan halaman pembuatan proyek yang sebenarnya. Halaman ini  <br />  hanya bisa dilihat oleh staf Chordeo. Kami akan segera mereview dan menghubungi <br />kamu.</div>
            <br />

            <!--
            <input type="image" src="assets/images/project_submit.png"  onmouseover="javascript:this.src='assets/images/project_submit_hover.png';" onmouseout="javascript:this.src='assets/images/project_submit.png';"> 
            -->
            <input type="submit" name="Submit" value="SUBMIT PROJECT" class="button_submit" />
            </form>
            <br /><br />            
        </div>
    </div>      
</div>
