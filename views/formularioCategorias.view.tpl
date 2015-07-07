<form action="index.php?page=categorias{{if ctgcod}}&cod={{ctgcod}} {{endif ctgcod}}" method="post">
  <label for="txtCtgDsc">Descripcion</label>
  <input type="text" name="txtCtgDsc" id="txtCtgDsc" value="{{if ctgdsc}} {{ctgdsc}} {{endif ctgdsc}}" placeholder="Descripcion Categoria"/>
<label for="cmbCtgEst">Estado</label>
  <select name="cmbCtgEst">
    <option value="ACT"  selected >Activo</option>
    <option value="INA" {{if ctgest}} selected {{endif ctgest}}>Inactivo</option>
  </select>



  {{if ingresar}}
  <input type="submit" name="btnIngresar" value="Ingresar">
  {{endif ingresar}}

  {{if actualizar}}
  <input type="submit" name="btnActualizar" value="Actualizar">
  {{endif actualizar}}

  {{if eliminar}}
  <input type="submit" name="btnEliminar" value="Eliminar">
  {{endif eliminar}}
</form>
