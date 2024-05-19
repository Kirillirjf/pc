-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2024 г., 15:30
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pc_website`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name_pc` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total_price` int NOT NULL,
  `total_amount` int NOT NULL,
  `status` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL,
  `id_pc_card` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `mail`, `name_pc`, `total_price`, `total_amount`, `status`, `id`, `id_pc_card`) VALUES
(1, ' shilinoz2005@mail.ru', 'KORNE-V', 237000, 1, '', 14, 9),
(3, ' shilinoz2005@mail.ru', 'KORNE-V', 237000, 1, '', 14, 9),
(9, ' shilinoz2005@mail.ru', 'GLADIATOR', 163000, 1, '', 14, 7),
(10, ' shilinoz2005@mail.ru', 'HELIOS', 573000, 1, 'в ожидании', 14, 20),
(11, ' shilinoz@mail.ru', 'GLADIATOR', 163000, 1, 'в ожидании', 29, 7),
(12, ' shilinoz2005@mail.ru', 'GLADIATOR', 163000, 1, 'в ожидании', 14, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `pc_card`
--

CREATE TABLE `pc_card` (
  `id_pc_card` int NOT NULL,
  `img` varchar(40) NOT NULL,
  `name_pc` varchar(20) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `processor` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `video_card` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `the_motherboard` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `random_access_memory` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `hard_drive` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `power_unit` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `body` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cooling_system` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` varchar(40) NOT NULL,
  `windows` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `pc_card`
--

INSERT INTO `pc_card` (`id_pc_card`, `img`, `name_pc`, `description`, `processor`, `video_card`, `the_motherboard`, `random_access_memory`, `hard_drive`, `power_unit`, `body`, `cooling_system`, `price`, `windows`) VALUES
(1, '../cotolog/img/pc-1.png', 'BEAST', 'Игровой компьютер на мощной игровой видеокарте – NVIDIA GeForce® RTX 4070!Высокопроизводительная и гибко настраиваемая платформа, легко редактируемая в конфигураторе. Компьютер позволяет установить процессор Core i5 – i9 / Ryzen 5 – 9, до 128 ГБ оперативной памяти DDR4 / DDR5, несколько NVMe-накопителей.С игровым компьютером BEAST вы сможете играть на ультра настройках графики со сверхвысоким FPS в разрешении 2K (2560×1440). Или на высоких настройках в разрешении 4K (3840×2160).', 'Intel Core i5-13400F', 'GeForce RTX 4070', 'Intel B760', '16 ГБ DDR4', '1000 ГБ M.2 SSD', '750 Вт, 80 PLUS Bronze', ' LUMEN Black', 'WaterCooling 240 RGB', '160001', 'Windows 11'),
(2, '../cotolog/img/pc-2.png', 'ARES', 'Игровой компьютер на мощной игровой видеокарте – NVIDIA GeForce® RTX 4080 Super!\r\n\r\nВысокопроизводительная и гибко настраиваемая платформа, легко редактируемая в конфигураторе. Компьютер позволяет установить процессор Core i5 – i9 / Ryzen 5 – 9, до 128 ГБ оперативной памяти DDR4 / DDR5, несколько NVMe-накопителей.\r\n\r\nС мощным игровым компьютером ARES вы сможете играть на ультра настройках графики с высоким FPS в разрешении вплоть до 4K (3840×2160).', 'Intel Core i5-14600KF 3500 МГц', 'GeForce RTX 4080 Super', 'Seagate BarraCuda 1 ТБ', '32 ГБ DDR4 3200 МГц', '2000 ГБ M.2 SSD', '850 Вт, 80 PLUS Bronze', ' Powercase ALISIO Micro', 'AIR 120', '190000', 'Windows 10'),
(3, '../cotolog/img/pc-5.png', 'PREDATOR', 'Игровой компьютер на флагманской игровой видеокарте – AMD Radeon™ RX 7900 XTX!\r\n\r\nВысокопроизводительная и гибко настраиваемая платформа, легко редактируемая в конфигураторе. Компьютер позволяет установить процессор Core i5 – i9 / Ryzen 5 – 9, до 128 ГБ оперативной памяти DDR4 / DDR5, несколько NVMe-накопителей.\r\n\r\nС мощным игровым компьютером PREDATOR вы сможете играть на ультра настройках графики с высоким FPS в разрешении вплоть до 4K (3840×2160).', 'Intel Core i5-14600KF ', 'Radeon RX 7900 XTX', 'Intel Z790', '32 ГБ DDR4 3200 МГц 2 шт', 'Seagate BarraCuda 1 ТБ ', '850 Вт, 80 PLUS Bronze', '1STPLAYER FIREBASE XP-E', 'Zalman ALPHA 36 Black', '256000', 'Windows 11'),
(4, '../cotolog/img/pc-4.png', 'KRATOS', 'Игровой компьютер на мощной игровой видеокарте – NVIDIA GeForce® RTX 4070 Ti!\r\n\r\nВысокопроизводительная и гибко настраиваемая платформа, легко редактируемая в конфигураторе. Компьютер позволяет установить процессор Intel Core i5-13500, до 128 ГБ оперативной памяти DDR4 несколько NVMe-накопителей.\r\n\r\nС мощным игровым компьютером KRATOS вы сможете играть на ультра настройках графики с высоким FPS в разрешении вплоть до 4K (3840×2160).', 'Intel Core i5-13500', 'GeForce RTX 4070 Ti', 'Intel B760', 'ADATA XPG GAMMIX 32 гб (8гб x 2)', '1000 ГБ M.2 SSD', '850W DeepCool PM850D', 'Zalman Z10 DUO', 'ID-COOLING SE-234-ARGB V2', '216000', 'Windows 11'),
(5, '../cotolog/img/pc-11.png', 'PHOENIX BASE', 'Игровой компьютер с видеокартой GeForce® RTX 4060 8 ГБ, 6-ядерным процессором AMD Ryzen 5 5600 и 16 ГБ оперативной памяти. Играйте на максимальных настройках в 2K разрешении.', 'AMD Ryzen 5 5600 3500 МГц', 'Palit GeForce RTX™ 4060 Dual 8G', 'GIGABYTE B550M', '16 ГБ DDR4 3200 МГц Kingston Fury Beast', '1000 ГБ M.2 ADATA ', ' 600W Zalman ZM600-TXII V2', 'DeepCool CH360 Black', 'PCCooler Paladin EX400 ARGB', '105500', 'Windows 11'),
(6, '../cotolog/img/pc-3.png', 'THOR', 'Игровой компьютер на мощной игровой видеокарте – NVIDIA GeForce® RTX 4060 Ti!\r\n\r\nВысокопроизводительная и гибко настраиваемая платформа, легко редактируемая в конфигураторе. Компьютер позволяет установить процессор AMD Ryzen 5 5600, до 128 ГБ оперативной памяти DDR5, несколько NVMe-накопителей.\r\n\r\nС игровым компьютером THOR вы сможете играть на ультра настройках графики с высоким FPS в разрешении 2K (2560×1440).', 'AMD Ryzen 5 5600 3500 МГц', 'GeForce RTX 4060 Ti', 'AMD B550', '16 ГБ DDR4 3200 МГц ', '1000 ГБ M.2 ADATA LEGEND 800', '600W Zalman ZM600-TXII V2', 'DeepCool CK560 Black', 'Jonsbo CR-1000 EVO ARGB', '125000', 'Windows 11'),
(7, '../cotolog/img/pc-10.png', 'GLADIATOR', 'Игровой компьютер на мощной игровой видеокарте – AMD Radeon™ RX 7800 XT!\r\n\r\nВысокопроизводительная и гибко настраиваемая платформа, легко редактируемая в конфигураторе. Компьютер позволяет установить процессор AMD Ryzen 7 5700, до 128 ГБ оперативной памяти  DDR5, несколько NVMe-накопителей.\r\n\r\nС игровым компьютером GLADIATOR вы сможете играть на ультра настройках графики с высоким FPS в разрешении 4K (3840×2160).', 'AMD Ryzen 7 5700X ', 'SUS Radeon™ RX 7800 16G', 'GIGABYTE B550 ', '16 ГБ DDR4 3200 МГц', '1000 ГБ M.2 ADATA', '750W DeepCool PL750D', 'MSI MPG GUNGNIR 110R Black', 'PCCooler Paladin EX400 ARGB', '163000', 'Windows 11'),
(8, '../cotolog/img/pc-14.png', 'VULCAN NANO', 'Рабочая станция в компактном mATX корпусе Jonsbo D30. Корпус из алюминиевого сплава и стали с тщательно продуманным интерьером позволяет установить высокопроизводительные компоненты и мощную систему охлаждения.\r\n\r\nИдеально подходит для работы в профессиональных приложениях, редактирования фото и видео в высоком разрешении, создания контента и проектирования. Творите на высшем уровне!', 'Intel Core i5-14600KF', ' GeForce RT 4060 8G', 'MSI PRO B760M-A ', '32 ГБ DDR4 3200 МГц ', '1000 ГБ M.2 Netac NV7000', '750W Chieftec PowerUP', 'Jonsbo D30 Black', 'ID-COOLING SE-207-XT ARGB', '162000', 'Windows 10'),
(9, '../cotolog/img/pc-15.png', 'KORNE-V', 'Профессиональный компьютер с процессором AMD Ryzen 7 и видеокартой до GeForce RTX 4070. В корпусе с шумоизоляцией и отличным охлаждением, справляющимся с самыми высокими нагрузками.\r\n\r\nИдеально подходит для работы в профессиональных приложениях, редактирования фото и видео в высоком разрешении, создания контента и проектирования. Творите на высшем уровне!\r\n\r\n', 'AMD Ryzen 7 7700X 4500 ', ' Palit GeForce RTX™ 4070 Dual', 'MSI B650M GAMING PLUS OMEGA X4', '64 ГБ DDR5 5200 МГц Patriot Viper Venom', '2000 ГБ M.2 Netac NV5000 Pro', '750W Chieftec PowerUP', 'be quiet! Pure Base 500 Window Black', 'ID-COOLING SE-207-XT ARGB', '237000', 'Windows 11'),
(10, '../cotolog/img/pc-16.png', 'VULCAN 5', 'Профессиональный компьютер с процессором Intel Core i5 и видеокартой до GeForce RTX 3050 DUAL 8G. В минималистичном компактном корпусе c отличным охлаждением.\r\n\r\nИдеально подходит для работы в профессиональных приложениях, редактирования фото и видео в высоком разрешении, создания контента и проектирования. Творите на высшем уровне!', 'Intel Core i5-13400 2500 МГц', 'Palit GeForce RTX™ 3050 DUAL 8G', 'MSI PRO B760M-A DDR4', '32 ГБ DDR4 3600 МГц Kingston Fury Beast', '1000 ГБ M.2 Netac NV7000', '500W DeepCool PK500D, 80 PLUS Bronze', 'Jonsbo U4 Pro Mesh Black', 'ID-COOLING FROZN A410 ARGB', '126000', 'Windows 11'),
(11, '../cotolog/img/pc-17.png', 'VULCAN G', 'Профессиональный компьютер с гибридным процессором AMD Ryzen 5. Он обладает высокопроизводительной интегрированной графикой Radeon RX Vega, с которой вам не потребуется отдельная дискретная видеокарта.\r\n\r\nИдеально подходит для работы в профессиональных приложениях, редактирования фото и видео в высоком разрешении, создания контента и проектирования. Творите на высшем уровне!', 'AMD Ryzen 5 5600G ', 'Интегрированная графика Vega', 'GIGABYTE B550M AORUS ELITE', '32 ГБ DDR4 3600 МГц ', '1000 ГБ M.2 ADATA ', '500W DeepCool PK500D', 'Cooler Master Silencio S400 TG', 'DeepCool AG400', '75400', 'Windows 11'),
(12, '../cotolog/img/pc-18.png', 'G4', 'Домашний компьютер с процессором Intel Core i5 и видеокартой до GTX 1650 GDDR6. В минималистичном компактном корпусе c хорошим охлаждением.\r\n\r\nИдеально подходит для работы в повседневной сфере, различных приложениях, редактирования фото и видео, создания контента и проектирования. ', 'Intel Core i5-10400 ', 'GeForce GTX 1650 GDDR6', ' M-ATX, MSI PRO ', 'DDR4 8 ГБ 2666МГц', 'M.2 512 Gb', 'ID-COOLING SE-214-XT Black Led', 'mATX Midi-tower (160mm)', 'ID-COOLING SE-214-XT ', '59300', 'Windows 10'),
(13, '../cotolog/img/pc-19.png', 'HARIS5000-x', 'Домашний компьютер с видеокартой GeForce GTX 1660 Super , Intel Core i5-12400 и 16 ГБ оперативной памяти. Идеально подойдет для повседневных задач.', 'Intel Core i5-12400 ', 'GeForce GTX 1660 Super ', 'MATX PRO B760M-A', 'DDR4 8GB 3600MHZ 2 шт.', 'M.2 512 Gb', 'Deepcool AG400', ' Zalman Z1 Plus Black', 'Aerocool 500W VX-500 PLUS', '75400', 'Windows 10'),
(14, '../cotolog/img/pc-20.png', 'F3-x', 'Домашний компьютер с видеокартойadeon RX 6400 4Gb GDDR6 ,Intel Core i3-10105F и 16 ГБ оперативной памяти. Идеально подойдет для повседневных задач.', 'Intel Core i3-10105F ', 'Radeon RX 6400 4Gb', 'MSI PRO H510M-B ', 'DDR4 16GB 2666Mhz 2 шт.', 'SSD 256 ГБ M.2 NVMe', 'Deepcool AG300 ', 'Powercase ALISIO Micro X4B', 'Aerocool 500W VX-500 PLUS', '43400', 'Windows 10'),
(15, '../cotolog/img/pc-12.png', 'DARC-SODYS', 'Домашний компьютер с процессором Intel Core i5 и видеокартойGeForce RTX 3050 8GB и  Intel Core i5-11600 . В минималистичном компактном корпусе c хорошим охлаждением.\r\n\r\nИдеально подходит для работы в повседневной сфере, в различных приложениях, игр, редактирования фото и видео, создания контента и проектирования. ', ' Intel Core i5-11600 ', 'GeForce RTX 3050 8GB', 'M-ATX MSI B560M ', 'ADATA XPG GAMMIX 16 гб ', 'M.2 512 Gb', 'Aerocool 500W VX-500 PLUS', 'STPLAYER TRILOBITE T5 Black ', 'Deepcool AG400 BK ARGB ', '83000', 'Windows 11'),
(16, '../cotolog/img/pc-21.png', 'ATLAS', 'Игровой компьютер на комплектующих ASUS в стиле минимализма. В его основе компактный micro-ATX корпус ASUS A21, обладающий высокой вместительностью несмотря на небольшие размеры.\r\n\r\nСетка на передней панели имеет пористость 40%, что обеспечивает максимальный баланс воздушного потока, фильтрации пыли и видимости RGB подсветки.\r\n\r\nИгровой компьютер ATLAS вмещает в себя видеокарту RTX 4070, процессорIntel Core i5-14600KF и до 128 ГБ оперативной памяти.', 'ASUS GeForce RT 4070', 'Intel Core i5-14600KF', 'ASUS TUF GAMING B760M-E D4', '32 ГБ DDR4 ', '2000 ГБ M.2 Netac ', '750W Chieftec PowerUP, 80 PLUS Bronze', 'ASUS A21 Black', 'Zalman ALPHA 36 Black', '235000', 'Windows 11'),
(17, '../cotolog/img/pc-22.png', 'KRONOS', 'Игровой компьютер на комплектующих ASUS в корпусе с агрессивным геймерским дизайном – TUF Gaming GT301.\r\n\r\nЯчеистая структура передней и верхней панели способствует эффективной вентиляции, а боковая панель из закаленного стекла открывает отличный вид на внутренние компоненты.\r\n\r\nИгровой компьютер KRONOS вмещает в себя видеокарту RTX 4060 Ti, процессор Intel Core i5-13400F  и до 128 ГБ оперативной памяти.', 'ASUS GeForce RT 4060 Ti', 'Intel Core i5-13400F ', 'ASUS PRIME B760M-A ', '16 ГБ DDR4', '1000 ГБ M.2 Netac', '750W Chieftec PowerUP', 'ASUS TUF Gaming GT301', 'PCCooler Paladin EX400 ARGB', '153000', 'Windows 11'),
(18, '../cotolog/img/pc-23.png', 'KRAKEN', 'Игровой компьютер на комплектующих MSI в корпусе MAG FORGE 100R.\r\n\r\nТри вентилятора и сетчатая передняя панель обеспечивают равномерный приток холодного воздуха. Боковая панель, изготовленная из светло-серого закаленного стекла, обеспечит отличный вид на внутренние компоненты.\r\n\r\nИгровой компьютер KRAKEN вмещает в себя видеокарту RTX 4060, процессор Intel Core i5-13400F и до 128 ГБ оперативной памяти.', 'Intel Core i5-13400F', 'MSI GeForce RTX™ 4060', 'MSI PRO B760-P', '16 ГБ DDR4', '1000 ГБ M.2', '600W Zalman ZM600-TXII', '', 'PCCooler Paladin EX400S', '131000', 'Windows 11'),
(19, '../cotolog/img/pc-24.png', 'ECLIPSE', 'Игровой компьютер на комплектующих MSI в стальном корпусе MPG GUNGNIR 110, сочетающем качественные материалы и широкую функциональность.\r\n\r\nВентиляционные отверстия и четыре вентилятора обеспечивают эффективный поток воздуха, который справляется с охлаждением высокопроизводительных комплектующих.\r\n\r\nИгровой компьютер ECLIPSE вмещает в себя видеокарту RTX GeForce RTX™ 4070 , процессорIntel Core i5-14600KF и до 128 ГБ оперативной памяти.', 'Intel Core i5-14600KF', 'MSI GeForce RT 4070 ', 'MSI PRO B760M-A', '32 ГБ DDR4 ', '1000 ГБ M.2', '700W DeepCool', 'MSI MPG GUNGNIR 110R Black', 'ID-COOLING SE-207-XT ARGB', '213000', 'Windows 11'),
(20, '../cotolog/img/pc-25.png', 'HELIOS', 'Флагманский компьютер на самой мощной игровой видеокарте – NVIDIA GeForce® RTX 4090!\r\n\r\nВысокопроизводительная и гибко настраиваемая платформа, легко редактируемая в конфигураторе. Компьютер позволяет установить процессор Core i9 , до 128 ГБ оперативной памяти  DDR5, несколько NVMe-накопителей.\r\n\r\nС мощным игровым компьютером HELIOS вы сможете играть на ультра настройках графики со сверхвысоким FPS в разрешении вплоть до 4K (3840×2160).', 'Intel Core i9-14900K', ' GeForce RTX™ 4090', 'ASUS PRIME Z790-P', '64 ГБ DDR5', '2000 ГБ M.2', '1050W Chieftec Polaris', 'NZXT H7 Flow RGB Window Black', 'Thermalright Frozen Fusion 360 ', '573000', 'Windows 11');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `names` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `surname` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `telephone` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mail` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `pass` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `names`, `surname`, `telephone`, `mail`, `pass`, `role`) VALUES
(1, 'Админ', 'Админович', '1', 'admi@mail.com', '1', 'админ'),
(14, 'Кирилл', 'Шилин', '71234567891', 'shilinoz2005@mail.ru', '123', 'пользователь'),
(29, 'Максим', 'Шилин', '79999999999', 'shilinoz@mail.ru', '3', 'пользователь');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_pc_card` (`id_pc_card`);

--
-- Индексы таблицы `pc_card`
--
ALTER TABLE `pc_card`
  ADD PRIMARY KEY (`id_pc_card`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `pc_card`
--
ALTER TABLE `pc_card`
  MODIFY `id_pc_card` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_pc_card`) REFERENCES `pc_card` (`id_pc_card`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
