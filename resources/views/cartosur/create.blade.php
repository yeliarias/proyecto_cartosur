<form action="{{ url('/cartosur') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nam"> Carta N°</label>
    <input type="text" name="nam" id="nam">
    <br>
    <label for="fna"> Nombre </label>
    <input type="text" name="fna" id="fna">
    <br>
    <label for="dm_cph"> Huso </label>
    <select required name="dm_cph" type="int" id="dm_cph">
        <option selected>Seleccione...</option>
        <option value="2201">18</option>
        <option value="2202">19</option>
        <option value="2203">20</option>
    </select>
    <br>
    <label for="nor_mag"> Norte Magnetico </label>
    <input type="text" name="nor_mag" id="nor_mag">
    <br>
    <label for="nor_cua"> Norte Cuadricular </label>
    <input type="text" name="nor_cua" id="nor_cua">
    <br>
    <label for="dec_mag"> Declinación magnetica </label>
    <input type="text" name="dec_mag" id="dec_mag">
    <br>
    <label for="cen_car"> Centro de la Carta </label>
    <input type="text" name="cen_car" id="cen_car">
    <br>
    <label for="var_anual"> Variación Anual</label>
    <input type="text" name="var_anual" id="var_anual">
    <br>
    <label for="date_toma"> Fecha de Toma </label>
    <input type="text" name="date_toma" id="date_toma">
    <br>
    <label for="date_edic"> Fecha de Edición </label>
    <input type="text" name="date_edic" id="date_edic">
    <br>
    <label for="sag"> Responsable </label>
    <input type="text" name="sag" id="sag">
    <br>
    <label for="txt"> Observaciones </label>
    <input type="text" name="txt" id="txt">
    <br>
    <input type="submit" value="registrar">
</form>
