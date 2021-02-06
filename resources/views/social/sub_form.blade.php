<div class="mb-3">
    <label for="label" class="form-label">Etiqueta</label>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Redes sociales disponibles</label>
        <select name="social_selec" class="form-control" id="social_selec">
          <option value="1" selected="selected">Youtube</option>
          <option value="2">Twitter</option>
          <option value="3">Instagram</option>
          <option value="4">Facebook</option>
          <option value="5">Whatsapp</option>
          <option value="6">Spotify</option>
        </select>
      </div>
</div>
<div class="mb-3">TU URL:
    <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $social->url ?? "") }}" placeholder="https://my.website.com">
</div>  