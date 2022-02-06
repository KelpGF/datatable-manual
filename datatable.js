let pagina_atual = 1;
let qtd_paginas = 0;
let qtd_registros_pagina = 10;
let dados_datatable;
let pesquisa_datatable = {};
let id_nav_paginacao = "paginacao_datatable";
let headers_datatable = [];

function gerarPaginacaoDataTable() {
    let select_paginacao_datatable = ``;
    for (let index = 1; index <= qtd_paginas; index++) {
        select_paginacao_datatable += `
            <option value='${index}' ${index == pagina_atual ? "selected" : ""}>
                ${index}
            </option>
        `;
    }
    $("#select-paginacao_datatable").html(select_paginacao_datatable);

    const anterior_disabled = (pagina_atual < 2) ? "disabled" : "";
    const prox_disabled = (qtd_paginas == 0 || pagina_atual > qtd_paginas-1) ? "disabled" : "";

    const onClick = (pagina, disabled) => {
        return `onClick="mudarPaginaDataTable(${pagina}, '${disabled}')"`;
    };

    let inicio_paginacao = 0;
    let fim_paginacao = qtd_paginas;

    if (qtd_paginas > 10) {
        inicio_paginacao = Number(pagina_atual)-5;
        fim_paginacao = Number(pagina_atual)+5;

        
        if (inicio_paginacao < 0) {
            fim_paginacao += inicio_paginacao*(-1)
            inicio_paginacao = 0;
        }
        if (fim_paginacao > qtd_paginas) {
            inicio_paginacao += fim_paginacao - qtd_paginas;
            fim_paginacao = qtd_paginas;
        }
    }

    let paginacao = `
                <li class="page-item ${anterior_disabled} elemento-datatable" ${onClick(Number(pagina_atual)-1, anterior_disabled)}>
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
    `;

    for (let index = inicio_paginacao; index < fim_paginacao; index++) {
        let numero_pagina = index+1;

        paginacao += (pagina_atual == numero_pagina) ?
                `<li class="page-item active elemento-datatable" aria-current="page">` : 
                `<li class="page-item elemento-datatable" ${onClick(numero_pagina, "")}>`;

        paginacao += `
                    <a class="page-link" href="#">
                        ${numero_pagina}
                    </a>
                </li>
        `;
    }

    paginacao += `
                <li class="page-item ${prox_disabled} elemento-datatable" ${onClick(Number(pagina_atual)+1, prox_disabled)}>
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
    `;

    $("#"+id_nav_paginacao).html(paginacao);
}

function pegarDadosDataTable(headers) {
    if (headers_datatable.length == 0) {
        let html_headers_table = ``;

        for (header of headers) {
            html_headers_table += `
                <th>
                    ${header.texto} 
                    <button class="btn btn-outline-dark pr-0">
                        <span
                            onClick="ordenarDadosDataTable('${header.valor}', true)"
                        >
                            &#9652;
                        </span>
                    </button>
                    <button class="btn btn-outline-dark pr-0">
                        <span
                            onClick="ordenarDadosDataTable('${header.valor}', false)"
                        >
                            &#9662;
                        </span>
                    </button>
                </th>
            `;
        }

        $("#datatable thead").html(html_headers_table);
    }
    headers_datatable = headers;
    pesquisa_datatable.pagina_atual = pagina_atual;
    pesquisa_datatable.qtd_registros_pagina = qtd_registros_pagina;

    $(".elemento-datatable").addClass("disabled").prop("disabled", true);
    $(".carregamento-datatable").show();
    $("#datatable tbody").html("");
    $("#"+id_nav_paginacao).html("");

    $.get(link_dados_datatable, pesquisa_datatable, function(retorno) {
        const data = JSON.parse(retorno);

        dados_datatable = data.dados;

        gerarHtmlDataTable();
        
        $(".carregamento-datatable").hide();
        $(".elemento-datatable").removeClass("disabled").prop("disabled", false);

        qtd_paginas = Math.ceil(data.qtd_registros/qtd_registros_pagina);
        gerarPaginacaoDataTable();
    });
}

function gerarHtmlDataTable() {
    let tbody_datatable = ``;

    dados_datatable.map(registro => {
        tbody_datatable += `
            <tr>
        `;

        for (header of headers_datatable) {
            tbody_datatable += `
                <td>
                    ${header.tratamento(registro[header.valor])}
                </td>
            `;
        };

        if (acoes_datatable.length > 0) {
            tbody_datatable += `
                <td>
            `;
        }

        for (acao of acoes_datatable) {
            tbody_datatable += `
                    <button class="btn btn-sm btn-${acao.cor} text-white" title="${acao.texto}" 
                        onClick="${acao.funcao}(${registro.id})"
                    >
                        <i class="${acao.icone}"></i>
                    </button>
            `;
        }
        if (acoes_datatable && acoes_datatable.length > 0) {
            tbody_datatable += `
                </td>
            `;
        }
        tbody_datatable += `
            </tr>
        `;
    });

    $("#datatable tbody").html(tbody_datatable);
}

function mudarPaginaDataTable(nova_pagina, disabled) {
    if (disabled == 'disabled') return;

    pagina_atual = nova_pagina;

    pegarDadosDataTable(headers_datatable, );
}

function mudarQtdResgistroPagina(novo_qtd_registros_pagina) {
    qtd_registros_pagina = novo_qtd_registros_pagina;

    mudarPaginaDataTable("1", "");
}

function ordenarDadosDataTable(coluna, asc) {
    const dados_coluna = headers_datatable.find((dados) => (dados.valor == coluna));

    if (dados_coluna.tipo == 'string') {
        if (asc) dados_datatable.sort((a, b) => (a[coluna].localeCompare(b[coluna])));
        else dados_datatable.sort((a, b) => (b[coluna].localeCompare(a[coluna])));
    }

    if (dados_coluna.tipo == 'number') {
        if (asc) dados_datatable.sort((a, b) => (Number(a[coluna])-Number(b[coluna])));
        else dados_datatable.sort((a, b) => (Number(b[coluna])-Number(a[coluna])));
    }

    if (dados_coluna.tipo == 'date') {
        if (asc) dados_datatable.sort((a, b) => (new Date(a[coluna])-new Date(b[coluna])));
        else dados_datatable.sort((a, b) => (new Date(b[coluna])-new Date(a[coluna])));
    }

    gerarHtmlDataTable();
}
