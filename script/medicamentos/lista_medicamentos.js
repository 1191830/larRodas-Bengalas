export function listaMedicamentos() {
  btnCriarMedicamento()
  listarMedicamentos()

  function listarMedicamentos() {
    $.ajax({
      type: "GET",
      url: "/lar-dsos/php/medicamentos/buscar_medicamentos.php",
      async: true,
      data: {
        ativo : true,
      }
    }).then((data) => {
      preencherTabela(JSON.parse(data));
    });
  }

  function preencherTabela(result) {
    $.map(result.medicamentos, function (medicamento) {
      var markup = `<tr>
                            <td>${medicamento.id_medicamento}</td>
                            <td>${medicamento.nome}</td>
                            <td>${medicamento.principio}</td>
                            <td>${medicamento.marca}</td>
                            <td>${medicamento.dose}</td>
                            <td>${medicamento.tipo}</td>
                            <td> <a href="/lar-dsos/views/medicamentos/criar_medicamento.php?id=${medicamento.id_medicamento}&editar=true" class="btn btn-primary btn-xs btn-editar" ><i class="fa fa-pencil"></i></a>
                            <button type="submit" id="apagar" class="btn btn-danger btn-xs apagar" value="${medicamento.id_medicamento}"><i class="fa fa-trash-o "></i></button></td>
                          </tr>`;
      $(".tabela-medicamentos tbody").append(markup);
    });
  }

  function btnCriarMedicamento() {
    $("#criar_medicamento").click(function (e) {
      e.preventDefault();
      console.log("aqui");
      $("#container").load("/lar-dsos/views/medicamentos/criar_medicamento.php #main-content");
      window.history.replaceState({}, "", "/lar-dsos/views/medicamentos/criar_medicamento.php");
      location.reload();
    })
  }
}


