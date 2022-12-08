-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: recetario
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `receta`
--

DROP TABLE IF EXISTS `receta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_receta` varchar(45) NOT NULL,
  `t_preparacion` varchar(45) NOT NULL,
  `t_coccion` varchar(45) NOT NULL,
  `porciones` varchar(45) NOT NULL,
  `complejidad` varchar(10) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  `ocasion` varchar(20) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `lista_ingredientes` mediumtext NOT NULL,
  `i_preparacion` mediumtext NOT NULL,
  `img` varchar(60) NOT NULL,
  `like` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receta`
--

LOCK TABLES `receta` WRITE;
/*!40000 ALTER TABLE `receta` DISABLE KEYS */;
INSERT INTO `receta` VALUES (62,'Pasta con Pollo al Pesto','5 minutos','23 minutos','6','Intermedio','Almuerzo','Todas','Se trata de un plato de pasta al pesto con pollo exquisita y muy cremosa, ya que en vez de utilizar agua para hervirla vamos a utilizar leche. Y encima añadiremos al final queso parmesano rallado, por lo que esta pasta con pollo al pesto nos quedará súper sabrosa y con un sabor italiano inconfundible.','(23 g.) ½ taza de albahaca fresca\r\n(10 g.) 1 cucharada de cebolla cortada finamente\r\n(4 g.) 1 diente de ajo cortado finamente\r\n(12 g.) 2 cucharadas de queso parmesano rallado\r\n(45 g.) 3 cucharadas de aceite de oliva\r\n(454 g.) 1 libra de pechuga de pollo cortada en dados\r\n(10 g.) 1 sobre de Consomé de Pollo MAGGI®\r\n(180ml.) ¾ taza de Leche Evaporada IDEAL®\r\n(24g.) ¼ taza de queso parmesano rallado\r\n(480 g.) 4 tazas de corta cocida','Para el pesto:\r\n1.  Licuar la albahaca, la cebolla, el ajo, el queso parmesano y el aceite de oliva hasta formar una pasta. Colocar en un tazón y reservar.\r\nPara el pollo:\r\n2.  En un tazón colocar el pollo y marinar con Consomé de Pollo MAGGI®, dejar reposar por 5 minutos.\r\n3.  En un sartén a fuego medio, colocar el pesto y sofreír el pollo por 8 minutos o hasta que esté dorado. Agregar la Leche Evaporada IDEAL®, el queso parmesano y cocinar hasta que reduzca.\r\n4.  Añadir la pasta, revolver, bajar el fuego, tapar el sartén y cocinar por 3 minutos más revolviendo constantemente.\r\n5.  Servir y disfrutar.','img/Pasta_pollo.jpg',0),(63,'Raspado','5 minutos','5 minutos','1','Fácil','Postres','Todas','Todos recordamos esas tardes de paseo, que aunque se tornaban algo calurosos, siempre había un buen raspado para aplacar el calor.','15 cubos de hielo\r\n(45g.) 3 cucharadas de sirope favorito (fresa, piña, uva, rosas, etc)\r\n(35g.) 2 cucharadas de Leche Condensada LA LECHERA®\r\nMalteada al gusto','1.  En un procesador de alimentos, triturar los hielos hasta que tengan una apariencia a nieve.\r\n2.  Colocar el hielo en un vaso y cubrir con el sirope, la Leche Condensada LA LECHERA® y la malteada.\r\n3.  Disfrutar al instante.','img/Raspado.jpg',0),(64,'Arroz con Pollo y Camarones','10 minutos','48 minutos','4','Intermedio','Almuerzo','Todas','Prepara el tradicional arroz con pollo de una forma diferente y deliciosa, añadiéndole camarones.','(454 g.) 1 Libra Pechuga De Pollo Cortada en cubos\r\n(10 g.) 1 Sobre Consomé De Pollo Maggi®\r\n(454 g.) 1 Libra Camarones Limpios y desvenados\r\n(10 g.) 1 Sobre Gallinita Sabor Y Color Maggi®\r\n1 Cucharadita Aceite Vegetal\r\n(100 g.) 3/4 Taza Pimentón Cortado en cubos\r\n(55 g.) 1/2 Taza Apio Cortado finamente\r\n(75 g.) 1/2 Taza Cebolla Cortada finamente\r\n(95 g.) 2/3 Taza Aceitunas Cortadas en rebanadas\r\n(25 g.) 1/8 Taza Alcaparras\r\n(300 g.) 1 1/2 Taza Arroz\r\n3 cups Agua Mineral San Pellegrino\r\n(8 g.) 1/8 Taza Cilantro Cortado finamente\r\n','1.  En un tazón, combinar el pollo con el Consomé de Pollo MAGGI® y marinar por 5 minutos.\r\n2.  En otro tazón, combinar los camarones con el Sabor y Color MAGGI® y marinar por 5 minutos.\r\n3.  En una cacerola a fuego medio, colocar el aceite, el pollo, los camarones y cocinar por 10 minutos.\r\n4.  Añadir el pimentón, el apio, la cebolla, las aceitunas, las alcaparras y cocinar por 4 minutos más.\r\n5.  Agregar el arroz, el agua, revolver, tapar y cocinar hasta que se consuma el agua.\r\n6.  Añadir el cilantro, revolver, bajar el fuego y cocinar sin tapa por 10 minutos más. Revolver y apagar el fuego.','img/Arroz_pollo.png',0),(65,'Sopa de Tortilla','10 minutos','27 minutos','6','Intermedio','Sopas','Semana Santa','Prepara una rica sopa de tortilla con Crema de Tomate','(76 g.) 1 sobre Crema De Tomate \r\n1 Litro Agua\r\n1 Unidad Pollo deshilachado\r\n1 Manojo Cilantro cortado finamente\r\n1 Unidad Tomate cortado en cubos\r\n1 Unidad Cebolla cortada finamente\r\n(10 g.) 1 sobre Gallinita Sabor y Color \r\n1 Unidad Aguacate cortado en cubos\r\n5 Unidades Tortillas en tiras fritas','  Hervir el agua e incorporar el sobre de Crema de Tomate y el sobre de Sabor y Color\r\n2.  Cocinar con la olla semidestapada y agregar, cebolla y el pollo por 10 minutos a fuego medio.\r\n3.  Tapar y agregar las tortillas, el tomate, y el cilantro y cocinar por 5 minutos.\r\n4.  Servir y disfrutar.\r\n ','img/Tortilla_soup.jpg',0),(66,'Pancakes de Avena','7 minutos','23 minutos','6','Fácil','Desayunos','Verano','Una receta fácil y saludable, que hará de tus desayunos una experiencia única.','(63 g.) ½ taza de harina de trigo\r\n(80 g.) ½ taza de avena en hojuelas\r\n(160 g.) 2 bananas pequeñas majadas\r\n(100 g.) 2 huevos\r\n(240 g.) 1 taza de Anchor™reconstituida\r\n(30 g.) 2 cucharadas de azúcar morena\r\n(6 g.) 1 cucharada de canela\r\n(5 g.) 1 cucharita de mantequilla','1.  En un tazón, combinar todos los ingredientes excepto la mantequilla.\r\n2.  En un sartén a fuego medio, colocar la mantequilla y esperar a que se derrita.\r\n3.  Verter ¼ taza de la mezcla sobre el sartén y cocinar hasta que comience a burbujear. Dar vuelta, y cocinar por 1 minuto o hasta que se dore del otro lado.\r\n4.  Servir y disfrutar.','img/cake.png',0);
/*!40000 ALTER TABLE `receta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `nombre_usuario` varchar(45) NOT NULL,
  `nombre_completo` varchar(80) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`nombre_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-29  8:44:39
