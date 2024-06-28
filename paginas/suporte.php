<div class="container">
    <h2 class="text-center">Entre em Contato</h2>
  
    <form class="suporte" method="post">
        <div class="contato">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

            <label for="telefone">Telefone (opcional):</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone">
        </div>

        <div class="assunto">
            <label for="assunto">Assunto da Mensagem:</label>
            <select id="assunto" name="assunto" required>
                <option value="duvida">Dúvida sobre produto/serviço</option>
                <option value="reclamacao">Reclamação</option>
                <option value="sugestao">Sugestão</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="mensagem">
            <label for="mensagem">Descrição da Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Descreva sua mensagem" required></textarea>
        </div>

        <div class="anexo">
            <label for="anexo">Anexar Arquivo (opcional):</label>
            <input type="file" id="anexo" name="anexo">
        </div>

        <button type="submit">Enviar Mensagem</button>
    </form>