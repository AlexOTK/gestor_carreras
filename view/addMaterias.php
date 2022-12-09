<div class="container-fluid mb-3">
    <div class="container">
        <form method="post" action="model/materiasAdd.php">
            <table class="grid" cellspacing="0">
                <tbody class="addMat">
                    <tr>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Clave" name="clave" /></td>
                        <td colspan="6"><input type="text" class="form-control" placeholder="Materia" name="materia" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" class="form-control" placeholder="NRC" name="arc" /></td>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Creditos"
                                name="creditos" /></td>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Edificio"
                                name="edificio" /></td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Aula" name="aula" /></td>
                        <td colspan="8"><input type="text" class="form-control" placeholder="Docente" name="docente" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Hora de entrada"
                                name="hEntrada" /></td>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Hora de salida"
                                name="hSalida" /></td>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Dia" name="dia" /></td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td colspan="4"><input type="text" class="form-control" placeholder="Seccion" name="seccion" />
                        </td>
                        <td colspan="4"></td>
                    </tr>
                </tbody>
            </table>
            <table class="grid" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="4"></td>
                        <td colspan="4"></td>
                        <td colspan="4" class="mt-4 p-5"><input type="submit" class="submit-button" value="Enviar"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>