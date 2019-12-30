-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: bd_modulos
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `data_ent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cod_cliente`),
  UNIQUE KEY `cod_cliente_UNIQUE` (`cod_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (123,'CAIO','2019-12-19 03:00:00'),(124,'EMANUELLE','2019-12-29 03:00:00');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulos` (
  `cod_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_modulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `data_ent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `preco` decimal(10,0) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `fontawesome` varchar(25) NOT NULL,
  `bgcolor` varchar(7) NOT NULL,
  PRIMARY KEY (`cod_modulo`),
  UNIQUE KEY `cod_modulo_UNIQUE` (`cod_modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos`
--

LOCK TABLES `modulos` WRITE;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` VALUES (1,'Checkin & Checkout','Em algumas agências no 90 circulou um texto chamado \"bonde amarelo\" ou \"metrô amarelo\" sensata substituir Lorem Ipsum para dar um visual mais moderno para o conteúdo. Mas muitas pessoas estavam olhando para ler o texto quando ele estava em Francês ou Inglês, o efeito desejado não foi alcançado. Trabalhar com texto legível, contendo instruções pode causar distrações e isso pode ajudar a focar o layout.\n\nA vantagem de origem latina e conteúdo absurdo Lorem ipsum impede o leitor de se distrair com o conteúdo do texto e, portanto, pode se concentrar a sua atenção no design gráfico. Na verdade, o texto Lorem Ipsum tem a vantagem, em contraste com um texto genérico usando comprimento de palavra variável para simular uma ocupação normal do modelo de modo a que ele corresponde ao produto final e para garantir a futura publicação inalterado.','2019-12-29 11:17:56',100,'PERFOMANCE','fas fa-check-circle','#222A35'),(2,'Badges & Cards de Reconhecimento','Uma limitação do uso do texto falso na web design é que este texto nunca é lido, ele não verifica sua legibilidade real. Além disso fórmulas projetados com texto fictício tendem a subestimar o espaço forçando redações em seguida, fazer títulos simplistas ou imprecisas, para não exceder o espaço alocado.\n','2019-12-29 11:21:59',150,'ENGAJAMENTO','far fa-id-badge','#333F50'),(3,'Planos de Ação','O texto falso também não dá uma visão realista de tons de cinza tipográfico, especialmente no caso de texto justificado. O espaçamento do texto falsa ainda é um pouco maior do que com um texto real, que vai apresentar mais escura olhar e menos legível do que o texto falso com que o designer fez seus ensaios. Isso pode distorcer a apresentação final da impressão.','2019-12-29 11:21:59',0,'ENGAJAMENTO','fas fa-list','#525252'),(4,'Recomendações de Contéudo sob medida','Parece que apenas alguns trechos do texto original aparecem no Lipsum comumente usado, e que uma série de cartas tenham sido removido ou adicionado em diversos pontos do texto ao longo do tempo. É por isso que existem hoje em dia um número de texto Lorem Ipsum mais ou menos diferentes uns dos outros. Devido à sua data de produção, uso Lorem ipsum não está mais sujeito a direitos de autor e evita quaisquer questões de direitos autorais.','2019-12-29 11:21:59',450,'ENGAJAMENTO','fas fa-atlas','#7F6000'),(5,'Assessments e Recomendações','O uso de texto fictício é comum desde o século 16 nos meios de comunicação e da composição de impressão. O conteúdo falso foi democratizado na década de 60, quando a empresa especializada em typo Letraset, publicado pranchas com Lorem Ipsum. Na era do computador, muitos software para processamento de texto ou layout da página usando esses textos como o modelo padrão, daí a sua presença em locais de construção.','2019-12-29 11:21:59',0,'RELAÇÕES','far fa-handshake','#7C7C7C'),(6,'Quick Deck','Parece que apenas alguns trechos do texto original aparecem no Lipsum comumente usado, e que uma série de cartas tenham sido removido ou adicionado em diversos pontos do texto ao longo do tempo. É por isso que existem hoje em dia um número de texto Lorem Ipsum mais ou menos diferentes uns dos outros. Devido à sua data de produção, uso Lorem ipsum não está mais sujeito a direitos de autor e evita quaisquer questões de direitos autorais.','2019-12-29 11:21:59',350,'PERFOMANCE','far fa-sticky-note','#0080AF'),(7,'Evidências & Feedback','LoremIpsum360 ° é um gerador on-line falso texto livre. Ele oferece um simulador de texto completo para gerar texto de substituição ou texto alternativo para seus modelos. Possui textos aleatórios diferentes em latim e cirílico para gerar exemplos de textos em diferentes línguas.\n\nLoremIpsum360 ° também lhe dá a capacidade de adicionar marcas de pontuação, acentos e caracteres especiais, para estar mais perto dos idiomas francês ou outras. Além disso, se você quiser ver os resultados em diferentes tipos de letra, você vai encontrar muitos recursos para definir como font-family, font-size, text-align ou line-heigh.','2019-12-29 11:21:59',200,'PERFOMANCE','fas fa-shoe-prints','#002060'),(8,'Fitting Cultural','Lorem Ipsum tem sido o padrão desde a Idade Média. Um pintor teria peças mistas de texto em um livro exemplar e é este texto que nós usamos hoje. Outra versão diz que este é um trecho do livro de Cícero: \"\" De Finibus Bonorum e malorum \"\" seções 1.10.32 / 1.10.33. Este livro, muito popular durante a Renascença, é um tratado sobre a teoria da ética.','2019-12-29 11:21:59',700,'CULTURA','fas fa-brain','#C55A11');
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos_ativos`
--

DROP TABLE IF EXISTS `modulos_ativos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulos_ativos` (
  `cod_modulo_ativo` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cliente` int(11) NOT NULL,
  `cod_modulo` int(11) NOT NULL,
  `status` char(1) DEFAULT '0',
  `data_ent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cod_modulo_ativo`),
  UNIQUE KEY `cod_modulo_ativo_UNIQUE` (`cod_modulo_ativo`),
  KEY `fk_modulos_ativos_cod_cliente` (`cod_cliente`),
  KEY `fk_modulos_ativos_cod_modulo` (`cod_modulo`),
  CONSTRAINT `fk_modulos_ativos_cod_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`cod_cliente`),
  CONSTRAINT `fk_modulos_ativos_cod_modulo` FOREIGN KEY (`cod_modulo`) REFERENCES `modulos` (`cod_modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos_ativos`
--

LOCK TABLES `modulos_ativos` WRITE;
/*!40000 ALTER TABLE `modulos_ativos` DISABLE KEYS */;
INSERT INTO `modulos_ativos` VALUES (3,124,1,'0','2019-12-29 11:28:29',NULL),(4,123,1,'0','2019-12-29 11:29:02',NULL),(5,123,2,'1','2019-12-29 11:29:19',NULL),(6,123,3,'0','2019-12-29 11:29:22',NULL);
/*!40000 ALTER TABLE `modulos_ativos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-30  6:17:49
