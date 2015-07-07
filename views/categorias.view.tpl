<h2>Listado de Categorias</h2>
<a href="index.php?page=categorias&modo=INS">Agregar Categoria</a>
<table style="margin:2em; width:90%;">
  <tr>
    <th>
      Cod.
    </th>

    <th>
      Categoria
    </th>

    <th>
      Estado
    </th>
    <th>

    </th>
  </tr>
  {{foreach categorias}}
  <tr>
    <td>
      {{ctgcod}}
    </td>
    <td>

      {{ctgdsc}}
    </td>
    <td>
      {{ctgest}}
    </td>
    <td>
      <a href="index.php?page=categorias&modo=ACT&cod={{ctgcod}}">Actualizar</a> |
      <a href="index.php?page=categorias&modo=ELI&cod={{ctgcod}}">Eliminar</a>

    </td>
  </tr>
  {{endfor categorias}}
</table>
