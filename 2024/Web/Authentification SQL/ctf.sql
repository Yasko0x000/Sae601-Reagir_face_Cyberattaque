-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 fév. 2024 à 14:40
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ctf`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`) VALUES
(1, 'indice1', 'Le flag est encodé'),
(2, 'John', 'a4Z#%Fp9'),
(3, 'Alice', 's6&zB$P@'),
(4, 'Bob', 'q2*Rf!8g'),
(5, 'Emma', 'p@2J#zN7'),
(6, 'Michael', 'k1@G#tR5'),
(7, 'Jennifer', 'h5$Yl@7Q'),
(8, 'Johnny', 'b8X$Pm5R'),
(9, 'Alex', 'f9#Bk3Yt'),
(10, 'Jessica', 'r3$Jz6Lp'),
(11, 'Chris', 'q7%Ao5Np'),
(12, 'Ashley', 'e2!Mx7Wc'),
(13, 'Daniel', 'g4&Ts6Dp'),
(14, 'Grace', 't9%Vr5Zm'),
(15, 'Kevin', 'p8&As2Ht'),
(16, 'Taylor', 'c5$Am3Rt'),
(17, 'Emily', 'j1#Pq4Kt'),
(18, 'Matthew', 'w3&Js2Lq'),
(19, 'Sarah', 'd7@Ln5Kr'),
(20, 'Andrew', 'f5!Sp4Mt'),
(21, 'Lauren', 'q8%Nm7Bp'),
(22, 'Nicholas', 'z2!Kq5Am'),
(23, 'noadmin1', 'a4Z#%Fp9'),
(24, 'Elijah', 'm8%Fn7Jo'),
(25, 'Avery', 'n3@Kn9Jt'),
(26, 'Evelyn', 'o6%Jn9Jn'),
(27, 'Joshua', 'p9$In7Jo'),
(28, 'Nora', 'q2%Ln9Jt'),
(29, 'Christopher', 'r5$Mo9Jn'),
(30, 'Emma', 's8%Pn7Jo'),
(31, 'Michael', 't3$Qo9Jt'),
(32, 'Harper', 'u6%Rn9Jn'),
(33, 'Dylan', 'v9@Sn7Jo'),
(34, 'Samantha', 'w2%Go9Jt'),
(35, 'Nathan', 'x5@Kn9Jn'),
(36, 'Lily', 'y8%Ln9Jo'),
(37, 'Benjamin', 'z3@Mo9Jt'),
(38, 'Grace', 'a6%Po7Jp'),
(39, 'Alexander', 'b9$Qn9Jo'),
(40, 'Zoe', 'c4%Fn7Jt'),
(41, 'Christopher', 'd7@Gq9Jn'),
(42, 'noadmin2', 's6&zB$P@'),
(43, 'Harper', 'p9@Rn9Jn'),
(44, 'Dylan', 'q2%Sn7Jo'),
(45, 'Samantha', 'r5$Go9Jt'),
(46, 'Nathan', 's8%Kn9Jn'),
(47, 'Lily', 't3$Ln9Jo'),
(48, 'Benjamin', 'u6%Mo9Jt'),
(49, 'Grace', 'v9$Po7Jp'),
(50, 'Alexander', 'w2%Qn9Jo'),
(51, 'Zoe', 'x5$Fn7Jt'),
(52, 'Christopher', 'y8%Gq9Jn'),
(53, 'Madison', 'z3%Hn7Jo'),
(54, 'noadmin3', 'q2*Rf!8g'),
(55, 'Avery', 'k6&Hm9In'),
(56, 'Evelyn', 'l9%On7Js'),
(57, 'Joshua', 'm2$Dn8Ko'),
(58, 'Nora', 'n5!En9Lq'),
(59, 'Christopher', 'o8%Fq7Mr'),
(60, 'Emma', 'p3@Pn9Ws'),
(61, 'Michael', 'q6&Qo7In'),
(62, 'Harper', 'r9!Rn8Jt'),
(63, 'Dylan', 's2%Sn9Kw'),
(64, 'Samantha', 't5$Go7Jm'),
(65, 'Nathan', 'u8@Kn9Ur'),
(66, 'noadmin4', 'p@2J#zN7'),
(67, 'Benjamin', 'w6#Mn8Ts'),
(68, 'Grace', 'x9$Po7Jn'),
(69, 'Alexander', 'y2%Qn9Hl'),
(70, 'Zoe', 'z5&Fn8Km'),
(71, 'Christopher', 'a8!Gq7In'),
(72, 'Madison', 'b3$Hn9Jw'),
(73, 'Jack', 'c6#Io7Mr'),
(74, 'Sophia', 'd9%Jn8Ls'),
(75, 'Andrew', 'e2!Pn9Ho'),
(76, 'noadmin5', 'k1@G#tR5'),
(77, 'Daniel', 'g8%Sn9Kn'),
(78, 'Elizabeth', 'h3&On7Ur'),
(79, 'Elizabeth', 'f6&On8Wq'),
(80, 'indice2', 'en base64'),
(81, 'Michael', 'g1!Jw9In'),
(82, 'Chloe', 'h4%Lt7Uk'),
(83, 'Elijah', 'i7$Mn6Tp'),
(84, 'noadmin6', 'h5$Yl@7Q'),
(85, 'Evelyn', 'k6#Fp9Tn'),
(86, 'Joshua', 'l9%An7Ul'),
(87, 'Nora', 'm2$Gn6Jr'),
(88, 'Christopher', 'n4%In8Ys'),
(89, 'Emma', 'o7@Mq9Zm'),
(90, 'noadmin7', 'b8X$Pm5R'),
(91, 'Harper', 'q8!Hm7Gt'),
(92, 'Dylan', 'r3@Ep9Jw'),
(93, 'Samantha', 's6$Gq8Ko'),
(94, 'Nathan', 't9#Dn7Im'),
(95, 'Lily', 'u2&Ir8En'),
(96, 'Benjamin', 'v5%Rn9Km'),
(97, 'Grace', 'w8!Mq7Jl'),
(98, 'Alexander', 'x3$Po9In'),
(99, 'Zoe', 'y6#Kn8Um'),
(100, 'Christopher', 'z9%Lm7Wo'),
(101, 'Christopher', 'o3@Rm4Hn'),
(102, 'Ella', 'p6#Nt7Ls'),
(103, 'noadmin8', 'f9#Bk3Yt'),
(104, 'Grace', 't9%Vr5Zm'),
(105, 'Kevin', 'p8&As2Ht'),
(106, 'Taylor', 'c5$Am3Rt'),
(107, 'Emily', 'j1#Pq4Kt'),
(108, 'Matthew', 'w3&Js2Lq'),
(109, 'Sarah', 'd7@Ln5Kr'),
(110, 'Andrew', 'f5!Sp4Mt'),
(111, 'Lauren', 'q8%Nm7Bp'),
(112, 'Nicholas', 'z2!Kq5Am'),
(113, 'Hannah', 'l6&Pr3Ds'),
(114, 'Olivia', 'u4$Gs9Pt'),
(115, 'Jacob', 'o3@Vt6Qs'),
(116, 'Ava', 'a9%Kw4Ts'),
(117, 'Ethan', 'i5&Ju2Lr'),
(118, 'Sophia', 'y1#Np8Ad'),
(119, 'Logan', 'r7@Xz3Hs'),
(120, 'Mia', 'e2%Fl9Gh'),
(121, 'James', 'p5&Tk1Zm'),
(122, 'Charlotte', 'c8$Es6Kl'),
(123, 'admin', 'c2VjcmV0X0NURg=='),
(124, 'Benjamin', 'q9%Wl7Td'),
(125, 'William', 'f7&Mo2Ln'),
(126, 'Abigail', 'w3@Td9Kr'),
(127, 'Michael', 'g5%Qp4Ls'),
(128, 'Ella', 'i8$Bs3Fw'),
(129, 'Alexander', 'j2#Mp5Vt'),
(130, 'Madison', 'l9@Rh6Xq'),
(131, 'Elijah', 'o4$Kn7Ds'),
(132, 'noadmin9', 'r3$Jz6Lp'),
(133, 'Sofia', 'r1%Pl8Tw'),
(134, 'Logan', 'k6&Tq9Bm'),
(135, 'Avery', 'h3@Yw5Na'),
(136, 'Mason', 'n8%Td1Zp'),
(137, 'Scarlett', 'a4$Vn9Xr'),
(138, 'Lucas', 'f2@Sr5Lq'),
(139, 'Amelia', 'd9%Zp6Vt'),
(140, 'Jacob', 's5&Kn4Tp'),
(141, 'Harper', 'u2$Fw8Bs'),
(142, 'Daniel', 'e6@Zl3Ko'),
(143, 'Aiden', 'q7%Vm1Ps'),
(144, 'Mila', 't3$Nq6La'),
(145, 'Jackson', 'x5@Fs2Yr'),
(146, 'Evelyn', 'v9%Op4Hs'),
(147, 'Liam', 'p2&Rk5Wq'),
(148, 'Chloe', 'y6@Ts9Na'),
(149, 'Aria', 'l8%Ws3Dr'),
(150, 'Oliver', 'z3$Np6Jt'),
(151, 'Lily', 'o7&Fr4Da'),
(152, 'Benjamin', 'f5%Vn2Ms'),
(153, 'Emma', 'i1@Xo8Rq'),
(154, 'Ethan', 'q9%Ts7Kl'),
(155, 'Zoe', 'w4$Ds9La'),
(156, 'Chloe', 'y6@Ts9Na'),
(157, 'Aria', 'l8%Ws3Dr'),
(158, 'Oliver', 'z3$Np6Jt'),
(159, 'Lily', 'o7&Fr4Da'),
(160, 'Benjamin', 'f5%Vn2Ms'),
(161, 'Emma', 'i1@Xo8Rq'),
(162, 'Ethan', 'q9%Ts7Kl'),
(163, 'Zoe', 'w4$Ds9La'),
(164, 'Aiden', 'f8%Qp2Mr'),
(165, 'Grace', 'j5%Ho4Pw'),
(166, 'Ryan', 'l7&Br3Xs'),
(167, 'Ava', 'o2&Kt5Pr'),
(168, 'Nora', 'p6@Ws3Jq'),
(169, 'Jack', 'q9&Ry5Ds'),
(170, 'Lucy', 'r4%Nm7Kp'),
(171, 'William', 's3@Lo2Rn'),
(172, 'Isabella', 'u8%Wp6As'),
(173, 'James', 'v7&Tn5Rm'),
(174, 'Penelope', 'y2@Pw8Sa'),
(175, 'Mason', 'z5%Rt3Qw'),
(176, 'Mia', 'c8&Hr2Ns'),
(177, 'Ella', 'd5%Zw6Js'),
(178, 'Jacob', 'f2@Ln9Dp'),
(179, 'Sophia', 'h9%Ko4As'),
(180, 'Ethan', 'i4%Nm7Ps'),
(181, 'Charlotte', 'k8&Fs3Lo'),
(182, 'noadmin10', 'q7%Ao5Np'),
(183, 'Daniel', 'l5%Rn8Qp'),
(184, 'Emily', 'n2@Kr5Ws');

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
