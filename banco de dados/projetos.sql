-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 14-Jul-2020 às 20:51
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_transparencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

DROP TABLE IF EXISTS `projetos`;
CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Projeto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nome` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Assunto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anotacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `Projeto`, `Nome`, `Assunto`, `Anotacao`) VALUES
(1, '70/20', 'FERNANDA MORENO DA SILVA', 'Instituição da CAMPANHA \"Salvem as Aves\" e outras providências.', 'Em trâmite'),
(2, '69/20', 'DIEGO DE AMORIM MARTINS', 'Obrigatoriedade aos estabelecimentos comerciais, ou de serviços, da colocação de frascos de álcool gel, ou líquido 70º, ao lado das máquinas de cartões de pagamento e outras providências.', 'Em trâmite'),
(3, '68/20', 'JORGE RODRIGO VALVERDE SANTANA', 'Obrigatoriedade as operadoras de aplicativos de entrega, bem como as de transporte de passageiros, a manter base de apoio aos seus colaboradores.', 'Em trâmite'),
(4, '67/20', 'PREFEITO', 'Criação e DENOMINAÇÃO do Centro de Educação Infantil Municipal \"CEIM Anésio Urbano\".', 'Em trâmite'),
(5, '66/20', 'PREFEITO', 'Ratificação do CONTRATO DE REPASSE celebrado com o Ministério do Desenvolvimento Regional/CEF, para a finalidade que especifica.', 'Em trâmite'),
(6, '65/20', 'RINALDO SADAO SAKAI', 'Instituição da \" SEMANA de Informação, Conscientização e Combate as Notícias Falsas - Fake News \".', 'Em trâmite'),
(7, '64/20', 'DIEGO DE AMORIM MARTINS', 'Implementação de sistema de alerta, via SMS, de casos de Covid-19 nas proximidades das residências dos munícipes.', 'Em trâmite'),
(8, '63/20', 'FERNANDA MORENO DA SILVA', 'Obrigatoriedade das farmácias e drogarias a disponibilizarem urnas receptoras para os produtos que especifica e dá outras providências.', 'Em trâmite'),
(9, '62/20', 'FERNANDA MORENO DA SILVA', 'Instituição do \"DIA do Médico Veterinário\" no Município.', 'Em trâmite'),
(10, '61/20', 'MAURO LUIS CLAUDINO DE ARAUJO', 'DENOMINAÇÃO de próprio público \"Complexo Esportivo Pastor Alex Sandro de Souza Marques\".', 'Aprovado'),
(11, '60/20', 'FRANCISCO MOACIR BEZERRA DE MELO FILHO', 'DENOMINAÇÃO de próprio público municipal \"Quadra de Futebol Society Edson de Oliveira\".', 'Em trâmite'),
(12, '59/20', 'DIEGO DE AMORIM MARTINS', 'Implementação de Visitas Virtuais diárias para pacientes de Covid-19 internados nas unidades hospitalares no município, na forma que especifica e outras providências.', 'Em trâmite'),
(13, '58/20', 'RINALDO SADAO SAKAI , PROTÁSSIO RIBEIRO NOGUEIRA , EDSON DOS SANTOS , DIEGO DE AMORIM MARTINS , CLAUDIO YUKIO MIYAKE , ANTONIO LINO DA SILVA , BENEDITO FAUSTINO TAUBATÉ GUIMARÃES , CAIO CESAR MACHADO DA CUNHA , CARLOS EVARISTO DA SILVA , CLODOALDO APARECIDO DE MORAES , FERNANDA MORENO DA SILVA , FRANCISCO MOACIR BEZERRA DE MELO FILHO , IDUIGUES FERREIRA MARTINS , JEAN CARLOS SOARES LOPES , JORGE RODRIGO VALVERDE SANTANA , JOSE ANTONIO CUCO PEREIRA , JOSÉ FRANCIMÁRIO VIEIRA DE MACEDO , MARCOS PAULO TAVARES FURLAN , MAURO DE ASSIS MARGARIDO , MAURO LUIS CLAUDINO DE ARAUJO , OTTO FÁBIO FLORES DE REZENDE E PÉRICLES RAMALHO BAUAB', 'Fixação dos subsídios do Prefeito, Vice-Prefeito e Secretários Municipais, para a Legislatura a ser iniciada em 1º janeiro de 2021 e outras providências', 'Aprovado'),
(14, '57/20', 'PREFEITO', 'Normas para obtenção de Alvará de Licença de Localização e Funcionamento para a realização de exposições e comercializações eventuais, nas dependências do Mercado Municipal do Produtor.', 'Em trâmite'),
(15, '56/20', 'EDSON DOS SANTOS', 'Instituição de CAMPANHA de conscientização da violência contra a pessoa idosa \"Junho Violeta\".', 'Em trâmite'),
(16, '55/20', 'CAIO CESAR MACHADO DA CUNHA', 'Transparência nos estudos das propostas e procedimentos adotados para a retomada das atividades econômicas suspensas em virtude do coronavírus.', 'Em trâmite'),
(17, '54/20', 'OTTO FÁBIO FLORES DE REZENDE', 'Disponibilização de ASSISTÊNCIA MÉDICA PSICOLÓGICA aos munícipes afetados emocionalmente em pela pandemia do Covid-19.', 'Aprovado'),
(18, '53/20', 'RINALDO SADAO SAKAI', 'Proibição de acesso à cargos, empregos ou funções públicas municipais por agressores de mulheres e indivíduos considerados vulneráveis.', 'Em trâmite'),
(19, '52/20', 'PREFEITO', 'Autorização ao Executivo para ALIENAÇÃO do IMÓVEL municipal, que especifica, mediante licitação.', 'Em trâmite'),
(20, '51/20', 'PROTÁSSIO RIBEIRO NOGUEIRA', 'Declaração de UTILIDADE PÚBLICA do Clube Sociedade Esportiva Vila da Prata.', 'Aprovado'),
(21, '50/20', 'EDSON DOS SANTOS E MAURO LUIS CLAUDINO DE ARAUJO', 'Obrigatoriedade da realização de TESTE RÁPIDO para a Covid-19 nas unidades de pronto atendimento 24 horas e outras providências.', 'Aprovado'),
(22, '49/20', 'JEAN CARLOS SOARES LOPES', 'Obrigatoriedade de instalação de dispensadores de álcool em gel nos ônibus de transporte público e dependências de terminais rodoviários.', 'Em trâmite'),
(23, '48/20', 'PREFEITO', 'Abertura de CRÉDITO ADICIONAL em favor da Secretaria Municipal de Cultura e outras providências.', 'Aprovado'),
(24, '47/20', 'PREFEITO', 'Ratificação de CONVÊNIO celebrado com a Secretaria Estadual de Turismo para a finalidade que específica, e outras providências.', 'Aprovado'),
(25, '46/20', 'PREFEITO', 'Antecipação do feriado municipal que especifica, e outras providências.', 'Lei nº 7.572/20'),
(26, '45/20', 'CAIO CESAR MACHADO DA CUNHA', 'Instituição de medidas, a serem adotadas por hipermercados, supermercados e demais estabelecimentos comerciais abertos ao público enquanto perdurar o enfrentamento à COVID-19, visando reduzir a circulação e aglomeração de pessoas e a disseminação do vírus.', 'Em trâmite'),
(27, '44/20', 'CAIO CESAR MACHADO DA CUNHA', 'Instituição de medidas de incremento da transparência das informações relativas à pandemia da COVID-19, e outras providências.', 'Em trâmite'),
(28, '43/20', 'CAIO CESAR MACHADO DA CUNHA', 'Obrigatoriedade as agências bancárias de orientarem clientes nas filas de atendimento quanto ao distanciamento social.', 'Aprovado'),
(29, '42/20', 'CAIO CESAR MACHADO DA CUNHA', 'Obrigatoriedade as agências bancárias de realizarem limpeza frequente dos terminais de autoatendimento, disponibilizarem álcool em gel aos clientes, e outras providências', 'Aprovado'),
(30, '41/20', 'PREFEITO', 'Diretrizes Orçamentárias para o próximo exercício  LDO 2021.', 'Em trâmite'),
(31, '40/20', 'RINALDO SADAO SAKAI E FERNANDA MORENO DA SILVA', 'Proibição da fabricação e comercialização de produtos para repelir animais, em espaços externos às residências, que tenham capacidade de causar ferimentos nos mesmos.', 'Em trâmite'),
(32, '39/20', 'JORGE RODRIGO VALVERDE SANTANA', 'Medidas de equilíbrio às empresas beneficiadas por isenções de tributos municipais visando manutenção do emprego, renda e sustentabilidade socioeconômica.', 'Em trâmite'),
(33, '38/20', 'CAIO CESAR MACHADO DA CUNHA', 'Revogação da Lei Municipal nº 7.423/18 (Ref.: autorização ao Executivo para contratar operação de crédito junto à Corporação Andina de Fomento).', 'Em trâmite'),
(34, '37/20', 'PREFEITO', 'Ratificação do CONTRATO celebrado com o Fundo Estadual de Recursos Hídricos - FEHIDRO para repasse de crédito.', 'Aprovado'),
(35, '36/20', 'PREFEITO', 'Autorização ao Executivo para celebrar CONVÊNIO com a Secretaria de Cultura e Economia Criativa, para as finalidades que especifica.', 'Aprovado'),
(36, '35/20', 'MAURO LUIS CLAUDINO DE ARAUJO E RINALDO SADAO SAKAI', 'Obrigatoriedade do uso de MÁSCARA de proteção no enfrentamento à COVID-19, na forma que específica, e outras providências.', 'Lei nº 7.569/20'),
(37, '34/20', 'JORGE RODRIGO VALVERDE SANTANA', 'Obrigatoriedade da aquisição de alimentos produzidos por produtores locais, para a merenda escolar da rede municipal de ensino.', 'Em trâmite'),
(38, '33/20', 'JORGE RODRIGO VALVERDE SANTANA', 'Fornecimento de alimentação aos alunos da rede pública municipal, durante a pandemia da Covid-19, na forma que especifica.', 'Em trâmite'),
(39, '32/20', 'CAIO CESAR MACHADO DA CUNHA', 'Incremento da TRANSPARÊNCIA na divulgação das despesas e atos administrativos praticados pelo Município no enfrentamento à COVID-19.', 'Lei nº 7.579/20'),
(40, '31/20', 'PREFEITO', 'Autorização de medidas excepcionais que especifica, em face da situação de emergência e estado de calamidade pública decorrentes da COVID-19.', 'Lei nº 7.568/20'),
(41, '30/20', 'MAURO DE ASSIS MARGARIDO', 'Obrigatoriedade do uso de dispositivos de reflexão (faixas refletivas) nos veículos de tração humana ou animal.', 'Em trâmite'),
(42, '29/20', 'PEDRO HIDEKI KOMURA', 'Inserção do EVENTO  Encontro Nacional do Fusca Clube  no Calendário Turístico das Festividades.', 'Aprovado'),
(43, '28/20', 'MARCOS PAULO TAVARES FURLAN', 'DENOMINAÇÃO de logradouro público ( Praça Teófanes Braga Fraga ) - código de logradouro 47.014.014.', 'Lei nº 7.580/20'),
(44, '27/20', 'MESA DIRETIVA', 'Fixação do índice para revisão da REMUNERAÇÃO dos SERVIDORES da Câmara Municipal.', 'Lei nº 7.566/20'),
(45, '26/20', 'PREFEITO', 'Fixação do índice para revisão da REMUNERAÇÃO dos SERVIDORES públicos municipais.', 'Lei nº 7.565/20'),
(46, '25/20', 'PREFEITO', 'Criação e DENOMINAÇÃO do Centro de Educação Infantil Municipal - CEIM Professor Dirceu do Valle', 'Lei nº 7.570/20'),
(47, '24/20', 'PÉRICLES RAMALHO BAUAB', 'Instalação de equipamento denominado ELIMINADOR DE AR na tubulação do sistema de abastecimento de água e dá outras providências', 'Em trâmite'),
(48, '23/20', 'PÉRICLES RAMALHO BAUAB', 'Instituição do \" DIA MUNICIPAL de Fomento e Difusão da Música Gospel \".', 'Em trâmite'),
(49, '22/20', 'CAIO CESAR MACHADO DA CUNHA', 'Obrigatoriedade, aos hospitais e maternidades, de fornecerem, aos pais ou responsáveis por recém-nascidos, treinamentos que especifica.', 'Em trâmite'),
(50, '21/20', 'FERNANDA MORENO DA SILVA E OTTO FÁBIO FLORES DE REZENDE', 'Proibição de fornecimento de PRODUTOS DE PLÁSTICO que específica, em restaurantes, bares e congêneres.', 'Em trâmite'),
(51, '20/20', 'EMERSON RONG', 'Reserva de ASSENTOS PREFERENCIAIS às pessoas portadoras do Transtorno do Espectro Autista no transporte público municipal.', 'Em trâmite'),
(52, '19/20', 'JOSÉ FRANCIMÁRIO VIEIRA DE MACEDO', 'DENOMINAÇÃO de via pública (Rua Eulália de Arruda Tobias), atual Rua Treze - código de logradouro nº 22.287-2', 'Lei nº 7.587/20'),
(53, '18/20', 'PREFEITO', 'ALTERAÇÃO da Lei nº 3.197/88 (Ref.: Utilidade Pública da Associação Beneficente Vila Nova União).', 'Lei nº 7.581/20'),
(54, '17/20', 'JORGE RODRIGO VALVERDE SANTANA', 'Uso e aplicação de AGROTÓXICOS dentro do perímetro urbano do município.', 'Em trâmite'),
(55, '16/20', 'PREFEITO', 'Nova normatização dos SERVIÇOS FUNERÁRIOS e atividades desenvolvidas nos cemitérios municipais.', 'Em trâmite'),
(56, '15/20', 'PREFEITO', 'Ratificação de CONTRATO de REPASSE celebrado com Ministério do Desenvolvimento Regional e Caixa Econômica Federal, para implantação de obras de acessibilidade.', 'Lei nº 7.578/20'),
(57, '14/20', 'PREFEITO', 'Ratificação de CONTRATO de REPASSE celebrado com o Ministério do Desenvolvimento Regional e Caixa Econômica Federal para execução de ações de mobilidade urbana.', 'Lei nº 7.577/20'),
(58, '13/20', 'PREFEITO', 'Ratificação de CONTRATO de REPASSE celebrado com o Ministério do Desenvolvimento Regional e CEF, para execução de obras de recapeamento asfáltico.', 'Lei nº 7.576/20'),
(59, '12/20', 'PREFEITO', 'Ratificação de CONTRATO de REPASSE celebrado com o Ministério da Justiça e Segurança Pública e CEF, para construção de \"Centro Dia da Pessoa com Deficiência\".', 'Lei nº 7.575/20'),
(60, '11/20', 'PREFEITO', 'Ratificação de CONTRATO de REPASSE celebrado com o Ministério do Desenvolvimento Regional e CEF, para execução de obra de recapeamento asfáltico em rua da área central.', 'Lei nº 7.574/20'),
(61, '10/20', 'PREFEITO', 'Ratificação de CONVÊNIO celebrado com a Secretaria Nacional de Inclusão Social e Produtiva Urbana - SENISP e Secretaria Especial de Desenvolvimento Social - SEDS, para aquisição de veículo adaptado e ofertas de cursos de capacitação.', 'Lei nº 7.573/20'),
(62, '9/20', 'PREFEITO', 'Criação e DENOMINAÇÃO de Centro de Educação Infantil Municipal - CEIM \"Escritor Nelson Albissú\".', 'Lei nº 7.551/20'),
(63, '8/20', 'PREFEITO', 'Autorização ao Executivo para celebrar CONVÊNIO com o DER - Departamento de Estradas de Rodagem do Estado de São Paulo, para os fins que especifica.', 'Lei nº 7.583/20'),
(64, '7/20', 'PREFEITO', 'Autorização ao Executivo para celebrar CONVÊNIO com a Secretaria da Fazenda e Planejamento do Estado, para os fins que especifica.', 'Em trâmite'),
(65, '6/20', 'PREFEITO', 'ALTERAÇÃO da Lei nº 6.583/11 ( Ref.: notificação on-line de casos de violência e/ou exploração sexual de crianças e adolescentes ).', 'Lei nº 7.564/20'),
(66, '5/20', 'FERNANDA MORENO DA SILVA E DIEGO DE AMORIM MARTINS', 'Implementação do PROGRAMA \" Moeda Verde \" no Município, na forma que especifica.', 'Em trâmite'),
(67, '4/20', 'DIEGO DE AMORIM MARTINS', 'Obrigatoriedade às CRECHES MUNICIPAIS subvencionadas da prestação de contas à Câmara Municipal.', 'Em trâmite'),
(68, '3/20', 'JEAN CARLOS SOARES LOPES', 'DENOMINAÇÃO de equipamento público \"Quadra Poliesportiva José Galucci\".', 'Lei nº 7.585/20'),
(69, '2/20', 'JOSÉ FRANCIMÁRIO VIEIRA DE MACEDO', 'Declaração de UTILIDADE PÚBLICA do Instituto Kelly Santos Muller.', 'Em trâmite'),
(70, '1/20', 'PREFEITO', 'ALTERAÇÃO da Lei nº 7.423/2018 ( Ref.: Operação de crédito junto à Corporação Andina de Fomento ).', 'Lei nº 7.563/20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
