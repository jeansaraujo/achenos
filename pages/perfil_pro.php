<?php
include_once '../include/header.php';
?>
<div class="row">
    <div class="col">
        <p class="h2 text-center p-3 text-primary mt-3">Faça Seu Pefil Profissional</p>
    </div>
</div>

<?php if (isset($userReg)){ echo $userReg;} ?>

<div class="row">
    <div class="offset-3 col-6 justify-content-center mt-1">
        <form method="POST">
            <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
            <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
            <input type="tel" class="form-control" name="contato" placeholder="Contato" maxlength="14" required>
            <select class="form-control" aria-placeholder="Especialidades" required>
                <option value="espe">Especialidades</option>
                <option value="espe">Tecnico de Enfermagem</option>
                <option value="espe">Abastecedor de Caldei</option>
                <option value="espe">Abastecedor de Combustível de Aeronave</option>
                <option value="espe">Abatedor</option>
                <option value="espe">Abelheiro</option>
                <option value="espe">Abridor de Lã</option>
                <option value="espe">Acabador de Calcados</option>
                <option value="espe">Acabador de Embalagens (Flexíveis e Cartotecnicas)</option>
                <option value="espe">Acabador de Pedras</option>
                <option value="espe">Acafelador</option>
                <option value="espe">Açaizeiro</option>
                <option value="espe">Acepilhador de Metais</option>
                <option value="espe">Acompanhante de Idosos</option>
                <option value="espe">Açougueiro</option>
                <option value="espe">Acrobata</option>
                <option value="espe">Acupuntor</option>
                <option value="espe">Acupunturista</option>
                <option value="espe">Adestrador de Animais</option>
                <option value="espe">Administrador</option>
                <option value="espe">Administrador de Arquivos</option>
                <option value="espe">Administrador de Banco de Dados</option>
                <option value="espe">Administrador de Marketing</option>
                <option value="espe">Administrador Financeiro</option>
                <option value="espe">Administrador Público</option>
                <option value="espe">Adubador</option>
                <option value="espe">Advogado</option>
                <option value="espe">Aeromoça</option>
                <option value="espe">Afiador de Ferramentas</option>
                <option value="espe">Afinador de Instrumentos Musicais</option>
                <option value="espe">Agenciador de Cargas</option>
                <option value="espe">Agenciador de Propaganda</option>
                <option value="espe">Agenciador de Publicidade</option>
                <option value="espe">Agente Administrativo</option>
                <option value="espe">Agente Comunitário de Saúde</option>
                <option value="espe">Agente de Carga</option>
                <option value="espe">Agropecuarista</option>
                <option value="espe">Ajudante de Açougueiro</option>
                <option value="espe">Ajudante de Afiador</option>
                <option value="espe">Ajudante de Banhos (vidros)</option>
                <option value="espe">Ajudante de Carga e Descarga de Mercadoria</option>
                <option value="espe">Ajudante de Cozinha</option>
                <option value="espe">Ajudante de Eletricista</option>
                <option value="espe">Alfaiate</option>
                <option value="espe">Alimentador de Peixe</option>
                <option value="espe">Alinhador de Pneus</option>
                <option value="espe">Alinhador de Rodas</option>
                <option value="espe">Alugador</option>
                <option value="espe">Amaciador de Couros e Peles</option>
                <option value="espe">Ambientador</option>
                <option value="espe">Analista (psicanálise)</option>
                <option value="espe">Analista Administrativo</option>
                <option value="espe">Analista de Contabilidade</option>
                <option value="espe">Analista de Estudos Econômicos</option>
                <option value="espe">Analista de Marketing</option>
                <option value="espe">Analista de Rede</option>
                <option value="espe">Analista Econômico</option>
                <option value="espe">Anestesiologista</option>
                <option value="espe">Baba</option>
                <option value="espe">Balconista</option>
                <option value="espe">Banhista de Animais Domésticos</option>
                <option value="espe">Barman</option>
                <option value="espe">Bibliógrafo</option>
                <option value="espe">Bibliotecário</option>
                <option value="espe">Bilheteiro</option>
                <option value="espe">Biógrafo</option>
                <option value="espe">Biólogo</option>
                <option value="espe">Biomédico</option>
                <option value="espe">Boiadeiro</option>
                <option value="espe">Bombeiro</option>
                <option value="espe">Borracheiro</option>
                <option value="espe">Botânico</option>
                <option value="espe">Boxeador</option>
                <option value="espe">Cabeleireiro</option>
                <option value="espe">Caixa</option>
                <option value="espe">Camareira</option>
                <option value="espe">Camelô</option>
                <option value="espe">Caminhoneiro</option>
                <option value="espe">Carpinteiro</option>
                <option value="espe">Carpinteiro Auxiliar</option>
                <option value="espe">Carpinteiro Naval</option>
                <option value="espe">Carregador</option>
                <option value="espe">Carroceiro</option>
                <option value="espe">Caranguejeiro</option>
                <option value="espe">Carteiro</option>
                <option value="espe">Cartógrafo</option>
                <option value="espe">Castrador</option>
                <option value="espe">Cavador </option>
                <option value="espe">Caucheiro</option>
                <option value="espe">Cenógrafo</option>
                <option value="espe">Chacareiro</option>
                <option value="espe">Chefe Administrativo</option>
                <option value="espe">Chefe de Cozinha</option>
                <option value="espe">Chefe de Escritório</option>
                <option value="espe">Chefe de Orçamento</option>
                <option value="espe">Chofer</option>
                <option value="espe">Clarificador de Vinhos</option>
                <option value="espe">Coletor de Lixo</option>
                <option value="espe">Colunista</option>
                <option value="espe">Comentarista</option>
                <option value="espe">Comerciante</option>
                <option value="espe">Compositor de Texto</option>
                <option value="espe">Compositor de Imagens</option>
                <option value="espe">Condutor de Máquinas</option>
                <option value="espe">Condutor de Táxi</option>
                <option value="espe">Confeiteiro</option>
                <option value="espe">Consultor de Vendas</option>
                <option value="espe">Consultor de Viagem</option>
                <option value="espe">Consultor</option>
                <option value="espe">Contador</option>
                <option value="espe">Contabilista</option>
                <option value="espe">Controlador de Vôo</option>
                <option value="espe">Coordenador de Ensino</option>
                <option value="espe">Coordenador Escolar</option>
                <option value="espe">Coordenador Executivo</option>
                <option value="espe">Cortador de Vidros</option>
                <option value="espe">Costureiro</option>
                <option value="espe">Coveiro</option>
                <option value="espe">Cozinheiro</option>
                <option value="espe">Criador de Abelhas</option>
                <option value="espe">Criador de Animais</option>
                <option value="espe">Criador de Gado</option>
                <option value="espe">Criminalista</option>
                <option value="espe">Critico</option>
                <option value="espe">Cuidador de Idosos</option>
                <option value="espe">Decorador</option>
                <option value="espe">Defensor Publico</option>
                <option value="espe">Defumador</option>
                <option value="espe">Demolidor</option>
                <option value="espe">Dentista</option>
                <option value="espe">Desenhista</option>
                <option value="espe">Desenvolvedor</option>
                <option value="espe">Designer</option>
                <option value="espe">Desinfestador</option>
                <option value="espe">Destilador</option>
                <option value="espe">Detetive de Polícia</option>
                <option value="espe">Digitador</option>
                <option value="espe">Distribuidor</option>
                <option value="espe">Economista</option>
                <option value="espe">Editor</option>
                <option value="espe">Educador</option>
                <option value="espe">Eletricista</option>
                <option value="espe">Embalador</option>
                <option value="espe">Empacotador</option>
                <option value="espe">Empregada Doméstica</option>
                <option value="espe">Encaixotador</option>
                <option value="espe">Encanador</option>
                <option value="espe">Enfermeiro</option>
                <option value="espe">Engarrafador</option>
                <option value="espe">Engenheiro</option>
                <option value="espe">Escrivão</option>
                <option value="espe">Espelhador</option>
                <option value="espe">Farmacêutico</option>
                <option value="espe">Faxineiro</option>
                <option value="espe">Ferreiro</option>
                <option value="espe">Fiscal</option>
                <option value="espe">Forneiro</option>
                <option value="espe">Fotografo</option>
                <option value="espe">Frentista</option>
                <option value="espe">Garçom</option>
                <option value="espe">Gerente Administrativo e Financeiro</option>
                <option value="espe">Gerente Comercial</option>
                <option value="espe">Gerente</option>
                <option value="espe">Gestor</option>
                <option value="espe">Guarda de Segurança</option>
                <option value="espe">Guarda Florestal</option>
                <option value="espe">Guarda Ambiental</option>
                <option value="espe">Guarda-civil</option>
                <option value="espe">Guarda-costas</option>
                <option value="espe">Inspetor</option>
                <option value="espe">Instalador</option>
                <option value="espe">Instrutor</option>
                <option value="espe">Interprete</option>
                <option value="espe">Jardineiro</option>
                <option value="espe">Joalheiro</option>
                <option value="espe">Jornalista</option>
                <option value="espe">Legista</option>
                <option value="espe">Lixeiro</option>
                <option value="espe">Locutor</option>
                <option value="espe">Manobrista</option>
                <option value="espe">Maquiador</option>
                <option value="espe">Maquinista </option>
                <option value="espe">Marceneiro</option>
                <option value="espe">Massagista</option>
                <option value="espe">Mecânico</option>
                <option value="espe">Médico</option>
                <option value="espe">Mensageiro</option>
                <option value="espe">Mergulhador</option>
                <option value="espe">Montador</option>
                <option value="espe">Motorista</option>
                <option value="espe">Narrador</option>
                <option value="espe">Operador de Caixa</option>
                <option value="espe">Operador de Máquina</option>
                <option value="espe">Padeiro</option>
                <option value="espe">Pedreiro</option>
                <option value="espe">Perito Criminal</option>
                <option value="espe">Pescador</option>
                <option value="espe">Pintor</option>
                <option value="espe">Policial</option>
                <option value="espe">Porteiro</option>
                <option value="espe">Professor de Ensino Fundamental de Primeira a Quarta Séries</option>
                <option value="espe">Professor de Ensino Fundamental Nas Quatro Primeiras Séries</option>
                <option value="espe">Professor de Ensino Profissionalizante no Ensino de Nível Médio</option>
                <option value="espe">Professor de Ensino Superior</option>
                <option value="espe">Programador</option>
                <option value="espe">Radiologista</option>
                <option value="espe">Recepcionista</option>
                <option value="espe">Recreador</option>
                <option value="espe">Relações Publicas</option>
                <option value="espe">Revisor</option>
                <option value="espe">Revisor Gráfico</option>
                <option value="espe">Sambista</option>
                <option value="espe">Secretário(A)</option>
                <option value="espe">Segurança Comunitário</option>
                <option value="espe">Segurança de Evento</option>
                <option value="espe">Segurança Pessoal</option>
                <option value="espe">Serrador</option>
                <option value="espe">Servente de Pedreiro</option>
                <option value="espe">Sorveteiro</option>
                <option value="espe">Superintendente Administrativo e Financeiro</option>
                <option value="espe">Supervisor Administrativo</option>
                <option value="espe">Supervisor</option>
                <option value="espe">Técnico Ambiental</option>
                <option value="espe">Técnico Agrícola</option>
                <option value="espe">Técnico Analista</option>
                <option value="espe">Técnico de Análise Química</option>
                <option value="espe">Técnico de Áudio (rádio)</option>
                <option value="espe">Técnico de Artes Gráficas</option>
                <option value="espe">Técnico de Contabilidade</option>
                <option value="espe">Técnico de Enfermagem</option>
                <option value="espe">Técnico de Equipamentos Elétricos</option>
                <option value="espe">Técnico de Indústria Eletrônica</option>
                <option value="espe">Técnico de Laboratório</option>
                <option value="espe">Técnico de Manutenção</option>
            </select>
            <select class="form-control" aria-placeholder="Especialidades">
                <option value="espe">Escolha sua 2º Especialidades</option>
                <option value="espe">Tecnico de Enfermagem</option>
                <option value="espe">Abastecedor de Caldei</option>
                <option value="espe">Abastecedor de Combustível de Aeronave</option>
                <option value="espe">Abatedor</option>
                <option value="espe">Abelheiro</option>
                <option value="espe">Abridor de Lã</option>
                <option value="espe">Acabador de Calcados</option>
                <option value="espe">Acabador de Embalagens (Flexíveis e Cartotecnicas)</option>
                <option value="espe">Acabador de Pedras</option>
                <option value="espe">Acafelador</option>
                <option value="espe">Açaizeiro</option>
                <option value="espe">Acepilhador de Metais</option>
                <option value="espe">Acompanhante de Idosos</option>
                <option value="espe">Açougueiro</option>
                <option value="espe">Acrobata</option>
                <option value="espe">Acupuntor</option>
                <option value="espe">Acupunturista</option>
                <option value="espe">Adestrador de Animais</option>
                <option value="espe">Administrador</option>
                <option value="espe">Administrador de Arquivos</option>
                <option value="espe">Administrador de Banco de Dados</option>
                <option value="espe">Administrador de Marketing</option>
                <option value="espe">Administrador Financeiro</option>
                <option value="espe">Administrador Público</option>
                <option value="espe">Adubador</option>
                <option value="espe">Advogado</option>
                <option value="espe">Aeromoça</option>
                <option value="espe">Afiador de Ferramentas</option>
                <option value="espe">Afinador de Instrumentos Musicais</option>
                <option value="espe">Agenciador de Cargas</option>
                <option value="espe">Agenciador de Propaganda</option>
                <option value="espe">Agenciador de Publicidade</option>
                <option value="espe">Agente Administrativo</option>
                <option value="espe">Agente Comunitário de Saúde</option>
                <option value="espe">Agente de Carga</option>
                <option value="espe">Agropecuarista</option>
                <option value="espe">Ajudante de Açougueiro</option>
                <option value="espe">Ajudante de Afiador</option>
                <option value="espe">Ajudante de Banhos (vidros)</option>
                <option value="espe">Ajudante de Carga e Descarga de Mercadoria</option>
                <option value="espe">Ajudante de Cozinha</option>
                <option value="espe">Ajudante de Eletricista</option>
                <option value="espe">Alfaiate</option>
                <option value="espe">Alimentador de Peixe</option>
                <option value="espe">Alinhador de Pneus</option>
                <option value="espe">Alinhador de Rodas</option>
                <option value="espe">Alugador</option>
                <option value="espe">Amaciador de Couros e Peles</option>
                <option value="espe">Ambientador</option>
                <option value="espe">Analista (psicanálise)</option>
                <option value="espe">Analista Administrativo</option>
                <option value="espe">Analista de Contabilidade</option>
                <option value="espe">Analista de Estudos Econômicos</option>
                <option value="espe">Analista de Marketing</option>
                <option value="espe">Analista de Rede</option>
                <option value="espe">Analista Econômico</option>
                <option value="espe">Anestesiologista</option>
                <option value="espe">Baba</option>
                <option value="espe">Balconista</option>
                <option value="espe">Banhista de Animais Domésticos</option>
                <option value="espe">Barman</option>
                <option value="espe">Bibliógrafo</option>
                <option value="espe">Bibliotecário</option>
                <option value="espe">Bilheteiro</option>
                <option value="espe">Biógrafo</option>
                <option value="espe">Biólogo</option>
                <option value="espe">Biomédico</option>
                <option value="espe">Boiadeiro</option>
                <option value="espe">Bombeiro</option>
                <option value="espe">Borracheiro</option>
                <option value="espe">Botânico</option>
                <option value="espe">Boxeador</option>
                <option value="espe">Cabeleireiro</option>
                <option value="espe">Caixa</option>
                <option value="espe">Camareira</option>
                <option value="espe">Camelô</option>
                <option value="espe">Caminhoneiro</option>
                <option value="espe">Carpinteiro</option>
                <option value="espe">Carpinteiro Auxiliar</option>
                <option value="espe">Carpinteiro Naval</option>
                <option value="espe">Carregador</option>
                <option value="espe">Carroceiro</option>
                <option value="espe">Caranguejeiro</option>
                <option value="espe">Carteiro</option>
                <option value="espe">Cartógrafo</option>
                <option value="espe">Castrador</option>
                <option value="espe">Cavador </option>
                <option value="espe">Caucheiro</option>
                <option value="espe">Cenógrafo</option>
                <option value="espe">Chacareiro</option>
                <option value="espe">Chefe Administrativo</option>
                <option value="espe">Chefe de Cozinha</option>
                <option value="espe">Chefe de Escritório</option>
                <option value="espe">Chefe de Orçamento</option>
                <option value="espe">Chofer</option>
                <option value="espe">Clarificador de Vinhos</option>
                <option value="espe">Coletor de Lixo</option>
                <option value="espe">Colunista</option>
                <option value="espe">Comentarista</option>
                <option value="espe">Comerciante</option>
                <option value="espe">Compositor de Texto</option>
                <option value="espe">Compositor de Imagens</option>
                <option value="espe">Condutor de Máquinas</option>
                <option value="espe">Condutor de Táxi</option>
                <option value="espe">Confeiteiro</option>
                <option value="espe">Consultor de Vendas</option>
                <option value="espe">Consultor de Viagem</option>
                <option value="espe">Consultor</option>
                <option value="espe">Contador</option>
                <option value="espe">Contabilista</option>
                <option value="espe">Controlador de Vôo</option>
                <option value="espe">Coordenador de Ensino</option>
                <option value="espe">Coordenador Escolar</option>
                <option value="espe">Coordenador Executivo</option>
                <option value="espe">Cortador de Vidros</option>
                <option value="espe">Costureiro</option>
                <option value="espe">Coveiro</option>
                <option value="espe">Cozinheiro</option>
                <option value="espe">Criador de Abelhas</option>
                <option value="espe">Criador de Animais</option>
                <option value="espe">Criador de Gado</option>
                <option value="espe">Criminalista</option>
                <option value="espe">Critico</option>
                <option value="espe">Cuidador de Idosos</option>
                <option value="espe">Decorador</option>
                <option value="espe">Defensor Publico</option>
                <option value="espe">Defumador</option>
                <option value="espe">Demolidor</option>
                <option value="espe">Dentista</option>
                <option value="espe">Desenhista</option>
                <option value="espe">Desenvolvedor</option>
                <option value="espe">Designer</option>
                <option value="espe">Desinfestador</option>
                <option value="espe">Destilador</option>
                <option value="espe">Detetive de Polícia</option>
                <option value="espe">Digitador</option>
                <option value="espe">Distribuidor</option>
                <option value="espe">Economista</option>
                <option value="espe">Editor</option>
                <option value="espe">Educador</option>
                <option value="espe">Eletricista</option>
                <option value="espe">Embalador</option>
                <option value="espe">Empacotador</option>
                <option value="espe">Empregada Doméstica</option>
                <option value="espe">Encaixotador</option>
                <option value="espe">Encanador</option>
                <option value="espe">Enfermeiro</option>
                <option value="espe">Engarrafador</option>
                <option value="espe">Engenheiro</option>
                <option value="espe">Escrivão</option>
                <option value="espe">Espelhador</option>
                <option value="espe">Farmacêutico</option>
                <option value="espe">Faxineiro</option>
                <option value="espe">Ferreiro</option>
                <option value="espe">Fiscal</option>
                <option value="espe">Forneiro</option>
                <option value="espe">Fotografo</option>
                <option value="espe">Frentista</option>
                <option value="espe">Garçom</option>
                <option value="espe">Gerente Administrativo e Financeiro</option>
                <option value="espe">Gerente Comercial</option>
                <option value="espe">Gerente</option>
                <option value="espe">Gestor</option>
                <option value="espe">Guarda de Segurança</option>
                <option value="espe">Guarda Florestal</option>
                <option value="espe">Guarda Ambiental</option>
                <option value="espe">Guarda-civil</option>
                <option value="espe">Guarda-costas</option>
                <option value="espe">Inspetor</option>
                <option value="espe">Instalador</option>
                <option value="espe">Instrutor</option>
                <option value="espe">Interprete</option>
                <option value="espe">Jardineiro</option>
                <option value="espe">Joalheiro</option>
                <option value="espe">Jornalista</option>
                <option value="espe">Legista</option>
                <option value="espe">Lixeiro</option>
                <option value="espe">Locutor</option>
                <option value="espe">Manobrista</option>
                <option value="espe">Maquiador</option>
                <option value="espe">Maquinista </option>
                <option value="espe">Marceneiro</option>
                <option value="espe">Massagista</option>
                <option value="espe">Mecânico</option>
                <option value="espe">Médico</option>
                <option value="espe">Mensageiro</option>
                <option value="espe">Mergulhador</option>
                <option value="espe">Montador</option>
                <option value="espe">Motorista</option>
                <option value="espe">Narrador</option>
                <option value="espe">Operador de Caixa</option>
                <option value="espe">Operador de Máquina</option>
                <option value="espe">Padeiro</option>
                <option value="espe">Pedreiro</option>
                <option value="espe">Perito Criminal</option>
                <option value="espe">Pescador</option>
                <option value="espe">Pintor</option>
                <option value="espe">Policial</option>
                <option value="espe">Porteiro</option>
                <option value="espe">Professor de Ensino Fundamental de Primeira a Quarta Séries</option>
                <option value="espe">Professor de Ensino Fundamental Nas Quatro Primeiras Séries</option>
                <option value="espe">Professor de Ensino Profissionalizante no Ensino de Nível Médio</option>
                <option value="espe">Professor de Ensino Superior</option>
                <option value="espe">Programador</option>
                <option value="espe">Radiologista</option>
                <option value="espe">Recepcionista</option>
                <option value="espe">Recreador</option>
                <option value="espe">Relações Publicas</option>
                <option value="espe">Revisor</option>
                <option value="espe">Revisor Gráfico</option>
                <option value="espe">Sambista</option>
                <option value="espe">Secretário(A)</option>
                <option value="espe">Segurança Comunitário</option>
                <option value="espe">Segurança de Evento</option>
                <option value="espe">Segurança Pessoal</option>
                <option value="espe">Serrador</option>
                <option value="espe">Servente de Pedreiro</option>
                <option value="espe">Sorveteiro</option>
                <option value="espe">Superintendente Administrativo e Financeiro</option>
                <option value="espe">Supervisor Administrativo</option>
                <option value="espe">Supervisor</option>
                <option value="espe">Técnico Ambiental</option>
                <option value="espe">Técnico Agrícola</option>
                <option value="espe">Técnico Analista</option>
                <option value="espe">Técnico de Análise Química</option>
                <option value="espe">Técnico de Áudio (rádio)</option>
                <option value="espe">Técnico de Artes Gráficas</option>
                <option value="espe">Técnico de Contabilidade</option>
                <option value="espe">Técnico de Enfermagem</option>
                <option value="espe">Técnico de Equipamentos Elétricos</option>
                <option value="espe">Técnico de Indústria Eletrônica</option>
                <option value="espe">Técnico de Laboratório</option>
                <option value="espe">Técnico de Manutenção</option>
            </select>
            <input type="text" class="form-control" name="experiencias" placeholder="Experiencias" required>
            <input type="text" class="form-control" name="descricao" placeholder="Fale sobre você" maxlength="200" required>
            <input type="file" class="btn btn-outline-primary btn-lg mt-2" placeholder="Seu Curriculo">
            <button name="text" class="btn btn-outline-primary btn-lg mt-2">
                Salvar
            </button>
        </form>
    </div>
</div>