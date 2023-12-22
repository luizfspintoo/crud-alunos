function excluirAluno(id) {
  const confirma = confirm("Deseja excluir aluno");
  if (confirma) {
    location.href = '/alunos?excluir=1&id=' + id;
  }
}