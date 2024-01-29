/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80027
 Source Host           : localhost:3306
 Source Schema         : dashboard_tna

 Target Server Type    : MySQL
 Target Server Version : 80027
 File Encoding         : 65001

 Date: 29/01/2024 21:06:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` mediumint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `m_sistem_sipatra_id` int NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, 'admin', 'administrator', 1);
INSERT INTO `groups` VALUES (2, 'karyawan', 'General User', 1);
INSERT INTO `groups` VALUES (3, 'verifikator', 'Verifikator SPJ, Cuti', 1);
INSERT INTO `groups` VALUES (4, 'HCM', 'Administrator HCM', 1);
INSERT INTO `groups` VALUES (5, 'Operator Asset', '-', 3);
INSERT INTO `groups` VALUES (6, 'Operator Logistik', '-', 3);
INSERT INTO `groups` VALUES (7, 'Sales & Marketing', '-', 2);
INSERT INTO `groups` VALUES (8, 'Procurement', '-', 2);
INSERT INTO `groups` VALUES (9, 'Legal', '-', 2);
INSERT INTO `groups` VALUES (10, 'Service Delivery', '-', 2);
INSERT INTO `groups` VALUES (11, 'Admin Siap Online', '', 2);
INSERT INTO `groups` VALUES (12, 'Verifikator Billing', '-', 2);
INSERT INTO `groups` VALUES (13, 'Network Operation', '-', 2);
INSERT INTO `groups` VALUES (14, 'Bussines and Develop', '-', 2);
INSERT INTO `groups` VALUES (15, 'Admin Asset', 'Admin dari sistem asset', 3);
INSERT INTO `groups` VALUES (16, 'Operator HCM', '-', 1);
INSERT INTO `groups` VALUES (19, 'Operator NO', '', 2);
INSERT INTO `groups` VALUES (20, 'Performance', '', 2);
INSERT INTO `groups` VALUES (22, 'BOD', '', 2);
INSERT INTO `groups` VALUES (23, 'Asset SIAP ONLINE', 'User asset untuk siap', 2);
INSERT INTO `groups` VALUES (24, 'Logistik Siap Online', 'operator logistik siap', 2);
INSERT INTO `groups` VALUES (25, 'Officer 3 Treasury', 'Officer 3 Treasury', 1);
INSERT INTO `groups` VALUES (26, 'Admin Unit', '', 1);
INSERT INTO `groups` VALUES (27, 'Billing', 'untuk view billing saja', 2);
INSERT INTO `groups` VALUES (28, 'Internal Audit & Ris', 'Bertanggung jawab untuk laporan terkait Internal Audit & Risk Management', 2);
INSERT INTO `groups` VALUES (29, 'Admin Procurement', 'Administrator Procurement', 5);
INSERT INTO `groups` VALUES (30, 'Admin Finance', 'admin finance', 1);
INSERT INTO `groups` VALUES (31, 'Admin Internal Audit', 'sebagai admin bispro', 1);
INSERT INTO `groups` VALUES (32, 'Verifikator SPB', 'Verifikasi Akun Anggaran', 1);
INSERT INTO `groups` VALUES (33, 'Finance', 'Segala kebutuhan informasi untuk keuangan', 2);
INSERT INTO `groups` VALUES (34, 'Admin (Procurement)', 'admin', 5);
INSERT INTO `groups` VALUES (35, 'Unit (Procurement)', 'unit', 5);
INSERT INTO `groups` VALUES (36, 'VP Unit (Procurement)', 'vp_unit', 5);
INSERT INTO `groups` VALUES (37, 'Asset (Procurement)', 'asset', 5);
INSERT INTO `groups` VALUES (38, 'User (Procurement)', 'user', 5);
INSERT INTO `groups` VALUES (39, 'VP Finance (Procurement)', 'vp_finance', 5);
INSERT INTO `groups` VALUES (40, 'AVP Procurement (Procurement)', 'avp_procurement', 5);
INSERT INTO `groups` VALUES (41, 'VP Asset & Procurement (Procurement)', 'vp_asset_procurement', 5);
INSERT INTO `groups` VALUES (42, 'Director of Finance & Adm(Procurement)', 'director_finance', 5);
INSERT INTO `groups` VALUES (43, 'President Director (Procurement)', 'president_director', 5);
INSERT INTO `groups` VALUES (44, 'AVP Logistic (Procurement)', 'avp_logistic', 5);
INSERT INTO `groups` VALUES (45, 'mitra', 'karyawan mitra', 1);
INSERT INTO `groups` VALUES (46, 'Admin Unit Panjar', 'Admin Unit Untuk Panjar', 4);
INSERT INTO `groups` VALUES (48, 'Budgeting Panjar', 'Budgeting Panjar', 4);
INSERT INTO `groups` VALUES (49, 'Treasury Tax Panjar 1', 'Treasury Tax Panjar 1', 4);
INSERT INTO `groups` VALUES (50, 'Treasury Tax Panjar 2', 'Treasury Tax Panjar 2', 4);
INSERT INTO `groups` VALUES (51, 'Fiatur Panjar', 'Fiatur Panjar', 4);
INSERT INTO `groups` VALUES (53, 'Staff Unit Panjar', 'Staff Unit Panjar', 4);
INSERT INTO `groups` VALUES (54, 'Revas', '', 6);
INSERT INTO `groups` VALUES (1, 'admin', 'administrator', 1);
INSERT INTO `groups` VALUES (2, 'karyawan', 'General User', 1);
INSERT INTO `groups` VALUES (3, 'verifikator', 'Verifikator SPJ, Cuti', 1);
INSERT INTO `groups` VALUES (4, 'HCM', 'Administrator HCM', 1);
INSERT INTO `groups` VALUES (5, 'Operator Asset', '-', 3);
INSERT INTO `groups` VALUES (6, 'Operator Logistik', '-', 3);
INSERT INTO `groups` VALUES (7, 'Sales & Marketing', '-', 2);
INSERT INTO `groups` VALUES (8, 'Procurement', '-', 2);
INSERT INTO `groups` VALUES (9, 'Legal', '-', 2);
INSERT INTO `groups` VALUES (10, 'Service Delivery', '-', 2);
INSERT INTO `groups` VALUES (11, 'Admin Siap Online', '', 2);
INSERT INTO `groups` VALUES (12, 'Verifikator Billing', '-', 2);
INSERT INTO `groups` VALUES (13, 'Network Operation', '-', 2);
INSERT INTO `groups` VALUES (14, 'Bussines and Develop', '-', 2);
INSERT INTO `groups` VALUES (15, 'Admin Asset', 'Admin dari sistem asset', 3);
INSERT INTO `groups` VALUES (16, 'Operator HCM', '-', 1);
INSERT INTO `groups` VALUES (19, 'Operator NO', '', 2);
INSERT INTO `groups` VALUES (20, 'Performance', '', 2);
INSERT INTO `groups` VALUES (22, 'BOD', '', 2);
INSERT INTO `groups` VALUES (23, 'Asset SIAP ONLINE', 'User asset untuk siap', 2);
INSERT INTO `groups` VALUES (24, 'Logistik Siap Online', 'operator logistik siap', 2);
INSERT INTO `groups` VALUES (25, 'Officer 3 Treasury', 'Officer 3 Treasury', 1);
INSERT INTO `groups` VALUES (26, 'Admin Unit', '', 1);
INSERT INTO `groups` VALUES (27, 'Billing', 'untuk view billing saja', 2);
INSERT INTO `groups` VALUES (28, 'Internal Audit & Ris', 'Bertanggung jawab untuk laporan terkait Internal Audit & Risk Management', 2);
INSERT INTO `groups` VALUES (29, 'Admin Procurement', 'Administrator Procurement', 5);
INSERT INTO `groups` VALUES (30, 'Admin Finance', 'admin finance', 1);
INSERT INTO `groups` VALUES (31, 'Admin Internal Audit', 'sebagai admin bispro', 1);
INSERT INTO `groups` VALUES (32, 'Verifikator SPB', 'Verifikasi Akun Anggaran', 1);
INSERT INTO `groups` VALUES (33, 'Finance', 'Segala kebutuhan informasi untuk keuangan', 2);
INSERT INTO `groups` VALUES (34, 'Admin (Procurement)', 'admin', 5);
INSERT INTO `groups` VALUES (35, 'Unit (Procurement)', 'unit', 5);
INSERT INTO `groups` VALUES (36, 'VP Unit (Procurement)', 'vp_unit', 5);
INSERT INTO `groups` VALUES (37, 'Asset (Procurement)', 'asset', 5);
INSERT INTO `groups` VALUES (38, 'User (Procurement)', 'user', 5);
INSERT INTO `groups` VALUES (39, 'VP Finance (Procurement)', 'vp_finance', 5);
INSERT INTO `groups` VALUES (40, 'AVP Procurement (Procurement)', 'avp_procurement', 5);
INSERT INTO `groups` VALUES (41, 'VP Asset & Procurement (Procurement)', 'vp_asset_procurement', 5);
INSERT INTO `groups` VALUES (42, 'Director of Finance & Adm(Procurement)', 'director_finance', 5);
INSERT INTO `groups` VALUES (43, 'President Director (Procurement)', 'president_director', 5);
INSERT INTO `groups` VALUES (44, 'AVP Logistic (Procurement)', 'avp_logistic', 5);
INSERT INTO `groups` VALUES (45, 'mitra', 'karyawan mitra', 1);
INSERT INTO `groups` VALUES (46, 'Admin Unit Panjar', 'Admin Unit Untuk Panjar', 4);
INSERT INTO `groups` VALUES (48, 'Budgeting Panjar', 'Budgeting Panjar', 4);
INSERT INTO `groups` VALUES (49, 'Treasury Tax Panjar 1', 'Treasury Tax Panjar 1', 4);
INSERT INTO `groups` VALUES (50, 'Treasury Tax Panjar 2', 'Treasury Tax Panjar 2', 4);
INSERT INTO `groups` VALUES (51, 'Fiatur Panjar', 'Fiatur Panjar', 4);
INSERT INTO `groups` VALUES (53, 'Staff Unit Panjar', 'Staff Unit Panjar', 4);
INSERT INTO `groups` VALUES (54, 'Revas', '', 6);
INSERT INTO `groups` VALUES (1, 'admin', 'administrator', 1);
INSERT INTO `groups` VALUES (2, 'karyawan', 'General User', 1);
INSERT INTO `groups` VALUES (3, 'verifikator', 'Verifikator SPJ, Cuti', 1);
INSERT INTO `groups` VALUES (4, 'HCM', 'Administrator HCM', 1);
INSERT INTO `groups` VALUES (5, 'Operator Asset', '-', 3);
INSERT INTO `groups` VALUES (6, 'Operator Logistik', '-', 3);
INSERT INTO `groups` VALUES (7, 'Sales & Marketing', '-', 2);
INSERT INTO `groups` VALUES (8, 'Procurement', '-', 2);
INSERT INTO `groups` VALUES (9, 'Legal', '-', 2);
INSERT INTO `groups` VALUES (10, 'Service Delivery', '-', 2);
INSERT INTO `groups` VALUES (11, 'Admin Siap Online', '', 2);
INSERT INTO `groups` VALUES (12, 'Verifikator Billing', '-', 2);
INSERT INTO `groups` VALUES (13, 'Network Operation', '-', 2);
INSERT INTO `groups` VALUES (14, 'Bussines and Develop', '-', 2);
INSERT INTO `groups` VALUES (15, 'Admin Asset', 'Admin dari sistem asset', 3);
INSERT INTO `groups` VALUES (16, 'Operator HCM', '-', 1);
INSERT INTO `groups` VALUES (19, 'Operator NO', '', 2);
INSERT INTO `groups` VALUES (20, 'Performance', '', 2);
INSERT INTO `groups` VALUES (22, 'BOD', '', 2);
INSERT INTO `groups` VALUES (23, 'Asset SIAP ONLINE', 'User asset untuk siap', 2);
INSERT INTO `groups` VALUES (24, 'Logistik Siap Online', 'operator logistik siap', 2);
INSERT INTO `groups` VALUES (25, 'Officer 3 Treasury', 'Officer 3 Treasury', 1);
INSERT INTO `groups` VALUES (26, 'Admin Unit', '', 1);
INSERT INTO `groups` VALUES (27, 'Billing', 'untuk view billing saja', 2);
INSERT INTO `groups` VALUES (28, 'Internal Audit & Ris', 'Bertanggung jawab untuk laporan terkait Internal Audit & Risk Management', 2);
INSERT INTO `groups` VALUES (29, 'Admin Procurement', 'Administrator Procurement', 5);
INSERT INTO `groups` VALUES (30, 'Admin Finance', 'admin finance', 1);
INSERT INTO `groups` VALUES (31, 'Admin Internal Audit', 'sebagai admin bispro', 1);
INSERT INTO `groups` VALUES (32, 'Verifikator SPB', 'Verifikasi Akun Anggaran', 1);
INSERT INTO `groups` VALUES (33, 'Finance', 'Segala kebutuhan informasi untuk keuangan', 2);
INSERT INTO `groups` VALUES (34, 'Admin (Procurement)', 'admin', 5);
INSERT INTO `groups` VALUES (35, 'Unit (Procurement)', 'unit', 5);
INSERT INTO `groups` VALUES (36, 'VP Unit (Procurement)', 'vp_unit', 5);
INSERT INTO `groups` VALUES (37, 'Asset (Procurement)', 'asset', 5);
INSERT INTO `groups` VALUES (38, 'User (Procurement)', 'user', 5);
INSERT INTO `groups` VALUES (39, 'VP Finance (Procurement)', 'vp_finance', 5);
INSERT INTO `groups` VALUES (40, 'AVP Procurement (Procurement)', 'avp_procurement', 5);
INSERT INTO `groups` VALUES (41, 'VP Asset & Procurement (Procurement)', 'vp_asset_procurement', 5);
INSERT INTO `groups` VALUES (42, 'Director of Finance & Adm(Procurement)', 'director_finance', 5);
INSERT INTO `groups` VALUES (43, 'President Director (Procurement)', 'president_director', 5);
INSERT INTO `groups` VALUES (44, 'AVP Logistic (Procurement)', 'avp_logistic', 5);
INSERT INTO `groups` VALUES (45, 'mitra', 'karyawan mitra', 1);
INSERT INTO `groups` VALUES (46, 'Admin Unit Panjar', 'Admin Unit Untuk Panjar', 4);
INSERT INTO `groups` VALUES (48, 'Budgeting Panjar', 'Budgeting Panjar', 4);
INSERT INTO `groups` VALUES (49, 'Treasury Tax Panjar 1', 'Treasury Tax Panjar 1', 4);
INSERT INTO `groups` VALUES (50, 'Treasury Tax Panjar 2', 'Treasury Tax Panjar 2', 4);
INSERT INTO `groups` VALUES (51, 'Fiatur Panjar', 'Fiatur Panjar', 4);
INSERT INTO `groups` VALUES (53, 'Staff Unit Panjar', 'Staff Unit Panjar', 4);
INSERT INTO `groups` VALUES (54, 'Revas', '', 6);
INSERT INTO `groups` VALUES (55, 'Approver Invoice', 'Approver Invoice', 0);

-- ----------------------------
-- Table structure for h_mutasi
-- ----------------------------
DROP TABLE IF EXISTS `h_mutasi`;
CREATE TABLE `h_mutasi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `no_sk` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_mutasi` date NULL DEFAULT NULL,
  `tgl_jabatan` date NULL DEFAULT NULL,
  `is_aktif` int NULL DEFAULT NULL,
  `m_organisasi_id` int NOT NULL,
  `m_karyawan_id` int NOT NULL,
  `r_jabatan_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1140 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of h_mutasi
-- ----------------------------
INSERT INTO `h_mutasi` VALUES (104, 'SK.023/D3.000/HCM.09/PTK/02.17', '2017-02-28', '2017-02-28', 0, 44, 240, 141);
INSERT INTO `h_mutasi` VALUES (249, '--', '2017-07-01', '2024-07-01', 1, 62, 247, 189);
INSERT INTO `h_mutasi` VALUES (628, 'PK.007/AK.110/03.14', '2014-03-04', '2024-03-04', 0, 50, 628, 172);

-- ----------------------------
-- Table structure for h_riwayat_usulan_tna
-- ----------------------------
DROP TABLE IF EXISTS `h_riwayat_usulan_tna`;
CREATE TABLE `h_riwayat_usulan_tna`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tgl` datetime NULL DEFAULT NULL,
  `Keterangan` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `h_usulan_id` int NOT NULL,
  `r_tahapan_usulan_id` int NOT NULL,
  `m_karyawan_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idx_h_riwayat_usulan_h_usulan_id`(`h_usulan_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 182634 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of h_riwayat_usulan_tna
-- ----------------------------

-- ----------------------------
-- Table structure for m_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `m_karyawan`;
CREATE TABLE `m_karyawan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nik_lama` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nik` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nik_tg` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nik_kontrak` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `inisial` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_masuk` date NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `tpt_lahir` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat_karyawan` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `npwp` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat_npwp` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_pengangkatan` date NULL DEFAULT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_aktif` int NULL DEFAULT NULL,
  `is_cuti_besar` tinyint(1) NULL DEFAULT 0,
  `idkary` int NULL DEFAULT NULL,
  `r_agama_id` int NOT NULL,
  `r_jenis_kelamin_id` int NOT NULL,
  `r_status_nikah_id` int NOT NULL,
  `r_bank_id` int NULL DEFAULT NULL,
  `r_status_karyawan_id` int NOT NULL,
  `r_telkom_group_id` int NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `r_province_regional_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `is_aktif`(`is_aktif` ASC) USING BTREE,
  INDEX `r_jenis_kelamin_id`(`r_jenis_kelamin_id` ASC) USING BTREE,
  INDEX `r_status_nikah_id`(`r_status_nikah_id` ASC) USING BTREE,
  INDEX `r_status_karyawan_id`(`r_status_karyawan_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1426 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of m_karyawan
-- ----------------------------
INSERT INTO `m_karyawan` VALUES (4, NULL, '8614051', '865613', NULL, 'AHMAD SOFIAN', 'HK', 'assets/dokumen/foto/karyawan/thumb_new_4.jpg', '2018-11-01', '1986-07-13', 'BOGOR', 'KP. MAMPANGAN RT001/RW017, KEMIRI MUKA, BEJI, DEPOK', '57.651.224.8-412.000', 'Kp. Areman RT005/RW005, Tugu, Cimanggis-Depok', '0000-00-00', '1570002775345', 1, NULL, 205, 3, 2, 3, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (5, NULL, '', '', NULL, 'N. DESTIAN MANGGALA GITA', 'DT', 'assets/dokumen/foto/karyawan/thumb_147.jpg', '2013-10-01', '1991-12-23', '-', '', '', '', '0000-00-00', '', 0, 0, 147, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (6, NULL, '', '', NULL, 'JOKO PRIYONO', 'JP', 'assets/dokumen/foto/karyawan/thumb_141.jpg', '2013-09-01', '1982-12-10', 'BOGOR', '', '35.425.113.2-412.000', 'Depok', '0000-00-00', '', 0, 0, 141, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', 21);
INSERT INTO `m_karyawan` VALUES (7, NULL, '', '', NULL, 'TEGUH WICAKSONO', 'TE', 'assets/dokumen/foto/karyawan/thumb_48.jpg', '2009-06-01', '1989-01-20', 'MEDAN', '', '0', 'Tidak ada', '0000-00-00', '', 0, 0, 48, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (8, NULL, '', '', NULL, 'LUKAS DANAR WAHANANTO PUTRA', 'LK', 'assets/dokumen/foto/karyawan/thumb_143.jpg', '2013-09-01', '1991-10-10', 'KLATEN', '', '', '', '0000-00-00', '', 0, 0, 143, 6, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (9, NULL, '', '', NULL, 'SATYA PRATAMA KADRANYATA', 'ST', 'assets/dokumen/foto/karyawan/thumb_160.jpg', '2014-02-03', '1986-06-09', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 160, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (10, NULL, '', '', NULL, 'BUDI CAHYONO', 'BO', 'assets/dokumen/foto/karyawan/thumb_168.jpg', '2014-05-01', '1991-06-11', 'SURAKARTA', '', '', '', '0000-00-00', '', 0, 0, 168, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (11, NULL, '', '', NULL, 'AGUNG LULUT TIRTO PRABOWO', 'AU', 'assets/dokumen/foto/karyawan/thumb_118.jpg', '2012-12-01', '1991-08-11', 'BANJARMASIN', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 118, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (12, NULL, '', '', NULL, 'OKY DWI CAHYA', 'OY', 'assets/dokumen/foto/karyawan/thumb_125.jpg', '2013-04-01', '1990-10-15', 'BEKASI', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 125, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (13, NULL, '', '', NULL, 'INDRA AGUNG SAPTO LAKSONO', 'IA', 'assets/dokumen/foto/karyawan/thumb_104.jpg', '2012-04-01', '1987-02-14', 'INDRAMAYU', '', '', '', '0000-00-00', '', 0, 0, 104, 3, 2, 2, 6, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (14, NULL, '9015001', '905694', NULL, 'ANGGI MONDERA AMINO', 'A0', 'assets/dokumen/foto/karyawan/thumb_209.jpg', '2015-01-22', '1990-01-14', 'SUKABUMI', 'Kp. Bojong Kulon, RT: 004 RW: 012, Sabandar, Karang Tengah, Kab. Cianjur', '72.084.779.7-405.000', 'Jln. Cukujang Kp. Cigadog No. 34 RT 01/11 Kel. Dayeuhluhur Kec. Warudoyong, Kota Sukabumi', '2017-03-01', '1820011003548', 1, NULL, 209, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (15, NULL, '', '', NULL, 'NANA PRIMANDA', 'NN', 'assets/dokumen/foto/karyawan/thumb_100.jpg', '2011-12-01', '1990-02-26', '-', '', '', '', '0000-00-00', '', 0, 0, 100, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (16, NULL, '', '', NULL, 'NOVAN MARSENI HARAHAP', 'NVV', 'assets/dokumen/foto/karyawan/thumb_124.jpg', '2013-04-01', '1980-11-13', '-', '', '', '', '0000-00-00', '', 0, 0, 124, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (17, NULL, '', '', NULL, 'IMAM SIBRO MUHLISI', 'IS', 'assets/dokumen/foto/karyawan/thumb_117.jpg', '2012-12-01', '1991-06-16', 'BREBES', '', 'Tidak ada', 'Tidak ada\r\n', '0000-00-00', '', 0, 0, 117, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (18, NULL, '', '925013', NULL, 'MOHAMMAD RAMDAN', 'RD', 'assets/dokumen/foto/karyawan/thumb_95.jpg', '2011-11-01', '1992-11-17', 'TASIKMALAYA', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 95, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (19, NULL, '', '', NULL, 'SAIFUL FATIHIN', 'S.', 'assets/dokumen/foto/karyawan/thumb_204.jpg', '2014-11-06', '1993-05-14', 'DEPOK', '', '', '', '0000-00-00', '', 0, 0, 204, 3, 2, 1, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (20, NULL, '', '', NULL, 'YADI TRIYADI', 'YT', 'assets/dokumen/foto/karyawan/thumb_94.jpg', '2011-11-01', '1989-09-13', 'TASIKMALAYA', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 94, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (21, NULL, '9114026', '9114026', NULL, 'TOTO DENORO', 'TD', 'assets/dokumen/foto/karyawan/thumb_190.jpg', '2014-10-15', '1991-11-01', 'TEGAL', 'Ciracas RT 008/ RW 010 	Ciracas	Ciracas 	Jakarta Timur \r\n', '', '', '0000-00-00', '9000028373042', 1, NULL, 190, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (22, NULL, '9214024', '9214024', NULL, 'SYARIFUDIN JABAR NUR', 'SJ', 'assets/dokumen/foto/karyawan/thumb_185.jpg', '2014-09-15', '1992-04-12', 'INDRAMAYU', 'Jl. Cagar Alam Selatan No.16 RT 003/RW 005 	Pancoran Mas	Pancoran Mas	Depok\r\n', '', '', '0000-00-00', '9000028733062', 1, NULL, 185, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (23, NULL, '', '', NULL, 'HELMY FACHRUDY', 'HF', 'assets/dokumen/foto/karyawan/thumb_105.jpg', '2012-04-01', '1988-04-23', 'JAKARTA', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 105, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (24, NULL, '', '', NULL, 'DANANG WIDYATMOKO', 'NW', 'assets/dokumen/foto/karyawan/thumb_107.jpg', '2012-07-01', '1994-08-05', 'BREBES', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 107, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (25, NULL, '', '925018', NULL, 'MUHAMMAD FAUZI', 'MF', 'assets/dokumen/foto/karyawan/thumb_81.jpg', '2011-06-01', '1992-05-24', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 81, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (26, NULL, '7214015', '7214015', NULL, 'KUKUH ARIAWAN', 'KA', 'assets/dokumen/foto/karyawan/thumb_174.jpg', '2014-07-16', '1972-08-15', 'SURABAYA', 'Baratajaya 12/22 RT 009/ RW 006 	Baratajaya	Gubeng 	Surabaya \r\n', '', '', '0000-00-00', '1420000089382', 1, NULL, 174, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (27, NULL, '9114018', '9114018', NULL, 'MUHAMMAD RUSMINAN', 'ME', 'assets/dokumen/foto/karyawan/thumb_178.jpg', '2014-09-15', '1991-11-10', 'BENUA KEPAYANG', 'Banua Kepayang RT 005/ RW 003 	Banua Kepayang	Labuan Amas Selatan 	Hulu Sungai Tengah \r\n', '', '', '0000-00-00', '9000028733047', 1, NULL, 178, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 28);
INSERT INTO `m_karyawan` VALUES (28, NULL, '8814034', '8814034', NULL, 'KOKO ANDRIANUS MANIK', 'KM', 'assets/dokumen/foto/karyawan/thumb_207.jpg', '2014-12-02', '1988-01-25', 'MARIHAT LANDBOW', 'Jl. Bahkora II Marihat III RT 003 RW 002	Marihat Jaya	Siantar Marimbun	Pematang Siantar\r\n', '', '', '0000-00-00', '9000030005236', 1, NULL, 207, 4, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (29, NULL, '', '925268', NULL, 'SYAIFUR ROHMAN', 'SI', 'assets/dokumen/foto/karyawan/thumb_194.jpg', '2014-10-29', '1992-10-15', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 194, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (30, NULL, '', '', NULL, 'YADI MULYADI', 'YA', 'assets/dokumen/foto/karyawan/thumb_193.jpg', '2014-11-03', '1992-10-22', '-', '', '', '', '0000-00-00', '', 0, 0, 193, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (31, NULL, '', '', NULL, 'DANI PURWANTO', 'DI', 'assets/dokumen/foto/karyawan/thumb_186.jpg', '2014-09-15', '1992-12-17', 'BANYUMAS', '', '', '', '0000-00-00', '', 0, 0, 186, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (32, NULL, '9314030', '9314030', NULL, 'RISKI DWI PRATAMA', 'KI', 'assets/dokumen/foto/karyawan/thumb_201.jpg', '2014-11-11', '1993-01-29', 'JAKARTA', 'Pondok Ungu Permai Blok E3 No. 1718 RT 007/ RW 014 	Kaliabang Tengah	Bekasi Utara	Bekasi\r\n', '', '', '0000-00-00', '9000028991520', 1, NULL, 201, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (33, NULL, '', '', NULL, 'PAMBAYUN IKRAR SETYAWAN', 'PM', 'assets/dokumen/foto/karyawan/thumb_129.jpg', '2013-05-01', '1989-03-09', '-', '', '', '', '0000-00-00', '', 0, 0, 129, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (34, NULL, '9214023', '925272', NULL, 'MUHAMMAD FAIZAL AMIR', 'FL', 'assets/dokumen/foto/karyawan/thumb_184.jpg', '2014-09-15', '1992-07-29', 'CILACAP', '', '', '', '0000-00-00', '', 0, 0, 184, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (35, NULL, '9114022', '9114022', NULL, 'IBNU HARJONO', 'BN', 'assets/dokumen/foto/karyawan/thumb_183.jpg', '2014-09-15', '1991-08-01', 'MAGELANG', 'Griya Kencana Asri Blok F3 nomor 2. RT 007 RW 001. Kel. Kencana Kec. Tanah Sareal Kota Bogor ', '', '', '0000-00-00', '9000028733021', 1, NULL, 183, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (36, NULL, '9014020', '905480', NULL, 'MUHAMMAD SYAIFUL ANAM', 'HD', 'assets/dokumen/foto/karyawan/thumb_180.jpg', '2014-09-15', '1990-04-14', 'LAMPUNG', '', '', '', '0000-00-00', '', 0, 0, 180, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', 26);
INSERT INTO `m_karyawan` VALUES (37, NULL, '', '', NULL, 'SHOOHIBUN NAJIIB', 'SN', 'assets/dokumen/foto/karyawan/thumb_108.jpg', '2012-08-01', '1986-01-17', 'JAKARTA', '', '59.179.850.9-407.000', 'KP. BARU RT 003/028 HARAPAN JAYA BEKASI UTARA BEKASI', '0000-00-00', '', 0, 0, 108, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', 34);
INSERT INTO `m_karyawan` VALUES (38, NULL, '', '915517', NULL, 'PRAYOGI GUSTI PRASETYO', 'PG', 'assets/dokumen/foto/karyawan/thumb_195.jpg', '2014-10-29', '1991-11-26', 'BEKASI', '', '', '', '0000-00-00', '', 0, 0, 195, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (39, NULL, '9014027', '90220231', NULL, 'RAMDANI', 'RG', 'assets/dokumen/foto/karyawan/thumb_191.jpg', '2014-10-15', '1990-04-21', 'BOGOR', 'KP. KALIMANGGIS, RT: 003/009 NO. 122 HARJAMUKTI, CIMANGGIS, DEPOK.', '70096243441412000', 'KP. KALIMANGGIS, RT: 003/009 NO. 122 HARJAMUKTI, CIMANGGIS, DEPOK.', '0000-00-00', '9000028373059', 1, 0, 191, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (40, NULL, '9014021', '905705', NULL, 'AHMAD MUSTOFA', 'TA', 'assets/dokumen/foto/karyawan/thumb_182.jpg', '2014-09-15', '1990-12-17', 'WONOSOBO', '', '', '', '0000-00-00', '', 0, 0, 182, 3, 2, 1, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (41, NULL, '', '', NULL, 'AGUS SUTRISNO', 'AS', 'assets/dokumen/foto/karyawan/thumb_110.jpg', '2012-09-01', '1993-08-18', 'KEBUMEN', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 110, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (42, NULL, '9114001', '915518', NULL, 'DWI TRIYANTO', 'DO', 'assets/dokumen/foto/karyawan/thumb_158.jpg', '2014-01-02', '1991-01-03', 'BANYUMAS', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 158, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (43, NULL, '', '885232', NULL, 'CATUR ISNANTO', 'CI', 'assets/dokumen/foto/karyawan/thumb_97.jpg', '2011-12-01', '1988-10-31', 'JAKARTA', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 97, 3, 2, 3, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (44, NULL, '9014031', '905706', NULL, 'RISKY GELAR MALIQ', 'KY', 'assets/dokumen/foto/karyawan/thumb_202.jpg', '2014-11-14', '1990-11-26', 'SEMARANG ', '', '', '', '0000-00-00', '', 0, 0, 202, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (45, NULL, '', '', NULL, 'SEFIADI', 'SI', 'assets/dokumen/foto/karyawan/thumb_85.jpg', '2011-07-01', '1993-05-25', '-', '', '', '', '0000-00-00', '', 0, 0, 85, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (46, NULL, '', '', NULL, 'MUHAMMAD HAFIDZ BISHRI', 'HZ', 'assets/dokumen/foto/karyawan/thumb_203.jpg', '2014-11-18', '1993-12-28', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 203, 3, 2, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (47, NULL, '', '', NULL, 'GALFA EKA SETIAWAN', 'GF', 'assets/dokumen/foto/karyawan/thumb_127.jpg', '2013-05-01', '1986-06-26', 'JEMBER', '', '', '', '0000-00-00', '', 0, 0, 127, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (48, NULL, '', '', NULL, 'EFELYN YUNITA HANDRIANI', 'EF', 'assets/dokumen/foto/karyawan/thumb_128.jpg', '2013-05-01', '1988-06-05', 'BOGOR', '', '98.377.017.3-403.000', 'KP. CIKEAS NAGRAK BL. - RT 003 RW. 001, NAGRAK-GUNUNG PUTRI BOGOR', '0000-00-00', '5170105219118', 0, 0, 128, 3, 3, 2, 8, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (49, NULL, '', '', NULL, 'INDRIYA KARTIKA', 'IK', 'assets/dokumen/foto/karyawan/thumb_215.jpg', '2015-03-23', '1991-09-12', 'MAJALENGKA', '', '66.261.769.5-438.000', 'BLOK JUM\'AT RT:001/002 DESA LEUWEUNG GEDE, KECAMATAN JATIWANGI, KABUPATEN MAJALENGKA, JAWA BARAT', '0000-00-00', '', 0, 0, 215, 3, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (50, NULL, '', '', NULL, 'NADIA FITRIANA', 'NT', 'assets/dokumen/foto/karyawan/thumb_197.jpg', '2014-12-08', '1990-04-25', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 197, 3, 3, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (51, NULL, '', '', NULL, 'NUR WAHYUNI', 'NI', 'assets/dokumen/foto/karyawan/thumb_166.jpg', '2014-04-28', '1988-03-06', 'JAKARTA', '', '09.084.5827-031.000', 'Jl. Damai No. 30 RT. 002/RW. 005\r\nKel. Kota Bambu Utara, Kec. Palmerah\r\nJakarta Barat', '0000-00-00', '', 0, 0, 166, 3, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (52, NULL, '', '', NULL, 'TRI BUDI SAPUTRO', 'TB', 'assets/dokumen/foto/karyawan/thumb_188.jpg', '2014-09-15', '1989-01-31', '-', '', '', '', '0000-00-00', '', 0, 0, 188, 5, 2, 1, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (53, NULL, '', '', NULL, 'EUIS ROHAETI', 'ER', 'assets/dokumen/foto/karyawan/thumb_131.jpg', '2013-06-01', '1976-07-06', 'BANDUNG', '', '47.752.912.7-072.000', 'JL. PETAMBURAN V RT.005 RW.008 PETAMBURAN, TANAH ABANG, JAKARTA PUSAT', '0000-00-00', '6070232764', 0, 0, 131, 3, 3, 2, 1, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (54, NULL, '8914028', '895626', NULL, 'RIENA WIDIANA', 'RW', 'assets/dokumen/foto/karyawan/thumb_192.jpg', '2014-10-23', '1989-03-07', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 192, 3, 3, 3, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (56, NULL, '', '', NULL, 'OVINA AMBAR SARI', 'VN', 'assets/dokumen/foto/karyawan/thumb_78.jpg', '2011-02-01', '1989-10-18', '-', '', '', '', '0000-00-00', '', 0, 0, 78, 3, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (57, NULL, '', '', NULL, 'RESLY EVALINA', 'RE', 'assets/dokumen/foto/karyawan/thumb_77.jpg', '2011-02-01', '1989-10-18', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 77, 5, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (58, NULL, '', '', NULL, 'NURI UMSIYANTO', 'NU', 'assets/dokumen/foto/karyawan/thumb_161.jpg', '2014-02-25', '1985-07-17', '-', '', '', '', '0000-00-00', '', 0, 0, 161, 5, 2, 1, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (59, NULL, '', '', NULL, 'DEAN FITRA', 'DT', 'assets/dokumen/foto/karyawan/thumb_181.jpg', '2014-09-15', '1989-01-01', '-', '', '', '', '0000-00-00', '', 0, 0, 181, 5, 2, 1, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (60, NULL, '', '', NULL, 'FITRI APRILIANA', 'FAA', 'assets/dokumen/foto/karyawan/thumb_115.jpg', '2012-12-01', '1990-04-30', 'BOGOR', '', '54.064.877.1-412.000', 'Jln.H.Dimun Raya gang nurul iman 1 RT.04/06 No.70 kel.sukamaju kec. cilodong\r\nkota depom 16415', '0000-00-00', '', 0, 0, 115, 3, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (61, NULL, '9314019', '9314019', NULL, 'RIZLY  RONI VENDA SINAGA', 'RO', 'assets/dokumen/foto/karyawan/thumb_179.jpg', '2014-09-15', '1993-01-31', 'BUAH BOLON', 'Perum Billabong Jl. Rusa blok G2-O No. 38. Rt 004 Rw 16  Kel. cimanggis, Kec. Bojong Gede, Kab. Bogor\r\n', '85.506.448.1-117.000', 'Buah Bolon\r\nMerek Raya\r\nKab.Simalungun Sumatera Utara', '2016-01-01', '9000028733013', 1, NULL, 179, 6, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (62, NULL, '9214025', '9214025', NULL, 'NOFISKA RIZKY HAPPY FANDANI', 'NF', 'assets/dokumen/foto/karyawan/thumb_187.jpg', '2014-09-15', '1992-11-05', 'BAYUMAS ', 'Ciberung RT 002/ RW 006 	Ciberung	Aji Barang 	Banyumas \r\n', '', '', '0000-00-00', '9000028733039', 1, NULL, 187, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (63, NULL, '7914014', '7914014', NULL, 'MHD. SYAHRIL EFENDI HASIBUAN', 'SE', 'assets/dokumen/foto/karyawan/thumb_173.jpg', '2014-07-16', '1979-04-06', 'MEDAN', 'Dusun VIII Wonosari RT -/ RW - 	Wonosari	Tanjung Morawa	Deli Serdang\r\n', '', '', '0000-00-00', '1050011590134', 1, NULL, 173, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 31);
INSERT INTO `m_karyawan` VALUES (64, NULL, '', '', NULL, 'HERU ADI PRASETYO', 'HR', 'assets/dokumen/foto/karyawan/thumb_116.jpg', '2012-12-01', '1991-06-09', 'BANYUMAS', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 116, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (65, NULL, '', '', NULL, 'RIFQI FEBRIANSYAH', 'RQ', 'assets/dokumen/foto/karyawan/thumb_134.jpg', '2013-07-01', '1989-02-01', 'INDRAMAYU', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 134, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (66, NULL, '', '', NULL, 'INDRA BHARATA', 'IB', 'assets/dokumen/foto/karyawan/thumb_165.jpg', '2014-04-07', '1989-04-25', 'JAKARTA', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 165, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (67, NULL, NULL, NULL, NULL, 'YOGGA CHRISTYA PRATAMA', '', 'assets/dokumen/foto/karyawan/thumb_163.jpg', NULL, '1989-08-09', 'BANDUNG', '', 'Tidak ada', 'Tidak ada', NULL, '', NULL, 0, 163, 3, 2, 3, 10, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (68, NULL, '', '', NULL, 'SAMSU DANIANSYAH', 'SD', 'assets/dokumen/foto/karyawan/thumb_113.jpg', '2012-12-01', '1984-11-19', 'BANDUNG', '', '', '', '0000-00-00', '2531393599', 0, 0, 113, 3, 2, 3, 3, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (69, NULL, '795620', '795620', NULL, 'FERRY ANANTYA PUTRA', 'FE', 'assets/dokumen/foto/karyawan/thumb_212.jpg', '2015-03-13', '1979-05-12', 'SIDOARJO', 'Cibubur', '593559560617000', '', '2016-07-01', '1020006397704', 0, 0, 212, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (70, NULL, '', '905480', NULL, 'ACHMAD SYAIFUL ANAM', 'HS', 'assets/dokumen/foto/karyawan/thumb_139.jpg', '2013-08-01', '1991-02-14', 'JAKARTA', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 139, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (71, NULL, '', '', NULL, 'ANDRIYANA', 'RI', 'assets/dokumen/foto/karyawan/thumb_162.jpg', '2014-03-03', '1981-08-22', 'BANDUNG', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '9000024599996', 0, 0, 162, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (72, NULL, '9415013', '945159', NULL, 'NOVIA RAHMADIA SARI', 'VI', 'assets/dokumen/foto/karyawan/thumb_230.jpg', '2016-10-03', '1994-11-05', 'Jakarta', 'Griya Alam Sentosa Blok B9 No.7, RT07/RW08, Cileungsi, Bogor, 16820', '81.887.431.5-436.000', 'Griya Alam Sentosa Blok B9 No.7, RT07/RW08, Cileungsi, Bogor, 16820', '2018-02-01', '', 1, 0, 230, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (73, NULL, '9115015', '915991', NULL, 'MUHAMMAD  HARUN AL RASYID', 'RD', 'assets/dokumen/foto/karyawan/thumb_229.jpg', '2016-11-02', '1991-11-07', 'SURABAYA', 'JL. SULTAN ALAUDDIN III KOMPLEKS GRIYA TELKOM A NO. 6 RT. 007/ RW. 005, MANGASA, TAMALATE, KOTA MAKASSAR', '76.324.530.5-804.000', 'JL. SULTAN ALAUDDIN III KOMPLEKS GRIYA TELKOM A NO. 6 RT. 007/ RW. 005, MANGASA, TAMALATE, KOTA MAKASSAR', '2018-02-01', '0993930933', 1, 0, 229, 3, 2, 3, 5, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (74, NULL, '9213005', '925914', NULL, 'MUHAMMAD RIDWAN', 'MD', 'assets/dokumen/foto/karyawan/thumb_new_74.jpg', '2018-11-01', '1992-04-11', 'Bogor', 'JL. KAPITAN III RT: 001 RW:004 SUKATANI, NO 206 TAPOS, DEPOK, JAWA BARAT', '747053577412000', 'KP. BABAKAN JL. KAPITAN III RT: 001 RW:004 SUKATANI, TAPOS, DEPOK, JAWA BARAT', '2021-08-01', '9000017211898', 1, NULL, 126, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (75, NULL, '8213016', '8213016', NULL, 'YANA MULYANA', 'YM', 'assets/dokumen/foto/karyawan/thumb_138.jpg', '2015-03-01', '1982-12-16', 'BANDUNG ', 'Jl. Margaluyu No.29 RT 001/ RW 002 	Cimahi 	Cimahi Tengah	Cimahi \r\n', 'Tidak ada', 'Tidak ada', '0000-00-00', '1310009792963', 1, NULL, 138, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (76, NULL, '9115020', '9115020', NULL, 'NANDA KRISIAN', 'ND', 'assets/dokumen/foto/karyawan/thumb_65.jpg', '2015-05-04', '1991-04-08', 'BANYUMAS', 'Jl. Nurul Hikmah II NO. 87 Kelapa Dua RT 006/ RW 011 	Tugu	Cimanggis	Depok\r\n', 'Tidak ada', 'Tidak ada', '0000-00-00', '1370006463844', 0, 0, 65, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (77, NULL, '875639', '8717037', NULL, 'IBNU SILO ANGGORO', 'IA', 'assets/dokumen/foto/karyawan/thumb_new_77.jpg', '2017-11-01', '1987-07-14', 'SURAKARTA', 'Perumahan Billabong Permai, Blok G 2 O no 11, RT 04 RW 16, Cimanggis, Bojong Gede, Kabupaten Bogor, Jawa Barat', '54.725.291.6.526.000', 'Mutihan RT 02 RW 11 Sondakan Laweyan Surakarta', '2017-11-01', '1290007823905', 1, 0, 169, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (79, NULL, '8111009', '8111009', NULL, 'BUDI HARTONO', 'BR', 'assets/dokumen/foto/karyawan/thumb_91.jpg', '2011-09-01', '1981-04-04', 'TASIKMALAYA', 'Komp. Bumidaya Turangga No. 7 RT 008/ RW 003 	Manarap Tengah	Kertak Hanyar	Banjar \r\n', 'Tidak ada', 'Tidak ada', '0000-00-00', '1670000410661', 1, NULL, 91, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 26);
INSERT INTO `m_karyawan` VALUES (80, NULL, '9116003', '9116003', NULL, 'ADI PRASETYA PRATAMA', 'PE', 'assets/dokumen/foto/karyawan/thumb_260.jpg', '2016-01-04', '1991-05-02', 'BANDUNG', 'Perum Pesona Kahuripan 3 Jl. Pangeran diponegoro 1 blok C1 No 06  Kec Klapanunggal kab Bogor kode pos 16710', '80.577.346.2-405-000', 'Jl Biduri raya no 137 perum Baros Sukabumi', '2016-01-04', '1670001760098', 1, NULL, 260, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (81, NULL, '9212005', '9212005', NULL, 'TAUFIK NUROCHMAN', 'TF', 'assets/dokumen/foto/karyawan/thumb_119.jpg', '2012-12-01', '1992-02-21', 'BANJARNEGARA', 'Binangun RT 003/ RW 014 	Klampok	Purwareja Klampok	Banjarnegara\r\n', 'Tidak ada', 'Tidak ada', '0000-00-00', '1360007503342', 0, 0, 119, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (82, NULL, '9311004', '935006', NULL, 'HANIF AZIZ ELFIN', 'HA', 'assets/dokumen/foto/karyawan/thumb_new_82.jpg', '2018-04-01', '1993-12-12', 'CIREBON', 'JL. LEDENG GG 7 SITOPENG, RT:006 RW:009, KALIJAGA, HARJAMUKTI, KOTA CIREBON', '845131515426000', 'JL. LEDENG GG 7 SITOPENG, RT:006 RW:009, KALIJAGA, HARJAMUKTI, KOTA CIREBON', '2021-08-01', '1670000312834', 1, 0, 84, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (83, NULL, '8509002', '8509002', NULL, 'NURIYANTO', 'NY', 'assets/dokumen/foto/karyawan/thumb_47.jpg', '2009-06-01', '1985-04-30', 'BANTUL', 'Jl. Johar Baru V No.16 RT 010 /RW 005 	Johar Baru	Johar Baru 	Jakarta  Pusat \r\n', '', '', '0000-00-00', '1290007050939', 1, NULL, 47, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (84, NULL, '8811016', '', NULL, 'CHYNTIA REZHA SEPTIANTIKA', 'CR', 'assets/dokumen/foto/karyawan/thumb_76.jpg', '2011-02-01', '1988-09-24', 'CIMAHI', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 76, 3, 3, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (85, NULL, '9315017', '935347', NULL, 'IRA ANDINI', 'IR', 'assets/dokumen/foto/karyawan/thumb_232.jpg', '2015-11-02', '1993-07-06', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 232, 3, 3, 2, 13, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (86, NULL, '928561', '928561', NULL, 'MUTIARANI FIRDAUS', 'MU', 'assets/dokumen/foto/karyawan/thumb_236.jpg', '2016-11-16', '1992-08-10', 'Bandung', 'Perumahan Taman Juanda Blok I2 No. 12 Duren Jaya, Bekasi Timur', '716214598407000', 'Perumahan taman juanda blok i2 no.12 RT.009 RW.004 Kel Duren Jaya Kec Bekasi Timur', '2018-02-01', '1670001732394 Mandiri a.n Mutiarani Firdaus', 1, 0, 236, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (87, NULL, '8912006', '8912006', NULL, 'RAHMAN SAPUTRA', 'RS', 'assets/dokumen/foto/karyawan/thumb_102.jpg', '2012-01-01', '1989-05-10', 'JAKARTA', 'Perum Green Citayam City Blok AA7 No. 8, Ragajaya, Bojonggede, Bogor', '45.057.973.5-412.000', 'Tidak ada', '0000-00-00', '1670001760106', 1, NULL, 102, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (88, NULL, '8911014', '895105', NULL, 'BAMBANG AKBAR SUDIBYO', 'BA', 'assets/dokumen/foto/karyawan/thumb_99.jpg', '2011-12-01', '1989-07-12', 'JAKARTA', '', '48.657.959.2.413.000', 'Jl. Bima Asri VII/15 Kot Lgenda Bekasi', '0000-00-00', '', 0, 0, 99, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (89, NULL, '9311018', '935559', NULL, 'REZKY SEPRIANSYAH', 'RZ', 'assets/dokumen/foto/karyawan/thumb_new_89.jpg', '2018-04-01', '1993-09-25', 'JAKARTA ', 'TAMAN MANGU INDAH H 3/20, RT:008 RW:006, PONDOK AREN, PONDOK AREN, KOTA TANGERANG SELATAN', '753227776453000', 'Tidak ada', '0000-00-00', '1670001747061', 0, 0, 83, 3, 2, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (90, NULL, '8711011', '8711011', NULL, 'DEDDY RIHARDO P. SINABARIBA', 'DD', 'assets/dokumen/foto/karyawan/thumb_93.jpg', '2011-11-01', '1987-11-22', 'BALAM SEMPURNA', 'Jl Saudara Perum Golden Palace Blok B No. 29 RT -/ RW - 	Beringin	Medan Selayang 	Medan \r\n', 'Tidak ada', 'Tidak ada', '0000-00-00', '1390007873395', 1, NULL, 93, 6, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (91, NULL, '9311017', '9311017', NULL, 'SLAMET RIYADI', 'SR', 'assets/dokumen/foto/karyawan/thumb_82.jpg', '2011-06-01', '1993-05-31', 'JAKARTA', 'Jl. Pulo Nangka RT 003/ RW 002 	Rawa Buaya	Cengkareng	Jakarta Barat\r\n', 'Tidak ada', 'Tidak ada', '0000-00-00', '', 0, 0, 82, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (92, NULL, '9115016', '915990', NULL, 'GALIH PRABA KUSUMA', 'GP', 'assets/dokumen/foto/karyawan/thumb_231.jpg', '2016-11-02', '1991-09-22', 'PURWOREJO', 'JL PUSKESMAS RT:005 RW:003 CEGER, KECAMATAN CIPAYUNG. JAKARTA TIMUR', '468423231435000', 'JL SWADAYA IV RT:001 RW:001 PULOGEBANG, CAKUNG. JAKARTA TIMUR', '2017-11-01', '1360006740960', 1, 0, 231, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (93, NULL, '8913008', '895175', NULL, 'MUKHLISIN', 'MN', 'assets/dokumen/foto/karyawan/thumb_135.jpg', '2013-07-01', '1989-08-25', 'TEGAL', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '1540007857778', 0, 0, 135, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (94, NULL, '8809007', '885206', NULL, 'BOBBY SAHAT MARGOMGOM SIAHAAN', 'BB', 'assets/dokumen/foto/karyawan/thumb_new_94.jpg', '2017-11-01', '1988-09-27', 'SUMATERA UTARA', 'Pesona Teratai 2, Jln. Raya Kalimulya Gang Pilus No.6, Rt01/Rw02, Kel. Kalimulya, Kec, Cilodong, Kota Depok, Jawa Barat 16471', '664405529116000', 'Jln. Thamrin Complex PU No. 32 Rantau Prapat', '2020-08-01', '1290007269257', 1, 0, 54, 6, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (95, NULL, '8012003', '805168', NULL, 'RONALD ', 'RL', 'assets/dokumen/foto/karyawan/thumb_new_95.jpg', '2018-04-01', '1980-11-12', 'JAKARTA', 'JL. Raya Jakarta – Bogor Gg. SMP Segar, No.45\r\nRT 002/001 Sidamukti Kelurahan Sukamaju, Kecamatan Cilodong \r\nDepok 16475', '45.222.363.9-412.000', 'Jl. Raya Jakarta Bogor Km. 38 No : 45 Gg. SMP Segar RT 0 RW 01 \r\nSukamajau Cilodong\r\n Kota Depok Jawa Barat', '0000-00-00', '1670001775807', 0, 0, 112, 6, 2, 1, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (96, NULL, '9116004', '9116004', NULL, 'MEISYA NUR IRYANTI', 'MT', 'assets/dokumen/foto/karyawan/thumb_261.jpg', '2016-02-09', '1991-05-05', 'BANDUNG', '', '', '', '0000-00-00', '', 0, 0, 261, 3, 3, 2, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (97, NULL, '8416007', '8416007', NULL, 'HERLIANA RACHMA NITA', 'RC', 'assets/dokumen/foto/karyawan/thumb_271.jpg', '2016-07-25', '1984-10-20', 'SURAKARTA', '', '', '', '0000-00-00', '', 0, 0, 271, 3, 3, 3, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (99, NULL, '9113014', '9113014', NULL, 'RIZKY RAMADHAN', 'RR', 'assets/dokumen/foto/karyawan/thumb_130.jpg', '2013-05-01', '1991-03-23', 'CIREBON', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '9000018041351', 0, 0, 130, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (100, NULL, '9215020', '9215020', NULL, 'RANGGA PUTRA RIMBA', 'GR', 'assets/dokumen/foto/karyawan/thumb_263.jpg', '2015-03-01', '1992-09-19', 'Jakarta', '', '', '', '0000-00-00', '1670001747228', 1, 0, 263, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (101, NULL, '9112001', '9112001', NULL, 'RIZKY SURYADI', 'RK', 'assets/dokumen/foto/karyawan/thumb_109.jpg', '2012-09-01', '1991-04-26', 'JAKARTA', 'Jl. Selemba Tengah IX/C.127 RT 011/ RW 004 	Paseban	Senen 	Jakarta Pusat\r\n', 'Tidak ada', 'Tidak ada', '0000-00-00', '9000008904964', 1, NULL, 109, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (102, NULL, '8415021', '8415021', NULL, 'ADI MAULANA', 'DM', 'assets/dokumen/foto/karyawan/thumb_264.jpg', '2015-03-01', '1984-12-11', 'Jakarta', '', '', '', '2015-03-01', '1270007171802', 1, NULL, 264, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (104, NULL, '906202', '906202', NULL, 'NURUL QAMARIYAH', 'NQ', 'assets/dokumen/foto/karyawan/thumb_279.jpg', '2017-12-01', '1990-10-22', 'Pamekasan', 'Jl. Pelabuhan branta pesisir, Tianakan, Pamekasan-Madura', '73.452.836.7-608.000', 'Jl. Pelabuhan branta pesisir, Tianakan, Pamekasan-Madura', '0000-00-00', '1670001870426', 0, 0, 279, 3, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (105, NULL, '7810003', '7810003', NULL, 'SEFUL ROCHMAN', 'SF', 'assets/dokumen/foto/karyawan/thumb_57.jpg', '2010-03-28', '1978-12-22', 'PURBALINGGA', '', '35.449.961.8-529.000', 'Jl. SD 1 Karang Tengah RT. 005/RW. 002,\r\nKarang Tengah, Kertanegara, Purbalingga\r\nJawa Tengah', '0000-00-00', '', 0, NULL, 57, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (106, NULL, '9616010', '9616010', NULL, 'SALSABILA RISTI R', 'SR', 'assets/dokumen/foto/karyawan/thumb_280.jpg', '2016-11-21', '1996-02-01', 'BANDUNG', '', '86.068.669.0-422.000', 'Jalan Kopo Gang Parasdi No. 9 RT 05/08 Kelurahan Situsaeur Kecamatan Bojongloa Kidul Kota Bandung Jawa Barat', '0000-00-00', '1670001872083', 0, 0, 280, 3, 3, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (107, '11102002', '7811001', '7811001', NULL, 'RAHMADI', 'RH', 'assets/dokumen/foto/karyawan/thumb_75.jpg', '2011-02-01', '1978-06-16', 'JAKARTA', '', 'Tidak ada', 'Tidak ada', NULL, '129-00-0782665-0', 1, 0, 75, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (108, NULL, '9216012', '9216012', NULL, 'HARMANDA MANDALA', 'HL', 'assets/dokumen/foto/karyawan/thumb_282.jpg', '2016-09-09', '1992-03-13', 'PANGKAJENE', 'Aek Batu RT 001/ RW 001	Aek Batu	Torgamba	Labuhan Batu Selatan \r\n', '', '', '0000-00-00', '1670001775773', 1, NULL, 282, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (109, NULL, NULL, NULL, NULL, 'BASRI PURBA', '', 'assets/dokumen/foto/karyawan/thumb_265.jpg', NULL, '1990-06-02', 'Manik Saribu', '', '', '', NULL, '1670001760114', NULL, 0, 265, 5, 2, 1, 10, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (110, NULL, '9015023', '9015023', NULL, 'ILHAM SATRIO PINASTIKO', 'PO', 'assets/dokumen/foto/karyawan/thumb_266.jpg', '2015-10-01', '1992-12-15', 'Jakarta', 'Jl. Nusantara III Blok B No. 236 RT 011/ RW 015	Jatimulya	Tambun Selatan	Bekasi\r\n', '', '', '0000-00-00', '1670001747251', 0, 0, 266, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (111, NULL, '9116013', '9116013', NULL, 'JUANDA MAULANA', 'JM', 'assets/dokumen/foto/karyawan/thumb_283.jpg', '2016-10-03', '1991-04-13', 'Langsa', 'Jl. P Polem No. 207 RT -/ RW - 	Gampong Jawa	Langsa Kota	Langsa \r\n', '', '', '0000-00-00', '1580000618355', 1, NULL, 283, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (112, NULL, '9115019', '9115019', NULL, 'NURAENI PUJI LASTIKA', 'TK', 'assets/dokumen/foto/karyawan/thumb_262.jpg', '2015-12-01', '1991-08-26', 'TEGAL', '', '', '', '0000-00-00', '', 0, 0, 262, 3, 3, 1, 13, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (113, '11007014', '7310016', '7310016', NULL, 'ARI PRAMASTO', 'AO', 'assets/dokumen/foto/karyawan/thumb_68.jpg', '2010-07-01', '1973-08-16', 'JAKARTA', '', 'Tidak ada', 'Tidak ada', NULL, '129-000758011-7', 1, 0, 68, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (114, NULL, '7613015', '7613015', NULL, 'ARIF WIDYA SUSANTO', 'AW', 'assets/dokumen/foto/karyawan/thumb_137.jpg', '2013-08-01', '1976-03-30', 'NGAWI', 'Jl. Penggalang No. 38 RT 028/ RW -  	Damai	Balikpapan	Balikpapan\r\n', '14.471.133.0-721.000', 'Perum Griya Permata Asri\r\nJl. Thames Blok F No. 155 RT. 90\r\nKel. Gunung Bahagia, Kec. Balikpapan Selatan, Kota Balikpapan\r\nKalimantan Timur', '0000-00-00', '0074329971', 1, NULL, 137, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', 27);
INSERT INTO `m_karyawan` VALUES (115, NULL, '8516001', '8516001', NULL, 'FAJAR HARIAWAN', 'FJ', 'assets/dokumen/foto/karyawan/thumb_258.jpg', '2016-01-04', '1985-05-21', 'Jakarta', '', '', '', '0000-00-00', '9000017969404', 1, 0, 258, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (116, NULL, '906114', '906114', NULL, 'ONKY YUDISETYAWAN SAPUTRA', 'ON', 'assets/dokumen/foto/karyawan/thumb_237.jpg', '2016-10-03', '1990-03-30', 'Semarang', 'Perum. Batu Putih Cibubur No. 12, Harjamukti, Cimanggis, Depok', '769011222412000', 'TAUFIK B. UNTUNG SUTOPO', '2017-11-01', '1670001732527 Mandiri a.n Onky Yudisetyawan Saputra', 1, 0, 237, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (117, NULL, '8816002', '88220232', NULL, 'SINUNG MAULANA', 'SG', 'assets/dokumen/foto/karyawan/thumb_259.jpg', '2016-01-04', '1988-05-21', 'Solo', '', '', '', '0000-00-00', '1670001747277', 1, 0, 259, 3, 2, 2, 10, 12, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (118, NULL, '9009003', '9009003', NULL, 'HERI SUPRIONO', 'HE', 'assets/dokumen/foto/karyawan/thumb_49.jpg', '2009-06-01', '1990-08-24', 'BANJARNEGARA', 'Bilungan RT 003/ RW 004	Kecitran	Purwareja Klampok 	Banjarnegara\r\n', '0', 'Tidak ada', '0000-00-00', '0171823756', 1, NULL, 49, 3, 2, 2, 5, 3, 1, '2019-08-31 08:39:31', 15);
INSERT INTO `m_karyawan` VALUES (119, NULL, '8611012', '865123', NULL, 'AA NGURAH PRIMA INDRAYANA', 'NP', 'assets/dokumen/foto/karyawan/thumb_96.jpg', '2011-12-01', '1986-11-11', 'YOGYAKARTA ', '', 'Tidak ada', 'Tidak ada', '0000-00-00', '2800826601', 0, 0, 96, 2, 2, 2, 3, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (120, NULL, '9213017', '925269', NULL, 'KARTIKO MUKTI WIDODO', 'KR', 'assets/dokumen/foto/karyawan/thumb_149.jpg', '2017-11-01', '1992-09-12', 'Banyumas', '', '', '', '2020-08-01', '9000020554409', 1, 0, 149, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (121, NULL, '6416011', '642154', NULL, 'HERAMARWAN', 'HMW', 'assets/dokumen/foto/karyawan/thumb_281.jpg', '2016-11-01', '1964-03-19', 'Cimahi', 'Jl Pelabuhan Ratu No 52 Bekasi', '092609742407000', '', '0000-00-00', '0700002157928', 0, 0, 281, 3, 2, 3, 10, 10, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (122, NULL, '6514002', '651144', NULL, 'ENDI FITRI HERLIANTO', 'EF', 'assets/dokumen/foto/karyawan/thumb_new_122.jpg', '2014-01-03', '1965-10-14', 'MEDAN', 'Jl. Danau Mahalona B.4/14 RT. 04/RW. 21\r\nKel. Mekarsari', '24.003.550.1.412.000', 'Jl. Danau Mahalona B.4/14 RT. 04/RW. 21\r\nKel. Mekarsari', '0000-00-00', '0700094040370', 0, 0, 159, 3, 2, 3, 10, 7, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (123, NULL, '6516005', '651147', NULL, 'ANDY REVARA', 'AR', 'assets/dokumen/foto/karyawan/thumb_new_123.jpg', '2016-05-02', '1965-10-11', 'JAKARTA', 'TAMAN SARI BUKIT BDG B-XVI NO.18, RT:006 RW:011, SINDANG JAYA, MANDALAJATI, KOTA BANDUNG', '', '', '0000-00-00', '7401723173', 0, 0, 267, 3, 2, 3, 3, 7, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (124, NULL, '', '', NULL, 'KEN ANNISA', 'KE', 'assets/dokumen/foto/karyawan/thumb_208.jpg', '2014-12-01', '1979-12-26', 'KUNINGAN', '', '', '', '0000-00-00', '', 0, 0, 208, 3, 3, 1, 13, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (125, NULL, '', '', NULL, 'I GUSTI PUTU WIDHIANA', 'PW', 'assets/dokumen/foto/karyawan/thumb_106.jpg', '2012-05-01', '1957-12-26', '-', '', '', '', '0000-00-00', '', 0, 0, 106, 2, 2, 3, 13, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (126, NULL, '', '', NULL, 'ZULHELDI', 'ZH', 'assets/dokumen/foto/karyawan/thumb_210.jpg', '2015-03-13', '1959-06-06', 'BUKITTINGGI', '', '', '', '0000-00-00', '', 0, 0, 210, 3, 2, 3, 13, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (127, NULL, '6515005', '651030', NULL, 'RUBEIN AMARA', 'RA', 'assets/dokumen/foto/karyawan/thumb_214.jpg', '2015-03-13', '1965-01-29', 'MEDAN', 'JL. TERNATE RAYA BLOK D I NO. 8\r\nPERUMNAS 3 RT.004 RW.017\r\nAREN JAYA BEKASI TIMUR,\r\nKOTA MADYA BEKASI', '09.261.448.6-407.000', '', '0000-00-00', '', 0, 0, 214, 3, 2, 3, 13, 7, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (128, NULL, '6614012', '660379', NULL, 'HADI WALUYO', 'HW', 'assets/dokumen/foto/karyawan/thumb_175.jpg', '2022-09-01', '1966-08-11', 'PROBOLINGGO', 'Villa Bintaro Regency C2 / 14\r\n03/012\r\nPondok Kacang Timur/Pondok Aren', '093164655411000', '', '0000-00-00', '0700099784535', 0, 0, 175, 3, 2, 3, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (129, NULL, '', '', NULL, 'PAULUS TJAHJONO', 'PT', 'assets/dokumen/foto/karyawan/thumb_36.jpg', '2006-09-01', '1951-06-30', 'a', '', '', '', '0000-00-00', '', 0, 0, 36, 5, 2, 3, 13, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (130, NULL, '6013003', '602079', NULL, 'DJOKO WARTOPO', 'DW', 'assets/dokumen/foto/karyawan/thumb_122.jpg', '2013-03-01', '1960-04-13', 'Nganjuk', '', '09.341.169.2.421.000', 'Perum Bumi Seriwangi I No. C6 \r\nParongpong Bandung', '0000-00-00', '', 0, 0, 122, 3, 2, 3, 13, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (131, NULL, '6715004', '670043', NULL, 'BOGI WITJAKSONO', 'BW', 'assets/dokumen/foto/karyawan/thumb_213.jpg', '2015-03-16', '1967-02-08', 'SURABAYA', '', '240019067403000', '', '0000-00-00', '0260126875111', 0, 0, 213, 3, 2, 3, 7, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (132, NULL, '', '', NULL, 'M. NOOR ROCHMAN', 'NR', 'assets/dokumen/foto/karyawan/thumb_103.jpg', '2012-02-01', '1966-01-02', '-', '', '', '', '0000-00-00', '', 0, 0, 103, 3, 2, 3, 13, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (133, NULL, '6414008', '645268', NULL, 'SYAIFUDDIN BISTOK P. SIAHAAN', 'SB', 'assets/dokumen/foto/karyawan/thumb_164.jpg', '2014-04-01', '1964-10-31', 'BALIGE', 'Jl. Dieng Barat I Blok A5 No. 5 Pharmindo RT. 6/ RW. 30 Melong, Cimahi, Jawa barat', '09.3532836.423.000', 'Jl. Dieng Barat I Blok A5 No. 5 Pharmindo RT. 6/ RW. 30 Melong, Cimahi, Jawa barat', '0000-00-00', '1300098113932', 0, 0, 164, 6, 2, 3, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (134, NULL, '', '', NULL, 'HARJAWAN BALANINGRATH', 'HB', 'assets/dokumen/foto/karyawan/thumb_66.jpg', '2010-06-01', '1965-03-18', 'as', '', '', '', '0000-00-00', '', 0, 0, 66, 2, 2, 3, 13, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (135, NULL, '670103', '675298\r\n', NULL, 'MOHAMAD RAMDAN', 'DR', 'assets/dokumen/foto/karyawan/thumb_176.jpg', '2014-09-01', '1967-02-02', 'BANDUNG', 'KOMP. BUAH BATU SQUARE RT 002RW 001 KEL. CIPAGALO KEC. BOJONGSOANG\r\nKAB. BANDUNG ', '079391793444000', 'KOMP. GRIYA BANDUNG ASRI I E-27 RT 07 RW 14\r\nKEL. BOJONGSOANG KEC. BOJONGSOANG\r\nKAB. BANDUNG \r\nJAWA BARAT\r\n40288', '0000-00-00', '7112609118', 1, 0, 176, 3, 2, 3, 12, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (137, NULL, '6615008', '660281', NULL, 'SANTI WAHJUNI', 'ST', 'assets/dokumen/foto/karyawan/thumb_221.jpg', '2015-05-01', '1966-12-14', 'SURABAYA', 'JL.BOJONG MOLEK I BLOK D21 NO7\r\nTAMAN NAROGONG INDAH RT.2/14, BEKASI', '09.261.900.6.432.001', 'JL. UTAMA RAYA BLOK BF NO. 12A, KEMANG PRATAMA REGENCY.', '0000-00-00', '7000763475', 0, NULL, 221, 3, 3, 3, 12, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (138, NULL, '', '', NULL, 'MICHAEL GATUT AWANTORO', 'GA', 'assets/dokumen/foto/karyawan/thumb_144.jpg', '2013-10-01', '1959-02-25', 'MALANG', '', '09.536.474.1-017.000', 'Jl. Pertanian III No. 40 RT. 012 / RW. 004\r\nPasar Minggu, Jakarta Selatan', '0000-00-00', '', 0, 0, 144, 4, 2, 3, 10, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (139, NULL, '7315014', '730151', NULL, 'ERMA SUSILOWATI', 'ES', 'assets/dokumen/foto/karyawan/thumb_228.jpg', '2015-10-01', '1973-01-09', 'BOYOLALI', '', '09.322.619.9-411000', 'JL. MERANTI 5 BLOK A-2/28 RT: 005/009, KELURAHAN BEKASI JAYA, KEC BEKASI, BEKASI TIMUR', '0000-00-00', '0841418424', 1, NULL, 228, 3, 3, 3, 3, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (140, NULL, '7214003', '720268', NULL, 'SUGENG SUGIARTO', 'SS', 'assets/dokumen/foto/karyawan/thumb_154.jpg', '2014-01-13', '1972-09-15', 'MAGETAN', 'Jl. Drupada VII No. 4 Rt. 003/Rw. 14.\r\nKel. Tegalgundil, Kec. Bogor Utara\r\n', '07.529.889.3-404.000', 'Jl. Drupada VII No. 4 Rt. 003/Rw. 14.\r\nKel. Tegalgundil, Kec. Bogor Utara', '0000-00-00', '', 1, 0, 154, 3, 2, 3, 10, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (141, NULL, '6415011', '640572', NULL, 'HENDRA GANI', 'HG', 'assets/dokumen/foto/karyawan/thumb_222.jpg', '2015-09-01', '1964-02-06', 'PADANG', '', '07.403.970.2-403000', 'PERUMAHAN PURI NIRWANA 3 BLOK DA NO.29 KARADENAN RT:01/16, CIBINONG, JAWA BARAT', '0000-00-00', '1030004696585', 0, NULL, 222, 3, 2, 3, 10, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (142, NULL, '710366', '710366', NULL, 'RIZAL AHMAD FAUZI', 'RAF', 'assets/dokumen/foto/karyawan/thumb_new_142.jpg', '2020-03-11', '1971-06-05', 'TASIKMALAYA', 'Jl. BRATASENA 1 No. 7 RT:001 RW:015, TEGAL GUNDIL, KOTA BOGOR UTARA, KOTA BOGOR ', '24.001.971.1-404.000', 'Jl. BRATASENA 1 No. 7 RT:001 RW:015, TEGAL GUNDIL, KOTA BOGOR UTARA, KOTA BOGOR ', '0000-00-00', '', 1, NULL, 136, 3, 2, 3, 10, 7, 4, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (143, NULL, '6396002', '635045', NULL, 'SUMARLIAH', 'LH', 'assets/dokumen/foto/karyawan/thumb_4.jpg', '1996-10-01', '1963-04-18', 'JAKARTA', 'Kp. Banjaran Pucung Rt.004 Rw.05 No.128 Kel. Cilangkap Kec. Tapos Depok', '48.657.949.3-412.000', 'Banjaran Pucung Cilangkap-Cimanggis Depok', '1996-12-01', '1290005744715', 0, 0, 4, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (144, NULL, '7500004', '755231', NULL, 'SHINTA YUDHASARI', 'SY', 'assets/dokumen/foto/karyawan/thumb_20.jpg', '2000-11-01', '1975-08-25', 'JAKARTA', 'Jl. KEBANTENAN III 69. ELANG II No. 5\r\nRT 005/RW 05 Kel. SEMPER TIMUR\r\nKEC.CILINCING JAKARTA UTARA 14130', '05.596.946.9.043.000', 'Jl. KEBANTENAN III No.5 RT.05/RW.05 Jakarta Utara', '2000-11-01', '1290006282319', 1, 0, 20, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (145, NULL, '', '', NULL, 'BRADY SANTO MEIZAR', 'BD', 'assets/dokumen/foto/karyawan/thumb_10.jpg', '1997-01-01', '1967-03-25', 'JAKARTA', '', '07.227.242.0.028.000', 'Jl. Tanah Abang IV Dalam No. 1 \r\nJakarta Pusat.', '1997-01-01', '', 0, 0, 10, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (146, NULL, '', '', NULL, 'SRI SULARSIH', 'SL', 'assets/dokumen/foto/karyawan/thumb_151.jpg', '1996-10-01', '1973-12-04', 'MAGETAN', '', '07.599.841.9.021.000', 'Jl. Bonang Rt. 001/05 No. 31 - Jakarta Pusat.', '1996-10-01', '1290007151612', 0, 0, 151, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (147, NULL, '7097001', '705200', NULL, 'POPPIE DIAH RACHMAWATY', 'PI', 'assets/dokumen/foto/karyawan/thumb_11.jpg', '1997-01-01', '1970-12-23', 'JAKARTA', 'Jl.Permata V No.E.10, Perum Permata Kranggan, Jakarta 17433', '48.675.90.0.013.000', 'Jl. H . Sulaiman Petukangan Utara Jakarta Selatan', '1997-04-01', '1220004298769', 1, 0, 11, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (148, NULL, '6696004', '665082', NULL, 'TINI RAHAYU', 'TR', 'assets/dokumen/foto/karyawan/thumb_150.jpg', '1996-10-01', '1966-09-25', 'PALEMBANG', 'Gading Serpong Blok GB3 No 38-40  Sektor 6 Tangerang', '079308839411000', 'Gading Serpong Blok GB3 No 38-40  Sektor 6 Tangerang', '1996-10-01', '1290005991670', 0, 0, 150, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (149, NULL, '8310001', '835178', NULL, 'RYANTI WANDARANI', 'RY', 'assets/dokumen/foto/karyawan/thumb_55.jpg', '2010-01-01', '1983-07-13', 'BANDUNG', 'Jl.Daramahkota A13 No.202 Jaticempaka Pondokgede Bekasi 17411', '48.657.967.5-423.000', 'JL. CIUMBULEUIT HEGARMANAH-CIDADAP BANDUNG', '2010-01-01', '1290006122390', 1, 0, 55, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (150, NULL, '9213013', '805159', NULL, 'MEGA ANGGRAENI', 'MA', 'assets/dokumen/foto/karyawan/thumb_148.jpg', '2013-10-01', '1992-08-19', 'PURBALINGGA', '', 'Tidak ada', 'Tidak ada', '2015-09-14', '', 0, 0, 148, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (151, NULL, '6204002', '625029', NULL, 'PONTJORINI JUSWARDANI RIJANTO', 'RN', 'assets/dokumen/foto/karyawan/thumb_32.jpg', '2004-06-01', '1962-01-06', 'JAKARTA', '', '486579584013000', 'Jl. Burung Merak II N 3 No. 33-4 \r\nRT. 002/08 Bintaro- Jakarta Selatan', '2004-06-01', '', 0, 0, 32, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (152, NULL, '7300001', '735104', NULL, 'SINAI HANDAYANI', 'SH', 'assets/dokumen/foto/karyawan/thumb_17.jpg', '2000-10-01', '1973-10-06', 'JAKARTA', 'Perumahan Taman Laguna Blok 07 No.1, Jl. Alternatif Cibubur, RT 005/ RW 002, Kelurahan Jatikarya,\r\nKecamatan Jatisampurna, Bekasi', '07.282.182.0-017.000', 'Jl. Raya Pejaten Komp P&K A2/1\r\nPejaten Barat-Pasar Minggu\r\nJakarta Selatan', '2000-10-01', '1290005488453', 1, NULL, 17, 3, 3, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (153, NULL, '9214004', '925262', NULL, 'RISTY KARTIKA FEBRIANTY', 'RT', 'assets/dokumen/foto/karyawan/thumb_155.jpg', '2014-01-20', '1992-02-12', 'BOGOR', 'Pondok Kencana Permai Blok B.12, RT: 001 RW:013, Padasuka, Ciomas, Kab. Bogor.', '82.211.726.3-434.000', 'Tidak ada', '2015-02-01', '167000102524', 1, NULL, 155, 3, 3, 2, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (154, NULL, '9014005', '905313', NULL, 'GITA KURNIA SARI', 'GK', 'assets/dokumen/foto/karyawan/thumb_156.jpg', '2014-01-20', '1990-01-03', 'DUMAI', '', 'Tidak ada', 'Tidak ada', '2015-02-09', '', 0, 0, 156, 3, 3, 2, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (155, NULL, '8311002', '835066', NULL, 'AJI ANTO WIBOWO', 'AJ', 'assets/dokumen/foto/karyawan/thumb_79.jpg', '2011-03-01', '1983-12-01', 'JAKARTA', 'Jl. Kecapi V RT 03/ RW 05 No. 64B, Jagakarsa. jakarta Selatan', '708940580407000', 'Tidak ada', '2011-03-01', '0102441521', 1, 0, 79, 3, 2, 3, 5, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (156, NULL, '8711010', '875183', NULL, 'ARIE SETYO UTOMO', 'AR', 'assets/dokumen/foto/karyawan/thumb_92.jpg', '2011-11-01', '1987-01-20', 'BALIKPAPAN', '', 'Tidak ada', 'Tidak ada', '2011-11-01', '0129101877', 1, 0, 92, 3, 2, 3, 5, 5, 4, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (157, NULL, '8811007', '885171', NULL, 'YOGI IKHSAN', 'YI', 'assets/dokumen/foto/karyawan/thumb_89.jpg', '2011-08-01', '1988-07-22', 'BUKITTINGGI', 'Gg. Mangga, RT008/RW002, Kel. Cipayung, Kec. Cipayung, Jakarta Timur', '793865767445000', 'Jalan Sukabirus RT004/015, Citeureup, Dayeuhkolot, Bandung', '2013-12-24', '9000008686496', 1, 0, 89, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (158, NULL, '', '905452', NULL, 'DIYAN PRATIKTO', 'DQ', 'assets/dokumen/foto/karyawan/thumb_189.jpg', '2014-09-26', '1990-09-15', 'JAKARTA', '', '', '', '2015-09-17', '', 0, 0, 189, 3, 2, 2, 13, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (159, NULL, '8414036', '845690', NULL, 'WIDYANA ASTUTI', 'WA', 'assets/dokumen/foto/karyawan/thumb_200.jpg', '2014-12-08', '1984-09-19', 'Tanjung Karang', 'ASRAMA POLRI KALIDERES JAKARTA BARAT', '68.461.107.2-035.000', 'JL. KEBON JERUK RAYA NO 01 RT 005/001 KEBON JERUK JAKARTA BARAT', '2016-01-01', '1170004857017', 1, 0, 200, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (160, NULL, '6996005', '695137', NULL, 'AGUS FARID', 'FR', 'assets/dokumen/foto/karyawan/thumb_7.jpg', '1996-11-01', '1969-08-18', 'KUDUS', 'KRANGGAN PERMAI\r\nJL. TANJUNG 4 NOMER 8\r\nJATISAMPURNA BEKASI', '48.657.933.7.407.000', 'JL. ANGGREK 18 NOMER 8\r\nJATISAMPURNA BEKASI', '1996-11-01', '701286891600', 1, NULL, 7, 3, 2, 3, 7, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (161, NULL, '8914037', '895616', NULL, 'VINAWAYUDA JANFIVEARY WIDYANINGRUM SIHALOHO', 'VJ', 'assets/dokumen/foto/karyawan/thumb_199.jpg', '2014-12-10', '1989-01-05', 'MEDAN', 'LEGENDA WISATA, CLUSTER CLEOPATRA BOULEVARD BLOK I2 NO.8, WANAHERANG GUNUNG PUTRI RT. 01 RW. 16 BOGOR', '445051014015000', 'JL. H. BAWAH NO. 3 RT. 009 RW. 08 KEBON BARU TEBET JAKARTA SELATAN 12830', '2016-01-18', '1320006463922', 1, 0, 199, 5, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (162, NULL, '8410012', '845162', NULL, 'FITRI HARYANTI', 'FH', 'assets/dokumen/foto/karyawan/thumb_71.jpg', '2010-08-01', '1984-06-11', 'SEMARANG', 'Jl. Kebon Nanas Selatan RT.10/2, Cipinang Cempedak, Jakarta Timur', '58.552.693.2.503.000', 'Jl. Wiroto IV No. 11 Krobokan Semarang Barat', '2010-08-01', '1310002202101', 1, 0, 71, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (163, NULL, '', '', NULL, 'EKO RENY PRIYANASARI', 'RP', 'assets/dokumen/foto/karyawan/thumb_60.jpg', '2010-05-01', '1979-04-15', 'TULUNGAGUNG', '', '58.552.687.4.407.000', 'Jl. Cendrawasih II Blok E/4 \r\nMargahayu Bekasi Timur', '2010-05-01', '', 0, 0, 60, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (164, NULL, '8809006', '885160', NULL, 'MARKOES KARYADI', 'MK', 'assets/dokumen/foto/karyawan/thumb_53.jpg', '2009-11-01', '1988-09-19', 'KAPUL', '', '16.860.341.3735.000', 'KAPUL RT.002\r\nHALONG - BALANGAN', '2013-12-24', '1290007269471', 1, 0, 53, 1, 2, 2, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (165, NULL, '8610010', '805204', NULL, 'UCU PARSIH', 'UC', 'assets/dokumen/foto/karyawan/thumb_69.jpg', '2010-07-01', '0000-00-00', 'SUMEDANG', 'Kp. Kalimanggis RT.02/RW.09 No. 72\r\nHarjamukti - Cimanggis, Depok 16954', '70.032.317.3-412.000', 'Kp. Kalimanggis RT.02/RW.09 No. 72\r\nHarjamukti - Cimanggis, Depok 16954', '2014-08-01', '1290007580125', 1, NULL, 69, 3, 3, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (166, NULL, '7614035', '765520', NULL, 'CHATARINA EVI KUSDYARTI', 'CE', 'assets/dokumen/foto/karyawan/thumb_198.jpg', '2014-12-08', '1976-08-24', 'JAKARTA', 'TOWN HOUSE 88 NO. 81 B, GANG NANGKA, TANJUNG BARAT, PASAR MINGGU ,JAKARTA SELATAN', '471780403013000', '', '2016-01-01', '3190020818', 1, 0, 198, 3, 3, 3, 3, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (167, NULL, '7095002', '705067', NULL, 'EVELINE PRISCA NATALYNA', 'EV', 'assets/dokumen/foto/karyawan/thumb_2.jpg', '1995-09-01', '1970-12-04', 'JAKARTA', 'Jl. Cimandir III No. 48 Rt. 003/RW. 003\r\nDepok Timur 16418', '09.197.710.8.403.000', 'Jl. Cimandir III No. 48 Rt. 003/RW. 003 \r\nDepok Timur 16418', '1995-09-01', '1290005962440', 1, 0, 2, 5, 3, 2, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (168, NULL, '845229', '845229', NULL, 'MARDIANA CITRA IHSANI', 'MC', 'assets/dokumen/foto/karyawan/thumb_new_168.jpg', '2010-08-01', '1984-03-20', 'BANDUNG', 'Griya Telaga Permai Blok G2', '58.552.694.0.013.000', 'Griya Telaga Permai Cluster Kerinci Blok G2, RT:008 RW:019, Cilangkap, Tapos, Kota Depok', '2010-08-05', '1290006652206', 1, 0, 70, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (169, NULL, '8410003', '845319', NULL, 'MAULITA LESTARI', 'LT', 'assets/dokumen/foto/karyawan/thumb_223.jpg', '2010-03-28', '1984-12-30', 'BOGOR', 'Kp. Cilangkap Rt.003/Rw. 004 No. 25\nKel. Cilangkap, Kec. Tapos.\nDepok', '70.032.317.3-412.000', 'Kp. Cilangkap Rt.003/Rw. 004 No. 25\r\nKel. Cilangkap, Kec. Tapos.\r\nDepok', '2015-08-01', '9000017211880', 1, 0, 223, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (170, NULL, '7598004', '755136', NULL, 'UNIN SUJIYANTI', 'UN', 'assets/dokumen/foto/karyawan/thumb_15.jpg', '1998-10-01', '1975-04-12', 'JAKARTA', '', '48.65.944.4.013.000', 'Jl. Tanah Kusir II/88 Kebayoran Lama Jakarta Selatan.', '1998-10-01', '', 0, 0, 15, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (171, NULL, '7298002', '725249', NULL, 'ANITA SARI', 'AT', 'assets/dokumen/foto/karyawan/thumb_13.jpg', '1998-10-01', '1972-01-24', 'JAKARTA', 'JL. KEBAGUSAN IV NO. 9B RT. 006 RW. 04\r\nKEBAGUSAN - PASAR MINGGU\r\nJAKARTA SELATAN 12520', '07.282.183.8-017.000', 'KEBAGUSAN DALAM NO, 23A RT. 006 RW. 04\r\nKEBAGUSAN - PASAR MINGGU\r\nJAKARTA SELATAN', '1998-10-01', '7178020298', 1, NULL, 13, 3, 3, 2, 56, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (172, NULL, '8610009', '865050', NULL, 'ADYANA GUNITA', 'AG', 'assets/dokumen/foto/karyawan/thumb_new_172.jpg', '2010-06-01', '1986-06-01', 'JAKARTA', 'PERUMAHAN PONDOK CEMARA\r\nJL. CEMARA II NO.5\r\nJATIWARNA\r\nPONDOK GEDE - BEKASI', '58.552.697.3-432.000', 'PERUMAHAN PONDOK CEMARA\r\nJL. CEMARA II NO.5\r\nJATIWARNA\r\nPONDOK GEDE - BEKASI', '2010-06-01', '1260088003396', 1, NULL, 67, 3, 3, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (173, NULL, '8407001', '845130', NULL, 'RAYMONDUS ARI PRABOWO', 'AP', 'assets/dokumen/foto/karyawan/thumb_37.jpg', '2007-06-01', '1984-01-08', 'JAKARTA', 'Jl. Caman Raya RT 008/RW 001\r\nNo. 48 JatiBening Pondok Gede Bekasi', '48.65.942.8.40.000', 'Jl. Cmana Raya Rt. 008/001 \r\nNo.48 JatiBening Bekasi', '2007-06-01', '1560002629550 Mandiri a.n Raymondus Ari P', 1, 0, 37, 5, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (174, NULL, '7598005', '755165', NULL, 'HARTINI KUMALA DICKA SARI', 'DK', 'assets/dokumen/foto/karyawan/thumb_16.jpg', '1998-10-01', '1975-12-15', 'JAKARTA', '', '07.555.287.7.005.000', 'Jl. Wibawa Mukti IV no. 39, RT. 001/001 \r\nJatimekar - Jatiasih\r\nBekasi 17422', '1998-10-01', '7401141140', 0, 0, 16, 3, 3, 2, 3, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (175, NULL, '7814033', '785594', NULL, 'ANA YUNIARTI', 'YN', 'assets/dokumen/foto/karyawan/thumb_new_175.jpg', '2014-12-01', '1978-02-15', 'JAKARTA', 'Komplek Perwira Zeni\r\nJl. Utama No.2 Srengseng Sawah\r\nJagakarsa, Jakarta Selatan 12640', '24.080.883.2-017.000', 'Mess Perwira Zeni No.2\r\nRT.003 RW.015 Srengseng Sawah Jagakarsa\r\nJakarta Selatan', '2015-12-01', '8690398207', 1, 0, 206, 3, 3, 3, 3, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (176, NULL, '7904001', '795107', NULL, 'OBET FERDINAND MOFUN', 'OB', 'assets/dokumen/foto/karyawan/thumb_31.jpg', '2004-05-01', '1979-10-06', 'JAKARTA', 'Jl. WASEMBADA Timur XI No. 6\r\nKel. Kebon Bawang, TG. Priok\r\nJakarta Utara 14320', '48.657.948.5.042.000', 'Jl. SWASEMBADA Timur 11/6 \r\n Kbn. Bawang T.Priok Jakut', '2004-05-01', '1200000176532', 1, 0, 31, 6, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (177, NULL, '8410007', '845116', NULL, 'CITRA DWI PUSPITASARI', 'CT', 'assets/dokumen/foto/karyawan/thumb_63.jpg', '2010-05-01', '1984-11-05', 'JAKARTA', 'Griya Melati Mas Blok M3 No. 1, Grand Depok City, Depok', '58.552.683.3.421.000', 'Jl. Kenanga III Blok B Kav 4 Sukmajaya Depok', '2010-05-11', '1570000683038', 1, 0, 63, 3, 3, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (178, NULL, '0', '', NULL, 'MARLINA SAGAF', 'LN', 'assets/dokumen/foto/karyawan/thumb_6.jpg', '2016-01-01', '1973-03-04', 'JAKARTA', '', '07.261.370.6.012.000', 'Jl. H. Jeni I Rt. 06/07 No. 24 Jakarta 12140', '1996-10-01', '', 0, 0, 6, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (179, NULL, '9215006', '925261', NULL, 'KARLINA FARADILA', 'LI', 'assets/dokumen/foto/karyawan/thumb_216.jpg', '2015-04-02', '1992-01-01', 'BOGOR', 'JL. KEBON SIRIH BARAT DALAM NO 31 RT.014 RW.002, KEBON SIRIH. MENTENG-JAKARTA PUSAT', '711383133412000', 'PERUMAHAN PONDOK MANDALA II BLOK J NO.13 RT.001 RW.017, TUGU. CIMANGGISA-DEPOK', '2016-04-01', '5465317130', 1, NULL, 216, 3, 3, 3, 3, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (180, NULL, '735094', '755617', NULL, 'M. HIDAYAT FIRLYANSYAH', 'MH', 'assets/dokumen/foto/karyawan/thumb_23.jpg', '2002-09-01', '1975-10-05', 'JAKARTA', 'Pondok Kopi Blok H4/5 RT 08/RW 008,\r\nKel. Pondok Kopi Jakarta Timur', '48.657.946.9.002.000', 'Pondok Kopi Blok H4/5 Duren Sawit \r\nJakarta Timur 13460', '2002-09-01', '1290006018762', 1, 0, 23, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (181, NULL, '8613010', '865117', NULL, 'SUMEKAR', 'SM', 'assets/dokumen/foto/karyawan/thumb_142.jpg', '2013-09-01', '1986-12-11', 'MEDAN', 'Kavling Agraria jl. Salam Bahagia Raya No. 12 A Bekasi Barat ', '70.348.405.5-114.000', 'Lingkungan II Gg. Ali RT.002/RW.002 Kelurahan Melati 1 Kecamatan Perbaungan Sumatra Utara', '2013-09-01', '1290006598581', 1, NULL, 142, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (182, NULL, '7196006', '715063', NULL, 'TEGUH PRIYONO', 'TG', 'assets/dokumen/foto/karyawan/thumb_8.jpg', '1996-11-01', '1971-05-04', 'JAKARTA', 'Jl. O2 No.7 Rt.010/03 kel. Srengseng Sawah kec. Jagakarsa Jakarta Selatan', '07.286.581.9-008-000', 'Jl. Karya Bhakti III No.31 Rt.003/011 kel. Pondok Kopi Kec. Duren Sawit Jakarta Timur\r\n', '1996-11-01', '1290006099770', 1, 0, 8, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (183, NULL, '6896003', '685111', NULL, 'TJATUR PRASETYO', 'TP', 'assets/dokumen/foto/karyawan/thumb_5.jpg', '1996-10-01', '1968-09-18', 'JAKARTA', 'Perumahan Bumi Eraska Blok E9 No. 26, RT. 04/RW. 04, Kel. Jati Raden, Kec. Jati Sampurna, Bekasi', '17.337.214.5-029.000', 'Perumahan Bumi Eraska Blok E9 No. 26, RT. 04/RW. 04, Kel. Jati Raden, Kec. Jati Sampurna, Bekasi', '1996-10-01', '1290005989369', 1, 0, 5, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (184, NULL, '7609005', '765162', NULL, 'SURYANA', 'AC', 'assets/dokumen/foto/karyawan/thumb_52.jpg', '2009-11-01', '1976-12-12', 'TASIKMALAYA', 'Kp. Cijuang. RT/RW :006/002. Kel/Des ; Cijulsng. Kec ; Cineam - Tasikmalaya', '172.682.002.0-425.000', 'KPP PRATAMA TASIKMALAYA', '2014-11-10', '1310007441381', 1, NULL, 52, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (185, NULL, '8510015', '855098', NULL, 'AGUNG ANINDITO PUTRO', 'AD', 'assets/dokumen/foto/karyawan/thumb_74.jpg', '2010-12-01', '1985-05-07', 'SURAKARTA', 'Cilodong RT05 RW03 Kalibaru, Cilodong, Depok', '583202338526000', 'Mutihan RT02 RW 11 Sondakan, Laweyan, Surakarta', '2013-12-24', '1380005047381', 1, 0, 74, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (186, NULL, '7510013', '755242', NULL, 'WAYAN BUDIARTHA', 'WY', 'assets/dokumen/foto/karyawan/thumb_72.jpg', '2010-10-01', '1975-06-27', 'DENPASAR', '', '25.855.545.7-407.000', 'Prima Harapan Regency Blok A2 No. 12 Bekasi Utara', '2010-10-01', '1450001112347', 1, 0, 72, 2, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (187, NULL, '8313012', '835204', NULL, 'MAYA SURYANINGTYAS', 'MY', 'assets/dokumen/foto/karyawan/thumb_146.jpg', '2013-10-01', '1983-05-16', 'MAGELANG', 'jl kapuas raya no12 rt 5 rw 17 abadijaya sukmajaya depok', '87.719.164.3-524.000', 'ngaran II rt/rw 002/006 borobudur magelang ', '2013-10-01', '1270005461098', 1, 0, 146, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (188, NULL, '8914006', '895403', NULL, 'MUHAMMAD CHARISTHA LAMPUNG', 'CL', 'assets/dokumen/foto/karyawan/thumb_new_188.jpg', '2014-02-03', '1989-03-05', 'AMBON', '', 'Tidak ada', 'Tidak ada', '2015-03-01', '1670001106847', 1, 0, 157, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (189, NULL, '8514013', '855604', NULL, 'RIFQI NOVIAN HIDAYAT', 'RF', 'assets/dokumen/foto/karyawan/thumb_171.jpg', '2014-07-04', '1985-11-12', 'BANDUNG', 'Jl. Bojong Tengah No. 12 RT007/RW012, Bandung 40191', '68.873.958.0-423.000', 'Jl. Bojong Tengah No. 12 RT007/RW012, Bandung 40191', '2015-08-01', '1310006227252', 1, 0, 171, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (190, NULL, '8611005', '865146', NULL, 'ADITYA RIZKI NOERMARTYAS', 'AI', 'assets/dokumen/foto/karyawan/thumb_86.jpg', '2011-08-01', '1986-03-16', 'TANGERANG', 'Perumahan Griya Sukmajaya Blok F5 RT 11 RW 03 Kel. Sukmajaya Kec. Sukmajaya Depok Jawa Barat', '45.638.188.8-529.000', 'Rakit RT 001. RW.004 Rakit Banjarnegara, Jawa Tengah', '2011-08-01', '1290006121996', 1, NULL, 86, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (191, NULL, '915284', '915284', NULL, 'IDHAM ADRIAN', 'IM', 'assets/dokumen/foto/karyawan/thumb_177.jpg', '2014-09-15', '1991-08-23', 'JAKARTA', 'Komplek Pelni Blok G XII No.8\r\nBakti Jaya - Sukmajaya Depok 16418', '55.714.654.5-412.000', 'Komplek Pelni Blok G XII No.8\r\nBakti Jaya - Sukmajaya Depok 16418', '2016-07-01', '1670002135720', 1, NULL, 177, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (192, NULL, '', '', NULL, 'INDRA SAPUTRA ANGGANDANU', 'ID', 'assets/dokumen/foto/karyawan/thumb_87.jpg', '2011-08-01', '1986-07-16', 'WONOSOBO', '', 'Tidak ada', 'Tidak ada', '2011-08-01', '', 0, 0, 87, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (193, NULL, '8611006', '875121', NULL, 'ARIF FITRIYANTO', 'AF', 'assets/dokumen/foto/karyawan/thumb_88.jpg', '2011-08-01', '1986-06-11', 'BREBES', 'Perumahan Citra Indah Bukit Anyelir Blok AE.02 No.53 Kel. SIngajaya Kec. Jonggol Kab. Bogor', '55.254.251.6-501.000', 'Dk. Balapusuh RT.01 RW.02\r\nTanggeran - Tonjong\r\nBrebes - Jateng', '2011-08-01', '1290006121798', 1, 0, 88, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (194, '11012019', '7010014', '705081', NULL, 'MUHAMMAD RIDWAN', 'MR', 'assets/dokumen/foto/karyawan/thumb_73.jpg', '2010-12-01', '1970-04-08', 'CIANJUR', '', '58.560.567.8-009.000', 'Gg. Iman No.18 RT 005 RW 005 Cibubur, Ciracas Jakarta Timur', '2010-12-01', 'Rek. Mandiri 1270001150430 a.n M. Ridwan', 1, 0, 73, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (195, NULL, '8811003', '885203', NULL, 'DANANG ADI WIBOWO', 'DG', 'assets/dokumen/foto/karyawan/thumb_80.jpg', '2011-03-01', '1988-06-27', 'KLATEN', 'PERUM BILABONG PERMAI, BLOK G2 O No.33,RT4 RW 16, CIMANGGIS, BOJONG GEDE, KAB.BOGOR', '75.797.083.5-525.000', 'KLATEN A NO.1 RT.01 RW 01, BENGKING ,JATINOM, KAB.KLATEN , JAWATENGAH', '2013-12-24', '1380005047381', 1, 0, 80, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (196, NULL, '8808004', '885085', NULL, 'DALHAR', 'DL', 'assets/dokumen/foto/karyawan/thumb_43.jpg', '2008-10-01', '1988-11-06', 'PURWOREJO', 'Perum Pesona laguna 1 Blok D4 no 3 , Cilangkap kec tapos\r\nDEPOK', '72.350.825-5.531.000', 'kedungsari RT 03 / RW 01 kec/kab Purworejo\r\nJawatengah', '2013-12-02', '1290006121897', 1, NULL, 43, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (197, NULL, '7296007', '725185', NULL, 'ASEP ACHMAD MULYANA', 'AA', 'assets/dokumen/foto/karyawan/thumb_9.jpg', '1996-12-01', '1972-03-17', 'SUMEDANG', 'Jl. Limus Pratama Regency Blok G No. 1 Cilleungsi', '58.552.692.4.436.000', 'Jl. Limus Pratama Regency Blok G No. 1 Cilleungsi', '1996-12-01', '1290007181908', 1, 0, 9, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (198, NULL, '9011015', '905164', NULL, 'ARIF RAMADHA', 'FM', 'assets/dokumen/foto/karyawan/thumb_new_198.jpg', '2011-12-01', '1990-03-29', 'BANJARMASIN', 'Jl. Stadion Lambung Mangkurat GG.3 No.48/74 Pemurus Baru Banjarmasin Selatan, Kalimantan Selatan 70249', '744849233953000', 'Jl. Kalimutu Kwamki, Mimika Baru,Mimika Papua', '2014-12-01', '1670000492230', 1, NULL, 101, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (199, NULL, '7202003', '725276', NULL, 'DP. BUDI LAKSONO', 'BL', 'assets/dokumen/foto/karyawan/thumb_24.jpg', '2002-12-01', '1972-09-28', 'BOGOR', 'Jl. Flamboyan RT. 02/06 No. 45\r\nCisalak Pasar, Cimanggis\r\nDepok', '48.657.955.0-412.000', 'Cisalak Pasar Cimanggis - Depok', '2002-12-01', '1290007844448', 0, 0, 24, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (200, NULL, '8007003', '805090', NULL, 'PUTRA KELANA RENGGA KUSUMA WARDHANA', 'PK', 'assets/dokumen/foto/karyawan/thumb_39.jpg', '2007-12-01', '1980-01-04', 'MADIUN', 'Metland Transyogi Gandaria 16 No. 8', '58.552.701.3.421.000', 'Jl. Sewu III No. 14 Komp Pharmindo Cibeureum Cimahi', '2008-01-01', '1290007186501', 1, 0, 39, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (201, NULL, '7802004', '785180', NULL, 'DONI INDRAWAN', 'DY', 'assets/dokumen/foto/karyawan/thumb_25.jpg', '2002-12-01', '1978-05-12', 'JAKARTA', 'Gg. Rahayu I No. 80 Rt.011, Rw 003 Kelurahan Kalisari, Kecamatan Pasar Rebo Jakarta Timur 13790', '48.657.956.8-005.000', 'Jl. Rahayu I Kalisari, Pasar Rebo - Jakarta Timur', '2002-12-01', 'Rek mandiri 1290007181791 an Doni Indrawan', 1, 0, 25, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (202, NULL, '8408002', '845120', NULL, 'TWINSANI HERMAWAN', 'TN', 'assets/dokumen/foto/karyawan/thumb_41.jpg', '2008-07-01', '1984-05-06', 'CIMAHI', 'Metland Cileungsi DF4/10', '58.552.684.1-421.000', 'Padasuka Indah 2 Blok E 11 TR 05/09 Gadobangkong, kec. Ngamprah\r\nBandung Barat', '2008-07-01', '1670001877439 Mandiri a.n Twinsani', 1, 0, 41, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (203, '10807001', '8208001', '825116', NULL, 'TOTO HARJONO', 'TO', 'assets/dokumen/foto/karyawan/thumb_40.jpg', '2008-07-01', '1982-04-08', 'KEBUMEN', '', '58.552.685.8.523.000', 'Jl. Peneket Rt. 001/001 Peneket Ambal Kebumen', '2008-07-01', '1290006495424 Mandiri a.n Toto Harjono', 1, 0, 40, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (204, NULL, '7098001', '705180', NULL, 'KURNIAWAN', 'KW', 'assets/dokumen/foto/karyawan/thumb_12.jpg', '1998-10-01', '1970-07-21', 'SERITANJUNG', 'Jl. Perum Pondok Ungu Permai Blok E14\r\nNo. 8 Bekasi Utara', '48.657.963.4.413.000', 'Jl. Perum Pondok Ungu Permai Blok E14\r\nNo. 8 Bekasi Utara', '1998-10-01', '1290005999483', 1, 0, 12, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (205, NULL, '6300002', '635063', NULL, 'INDRA LISTYARTO', 'IL', 'assets/dokumen/foto/karyawan/thumb_18.jpg', '2000-11-01', '1963-06-29', 'BANDUNG', '', '07.261.369.8-019.000', 'Jl. Saraswati C4/6\r\nCipete Utara\r\nKebayoran Baru\r\nJakarta 12150', '2000-11-01', '', 0, 0, 18, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (206, NULL, '7405001', '745236', NULL, 'DEDI DANU KUSUMAH', 'DN', 'assets/dokumen/foto/karyawan/thumb_35.jpg', '2005-02-01', '1974-04-24', 'BANDUNG', 'Metland Cileungsi Cluster Lily Blok DC6 No.16 RT.04 RW.14 Desa Cipenjo Kecamatan Cileungsi Kabupaten Bogor', '48.657.972.5-407.000', 'Jl. Tunas Kelapa Sepanjang Jaya \r\nRawa Lumbu Kotamadya Bekasi', '2005-02-01', '', 1, 0, 35, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (207, NULL, '845274', '845612', NULL, 'MUHAMMAD ZAMRONI', 'MZ', 'assets/dokumen/foto/karyawan/thumb_152.jpg', '2011-02-01', '1984-08-25', 'DEMAK ', '', '58.552.689.0.515.000', 'Jl. Bedono Rt. 004/001 Bedono Sayung Demak', '2011-02-01', '1290006558304', 1, 0, 152, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (208, NULL, '7604003', '765232', NULL, 'RACHMAT', 'RM', 'assets/dokumen/foto/karyawan/thumb_33.jpg', '2004-07-01', '1976-10-23', 'JAKARTA', 'Pamulang Permai II Blok F.30/2 RT. 008/015 Kel. Benda Baru Kec. Pamulang - Tangerang Selatan - Banten', '48.657.947.7-072.000', 'Jl. Kebon Kacang Tanah Abang - Jakarta Pusat', '2004-07-01', 'Mandiri a.n Rachmat 1290007186519', 1, 0, 33, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (209, NULL, '8003003', '795160', NULL, 'AGUS SAID RAMADLON', 'GS', 'assets/dokumen/foto/karyawan/thumb_30.jpg', '2003-09-01', '1979-08-12', 'GRESIK', 'Jl. Juragan Sinda 5F Kukusan Beji Depok', '096444674018000', '', '2003-09-01', '1290005970005', 0, 0, 30, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (210, NULL, '7403001', '745191', NULL, 'AMIRUS SALIM', 'MS', 'assets/dokumen/foto/karyawan/thumb_27.jpg', '2003-09-01', '1974-09-18', 'GUNUNGKIDUL', 'Bima Duta V No. 1, Dukuh Bima, Kota Legenda, Tambun Selatan, Bekasi', '48.657.961.8-407.000', 'Jl. Melur Jaka Sampurna-Bekasi Barat, Kotamadya Bekasi', '2003-09-01', '1330011980307', 1, 0, 27, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (211, NULL, '7401001', '745255', NULL, 'DEDDY PRIYO RIYANTO', 'DP', 'assets/dokumen/foto/karyawan/thumb_21.jpg', '2001-12-01', '1974-06-27', 'REMBANG', 'Vila Nusa Indah 5 SF 7 No.6 Ciangsana Gn.Putri Kab.Bogor', '48.657.951.9-412.000', 'Kampung Sugutamu Bakti Jaya - Sukmajaya DEPOK', '2001-12-01', '1290007187814', 1, NULL, 21, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (212, NULL, '8907002', '895161', NULL, 'EMIL KHUZANI', 'EM', 'assets/dokumen/foto/karyawan/thumb_38.jpg', '2007-07-01', '1989-09-22', 'BREBES', 'Jalan Kyai Badri RT007/003, Paguyangan, Brebes, Jawa Tengah', '662997048501000', 'Jalan Raya Paguyangan RT004/002, Wanatirta, Paguyangan, Brebes, Jawa Tengah', '2014-12-17', '1290006122002', 1, 0, 38, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (213, NULL, '6700003', '675094', NULL, 'JOSEPH TRISULA', 'JT', 'assets/dokumen/foto/karyawan/thumb_19.jpg', '2000-11-01', '1967-11-22', 'JAKARTA', 'JL. TEBET DALAM I D No. 11 RT002/RW01 KEL. TEBET BARAT  KEC.TEBET JAKARTA SELATAN 12810', '48.657.970.9.015.000', 'Tebet Dalam I D No. 11 RT. 002/RW. 01, Kec. Tebet Barat, Kel Tebet\r\nJakarta Selatan 12810 ', '2000-11-01', '0921423551', 1, NULL, 19, 4, 2, 3, 3, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (214, NULL, '8508003', '855064', NULL, 'BAYU SETIAWAN', 'BU', 'assets/dokumen/foto/karyawan/thumb_42.jpg', '2008-07-01', '1985-06-03', 'BANDUNG', 'Kp. Panghegas Rt. 04/03. Cisomang Barat\r\nKec. Cikalong Wetan\r\nKab. Bnadung 40556', '58.552.83.3.421.000', 'Jl. Kp. Panghegar Cisomang Barat Cikalong Wetan Bdg', '2008-07-01', '1290007181882', 1, 0, 42, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (215, NULL, '6395001', '635056', NULL, 'PANJI', 'PJ', 'assets/dokumen/foto/karyawan/thumb_1.jpg', '1995-09-01', '1963-10-22', 'PADANG', '', '48.657.945.1-412.000', 'Gas Alam Raya\r\nHarjamukti, Cimanggis\r\nDepok', '1995-09-01', '1040001029771', 0, 0, 1, 3, 2, 2, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (216, NULL, '8913001', '895165', NULL, 'ANNAS MUZAKKI SYARIF', 'AM', 'assets/dokumen/foto/karyawan/thumb_120.jpg', '2013-01-01', '1989-11-23', 'Bogor', 'Jl. Abdul Wahab RT02/RW05 No.08 Kel. Sawangan, Kec. Sawangan, Kota Depok 16511', '80.004.202.0-412.000', 'Pratama Depok Cimanggis', '2013-12-24', '9000021718458', 1, 0, 120, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (217, NULL, '9010008', '905056', NULL, 'ALFA PUTRA KURNIA', 'AK', 'assets/dokumen/foto/karyawan/thumb_64.jpg', '2010-05-01', '1990-08-04', 'WONOSOBO', '', 'Tidak ada', 'Tidak ada', '2014-07-03', '', 0, 0, 64, 3, 2, 2, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (218, NULL, '8914009', '895453', NULL, 'I GUSTI PUTU WISNAWA', 'IG', 'assets/dokumen/foto/karyawan/thumb_167.jpg', '2014-04-28', '1989-07-08', 'SINGARAJA', 'Jl. Cenigan Sari IV A Gg. Mawar No. 26, Sesetan, Denpasar Selatan, Kota Denpasar', '82.202.884.1-903.000', 'KPP PRATAMA DENPASAR TIMUR', '2015-05-01', '1310006707584', 1, 0, 167, 2, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (219, NULL, '8110006', '815324', NULL, 'BASUKI CAHYADI', 'BI', 'assets/dokumen/foto/karyawan/thumb_62.jpg', '2010-05-01', '1981-10-25', 'MALANG', 'Puri Pamulang, jl Gunung Bromo 3 no. B4/11 Pamulang', 'ada', 'Jl. Abdul Gani II/2, RT: 007 RW: 012, Kel: Ngaglik, Kec: Batu, Kota Batu, Jawa Timur.', '2014-07-03', '1290007443266', 1, NULL, 62, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (220, NULL, '', '', NULL, 'ALVIAN GUNTUR PK', 'AL', 'assets/dokumen/foto/karyawan/thumb_51.jpg', '2009-09-01', '1990-12-15', 'PACITAN', '', '78.435.968.9-432.000', 'Jl. Adisucipto BB: 06 Perumahan Bumi Dirgantara Permai Kel. Jatisari, Kec. Jatiasih, Bekasi', '2014-12-17', '1560002777938', 0, 0, 51, 3, 2, 2, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (221, NULL, '7902005', '795305', NULL, 'ALLY MUHAMMAD YUSUF', 'AY', 'assets/dokumen/foto/karyawan/thumb_26.jpg', '2002-12-01', '1979-03-28', 'JAKARTA', 'Perumahan Bukit Cimanggu City Blok S9A No. 5. Jl. Raya Baru (Soleh Iskandar). Bogor', '486579345018000', 'Jl. Sawah Lunto, Pasar Manggis, Setiabudi, Jakarta Selatan', '2002-12-01', '1290005968678', 1, NULL, 26, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (222, NULL, NULL, NULL, NULL, 'BUDI KRISNO SANTOSO', '', 'assets/dokumen/foto/karyawan/thumb_3.jpg', NULL, '1961-12-12', 'JAKARTA', '', '07.545.118.7-003.0000', 'Jl.Raya Bekasi Timur Km.17 No.11 Rt.007 Rw.003, Jatinegara Kaum, Pulogadung.        Jakarta Timur.', NULL, '2300868587', NULL, 0, 3, 3, 2, 3, 3, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (223, NULL, '8911013', '885193', NULL, 'ARIZA NOVISA', 'AN', 'assets/dokumen/foto/karyawan/thumb_98.jpg', '2011-12-01', '1989-11-25', 'SUBANG', '', 'Tidak ada', 'Tidak ada', '2013-12-24', '2411168591', 0, 0, 98, 3, 2, 3, 3, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (224, NULL, '9113005', '915035', NULL, 'NOR RAHMAN HIDAYAT', 'NH', 'assets/dokumen/foto/karyawan/thumb_153.jpg', '2013-03-01', '1991-05-08', 'SRAGEN', 'Perum Vila Billabong Blok G2P no 12B \r\nDesa Cimanggis Kec. Bojong Gede Kab. Bogor', '75.897.290.5-732.000', 'Jl. Sidomulyo Raya No.39 RT 02/09\r\nKel. Landasan ulin Timur\r\nKec. Landasan Ulin\r\nKota Banjarbaru - Kalimantan Selatan', '2014-12-01', '1540011591702', 1, 0, 153, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (225, NULL, '8912004', '895120', NULL, 'YUDI MITRA', 'UD', 'assets/dokumen/foto/karyawan/thumb_114.jpg', '2012-12-01', '1989-11-14', 'Landur', 'Jl. Warung Jati Timur II No 29 RT 009 RW 004 Kelurahan Kalibata Kecamatan Pancoran Jakarta Selatan', '80.583.636.8-447.000', 'Perumahan Graha Selaras Blok F5 No. 12, RT004/RW007 Kel. Harapanjaya Kec.Cibinong Kab. Bogor, Jawa Barat', '2013-12-24', '1560002973982', 1, NULL, 114, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (226, NULL, '7002001', '705058', NULL, 'JAYA WAHYUDIN', 'JW', 'assets/dokumen/foto/karyawan/thumb_22.jpg', '2002-01-01', '1970-09-03', 'JAKARTA', 'Perumahan Citra Indah - Cluster Bukit Hijau\r\nBlok N5 No.32 RT 01 RW 10 Kel. Sukamaju, Jonggol - Kab. Bogor, Jawa Barat', '48.657.962.6-403.000', 'Perumahan Citra Indah - Cluster Bukit Hijau\r\nBlok N5 No.32 RT 01 RW 10 Kel. Sukamaju, Jonggol - Kab. Bogor, Jawa Barat', '2002-01-01', '1240006821897', 1, 0, 22, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (227, NULL, '7812002', '785107', NULL, 'AHMAD ACEP', 'AE', 'assets/dokumen/foto/karyawan/thumb_111.jpg', '2012-12-01', '1978-05-06', 'JAKARTA', '', '24.791.538.2-412.000', 'POS CITAYAM RT.2/12 BOJONG PD TERONG - PANCORAN MAS DEPOK', '2013-12-24', '1330011759305', 1, 0, 111, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (228, NULL, '8013009', '805127', NULL, 'DAFRIL', 'DF', 'assets/dokumen/foto/karyawan/thumb_new_228.jpg', '2005-09-01', '1980-04-09', 'Batang Tapakis', 'Kampung Pulo,no 103 RT.005 RW 009, Kelurahan Rangkapan Jaya, Kecamatan Pancoran Mas,Kota depok. 16435', '612568378448000', 'Kampung Pulo,no 103 RT.005 RW 009, Kelurahan Rangkapan Jaya, Kecamatan Pancoran Mas,Kota depok. 16435', '2013-09-01', '1330012120606', 1, NULL, 140, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (229, NULL, '7708006', '775186', NULL, 'NANANG KOSIM', 'NA', 'assets/dokumen/foto/karyawan/thumb_45.jpg', '2008-12-01', '1977-05-15', 'BREBES', 'Griya Cipeucang Indah Blok. G1 No.8\r\nKel. Cipeucang, Kec. Cileungsi, Kab. Bogor', '48.657.943.6-403.000', 'Griya Cipeucang Indah  Cipeucang-Cileungsi Bogor', '2008-12-01', '1290007186550', 1, 0, 45, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (230, NULL, '7403002', '745157', NULL, 'HERU NUGRAHA', 'HN', 'assets/dokumen/foto/karyawan/thumb_new_230.jpg', '2003-09-01', '1974-11-13', 'MANOKWARI', 'Jl. Raya Ciracas Gang Rukem No. 19\r\nRT. 04/RW. 08, Kel. Ciracas\r\nJakarta Timur ', '58.552.700.5.517.000', 'Jl. Cinde Utara No. 5 Jomblang \r\nCandisari Semarang', '2003-09-01', '7147753238', 1, 0, 28, 3, 2, 2, 12, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (231, NULL, '7398003', '735141', NULL, 'AGNI BAYUAJI', 'BY', 'assets/dokumen/foto/karyawan/thumb_new_231.jpg', '1998-10-01', '1973-08-11', 'JAKARTA', 'KOMP. TRIDAYA IV Blok C20 No.4 Tambnan- Bekasi (17510)\r\nJl. Kesatuan No. 5 Beji- Depok (16425)', '57.118.911.7-403.000', 'Perum Bumi Mutiara Blok JE.14 No. 13 RT.009/RW. 032, Bojong Kulur, Gunung Putri\r\nBogor', '1998-10-01', '7148848003', 1, 0, 14, 3, 2, 3, 12, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (232, NULL, '8410002', '845121', NULL, 'FAHTONI SIGIT KURNIAWAN', 'FS', 'assets/dokumen/foto/karyawan/thumb_56.jpg', '2010-01-01', '1984-05-06', 'JAKARTA', 'Kp. Pedurenan rt.005/02 no.64', '48.657.938.6-402.000', 'Kampung Pedurenan PEDURENAN-KARANG TENGAH TANGERANG', '2010-01-01', '1290005970633', 1, 0, 56, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (233, NULL, '2011173', '2011173', NULL, 'MURDANI', 'MI', 'assets/dokumen/foto/karyawan/thumb_59.jpg', '2010-05-01', '1977-05-25', 'Jakarta', 'Jl. Raya Ceger SMPN 222 RT08/RW02 No. 29 Ceger, Jakarta Timur 13820', '58.552.695.7.009.000', 'Jl. SMP 222 Ceger Cipayung Jakarta Timur ', '2010-05-01', '', 0, 0, 59, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 29);
INSERT INTO `m_karyawan` VALUES (234, NULL, '8209004', '825057', NULL, 'DENY PRABOWO SETIAWAN', 'PS', 'assets/dokumen/foto/karyawan/thumb_50.jpg', '2009-08-01', '1982-08-02', 'Jakarta', 'Jl. SD Cipulir No.10 RT003/RW006, Cipulir,\r\nKebayoran Lama, Jakarta Selatan 12230', '45.237.414.3-013.000', 'JL SD Cipulir  No.10 RT.003/006, Cipulir,\r\nKebayoran Lama, Jakarta Selatan 12230', '2009-08-01', '1290007181494', 1, 0, 50, 4, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (235, NULL, '8513007', '855246', NULL, 'UMAR FAROUK', 'UF', 'assets/dokumen/foto/karyawan/thumb_133.jpg', '2013-06-01', '1985-12-29', 'JAKARTA', '', '26.497.826.3-009.000', 'Jl. H. Taiman No. 14, Gedong - Pasar Rebo, Jakarta Timur', '2013-12-24', '7053233637', 0, 0, 133, 3, 2, 3, 12, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (236, NULL, '8014032', '805661', NULL, 'IZZ HANIF', 'ZK', 'assets/dokumen/foto/karyawan/thumb_196.jpg', '2014-11-18', '1980-05-09', ' INDRAMAYU', 'Citra Indah, Cluster Bukit Ravenia AQ 15/29 Jonggol', '36.655.610.84-37.000', 'JL.Raya Terisi Wetan RT 003 / 006 \r\nDesa Terisi, Kec: Terisi\r\nKabupaten Indramayu Jawa Barat', '2015-12-01', '1340006152804', 1, 0, 196, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (237, NULL, '8010005', '805158', NULL, 'IRFAN ZUHRI', 'IZ', 'assets/dokumen/foto/karyawan/thumb_61.jpg', '2010-05-01', '1980-06-12', 'ACEH TENGAH', 'Perum Taman Nyiur blok U. No. 12 RT. 05/16, Kel. Sunter Agung Kec. Tanjung Priok, Jakarta Utara', '58.552.696.5-017.000', 'Perum Taman Nyiur blok U. No. 12 RT. 05/16, Kel. Sunter Agung Kec. Tanjung Priok, Jakarta Utara', '2010-05-05', '', 1, NULL, 61, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (238, NULL, '8004004', '805095', NULL, 'DENY ANDRI YANTO', 'DE', 'assets/dokumen/foto/karyawan/thumb_34.jpg', '2004-07-01', '1980-02-05', 'JAKARTA', 'Jl. Roda Jaya RT. 003/0 Kel. Baru.\r\nKec. Pasar Rebo Cijantung Jakarta Timur.', '48.657.957.6.005.000', 'Asr Den Ang Baru - Pasar Rebo Jakarta Timur', '2004-07-01', '1670004026836', 1, 0, 34, 3, 2, 2, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (239, NULL, '7709001', '775176', NULL, 'SODIKIN AHMADI', 'SA', 'assets/dokumen/foto/karyawan/thumb_46.jpg', '2009-06-01', '1977-07-14', 'JAKARTA', 'Kampung jati RT. 002/008 No. 61 jatimulya, Tambun Selatan, bekasi', '725376743435000', 'Tidak ada', '2014-12-17', '1500004904445', 0, 0, 46, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (240, NULL, '8111008', '815136', NULL, 'ANJAR HIDAYAT', 'AH', 'assets/dokumen/foto/karyawan/thumb_90.jpg', '2011-09-01', '1981-02-08', 'SUMEDANG', 'Jalan Laskar, Perumahan Ihsan Residence 2 Blok C8\r\nRt.01 Rw.08, Kelurahan Bojong Pondok Terong, Kec. Cipayung, Kota Depok', '540735941444000', 'Kp. Cikopo Rt.004 Rw.008 Desa Bumiwangi, Kecamatan Ciparay, Kabupaten Bandung - Jawa Barat', '2014-12-01', '1310010234344', 1, NULL, 90, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (241, NULL, '', '775265', NULL, 'I PUTU GDE MAHARDHIKA', 'GM', 'assets/dokumen/foto/karyawan/thumb_29.jpg', '2003-09-01', '1977-04-25', 'DENPASAR', '', '48.657.971.7.429.000', 'Jl. Pekalongan No. 15, Antapani Kidul Ciadas Bandung', '2003-09-01', '', 0, 0, 29, 2, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (242, NULL, '8513004', '855199', NULL, 'SOPYAN', 'SP', 'assets/dokumen/foto/karyawan/thumb_123.jpg', '2013-03-01', '1985-10-21', 'JAKARTA', 'Perumahan Citayam Grande Hills/2 Blok M9 Kampung Baru', '70.156.247.2-017.000', 'Jl. Joe, kelapa III, Gg.H.Amat, RT.001 Rw. 006 no.56 Kel. lenteng Agung Kec. Jagakarsa, Jakarta selatan DKI Jakarta 12610', '2014-08-01', '9000017211906 Mandiri a.n Sopyan', 1, 0, 123, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (243, NULL, '8513006', '855136', NULL, 'DEVA WIRA SANJAYA', 'DV', 'assets/dokumen/foto/karyawan/thumb_132.jpg', '2013-06-01', '1985-07-11', 'BANDUNG', 'Metland Cileungsi, Cluster Chrisant Blok DF 2 No.33, Kab. Bogor, Jawa Barat', '25.876.392.9-429.000', 'Komp. Margahayu Raya Blk I-2 No.8 RT 001 RW 006 , \r\nSekejati , Buahbatu, Bandung, Jawa Barat', '2013-12-24', '9000016146046 Rek Mandiri a.n Deva Wira Sanjaya', 1, 0, 132, 2, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (245, NULL, '8414011', '845672', NULL, 'HARTANTIO MEGHALITH', 'HM', 'assets/dokumen/foto/karyawan/thumb_170.jpg', '2014-06-10', '1984-08-23', 'BANDUNG', 'Jl. PALANGKARAYA No.32 RT004/RW009 KEL.ANTAPANI KIDUL, KEC.ANTAPANI\r\nKOTA BANDUNG 40291 PROV JABAR', '35.350.679.3-429.000', 'Jl. PALANGKARAYA No.32 RT004/RW009 KEL.ANTAPANI KIDUL, KEC.ANTAPANI\r\nKOTA BANDUNG 4029 PROV JABAR', '2015-07-01', '1330012416087', 1, NULL, 170, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (246, NULL, '7613011', '', NULL, 'SK. MULIARTAWAN', 'SK', 'assets/dokumen/foto/karyawan/thumb_145.jpg', '2013-10-01', '1976-09-23', 'BANGLI', '', '07.268.543.1.061.000', 'Puri Sriwedari Blok L/16 RT. 002/RW. 012\r\nHarjamukti', '2013-12-24', '', 0, 0, 145, 2, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (248, NULL, '5915010', '595075', NULL, 'SAPTO AGUNG SUNGKOWO', 'SW', 'assets/dokumen/foto/karyawan/thumb_227.jpg', '2015-09-01', '1959-07-12', 'JAKARTA', 'JL. Albatros 5/8 Komp. TNI AU, RT: 002 RW: 014, Jati Asih, Bekasi', '092632462407000', '', '0000-00-00', '1250005924022', 0, 0, 227, 3, 2, 3, 10, 6, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (249, NULL, '6615009', '660187', NULL, 'PUGUH INDARYONO', 'PI', 'assets/dokumen/foto/karyawan/thumb_new_249.jpg', '2019-01-01', '1966-03-09', 'SALATIGA', 'Jalan Pinang Perak I No.3 Taman Yasmin Sektor 6, RT 03/09, Kel. Curug Mekar, Kec. Bogor Barat, Bogor', '092252626404000', '', '0000-00-00', '0050308511', 0, 0, 235, 3, 2, 3, 3, 7, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (251, NULL, '1234', '2134', NULL, 'ARIF RAHMAN', 'IHSA', 'assets/dokumen/foto/karyawan/thumb_375.jpg', '2017-05-19', '2017-05-19', 'asdf edit', '', '1234', 'asdf', '2017-05-19', '2', 0, 0, 375, 2, 2, 1, 1, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (253, NULL, '8916016', '896232', NULL, 'SALMAN ALGIFFARI', 'SG', 'assets/dokumen/foto/karyawan/thumb_new_253.jpg', '2018-10-01', '1989-10-30', 'Bandung', 'Cluster Duta Village Blok B No. 6, Jalan Mesjid Albaidho, Tangerang Kota', '727698342445000', 'Jalan Kopo Sayati Hilir No. 330 RT01/RW08, Kelurahan Sayati, Kecamatan Margahayu, Kabupaten Bandung Jawa Barat', '0000-00-00', '1320016185507', 1, NULL, 377, 3, 2, 3, 10, 2, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (255, NULL, '9116014', '916165', NULL, 'NAILA VELLAYATI', 'NV', 'assets/dokumen/foto/karyawan/thumb_379.jpg', '2017-12-01', '1991-03-25', 'Medan', 'Jl Merpati IIA No 5, Tanamodindi - Palu Selatan, Kota Palu- Sulawesi Tengah', '83.382.430.3-831.000', 'Jl Merpati IIA No 5, Tanamodindi - Palu Selatan, Kota Palu- Sulawesi Tengah', '0000-00-00', '1670001872059', 0, 0, 379, 3, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (256, NULL, '9516017', '9516017', NULL, 'VIDYA MERLIANDINI', 'VM', 'assets/dokumen/foto/karyawan/thumb_380.jpg', '2016-12-01', '1995-05-01', 'Sukabumi', 'Kp. Cicadas RT 004/ RW 005 	Cicadas	Gunung Putri	Bogor\r\n', '-', '-', '0000-00-00', '', 1, NULL, 380, 3, 3, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (257, NULL, '9317006', '935560', NULL, 'REZA CAKRA BAYU', '  RC', 'assets/dokumen/foto/karyawan/thumb_new_257.jpg', '2018-04-04', '1993-05-18', 'Palu', 'Jl. Anurapura II No.21 Palu', '84.513.434.5-831.000', 'Jl. Anutapura II No.21 RT.003 RW.002 Besusu Timur Palu Timur Kota Palu Sulawesi Tengah', '2021-08-01', '1670002029089', 1, 0, 381, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (258, NULL, '9317007', '935561', NULL, 'OKTI RENDI PRATIWI', ' OR', 'assets/dokumen/foto/karyawan/thumb_new_258.jpg', '2018-04-04', '1993-10-30', 'Bandung', 'Permata Bogor Residence Blok A7/15 RT 001 RW 020, Kel. Cilebut Barat, Kec. Sukaraja, Kab. Bogor.', '840615827404000', '-', '2022-01-01', '7200756708', 1, NULL, 382, 3, 3, 3, 56, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (259, NULL, '9417008', '9417008', NULL, 'IFTITAHUL MAULIDAH ', ' IM', 'assets/dokumen/foto/karyawan/thumb_383.jpg', '2017-04-01', '1994-06-16', 'Tegal', '', ' ', ' ', '0000-00-00', '1670002047115', 0, 0, 383, 3, 3, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (260, NULL, '855851', '8517010', NULL, 'YUDHA WARGA PERDANA', '   YD', 'assets/dokumen/foto/karyawan/thumb_new_260.jpg', '2018-04-10', '1985-11-11', 'Pacitan', ' JL. LAME KALIMANGGIS NO.8 RT:002 RW:005, JATIKARYA, JATISAMPURNA, KOTA BEKASI', ' 670332840647000', '', '0000-00-00', '1670002047040', 1, 0, 384, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (261, NULL, '8817011', '885902', NULL, 'ANA ROSMAHALANI', '   ', 'assets/dokumen/foto/karyawan/thumb_new_261.jpg', '2018-05-15', '1988-07-31', 'Bogor', 'KP. KARAKAL, DS. JAMBULUWUK,  RT: 002 RW:006 NO. 27, KEC: CIAWI, KAB. BOGOR 16720', ' 971952106434000', 'KP. KARAKAL NO. 20 RT 002 RW 006 JAMBULUWUK CIAWI BOGOR', '0000-00-00', '1330013838073', 0, 0, 385, 3, 3, 2, 10, 14, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (263, NULL, '8615028', '8615028', NULL, 'RIZKI BARKAH', 'RBA', 'assets/dokumen/foto/karyawan/thumb_387.jpg', '2016-07-01', '1986-11-10', 'Jakarta', 'Jl. Surya Kencana kemuning I RT 002/ RW 005 	Pamulang Barat	Pamulang 	Tanggerang Selatan\r\n', ' 57.648.029.7-411.000', ' JL.Surya Kencana Gg kemuning 1 rt 002/05', '0000-00-00', '1670001732154', 0, 0, 387, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (264, NULL, '9513018', '9513018', NULL, 'MOLLY APIEF SEPTIANTO', '    MS', 'assets/dokumen/foto/karyawan/thumb_388.jpg', '2016-07-01', '1995-09-15', 'Cirebon', 'Grand Kahuripan Jl. Rinjani 17 Blok GU/21 RT 010/RW 010	Klapanunggal	Klapanunggal	Bogor\r\n', ' ', ' ', '0000-00-00', '1330013351150', 1, NULL, 388, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (265, NULL, '8614038', '8614038', NULL, 'KHOERUL AJI', 'KH', '', '2014-09-22', '1986-08-20', 'Banyumas', 'Banjarsari RT 004/ RW 003 	Banjarsari	Ajibarang	Banyumas \r\n', ' ', ' ', '0000-00-00', '1350005022544', 1, NULL, 389, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (266, NULL, '8614039', '8614039', NULL, 'GATOT IRAWAN', '   GI', '', '2014-10-01', '1986-09-19', 'Banjamegara', '', ' ', ' ', '0000-00-00', '1540009730783', 0, 0, 390, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (267, NULL, '7414040', '7414040', NULL, 'YANTON', '   YN', '', '2014-10-01', '1974-05-20', 'Palopo', ' Jl. Galangan Kapal Komp PT Iki No.6 RT 007/ RW 006 	Kalauku Bodoa	Tallo 	Makassar\r\n', ' ', ' ', '0000-00-00', '1520015701036', 1, NULL, 391, 6, 2, 2, 10, 3, 0, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (268, NULL, '9214041', '925850', NULL, 'HENDRA', '  ', 'assets/dokumen/foto/karyawan/thumb_new_268.jpg', '2018-04-01', '1992-10-15', 'Samarinda', 'JL. Apt. Pranoto. Perum. Bukit Pinang Bahari Blok B4, Samarinda Seberang, Kota Samarinda.', '846554541952000 ', 'JL. SOSIRI TAUBORIAH, KOTA BARU, ABEPURA, JAYAPURA', '0000-00-00', '1740000306092', 0, 0, 392, 3, 2, 3, 10, 15, 1, '2019-08-31 08:39:31', 27);
INSERT INTO `m_karyawan` VALUES (270, NULL, '8614042', '8614042', NULL, 'ARIZAL IDRIS TALIB', 'AIT', '', '2014-10-01', '1986-09-10', 'Ternate', 'Kel. Jati RT 007/ RW 004 	Jati	Ternate Selatan	Ternate\r\n', ' ', ' ', '0000-00-00', '1500010494100', 1, NULL, 394, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 4);
INSERT INTO `m_karyawan` VALUES (271, NULL, '6515030', '6515030', NULL, 'STANLEY MARLON HURSEPUNY', 'SMH', '', '2015-09-01', '1965-02-07', 'Makassar', 'BTN Paropo Blok D No. 16 RT 004/ RW 002 	Paropo	Panakkukang 	Makassar\r\n', '', '', '0000-00-00', '1520014119081', 1, NULL, 395, 6, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (272, NULL, '8715031', '8715031', NULL, 'OKSIN L. HANA', 'OK', '', '2015-09-14', '1987-10-28', 'Kakorotan', 'Lingk.I Kel. Melonguane Timur Kec. Melonguane Kepulauan Talaud Sulawesi Utara', '', '', '0000-00-00', '702601008057535', 1, NULL, 396, 6, 2, 3, 6, 3, 1, '2019-08-31 08:39:31', 9);
INSERT INTO `m_karyawan` VALUES (273, NULL, '7915033', '7915033', NULL, 'DAVID R. LEKATOMPESSY', 'DVL', '', '2015-09-14', '1979-05-11', 'Ambon', 'Saumlaki RT 003/ RW 002 	Saumlaki 	Tanimbar Selatan 	Maluku Tenggara Barat\r\n', '', '', '0000-00-00', '0400136221', 1, NULL, 397, 6, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (274, NULL, '9315034', '9315034', NULL, 'GINANJAR WISNU WIDIATMOKO', 'GWW', 'assets/dokumen/foto/karyawan/thumb_398.jpg', '2015-09-21', '1993-12-20', 'Purbalingga', 'Bali Resort Bogor, Cluster Jimbaran, Blok JC 28, Bantarjaya, Rancabungur, Kabupaten Bogor\r\n', '80.456.237.9-521.000', 'Karang Asem RT 003/ RW 002 Kel. Banteran Kec. Wangon Banyumas Jawa Tengah', '0000-00-00', '9000030801915', 1, NULL, 398, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (275, NULL, '	9415035', '9415035', NULL, 'JUSMAN KAHAR', 'JK', '', '2015-09-21', '1994-04-14', 'Merauke', 'Jl. Gor II RT 020/ RW 004 	Mandala	Merauke 	Merauke\r\n', '-', '-', '0000-00-00', '0434255366', 1, NULL, 399, 3, 2, 2, 5, 3, 1, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (276, NULL, '8515036', '8515036', NULL, 'MEGGY KANUS U. LULAN', 'MKT', '', '2015-09-22', '1985-05-19', 'Sorong', '', '-', '', '0000-00-00', '108001009746503', 0, 0, 400, 6, 2, 2, 6, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (277, NULL, '8915037', '8915037', NULL, 'RIFATMA YANTO', 'RYT', '', '2015-09-22', '1989-08-23', 'Banga', 'Kampung Ivimahad RT 003/ RW 003 	Ivimahad	Kurik 	Merauke\r\n', '-', '', '0000-00-00', '217901002414501', 1, NULL, 401, 6, 2, 2, 6, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (278, NULL, '8815038', '8815038', NULL, 'AGUS SUSILO', 'AST', 'assets/dokumen/foto/karyawan/thumb_402.jpg', '2015-10-01', '1988-02-02', 'Candi Rejasa', 'Sebyar Rejosari RT 004/ RW 001 	Sebyar Rejosari	Tomu	Teluk Bintuni\r\n', '-', '', '0000-00-00', '035301029703501', 1, NULL, 402, 3, 2, 2, 6, 3, 1, '2019-08-31 08:39:31', 8);
INSERT INTO `m_karyawan` VALUES (279, NULL, '9715039', '9715039', NULL, 'FACHRUL ROZI', 'FRT', '', '2015-10-12', '1997-12-19', 'Majalengka', 'Dusun Candrayuda RT 006/ RW 003 	Pinang Raja	Jatiwangi 	Majalengka \r\n', '-', '', '0000-00-00', '0409653184', 1, NULL, 403, 3, 2, 2, 5, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (280, NULL, '9715040', '9715040', NULL, 'YOGI SUPRIYOGI', 'YST', '', '2015-10-12', '1996-07-13', 'Majalengka', 'Blok Sinduastra RT 009/ RT 005 	Pinang Raja	Jatiwangi	Majalengka \r\n', '81.312.991.3-438.000', 'KPP PRATAMA KUNINGAN', '0000-00-00', '1540013139906', 1, NULL, 404, 3, 2, 2, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (281, NULL, '9315041', '9315041', NULL, 'BENNY SULAIMAN', 'BST', '', '2017-01-01', '1993-08-06', 'BANDUNG', 'Jl. Karadenan puri nirwana 3 blok DA no 30, cibinong kab bogor\r\n', '-', '', '0000-00-00', '1860000199311', 1, NULL, 405, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (282, NULL, '9115042', '9115042', NULL, 'DENDY MASPUTRA', 'DMT', '', '2016-12-01', '1991-03-27', 'SUKABUMI', '', '-', '', '0000-00-00', '1180007974206', 1, 0, 406, 3, 2, 2, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (283, NULL, '9516019', '9516019', NULL, 'DICKY MULYANA', 'DYT', '', '2016-01-01', '1995-06-23', 'BANDUNG', '', '-', '', '0000-00-00', '9000032488232', 1, 0, 407, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (284, NULL, '9416020', '9416020', NULL, 'HASANUDDIN', 'HST', '', '2016-09-01', '1992-12-21', 'PANGKEP', '', '-', '', '0000-00-00', '1600001701784', 1, 0, 408, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (285, NULL, '9716021', '9716021', NULL, 'MUHAMMAD AUNURROFIQ', 'MAT', '', '2016-09-01', '1997-07-23', 'MAJALENGKA', 'blok pon rt 12 rw3 desa cipinang kec. rajagaluh kab. majalengka', '73.506.383.6-438.000', '', '0000-00-00', '1340010792330', 1, NULL, 409, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (286, NULL, '9716022', '9716022', NULL, 'BELA ELDIANA PRASETYA', 'BET', '', '2016-09-01', '1997-02-25', 'MAJALENGKA', 'Dusun Dalem RT/01 RW/02 Desa Weragati Kecamatan Palasah Kabupaten Majalengka', '-', '', '0000-00-00', '1540013605682', 1, NULL, 410, 3, 2, 2, 14, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (287, NULL, '8916023', '8916023', NULL, 'YUDI ZULMAN TRI DARMA', 'YZT', 'assets/dokumen/foto/karyawan/thumb_411.jpg', '2017-04-01', '1989-06-23', 'PADANG', '', '-', '', '0000-00-00', '1110007708312', 1, 0, 411, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 31);
INSERT INTO `m_karyawan` VALUES (288, NULL, '8716024', '8716024', NULL, 'YONGKIE MOKOAGOUW', 'YMT', '', '2017-04-25', '1987-11-12', 'MANADO', 'Dendengan Dalam Lingkungan 1', '94.371.346.1-821.000', 'Jl Dendengan Dalam no.49 RW 001\r\nDendengan Dalam,Paal Dua ,Kota Manado, Sulawesi Utara ', '0000-00-00', '1500011769153', 0, 0, 412, 1, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 9);
INSERT INTO `m_karyawan` VALUES (289, NULL, '9716025', '9716025', NULL, 'JANNI DWI SAPUTRO', 'JDT', '', '2016-05-16', '1997-01-06', 'NGANJUK', '', '-', '', '0000-00-00', '1600001948880', 1, 0, 413, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (290, NULL, '9516026', '9516026', NULL, 'MORES ARIS BERUATWARIN', 'MBT', '', '2016-10-01', '1995-03-06', 'OHOIFAU', '', '-', '', '0000-00-00', '1600001671284', 0, 0, 414, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (291, NULL, '9317013', '9317013', NULL, 'DERIS SETYAWAN', 'DST', '', '2017-04-20', '1993-01-06', 'SUKABUMI', 'Perum Geriya Selaras blok B12/17 , Bojong Jengkol, Ciampea, Kab. Bogor', '-', '', '0000-00-00', '1800003211259', 1, NULL, 415, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (292, NULL, '9016029', '9016029', NULL, 'MUSNADIN', 'MST', '', '2016-07-02', '1990-10-25', 'KAMAL', '', '-', '', '2016-07-02', '0', 0, 0, 416, 7, 2, 2, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (293, NULL, '9116042', '9116042', NULL, 'AHMAD ARIF RINALDI', 'AAT', 'assets/dokumen/foto/karyawan/thumb_417.jpg', '2016-09-01', '1991-06-29', 'BOGOR', '', '-', '', '2016-09-01', '1670001760148', 1, 0, 417, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (294, NULL, '9316030', '9316030', NULL, 'ANGGIT WULANDORO', 'AWT', 'assets/dokumen/foto/karyawan/thumb_418.jpg', '2016-09-01', '1993-07-10', 'CILACAP', 'Jl. Akasia III No. 47 Perumahan Teluk, Purwokerto Selatan 53145', '804723450522000', 'Jl. Koperasi No. 39 RT 03/05 Kec. Karangpucung Kab. Cilacap 53255', '2016-09-01', '1670001760122', 0, 0, 418, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (295, NULL, '9516043', '9516043', NULL, 'RIZKI MAULANA MALIK I', 'RMT', '', '2016-11-25', '1993-02-13', 'LAMONGAN', '', '-', '', '2016-11-25', '1310011426865', 0, 0, 419, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (296, NULL, '9416031', '9416031', NULL, 'ANDRIANSYAH', 'ANT', '', '2016-12-01', '1994-12-08', 'BOGOR', '', '-', '', '2016-12-01', '1670001934065', 1, NULL, 420, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (297, NULL, '9316032', '9316032', NULL, 'AHMAD FAUZI MAKARIM', 'AFT', '', '2016-12-06', '1993-02-13', 'LAMONGAN', '', '-', '', '2016-12-06', '1670001871630', 0, 0, 421, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (298, NULL, '9316033', '9316033', NULL, 'WEBY FAHLEVI', 'WFT', 'assets/dokumen/foto/karyawan/thumb_422.jpg', '2017-12-19', '1993-09-21', 'JAKARTA', 'Kranggan Permai BS-24/9 RT 008 / RW 012 	Jatisampurna	Jatisampurna 	Bekasi\r\n', '-', '', '2016-12-19', '1670001547230', 1, NULL, 422, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (299, NULL, '9416034', '9416034', NULL, 'DANIEL PASARIBU', 'DPT', 'assets/dokumen/foto/karyawan/thumb_423.jpg', '2016-12-19', '1994-10-25', 'JAKARTA', 'Jl desa raga jaya rt 02/04 no 16 kampung citayam', '75.309.597.5-412.000', 'JL KAMPUNG UTAN JAYA RT 01/03 PONDOK JAYA CIPAYUNG DEPOK JAWA BARAT\r\n', '2016-12-19', '480401009217501', 1, 0, 423, 5, 2, 2, 6, 12, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (300, NULL, '9417001', '9417001', NULL, 'MENTARI DESINTA', 'MDT', 'assets/dokumen/foto/karyawan/thumb_424.jpg', '2017-01-01', '1992-12-01', 'JAKARTA', '', '-', '', '2017-01-01', '1670002002086', 0, NULL, 424, 3, 3, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (301, NULL, '8017009', '8017009', NULL, 'MOHAMAD IDRIS', 'MIT', '', '2017-02-01', '1980-10-26', 'JAKARTA', 'Jl. Bekasi Timur V no. 33 RT 001/  RW 009 	Cipinang Besar Utara	Jatinegara 	Jakarta Timur \r\n', '-', '', '2017-02-01', '0376541113', 0, 0, 425, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (302, NULL, '9017012', '9017012', NULL, 'YUSUF', 'YFT', 'assets/dokumen/foto/karyawan/thumb_new_302.jpg', '2017-03-10', '1990-04-20', 'MALANG', 'Jalan Kebagusan Raya Gang Wates No 6B3 Rt 11 Rw 05 Jagakarsa Jaksel 12620', '-', '', '2017-03-10', '1200011031833', 1, NULL, 426, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (303, NULL, '9417014', '9417014', NULL, 'NOVAN DENDRI AMINUDIN', 'NDT', 'assets/dokumen/foto/karyawan/thumb_427.jpg', '2017-04-17', '1994-11-01', 'BLITAR', '', '-', '', '0000-00-00', '1540014344307', 0, 0, 427, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (304, NULL, '9015026', '906313', NULL, 'RONNY TRIAS WIJAYAKUSUMA', 'RTT', 'assets/dokumen/foto/karyawan/thumb_new_304.jpg', '2018-04-01', '1990-05-21', 'UJUNG PANDANG', 'Griya Alam Sentosa Blok B.9/7 RT07/ RW.08 Pasir Angin, Cileungsi, Kabupaten Bogor', '727854606429000', 'Situ Indah II No. 85 RT03/RW08 Cigending, Ujung Berung, Kota Bandung, Jawa Barat', '2021-08-01', '1670001760080', 1, 0, 428, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (305, NULL, '9215024', '9215024', NULL, 'ARDI', 'ATT', 'assets/dokumen/foto/karyawan/thumb_429.jpg', '2016-06-01', '1990-09-13', 'JAKARTA', '', '-', '', '2016-06-01', '1670001760163', 1, 0, 429, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (306, NULL, '8715025', '8715025', NULL, 'AGUNG AFRIYANTO', 'AFT', 'assets/dokumen/foto/karyawan/thumb_new_306.jpg', '2015-12-01', '1987-05-04', 'JAKARTA', 'Kp. Sidamukti RT 002/ RW 001 Kel. Sukmajaya Kec. Sukmajaya Kota Depok Jawa Barat 16412\r\n', '-', '', '2016-06-01', '1670001775849', 1, 0, 430, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (307, NULL, '7916035', '7916035', NULL, 'AGUSTA ANDRYANTO', 'AAT', '', '2016-06-01', '1979-08-06', 'LUMAJANG', 'Sungai Tanduk RT 005 / RW -	Sungai Tanduk 	Kayu Aro	Kerinci\r\n', '-', '', '2016-06-01', '0253533279', 1, NULL, 431, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', 35);
INSERT INTO `m_karyawan` VALUES (308, NULL, '8516036', '8516036', NULL, 'EDDUHA SYAMSI', 'EST', '', '2017-06-01', '1985-10-18', 'MEDAN', 'Jl. Melati I No. 242 RT 003/ RW 011 	Sidomulyo Timur	Marpoyan Damai	Pekanbaru \r\n', '-', '', '2017-06-01', '0334588616', 1, NULL, 432, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', 32);
INSERT INTO `m_karyawan` VALUES (309, NULL, '9116037', '9116037', NULL, 'RISTIANTINA', 'RST', 'assets/dokumen/foto/karyawan/thumb_433.jpg', '2016-06-01', '1991-10-18', 'B', 'Jl Drupada Raya No 14 Komplek Indraprasta 2 Bogor 16152', '-', '', '2016-06-01', '1670001760155', 1, 0, 433, 3, 3, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (310, NULL, '8016038', '8016038', NULL, 'MUHAMMAD SUBCHI', 'MST', '', '2016-06-01', '1980-12-21', 'SURABAYA', '', '-', '', '2016-06-01', '1670001747244', 1, 0, 434, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (311, NULL, '8816039', '8816039', NULL, 'HERI SISWANTO', 'HST', '', '2016-06-01', '1988-12-11', 'BOYOLALI', 'Jl. Mulawarman Gg. Perjuangan No. 19 RT 012/ RW - 	Sepinggan	Balikpapan Selatan 	Balikpapan\r\n', '-', '', '2016-06-01', '0228051480', 1, NULL, 435, 3, 2, 2, 5, 3, 1, '2019-08-31 08:39:31', 27);
INSERT INTO `m_karyawan` VALUES (312, NULL, '9017019', '9017019', NULL, 'NAWIN GUNAWAN', 'NGT', '', '2017-03-01', '1990-07-14', 'BEKASI', '', '-', '', '2017-03-01', '1670002002094', 1, 0, 436, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (313, NULL, '94220244', '94220244', NULL, 'RUDYANSYAH FACHRUL RISWANTO', 'RFT', '', '2017-02-01', '1994-12-18', 'JAKARTA', 'Jl. H. Noor RT 004/ RW 001 No.09 	Pejanten Barat	Pasar Minggu	Jakarta Selatan\r\n', '-', '', '2017-02-01', '1240009839474', 1, 0, 437, 3, 2, 2, 14, 12, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (314, NULL, '8917020', '8917020', NULL, 'SAFRI GANDA AMRI', 'SGT', 'assets/dokumen/foto/karyawan/thumb_438.jpg', '2017-04-06', '1989-09-11', 'JAKARTA', 'Jl. H. Abdurrachman I RT.011 RW.005 No.31, Kel. Cibubur, Kec. Ciracas, Jaktim, 13720', '25.281.700.2-009.000', 'Jl. H. Abdurrachman I RT.11 RW.005, Kel. Cibubur, Kec. Ciracas, Jakarta Timur', '2017-04-06', '1290012820383', 1, NULL, 438, 6, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (315, NULL, '9117021', '9117021', NULL, 'BAIHAQY', 'BQT', '', '2017-04-17', '1991-01-15', 'JAKARTA', '', '-', '', '0000-00-00', '9000033143836', 0, 0, 439, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (316, NULL, '72210172', '72210172', NULL, 'SULAEMAN', 'SLT', 'assets/dokumen/foto/karyawan/thumb_440.jpg', '2000-02-25', '1972-06-30', 'JAKARTA', '', '-', '', '0000-00-00', '1670001732212', 1, 0, 440, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (317, NULL, '8446003', '8446003', NULL, 'SUPRIYATNA WIJAYA', 'SWT', 'assets/dokumen/foto/karyawan/thumb_441.jpg', '2006-05-16', '1984-01-03', 'BOGOR', 'Kp. Karet RT 001/ RW 002 	Situsari	Cileungsi 	Bogor\r\n', '-', '', '0000-00-00', '1670001732170', 1, NULL, 441, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (318, NULL, '7598006', '7598006', NULL, 'WIDONO', 'WDT', 'assets/dokumen/foto/karyawan/thumb_442.jpg', '1998-07-01', '1975-06-21', 'BREBES', 'Metland Cileungsi CJ.1/14 RT 002/ RW 007 	Cipenjo	Cileungsi	Bogor\r\n', '-', '', '0000-00-00', '1670001732162', 1, NULL, 442, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (321, NULL, '0812006', '8102006', NULL, 'ERTIKTO YOGO PRASETYO', 'EYT', 'assets/dokumen/foto/karyawan/thumb_443.jpg', '2017-05-02', '1981-11-14', 'JAKARTA', 'Perum Cibarusah Indah Blok E- 2 No. 07 RT 004/RW 008	Cibarusah Kota	Cibarusah	Bekasi\r\n', '-', '', '0000-00-00', '1670001732204', 1, NULL, 443, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (322, NULL, '90210173', '90210173', NULL, 'ROBBY SOFIANSYAH', 'RST', 'assets/dokumen/foto/karyawan/thumb_444.jpg', '2017-01-01', '1990-08-31', 'JAKARTA', '', '-', '', '0000-00-00', '1670001732238', 1, 0, 444, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (323, NULL, '89210179', '89210179', NULL, 'DANI RAMDHANI', 'DRT', 'assets/dokumen/foto/karyawan/thumb_445.jpg', '2017-01-01', '1989-06-26', 'BANDUNG', '', '-', '', '0000-00-00', '1670001775823', 1, 0, 445, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (324, NULL, '82210174', '82210174', NULL, 'SEFNI KURNIAWAN', 'SKT', 'assets/dokumen/foto/karyawan/thumb_446.jpg', '2012-04-02', '1982-02-06', 'JAKARTA', '', '-', '', '0000-00-00', '1670001732220', 1, 0, 446, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (325, NULL, '0725002', '7205002', NULL, 'MUHAMAD ALI MARGONO', 'MAT', 'assets/dokumen/foto/karyawan/thumb_447.jpg', '2017-05-02', '1972-11-19', 'CIREBON', '', '-', '', '0000-00-00', '1670001747301', 0, 0, 447, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (326, NULL, '7910017', '7910017', NULL, 'ASEP', 'AAT', 'assets/dokumen/foto/karyawan/thumb_448.jpg', '2016-08-08', '1979-10-24', 'JAKARTA', '', '-', '', '0000-00-00', '1670001747293', 0, 0, 448, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (327, NULL, '7115043', '7115043', NULL, 'SUYONO', 'SYT', 'assets/dokumen/foto/karyawan/thumb_449.jpg', '2017-01-01', '1971-06-13', 'YOGYAKARTA', '', '-', '', '0000-00-00', '0700004905142', 0, 0, 449, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (328, NULL, '8915044', '8915044', NULL, 'FADLI TRISTIANTO', 'FTT', 'assets/dokumen/foto/karyawan/thumb_450.jpg', '2016-08-01', '1989-03-17', 'BOGOR', '', '-', '', '0000-00-00', '0398963853', 0, 0, 450, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (329, NULL, '9217022', '9217022', NULL, 'FAUZAN AZIMA ', 'FAT', '', '2017-05-01', '1992-08-18', 'MEDAN', '', '-', '', '0000-00-00', '1670002116043', 1, 0, 451, 3, 2, 2, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (330, NULL, '68210176', '68170176', NULL, 'ANDRY PUTRA', 'APT', '', '2017-05-18', '1968-03-18', 'PADANG', '', '-', '', '0000-00-00', '1480012374693', 1, 0, 452, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (331, NULL, '7112007', '7112007', NULL, 'UHAEDI', 'UHT', 'assets/dokumen/foto/karyawan/thumb_453.jpg', '2016-05-02', '1971-11-22', 'CIAMIS', '', '-', '', '0000-00-00', '1670001732329', 1, 0, 453, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (332, NULL, '6912008', '6912008', NULL, 'MOCH KURDI', 'MKT', 'assets/dokumen/foto/karyawan/thumb_454.jpg', '2002-03-01', '1969-08-16', 'TEGAL', '', '-', '', '0000-00-00', '1670001732311', 1, 0, 454, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (333, NULL, '7412009', '7412009', NULL, 'HERI SANTOSO', 'HST', 'assets/dokumen/foto/karyawan/thumb_455.jpg', '2002-03-01', '1974-01-18', 'YOGYAKARTA', '', '-', '', '0000-00-00', '1670001732303', 1, 0, 455, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (334, NULL, '6912010', '6912010', NULL, 'SAPRI SUPRIYANA', 'SST', 'assets/dokumen/foto/karyawan/thumb_456.jpg', '2002-04-01', '1969-01-01', 'BOGOR', '', '-', '', '0000-00-00', '1670001732337', 1, 0, 456, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (335, NULL, '7812011', '7812011', NULL, 'SADIN', 'SDT', 'assets/dokumen/foto/karyawan/thumb_457.jpg', '2002-11-09', '1978-04-13', 'JAKARTA', '', '-', '', '0000-00-00', '1670001732360', 1, 0, 457, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (336, NULL, '7412012', '7412012', NULL, 'SANANG SETIAWAN', 'SST', 'assets/dokumen/foto/karyawan/thumb_458.jpg', '2002-11-09', '1974-07-22', 'JAKARTA', '', '', '', '0000-00-00', '1670001732295', 1, 0, 458, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (337, NULL, '0717004', '7107004', NULL, 'JULIANTO', 'JLT', 'assets/dokumen/foto/karyawan/thumb_459.jpg', '2007-04-10', '1971-04-17', 'KUNINGAN', '', '', '', '0000-00-00', '1670001732485', 1, 0, 459, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (338, NULL, '9012007', '9012007', NULL, 'ANDRI YANSYAH', 'AYT', 'assets/dokumen/foto/karyawan/thumb_460.jpg', '2012-06-26', '1990-01-25', 'BOGOR', '', '', '', '0000-00-00', '1670001732352', 1, 0, 460, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (339, NULL, '9114043', '9114043', NULL, 'ALI IMRON', 'ALT', 'assets/dokumen/foto/karyawan/thumb_461.jpg', '2014-02-06', '1991-01-04', 'BOGOR', '', '', '', '0000-00-00', '1670001732345', 1, 0, 461, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (340, NULL, '8406001', '8406001', NULL, 'MUHAMMAD HAMDANI', 'MHT', 'assets/dokumen/foto/karyawan/thumb_462.jpg', '2006-03-01', '1984-01-07', 'JAKARTA', '', '', '', '0000-00-00', '1670001732436', 1, 0, 462, 3, 2, 2, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (341, NULL, '0846002', '8406002', NULL, 'ATMI SUMIATI', 'AST', 'assets/dokumen/foto/karyawan/thumb_new_341.jpg', '2006-03-01', '1984-11-07', 'BOGOR', '', '', '', '0000-00-00', '1670001732253', 1, 0, 463, 3, 3, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (342, NULL, '9213020', '9213020', NULL, 'RUSNANDI', 'RST', 'assets/dokumen/foto/karyawan/thumb_464.jpg', '2013-12-12', '1992-10-29', 'BOGOR', '', '', '', '0000-00-00', '1670001795029', 1, 0, 464, 3, 2, 2, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (343, NULL, '9417017', '945361', NULL, 'NADIA SANTI APRILIA PUTRI', 'NS', 'assets/dokumen/foto/karyawan/thumb_new_343.jpg', '2018-07-01', '1994-04-16', 'Jakarta', 'Grand Nusa Dua Residence Blok C38 Bojong kulur, Gunung Putri, Bogor', '852884279447000', '-', '2021-08-01', '1670002224227', 1, 0, 465, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (344, NULL, '8115045', '8115045', NULL, 'AGUS SETIAWAN', 'AST', '', '2015-04-01', '1981-08-06', 'BOGOR', '', '', '', '0000-00-00', '1670001732378', 1, 0, 466, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (345, NULL, '9515046', '9515046', NULL, 'SADI', 'SDT', '', '2015-04-01', '1995-09-07', 'BEKASI', '', '', '', '0000-00-00', '1670001732402', 1, 0, 467, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (346, NULL, '9616027', '9616027', NULL, 'MOHAMAD SIDIK', 'MST', '', '2015-10-02', '1985-10-05', 'MAJALENGKA', '', '', '', '0000-00-00', '1670001732279', 1, 0, 468, 3, 2, 2, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (347, NULL, '9516027', '9516027', NULL, 'MUHAMMAD FAHMI ISKANDAR', 'MFT', '', '2016-05-13', '1996-05-21', 'DEPOK', '', '', '', '0000-00-00', '1670001732261', 1, 0, 469, 3, 2, 2, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (348, NULL, '8410018', '8410018', NULL, 'CAHWOYO', 'CWT', 'assets/dokumen/foto/karyawan/thumb_470.jpg', '2010-01-25', '1984-10-14', 'BREBES', '', '', '', '0000-00-00', '1670001732055', 1, 0, 470, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (349, NULL, '9816028', '9816028', NULL, 'ADE RODHIYAH', 'ART', '', '2016-11-22', '1998-06-06', 'Purbalingga', '', '', '', '0000-00-00', '1670002002102', 0, NULL, 471, 3, 3, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (350, NULL, '7810019', '7810019', NULL, 'INEN SETIAWAN', 'IST', 'assets/dokumen/foto/karyawan/thumb_472.jpg', '2010-08-10', '1978-01-01', 'BOGOR', '', '', '', '0000-00-00', '1670001732501', 1, 0, 472, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (351, NULL, '6713021', '6713021', NULL, 'ARIS', 'ART', 'assets/dokumen/foto/karyawan/thumb_473.jpg', '2013-11-01', '1967-04-21', 'BEKASI', '', '', '', '0000-00-00', '1670001732469', 1, 0, 473, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (352, NULL, '0663004', '6603004', NULL, 'HADIMAN', 'HDT', 'assets/dokumen/foto/karyawan/thumb_474.jpg', '2003-04-15', '1966-07-03', 'MAJALENGKA', '', '', '', '0000-00-00', '1670001732477', 1, 0, 474, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (353, NULL, '8215049', '8215049', NULL, 'ALDINA SORAYA', 'AST', 'assets/dokumen/foto/karyawan/thumb_475.jpg', '2015-02-09', '1982-08-14', 'JAKARTA', '', '', '', '0000-00-00', '1670001732188', 1, 0, 475, 3, 3, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (354, NULL, '6817024', '6817024', NULL, 'WARTONO', 'WRT', '', '2017-04-01', '1968-10-09', 'JAKARTA', '', '', '', '0000-00-00', '1670002063740', 1, 0, 476, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (355, NULL, '1504196', '1504196', NULL, 'MUH TAHIR RAJAB', 'MTR', '', '2016-09-01', '1980-10-30', 'Sungguminasa', 'Jl. Desa Je’nemadingin RT 002/ RW 002 	Jene’tallasa	Pallangga	Gowa\r\n', '', '', '0000-00-00', '1520015089457', 1, NULL, 477, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (356, NULL, '9217025', '9217025', NULL, 'MUHAMMAD FAIZAL AMIR', 'MFT', '', '2017-05-04', '1992-07-29', 'CILACAP', 'Jl. Sentolo Kawat RT 006 / RW 001 	Cilacap	Cilacap Selatan	Cilacap \r\n', '', '', '0000-00-00', '9000028733054', 0, 0, 478, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (357, NULL, '8017015', '8017015', NULL, 'BELUKAR HAMID  BELA', 'BHB', '', '2017-05-22', '1980-03-14', 'Rantepao', '', '', '', '0000-00-00', '1700000142657', 1, 0, 479, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 9);
INSERT INTO `m_karyawan` VALUES (359, NULL, '9117033', '9117033', NULL, 'WIDODO SAPUTRA', 'WST', '', '2017-05-01', '1991-12-08', 'PRABUMULIH', 'Jl Padat Karya RT 001/ RW 001	Gunung Ibul	Prabumulih Timur	Prabumulih\r\n', '', '', '2017-05-01', '', 1, NULL, 481, 3, 2, 2, 13, 3, 1, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (360, NULL, '9017034', '9017034', NULL, 'A. CANDRA RAMADHAN', 'CRT', '', '2017-07-01', '1990-04-14', 'BULUKUMBA', '', '', '', '2017-07-01', '1740001044155', 0, 0, 482, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (361, NULL, '9117035', '91220225', NULL, 'DITO HENDRA SATYA PERMANA PUTRA', 'DHT', '', '2017-07-01', '1991-12-17', 'SURABAYA', '\"Jl. Dakota No. 5 RT 002/ RW 001 Putat Jaya Sawahan	Surabaya \r\n', '', '', '2017-07-01', '', 1, 0, 483, 3, 2, 2, 0, 12, 1, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (362, NULL, '8717036', '8717036', NULL, 'MULYADI', 'MLT', '', '2017-07-01', '1987-09-27', 'TANGERANG', 'Kp.Lame. RT 018/009.Kel.Taban.Kec. Jambe\r\nKab.Tangerang. Prov. Banten\r\n', '957820400452000', 'Kp.Lame. RT 018/009.Kel.Taban.Kec. Jambe\r\nKab.Tangerang. Prov. Banten', '0000-00-00', '1600001179965', 1, NULL, 484, 3, 2, 0, 10, 3, 0, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (363, NULL, '9017026', '9017026', NULL, 'M. TAUFIK HIDAYAT', 'THT', '', '2017-07-12', '1990-03-02', 'BOGOR', '', '', '', '0000-00-00', '1570003957272', 0, 0, 485, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (364, NULL, '8917027', '8917027', NULL, 'HERI SISWANTO', 'HET', '', '2017-06-06', '1989-02-13', 'WONOGIRI', '', '44.209.441.3-412.000', 'bojong lio Rt 04/28,sukamaju cilodong Depok', '0000-00-00', '6610477575', 1, 0, 486, 3, 2, 3, 1, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (365, NULL, '8717028', '8717028', NULL, 'HARI SAPUTRA', 'HPT', '', '2017-06-06', '1987-01-16', 'JAKARTA', '', '', '', '2017-06-06', '0220122224', 1, 0, 487, 3, 2, 2, 5, 3, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (366, NULL, '9117029', '9117029', NULL, 'ARIE WIDIANTO', 'AWT', '', '2017-06-08', '1991-01-26', 'BOGOR', 'Jalan Kampung Bakung Cilodong No 40 RT001/005 Kelurahan Cilodong Kecamatan Cilodong Kota Depok Jawa Barat', '72.996.599.6-412.000', 'ASRAMA YONIF LINUD 328 RT 04 RW 04 KEL. CILODONG, KEC. CILODONG DEPOK JAWA BARAT', '0000-00-00', '1570005660429', 1, NULL, 488, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (367, NULL, '9317030', '9317030', NULL, 'RACHMAN ISMAIL', 'RIT', 'assets/dokumen/foto/karyawan/thumb_489.jpg', '2017-06-08', '1993-06-12', 'BANDUNG', 'Jln Maleer IV no .37 RT.06 RW.02 Kel.Maleer Kec.Batunggal\r\nKota Bandung', '', '', '2017-06-08', '1670002195856', 1, NULL, 489, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (368, NULL, '8817031', '8817031', NULL, 'RAMDHANI FAUJI SUWARTONO', 'RFS', 'assets/dokumen/foto/karyawan/thumb_490.jpg', '0000-00-00', '1988-05-04', 'JAKARTA', 'Jl. Garuda 10 Blok D 18 No. 10 RT 005/ RW 009, Mangunjaya, Tambun Selatan', '', '', '0000-00-00', '2917003463', 0, 0, 490, 3, 2, 3, 3, 3, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (369, NULL, '9117032', '91220230', NULL, 'RAKHMAD WINEFATEKUL', 'RWT', '', '2017-06-17', '1991-10-30', 'DUMAI', 'Jl. Flamboyan Srengseng RT 005/RW 002 No. 43 Kec. Kembangan Jakarta Barat.\r\n', '', '', '2017-06-17', '9000032615271', 1, NULL, 491, 3, 2, 3, 10, 12, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (370, NULL, '6917002', '6917002', NULL, 'DODY KRISHERDADI', 'DK_', 'assets/dokumen/foto/karyawan/thumb_492.jpg', '2017-03-01', '1969-09-02', 'JAKARTA', 'Mutiara Depok Blok NA/6 RT 010/ RW 013	Sukmajaya	Sukmajaya	Depok\r\n', '573482858412000', '', '0000-00-00', '0061205356', 1, NULL, 492, 3, 2, 3, 3, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (376, NULL, '9417037', '9417037', NULL, 'SHIFA YULIVIA', 'SYV', 'assets/dokumen/foto/karyawan/thumb_497.jpg', '2017-08-02', '1994-07-30', 'Tanggerang', 'Pondok Bahar Permai L/31 RT 007/ RW 005 Kel Pondok Bahar Kec. Karang Tengah Kota Tanggerang Banten', '', '', '2017-08-02', '', 1, NULL, 497, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (377, NULL, '730326', '730326', NULL, 'FITRA AKMAL', 'FI', 'assets/dokumen/foto/karyawan/thumb_498.jpg', '2016-12-01', '1973-10-27', 'Medan', 'Jl Margonda Raya kav 88, Margonda Residence IV/611, Kemiri Muka, Beji, kota Depok, Jawa Barat 16423', '081193476211000', '', '2016-12-01', '017001031181507', 1, NULL, 498, 3, 2, 3, 6, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (378, NULL, '906181', '906181', NULL, 'ISMAIL RIYANTO', 'IR', 'assets/dokumen/foto/karyawan/thumb_499.jpg', '2017-07-12', '1990-12-31', 'BEKASI', 'Citra Gran Cluster Rosewood Garden J9/21, Jatikarya, Jatisampurna RT006/RW013', '82.669.003.4-407.000', 'Irigasi Tertia 3 C4 No. 20 RT14/RW11, Bekasi Jaya, Bekasi Timur, Kota Bekasi, Jawa Barat', '2019-07-01', 'Rek. Mandiri 1670001732451 a.n Ismail Riyanto', 1, NULL, 499, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (379, NULL, '9517038', '9517038', NULL, 'RAMADHANU AULIA', 'RMD', 'assets/dokumen/foto/karyawan/thumb_500.jpg', '2017-08-14', '1995-02-07', 'Bekasi', 'Jl. Manggis I Blok C 7/7, Taman Wisma Asri, Bekasi Utara\r\n', '-', '-', '0000-00-00', '', 1, NULL, 500, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (380, NULL, '9517043', '9517043', NULL, 'MUHAMMAD REZA FAHLEVI', 'MRF', 'assets/dokumen/foto/karyawan/thumb_501.jpg', '2017-09-01', '1995-10-09', 'Jakarta', '', '', '', '0000-00-00', '', 1, NULL, 501, 3, 2, 2, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (381, NULL, '1708443', '1708443', NULL, 'NIA AGATHA MARTHA SUKMAWARDINI', 'NMS', '', '2017-08-07', '1998-09-18', 'Tangerang', '', '', '', '0000-00-00', '', 0, 0, 502, 3, 3, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (382, NULL, '9317039', '9317039', NULL, 'ARIZKI PURNAMA', 'AP', '', '2017-08-14', '1993-06-24', 'Jakarta', 'JL. Bambu Apus Raya No. 10 RT 001/ RW 003 	Bambu Apus	Cipayung	Jakarta Timur \r\n', '', '', '0000-00-00', '1290011805542', 1, NULL, 503, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (383, NULL, '1607440', '1607440', NULL, 'DEDI AFNIL', 'DA', 'assets/dokumen/foto/karyawan/thumb_504.jpg', '2017-07-24', '1990-05-26', 'Medan', 'Jl. Pukat No. 18 RT- / RW- Tegal S. Mandala I Medan Denai	Medan\r\n', '', '', '0000-00-00', '', 1, NULL, 504, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (384, NULL, '9515027', '9515027', NULL, 'RYAN ALAMSYAH', 'RYA', 'assets/dokumen/foto/karyawan/thumb_505.jpg', '2015-10-01', '1995-07-01', 'Bogor', 'Kp. Babakan RT 003/ RW 001 Sukatani Tapos Depok', '-', '-', '0000-00-00', '', 1, NULL, 505, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (385, NULL, NULL, NULL, NULL, 'M. IKBAL', '', '', NULL, '1988-07-06', 'Batusangkar', '', '', '', NULL, '', NULL, 0, 506, 3, 2, 2, 14, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (386, NULL, '9417050', '9417050', NULL, 'NURUL SUKMA ADRIANI', 'NSA', '', '2017-12-01', '1994-03-20', 'Cianjur', 'The Telkom Hub, Telkom Landmark Tower 3rd Floor, Jl. Jend. Gatot Subroto Kav. 52, Jakarta 12710', '', '', '2017-12-01', '9000000170309', 1, NULL, 507, 3, 3, 1, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (387, NULL, '8817051', '8817051', NULL, 'M. IKBAL', 'MIK', '', '2017-12-07', '1988-07-06', 'Batusangkar', 'Jorong Mandahiling RT 000/ RW 000 	Sumanik	Salimpauang	Tanah Datar \r\n', '', '', '2017-12-07', '1080008891765', 1, NULL, 508, 3, 2, 2, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (388, NULL, '8908508', '895154', NULL, 'HERI PURNOMO', 'HP', 'assets/dokumen/foto/karyawan/thumb_509.jpg', '2008-10-01', '1989-02-21', 'KEBUMEN', 'Perumahan Permata Cimanggis Cluster Safir Blok G6 no.11, Cimpaeun, Tapos - Depok', '08.901.794.1-523.00', 'Permata cimanggis Cluster safir G6/11, Tapos - Depok', '2013-12-24', '1290006121756', 1, NULL, 509, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (389, NULL, '9517509', '9517509', NULL, 'PANJI IKHSAN NUGROHO', 'PIN', '', '2017-10-12', '1995-10-30', 'Medan', '', '-', '-', '2017-10-12', '0123456789', 0, 0, 510, 3, 2, 2, 14, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (391, NULL, '9418003', '9418003', NULL, 'BAHARI SITEPU', 'BS', '', '2018-01-08', '1994-01-05', 'Medan', 'JL. Bunga Pancur -IX GG. Flamboyan No. 3 Medan RT -/ RW - 	Simpang Selayang	Medan Tuntungan 	Medan\r\n', '-', '-', '2018-01-08', '7103330186', 0, 0, 511, 3, 2, 2, 12, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (392, NULL, '9517041', '9517041', NULL, 'ARI WIRANDA SIREGAR', 'AWS', '', '2017-10-01', '1995-02-02', 'Sidoarjo', 'Jl. Lukah, Gg. Jala LK IV Medan No.24a', '', '', '2017-10-01', '1670002352853', 0, 0, 9418002, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (393, NULL, '9517509', '9517509', NULL, 'PANJI IKHSAN NUGROHO', 'PIN', '', '2017-10-11', '1995-10-30', 'Medan', 'Jl. Madiosantoso GG. Keluarga 14-A RT - / RW - 	Pulo Brayan Darat I	Medan Timur	Medan\r\n', '62.874.110.0-113.000', 'Jl. Madiosantoso GG. Keluarga 14-A RT - / RW - 	Pulo Brayan Darat I	Medan Timur	Medan', '0000-00-00', '1670002352986', 1, NULL, 1717003, 3, 2, 2, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (394, NULL, '9417046', '9417046', NULL, 'GEKY RIALDI', 'GR', 'assets/dokumen/foto/karyawan/thumb_9517002.jpg', '2017-11-20', '1994-12-03', 'Lubuk Sikaping', 'Jl Kampung Pabuaran No. 4 RT 05 RW 03 Kelurahan Cibadak Kecamatan Tanah Sareal Kota Bogor 16161', '93.942.501.3-202.000', 'Jl Koto Urek Jorong I Lansek Kadok Rao Selatan Kab. Pasaman Sumatera Barat', '2017-11-20', '1670002490406', 1, NULL, 9517002, 3, 2, 2, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (395, NULL, NULL, NULL, NULL, 'TIARA DESTERALITA', '', '', NULL, '1989-12-01', 'TULUNGAGUNG', 'GEMA PESONA ESTATE BLICK X No. 1 , DEPOK 16412', '549235240412000', 'GEMA PESONA ESTATE BLOK XI RT:006/011, SUKMAJAYA,DEPOK', NULL, '1570003489102', NULL, 0, 9417002, 3, 3, 3, 10, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (396, NULL, NULL, NULL, NULL, 'TIARA DESTERALITA', '', '', NULL, '1989-12-01', 'TULUNGAGUNG', 'GEMA PESONA ESTATE BLICK X No. 1 , DEPOK 16412', '549235240412000', 'GEMA PESONA ESTATE BLICK X No. 1 , DEPOK 16412', NULL, '1570003489102', NULL, 0, 1, 3, 3, 3, 10, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (397, NULL, NULL, NULL, NULL, 'TIARA DESTERALITA', '', '', NULL, '1989-12-01', 'TULUNGAGUNG', 'GEMA PESONA ESTATE BLICK X No. 1 , DEPOK 16412', '549235240412000', 'GEMA PESONA ESTATE BLOK XI RT:006/011, SUKMAJAYA,DEPOK', NULL, '1570003489102', NULL, 0, 1, 3, 3, 3, 10, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (399, NULL, NULL, NULL, NULL, 'TIARA DESTERALITA', '', '', NULL, '1989-12-01', 'TULUNGAGUNG', 'GEMA PESONA ESTATE BLICK X No. 1 , DEPOK 16412', '549235240412000', 'GEMA PESONA ESTATE BLICK X No. 1 , DEPOK 16412', NULL, '1570003489102', NULL, 0, 9518002, 3, 3, 3, 10, 0, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (400, NULL, '8915001', '895615', NULL, 'TIARA DESTERALITA', 'TI', 'assets/dokumen/foto/karyawan/thumb_1.jpg', '2015-02-16', '1989-12-01', 'TULUNGAGUNG', 'Griya Depok Asri blok G7 no.15', '49235240412000', 'Gema Pesona Estate blok X no.1', '2016-10-01', '1570003489102', 0, 0, 1, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (401, NULL, '8517044', '8517044', NULL, 'LUWI ADIWINATI', 'LA', 'assets/dokumen/foto/karyawan/thumb_new_401.jpg', '2017-11-01', '1985-12-04', 'MEDAN', 'JL. DIPALAYA II NO.7 RT:005 RW:006, DESA CIWARUGA, KEC: PARONGPONG, KAB. BANDUNG BARAT', '717041016421000', 'JL DIPALAYA II NO. 7 RT 005 RW 006 KEL CIWARUGA KEC PARONGPONG BANDUNG BARAT', '0000-00-00', '', 1, 0, 8915002, 3, 3, 2, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (402, NULL, '9117045', '916251', NULL, 'WIDDA LIYANA', 'WL', 'assets/dokumen/foto/karyawan/thumb_new_402.jpg', '2018-11-01', '1991-11-15', 'PALEMBANG', 'JL. PENGANTINGAN NO.1021 B KOMPERTA PLAJU PALEMBANG', '824100341306000', 'JL. TURI NO. 153 KOMPERTA PLAJU PALEMBANG', '0000-00-00', '', 0, 0, 8517045, 3, 3, 2, 10, 2, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (403, NULL, '9317047', '93220227', NULL, 'DEN HAMZAH', 'DH', '', '2017-11-20', '1993-06-19', 'BEKASI', 'Kalimanggis Jl. Lame, No.14 RT.003/RW.05 Kel. Jatikarya, Kec. Jatisampurna Kota Bekasi 17435', '72.822.088.0-432.00', 'Kp. Kalimanggis RT.003/RW.005 Kel. Jatikarya Kec. Jatisampurna Kota Bekasi Jawa Barat', '0000-00-00', '1670002352861', 1, NULL, 9117046, 3, 2, 3, 10, 12, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (404, NULL, '9517048', '9517048', NULL, 'RADIAMAN SINAGA', 'RS', '', '2017-11-20', '1995-05-19', '-', 'Jl. Sempurna Dsn. II Mawar RT 004/ RW 001 	Sambirejo Timur	Percut Sei Tuan 	Medan \r\n', '', '', '0000-00-00', '', 0, 0, 9317002, 0, 2, 2, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (405, NULL, '9517049', '9517049', NULL, 'MUHAMMAD REZA IRFANI', 'MRI', '', '2017-11-23', '1995-01-05', '-', '', '', '', '0000-00-00', '', 0, 0, 9517049, 3, 2, 2, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (406, NULL, '9517052', '9517052', NULL, 'FAHRUDIN ROSANTO', 'FR', '', '2017-12-11', '1995-06-15', 'LAMONGAN', 'JL. MARGONDA RAYA, KP. MANGGA, NO. 48, RT 005/012, DEPOK, PANCORAN MAS,JAWA BARAT', '82.124.748.3-448.000', 'JL. MARGONDA RAYA, KP. MANGGA, NO. 48, RT 005/012, DEPOK, PANCORAN MAS,JAWA BARAT', '0000-00-00', '1570006153804', 1, NULL, 9517050, 3, 2, 2, 14, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (407, NULL, '9717053', '9717053', NULL, 'RACHMAT DWI RAMDANI', 'RDR', '', '2017-12-12', '1987-05-06', 'Jakarta', 'Jl. Gandaria 3 no 90A RT013/RW02 Pekayon,Pasar Rebo, Jakarta Timur 13710', '83.505.856.1-009.000', 'Jl. Gandaria 3 no 90A RT013/RW02 Pekayon,Pasar Rebo, Jakarta Timur 13710', '0000-00-00', '1670002352846', 1, NULL, 9517053, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (408, NULL, '9617054', '9617054', NULL, 'KRISNA YUDHA DEWANTARA', 'KYD', '', '2017-12-27', '1996-01-14', '-', 'Kp.Mampangan RT 002/009 No.60 	Kemiri Muka	Beji Kota	Depok\r\n', '', '', '0000-00-00', '', 0, 0, 9717054, 0, 2, 2, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (409, NULL, '9517055', '9517055', NULL, 'RAFDO FEBRIAN GUSDI', 'RFG', '', '2017-12-27', '1995-02-26', '-', 'Jl. Dolang 2 No.93, Kel. Kalisari, Kec. Pasar Rebo, Jakarta Timur\r\n', '', '', '0000-00-00', '', 1, NULL, 9617055, 3, 2, 3, 13, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (410, NULL, '9018002', '9018002', NULL, 'NIZAR ZAIN', 'NZ', 'assets/dokumen/foto/karyawan/thumb_9517056.jpg', '2018-01-16', '1990-07-24', 'JAKARTA', '', '', '', '0000-00-00', '1560001556978', 0, 0, 9517056, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (411, NULL, '8918001', '8918001', NULL, 'SUCI RAHMADITA', 'SR', '', '2018-01-02', '1989-03-21', '-', 'Jl. Cip Baru RT 008/ RW 018 	Cipinang	Pulo Gadung	Jakarta Timur\r\n', '', '', '0000-00-00', '', 1, 0, 9018003, 3, 3, 3, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (412, NULL, '8118004', '8118004', NULL, 'YUDHY FAJRY', 'YF', '', '2018-01-11', '1981-05-14', 'JAKARTA', 'JL. Kp Ceringin No 10 Rt 02 Rw 08 Desa Ragajaya Kecamatan Bojong Gede Citayam Kabupaten Bogor 16921', '44.292.361.1009.000', 'JL. TANAH MERDEKA NO. 30 RT 05 RW 06 KELURAHAN RAMBUTAN KECAMATAN CIRACAS JAKARTA TIMUR 13830', '0000-00-00', '1290009930542', 1, NULL, 8918004, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (413, NULL, '9318005', '9318005', NULL, 'NANDA ANUGRAH PRATAMA', 'NAP', '', '2018-01-29', '1993-06-14', 'Dumai', '', '', '', '0000-00-00', '1340006407182', 1, NULL, 8118005, 3, 2, 2, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (417, NULL, '895627', '895627', NULL, 'YOGGA CHRISTYA PRATAMA', 'YG', 'assets/dokumen/foto/karyawan/thumb_new_417.jpg', '2014-03-04', '1989-08-09', 'BANDUNG', 'Taman Cibaduyut Indah Blok FA. 296 Bandung 40239 / Kp Sekeawi No. 168 RT. 02/RW. 09\r\nBandung', '72.279.330.4-445.000', 'Kp Sekeawi No. 168 RT. 02/RW. 09\r\nBandung', '2016-01-01', '1300013226934', 1, 0, 1, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (418, NULL, '8916001', '896086', NULL, 'TEGUH OKIWANTO', 'TH', 'assets/dokumen/foto/karyawan/thumb_8914002.jpg', '2017-12-01', '1989-10-09', 'JAKARTA', 'Jl. Dewa Ciracas RT003/RW002 No.55, Kel. Ciracas, Jakarta Timur', '57.402.865.0-009.000', 'KPP Pratama Jakarta Pasar Rebo', '2021-08-01', '1670001870434', 1, 0, 8914002, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (419, NULL, '8813001', '885066', NULL, 'DWI SETYA RIWANTO', 'DS', 'assets/dokumen/foto/karyawan/thumb_new_419.jpg', '2013-01-02', '1988-05-04', 'JAKARTA', 'Komp. LAN 1 Jl. Galuh 2 E 16 Cirendeu Indah Rt 001/012 Pisangan - Ciputat Timur Tangerang Selatan', '66.939.230.0.-411.000', 'Komp. LAN 1 Jl. Galuh II E 16 Cirendeu Indah, Pisangan - Ciputat Timur', '2014-12-17', '9000003123289', 1, NULL, 8916002, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (421, NULL, '8115029', '8115029', NULL, 'ZULKARNAIN', 'Z0', '', '2015-04-01', '1981-09-24', '--', '', '', '', '0000-00-00', '', 0, 0, 9515028, 3, 2, 0, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (422, NULL, '8817031', '8817031', NULL, 'RAMDHANI FAUJI SUWARTONO', 'RFS', '', '2017-06-15', '1988-05-04', 'BEKASI', 'Jl. Garuda 10 Blok D 18 No. 10 RT 005/ RW 009, Mangunjaya, Tambun Selatan', '', '', '0000-00-00', '1670002195849', 1, 0, 8115030, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (426, NULL, '9618006', '9618006', NULL, 'MUHAMAD FATHUR RIZKY', 'MFR', '', '2018-02-13', '1996-07-08', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 1616002, 3, 2, 2, 13, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (428, NULL, '9518007', '9518007', NULL, 'SYINTA KESUMA AISYAH', 'SKA', '', '2018-03-06', '1995-01-02', 'SEMULI JAYA', 'DUTA MEKAR ASRI, BLOK O-1 NO. 16, CILEUNGSI, KAB. BOGOR', '', '', '0000-00-00', '', 0, 0, 9018008, 3, 3, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (429, NULL, '8818008', '8818008', NULL, 'IBRAHIM NURDIANSYAH SIREGAR', 'INS', '', '2018-02-05', '1988-04-21', 'Bukit Pelita', 'Jl. Jati Luhur, Gg. Resmi No. 47, Medan Tembung', '', '', '0000-00-00', '', 1, 0, 9518008, 3, 2, 0, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (430, NULL, '9218009', '9218009', NULL, 'MUHAMAD MUSLIH', 'MM', '', '2018-02-26', '1992-11-19', 'SURABAYA', 'DK. Bulak Benteng Sek. 5/8 RT/RW 002/001, Kel. Bulak Benteng, Kec. Kenjeran, Surabaya', '', '', '0000-00-00', '', 1, 0, 8818009, 3, 2, 0, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (431, NULL, '9518010', '9518010', NULL, 'MOH. IQBAL', 'MI', '', '2018-03-14', '1995-11-23', 'TEMBONGRAJA', 'TEMBONGRAJA RT:003 RW:001, KEC. SALEM, KAB. BREBES\r\n', '', '', '0000-00-00', '1670002490372', 1, NULL, 9218010, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (432, NULL, '9518011', '9518011', NULL, 'DITIA TASHA SABRINA', 'DTS', '', '2018-04-01', '1995-04-13', 'BOGOR', 'Jl. Tanjung VII Blok O-XII/19 RT/RW 003/012, Kedungwaringin, Tanah Sereal', '', '', '0000-00-00', '', 0, NULL, 9518011, 3, 3, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (433, NULL, '8218012', '8218012', NULL, 'MOHAMAD ZAMRONI', 'MZR', '', '2018-04-01', '1982-11-19', 'TEGAL', 'Jl. Mangga Gang. Haji Ahad No.47E Rt..006/ 009 Cibubur - Ciracas\r\nJakarta Timur', '59.339.947.0-432.000', 'Perum Satwika Permai Blok.E1/7 Rt.002 Rw.009Jati Luhur - Jati Asih Bekasi', '0000-00-00', '1030004870834', 1, NULL, 9518012, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (434, NULL, '9318013', '9318013', NULL, 'SURYA PRATAMA PUTRA', 'SPP', '', '2018-04-09', '1993-07-08', 'MEDAN', '', '', '', '0000-00-00', '', 0, 0, 8218013, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (435, NULL, '9418014', '9418014', NULL, 'AZHARY ASDHI', 'AAD', '', '2018-04-19', '1994-06-14', 'MEDAN', 'Jl. Melati XIII No. 165 Blok 10 RT 001/ RW 017 	Helvetia Tengah	Medan Helvetia	Medan\r\n', '', '', '0000-00-00', '', 1, NULL, 9318014, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (436, NULL, '9318015', '9318015', NULL, 'WIGIONO', 'WOO', '', '2018-04-23', '1993-10-01', 'BREBES', 'Tembongraja RT/RW 001/002, Tembongraja, Salem, Brebes', '', '', '0000-00-00', '', 0, 0, 9418015, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (437, NULL, '8718016', '8718016', NULL, 'TONI KRISMANTO', 'TK', '', '2018-05-01', '1987-01-14', 'JAKARTA', 'Kp. Stangkle RT/RW 004/016, Kemirimuka, Beji, Depok', '', '', '0000-00-00', '', 1, 0, 9318016, 3, 2, 0, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (438, NULL, '8518017', '8518017', NULL, 'HENDRIAN', 'HNN', '', '2018-04-01', '1985-06-21', 'MEDAN', '', '', '', '0000-00-00', '1080015291629', 1, 0, 8718017, 3, 2, 0, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (439, NULL, '9518018', '9518018', NULL, 'ICHWANI', 'ICW', '', '2018-06-01', '1995-02-15', 'BIREUN', 'JL. Rawasakti No. 95 Peuniti Kec. Baiturahman, Banda Aceh', '', '', '0000-00-00', '', 0, 0, 8518018, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (440, NULL, '9118019', '9118019', NULL, 'DEDDY SUTIIATMADJA', 'DSM', '', '2018-06-01', '1991-05-17', 'MANADO', 'Perumahan Wale Manguni Indah Blok A No.1 Lingkungan IV, Kel. Singkil Dua, Singkil, Manado\r\n', '', '', '0000-00-00', '', 1, 0, 9318019, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', 34);
INSERT INTO `m_karyawan` VALUES (441, NULL, '8818020', '8818020', NULL, 'BAYU ARDIYANSYAH', 'BA', '', '2018-07-01', '1988-12-07', 'JAKARTA', 'Perum Puri Kencana Blok C/08, Cibinong Bogor', '', '', '0000-00-00', '', 1, 0, 9118020, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (442, NULL, '9118021', '9118021', NULL, 'SAHRIAL', 'SRR', '', '2018-07-01', '1991-04-21', 'LAMPUNG', 'Jl. Pengadegan Timur No. 23 RT 001 RW 002, Pengadegan, Pancoran, Jaksel', '', '', '0000-00-00', '', 1, 0, 9818021, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (443, NULL, '9418022', '9418022', NULL, 'DJORDY LAKSANA ANUGRAH', 'DLA', '', '2018-07-09', '0000-00-00', 'BEKASI', 'Jl. H Jole No. 1 RT 002/ RW 004 	kel .Bantargebang.kec Bantargebang. Kota Bekasi. jawa barat\r\n', '', '', '0000-00-00', '', 0, 0, 9118022, 3, 2, 0, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (444, NULL, '9618023', '9618023', NULL, 'GRANDIS LIMNOTAMA HAZATHIAN', 'GLH', '', '2018-07-10', '1996-11-23', 'TANGERANG', 'Jalan H. kating, Pondok serut 4. RT 01 RW 03 No.128. Pondok kacang barat, Pondok aren, Tangerang Selatan', '', '', '0000-00-00', '', 1, NULL, 9418023, 3, 2, 2, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (445, NULL, '9618024', '9618024', NULL, 'ILYAS ARYA KUNCORO', 'IAK', '', '2018-07-12', '1996-12-28', 'BOYOLALI', 'KAPUK KEBON JAHE RT: 011/003 NO. 69, KEL: KAPUK, KEC: CENGKARENG, JAKARTA BARAT', '', '', '0000-00-00', '', 0, 0, 9618024, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (446, NULL, '9418025', '9418025', NULL, 'HANDOKO', 'HDK', '', '2018-07-17', '1994-08-25', 'PADANG', 'KOMPLEK BERLINDO, RT: 005/006, KEL: SUNGAI SAPIH, KEC: KURANJI, KOTA PADANG', '', '', '0000-00-00', '', 0, 0, 9618025, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (447, NULL, '805967', '805967', NULL, 'BUDI HARI SETIAWAN', 'BHS', 'assets/dokumen/foto/karyawan/thumb_new_447.jpg', '2020-09-01', '1980-04-26', 'SURABAYA', 'KOMP. KOTA WISATA BLOK RA6 NO.2, CIANGSANA, BOGOR', '594242794-445000', '', '2014-04-07', '1300005917672', 1, 0, 9418026, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (448, NULL, '9218027', '9218027', NULL, 'FERDI HUSYAENI', 'FHY', '', '2018-07-23', '1992-02-19', 'JAKARTA', 'KMP. SIDAMUKTI RT:005 RW:003, SUKAMAJU, CILODONG, KOTA DEPOK', '642503684412000', 'KMP. SIDAMUKTI RT:005 RW:003, SUKAMAJU, CILODONG, KOTA DEPOK', '0000-00-00', '1330016809261', 1, NULL, 8018027, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (449, NULL, '9318028', '9318028', NULL, 'AL HAFIZ YUNAS', 'AHY', '', '2018-07-30', '1993-03-26', 'Tanjung Tiram', 'Jl Serma Achim Kp. Buaran RT 004/ RW 002 Desa Lambang Sari Kec. Tambun Selatan Bekasi', '', '', '0000-00-00', '', 0, 0, 9218028, 3, 2, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (450, NULL, '9918029', '9918029', NULL, 'RAHMAWATI', 'RWI', '', '2018-07-26', '1999-12-15', 'DEPOK', 'Kp. Ciherang RT 004/ RW 007 Kel. Sukatani Kec. Tapos Depok', '', '', '0000-00-00', '', 1, 0, 9318029, 3, 3, 2, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (451, NULL, '9318030', '9318030', NULL, 'R. SUPRIYADI', 'RSI', '', '2018-07-26', '1993-04-01', 'BOGOR', 'Kaumpandak RT 004/ RW 004 Kel. Karadenan Kec. Cibinong Bogor', '', '', '0000-00-00', '', 1, 0, 9918030, 3, 2, 2, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (452, NULL, '9518031', '9518031', NULL, 'FIRDAUS', 'FDS', '', '2018-07-26', '1995-07-02', 'PEKALONGAN', 'Sidamukti RT 003/ RW 024 Kel. Sukamaju Kec. Cilodong Depok', '', '', '0000-00-00', '', 1, 0, 9318031, 3, 2, 2, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (453, NULL, '9518032', '9518032', NULL, 'ABDUL AZIZ SITUMEANG', 'AAS', 'assets/dokumen/foto/karyawan/thumb_new_453.jpg', '2018-07-27', '1995-04-30', 'MEDAN', 'JL. GURILLA NO.3 MEDAN', '', '', '0000-00-00', '', 1, NULL, 9518032, 3, 2, 2, 0, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (454, NULL, '826100', '826100', NULL, 'THEA VALENTINE LUSIANITA', 'TVL', 'assets/dokumen/foto/karyawan/thumb_new_454.jpg', '2020-09-01', '1982-09-07', 'Bogor ', 'JL.NURUL IKHWAN 3 NO.23 PERUMAHAN NURUL IKHWAN - TANAH BARU BOGOR UTARA', '677544363404000', 'JL.NURUL IKHWAN 3 NO.23 PERUMAHAN NURUL IKHWAN - TANAH BARU BOGOR UTARA', '0000-00-00', '1330009997248', 1, 0, 9518033, 3, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (455, NULL, '9518001', '9518001', NULL, 'MUHAMMAD TAUFIQ ADRIANSYAH', 'MA', '', '2018-09-17', '1995-03-19', 'MEDAN', 'Jl. Ternateraya No. 7 Aren Jaya RT 001/RW 018 Kel. Aren Jaya Kec. Bekasi Timur Kota Bekasi ', '85.832.673.9-407.000', 'Perumnas 3, JL. Ternate Raya Blok X.1 No/07 RT.001/RW.018. AREN JAYA, BEKASI TIMUR', '0000-00-00', '0418915471', 1, 0, 8217017, 3, 2, 2, 5, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (456, NULL, '9518002', '9518002', NULL, 'ROKI AZMI', 'ROK', '', '2018-09-17', '1995-10-16', 'JAKARTA ', 'Jl. Basuki No. 44 RT 006/ RW 006 Kel. Cilangkap Kec. Cipayung Jakarta Timur', '', '', '0000-00-00', '', 1, NULL, 9518002, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (457, NULL, '9518003', '9518003', NULL, 'YUNITA SURI SYAFIKARANI PUTRI ', 'JSS', 'assets/dokumen/foto/karyawan/thumb_new_457.jpg', '2018-09-19', '1995-06-20', 'SIDOARJO', 'Kota Wisata Florence Blok H 03 N0.29 RT 001/ RW 024 Kel. Ciangsana Kec. Gunung Putri Kab. Bogor', '', '', '0000-00-00', '0700009720579', 1, 0, 9518003, 3, 3, 2, 14, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (458, NULL, '6318004', '632472', NULL, 'TONDA PRIYANTO', 'TP', 'assets/dokumen/foto/karyawan/thumb_new_458.jpg', '2018-09-17', '1963-07-07', 'PURWOKERTO', 'JL. ABIYASA RAYA 47, RT:003 RW:006, BANTARJATI, KOTA BOGOR UTARA, KOTA BOGOR', '', '', '0000-00-00', '', 0, 0, 9518004, 3, 2, 3, 0, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (459, NULL, '96220245', '96220245', NULL, 'IVAN HERDIANSYAH', 'IH', '', '2018-10-29', '1996-08-02', 'JAKARTA ', 'Jl. Warung Jati Timur III/ 57 RT 008/ RW 004 Kel. Kalibata Kec. Pancoran Jakarta Selatan ', '', '', '0000-00-00', '', 1, 0, 6318005, 3, 2, 2, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (460, NULL, '9518006', '9518006', NULL, 'DWIKO ADITIA RACHADI', 'DAR', '', '2018-11-12', '1995-09-26', 'JAKARTA', 'Cluster Sevilla Blok B-D/ 25 SEKT. XII-2 BSD RT 004/ RW 014 Kel. Ciater Kec. Serpong Tanggerang Selatan', '', '', '0000-00-00', '', 0, 0, 9618006, 3, 2, 2, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (461, NULL, '6705001', '675211', NULL, 'JOKO SARWONO', 'JS', 'assets/dokumen/foto/karyawan/thumb_new_461.jpg', '2019-01-01', '1967-08-31', 'Karanganyar', 'Jl. Sanjaya no. 25 Vila Indah Pajajaran Bogor - 16528', '074857905-404000', '', '2005-08-01', '0183925629', 1, 0, 9518007, 3, 2, 3, 5, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (462, NULL, '7506001', '755441', NULL, 'ALIMUDDIN', 'AMN', 'assets/dokumen/foto/karyawan/thumb_new_462.jpg', '2019-01-01', '1975-06-21', 'Tonasa', 'Jl Andi Kollo No 4 Kel Bulete Kec Pitumpanua Kab Wajo 90992', '470508284-808000', '', NULL, '0088919771', 1, 0, 6705002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (463, NULL, '8705001', '875012', NULL, 'ACHMAD FADILLAH', 'AFD', 'assets/dokumen/foto/karyawan/thumb_new_463.jpg', '2019-01-01', '1987-08-19', 'JAKARTA', 'Paradise Serpong City Blok i.11/7 RT004/07 Babakan Setu Tangerang Selatan', '266911999035000', 'Kp, Kecil No.15 RT013/01 Sukabumi Selatan Kebon Jeruk Jakarta Barat', NULL, '0197184446', 1, 0, 7506002, 3, 2, 3, 5, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (464, NULL, '6318001', '633029', NULL, 'I NENGAH WIRSANA', 'INW', '', '2018-09-13', '1963-06-24', 'TABANAN', '', '', '', '0000-00-00', '', 0, NULL, 8705002, 2, 2, 0, 0, 11, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (465, NULL, '7218001', '720161', NULL, 'PHILIPUS NANANG HARJENDRA S', 'PN', 'assets/dokumen/foto/karyawan/thumb_new_465.jpg', '2021-04-01', '1972-05-12', 'MAGELANG', '', '', '', '0000-00-00', '', 1, 0, 6318002, 0, 2, 0, 0, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (466, NULL, '7118001', '715383', NULL, 'TRISNO LUMINTO', 'TL', 'assets/dokumen/foto/karyawan/thumb_new_466.jpg', '2019-04-01', '1971-04-02', 'JAKARTA ', 'Taman Villa Meruya Blok H5/26, DKI Jakarta 11650', '772828364-033000', '', NULL, '0680117402121', 1, 0, 7218002, 5, 2, 3, 7, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (467, NULL, '665290', '665290', NULL, 'BENYAMIN LUNAERA GAVUR', 'BLG', 'assets/dokumen/foto/karyawan/thumb_new_467.jpg', '2020-09-01', '1966-02-02', 'JAKARTA', 'Jl Pinang V No 55 Pondok Labu Jaksel\r\n', '486579535016000', '', '0000-00-00', '6790043233', 0, 0, 7118002, 3, 2, 3, 3, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (468, NULL, '8118001', '815533', NULL, 'MEITHA INDAH WULANDARI', 'MIW', 'assets/dokumen/foto/karyawan/thumb_new_468.jpg', '2019-04-01', '1981-05-02', 'PADANG ', 'Kemang Pratama I Jl Pratama 2 Blok Q/9/ RT 003/021 Bojong Rawalumbu Bekasi', '477529366-432000', '', '2006-05-03', '0093807720', 1, 0, 6618002, 3, 3, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (469, NULL, '7518001', '755440', NULL, 'HENRY YOSEPH SIAHAAN', 'HY', 'assets/dokumen/foto/karyawan/thumb_new_469.jpg', '2019-09-01', '1975-06-21', 'PEMATANG SIANTAR', 'Legenda Wisata, Zona Nobel O3/ No.11. Cibubur. 16967', '242253888-003000', 'Jl Kayu Mas Selatan C/27 Pulo Gadung - Jakarta Timur\r\n', '0000-00-00', 'Mandiri a.n Henry Yoseph 1220010213794', 1, 0, 8118002, 5, 2, 3, 0, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (470, NULL, '642052', '642052', NULL, 'AMRIZAL', 'AMR', 'assets/dokumen/foto/karyawan/thumb_new_470.jpg', '2020-09-01', '1964-11-30', 'Padang', 'Jalan Yudistira1 no 7, Rt 05/ RW14 Kel Tegal Gundil Kec. Bogor Utara Kota Bogor', '092240100404000', 'Jalan Yudistira1 no 7, Rt 05/ RW14 Kel Tegal Gundil Kec. Bogor Utara Kota Bogor', '0000-00-00', '1030004561177', 0, 0, 7518002, 3, 2, 3, 14, 4, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (471, NULL, '7918001', '790098', NULL, 'FINO ARFIANTONO', 'FA', 'assets/dokumen/foto/karyawan/thumb_new_471.jpg', '2020-01-01', '1979-04-10', 'BANDUNG', 'Padasuka Ideal Residence, Cluster Euphorbia, Blok E2 no. 19, RT. 03, RW. 21,\r\nJl. Terusan Padasuka km 2,2 Kel. Cimenyan, Kec. Cimenyan\r\nKabupaten Bandung 40197', '19.892.534.9-424.000', 'Jl. Laswi no. 5\r\nKacapiring, Batununggal\r\nBandung - Jawa Barat', '2005-10-01', '1310007389242', 1, 0, 6418002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (472, NULL, '735652', '735652', NULL, 'WUWUH NUGROHO', 'WN', 'assets/dokumen/foto/karyawan/thumb_new_472.jpg', '2020-09-01', '1973-05-11', 'BANYUMAS', 'Jl Labu No 19 Depok Utara 16421\r\n', '585310816412000', '', '0000-00-00', '0250109713121', 1, 0, 7918002, 3, 2, 3, 7, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (473, NULL, '7118001', '715013', NULL, 'TEGUH PERMONO', 'TO', 'assets/dokumen/foto/karyawan/thumb_new_473.jpg', '2019-09-01', '1971-03-07', 'Jakarta', 'Komp. DitJen. Moneter no B8/A, RT.06/RW.013, Kemanggisan, Kel. Palmerah, Kec. Palmerah, Jakarta Barat, Jakarta 11480', '07.640.683.4-031-000', '', '0000-00-00', '0121596265', 1, 0, 7318002, 3, 2, 3, 5, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (474, NULL, '7118001', '710374', NULL, 'ALBERT SINURAT', 'AS', 'assets/dokumen/foto/karyawan/thumb_new_474.jpg', '2019-07-01', '1971-03-14', 'BANDUNG ', 'Komp Satwika Permai C2 No3 RT 006 RW009 Jatiluhur Jatiasih Bekasi 17425\r\n', '079601613-721000', '', '0000-00-00', '0700002043813', 0, 0, 7118002, 5, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (475, NULL, '7318001', '730566', NULL, 'ANGGORO KURNIANTO WIDIAWAN,MSC', 'AK', 'assets/dokumen/foto/karyawan/thumb_new_475.jpg', '2018-09-13', '1973-12-25', 'MAGELANG', 'Jl. Ketapang B5/5 Graha Permai, Sawah, Ciputat, Tangerang Selatan, Banten 15413', '258216712411000', '', '0000-00-00', '0700005817007', 1, NULL, 7118002, 3, 2, 3, 10, 7, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (476, NULL, '7218001', '720320', NULL, 'SAFARUDDIN', 'SFD', 'assets/dokumen/foto/karyawan/thumb_new_476.jpg', '2020-01-01', '1972-03-22', 'MAKASSAR', '', '071992671952000', '', '1996-12-01', '1330005126776', 1, 0, 7318002, 3, 2, 2, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (477, NULL, '7118001', '710404', NULL, 'IRSYAD ILYAS', 'II', 'assets/dokumen/foto/karyawan/thumb_new_477.jpg', '2019-08-01', '1971-05-18', 'PEKANBARU', 'Vila Citra Blok C1 No 21 RT 02 RW 05 Tegal Gundil Bogor Utara, Jawa Barat\r\n', '092251792-404000', '', '0000-00-00', '0700006365741', 0, 0, 7218002, 3, 2, 3, 10, 4, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (478, NULL, '8518001', '850130', NULL, 'DIAH ENI PUSPITAWATI', 'DE', 'assets/dokumen/foto/karyawan/thumb_new_478.jpg', '2020-01-01', '1985-05-08', 'YOGYAKARTA', 'Perum Pondok Damai Blok A.6/20, Cileungsi Kidul, Cileungsi', '071992671952000', '', '2009-01-01', '1310004074292', 1, NULL, 7118002, 3, 3, 3, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (479, NULL, '8518001', '850126', NULL, 'RYAN VAMONDO', 'RV', '', '2018-09-13', '1985-02-24', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 8518002, 0, 2, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (480, NULL, '7218001', '720238', NULL, 'SUROSO YULIANTO, ST. MT.', 'SOY', 'assets/dokumen/foto/karyawan/thumb_new_480.jpg', '2020-01-01', '1972-07-21', 'PURWOREJO', '', '092241207404000', '', '1996-11-01', '0700004909136', 1, 0, 8518002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (481, NULL, '7218001', '720234', NULL, 'SELAMET JOELIANTO MOLLIJONO', 'SJ', 'assets/dokumen/foto/karyawan/thumb_new_481.jpg', '2020-01-01', '1972-07-17', 'BOGOR', 'Jl Wijayakusuma IV no 30 Perumahan Taman Yasmin Bogor', '092252071404000', '', '1996-11-01', '1330009878240', 1, NULL, 7218002, 6, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (482, NULL, '8618001', '860092', NULL, 'AGENG KHARISMA PUTRI', 'AKP', 'assets/dokumen/foto/karyawan/thumb_new_482.jpg', '2018-09-13', '1986-07-02', 'SEMARANG', 'Perumahan Kota Wisata Cluster America A7 No.11\r\nCibubur', '', '', '0000-00-00', '', 0, 0, 7218002, 4, 3, 3, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (483, NULL, '8318001', '830102', NULL, 'RISDIANTO YULI HERMANSYAH', 'RY', 'assets/dokumen/foto/karyawan/thumb_new_483.jpg', '2020-01-01', '1983-07-23', 'YOGYAKARTA', 'Taman Yasmin VI, Jl. Pinang Perak IV/24, Kota Bogor 16113', '475538922541000', '', '2008-03-01', '', 1, NULL, 8618002, 3, 2, 3, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (484, NULL, '8518001', '850141', NULL, 'MOHAMAD SAIFUL HIDAYAT', 'MSH', 'assets/dokumen/foto/karyawan/thumb_new_484.jpg', '2020-01-01', '1985-03-01', 'MADIUN', 'Kalimaya Heights no 7. Jl. Poncol Raya, Cireundeu, Ciputat Timur, Tangerang Selatan 15419', '252868369626000', '', '2009-05-01', '1300009244032', 1, NULL, 8318002, 3, 2, 3, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (485, NULL, '7218001', '720508', NULL, 'HERY NUGROHO', 'HN', 'assets/dokumen/foto/karyawan/thumb_new_485.jpg', '2020-01-01', '1972-01-04', 'SUKOHARJO', '', '098432180412000', '', '1997-10-01', '0012779195', 1, 0, 8518002, 4, 2, 2, 5, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (486, NULL, '7318001', '730503', NULL, 'MOKHAMMAD SALIM SANTOSO', 'MS', 'assets/dokumen/foto/karyawan/thumb_new_486.jpg', '2020-01-01', '1973-01-26', 'BREBES', 'Dirgantara Residence Blok B7 Jl.Letkol Atang Senjaya Bantar Jaya  Ranca Bungur Bogor 16133', '07.220.838.2-954.000', 'Desa Samau RT000 RW000 Anggraidi Biak Kota Papua', '1998-03-01', '1540000174437', 1, NULL, 7218002, 3, 2, 3, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (487, NULL, '7218001', '720193', NULL, 'RICKY KUSNANDAR', 'RK', 'assets/dokumen/foto/karyawan/thumb_new_487.jpg', '2020-01-01', '1972-04-11', 'JAKARTA', '', '092250000404000', '', '1996-11-01', '1330013507223 Mandiri a.n Ricky Kusnandar', 1, 0, 7318002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (488, NULL, '6518001', '651267', NULL, 'SOFYAN', 'SFY', 'assets/dokumen/foto/karyawan/thumb_new_488.jpg', '2020-01-01', '1965-02-22', 'TEBING TINGGI', 'Jalan Amarilis V Blok V8 No.8, RT006, RW009, Kelurahan Kedung Waringin, Kecamatan Tanah Sareal, Kota Bogor 16164', '093484442404000', 'Jl. Amarilis V No.8 Taman Cimanggu RT 06/09 Kedung Waringin Tanah Sareal Kota Bogor, Jawa Barat', '1992-02-01', '0022914011', 0, 0, 7218002, 3, 2, 3, 5, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (489, NULL, '795910', '795910', NULL, 'M. IQBAL', 'MI', 'assets/dokumen/foto/karyawan/thumb_new_489.jpg', '2020-09-01', '1979-02-08', 'PADANG', 'Komplek Pesona Kahyangan Blok EN No 7, Margonda Raya, Depok 16411\r\n', '496593039412000', '', '0000-00-00', '0000715757', 1, 0, 6518002, 3, 2, 0, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (490, NULL, '845512', '856016', NULL, 'MUHAMAD ZAKARIA', 'MZ', 'assets/dokumen/foto/karyawan/thumb_new_490.jpg', '2020-02-01', '1985-11-24', 'BANYUWANGI', 'Vila Gunung Lestari Blok A6 No.3, Jombang, Ciputat, Tangerang Selatan\r\n', '880955711-627000', 'Jl Mendut 72/74 Banyuwangi, Jawa Timur', '0000-00-00', '0700006967686', 1, 0, 8918002, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (491, NULL, '745640', '745640', NULL, 'GHIRI PRAHASTHA', 'GP', 'assets/dokumen/foto/karyawan/thumb_new_491.jpg', '2020-09-01', '1974-12-28', 'Semarang', 'Premier Park 2 Blok i No 23\r\nCikokol, Tangerang, Banten 15117', '48.657.936.0-402.000', '', '0000-00-00', '0019067793', 1, 0, 8518002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (492, NULL, '7718001', '770026', NULL, 'HARI USMAYADI', 'HU', 'assets/dokumen/foto/karyawan/thumb_new_492.jpg', '2019-04-01', '1977-03-04', 'SEMARANG ', 'Jalan Damai III no 51, Pejaten Timur, Pasar Minggu, Jakarta Selatan', '141006924-617000', '', NULL, '1030004675803', 1, 0, 7418002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (493, NULL, '7218001', '720442', NULL, 'HENDRA GUNAWAN', 'HG', 'assets/dokumen/foto/karyawan/thumb_new_493.jpg', '2020-01-01', '1972-11-28', 'SUKABUMI', '', '092226323404000', '', '1996-11-01', '1330004259610', 1, 0, 7718002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (494, NULL, '8518001', '850139', NULL, 'MARIA ULIARTA PASARIBU, M.M', 'MUP', 'assets/dokumen/foto/karyawan/thumb_new_494.jpg', '2020-01-01', '1985-02-20', 'MEDAN', '', '688868652416000', '', '2009-05-01', '1550001093171', 1, 0, 7218002, 5, 3, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (495, NULL, '7318001', '730112', NULL, 'MOCHAMAD YAZID SAKTIONO, ST', 'MYZ', 'assets/dokumen/foto/karyawan/thumb_new_495.jpg', '2020-01-01', '1973-07-23', 'TUBAN', '', '092250836404000', '', '1996-10-01', '7108204685', 1, 0, 8518002, 3, 2, 3, 12, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (496, NULL, '8618001', '860121', NULL, 'ZIGROSENO ASWIN WARDHANA', 'ZAW', 'assets/dokumen/foto/karyawan/thumb_new_496.jpg', '2020-01-01', '1986-09-22', 'BLORA', '', '792050254626000', '', '2010-02-01', '1330010233633', 1, NULL, 7318002, 3, 2, 1, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (497, NULL, '6318001', '632281', NULL, 'TONI MARKITO', 'TM', '', '2018-09-13', '1963-11-04', 'BANDUNG', '', '', '', '0000-00-00', '', 0, NULL, 8618002, 0, 2, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (498, NULL, '7118001', '710416', NULL, 'AGUS SUSANTO', 'AGS', 'assets/dokumen/foto/karyawan/thumb_new_498.jpg', '2020-01-01', '1971-09-10', 'PEMALANG', '', '092254986404000', '', '1996-11-01', '0028654011', 1, 0, 6318002, 3, 2, 3, 5, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (499, NULL, '8418001', '840182', NULL, 'R. HARYO SENOADJI PRONOMOCHITRO', 'HSP', 'assets/dokumen/foto/karyawan/thumb_new_499.jpg', '2020-01-01', '1984-05-31', 'PEKANBARU', '', '492380001008000', '', '2009-05-01', '1250007979222', 1, 0, 7118002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (500, NULL, '7318001', '730094', NULL, 'FATMI DEWI KANDI ASTUTI', 'FD', 'assets/dokumen/foto/karyawan/thumb_new_500.jpg', '2020-01-01', '1973-01-28', 'PEKALONGAN', '', '092297001404001', '', '1996-10-01', '0003095503', 1, NULL, 8418002, 3, 3, 3, 5, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (501, NULL, '7318001', '730116', NULL, 'ACHIB MAHSHUN', 'AM', 'assets/dokumen/foto/karyawan/thumb_new_501.jpg', '2020-01-01', '1973-08-26', 'SEMARANG', 'VILLA CITRA BT. JATI A-3/18, RT: 02 RW: 011, TEGAL GUNDIL, BOGOR UTARA, KOTA BOGOR', '074363516404000', '', '1996-10-01', '7002679145', 1, 1, 7318002, 3, 2, 3, 12, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (502, NULL, '7318001', '730099', NULL, 'ERIK ZULKARNAEN', 'EZ', 'assets/dokumen/foto/karyawan/thumb_new_502.jpg', '2020-01-01', '1973-04-14', 'TASIKMALAYA', '', '092252063404000', '', '1996-10-01', '1330004074159', 1, 0, 7318002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (503, NULL, '6518001', '650591', NULL, 'SUKAMTO YOGO TAMTOMO', 'SYT', 'assets/dokumen/foto/karyawan/thumb_new_503.jpg', '2020-01-01', '1965-09-30', 'YOGYAKARTA', 'Jl. Abimanyu Raya No.15 - Bumi Indraprasta - Bantarjati - Bogor 16153', '093484368404000', 'JL. ABIMANYU RAYA NO.15 - RT.002/ 015 - BANTARJATI - BOGOR UTARA - KOTA BOGOR - JAWA BARAT', '1987-07-01', '1330002276020', 0, 0, 7318002, 6, 2, 3, 14, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (504, NULL, '8518001', '850142', NULL, 'DIMAS INDRA PERMANA', 'DIP', '', '2018-09-13', '1985-04-14', 'JAKARTA ', '', '', '', '0000-00-00', '', 0, 0, 6518002, 0, 2, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (505, NULL, '6518001', '650559', NULL, 'ROOSMAWAN', 'ROS', 'assets/dokumen/foto/karyawan/thumb_new_505.jpg', '2020-01-01', '1965-03-07', 'BANDUNG ', 'Jl Belimbing V Blok E9/11 RT 3/13 Villa Citra Bantarjati Bogor', '092252089404000', 'Jl Belimbing V Blok E9/11 RT 3/13 Villa Citra Bantarjati Bogor', '1987-07-01', '0003041331', 0, 0, 8518002, 3, 2, 3, 5, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (506, NULL, '6518001', '65220234', NULL, 'BUDI HARYANTO', 'BHY', 'assets/dokumen/foto/karyawan/thumb_new_506.jpg', '2020-01-01', '1965-04-30', 'Semarang ', '', '092250828434000', '', '1987-07-01', '1330098136724', 1, 0, 6518002, 3, 2, 0, 10, 12, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (507, NULL, '8718001', '870010', NULL, 'AFIS HERMAN REZA DEVARA', 'ARD', 'assets/dokumen/foto/karyawan/thumb_new_507.jpg', '2020-01-01', '1987-01-08', '-', '', '', '', '2010-02-01', '', 0, 0, 6518002, 7, 1, 1, 0, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (508, NULL, '6318001', '631024', NULL, 'SUROSO', 'SRS', '', '2018-09-13', '1963-07-03', 'PURWOREJO ', '', '', '', '0000-00-00', '', 0, 0, 8718002, 0, 2, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (509, NULL, '7118001', '710392', NULL, 'NI KETUT SUKANTINI', 'NK', 'assets/dokumen/foto/karyawan/thumb_new_509.jpg', '2020-01-01', '1971-12-15', 'AMPENAN', 'Legenda Wisata blok H5 no 47 zona Rembrandt Cibubur', '077053031403001', '', '1996-09-01', '1290004501405', 1, NULL, 6318002, 2, 3, 3, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (510, NULL, '8518001', '850164', NULL, 'NOVEISZA INSYIAH', 'NI', 'assets/dokumen/foto/karyawan/thumb_new_510.jpg', '2020-01-01', '1985-11-21', 'BANDAR LAMPUNG', '', '347633109424000', '', '2010-06-01', '1300013417459 (Mandiri) a.n Noveisza Insyiah', 1, 0, 7118002, 3, 3, 2, 5, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (511, NULL, '7118001', '715015', NULL, 'JOKO DWI WIJAYANTO', 'JD', 'assets/dokumen/foto/karyawan/thumb_new_511.jpg', '2019-09-01', '1971-03-03', 'MAGELANG', 'Griya Asri 2 Jl Garuda VII No 26-27\r\n', '477529267-413000', '', '0000-00-00', '', 1, 0, 8518002, 3, 2, 3, 0, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (512, NULL, '7518001', '750003', NULL, 'JUYADI', 'JYD', '', '2018-09-13', '1975-03-24', 'PATI', '', '', '', '0000-00-00', '', 0, NULL, 7118002, 0, 2, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (513, NULL, '77001__', '775489', NULL, 'BUDI HASTO', 'BHS ', 'assets/dokumen/foto/karyawan/thumb_new_513.jpg', '2019-09-01', '1977-10-28', 'PURWOREJO', 'Griya Telaga Permai G4 no 3 Cilangkap Tapos Cibinong Depok\r\n', '470508342-119000', 'Jl.Perwira gg Surya Indah Gundaling I Berastagi, Karo, Sumatera Utara', '0000-00-00', '1330011239423', 1, NULL, 7518002, 3, 2, 3, 14, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (514, NULL, '633076', '635702', NULL, 'ALI RUSLI', 'ARS', 'assets/dokumen/foto/karyawan/thumb_new_514.jpg', '2019-04-01', '1963-10-12', 'GRESIK', 'Graha Mutiara Blok E No15 Bekasi', '093484707-423000', '', '0000-00-00', '0540108845118', 0, 0, 77002, 3, 2, 3, 7, 2, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (515, NULL, '7218001', '725437', NULL, 'MA\'SUM PATONI', 'MP', 'assets/dokumen/foto/karyawan/thumb_new_515.jpg', '2019-09-01', '1972-12-26', 'Sumedang', 'Komp Taman Yasmin Sektor VII Jl Bambu Betung 2 No25 Rt/Rw 6/11 Cilendek Barat\r\n', '477529358-421000', '', NULL, '1300013030971', 1, 0, 6318002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (516, NULL, '825569', '826091', NULL, 'M. ANNAS NUR PRATOMO', 'MNP', 'assets/dokumen/foto/karyawan/thumb_new_516.jpg', '2020-02-01', '1982-08-11', 'JAKARTA', 'Jl Anggrek IV/14 Komplek Larangan Indah Ciledug Tangerang\r\n', '477529218-402000', '', '0000-00-00', '5270596195', 1, 0, 7218002, 3, 2, 3, 3, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (517, NULL, '641435', '645249', NULL, 'DWI SUKAMTO', 'DS', 'assets/dokumen/foto/karyawan/thumb_new_517.jpg', '2021-06-01', '1964-03-11', 'JAKARTA ', 'Perum. Bumi Bosowa Indah Blok.N/15  Jln. Raya Sultan Alauddin  Gunungsari Rappocini  Makassar  Sulawesi selatan 90221', '14095076805000', 'jl.Faisal makassar', '0000-00-00', '0140745238', 0, 0, 8218002, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (518, NULL, '7318001', '730028', NULL, 'MELJANUS ALEXIUS JOKTETIMERA ', 'MAJ', 'assets/dokumen/foto/karyawan/thumb_new_518.jpg', '2019-08-01', '1973-06-22', 'AMBON', 'Jl Petra No6 RT 002/05 Kelurahan Amantelu Karang Panjang Ambon Kecamalan Sirimau Kotamadva Ambon\r\n', '077381788-941000', '', '0000-00-00', '1520000306809', 1, NULL, 6418002, 6, 2, 3, 10, 4, 0, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (519, NULL, '6618001', '660317', NULL, 'RIJANA MAULUDDIN', 'RM', 'assets/dokumen/foto/karyawan/thumb_new_519.jpg', '2022-08-01', '1966-07-07', 'Jakarta', 'TIBAN INDAH PERMAI BLK H1-35 SEKUPANG BATAM 29426\r\n', '078030327-508000', '', '0000-00-00', '7006500182', 0, 0, 7318002, 3, 2, 3, 56, 2, 2, '2019-08-31 08:39:31', 22);
INSERT INTO `m_karyawan` VALUES (520, NULL, '6418001', '640994', NULL, 'ANAK AGUNG GDE AGUNG ATMADIPA', 'AAA', 'assets/dokumen/foto/karyawan/thumb_new_520.jpg', '2019-08-01', '1964-10-30', 'GIANYAR', 'JLPULAU NUSA PENIDA 20 DENPASAR 80232\r\n', '097958235903-000', '', '0000-00-00', '0055156170', 0, 0, 6618002, 2, 2, 3, 5, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (521, NULL, '80001__', '805038', NULL, 'NUGROHO WIBISONO', 'NW', 'assets/dokumen/foto/karyawan/thumb_new_521.jpg', '2019-09-01', '1980-12-27', 'Madiun ', 'Perumahan Taman Cimanggu, Jl. Kaca Piring 3, Cluster Cendrawasih no21 A Bogor', '242712727-621000', '', '2009-12-01', '', 1, 0, 6418002, 3, 2, 3, 0, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (522, NULL, '8618001', '865399', NULL, 'RADITYA WULANDARI', 'RW', 'assets/dokumen/foto/karyawan/thumb_new_522.jpg', '2019-08-01', '1986-10-14', 'Sorong', 'Jl. Cidodol Raya Komp Loka Permai No. 12, Kebayoran Lama, Jakarta Selatan 12220\r\n', '59.416.582.1-013.000', 'Jl. Cidodol Raya Komp Loka Permai, Kebayoran Lama, Jakarta Selatan 12220', '0000-00-00', '1010006163925', 0, 0, 80002, 3, 3, 3, 10, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (523, NULL, '826099', '826099', NULL, 'SANTI FITRI AGUSTINI SAMBAS', 'SAS', 'assets/dokumen/foto/karyawan/thumb_new_523.jpg', '2020-09-01', '1982-08-01', 'Bandung', 'Cilebut Residence Blok D2 No. 2', '458247848442000', '', '0000-00-00', '1220005960607', 1, 0, 8618002, 3, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (524, NULL, '8818001', '885896', NULL, 'SALWA VERUCHA', 'SV', 'assets/dokumen/foto/karyawan/thumb_new_524.jpg', '2019-05-01', '1988-04-30', 'JAKARTA ', 'Jl. Matraman Dalam II No. 20, RT 017 / RW 008, Pegangsaan, Menteng, Jakarta Pusat\r\n', '671560142-071000', 'Jl. Matraman Dalam II No. 20, RT 017 / RW 008, Pegangsaan, Menteng, Jakarta Pusat', '2019-04-01', '1220010070822', 1, 0, 8218002, 3, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (525, NULL, '785842', '785842', NULL, 'MEYRI IRENE SASSUNG', 'MIS', 'assets/dokumen/foto/karyawan/thumb_new_525.jpg', '2020-09-01', '1978-05-17', 'Pekanbaru', 'Jl Otista Raya No.46 RT.01 RW.03 Bidara Cina, Jatinegara, Jakarta Timur 13330', '192482180002000', 'Jl Otista Raya No.46 RT.01 RW.03 Bidara Cina, Jatinegara, Jakarta Timur', '0000-00-00', '1220000517782', 1, 0, 8818002, 6, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (526, NULL, '755713', '755713', NULL, 'ISNA DEWI', 'ID', 'assets/dokumen/foto/karyawan/thumb_new_526.jpg', '2020-09-01', '1975-08-29', 'Jakarta', 'Perum Pejuang Jaya Blok A No. 270, Pejuang - Medan Satria, Bekasi', '47.752.911.9-034.000', 'Perum Pejuang Jaya Blok A No. 270, Pejuang - Medan Satria, Bekasi', '0000-00-00', '1240004899853', 1, 0, 7818002, 3, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (527, NULL, '7818001', '785517', NULL, 'BUDI APRIANTO', 'BA', '', '2018-09-13', '1978-04-05', '--', '', '', '', '0000-00-00', '', 0, 0, 7518002, 0, 2, 0, 0, 11, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (528, NULL, '705466', '705466', NULL, 'SUDARMAJI', 'SUD', 'assets/dokumen/foto/karyawan/thumb_new_528.jpg', '2020-09-01', '1970-03-21', 'KARAWANG', 'JlRaya Wates Pancawati No 34 RT 03/RW 02 Klari, Karawang 41371\r\n', '470508300433000', '', '0000-00-00', 'rek BNI 0153110281 a.n Sudarmaji', 1, 0, 7818002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (529, NULL, '765725', '765725', NULL, 'JUAN NOOR', 'JN', 'assets/dokumen/foto/karyawan/thumb_new_529.jpg', '2020-09-01', '1976-05-03', 'JAKARTA', 'Jl Palmerah Barat 5 no 23 RT 14/09 Palmerah Jakarta Barat\r\n', '477529465005000', '', '0000-00-00', '0218825415', 1, 0, 7018002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (530, NULL, '856031', '856031', NULL, 'HENDRY MUNAJAT SUBAGDJA', 'HMS', 'assets/dokumen/foto/karyawan/thumb_new_530.jpg', '2020-09-01', '1985-05-07', 'Manado', 'Jl. Situsari VII No.12 Cijagra Buahbatu\r\nBandung - Jawa Barat', '498315324424000', 'JL SITUSARI VII NO.12 BANDUNG', '0000-00-00', '0077006538', 1, NULL, 7618002, 3, 2, 3, 12, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (531, NULL, '815532', '816012', NULL, 'USEP SURYANA', 'US', 'assets/dokumen/foto/karyawan/thumb_new_531.jpg', '2020-02-01', '1981-09-20', 'Bandung', 'Villa Mutiara Bogor Blok I2 No.29, RT00/RW012 Kel. Mekarwangi Kec. Tanahsareal, Bogor', '572285815-404000', 'Villa Mutiara Bogor Blok I2 No.29, RT00/RW012 Kel. Mekarwangi Kec. Tanahsareal, Bogor', '2014-07-01', '0701439421', 1, 0, 8518002, 3, 2, 3, 3, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (532, NULL, '795908', '795908', NULL, 'PRAWHERTI NUGROHO', 'PN', 'assets/dokumen/foto/karyawan/thumb_new_532.jpg', '2020-09-01', '1979-04-28', 'TUNTANG', 'Perum Pesona Cilebut 1 Blok i-3 no,14 cilebut barat kec.sukaraja kab.bogor jawa barat\r\n', '594052755505000', '', '0000-00-00', '0195715313', 1, NULL, 8118002, 3, 3, 3, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (533, NULL, '836039', '836039', NULL, 'ADE BUDI ASTUTI', 'ABA', 'assets/dokumen/foto/karyawan/thumb_new_533.jpg', '2020-09-01', '1983-05-15', 'Jakarta', 'Jl. Salak raya No. 94 Perumnas I Tangerang', '47.050.807.8-402.000', 'Jl. Salak Raya No. 94 Perumnas I Tangerang', '0000-00-00', '0018621258', 1, NULL, 7918002, 3, 3, 2, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (534, NULL, '8818001', '885895', NULL, 'RIZKI RISKIYANTO', 'RR', 'assets/dokumen/foto/karyawan/thumb_new_534.jpg', '2019-05-01', '0000-00-00', 'Bogor', 'Jl. Setu Sela No. 24 RT001/RW 002, Kel. Karadenan, Kec. Cibinong, Kab. Bogor\r\n', '705182079-404000', 'Jl. Setu Sela No. 24, RT 001 / RW 002, Kel. Karadenan, Kec. Cibinong, Kab. Bogor  ', '2019-04-01', '1330030030001', 1, NULL, 8318002, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (535, NULL, '877103', '877103', NULL, 'RIO PUTRA YULIARTO', 'RPY', 'assets/dokumen/foto/karyawan/thumb_new_535.jpg', '2020-09-01', '1987-07-25', 'Tangerang', 'Jl. Gama 1 No. 34 Cimone Permai, Tangerang', '34.443.672.0-402.000', 'Jl. Beta IX/12 RT.003 RW.008\r\nCimone - Karawaci\r\nTangerang', '0000-00-00', '1550000192503', 1, 0, 8818002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (536, NULL, '715552', '715552', NULL, 'YUSTAV ARIEF', 'YA', 'assets/dokumen/foto/karyawan/thumb_new_536.jpg', '2020-09-01', '1971-06-06', 'Malang', 'Perum Bumi Anggrek S125 RT05/RW07 Karang Satria, Tambun Utara, Kabupaten Bekasi', '47.051.305.2-321.000', 'Jl. Jendral Sudirman No. 100 Ganjar Agung 14/2 Metro, Lampung', '0000-00-00', '0131615267', 1, NULL, 8718002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (537, NULL, '816021', '816021', NULL, 'WINA WELLYANNA', 'WW', 'assets/dokumen/foto/karyawan/thumb_new_537.jpg', '2020-09-01', '0000-00-00', 'Sumedang', '', '684433386403000', '', '0000-00-00', '1330018475145', 1, NULL, 7118002, 3, 3, 2, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (538, NULL, '816020', '816020', NULL, 'ADRIK MAHDIANA UTAMA', 'AMU', 'assets/dokumen/foto/karyawan/thumb_new_538.jpg', '2020-09-01', '1981-09-03', 'Ponorogo', 'Kedung Badak Baru, JL. Karya No. 29, RT.11/RW.06, Bogor', '97.459.868.2.204.000', 'Kedung Badak Baru, Jalan Pekerti No.05 RT.09/RW.06, Kel. Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat', '0000-00-00', '261167676', 1, NULL, 8118002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (539, NULL, '866109', '866109', NULL, 'SAYU KETUT PITRI KURNIATI', 'SPK', 'assets/dokumen/foto/karyawan/thumb_new_539.jpg', '2020-09-01', '1986-06-10', 'Bandar Lampung', 'Jl. Kamboja RT007/RW003, Cijantung, Pasar Rebo, Jakarta Timur, DKI Jakarta ', '26.036.075.5-412.000', 'KP. Pancoran Mas RT002/RW001, Pancoran Mas, Depok', '0000-00-00', '0186858091', 1, 0, 8118002, 2, 3, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (540, NULL, '6418001', '642334', NULL, 'NAHROWI', 'NRW', '', '2018-09-13', '1964-03-20', 'BOGOR ', '', '', '', '0000-00-00', '', 0, NULL, 8618002, 0, 0, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (541, NULL, '695427', '695427', NULL, 'YUSUF', 'YSF', 'assets/dokumen/foto/karyawan/thumb_new_541.jpg', '2020-09-01', '1969-03-09', 'Jakarta', 'Perumahan Pesona Cilebut 2 Blok FB 4 No. 1, RT 011/RW015, Kab. Cilebut Barat, Kec. Sukaraja, Bogor Jawa Barat 16710', '477529283002000', '', '0000-00-00', '10174146', 1, 0, 6418002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (542, NULL, '7818001', '785516', NULL, 'RYAN MAHMUR MAYA', 'RMM', 'assets/dokumen/foto/karyawan/thumb_new_542.jpg', '2019-08-01', '1978-07-14', 'JAKARTA ', 'Jl. Karet Hijau No. 9B Beji Timur Depok\r\n', '477529135-042000', '', '2000-05-01', '10174317', 1, NULL, 6918002, 3, 3, 3, 14, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (543, NULL, '896520', '896520', NULL, 'SANTY SURYAHATY', 'SS', 'assets/dokumen/foto/karyawan/thumb_new_543.jpg', '2020-09-01', '1989-08-02', 'Jakarta', 'Pekayon RT009/RW008 Kel. Pekayon, Kec. Pasar Rebo, Jakarta Timur', '67.009.767.4-009.000', 'Pekayon RT009/RW008 Kel. Pekayon, Kec. Pasar Rebo, Jakarta Timur', '2015-04-07', '003548603541', 1, NULL, 7818002, 3, 3, 2, 18, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (544, NULL, '8918001', '890026', NULL, 'ANGGA RISNANDO', 'AR', 'assets/dokumen/foto/karyawan/thumb_new_544.jpg', '2020-01-01', '1989-06-08', 'METRO', '', '363787094321000', '', '2013-02-01', '1310007288618', 1, 0, 8918002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (545, NULL, '9318001', '930221', NULL, 'RAHYANDITYA ILHAM', 'RI', 'assets/dokumen/foto/karyawan/thumb_new_545.jpg', '2020-01-01', '1993-06-05', 'BANDUNG ', '', '735452542423000', '', '2017-04-01', '347158859', 1, 1, 8918002, 3, 2, 3, 10, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (546, NULL, '9418001', '940030', NULL, 'LUTFI JAMIL SETIAWAN', 'LJS', 'assets/dokumen/foto/karyawan/thumb_new_546.jpg', '2020-01-01', '1994-09-22', 'JAKARTA', 'Taman Yasmin Sektor 1 jl. Seruni IV no.10 RT.005/RW.014 Cilendek Barat Bogor Barat Jawa Barat Indonesia', '742683568422000', 'Jl. Bojong Raya no.106 RT.04/RW.05 Caringin Bandung Kulon Jawa Barat 40212 Indonesia', '2016-04-01', '1640000386195', 1, NULL, 9318002, 3, 2, 3, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (547, NULL, '905439', '906622', NULL, 'WIDY SULISTIANTO', 'WS', 'assets/dokumen/foto/karyawan/thumb_new_547.jpg', '2020-02-01', '1990-04-05', 'Tegal', 'Graha Selaras 3 Blok A 5, Jalan Rawa Kalong, Gunung Sindur, Bogor', '46.211.911.6-542.000', 'SAMBISARI, PURWOMARTANI, KALASAN, SLEMAN, YOGYAKARTA', '2015-08-04', '0309569830', 1, 0, 9418002, 3, 2, 3, 5, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (548, NULL, '705467', '705467', NULL, 'ULLY AMINEDEN SIREGAR', 'UAS', 'assets/dokumen/foto/karyawan/thumb_new_548.jpg', '2020-09-01', '1970-05-02', 'PADANG SIDEMPUAN', 'Jl Sawo III No 12 Sahardjo Manggarai selatan\r\n', '684433386403000', '', '0000-00-00', '0174311213', 1, 0, 9018002, 6, 2, 0, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (549, NULL, '8918001', '896195', NULL, 'ERWIN PRASETYO', 'EP', 'assets/dokumen/foto/karyawan/thumb_new_549.jpg', '2019-05-01', '1989-12-22', 'Ujung Pandang', 'Komplek Madit Hubad Cijantung Jl. Radar 1 No.10 RT001/RW004, Kel. Kalisari, Kec. Pasar Rebo, Jakarta Timur\r\n', '755610581-009000', 'Komplek Madit Hubad Cijantung Jl. Radar 1 No.10 RT001/RW004, Kel. Kalisari, Kec. Pasar Rebo, Jakarta Timur', '2019-04-01', '1210016221289', 1, 0, 7018002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (550, NULL, '8518001', '855852', NULL, 'YOCKY ANDRIYANTO', 'YA', 'assets/dokumen/foto/karyawan/thumb_new_550.jpg', '2019-05-01', '1985-01-01', 'BANDUNG ', 'Jl Pelesiran no 78/56\r\n', '981855752-429000', 'Jl Mars Utara II no 31 RT 001 RW 002 Manjahlega Rancasari Bandung', '2019-04-01', '0700009815874', 1, 0, 8918002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (551, NULL, '835642', '836027', NULL, 'KHOIRUL FATA', 'KF', 'assets/dokumen/foto/karyawan/thumb_new_551.jpg', '2020-02-01', '1983-05-08', 'Kediri', 'Pesona Permata Insani Blok B6 Sukahati Cibinong Bogor\r\n', '58.626.035.8-432.000', 'Taman Bumyagara Blok F5 No. 17, Mustika Jaya, Bekasi Timur 17158', '2015-04-06', '0316207690', 1, NULL, 8518002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (552, NULL, '9018001', '906314', NULL, 'RISMALIA', 'RSM', 'assets/dokumen/foto/karyawan/thumb_new_552.jpg', '2019-05-01', '1990-10-06', 'JAKARTA ', 'Jalan Susilo Komplek PU Pasar Jumat Blok II No. 406 RT 007 / RW 010, Kelurahan Pondok Pinang, Kec. Kebayoran Lama, Jakarta Selatan.\r\n', '451938617-015000', '', '2019-04-01', '0573937427', 1, 0, 8318002, 3, 3, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (553, NULL, '9318001', '935562', NULL, 'ULFATUNNISA AMALIA NUGRAHA', 'UAN', 'assets/dokumen/foto/karyawan/thumb_new_553.jpg', '2019-05-01', '1993-01-20', 'BEKASI ', 'AQILLA RESIDENCE 2 NOMOR 2 JL. BAMBU KUNING IX KEL. SEPANJANG JAYA KEC. RAWA LUMBU 17114\r\n', '727272296-407000', '', '2019-04-01', '0469209443', 1, NULL, 9018002, 3, 3, 3, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (554, NULL, '877102', '877102', NULL, 'AHADIYAH NOVI YANTI', 'ANY', 'assets/dokumen/foto/karyawan/thumb_new_554.jpg', '2020-09-01', '1987-11-15', 'Jakarta', 'Kristal Garden Residence Blok C3 No.15\r\nKel. Ciriung Kec. Cibinong Kab.Bogor', '981855760436000', '', '0000-00-00', '0700007855427 (Mandiri) a.n Ahadiyah Noviyanti', 1, NULL, 9318002, 3, 3, 3, 0, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (555, NULL, '8518001', '855853', NULL, 'SOCFIN BUTAR-BUTAR', 'SB', 'assets/dokumen/foto/karyawan/thumb_new_555.jpg', '2019-05-01', '1985-04-14', 'Medan ', 'Kalibata City Apartment, Tower Cendana, C/02/BF, Kel. Kalibata, Kec. Pancoran, Jakarta Selatan\r\n', '78.989.895.4-124.000', 'Jl. Parwitayasa LK V No.5, Tanjung Gusta, Medan Helvetia, Kotamadya Medan 20125', '2019-04-01', '1310004360600', 1, NULL, 8718002, 6, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (556, NULL, '9118001', '910084', NULL, 'IRMA NURLITA DEWI', 'IND', 'assets/dokumen/foto/karyawan/thumb_new_556.jpg', '2020-01-01', '1991-09-18', 'Ciamis', '', '71.614.910.9-404.000', '', '2015-01-01', '1310006890620', 1, NULL, 8518002, 3, 3, 1, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (557, NULL, '805966', '805966', NULL, 'YUDI WAHYUDI', 'YW', 'assets/dokumen/foto/karyawan/thumb_new_557.jpg', '2020-09-01', '1980-09-06', 'Ciamis', 'Cilebut Residence Cluster Adhenium G2 No. 1 \r\nCilebut Barat - Sukaraja\r\nKab. Bogor\r\n', '471081174442000', 'Cilebut Residence Cluster Adhenium G2 No. 1 \r\nCilebut Barat - Sukaraja\r\nKab. Bogor', '0000-00-00', '133358668', 1, 0, 9118002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (558, NULL, '9218001', '920009', NULL, 'DIMAS BUDIARTO KUSUMA', 'DBK', 'assets/dokumen/foto/karyawan/thumb_new_558.jpg', '2020-10-01', '1992-04-18', 'TEGAL', 'JL. HUSNI THAMRIN NO.24, RT:005 RW:003, KEL: BREBES, KEC: BREBES, KAB: BREBES\r\n', '705717882501000', '', '0000-00-00', '0175152942', 0, 0, 8018002, 3, 2, 3, 5, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (559, NULL, '9018001', '900005', NULL, 'REZKI ERDIAN', 'RE', 'assets/dokumen/foto/karyawan/thumb_new_559.jpg', '2020-01-01', '1990-06-01', 'RENGAT', '', '542459193213000', '', '2013-02-01', '1310006105821', 0, NULL, 9218002, 3, 2, 3, 10, 4, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (560, NULL, '8918001', '890042', NULL, 'LOLO ARDY BOANGMANALU', 'LAB', 'assets/dokumen/foto/karyawan/thumb_new_560.jpg', '2020-01-01', '1989-03-11', 'SIDIKALANG', 'Cibubur Country Pine Forest 3 No.7, Gunung Putri, Kab. Bogor', '980756183117000', 'Jl. Runding No. 34 Sidikalang Kab. Dairi Sumatra Utara', '2013-12-01', '1310005404530', 1, 0, 9018002, 6, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (561, NULL, '9018001', '900101', NULL, 'TAUFIK HIDAYAT PRIHANDONO', 'THP', 'assets/dokumen/foto/karyawan/thumb_new_561.jpg', '2020-01-01', '1990-12-30', 'Ngawi', 'Graha Mampang Mas Blok B3/02, Mampang, Pancoran Mas, Depok', '64.332.243.1-646.000', 'DSN. KALIWOWO RT 006 RW 004, KEDUNGGALAR, KAB. NGAWI, JAWA TIMUR, 63254', '2015-10-01', '1300013066272', 1, NULL, 8918002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (562, NULL, '9018001', '900070', NULL, 'ALDIANO FEBRIAN DWI ESKA MUTASIANTO', 'AEM', 'assets/dokumen/foto/karyawan/thumb_new_562.jpg', '2020-01-01', '1990-02-03', 'KLATEN', '', '660798208525000', '', '2015-01-01', '0700006774637', 1, 0, 9018002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (563, NULL, '9118001', '910147', NULL, 'ANDRI PRANATA KUSUMA', 'APK', 'assets/dokumen/foto/karyawan/thumb_new_563.jpg', '2020-01-01', '1991-06-15', 'JAKARTA', 'Jl. Masjid RT 12/01 No.1a Cipinang Melayu Jakarta Timur 13620', '548635150005000', 'Jl. Masjid RT 12/01 No.1a Cipinang Melayu Jakarta Timur 13620', '2015-10-01', '0060006421576', 1, 0, 9018002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (564, NULL, '8918001', '890051', NULL, 'IQBAL ADHIYOGO', 'IA', '', '2020-01-01', '1989-05-24', 'MADIUN', '', '441765344411000', '', '2014-04-01', '1005479847', 0, 0, 9118002, 3, 2, 3, 16, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (565, NULL, '9218001', '920166', NULL, 'DENI ADE MUNANDA', 'DAM', 'assets/dokumen/foto/karyawan/thumb_new_565.jpg', '2020-01-01', '1992-04-29', 'SEKAYU', 'Jl. Merdeka no.63 RT.001 RW.001 Kel. Serasan Jaya Kec. Sekayu', '734365422314000', 'JL. Merdeka 63 RT.001 RW.001 Kel. Serasan Jaya Kec. Sekayu', '2016-04-01', '0277696908', 1, NULL, 8918002, 3, 2, 3, 5, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (566, NULL, '8818001', '880058', NULL, 'MULYA ERIK HIDAYATULLOH', 'MEH', 'assets/dokumen/foto/karyawan/thumb_new_566.jpg', '2020-01-01', '1988-01-20', 'TEGAL', '', '450883863501000', '', '2013-02-01', '1310004944502', 1, 0, 9218002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (567, NULL, '9318001', '930060', NULL, 'MUHAMMAD PURWA MANGGALA', 'MPM', '', '2018-09-13', '1993-04-08', 'PALEMBANG ', '', '', '', '0000-00-00', '', 0, 0, 8818002, 0, 0, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (568, NULL, '9218001', '920186', NULL, 'HALIM FUTU WIJAYA', 'HFW', 'assets/dokumen/foto/karyawan/thumb_new_568.jpg', '2020-01-01', '1992-07-30', 'YOGYAKARTA', 'Perumahan Cibubur Country Cluster Grassland GL 9 no 52 RT06/RW02 ', '741497150541000', 'Terban GKV/390 Yogyakarta RT 13 RW 003', '2016-04-01', '1370019997218', 1, NULL, 9318002, 3, 2, 3, 10, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (569, NULL, '6418001', '642338', NULL, 'ROKHMAN', 'RMN', 'assets/dokumen/foto/karyawan/thumb_new_569.jpg', '2020-01-01', '1964-11-14', 'BANDUNG', 'Kp. Tegal RT. 25 RW. 7 Desa Kembang Kuning, Kecamatan Klapanunggal, Kabupaten Bogor', '83.964.163.6-436.000', 'Kp. Tegal RT. 25 RW. 7 Desa Kembang Kuning, Kecamatan Klapanunggal, Kabupaten Bogor', '1995-01-01', '7007274108', 0, 0, 9218002, 3, 2, 3, 12, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (570, NULL, '6418001', '642337', NULL, 'SAHONO', 'SHN', 'assets/dokumen/foto/karyawan/thumb_new_570.jpg', '2018-09-13', '1964-04-20', 'Purworejo', 'Kamp Kembang Kuning RT14/RW04', '09.348.418.6-423.000', 'JL Japati No.1 Sadang Serang, Coblong, Kota Bandung, Jawa Barat', '0000-00-00', '9000030907548', 0, NULL, 6418002, 3, 2, 3, 10, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (571, NULL, '6418001', '642336', NULL, 'SLAMET MUJIONO', 'SM', '', '2018-09-13', '1964-05-01', 'Bandung', 'Kp. Tegal RT021/RW006, Kel/Desa Kembang Kuning, Kec. Klapa Nunggal, Kab. Bogor', '093484590423000', 'Jl. Japati No. 1 Kel. Sedang Serang, Kec. Coblong\r\nBandung, Jawa Barat', '0000-00-00', '1330014138366', 0, NULL, 6418002, 3, 2, 3, 10, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (572, NULL, '6718001', '670497', NULL, 'SUMANTO YUDIONO', 'SY', 'assets/dokumen/foto/karyawan/thumb_new_572.jpg', '2020-01-01', '1967-02-09', 'Sleman', 'Kp. Kembang Kuning RT011/RW004  Kel. Kembang Kuning, Kec. Klapanunggal, Kab. Bogor', '09.348.423.6-423.000', 'Jl. Japati No.1 Kel. Sadang Serang, Kec. Coblong, Bandung, Jawa Barat', '1995-01-01', '1290006960773', 0, 0, 6418002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (573, NULL, '6318001', '630356', NULL, 'SOLIHIN', 'SOL', '', '2018-09-13', '1963-07-07', 'BOGOR ', '', '', '', '0000-00-00', '', 0, 0, 6718002, 0, 0, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (574, NULL, '6618001', '660644', NULL, 'SOMA NOVIYANTI', 'SN', 'assets/dokumen/foto/karyawan/thumb_new_574.jpg', '2020-01-01', '1966-11-30', 'MEDAN ', 'Jl. Kamper Blok M-2 Perumahan Budi Agung, Bogor', '09.348.467.3-423.000', 'Jl. Kamper Blok M-2 Perumahan Budi Agung, Bogor', '1995-01-01', '1330001105956', 0, 0, 6318002, 3, 3, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (575, NULL, '865554', '866092', NULL, 'AGUNG PRAYOGO', 'AP', 'assets/dokumen/foto/karyawan/thumb_new_575.jpg', '2020-02-01', '1986-07-09', 'JAKARTA', 'Jl Pasir No 44 RT 008 RW 001 Ciganjur Jagakarsa Jakarta Selatan 12630\r\n', '789913456-017000', '', '2015-06-12', '1310004366649 (Mandiri) a.n Agung Prayogo', 1, 0, 6618002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (576, NULL, '845642', '846097', NULL, 'MUHAMAD MULYADI', 'MM', 'assets/dokumen/foto/karyawan/thumb_new_576.jpg', '2020-02-01', '1984-12-23', 'KLATEN', 'Komplek MNA Blok A/14 RT 001 RW 010 Pegadungan Kalideres Jakarta Barat\r\n', '594052599085000', 'Komplek MNA Blok A/14 RT/RW 001/010, Pegadungan, Kalideres, Jakbar', '2015-07-15', '1180007579286', 1, 0, 8618002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (577, NULL, '7218001', '725574', NULL, 'UNDANG USMUDIN', 'UU', 'assets/dokumen/foto/karyawan/thumb_new_577.jpg', '2019-05-01', '1972-04-14', 'TASIKMALAYA ', 'Permata Klapanunggal Blok B7 No.11, RT 007/RW 007, Klapanunggal, Bogor\r\n', '789899002-436000', 'Permata Klapanunggal Blok B7 No.11, RT 007/RW 007, Klapanunggal, Bogor 16820', '2019-04-01', '0010727240', 1, 0, 8418002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (578, NULL, '866107', '866107', NULL, 'REZA DYNASTI PRAMANA ', 'RP', 'assets/dokumen/foto/karyawan/thumb_new_578.jpg', '2020-09-01', '1986-04-09', 'Makassar', 'Perum Griya Puspa RT001/RW005, Kelurahan Seruni, Kecamatan Majasari, Pandeglang', '789913548445000', 'Sukabirus STT Telkom No. 1 RT001/RW016, Citereup, Dayeuhkolot, Bandung', '0000-00-00', '1310004311611', 1, 0, 7218002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (579, NULL, '805542', '805959', NULL, 'ALFIN', 'ALF', 'assets/dokumen/foto/karyawan/thumb_new_579.jpg', '2020-02-01', '1980-12-27', 'LAWE SIGALA-GALA', 'Cimanggu Wates No.69 RT.005/009 Kedungjaya Tanah Sareal - Bogor\r\n', '369777552-121000', 'Jl.Asoka I Gg.Gahmi No.24E Asamkumbang, Medan Selayang - Medan', '2012-02-01', '1330016961427', 1, 0, 8618002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (580, NULL, '865555', '866087', NULL, 'HARMAWAN SAPUTRO', 'HS', 'assets/dokumen/foto/karyawan/thumb_new_580.jpg', '2020-02-01', '1986-01-10', 'MALANG', 'Kiara Residence Blok C18 no 10 Kel Curug, Kecamatan Bogor Barat, Kota Bogor', '789913530-623000', 'Jl Larwo G8 Kelurahan Sukun, Kecamatan Sukun, Kota Malang', '2015-06-30', '1310004366615', 1, 0, 8018002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (581, NULL, '865396', '866088', NULL, 'AN NANDA', 'AN', 'assets/dokumen/foto/karyawan/thumb_new_581.jpg', '2020-02-01', '1986-04-18', 'Lhokseumawe', 'Perum. Graha Bukit Pesona Blok D/6 RT/RW 001/002 Kel. Cibadak, Kec. Tanah Sareal, Bogor', '789913472-102000', 'Jl. Balikpapan No.5 Batuphat Barat Muara Satu, Lhokseumawe', '2009-09-22', '1310004359123', 1, 0, 8618002, 3, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (582, NULL, '856029', '856029', NULL, 'GUSFRIAN IMBAR', 'GI', 'assets/dokumen/foto/karyawan/thumb_new_582.jpg', '2020-09-01', '1985-08-23', 'Ujung Pandang', 'Perum Bukit Manggala 1 Blok B No.12 A ', '799718077445000', 'Sukabirus Rt 1 Rw 13 \r\nCitereup, Dayeuhkolot \r\nBandung-40257', '0000-00-00', '1310004066397', 1, 1, 8618002, 6, 2, 3, 14, 5, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (583, NULL, '855422', '856015', NULL, 'BAGUS PUTRANTO ', 'BP', 'assets/dokumen/foto/karyawan/thumb_new_583.jpg', '2020-02-01', '1985-08-19', 'Gresik', 'PERUM BUDI AGUNG JL. GAHARA ATAS BLOK C NO.19', '594052813-612000', '', '2011-12-23', 'Mandiri a.n Bagus Putranto 9000003900140', 1, 0, 8518002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (584, NULL, '805965', '805965', NULL, 'NUR YUSUF', 'NY', 'assets/dokumen/foto/karyawan/thumb_new_584.jpg', '2020-09-01', '1980-12-02', 'Jakarta', 'Perum Pesona Cilebut 2 Blok FB 2 No.3', '789913613013000', 'Jl. Kebon Mangga 4 RT13/RW02 Kebayoran Lama, Jakarta Selatan', '0000-00-00', '0186006453', 1, NULL, 8518002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (585, NULL, '9118001', '916191', NULL, 'SINDU WIJAYA', 'SW', 'assets/dokumen/foto/karyawan/thumb_new_585.jpg', '2019-05-01', '1991-01-21', 'BLORA', 'Jl. Gatot Subroto RT001/RW003 Kauman Blora', '353536758-514000', 'Jl. Tentara Pelajar 4 No.5 Blora', '2019-04-01', '0311246034', 1, 0, 8018002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (586, NULL, '765726', '765726', NULL, 'RENALDA IFWAN', 'RI', 'assets/dokumen/foto/karyawan/thumb_new_586.jpg', '2020-09-01', '1976-08-12', 'Bandung', 'Jl. Mesjid Al Munir RT12/RW03, Kel. Makasar Kec. Makasar, Jakarta Timur', '47.050.809.4-005.000', 'Jl. Mesjid Al Munir RT12/RW03, Kel. Makasar Kec. Makasar, Jakarta Timur', '0000-00-00', '3108479142', 1, 0, 9118002, 3, 2, 3, 3, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (587, NULL, '725638', '725638', NULL, 'RONNY RONDELLA', 'RR', 'assets/dokumen/foto/karyawan/thumb_new_587.jpg', '2020-09-01', '1972-05-29', 'Jakarta', 'Rasamala 18 RT006/RW013 Utan Kayu Selatan, Jakarta Timur', '55.655.746.0-001.000', 'Rasamala 18 RT 013 Rw 006  Utan Kayu Selatan', '0000-00-00', '1230005705423', 1, 0, 7618002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (588, NULL, '865398', '866089', NULL, 'ELVIRA MARIANI MANUKOA', 'EMM', 'assets/dokumen/foto/karyawan/thumb_new_588.jpg', '2020-02-01', '1986-06-07', 'KUPANG', 'Perumahan Bumi Cimanggis Indah Blok P2 No 9A RT/RW 004/026 Kel Sukatani Kec Tapos \r\n', '789913423-445000', 'Sukabirus Artha Asih 66 RT/RW 004/015 Citeureup Dayeuh Kolot Bandung', '2009-04-12', '1310004314607', 1, 0, 7218002, 6, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (589, NULL, '815535', '816013', NULL, 'DONNY ADRIAN', 'DA', 'assets/dokumen/foto/karyawan/thumb_new_589.jpg', '2020-02-01', '1981-12-27', 'Batam', 'Jl. Gunung Bromo No. 20, Baloi Indah, Batam\r\n', '470513094-215000', '', '0000-00-00', 'Mandiri a.n Donny Adrian 1330013400981 ', 1, 0, 8618002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (590, NULL, '8318001', '835537', NULL, 'TAUFIK B. UNTUNG SUTOPO', 'TUS', 'assets/dokumen/foto/karyawan/thumb_new_590.jpg', '2019-08-01', '1983-06-03', 'BREBES', 'Perumahan Cilebut Residence, Cluster Adhenium Blok D2/51, Kelurahan Cilebut Barat, Kecamatan Sukaraja, Kabupaten Bogor\r\n', '477529408-501000', 'Jl. Raharjo RT001 RW005, Larangan-Larangan Kabupaten Brebes', NULL, '1210004414219', 1, 0, 8118002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (591, NULL, '785741', '785741', NULL, 'DODDY IRAWAN', 'DI', 'assets/dokumen/foto/karyawan/thumb_new_591.jpg', '2019-05-01', '1978-03-22', 'BOGOR ', 'KP. Ciawi Girang RT 004 / RW 002, Desa Ciawi,  Kec. Ciawi, Kab. Bogor\r\n', '573752995-434000', 'Kp. Ciawi Girang Bogor, Kab. Bogor, Jawa Barat', '2019-04-01', '1330011415031', 1, 0, 8318002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (592, NULL, '685387', '685387', NULL, 'JUANG PANE', 'JP', 'assets/dokumen/foto/karyawan/thumb_new_592.jpg', '2020-09-01', '1968-05-13', 'Padang Sidempuan', 'Jl. Setia 1S  Rt.07 Rw.08 Jaticempaka, Pondok Gede Bekasi', '47.752.946.5-009.000', 'Jl. Raya Bogor, Ps. Rebo  Jakarta Timur', '0000-00-00', '0010142488', 1, NULL, 7818002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (593, NULL, '735654', '735654', NULL, 'PURWANTO', 'PWT', 'assets/dokumen/foto/karyawan/thumb_new_593.jpg', '2020-09-01', '1973-01-12', 'Solo', 'Perum Gading kencana asri Blok A4/1 RT/RW 01/017 karang Tengah Gunung Puyuh kota Sukabumi jawa barat', '477529275044000', 'Jakarta', '0000-00-00', '0552140904', 1, NULL, 6818002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', 18);
INSERT INTO `m_karyawan` VALUES (594, NULL, '735441', '735648', NULL, 'HAPPY TOURISIANTO', 'HT', 'assets/dokumen/foto/karyawan/thumb_new_594.jpg', '2020-02-01', '1973-09-09', 'SEMARANG', 'Jl Rambutan Barat III/3, RT 011/ RW 004 Kel Tj Duren Utara Kec Grogol Petamburan Jakbar\r\n', '477529390-036000', 'Jl. Rambutan Barat III No.3, Tanjung Duren Utara, Grogol Petamburan, Jakarta Barat', '2007-09-01', '1160004958154', 1, 0, 7318002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (595, NULL, '6818001', '685013', NULL, 'TRIWIBOWO', 'TWB', 'assets/dokumen/foto/karyawan/thumb_new_595.jpg', '2019-08-01', '1968-04-02', 'JAKARTA', 'Jl. Rawasari Barat VIII no. 142A,  RT.09, RW.01, Cempaka Putih Timur, Cempaka Putih, Jakarta Pusat\r\n', '477529325-024000', 'Jl. Rawasari Barat VIII no. 142A,  RT.09, RW.01, Cempaka Putih Timur, Cempaka Putih, Jakarta Pusat', '0000-00-00', '1330016502155', 1, NULL, 7318002, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (596, NULL, '845035', '846095', NULL, 'HASDINAR WINDHU MARTHA', 'HWM', 'assets/dokumen/foto/karyawan/thumb_new_596.jpg', '2020-02-01', '1984-03-17', 'Jakarta', 'SERPONG CITY PARADISE, CLUSTER RASAMALA BLOK i 9 No. 39 RT/RW : 004/007, SETU BABAKAN, TANGERAANG SELATAN\r\n', '245403639-416000', 'KOMP. SEKRETARIAT NEGARA BLOK A4 No. 30 PANUNGGANGAN UTARA PINANG KOTA TANGERANG', '0000-00-00', '0189301933', 0, 0, 6818002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (597, NULL, '826101', '826101', NULL, 'UJANG AGUS TATAN', 'UAT', 'assets/dokumen/foto/karyawan/thumb_new_597.jpg', '2020-09-01', '1982-08-11', 'Bandung', 'Jingga Residence C65, RT 12/07, Mekarjaya. Rancasari, Bandung', '', '', '0000-00-00', '0164232638', 1, NULL, 8418002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (598, NULL, '865397', '866091', NULL, 'M. DWI SANDI PRIYATNO', 'MSP', 'assets/dokumen/foto/karyawan/thumb_new_598.jpg', '2019-12-01', '1986-06-21', 'Blitar', 'Perum Cilebut Residence Cluster Adhenium Blok G2 No.22\r\n', '477529457-629000', 'Perum Cilebut Residen Cluster Adhenium Blok G2 No 22', '2011-06-23', '0700009905683', 1, 0, 8218002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (599, NULL, '8918001', '896194', NULL, 'ANGGA NUGRAHA', 'AN', 'assets/dokumen/foto/karyawan/thumb_new_599.jpg', '2019-05-01', '1989-09-14', 'SUBANG', 'KP. Pamoyaman RT003/RW002 No. 25, Kel. Ranggamekar, Kec. Kota Bogor Selatan, Bogor\r\n', '709793301-404000', 'Kedung Badak RT006/RW005 Kel. Kedung Badak, Kec. Tanah Sareal, Kota Bogor, Jawa Barat', '2019-04-01', '1330016303612', 0, 0, 8618002, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (600, NULL, '735653', '735653', NULL, 'NANA RUDIANA', 'NR', 'assets/dokumen/foto/karyawan/thumb_new_600.jpg', '2020-09-01', '1973-03-26', 'Kuningan', 'perum pesona cilebut 2 blok fb 1 no.2 rt 11 rw 15 kel.cilebut barat kec .sukaraja kab.bogor jawa barat', '47.752.930.9-045.000', 'kp.sukapura sukapura cilincing jakarta utara DKI JAKARTA', '0000-00-00', '1001839108', 1, 0, 8918002, 3, 2, 3, 16, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (601, NULL, '7518001', '755439', NULL, 'SUHARTO', 'SHT', 'assets/dokumen/foto/karyawan/thumb_new_601.jpg', '2019-08-01', '1975-03-06', 'PATI', 'BILABONG PERMAI, BLOK C3E, NO 23, RT 003/017,  CIMANGGIS, BOJONG GEDE, KAB. BOGOR, JAWA BARAT', '470513060-403000', 'BILABONG PERMAI, BLOK C3E, NO 23, RT 003/017,  CIMANGGIS, BOJONG GEDE, KAB. BOGOR, JAWA BARAT', NULL, '1330016499154', 1, 0, 7318002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (602, NULL, '855426', '856013', NULL, 'IYOF ZULHAINIF', 'IZF', 'assets/dokumen/foto/karyawan/thumb_new_602.jpg', '2020-02-01', '1985-04-21', 'Purworejo', 'Klewongan RT02/RW10 Parakan Kauman, Parakan, Temanggung, Jawa Tengah\r\n', '261787501531000', 'Bendo Krajan RT03/RW03, Kalijambe, Bener, Purworejo, Jawa Tengah', '2013-04-30', '1380006315167', 1, 0, 7518002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (603, NULL, '856033', '856033', NULL, 'TEDY MARDYANTO', 'TM', 'assets/dokumen/foto/karyawan/thumb_new_603.jpg', '2020-09-01', '1985-03-25', 'MALANG', 'LINGKUNGAN MAGERSARI RT 06/ RW 04 PANDAAN PASURUAN JATIM 67156', '677121170624000', 'LINGKUNGAN MAGERSARI RT 06/ RW 04 \r\nPANDAAN PASURUAN JATIM 67156', '0000-00-00', '0213822420', 1, 0, 8518002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (604, NULL, '826098', '826098', NULL, 'ROWLAND J.E.F.A', 'RJ', 'assets/dokumen/foto/karyawan/thumb_new_604.jpg', '2020-09-01', '1982-11-08', 'JAKARTA', 'Jl Matraman dalam II No 3A RT 01/RW 08 Kec Menteng Kel Pegangsaan Jakpus 10320\r\n', '477529424071000', '', '0000-00-00', '8720237114', 1, 0, 8518002, 5, 2, 3, 3, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (605, NULL, '795909', '795909', NULL, 'YUDHA TRI ANUGRAH', 'YTA', 'assets/dokumen/foto/karyawan/thumb_new_605.jpg', '2020-09-01', '1979-10-27', 'Jakarta', 'Jl. Kebon Pedes I Gg. Kemuning III RT04 RW09 No.2, Kebon Pedes, Tanah Sareal, Bogor', '68.433.131.7-404.000', 'Jl. Kebon Pedes I Gg. Kemuning RT.04 RW.09 No.02, Kebon Pedes, Tanah Sareal, Bogor 16162', '0000-00-00', '1330007383011', 1, 0, 8218002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (606, NULL, '877104', '877104', NULL, 'TANTI NOPIANTI', 'TN', 'assets/dokumen/foto/karyawan/thumb_new_606.jpg', '2020-09-01', '1987-11-25', 'Bogor', 'Perumahan Viyasa Valley Blok E No 5, Jl. Guru Muchtar RT07/RW16, Cimahpar, Bogor Utara', '677121196404000', 'Perumahan Pabaton Indah Jl. Zamrud III Blok K No 4, RT04/RW07, Tanah Sareal', '0000-00-00', '0211154860', 1, NULL, 7918002, 3, 3, 3, 5, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (607, NULL, '755714', '755714', NULL, 'M. GHADAFI SUYUTHI', 'MGS', 'assets/dokumen/foto/karyawan/thumb_new_607.jpg', '2020-09-01', '1975-11-29', 'MAKASSAR', 'Jl. H. Enjong I No.40 A RT.08 RW.01 \r\nKelurahan: Kalisari Kec: Pasar Rebo\r\nJakarta Timur', '496831264009000', 'Jl. H. Enjong No. 40 RT.08 RW.01 Kel. Kalisari \r\nPasar Rebo - Jakarta Timur', '0000-00-00', '9000022098330', 1, 0, 8718002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (608, NULL, '856030', '856030', NULL, 'DESIA ILMINA SUPRAPTO', 'DIS', 'assets/dokumen/foto/karyawan/thumb_new_608.jpg', '2020-09-01', '1985-12-31', 'Klaten', 'Cilebut Residence Cluster Adhenium Blok A2 No. 5, Cilebut Barat, Sukaraja, Jawa Barat', '789913407445000', '', '0000-00-00', '1330011928827 (Mandiri) a.n Desia Ilmina Suprapto', 1, 0, 7518002, 3, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (609, NULL, '856032', '856032', NULL, 'RIFKY FAJAR ANGGARA', 'RFA', 'assets/dokumen/foto/karyawan/thumb_new_609.jpg', '2020-09-01', '1985-09-18', 'Salatiga', 'VILA BOGOR INDAH 3 BLOK BE 1 NO. 3A, RT 01 RW 015, KEL. KEDUNGHALANG, KEC. KOTA BOGOR UTARA', '78.991.355.5-009.000', 'JL. RADAR BARU BLOK B NO.11 RT 004 RW 04 KEL. KALISARI KEC. PASAR REBO - JAKARTA TIMUR - 13790', '0000-00-00', '0173400909', 1, 0, 8518002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (610, NULL, '896521', '896521', NULL, 'SEPTI PUSPITA', 'SP', 'assets/dokumen/foto/karyawan/thumb_new_610.jpg', '2020-09-01', '1989-09-07', 'Bogor', 'VILLA BOGOR INDAH 3 BLOK BE 1 NOMOR 3A RT 01 RW 15 KELURAHAN KEDUNG HALANG KOTA BOGOR UTARA', '55.642.597.3.404.000', 'KP. PANGKALAN NO. 18 RT 05/RW 01, CIBULUH, KOTA BOGOR', '2013-02-26', '0240303613', 1, 0, 8518002, 3, 3, 3, 5, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (611, NULL, '877101', '877101', NULL, 'ADITYA DWI HAPSARI', 'ADH', 'assets/dokumen/foto/karyawan/thumb_new_611.jpg', '2020-09-01', '1987-06-24', 'Wamena', 'Villa Bogor Indah Cluster Pelikan Blok CE 17 No 20', '67.712.118.8-404.000', 'Jl Tanah Baru E 12 RT 005 RW 008 Tanah Baru Bogor', '0000-00-00', '0211016603', 1, 0, 8918002, 3, 3, 3, 5, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (612, NULL, '805964', '805964', NULL, 'MARWANTO TUMONGLO', 'MT', 'assets/dokumen/foto/karyawan/thumb_new_612.jpg', '2020-09-01', '1980-03-25', 'PALOPO', 'JL. ADHYAKSA BARU NO. 28, MAKASSAR', '872035977014000', '', '0000-00-00', 'BNI a.n Marwanto Tumonglo 0145936089', 1, 0, 8718002, 6, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (613, NULL, '775746', '775746', NULL, 'MUHAMMAD RIDWAN', 'MR', 'assets/dokumen/foto/karyawan/thumb_new_613.jpg', '2020-09-01', '1977-09-14', 'Padang', 'Perum Nusa Harapan Permai Blok I 03 No.1, RT002/RW002, Kel. Katimbang Kec. Biringkanaya, Kota Makassar - Sulawesi Selatan', '47.050.829.2.941.000', 'Perum Nusa Harapan Permai Blok I.03 No.1 Makassar', '0000-00-00', '9000012998473', 1, NULL, 8018002, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (614, NULL, '8718001', '876905', NULL, 'TRISIAN HENDRA PUTRA', 'THP', 'assets/dokumen/foto/karyawan/thumb_new_614.jpg', '2019-05-01', '1987-12-14', 'SIBOLGA', 'Aspol medaeng blok A Gg 8/6 medaeng waru sidoarjo', '367216868-643000', 'Perumahan Pabean Asri Blok I No. 20 Sedati, Sidoarjo', '2019-04-01', '1410011197431', 1, 0, 7718002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (615, NULL, '6418001', '641371', NULL, 'DG MASSESE', 'DM', 'assets/dokumen/foto/karyawan/thumb_new_615.jpg', '2019-08-01', '1964-10-09', 'SELAYAR', 'JlAbdul Kadir I Perumahan Pesona Mutiara II No3 makassar\r\n', '097935449-805000', '', '0000-00-00', '1520091041281', 0, 0, 8718002, 3, 2, 3, 10, 4, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (616, NULL, '896522', '896522', NULL, 'FAJAR PRADANA', 'FP', 'assets/dokumen/foto/karyawan/thumb_new_616.jpg', '2020-09-01', '1989-07-09', 'Banyumas', 'Jl. Kartaja III  RT01/03 Kelurahan Mersi, Kec. Purwokerto Timur, Kab. Banyumas, Jawa Tengah', '59.405.284.7-521.000', 'Karangbenda RT04/04 Berkoh, Purwokerto Selatan, Banyumas, Jawa Tengah', '0000-00-00', '1390010723918', 1, 0, 6418002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (617, NULL, '885348', '886113', NULL, 'DHANI SAPUTRO', 'DS', 'assets/dokumen/foto/karyawan/thumb_new_617.jpg', '2020-02-01', '1988-01-17', 'Magelang', 'Kalikambang RT04/RW05 No. 24 Kel. Gelangan Magelang', '594052862524000', 'Kalikambang RT04/RW05 No. 24 Kel. Gelangan Magelang', '2013-04-30', '0194169918', 1, NULL, 8918002, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (618, NULL, '846107', '846107', NULL, 'NURY ANDRY JANUAR', 'NAJ', 'assets/dokumen/foto/karyawan/thumb_new_618.jpg', '2020-09-01', '1984-01-20', 'Cimahi', 'Keputran Panjunan Gang 3 No. 12, Surabaya', '789898970609000', 'Ngagel Mulyo 40 RT15/RW04, Ngagel Rejo Surabaya', '0000-00-00', '0101159171', 1, 0, 8818002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (619, NULL, '7518001', '755630', NULL, 'LUCKY KOMUL', 'LK', 'assets/dokumen/foto/karyawan/thumb_new_619.jpg', '2019-05-01', '1975-12-19', 'Biak', 'Jl. Pemuda RT000/RW002, Oyehe, Nabire, Papua\r\n', '83.272.853.0-954.000', 'Jl. Pemuda RT000/RW002, Oyehe, Nabire, Papua', '2019-04-01', '1540004319624', 1, 0, 8418002, 6, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (620, NULL, '866108', '866108', NULL, 'RICO JULIAN', 'RJS', 'assets/dokumen/foto/karyawan/thumb_new_620.jpg', '2020-09-01', '1986-07-15', 'BENGKALIS', 'Taman marchelia blok C.38, batam centre, kota batam', '88.014.658.4-215.000', 'Tiban indah permai blok s.46 tiban indah, sekupang. Kota batam kep.riau', '0000-00-00', '1090004030375', 1, 0, 7518002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 34);
INSERT INTO `m_karyawan` VALUES (621, NULL, '866110', '866110', NULL, 'RONI AMARDI', 'RA', 'assets/dokumen/foto/karyawan/thumb_new_621.jpg', '2020-09-01', '1986-08-28', 'Duri', 'Perum,Villa Sampurna2 Blok:LL02 RT/RW:03/13  Tiban Baru,Sekupang. BATAM', '59.405.282.1-219.000', 'jl.nusantara II NO:119 RT/RW:01/02 AIRJamban-Mandau, KAB.Bengkalis-RIAU\r\n', '0000-00-00', '1300010446105', 1, 0, 8618002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (622, NULL, '855421', '856014', NULL, 'GALIH ARY SETYAWAN', 'GAS', 'assets/dokumen/foto/karyawan/thumb_new_622.jpg', '2020-02-01', '1985-06-27', 'BREBES', 'Jl. Aswad No. 7C \r\nEka Warni \r\nMedan Johor \r\nSumatra Utara \r\n', '477529382-017000', '', '2011-10-03', '1290005943028', 0, 0, 8618002, 3, 2, 3, 10, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (623, NULL, '775747', '775747', NULL, 'JHON HERRY', 'JH', 'assets/dokumen/foto/karyawan/thumb_new_623.jpg', '2020-09-01', '1977-01-05', 'Simalungun', 'Komplek Johor Indah Permai 1 Blok X No. 8, Kel. Gedung Johor, Kec. Medan johor, Medan - Sumatera Utara', '47.050.833.4-402.000', 'Manado - Sulawesi Utara ', '0000-00-00', '0076126050', 1, 0, 8518002, 6, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (624, NULL, '795036', '795901', NULL, 'ANGGARA MAHARDHIKA', 'AM', 'assets/dokumen/foto/karyawan/thumb_new_624.jpg', '2020-02-01', '1979-06-05', 'JAKARTA', 'Perumahan Grand Harvest Cluster Arcadia AF 51, Jl. Balas Klumprik, Kebraon 2, Surabaya, Jawa Timur\r\n', '684433378-627000', '', '2009-04-21', '1030004256901', 1, NULL, 7718002, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (625, NULL, '8918001', '896193', NULL, 'GILANG ADITYA PRATAMA', 'GAP', 'assets/dokumen/foto/karyawan/thumb_new_625.jpg', '2019-05-01', '1989-01-05', 'Banyumas ', 'Perum Korpri Jatimulyo RT02/RW05, Kec. Alian, Kab. Banyumas, Jawa Tengah\r\n', '81.321.128.1-952.000', 'Jl. Tanjung Ria RT02/RW06, Jayapura Utara, Kota Jayapura, Papua', '2019-04-01', '1540015694239', 1, 0, 7918002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (626, NULL, '7618001', '765634', NULL, 'PRAYITNO', 'PRY', '', '2019-05-01', '1976-11-11', 'BALIKPAPAN', 'Jl. Mulawarman Perum Batakan Emas Blok. H No.2 RT. 26 Kelurahan Manggar Kecamatan Balikpapan Timur\r\n', '07.960.161.3-721.00', 'Jl. Mulawarman Perum Batakan Emas Blok. H No.2 RT. 26 Kelurahan Manggar Kecamatan Balikpapan Timur', '2019-04-01', '1490006484119', 0, 0, 8918002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (627, NULL, '765508', '765717', NULL, 'ARI NUZUL FAJRI A N', 'AAN', 'assets/dokumen/foto/karyawan/thumb_new_627.jpg', '2020-02-01', '1976-09-12', 'Bandar Lampung', 'Bukit Mekar Wangi Sektor 3, Jl. Anggrek 12 Blok C6/19, Mekar Wangi, Tanah Sareal, Bogor, 16168', '24.298.759.2-403.000', '', '2015-04-06', '1560002322826', 1, NULL, 7618002, 3, 2, 3, 10, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (628, NULL, '916624', '916624', NULL, 'WENDI MAKSALMINA', 'WM', 'assets/dokumen/foto/karyawan/thumb_new_628.jpg', '2020-09-01', '1991-07-23', 'Bogor', 'Jl. Pinguin III, Blok PT 4/2, Taman Pagelaran, Ciomas, Bogor', '668110430434000', 'Jl. Pinguin III, Blok PT 4/2, Taman Pagelaran, Ciomas, Bogor', '0000-00-00', '9000010064856', 1, 0, 7618002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (629, NULL, '915263', '916595', NULL, 'ASRAFIN DANANG PARTANA', 'ADP', 'assets/dokumen/foto/karyawan/thumb_new_629.jpg', '2020-02-01', '1991-11-18', 'JAKARTA', 'Perum Pandan Valley Blok AC/7-4 Bogor 16310\r\n', '700918212-403000', '', '2015-04-06', '0022801610003040', 1, 0, 9118002, 3, 2, 3, 15, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (630, NULL, '785515', '785840', NULL, 'IMAM SANTOSO', 'IS', 'assets/dokumen/foto/karyawan/thumb_new_630.jpg', '2020-02-01', '1978-03-04', 'Jakarta', 'Kp. Poncol No.98 RT06/RW01 Jakasetia, Bekasi Selatan', '68.443.542.5-432.000', 'Kp. Poncol No.98 RT06/RW01 Jakasetia, Bekasi Selatan', '2011-12-23', '1670003392577', 1, 0, 9118002, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (631, NULL, '8919001', '8919001', NULL, 'FERRYSAL', 'FRY', '', '2019-01-01', '1989-02-14', 'CIREBON', '', '', '', '0000-00-00', '', 1, 0, 7818002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (632, NULL, '9818002', '8718002', NULL, 'MUHAMAD RUSLI', 'MR', '', '2020-09-01', '1987-06-12', 'Jakarta', 'Jl. Batu Merah 1 No.31 Rt.02/02 Kel.Pejaten Timur, Kec.Pasar Minggu, Kab.Jakarta Selatan-12510', '361894496017000', 'Jl. Batu Merah 1 No.31 Rt.02/02 Kel.Pejaten Timur, Kec.Pasar Minggu, Kab.Jakarta Selatan-12510', '0000-00-00', '1260006088081', 1, 0, 9818002, 3, 2, 3, 14, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (633, NULL, '9818001', '9818003', NULL, 'FRIANDOST YUFAN MADAKARAH', 'FYM', '', '2018-09-13', '1992-09-12', '--', '', '', '', '0000-00-00', '', 0, 0, 9818003, 0, 2, 2, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (634, NULL, '81424', '6816004', NULL, 'ARIEF SANTOSO', 'AS', '', '2020-09-01', '1968-02-25', 'jakarta', '', '', '', '0000-00-00', '', 0, 0, 9818002, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (635, NULL, '9818001', '9818005', NULL, 'SITI ELLIYANA', 'SE', '', '2018-09-13', '1998-05-05', '--', '', '', '', '0000-00-00', '', 0, 0, 9818002, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (636, NULL, '8418001', '840176', NULL, 'ERNI AJI PRASTIWI', 'EA', 'assets/dokumen/foto/karyawan/thumb_new_636.jpg', '2020-01-01', '1984-08-21', 'MAGELANG ', '', '246714356524000', '', '2009-01-01', '1360005306656', 1, 1, 9818002, 3, 3, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (637, NULL, '6718001', '670191', NULL, 'TITOK RULIANTO', 'TR', 'assets/dokumen/foto/karyawan/thumb_new_637.jpg', '2020-01-01', '1967-09-05', 'MALANG', '', '083290619404000', '', '1992-03-01', '0700004044041', 1, 0, 8418002, 3, 2, 3, 10, 4, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (638, NULL, '6418001', '641433', NULL, 'SIH HERU PARJIPUTRA', 'SHP', '', '2018-09-13', '1964-02-01', '--', '', '', '', '0000-00-00', '', 0, NULL, 6718002, 0, 0, 0, 0, 11, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (639, NULL, '9318001', '930171', NULL, 'BAGAS AKHMAD ADI NUGROHO', 'BAN', 'assets/dokumen/foto/karyawan/thumb_new_639.jpg', '2020-01-01', '1993-09-04', 'SURAKARTA', '', '761508423526000', '', '2016-10-01', '144601001907507', 1, NULL, 6418002, 10, 2, 2, 6, 4, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (640, NULL, '9119001', '9119001', NULL, 'ARINA FITRI INDRIANI', 'AFI', '', '2019-01-01', '1991-04-14', 'JAKARTA ', 'Bukit Hijau Felicity Village No. C5', '89.114.807.4-411.000', 'Kom. Bea Cukai BL-KAV.- No.- RT.002 RW.010 Pisangan - Ciputat Timur Kab. Tangerang ', '0000-00-00', '1030009787298', 1, NULL, 9318002, 3, 3, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (641, NULL, '7919002', '7919002', NULL, 'AMRIL', 'AMR ', '', '2019-01-01', '1979-08-29', 'JAKARTA ', '', '', '', '0000-00-00', '', 1, 0, 9119002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (642, NULL, '9019003', '9019003', NULL, 'IMAM SUBEKHI', 'IS', '', '2019-01-01', '1990-10-05', 'CILACAP', '', '', '', '0000-00-00', '', 1, 0, 7919003, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (643, NULL, '8919004', '8919004', NULL, 'YOHANES', 'YH', '', '2019-01-01', '1989-11-04', 'KAMBARA', '', '', '', '0000-00-00', '', 0, 0, 9019004, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (644, NULL, '9019005', '9019005', NULL, 'MUFLIH HIDAYAT', 'MH', 'assets/dokumen/foto/karyawan/thumb_new_644.jpg', '2019-01-01', '1990-01-23', 'MAKASSAR', 'BTN MINASA UPA BLOK C5 NOMOR 10 KOTA MAKASSAR', '841030836805000', 'JL. TALASALAPANG RUKO BPH O1 NOMOR 1 RT 004 RW 007 KARUNRUNG RAPPOCINI', '0000-00-00', '0255003691', 1, NULL, 8919005, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (645, NULL, '9219006', '9219006', NULL, 'DITTA NARULITA', 'DN', '', '2019-01-01', '1992-08-06', 'JAKARTA ', '', '', '', '0000-00-00', '', 1, 0, 9019006, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (646, NULL, '9319007', '9319007', NULL, 'KURNIA SARI WIJAYANTI', 'KSW', '', '2019-01-01', '1993-03-18', 'KERTOSONO', 'JL.Tebet Dalam IV No.21 RT.0005 RW.001 Kel. Tebet Barat Kec. Tebet Jakarta Selatan DKI Jakarta', '71.856.731.6-015.000', 'JL.Tebet Dalam IV No.21 RT.0005 RW.001 Kel. Tebet Barat Kec. Tebet Jakarta Selatan DKI Jakarta', '0000-00-00', '1240005756433', 1, NULL, 9219007, 3, 3, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (647, NULL, '8219008', '8219008', NULL, 'FAHMI EKO PAMILIAWAN', 'FEP', '', '2019-01-01', '1982-05-04', 'PEKALONGAN', '', '', '', '0000-00-00', '', 1, 0, 9319008, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (648, NULL, '8719009', '8719009', NULL, 'GINANJAR KURNIA', 'GK', '', '2019-01-01', '1987-10-15', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 8219009, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (649, NULL, '8319010', '8319010', NULL, 'ARIVIANTO', 'ARV', '', '2019-01-01', '1930-08-20', 'OKI SRITANJUNG', '', '', '', '0000-00-00', '', 1, NULL, 8719010, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (650, NULL, '9119011', '9119011', NULL, 'NINA NISRINA', 'NN', '', '2019-01-01', '1991-04-03', 'JAKARTA', '', '', '', '0000-00-00', '', 1, NULL, 8319011, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (651, NULL, '8819012', '8819012', NULL, 'KARTIKA PUTRI BWANA', 'KPB', '', '2019-01-01', '1988-07-22', 'NGANJUK', '', '', '', '0000-00-00', '', 1, 0, 9119012, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (652, NULL, '9219013', '9219013', NULL, 'YUYU YUNIAR', 'YY', 'assets/dokumen/foto/karyawan/thumb_new_652.jpg', '2019-01-01', '1992-12-10', 'BOGOR', 'PERUM VILLA MUTIARA BOGOR 1 JL. ARWANA 1 BLOK A5 32 RT 03 RW11 KEL. MEKARWANGI KEC. TANAH SAREAL KOTA BOGOR', '', '', '0000-00-00', '', 1, NULL, 8819013, 3, 3, 3, 5, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (653, NULL, '9019014', '9019014', NULL, 'EKO PUTRO KRIS HARTANTO', 'EKH', 'assets/dokumen/foto/karyawan/thumb_new_653.jpg', '2019-01-01', '0000-00-00', 'PEKALONGAN ', '', '', '', '0000-00-00', '', 1, NULL, 9219014, 3, 2, 0, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (654, NULL, '8619015', '8619015', NULL, 'MUHAMMAD FADLI', 'MF', '', '2019-01-01', '1986-12-09', 'UJUNG PANDANG ', '', '', '', '0000-00-00', '', 1, 0, 9019015, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (655, NULL, '6919016', '6919016', NULL, 'SONI RADIANTORO', 'SR', '', '2019-01-01', '1969-06-27', 'KLATEN', '', '', '', '0000-00-00', '', 1, 0, 8619016, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (656, NULL, '9319017', '9319017', NULL, 'NAJMUL MUJAHIDAH', 'NM', '', '2019-01-01', '1993-08-08', 'BOGOR', '', '', '', '0000-00-00', '', 1, NULL, 6919017, 0, 3, 0, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (657, NULL, '7619018', '7619018', NULL, 'BAMBANG SUHERMAN', 'BS', '', '2019-01-01', '1976-06-21', 'MAKASSAR ', '', '', '', '0000-00-00', '', 1, 0, 9319018, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (658, NULL, '8919019', '8919019', NULL, 'MASTARIANI SIAJENG', 'MS', '', '2019-01-01', '1989-01-30', 'MAKASSAR', '', '', '', '0000-00-00', '', 1, NULL, 7619019, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (659, NULL, '8819020', '8819020', NULL, 'SEPTIAN', 'SPT', '', '2019-01-01', '1988-09-03', 'MAKASSAR', '', '', '', '0000-00-00', '', 1, 0, 8919020, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (660, NULL, '7119021', '7119021', NULL, 'DICKY MUALIM', 'DM', '', '2019-01-01', '1971-10-03', 'RUMBAI', '', '', '', '0000-00-00', '', 1, 0, 8819021, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 32);
INSERT INTO `m_karyawan` VALUES (661, NULL, '8519022', '8519022', NULL, 'ALFITRAH MUZAKI', 'AM', '', '2019-01-01', '1985-06-14', 'LAMONGAN', '', '', '', '0000-00-00', '', 1, 0, 7119022, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (662, NULL, '7819023', '7819023', NULL, 'MUSTOPA', 'MTP ', '', '2019-01-01', '1978-05-08', 'BOGOR', 'JL.BENDA BARAT RT.03/06 NO.15 KEL.CIPAYUNG KEC.CIPAYUNG KOTA DEPOK 16442', '59.417.707.3-412.000', 'KPP PRATAMA DEPOK CIMANGGIS', '0000-00-00', '0217438799', 1, 0, 8519023, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 22);
INSERT INTO `m_karyawan` VALUES (663, NULL, '9019024', '9019024', NULL, 'KURDIAN ARIGORO', 'KA', '', '2019-01-01', '1990-04-01', 'TANGERANG ', 'Taman Tirta Cimanggu Blok E3 No. 4', '68.443.344.4-402.000', 'Kp Gembor Rt 02/05 kel. Pasir Jaya Kec. Jatiuwung Tangerang', '0000-00-00', '1550009415939', 1, NULL, 7819024, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (664, NULL, '8319025', '8319025', NULL, 'JOKO PRIYONO', 'JP', '', '2019-01-01', '1983-04-07', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 9019025, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 21);
INSERT INTO `m_karyawan` VALUES (665, NULL, '7919026', '7919026', NULL, 'FX.KOKO SUDIYATMOKO', 'FS', '', '2019-01-01', '1979-11-14', 'JAKARTA ', '', '', '', '0000-00-00', '', 1, 0, 8319026, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 21);
INSERT INTO `m_karyawan` VALUES (666, NULL, '8719027', '8719027', NULL, 'HANIF TRI SETYA', 'HTS', '', '2019-01-01', '1987-12-06', 'KEBUMEN', 'JL KARANGSAMBUNG GG KREKOP RT 01 RW 04 DESA KUTOSARI KECAMATAN KEBUMEN KABUPATEN KEBUMEN', '71.078.513.0-523.000', 'JL KARANGSAMBUNG GG KREKOP RT 01 RW 04 DESA KUTOSARI KECAMATAN KEBUMEN KABUPATEN KEBUMEN', '0000-00-00', '0227126186', 1, 0, 7919027, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (667, NULL, '9119028', '9119028', NULL, 'AULIA RAHMAN', 'AR', '', '2019-01-01', '1991-07-04', 'KOTA TANGAH', '', '', '', '0000-00-00', '', 0, 0, 8719028, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (668, NULL, '9419029', '9419029', NULL, 'FEBRIANI EKA LESTARI', 'FEL', '', '2020-09-01', '1994-02-02', 'BANYUMAS ', '', '', '', '0000-00-00', '', 1, 0, 9119029, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (669, NULL, '8919030', '8919030', NULL, 'GALIH SASMI RAMDHANI', 'GSR', '', '2019-01-01', '1989-04-14', 'BANDUNG ', 'Dusun Pasirlugina RT 002 RW 003, Desa Wangunjaya, Kecamatan Cisaga, Kabupaten Ciamis', '', '', '0000-00-00', '', 1, NULL, 9419030, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (670, NULL, '8819031', '8819031', NULL, 'NUNU NUGRAHA', 'NN', '', '2019-01-01', '1988-06-20', 'KUNINGAN', '', '', '', '0000-00-00', '', 1, 0, 8919031, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (671, NULL, '8219032', '8219032', NULL, 'ABDUL HARIS SAFWAN', 'AHS', '', '2019-01-01', '1982-02-07', 'CIANJUR', '', '', '', '0000-00-00', '', 1, 0, 8819032, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (672, NULL, '8719033', '8719033', NULL, 'RYAN PRATAMA KHARISMA PUTRA', 'RKP', '', '2019-01-01', '1987-01-27', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 8219033, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (673, NULL, '8119034', '8119034', NULL, 'BAHRUL ULUM', 'BU', '', '2019-01-01', '1981-02-03', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 8719034, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 21);
INSERT INTO `m_karyawan` VALUES (674, NULL, '8019035', '8019035', NULL, 'DJUNAEDI', 'DJ', '', '2019-01-01', '1980-06-10', 'BOGOR', 'JL. DEMANG ARYA KP.WARU KAUM RT.02/02 DS. WARU JAYA KEC. PARUNG KAB. BOGOR 16330', '', '', '0000-00-00', '', 1, NULL, 8119035, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (675, NULL, '8419036', '8419036', NULL, 'JOKO WIDODO', 'JW', '', '2019-01-01', '1984-01-24', 'BITUNG', '', '', '', '0000-00-00', '', 1, 0, 8019036, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 4);
INSERT INTO `m_karyawan` VALUES (676, NULL, '8419037', '8419037', NULL, 'FAJAR SUGARNADA', 'FS', '', '2019-01-01', '1984-05-02', 'BANDUNG', '', '', '', '0000-00-00', '', 1, 0, 8419037, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 18);
INSERT INTO `m_karyawan` VALUES (677, NULL, '8619038', '8619038', NULL, 'NIAT BAGUS SANTOSA', 'NBS', '', '2019-01-01', '1986-02-02', 'PURBALINGGA', '', '', '', '0000-00-00', '', 1, 0, 8419038, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (678, NULL, '8919039', '8919039', NULL, 'RAHMAD SRI SUSILO', 'RSS', '', '2019-01-01', '1989-10-16', 'BOGOR', '', '', '', '0000-00-00', '', 1, NULL, 8619039, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (679, NULL, '9019040', '9019040', NULL, 'SATRIA BANGUN BRISANDY', 'SBB', '', '2019-01-01', '1990-10-04', 'JAKARTA ', 'Ciomas River View Blok D.14 Kel. Ciomas Rahayu Kec. Ciomas\r\nKabupaten Bogor - Jawa Barat', '68.443.336.0-451.000', 'Villa Bekasi Indah 2 Jln. Edelweis 2 Blok E4 No. 15\r\nTambun Selatan - Bekasi', '0000-00-00', '1560001744277', 0, 0, 8919040, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (680, NULL, '9219041', '9219041', NULL, 'AHMAD SYAIFUL AMPRI', 'ASA', 'assets/dokumen/foto/karyawan/thumb_new_680.jpg', '2019-01-01', '1992-04-15', 'REMBANG', 'Jl.CIbubur II Rt 12/ Rw 02 No.91 Kel.Cibubur, Kec.Ciracas Jakatarta Timur', '', '', '0000-00-00', '', 1, NULL, 9019041, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (681, NULL, '9219042', '9219042', NULL, 'RAHMAD MARDIAN', 'RM', '', '2019-01-01', '1992-05-04', 'JAKARTA', 'Jl. Taruna Jaya, Gang Al-Huda No.99D, Cibubur, Ciracas, Jakarta Timur', '59.405.263.1-009.000', 'KPP PRATAMA JAKARTA PASAR REBO', '0000-00-00', '', 1, NULL, 9219042, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (682, NULL, '8119043', '8119043', NULL, 'JOJOK SUGITO', 'JS', '', '2019-01-01', '1981-10-19', 'SURABAYA ', '', '', '', '0000-00-00', '', 1, 0, 9219043, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (683, NULL, '8519044', '8519044', NULL, 'SEPRUDELIM HALIK', 'SH', '', '2019-01-01', '1985-02-10', 'RANTAI DAMAI', '', '', '', '0000-00-00', '', 1, 0, 8119044, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (684, NULL, '9019045', '9019045', NULL, 'ACHMAD NASUHA', 'AN', '', '2019-01-01', '1990-05-25', 'CILACAP ', '', '', '', '0000-00-00', '', 1, 0, 8519045, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (685, NULL, '7719046', '7719046', NULL, 'PURWANTO BALI', 'PWT ', '', '2019-01-01', '1977-01-30', 'BLORA', '', '', '', '0000-00-00', '', 1, 0, 9019046, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (686, NULL, '9019047', '9019047', NULL, 'RAHMADHONI DWIYATMA', 'RD', '', '2019-01-01', '1990-04-21', 'MEDAN', '', '', '', '0000-00-00', '', 1, 0, 7719047, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (687, NULL, '9019048', '9019048', NULL, 'ANDRIANUS SILALAHI', 'AS', 'assets/dokumen/foto/karyawan/thumb_new_687.jpg', '2019-01-01', '1990-04-25', 'METRO', '', '', '', '0000-00-00', '', 1, 0, 9019048, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (688, NULL, '7619049', '7619049', NULL, 'SELAMAT MARPAUNG', 'SM', '', '2019-01-01', '1976-04-02', 'TANJUNG MULIA', 'Jln.sulawesi III no 9 Dok VII jayapura', '', '', '0000-00-00', '1540003030008', 1, NULL, 9019049, 5, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (689, NULL, '866044', '866090', NULL, 'DIAYU ARIFA', 'DA', 'assets/dokumen/foto/karyawan/thumb_new_689.jpg', '2020-02-01', '1986-06-18', 'BENGKULU', 'Jl. Attawabin No. 4 RT006/RW002, Kelurahan Cilangkap, Kecamatan Tapos, Kota Depok, Jawa Barat\r\n', '89.855.222.9-531.000', 'KPP Pratama Purworejo', '2019-12-01', '1360006600792', 1, 0, 7619050, 3, 3, 3, 10, 5, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (690, NULL, '9019051', '9019051', NULL, 'HARYADI TEGUH PRIBADI', 'HTP', '', '2019-01-01', '1990-09-20', 'BEKASI ', '', '75.601.396.7-407.000', '', '0000-00-00', '0266259053', 1, 0, 8619051, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (691, NULL, '8919052', '8919052', NULL, 'HERU FEBRIANTO', 'HF', '', '2019-01-01', '1989-02-09', 'KEBUMEN ', '', '', '', '0000-00-00', '', 1, 0, 9019052, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (692, NULL, '8519053', '8519053', NULL, 'SRI WULANDARI', 'SW', '', '2019-01-01', '1985-08-27', 'JAKARTA', 'Perum Bilabong Blok C1B No.5 Desa Cimanggis, Bojonggede, Kab Bogor Kodepos 16924', '791971351416000', 'Tangerang', '0000-00-00', '0573937336', 1, NULL, 8919053, 3, 3, 3, 5, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (693, NULL, '8319054', '8319054', NULL, 'YOGA UTAMA', 'YU', '', '2019-01-01', '1983-02-27', 'SEMARANG', '', '', '', '0000-00-00', '', 1, 0, 8519054, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 15);
INSERT INTO `m_karyawan` VALUES (694, NULL, '9019055', '9019055', NULL, 'BAYU SAPUTRA', 'BS', '', '2019-01-01', '1990-05-07', 'TAPIN', '', '', '', '0000-00-00', '', 1, 0, 8319055, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (695, NULL, '8619056', '8619056', NULL, 'MUHAMAD SOFIAN', 'MS', '', '2019-01-01', '1986-08-13', 'CIMAHI', '', '', '', '0000-00-00', '', 1, 0, 9019056, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (696, NULL, '5819057', '5819057', NULL, 'TRI SUHARYONO', 'TS', '', '2019-01-01', '1958-01-01', 'BOYOLALI', '', '', '', '0000-00-00', '', 0, 0, 8619057, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (697, NULL, '9419058', '9419058', NULL, 'RIZKY IRYANA ADITYA', 'RIA', '', '2019-01-31', '1994-01-05', 'CILACAP', 'Jl Merpati No 15 B RT 003 RW 002 Kel Slarang Kec. Kesugihan Kab. Cilacap Jawa Tengah\r\n', '764692307522000', 'Jl Merpati No 15 B RT 003 RW 002 Kel Slarang Kec. Kesugihan Kab. Cilacap Jawa Tengah', '0000-00-00', '1670002942034', 1, NULL, 5819058, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (698, NULL, '9519059', '9519059', NULL, 'OSEP NURCHOERI', 'ON', '', '2019-01-31', '1995-04-23', 'TASIKMALAYA', 'Sukasari RT 002/ RW 011 Kel. Gunung Tandala Kec. Kawalu Kota Tasikmalaya Jawa barat\r\n', '', '', '0000-00-00', '1670002942042', 1, 0, 9419059, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (699, NULL, '1919060', '8710333', NULL, 'ARIEF KURNIAWAN', 'ARK', '', '2019-02-13', '2019-02-13', 'mohon diedit sendiri', 'mohon diedit sendiri', 'mohon diedit sendiri', 'mohon diedit sendiri', '2019-02-13', '00000', 0, 0, 9519060, 3, 2, 1, 13, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (700, NULL, '896414', '896495', NULL, 'LUTHFY JANUAR ARIFIN', 'LJA', 'assets/dokumen/foto/karyawan/thumb_new_700.jpg', '2020-02-01', '1989-01-26', 'BOGOR', 'Jl.Semeru Gg mesjid Cilendek timur Rt 10 Rw 02 No.38 Bogor Barat 16112\r\n', '78.989.898.8-404.000', 'CIlendek Timur RT02/10 No. 6, Kel Cilendek Timur, Kec. Bogor Barat', '2019-12-01', '1427027389', 1, 0, 1919061, 3, 2, 3, 12, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (701, NULL, '877026', '877081', NULL, 'ARIEF KURNIAWAN ', 'AK', 'assets/dokumen/foto/karyawan/thumb_new_701.jpg', '2020-02-01', '1987-12-20', 'KEBUMEN', 'Dk Tuaburu, Waluyorejo RT07/03, Puring, Kebumen, Jawa Tengah\r\n', '55.691.978.5-523.000', '', '2019-12-01', '0200010545', 1, NULL, 32614, 3, 2, 3, 5, 5, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (702, NULL, '64617__', '5719001', NULL, 'LAURENTIUS DARYANTO', 'LD', '', '2020-09-01', '1957-06-09', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 32668, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (703, NULL, '80944__', '9119002', NULL, 'TRI DINA WAHYUNINGRUM', 'TDW', '', '2020-09-01', '1991-12-12', 'JAKARTA', 'Tangerang', '', '', '0000-00-00', '', 1, NULL, 64618, 3, 3, 0, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (704, NULL, '81239__', '9319001', NULL, 'EKO FERDIANSYAH', 'EF', '', '2020-09-01', '1993-11-14', 'BOGOR', 'Jl. Veteran III Kp. Caringin RT 002/003 Ds. Banjarsari Kec. Ciawi Kab. Bogor 16720', '805568367-434000', '', '0000-00-00', '1330013260534', 1, NULL, 80945, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (706, NULL, '106184_', '9419001', NULL, 'FITRI KEMALA UTAMI', 'FKU', '', '2019-02-01', '1994-02-23', 'GARUT', '', '', '', '0000-00-00', '', 0, 0, 86482, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (707, NULL, '108315_', '9319002', NULL, 'SUPRIYADI', 'SU', '', '2020-09-01', '1993-04-06', 'KLATEN', '', '', '', '0000-00-00', '168001001394504', 1, NULL, 9419002, 3, 2, 2, 6, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (708, NULL, '109697_', '9319004', NULL, 'BHARATA INDRA LUKITA', 'BIL', '', '2020-09-01', '1993-06-07', 'PANGKALAN BUN', '', '', '', '0000-00-00', '', 1, 0, 108316, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (709, NULL, '109699_', '9519001', NULL, 'YUDDY MARDYANA', 'YM', '', '2020-09-01', '1995-12-30', 'BEKASI', '', '', '', '0000-00-00', '', 1, NULL, 109698, 3, 2, 2, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (710, NULL, '111645_', '8319001', NULL, 'M. AZIZ IRFAN', 'MAI', '', '2020-09-01', '1983-04-29', 'KLATEN', 'Gambuhan RT 01/RW 03,  Baluwarti, Pasar Kliwon, Surakarta 57114', '76.472.982.8-525.000', '', '0000-00-00', '0302677821', 1, NULL, 109700, 3, 2, 0, 5, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (712, NULL, '86481__', '9319003', NULL, 'FIRDA MASITHA', 'FI', '', '2020-09-01', '1993-10-28', 'GRESIK', 'Kencana Residence , Cluster Charnwood KD22/5 BCC', '84.603.718.2-612.000', 'JL BESUKI NO 49 RT03/RW06\r\nYOSOWILANGUN MANYAR KAB GRESIK JAWA TIMUR', '0000-00-00', '0266524657', 1, NULL, 9319002, 3, 3, 2, 5, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (713, NULL, '32580__', '8212001', NULL, 'DESY ERISAWANI', 'DE', '', '2020-09-01', '1982-12-06', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 86482, 3, 3, 3, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (714, NULL, '32580__', '8213001', NULL, 'FAJAR FERDIANSYAH', 'FF', '', '2020-09-01', '1982-08-03', 'BANDUNG', 'JL Lolongok blk 43 no 21 Bogor', '89.855.224.5-404.000', 'JL Lolongok blk 43 no 21 Bogor', '0000-00-00', '7475038002', 1, NULL, 32581, 3, 2, 3, 1, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (715, NULL, '56677__', '9013001', NULL, 'RISKA NURWULAN', 'RN', '', '2013-02-01', '1990-10-04', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 32581, 3, 3, 3, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (716, NULL, '56673__', '9012001', NULL, 'NURIL ANWAR', 'NA', 'assets/dokumen/foto/karyawan/thumb_new_716.jpg', '2020-09-01', '1990-12-12', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 56678, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (717, NULL, '39641__', '9113001', NULL, 'HERSTY DWI DEVIANA', 'HDD', '', '2020-09-01', '1991-12-14', 'BOGOR', 'Pesona Taman Dhika', '', '', '0000-00-00', '', 0, 0, 56674, 3, 3, 0, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (718, NULL, '56676', '9117001', NULL, 'ANNISA SUCI AGITHA ERVANISYA', 'ASE', '', '2020-09-01', '1992-11-21', 'BANDUNG', 'Permata Indah Residence, Blok B15, Semplak, Bogor', '', '', '0000-00-00', '', 1, NULL, 39642, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (719, NULL, '56674__', '8813002', NULL, 'M. REZA REYNALDI', 'MRR', '', '2020-09-01', '1988-02-03', 'BANDUNG', '', '', '', '0000-00-00', '', 1, 0, 9117002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (720, NULL, '8017001', '8017001', NULL, 'SARI ERFANY', 'SE', 'assets/dokumen/foto/karyawan/thumb_new_720.jpg', '2020-09-01', '1980-09-13', 'BOGOR', 'Perum. Griya Kencana Asri Blok A2 No.12 Kel. Kencana Kec. Tanah Sareal - Bogor', '', '', '0000-00-00', '', 1, NULL, 56675, 3, 3, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (721, NULL, '42736__', '9017001', NULL, 'HETTY NOVIANINGSIH', 'HN', '', '2020-09-01', '1990-11-28', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 8017002, 3, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (722, NULL, '32013__', '88210181', NULL, 'ARDIANSYAH', 'ASY', '', '2014-01-01', '1988-11-28', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 42737, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (723, NULL, '7914001', '7914003', NULL, 'ARI KURNIAWAN', 'AK', '', '2014-01-01', '1979-09-18', 'SUBANG', '', '', '', '0000-00-00', '', 0, 0, 32014, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (724, NULL, '32560__', '7714004', NULL, 'MUHAMAD', 'MUH', '', '2014-01-01', '1977-10-08', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 7914002, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (725, NULL, '86210186', '86210186', NULL, 'MUHAMAD NUR', 'MHR', '', '2014-01-01', '1986-01-29', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 32561, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (726, NULL, '32585__', '8914001', NULL, 'IVAN DESTIANA PERMANA', 'IDP', '', '2020-09-01', '1989-10-03', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 32031, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (727, NULL, '39243', '8514005', NULL, 'ANDRI SUSILO', 'AS', '', '2014-01-01', '1985-02-21', 'BANYUMAS', '', '', '', '0000-00-00', '', 0, 0, 32586, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', 35);
INSERT INTO `m_karyawan` VALUES (728, NULL, '39243', '8514001', NULL, 'ANDRI SUSILO', 'AS', '', '2020-09-01', '1985-02-21', 'BANYUMAS', '', '', '', '0000-00-00', '', 1, 0, 8514002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 35);
INSERT INTO `m_karyawan` VALUES (729, NULL, '32608', '9114001', NULL, 'FIRMAN PUTRANSYAH', 'FPH', '', '2020-09-01', '1991-02-28', 'PURWOKERTO', '', '', '', '0000-00-00', '', 1, 0, 8514002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (730, NULL, '32609__', '9114002', NULL, 'MIFTAKHUZAIN IBNU FALAH', 'MIF', '', '2020-09-01', '1991-03-30', 'BREBES', 'Graha Mulawarman Blok T.21 RT.92 Kelurahan Manggar Kecamatan Balikpapan Timur - Kota Balikpapan', '', '', '0000-00-00', '0158224884', 1, NULL, 9114002, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 27);
INSERT INTO `m_karyawan` VALUES (731, NULL, '866045', '866093', NULL, 'SYAMSUL MAIL', 'SML', 'assets/dokumen/foto/karyawan/thumb_new_731.jpg', '2020-02-01', '1986-08-24', 'Buntu Lamba', 'Jl. Nusa Barong RT006/RW003 Kel. Karang Indah Kec. Merauke Papua \r\n', '58.993.991.7.953.000', 'Jl. Rambutan Belakang Kwamki-Mimika Baru, Kab. Mimika ', '2019-12-01', '1540005362011', 1, 0, 32610, 3, 2, 3, 10, 5, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (732, NULL, '8414001', '8414001', NULL, 'MOCHAMAD EKO NURMIFTA ASMITRA', 'MEN', '', '2020-09-01', '1984-08-18', 'BLITAR', '', '', '', '0000-00-00', '', 1, NULL, 48009, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (733, NULL, '38171__', '7514001', NULL, 'ACHMAD EFENDI', 'AE', '', '2020-09-01', '1975-03-29', 'JOMBANG', '', '', '', '0000-00-00', '', 1, 0, 38174, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (734, NULL, '32021__', '7514002', NULL, 'MUHAMMAD ALI', 'MHA', '', '2020-09-01', '1975-05-24', 'JAKARTA', 'Jl.Sawo Kecik I/14 Rt.011 Rw.007 \r\nBukit Duri-Tebet\r\nJakarta Selatan', '59.405.265.6-015.000', 'Jl.Sawo Kecik I/14 Rt.011 Rw.007 \r\nBukit Duri-Tebet\r\nJakarta Selatan', '0000-00-00', '0205017285', 0, 0, 38172, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (735, NULL, '32026__', '8614006', NULL, 'BAYU SRI PRAKOSO', 'BSP', '', '2020-09-01', '1986-05-16', 'TANGERANG', '', '', '', '0000-00-00', '', 1, 0, 32022, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (736, NULL, '8714001', '8714010', NULL, 'ERICO SEPTIAHARI', 'ESI', '', '2020-09-01', '1987-09-04', 'PALANGKARAYA', '', '', '', '0000-00-00', '', 1, 0, 32027, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 25);
INSERT INTO `m_karyawan` VALUES (737, NULL, '47974__', '8314001', NULL, 'JONI SILAS PONGBATU', 'JSP', '', '2020-09-01', '1983-06-12', 'MAKASSAR', '', '', '', '0000-00-00', '', 1, 0, 8714002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 9);
INSERT INTO `m_karyawan` VALUES (738, NULL, '48001__', '8614009', NULL, 'VICTOR  NABE MANGAPATI, ST', 'VMS', '', '2020-09-01', '1986-07-12', 'BIAK', '', '', '', '0000-00-00', '', 1, NULL, 47975, 5, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (739, NULL, '815981', '816011', NULL, 'MURSANTO', 'MO', 'assets/dokumen/foto/karyawan/thumb_new_739.jpg', '2020-02-01', '1981-08-26', 'Giricondro', 'Jl. Kalasan Timur No.130 RT005/RW007 Kel. Bendogerit Kec. Sananwetan Kab. Blitar - Jawa Timur\r\n', '868277674653000', 'Jl. Kalasan Timur No.130 RT005/RW007 Kel. Bendogerit Kec. Sananwetan Kab. Blitar - Jawa Timur', '2019-12-01', '10629334', 1, 0, 48002, 3, 2, 3, 5, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (740, NULL, '8214005', '8214005', NULL, 'FREDY SITUMEANG', 'FS', '', '2020-09-01', '1982-06-25', 'JAYAPURA', '', '', '', '0000-00-00', '', 1, 0, 32640, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (741, NULL, '48004__', '9114007', NULL, 'RYAN ARFIANTO FACHIM', 'RAF', '', '2020-09-01', '1991-12-30', 'JAYAPURA', '', '', '', '0000-00-00', '', 1, 0, 48003, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (742, NULL, '47975__', '8114002', NULL, 'TENNY RIDO W. MAENGKOM', 'TWM', '', '2020-09-01', '1981-06-18', 'MANADO', '', '', '', '0000-00-00', '', 1, 0, 48005, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 9);
INSERT INTO `m_karyawan` VALUES (743, NULL, '48010__', '8614010', NULL, 'SAEFUL HUDRI', 'SH', '', '2020-09-01', '1986-09-09', 'BANYUMAS', '', '', '', '0000-00-00', '', 0, 0, 47976, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (744, NULL, '52712__', '7714001', NULL, 'AMPI USMANY', 'AU', '', '2020-09-01', '1977-01-29', 'ABORU', '', '', '', '0000-00-00', '', 1, 0, 48011, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 8);
INSERT INTO `m_karyawan` VALUES (745, NULL, '835997', '836028', NULL, 'DESTIA ARIANA', 'DA', 'assets/dokumen/foto/karyawan/thumb_new_745.jpg', '2020-02-01', '1983-12-16', 'Yogyakarta', 'Jl. Kubis IV Blok A4 No.14 Griya Loka BSD City Serpong, Tangerang Selatan\r\n', '89.855.215.3-404.000', 'Jl. Abiyasa Raya No.56, RT002/RW016, Indraprasta, Bantarjati, Bogor 16153', '2019-12-01', '1330007546294', 1, NULL, 52713, 3, 3, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (746, NULL, '846062', '846096', NULL, 'RICKY NOVERIAWAN SUHERMAN', 'RNS', 'assets/dokumen/foto/karyawan/thumb_new_746.jpg', '2020-02-01', '1984-11-21', 'SUMEDANG', 'GRIYA BUKIT JAYA CLUSTER XIENA BLOK O8A NO.2 RT.1 RW.31 DESA TLAJUNG UDIK KEC. GUNUNGPUTRI KAB. BOGOR\r\n', '898552211403000', 'JL. NANGKA BLOK D5 NO.9 RT. 001 RW. 009 PERUM GUNUNGPUTRI PERMAI 1 DS. KARANGGAN KEC. GUNUNGPUTRI KAB. BOGOR', '2019-12-01', '7138181787', 1, NULL, 32604, 3, 2, 3, 12, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (747, NULL, '39246__', '8314002', NULL, 'WINNALDI AMRIL', 'WA', '', '2020-09-01', '1983-04-02', 'PADANG', '', '', '', '0000-00-00', '', 1, 0, 32607, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 31);
INSERT INTO `m_karyawan` VALUES (748, NULL, '32574__', '7614001', NULL, 'YAYAN MUDIANA', 'YMA', 'assets/dokumen/foto/karyawan/thumb_new_748.jpg', '2020-09-01', '1976-01-31', 'SAKETI', '', '', '', '0000-00-00', '', 1, 0, 39247, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (749, NULL, '47979__', '7714003', NULL, 'MARJUKI', 'MJ', '', '2014-01-01', '1977-12-26', 'NGANJUK', '', '', '', '0000-00-00', '', 0, 0, 32575, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', 13);
INSERT INTO `m_karyawan` VALUES (750, NULL, '7714003', '7714003', NULL, 'MARJUKI', 'MJ', '', '2020-09-01', '1977-12-26', 'NGANJUK', 'Perum Misfalah Rasaindo Blok J-21, Kel. Pulubala, Kec. Kota Tengah, Kota Gorontalo 96128', '57.375.274.8-822.000', 'Perum Misfalah Rasaindo Blok J-21, Kel. Pulubala, Kec. Kota Tengah, Kota Gorontalo 96128', '0000-00-00', '0077137378', 1, 0, 47980, 3, 2, 3, 5, 3, 2, '2019-08-31 08:39:31', 13);
INSERT INTO `m_karyawan` VALUES (751, NULL, '53004__', '7114001', NULL, 'MAHMUD, SP', 'MS', '', '2020-09-01', '1971-10-06', 'GRESIK', '', '', '', '0000-00-00', '', 1, 0, 47980, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (752, NULL, '32553__', '9114003', NULL, 'DINI PRATIWI', 'DP', '', '2020-09-01', '1991-01-11', 'TEGAL', '', '', '', '0000-00-00', '', 1, 0, 53005, 3, 3, 3, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (753, NULL, '32027__', '8714002', NULL, 'KUNCORO PRASETYONO', 'KP', '', '2020-09-01', '1987-09-11', 'JOMBANG', '', '', '', '0000-00-00', '', 1, 0, 32554, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (754, NULL, '48005__', '7714002', NULL, 'PASIHAR SIHOMBING', 'PS', '', '2020-09-01', '1977-10-12', 'TARUTUNG', '', '', '', '0000-00-00', '', 0, 0, 32028, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (755, NULL, '47972__', '8914005', NULL, 'ABRAHAM SAIFUL IRSYAD RAMADHANY', 'AIR', '', '2020-09-01', '1989-04-29', 'BANYUMAS', 'Bogor', '76.814.991.0-521.0000', 'Purwokerto', '0000-00-00', '0269174277', 1, NULL, 48006, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (756, NULL, '59210180', '59210180', NULL, 'SAPRUDIN', 'SAP', '', '2014-01-01', '1959-02-15', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 47973, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (757, NULL, '896415', '896496', NULL, 'KARIMATUL ULYA', 'KU', 'assets/dokumen/foto/karyawan/thumb_new_757.jpg', '2020-02-01', '1989-12-16', 'TEMANGGUNG', 'PERUMAHAN BOGOR RAYA PERMAI, BLOK FM6 NO 2, BOGOR BARAT, KOTA BOGOR', '668538937533000', 'GREGES RT002/RW001 KEC. TEMBARAK, TEMANGGUNG', '2019-12-01', '0200507829', 1, 0, 32560, 3, 3, 3, 5, 5, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (758, NULL, '47964__', '8414002', NULL, 'IBRAHIM ABD GANI', 'IAG', '', '2020-09-01', '1984-05-24', 'MAKASSAR', '', '', '', '0000-00-00', '', 1, 0, 32555, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (759, NULL, '53043__', '8614007', NULL, 'RAMENDRA ELTIA ANANDA', 'REA', '', '2020-09-01', '1986-06-12', 'MARTAPURA', '', '', '', '0000-00-00', '', 1, 0, 47965, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 26);
INSERT INTO `m_karyawan` VALUES (760, NULL, '38172__', '8114003', NULL, 'TONI DWI KUSDIANTO', 'TDK', '', '2020-09-01', '1981-11-16', 'MALANG', '', '', '', '0000-00-00', '', 1, 0, 53044, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (761, NULL, '48013__', '8014003', NULL, 'FIRMAN. ST', 'FN', '', '2020-09-01', '1980-03-26', 'MAJENE', 'jl. yos sudarso timika papua', '', 'jl. yos sudarso ', '0000-00-00', '', 1, NULL, 38173, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (762, NULL, '47996__', '8714003', NULL, 'BETMANTIO PANJAITAN', 'BP', '', '2020-09-01', '1987-04-06', 'MANOKWARI', '', '', '', '0000-00-00', '', 1, 0, 48014, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 8);
INSERT INTO `m_karyawan` VALUES (763, NULL, '39257__', '8014001', NULL, 'SUARDI HERIYUZAMI', 'SH', '', '2020-09-01', '1980-01-17', 'MIDAI', '', '', '', '0000-00-00', '', 1, 0, 47997, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 34);
INSERT INTO `m_karyawan` VALUES (764, NULL, '53041__', '8014002', NULL, 'LASAHIDO SALEH ', 'LS', '', '2020-09-01', '1980-05-05', 'TOLITOLI', '', '', '', '0000-00-00', '', 1, 0, 39258, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 10);
INSERT INTO `m_karyawan` VALUES (765, NULL, '39065__', '8614011', NULL, 'ARI SHOFARUDIN NUGRAHA', 'ASN', '', '2020-09-01', '1986-10-26', 'SUMEDANG', '', '', '', '0000-00-00', '', 1, 0, 53042, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 22);
INSERT INTO `m_karyawan` VALUES (766, NULL, '48021__', '8814002', NULL, 'WAHYU BUDI PRASETYO WIBOWO', 'WPW', '', '2020-09-01', '1988-10-27', 'PURWOREJO', '', '', '', '0000-00-00', '', 1, 0, 39066, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (767, NULL, '47981__', '8914002', NULL, 'ELIT MAPURUSA', 'EM', '', '2020-09-01', '1989-08-27', 'CILACAP', '', '', '', '0000-00-00', '', 1, 0, 48022, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (768, NULL, '39252__', '8914003', NULL, 'DIAN SEPRIDHOELI ZEGA', 'DSZ', '', '2020-09-01', '1989-09-06', 'GAWU-GAWU', '', '', '', '0000-00-00', '', 1, 0, 47982, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 31);
INSERT INTO `m_karyawan` VALUES (769, NULL, '47989__', '8614013', NULL, 'BIMA AJI CAHYA', 'BAC', '', '2020-09-01', '1986-06-30', 'MAGELANG', '', '', '', '0000-00-00', '', 0, 0, 39253, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (770, NULL, '916433', '916594', NULL, 'TUBAGUS FAJAR SETIAWAN', 'TFS', 'assets/dokumen/foto/karyawan/thumb_new_770.jpg', '2020-02-01', '1991-08-03', 'BOGOR', 'PURI NIRWANA II BLOK AO NO.09 RT 001/010 KELURAHAN PABUARAN KECAMATAN CIBINONG KABUPATEN BOGOR JAWA BARAT', '72.547.689.9-403.000', 'PURI NIRWANA 2 JL.SALAK 2 AO NO.9 RT.05 RW.06 KEL. PABUARAN KEC. CIBINONG BOGOR JAWA BARAT', '2019-12-01', '264033999', 1, 0, 47990, 3, 2, 3, 17, 5, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (771, NULL, '53044__', '8914004', NULL, 'TITO RACHMAD ISMANTO', 'TRI', '', '2020-09-01', '1989-05-04', 'KETAPANG', '', '', '', '0000-00-00', '', 1, 0, 32600, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 24);
INSERT INTO `m_karyawan` VALUES (772, NULL, '48014__', '7914001', NULL, 'VALENTINUS RUMSOWEK', 'VR', '', '2020-09-01', '1979-05-20', 'BIAK', '', '', '', '0000-00-00', '', 1, 0, 53045, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (773, NULL, '48015__', '8514002', NULL, 'LEO TONY IRIATNO', 'LTI', '', '2020-09-01', '1985-08-04', 'BIAK', '', '', '', '0000-00-00', '', 0, 0, 48015, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (774, NULL, '48023', '7914002', NULL, 'WILSON NELSON DIMARA', 'WND', '', '2020-09-01', '1979-06-10', 'JAYAPURA', '', '', '', '0000-00-00', '', 1, 0, 48016, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (775, NULL, '64618__', '5715001', NULL, 'LIMPER SIMANULANG', 'LS', '', '2020-09-01', '1957-08-08', 'Jumasiulok', '', '', '', '0000-00-00', '', 1, 0, 48024, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 8);
INSERT INTO `m_karyawan` VALUES (776, NULL, '64858__', '5915001', NULL, 'PURBO WAHYONO', 'PW', '', '2020-09-01', '1959-02-02', 'jember', '', '', '', '0000-00-00', '', 1, 0, 64619, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (777, NULL, '64858__', '5915001', NULL, 'PURBO WAHYONO', 'PW', '', '2015-10-01', '1959-02-02', 'jember', '', '', '', '0000-00-00', '', 0, 0, 64859, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (778, NULL, '66733__', '5915002', NULL, 'DIDIK ADIWIJAYA', 'DA', '', '2020-09-01', '1959-10-09', 'ngawi', '', '', '', '0000-00-00', '', 0, 0, 64859, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (779, NULL, '55553__', '6014001', NULL, 'ERWIN SANTOSO', 'ES', '', '2020-09-01', '1960-02-07', 'Malang', '', '', '', '0000-00-00', '', 0, 0, 66734, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (780, NULL, '48557__', '6414001', NULL, 'DENI KOSWARA', 'DK', '', '2020-09-01', '1964-06-12', 'bandung', '', '', '', '0000-00-00', '', 1, 0, 55554, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 22);
INSERT INTO `m_karyawan` VALUES (781, NULL, '55536__', '6814001', NULL, 'CORINUS RINTHA', 'CR', '', '2020-09-01', '1968-07-23', 'kupang', '', '', '', '0000-00-00', '', 1, 0, 48558, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 20);
INSERT INTO `m_karyawan` VALUES (782, NULL, '67497__', '8815001', NULL, 'NUR SUGIANTO', 'NS', '', '2015-12-01', '1988-11-01', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 55537, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (783, NULL, '71465__', '9016001', NULL, 'UJANG YUDI HIDAYAT', 'UYH', '', '2020-09-01', '1990-12-08', 'SUMEDANG', '', '', '', '0000-00-00', '', 1, 0, 67498, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (784, NULL, '73752__', '9316002', NULL, 'UKY AULIA RACHMAWAN', 'UAR', '', '2020-09-01', '1993-03-12', 'KLATEN', '', '', '', '0000-00-00', '', 0, 0, 71466, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (785, NULL, '48017__', '6814002', NULL, 'ANDI AZIZ', 'AA', '', '2020-09-01', '1968-10-10', 'JENEPONTO', '', '', '', '0000-00-00', '', 1, 0, 73753, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (786, NULL, '7014001', '70210188', NULL, 'HASANUDIN', 'HI', '', '2014-03-26', '1970-04-09', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 48018, 3, 2, 3, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (787, NULL, '47970__', '7014002', NULL, 'HERMAN', 'HRN', '', '2020-09-01', '1970-07-16', 'UJUNG PANDANG', '', '', '', '0000-00-00', '', 1, 0, 39639, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (788, NULL, '47999__', '7014003', NULL, 'LILLY ROMLY', 'LR', '', '2020-09-01', '1970-12-01', 'TASIKMALAYA', '', '', '', '0000-00-00', '', 1, 0, 47971, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (789, NULL, '47995__', '7114002', NULL, 'YUSUF PETRUS MANUHUTU', 'YPM', '', '2020-09-01', '1971-02-01', 'BIAK', '', '', '', '0000-00-00', '', 1, 0, 48000, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (790, NULL, '32593__', '7114003', NULL, 'ROBI TARU GARING', 'RTG', '', '2014-01-02', '1971-12-06', 'MANGARAN', '', '', '', '0000-00-00', '', 0, 0, 47996, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (791, NULL, '90114__', '7217001', NULL, 'PIETER EDUWARD LIMBA', 'PEL', '', '2020-09-01', '1972-08-10', 'AMBON', '', '', '', '0000-00-00', '', 1, 0, 32594, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (792, NULL, '90114__', '7217001', NULL, 'PIETER EDUWARD LIMBA', 'PEL', '', '2017-07-03', '1972-08-10', 'AMBON', '', '', '', '0000-00-00', '', 0, 0, 90115, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (793, NULL, '52859__', '7214001', NULL, 'AGUSTIANSYAH', 'AGU', '', '2020-09-01', '1972-08-13', 'P. BUNYU', '', '', '', '0000-00-00', '', 1, 0, 90115, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 28);
INSERT INTO `m_karyawan` VALUES (794, NULL, '57159__', '7515001', NULL, 'RUDI', 'RU', 'assets/dokumen/foto/karyawan/thumb_new_794.jpg', '2020-09-01', '1975-01-29', 'PALEMBANG', 'Kluster Ar Rohman\r\nGg. Mushola Ar-Rohman No.16 F, RW.8, Kp. Tengah, Kec. Kramat jati, Kota Jakarta Timur', '672340205009000', 'gg Delima RT 02/08 gedong pasar rebo jaktim 13760 \r\n', '0000-00-00', '1290004991119', 1, NULL, 52860, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (795, NULL, '51567__', '7514003', NULL, 'SAMSUL ARIFIN', 'SA', '', '2020-09-01', '1975-06-23', 'PASURUAN', '', '', '', '0000-00-00', '', 1, 0, 57160, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (796, NULL, '48016__', '75220229', NULL, 'ABDUL WAHAB LAITUPA', 'AWL', '', '2020-09-01', '1975-09-08', 'AMBON', '', '', '', '0000-00-00', '', 1, 0, 51568, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (797, NULL, '48016__', '7514004', NULL, 'ABDUL WAHAB LAITUPA', 'AWL', '', '2014-01-01', '1975-09-08', 'AMBON', '', '', '', '0000-00-00', '', 0, 0, 48017, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (798, NULL, '66590__', '7715001', NULL, 'ALWI ROSMAINI', 'AR', '', '2020-09-01', '1977-04-01', 'PALOPO', '', '', '', '0000-00-00', '', 1, 0, 48017, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (799, NULL, '66589__', '7715002', NULL, 'HARYONO', 'HO', '', '2020-09-01', '1977-05-10', 'BANYUWANGI', '', '', '', '0000-00-00', '', 1, 0, 66591, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (800, NULL, '52361__', '7814001', NULL, 'MARKS IMANUEL', 'MI', '', '2020-09-01', '1978-04-15', 'TEGAL', '', '', '', '0000-00-00', '', 1, 0, 66590, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (801, NULL, '92454__', '7817001', NULL, 'YUDI MARYUDI', 'YM', '', '2017-09-11', '1978-04-15', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 52362, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (802, NULL, '52366__', '7814002', NULL, 'ADBUL NATA PRAWIRA', 'ANP', '', '2014-10-01', '1978-04-26', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 92455, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (803, NULL, '80945__', '7916001', NULL, 'DIDIK NURHADI NUGROHO', 'DNN', '', '2020-09-01', '1979-03-02', 'JAKARTA', '', '', '', '0000-00-00', '1210664772', 1, 0, 52367, 0, 2, 0, 5, 3, 2, '2019-08-31 08:39:31', 22);
INSERT INTO `m_karyawan` VALUES (804, NULL, '56830__', '7915001', NULL, 'BUDI EFENDI', 'BE', '', '2020-09-01', '1979-03-19', 'KARYABUMI', '', '', '', '0000-00-00', '', 1, 0, 80946, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 8);
INSERT INTO `m_karyawan` VALUES (805, NULL, '32014__', '8014004', NULL, 'ABDUL KHAIR', 'AK', '', '2014-01-01', '1980-10-18', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 56831, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (806, NULL, '48018__', '8114005', NULL, 'RISWAN ATNEL', 'RA', '', '2020-09-01', '1981-04-20', 'JAYAPURA', '', '', '', '0000-00-00', '', 1, 0, 32015, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (807, NULL, '47998__', '8114004', NULL, 'YUDHI SUKARTA', 'YS', '', '2020-09-01', '1981-04-20', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 48019, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (808, NULL, '82042__', '8116001', NULL, 'RHONI SAPUTRO', 'RS', '', '2020-09-01', '1981-07-21', 'BANYUMAS', '', '', '', '0000-00-00', '', 0, 0, 47999, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 10);
INSERT INTO `m_karyawan` VALUES (809, NULL, '91247__', '8217001', NULL, 'HERALD REINALDO HAURISSA', 'HRH', '', '2020-09-01', '1982-01-22', 'WAESARISA', '', '', '', '0000-00-00', '', 1, 0, 82043, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (810, NULL, '48744__', '8219001', NULL, 'RUSAPTO', 'RUS', '', '2020-09-01', '1982-05-15', 'KEBUMEN', '', '', '', '0000-00-00', '', 1, 0, 91248, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 15);
INSERT INTO `m_karyawan` VALUES (811, NULL, '47978__', '8214002', NULL, 'I NYOMAN SULAWA', 'IN', '', '2020-09-01', '1982-05-25', 'WERDHI AGUNG', '', '', '', '0000-00-00', '', 1, 0, 48745, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 9);
INSERT INTO `m_karyawan` VALUES (812, NULL, '75281__', '8216001', NULL, 'FIRDAUS', 'FIR', '', '2020-09-01', '1982-07-18', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 47979, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (813, NULL, '32580__', '8214003', NULL, 'FAJAR FERDIANSYAH', 'FF', '', '2014-01-01', '1982-08-03', 'BANDUNG', '', '', '', '0000-00-00', '', 0, 0, 75282, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (814, NULL, '104648_', '8218001', NULL, 'MISBAHUDDIN', 'MB', '', '2020-09-01', '1982-09-24', 'GELITING', '', '', '', '0000-00-00', '', 1, NULL, 32581, 3, 2, 0, 0, 3, 0, '2019-08-31 08:39:31', 20);
INSERT INTO `m_karyawan` VALUES (815, NULL, '35615__', '8214004', NULL, 'DESY ERISAWANI', 'DE', '', '2014-02-26', '1982-12-06', 'BOGOR', '', '', '', '0000-00-00', '', 0, NULL, 104649, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (816, NULL, '47991__', '8314003', NULL, 'ABDUL RIFAI LOHY', 'ARL', '', '2020-09-01', '1983-07-05', 'TULEHU', '', '', '', '0000-00-00', '', 1, 0, 35616, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (817, NULL, '75551__', '8416001', NULL, 'DARMAWANSYAH', 'DWH', '', '2020-09-01', '1984-01-17', 'SUNGGUMINASA', '', '', '', '0000-00-00', '', 1, 0, 47992, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (818, NULL, '8415001', '8415001', NULL, 'YUDHA BUKHARI', 'YB', '', '2020-09-01', '1984-03-23', 'SEI SEMAYANG', '', '', '', '0000-00-00', '', 1, 0, 75552, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (819, NULL, '35521__', '8414003', NULL, 'RETNO ANGGRAENNY', 'RA', '', '2020-09-01', '1984-05-14', 'BOGOR', 'JL PONDOK RUMPUT 1 NO 11', '', '', '0000-00-00', '', 1, 0, 8415002, 3, 3, 0, 5, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (820, NULL, '104508_', '8518001', NULL, 'RUSTAM EFENDI', 'RE', '', '2020-09-01', '1985-03-03', 'SORONG', '', '', '', '0000-00-00', '', 1, 0, 35522, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (821, NULL, '38164__', '8514003', NULL, 'MUHAMMAD ALFIN SALAM', 'MAS', '', '2020-09-01', '1985-05-30', 'PEMALANG', '', '', '', '0000-00-00', '', 1, 0, 104509, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 15);
INSERT INTO `m_karyawan` VALUES (822, NULL, '110916_', '8518002', NULL, 'AZHARI PRIYATNO', 'APO', '', '2020-09-01', '1985-10-18', 'PONTIANAK', '', '', '', '0000-00-00', '', 0, 0, 38165, 3, 2, 3, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (823, NULL, '48022__', '8514004', NULL, 'FLORIANUS HANDU', 'FH', '', '2020-09-01', '1985-12-11', 'MANGGARAI', '', '', '', '0000-00-00', '', 1, 0, 110917, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (824, NULL, '54876__', '8614008', NULL, 'SHOOHIBUN NAJIIB', 'SNB', '', '2020-09-01', '1986-01-17', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 48023, 3, 2, 3, 0, 3, 2, '2019-08-31 08:39:31', 34);
INSERT INTO `m_karyawan` VALUES (825, NULL, '48006__', '8614002', NULL, 'MUJAHIDIN EL ISTIQOMAH', 'MEI', '', '2020-09-01', '1986-02-25', 'WAMENA', '', '', '', '0000-00-00', '', 1, 0, 54877, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (826, NULL, '35520__', '8614003', NULL, 'ASEP SAEPUL MILAH', 'ASM', '', '2014-02-26', '1986-03-13', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 48007, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (827, NULL, '111159_', '8618001', NULL, 'ANTON APRIANTO', 'AAO', '', '2018-11-01', '1986-04-13', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 35521, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (828, NULL, '47982__', '8614004', NULL, 'HARYANTO', 'HYO', '', '2020-09-01', '1986-03-03', 'BANJARNEGARA', '', '', '', '0000-00-00', '', 1, 0, 111160, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 25);
INSERT INTO `m_karyawan` VALUES (829, NULL, '47967__', '8614005', NULL, 'MULYADI', 'MUL', '', '2020-09-01', '1986-03-15', 'MASAGO', '', '', '', '0000-00-00', '', 1, 0, 47983, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (830, NULL, '63221__', '8615001', NULL, 'JUNI KURNIAWATI', 'JK', '', '2020-09-01', '1986-06-25', 'SURABAYA', 'Jl Margonda Raya Kp Manggah 2 Gang Manggah RT 05 RW 12 No 42 Depok', '', 'Jl Margonda Raya Kp Manggah 2 Gang Manggah RT 05 RW 12 No 42 Depok', '0000-00-00', '', 1, NULL, 47968, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (831, NULL, '86210184', '86210184', NULL, 'MUHAMMAD FACHRI', 'MF', '', '2016-01-04', '1986-10-12', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 63222, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (832, NULL, '65127', '8714001', NULL, 'JANUAR SUPRIADI', 'JSI', '', '2020-09-01', '1987-01-02', 'GRESIK', '', '', '', '0000-00-00', '', 1, 0, 39606, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (833, NULL, '65127__', '8615003', NULL, 'MUHAMMAD ICHSAN SUCI', 'MHS', '', '2020-09-01', '1986-12-27', 'SERANG', 'jl. Raflesia no.11 RT.010 LK 1 kelurahan Korpri Jaya kecamatan Sukarame kota Bandarlampung ', '84.011.639.6-323.000', 'jl. Raflesia no.11 RT.0 LK 1 Korpri Jaya kecamatan Sukarame kota Bandarlampung', '0000-00-00', '8905291072', 1, NULL, 65128, 3, 2, 3, 1, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (834, NULL, '52713__', '8714004', NULL, 'DWI ARISTYO YUWONO', 'DAY', '', '2020-09-01', '1987-05-01', 'BANYUMAS', 'Nganjuk, Jawa Timur', '81.321.196.8-952.000', '', '0000-00-00', '', 1, NULL, 65128, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (835, NULL, '32028__', '8714005', NULL, 'BUCHORI AHMAD', 'BA', 'assets/dokumen/foto/karyawan/thumb_new_835.jpg', '2020-09-01', '1987-05-26', 'CILACAP', 'JL. DAMAR  RT/RW 02/09, TRITIH KULON, CILACAP UTARA\r\nCILACAP, JAWA TENGAH', '59.405.287.0-522.000', 'JL SIRSIDAH NO 64 RT/RW 02/05, TRITIH KULON, CILACAP UTARA\r\nCILACAP, JAWA TENGAH', '0000-00-00', '0331916299', 1, 0, 52714, 3, 2, 3, 5, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (836, NULL, '47985__', '8714006', NULL, 'HENRI THUNG', 'HT', '', '2020-09-01', '1987-06-05', 'AMBON', '', '', '', '0000-00-00', '', 1, 0, 32029, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (837, NULL, '91250__', '8717001', NULL, 'MUHAMAD RUSLI', 'MDR', '', '2017-08-01', '1987-06-12', 'JAKARTA', 'Jl. Batu Merah No.31 RT.02/002 Pejaten Timur, Pasar Minggu, Jakarta Selatan 12510', '', '', '0000-00-00', '', 0, 0, 47986, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (838, NULL, '52717__', '8714007', NULL, 'FRANKY WATUNG', 'FW', '', '2020-09-01', '1987-06-21', 'MANADO', 'Desa Kamangta Jaga III Kecamatan Tombulu Kabupaten Minahasa Provensi Sulawesi Utara', '98.034.102.7-823.000', 'Pratama Bitung', '0000-00-00', '0267074296', 1, NULL, 91251, 5, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 9);
INSERT INTO `m_karyawan` VALUES (839, NULL, '47986__', '8714008', NULL, 'DEDY HULKYAWAR', 'DH', '', '2020-09-01', '1987-06-23', 'TUAL', 'BTN , saumlaki kepulauan tanimbar', '92.808.384.9-941.000', 'KP KOLAM SAUMLAKI RT.002 RW.007 SAUMLAKI, TANIMBAR SELATAN KAB.MALUKU TENGGARA BARAT MALUKU', '0000-00-00', '0258389105', 1, NULL, 52718, 6, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (840, NULL, '32024__', '8714009', NULL, 'KUKUH KRISMANTO', 'KK', '', '2020-09-01', '1987-07-06', 'CILACAP', 'Jl Raya Jeruklegi Kulon, Danasri Rt003 Rw003, Kel.Jeruklegi Kulon, Kec.Jeruklegi, Kab.Cilacap, Prov.Jawa Tengah, Indonesia (Pos : 53252)', '70.498.084.6-521.000', 'Jl.Slamet Riyadi no 25, rt003 rw003, Sokanegara, Purwokerto Timur, Banyumas - Jawa Tengah', '0000-00-00', '0337940215', 1, 0, 47987, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', 15);
INSERT INTO `m_karyawan` VALUES (841, NULL, '75538__', '8716001', NULL, 'FACHRUDDIN ASWAL', 'FC', '', '2020-09-01', '1987-12-23', 'WATAMPONE', '', '', '', '0000-00-00', '', 1, 0, 32025, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (842, NULL, '82132__', '8716002', NULL, 'ANDI FATAHILLAH ', 'AF', '', '2020-09-01', '1987-12-23', 'UJUNG PANDANG', '', '', '', '0000-00-00', '', 1, 0, 75539, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 11);
INSERT INTO `m_karyawan` VALUES (843, NULL, '47990__', '8814003', NULL, 'RAHARDIAN HIDAYANTO', 'RH', '', '2020-09-01', '1988-01-03', 'ternate', '', '', '', '0000-00-00', '', 1, 0, 82133, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 4);
INSERT INTO `m_karyawan` VALUES (844, NULL, '48024__', '8814004', NULL, 'JACK ARANTI WAY', 'JAW', '', '2020-09-01', '1988-01-20', 'SERUI', 'Jl. Thamrin Wamena', '84.776.814.0-952.000', 'JLN. THAMRIN WAMENA NO 23   KEL. WAMENA KOTA    KEC. WAMENA    KAB. JAYAWIJAYA', '0000-00-00', '031101037068505', 1, NULL, 47991, 5, 2, 3, 6, 3, 0, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (845, NULL, '64458__', '8815003', NULL, 'DJAMAL SYARIEF', 'DS', '', '2020-09-01', '1988-03-04', 'BANDAR LAMPUNG', '', '', '', '0000-00-00', '', 1, 0, 48025, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (846, NULL, '47983__', '8814005', NULL, 'ARIES PRASETYO', 'AP', '', '2020-09-01', '1988-03-09', 'PEMALANG', '', '', '', '0000-00-00', '', 1, 0, 64459, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 3);
INSERT INTO `m_karyawan` VALUES (847, NULL, '32583__', '8814006', NULL, 'DITA MIRANTI', 'DM', '', '2014-01-01', '1988-03-21', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 47984, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (848, NULL, '47929__', '8814007', NULL, 'HASBI ASH SHIDDIEQY', 'HAS', '', '2020-09-01', '1988-02-21', 'TANJUNG PINANG', '', '', '', '0000-00-00', '', 1, 0, 32584, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 34);
INSERT INTO `m_karyawan` VALUES (849, NULL, '89173__', '8817001', NULL, 'ZAENAL ARIFIN', 'ZA', '', '2017-06-14', '1988-06-25', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 47930, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (850, NULL, '53893__', '8814008', NULL, 'BANGUN YUDI PRASETYO', 'BYP', '', '2020-09-01', '1988-09-01', 'BANDUNG', '', '', '', '0000-00-00', '', 0, 0, 89174, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (851, NULL, '58809__', '8815002', NULL, 'ANDRI MARZA', 'AM', '', '2020-09-01', '1988-10-02', 'SUNGAI PINANG', 'Jl. Sebiay Perum Griya Aminah Blok A No 14', '43.181.895.4-325.000', 'Jl. Sebiay Perum Griya Aminah Blok A No 14', '0000-00-00', '0220294997', 1, NULL, 53894, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 33);
INSERT INTO `m_karyawan` VALUES (852, NULL, '70090__', '8816001', NULL, 'RANGGA DENY SYAHPUTRA', 'RDS', 'assets/dokumen/foto/karyawan/thumb_new_852.jpg', '2020-09-01', '1988-10-24', 'PASURUAN', '', '', '', '0000-00-00', '', 1, 0, 58810, 3, 2, 3, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (853, NULL, '39244__', '8814009', NULL, 'MUHAJIR', 'MJI', '', '2020-09-01', '1988-12-02', 'DESA ULEE BARAT', '', '', '', '0000-00-00', '', 1, 0, 70091, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 29);
INSERT INTO `m_karyawan` VALUES (854, NULL, '73032__', '8816003', NULL, 'DESI SRI WIDANTI', 'DSW', '', '2016-03-26', '1988-12-08', 'CIANJUR', '', '', '', '0000-00-00', '', 0, 0, 39245, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (855, NULL, '110703', '9918001', NULL, 'SHENDY FEBRIAN DIANTIRTA', 'SFD', '', '2020-09-01', '1999-02-23', 'Blitar', 'Perum The Belle Residence Serpong Blok-D12\r\nJl. Pendidikan Kec. Gunung Sindur, Kab. Bogor', '93.632.972.1-653.000', 'JL. Kenanga No 36. RT.002/RW.003 Klemunan, Kec. Wlingi, Kab. Blitar', '0000-00-00', '0690771420', 1, NULL, 73033, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (856, NULL, '111643_', '8918004', NULL, 'AHDIANSYAH', 'ASH', 'assets/dokumen/foto/karyawan/thumb_new_856.jpg', '2020-09-01', '1989-01-01', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 9918002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (857, NULL, '101492_', '8918002', NULL, 'MOHAMMAD WILDAN JATIPINANGGIH', 'MWJ', '', '2018-03-26', '1989-02-28', 'MEDAN', '', '', '', '0000-00-00', '3452465971', 0, 0, 111644, 0, 0, 0, 3, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (858, NULL, '111549_', '8918003', NULL, 'BINTANG RUGAYYAH AHMAD', 'BRA', '', '2020-09-01', '1989-06-02', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 101493, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (859, NULL, '110670', '9918002', NULL, 'A KURNIAWAN FEBRI CH', 'AFC', '', '2020-09-01', '1999-02-15', 'MALANG', 'JLN. H. NOOR, NO. 22, RT. 09/RW. 01, KEL. PEJATEN BARAT, KEC. PASAR MINGGU, KOTA ADMINISTRASI JAKARTA SELATAN, DKI JAKARTA, 12510', '85.130.332.1-654.000', 'JLN. RAYA SUMBERMANJING WETAN, NO. 86, RT. 13/RW. 04, KEL. SUMBERMANJING WETAN, KEC. SUMBERMANJING, KAB. MALANG, JAWA TIMUR, 65176', '0000-00-00', '0718869986', 1, NULL, 111550, 3, 2, 2, 5, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (860, NULL, '48019__', '8914007', NULL, 'TIBET SAMAA', 'TS', '', '2020-09-01', '1989-07-27', 'toraja', 'jl.Caritas sp2, Timika Papua Tengah', '90.184.516.4-953.000', 'JL.DELIMA SP 2 RT.020, TIMIKA JAYA MIMIKA BARU, KAB.MIMIKA PAPUA', '0000-00-00', '1540010941981', 1, NULL, 9918002, 5, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (861, NULL, '90115__', '8917001', NULL, 'REIN CHARD LUMBAN TOBING', 'RLT', '', '2020-09-01', '1989-08-31', 'SORONG', '', '', '', '0000-00-00', '', 0, 0, 48020, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', 8);
INSERT INTO `m_karyawan` VALUES (862, NULL, '54312__', '8914008', NULL, 'ANTONY DWI PRANATA', 'ADP', '', '2020-09-01', '1989-10-10', 'MALANG', '', '', '', '0000-00-00', '', 1, 0, 90116, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 19);
INSERT INTO `m_karyawan` VALUES (863, NULL, '64456__', '8915001', NULL, 'REZA AULIA AKBAR', 'RAA', '', '2020-09-01', '1989-10-14', 'jakarta', '', '', '', '0000-00-00', '', 1, 0, 54313, 3, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (864, NULL, '110716', '9817001', NULL, 'AEI DHELWIS OKDHIANTHY PUTRI', 'AOP', '', '2020-09-01', '1998-10-21', 'Wonogiri', '', '', '', '0000-00-00', '', 1, 0, 64457, 3, 3, 2, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (865, NULL, '78111__', '89220223', NULL, 'NOFRIADI', 'NO', '', '2020-09-01', '1989-11-09', 'payakumbuh', '', '', '', '0000-00-00', '', 1, 0, 9817002, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', 34);
INSERT INTO `m_karyawan` VALUES (866, NULL, '84741', '9817002', NULL, 'ALMARATUS SOLICHA', 'AS', '', '2017-02-01', '1998-09-09', 'Malang', '', '', '', '0000-00-00', '', 0, 0, 78112, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (867, NULL, '53045__', '8914009', NULL, 'WAHID NOVIANTO', 'WN', '', '2020-09-01', '1989-11-26', 'PONTIANAK', '', '', '', '0000-00-00', '', 1, 0, 9817002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 24);
INSERT INTO `m_karyawan` VALUES (868, NULL, '8915045', '8915045', NULL, 'FACHREZAR AKBAR', 'FA', '', '2020-09-01', '1989-12-02', 'Lhokseumawe', '', '', '', '0000-00-00', '', 1, 0, 53046, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (869, NULL, '91409', '9817003', NULL, 'ANGGI KRISTIN PATATAH', 'AKP', '', '2020-09-01', '1998-02-28', 'Perdana', '', '', '', '0000-00-00', '794501003846535', 1, NULL, 64326, 5, 3, 2, 6, 3, 0, '2019-08-31 08:39:31', 27);
INSERT INTO `m_karyawan` VALUES (870, NULL, '35518__', '9014001', NULL, 'HERDEDENSI PANJAITAN', 'HP', '', '2020-09-01', '1990-01-02', 'Leidong', '', '', '', '0000-00-00', '', 0, 0, 9817002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (871, NULL, '84743', '9817004', NULL, 'ALFIA RIZKI RAMADHANI', 'ARR', '', '2020-09-01', '1998-01-09', 'Nganjuk', '', '', '', '0000-00-00', '', 0, 0, 35519, 3, 3, 2, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (872, NULL, '39253__', '9014002', NULL, 'NANO SULISTIO', 'NS', '', '2020-09-01', '1990-01-15', 'Medan', '', '', '', '0000-00-00', '', 1, 0, 9817002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 31);
INSERT INTO `m_karyawan` VALUES (873, NULL, '91251__', '9017001', NULL, 'ANDRI SAMSUDIN', 'AS', '', '2017-07-27', '1990-01-26', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 39254, 0, 2, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (874, NULL, '63234', '9715001', NULL, 'AZARDIN ADJI NUGRAHA', 'AAN', '', '2020-09-01', '1997-05-22', 'Banyumas', 'Domisili Bogor. Asal : Jl.Jend. Soeprapto, No.97, RT005/RW002, Sokaraja Wetan, Kec. Sokaraja, Kab. Banyumas, Jawa Tengah', '', '', '0000-00-00', '', 1, NULL, 91252, 3, 2, 0, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (875, NULL, '91249__', '9017002', NULL, 'FEBRIYANA DWIRANI KURNIASARI', 'FDK', '', '2020-09-01', '1990-02-01', 'BOGOR', '', '', '', '0000-00-00', '', 1, NULL, 9715002, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (876, NULL, '105914', '9718001', NULL, 'ISTI AKHIROH', 'IA', '', '2021-01-01', '1997-01-28', 'Purbalingga', '', '', '', '0000-00-00', '', 1, 0, 91250, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (877, NULL, '47997__', '9014003', NULL, 'RIZKI NUR QIYAMULAEL AL IKHSAN', 'RAI', '', '2020-09-01', '1990-03-02', 'TASIKMALAYA', '', '', '', '0000-00-00', '', 0, 0, 9718002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (878, NULL, '104569', '9618001', NULL, 'MUHAMAD RIVAY', 'MR', '', '2020-09-01', '1996-07-19', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 47998, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (879, NULL, '78832__', '9016001', NULL, 'ARDIANTI RACHMANDANI', 'AR', '', '2016-09-19', '1990-04-17', 'JAYAPURA', '', '', '', '0000-00-00', '', 0, 0, 9618002, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (880, NULL, '97855', '9617001', NULL, 'SHOODDALI FAJAR HARIANTO', 'SFH', '', '2020-09-01', '1996-01-10', 'Sorba', '', '', '', '0000-00-00', '', 1, 0, 78833, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (881, NULL, '906520', '906623', NULL, 'EKANINGTYAS DHIAN RACHMAWATI', 'EDR', 'assets/dokumen/foto/karyawan/thumb_new_881.jpg', '2020-02-01', '1990-05-11', 'BANJARNEGARA', 'Jl. Cemara I No.29 Perum kalisemi Indah, Parakancanggah, Banjarnegara\r\n', '070057741529000', '', '2019-12-01', '9000050126540', 1, NULL, 9617002, 3, 3, 3, 10, 5, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (882, NULL, '47984__', '90220224', NULL, 'ANDIKA PAWITRA', 'AP', '', '2022-01-01', '1990-05-17', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 39641, 3, 2, 0, 0, 12, 1, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (883, NULL, '106182_', '9018001', NULL, 'UNITA UTAMI DEWI', 'UUD', '', '2020-09-01', '1990-05-19', 'YOGYAKARTA', 'JALAN ROSMALA NO. 3, JATIPULO, PALMERAH, JAKARTA BARAT', '75.454.254.6-524.000', 'JALAN SUNAN AMPEL X NO. 83 RT.09 RW.01\r\nJURANGOMBO SELATAN, MAGELANG SELATAN, MAGELANG, JAWA TENGAH', '0000-00-00', '0576449824', 1, 0, 47985, 3, 3, 3, 5, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (884, NULL, '47968', '9514001', NULL, 'FAULANDI AGUSTIAN ASSALAM', 'FAA', '', '2020-09-01', '1995-08-11', 'Banyumas', '', '', '', '0000-00-00', '', 1, 0, 106183, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (885, NULL, '111550', '9519002', NULL, 'TOMMY ARDIANTO', 'TA', '', '2020-09-01', '1995-06-08', 'Jakarta', 'Komp Pemda DKI Blok B3 No.28 RT 001/02 Pondok Kelapa, Duren Sawit,Pondok Kelapa,Jakarta Timur,DKI Jakarta', '', '', '0000-00-00', '', 1, NULL, 9514002, 3, 2, 2, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (886, NULL, '9516002', '9516002', NULL, 'ERICK BARENTS OLII', 'EBO', '', '2016-08-01', '1995-06-08', 'Gorontalo', '', '', '', '0000-00-00', '', 0, 0, 9519002, 0, 2, 0, 0, 0, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (887, NULL, '78112', '9516001', NULL, 'ERICK BARENTS OLII', 'EBO', '', '2020-09-01', '1995-06-08', 'Gorontalo', '', '', '', '0000-00-00', '', 0, 0, 9516003, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (888, NULL, '104503', '9518004', NULL, 'FEBRIANTY PEGE SIWA', 'FPS', '', '2020-09-01', '1995-02-11', 'Jayapura', 'Jl. Pantai kelapa no 50 Argapura bawah', '', '', '0000-00-00', '', 1, NULL, 9516002, 5, 3, 2, 0, 3, 0, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (889, NULL, '104505', '9518005', NULL, 'UMAR TOMSIO', 'UT', '', '2020-09-01', '1995-02-03', 'Tulehu', '', '', '', '0000-00-00', '', 1, 0, 9518002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 8);
INSERT INTO `m_karyawan` VALUES (890, NULL, '59823__', '9015001', NULL, 'IRVAN', 'IRV', '', '2015-04-09', '1990-06-17', 'Padang', '', '', '', '0000-00-00', '', 0, 0, 9518002, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (891, NULL, '91252', '9417001', NULL, 'DESY SARWILAH', 'DS', '', '2020-09-01', '1994-12-07', 'Jakarta', 'The Primrose Condovilla Summarecon Bekasi\r\nGedung GE 01/05 ', '', '', '0000-00-00', '', 1, NULL, 59824, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (892, NULL, '104581', '9418001', NULL, 'ANGELA PRIMASARI', 'AP', '', '2020-09-01', '1994-09-28', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9417002, 4, 3, 0, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (893, NULL, '111647', '9418002', NULL, 'MUHAMMAD SATRIYA GANDREVA', 'MSG', '', '2020-09-01', '1994-07-24', 'Alue Bilie', 'Jl. Puskesmas No.34 RT/RW 011/001, Pondok Aren', '', '', '0000-00-00', '', 0, 0, 9418002, 3, 2, 3, 10, 3, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (894, NULL, '58800', '9415001', NULL, 'RIVAL RIKA ANDISTA', 'RRA', '', '2020-09-01', '1994-07-19', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9418002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 23);
INSERT INTO `m_karyawan` VALUES (895, NULL, '108021', '9418008', NULL, 'SAYYIDATUL ULUPAH', 'SU', '', '2020-09-01', '1994-07-07', 'Tangerang ', '', '', '', '0000-00-00', '', 1, 0, 9415002, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (896, NULL, '78831', '9416001', NULL, 'AYU NUR WULANDARI', 'ANW', '', '2016-09-06', '1994-06-23', 'Semarang', '', '', '', '0000-00-00', '', 0, 0, 9418002, 0, 0, 0, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (897, NULL, '70664', '9416002', NULL, 'MOHAMAD RAMDAN FIRDAUS', 'MRF', '', '2016-02-26', '1994-06-04', 'Subang', '', '', '', '0000-00-00', '', 0, 0, 9416002, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (898, NULL, '84744', '9317001', NULL, 'BAGUS PRIAMBODO', 'BP', '', '2020-09-01', '1993-11-29', 'Bengkulu', '', '', '', '0000-00-00', '', 1, 0, 9416002, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (899, NULL, '96307__', '9018003', NULL, 'AKHMAD ZAINUDDIN', 'AZ', '', '2020-09-01', '1990-06-18', 'Pasuruan', 'Mawar Ledok No. 17 RT. 02 RW. 02\r\nLedug Prigen\r\nKab. Pasuruan \r\nJawa Timur', '84.444.936.3-624.000', 'Mawar Ledok No. 17 RT. 02 RW. 02\r\nLedug Prigen\r\nKab. Pasuruan \r\nJawa Timur', '0000-00-00', '', 1, NULL, 9317002, 3, 2, 2, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (900, NULL, '47926__', '9014006', NULL, 'FUJI SATRIA PRIMURDANI', 'FSP', '', '2020-09-01', '1990-06-22', 'Palembang', '', '', '', '0000-00-00', '', 1, 0, 96308, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 33);
INSERT INTO `m_karyawan` VALUES (901, NULL, '77708__', '9016002', NULL, 'NELLY BUTAR BUTAR', 'NBB', '', '2020-09-01', '1990-06-22', 'Tapanuli Utara', '', '', '', '0000-00-00', '0573840572', 1, 0, 47927, 5, 3, 1, 5, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (902, NULL, '104571_', '9018004', NULL, 'SEPTIYONO PRATOMO', 'STP', '', '2020-09-01', '1990-09-03', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 77709, 3, 2, 3, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (903, NULL, '47251__', '9014007', NULL, 'ALI AKBAR LUBIS', 'AAL', '', '2020-09-01', '1990-09-16', 'Binjai', '', '', '', '0000-00-00', '', 1, 0, 104572, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (904, NULL, '56677__', '9015002', NULL, 'RISKA NURWULAN', 'RNW', '', '2015-01-01', '1990-10-04', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 47252, 0, 0, 0, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (905, NULL, '47252__', '9014008', NULL, 'IKHSAN PRAGATAMA ', 'IPG', '', '2020-09-01', '1990-10-08', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 56678, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (906, NULL, '73063__', '9016003', NULL, 'OKTOVIANUS PARARUK GALAMPO', 'OPG', '', '2020-09-01', '1990-10-30', 'Wasuponda', '', '', '', '0000-00-00', '', 1, 0, 47253, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 14);
INSERT INTO `m_karyawan` VALUES (907, NULL, '57398__', '9020001', NULL, 'GITA NOVASARI', 'GNS', '', '2015-02-11', '1990-11-26', 'Purbalingga', 'Jl. Batas Indah No. 64 RT04 RW01 Pondok Aren Pondok Betung Tangerang Selatan', '', '', '0000-00-00', '0573937585', 0, 0, 73064, 3, 3, 3, 5, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (908, NULL, '48007__', '9114004', NULL, 'NAJMUDDIN', 'NJD', '', '2020-09-01', '1991-04-14', 'Abepura', '', '', '', '0000-00-00', '', 0, 0, 57399, 0, 0, 0, 0, 3, 1, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (909, NULL, '47253__', '9114005', NULL, 'MUHAMMAD MUSTAQIM ', 'MMQ', '', '2020-09-01', '1991-06-02', 'Sukoharjo', '', '', '', '0000-00-00', '', 1, NULL, 48008, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (910, NULL, '111223_', '9118001', NULL, 'FIDHA JULIANA', 'FJN', '', '2020-09-01', '1991-07-09', 'Bekasi', 'Jl. Kampung Sawah RT. 04 RW 02 No. 43 Jatimurni Pondok Melati Bekasi 17431', '663021673432000', 'Jl. Kampung Sawah RT. 04 RW 02 No. 43 Jatimurni Pondok Melati Bekasi 17431', '0000-00-00', '2060231934', 1, 0, 47254, 3, 3, 2, 1, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (911, NULL, '9117001', '9117002', NULL, 'YUNUS MONOARFA', 'YMF', '', '2017-04-26', '1991-09-06', 'Wonggarasi Barat', '', '', '', '0000-00-00', '', 0, 0, 111224, 0, 0, 0, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (912, NULL, '69779__', '9116001', NULL, 'SITI UTAMI NURRAHMAH', 'SUN', '', '2020-09-01', '1991-10-25', 'Bogor', 'Kampung Batu Gede RT 06 RW 07 kelurahan cilebut barat kecamatan sukaraja kab bogor ', '', '', '0000-00-00', '', 1, NULL, 9117002, 3, 3, 3, 1, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (913, NULL, '9116002', '9116002', NULL, 'MUHAMMAD RIZKY PURNAMA', 'MRP', '', '2020-09-01', '1991-10-25', 'Bandung', '', '', '', '0000-00-00', '', 1, 0, 69780, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (914, NULL, '91248__', '9117003', NULL, 'ABDUL LATIF', 'ABL', '', '2020-09-01', '1991-11-27', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9116003, 3, 2, 3, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (915, NULL, '80946__', '9216001', NULL, 'AHMAD AKBAR', 'AKB', '', '2020-09-01', '1992-01-01', 'Lubuk Pakam', '', '', '', '0000-00-00', '', 0, 0, 91249, 3, 2, 3, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (916, NULL, '94532__', '9217001', NULL, 'PUTRI TIA PEBRIANI', 'PTP', '', '2020-09-01', '1992-02-20', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 80947, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (917, NULL, '32006__', '9214001', NULL, 'FARIS PRAMADIA RAMADHAN', 'FPR', '', '2020-09-01', '1992-03-02', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 94533, 3, 2, 3, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (918, NULL, '67360__', '9215001', NULL, 'DONA FATMAWATI', 'DFM', '', '2020-09-01', '1992-03-16', 'Cilacap', '', '', '', '0000-00-00', '', 1, 0, 32007, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (919, NULL, '46260__', '9214002', NULL, 'NIEKE RAHMA DIANINGTYAS', 'NRD', '', '2020-09-01', '0000-00-00', 'Jakarta', '', '', '', '0000-00-00', '', 1, NULL, 67361, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (920, NULL, '66591__', '9315001', NULL, 'OLAND OKTAVIANUS MASSIE', 'OOM', '', '2020-09-01', '1993-10-14', 'PALU', '', '', '', '0000-00-00', '', 1, 0, 46261, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 10);
INSERT INTO `m_karyawan` VALUES (921, NULL, '65386__', '9315002', NULL, 'GALIH PRIYAMBODO', 'GP', '', '2020-09-01', '1993-09-10', 'Surabaya', 'JL KH Abdul Karim gang 8 no 1, Gresik', '', '', '0000-00-00', '', 0, 0, 66592, 3, 2, 3, 0, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (922, NULL, '48020__', '9314001', NULL, 'TIGOR YUDY PRASTYO', 'TYP', '', '2020-09-01', '1993-07-22', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 65387, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (923, NULL, '101494_', '9318001', NULL, 'YOLANDA DWISTY DIANY', 'YDD', '', '2018-04-02', '1993-07-02', 'PADEGLANG', '', '', '', '0000-00-00', '', 0, 0, 48021, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (924, NULL, '90069__', '9317002', NULL, 'TEDY ANGGARA', 'TED', '', '2020-09-01', '1993-04-10', 'Purwokerto', '', '', '', '0000-00-00', '0457983591', 1, NULL, 101495, 3, 2, 3, 5, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (925, NULL, '71261__', '9316001', NULL, 'MUHAMMAD ZULPAN', 'MZ', '', '2016-02-26', '1993-03-14', 'MEDAN', '', '', '', '0000-00-00', '0573840549', 0, 0, 90070, 3, 2, 0, 5, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (926, NULL, '51579__', '9314002', NULL, 'ADRIAN RAMADHAN', 'AR', '', '2020-09-01', '1993-03-01', 'MALANG', '', '', '', '0000-00-00', '', 1, 0, 71262, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (927, NULL, '85747__', '9317003', NULL, 'ANDRIYANI DIAN SAFITRI', 'ADS', '', '2020-09-01', '1993-02-16', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 51580, 0, 3, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (928, NULL, '102222_', '9318002', NULL, 'SYLVIA', 'SYL', '', '2018-04-19', '1993-01-03', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 85748, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (929, NULL, '86483__', '9217001', NULL, 'SITI ELLIYANA', 'SEA', '', '2017-04-04', '1992-12-29', 'bangkalan', '', '', '', '0000-00-00', '', 0, 0, 102223, 0, 0, 0, 0, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (930, NULL, '62598__', '9215004', NULL, 'NINDY HEDYA AVIANDITA', 'NHA', '', '2020-09-01', '1992-11-17', 'BOGOR', 'Perumahan Ciluar Asri Blok A5 NO. 8B RT. 02 RW. 09 Kel. Ciluar Kec. Bogor Utara Kota Bogor', '', '', '0000-00-00', '0414881932', 1, 0, 86484, 3, 3, 3, 5, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (931, NULL, '38166__', '9214004', NULL, 'FAHMI NUR HIDAYAT', 'FNH', '', '2020-09-01', '1992-10-27', 'MALANG', '', '', '', '0000-00-00', '', 1, NULL, 62599, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', 17);
INSERT INTO `m_karyawan` VALUES (932, NULL, '52981__', '9214005', NULL, 'ABDILLAH RIZKI SIMATUPANG', 'ABR', '', '2020-09-01', '1992-10-25', 'manado', '', '', '', '0000-00-00', '', 1, 0, 38167, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 30);
INSERT INTO `m_karyawan` VALUES (933, NULL, '9217026', '9217026', NULL, 'GALIH DAMAS PRIAMBODO', 'GDP', '', '2020-09-01', '1992-10-17', 'SUKOHARJO', 'Perum Christa Residence 3 Blok A.03, RT 7 RW 6, Jatiasih, Kota Bekasi, Jawa Barat', '76.803.138.7-532.000', 'Jati Baru RT 2 RW 5, Kelurahan Cemani, Kecamatan Grogol, Kabupaten Sukoharjo, Jawa Tengah', '0000-00-00', '0901921609', 0, 0, 52982, 3, 2, 3, 5, 3, 1, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (934, NULL, '89522__', '9217002', NULL, 'FRIANDOST YUFAN MADAKARAH', 'FF', '', '2017-07-05', '1992-09-02', 'PADANG', '', '', '', '0000-00-00', '', 0, 0, 86765, 3, 2, 2, 14, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (935, NULL, '52716__', '9214002', NULL, 'ICHWAN HAMLY AZHARY', 'IHA', '', '2014-07-07', '1992-07-31', 'UJUNG PANDANG', '', '', '', '0000-00-00', '', 0, 0, 89523, 0, 0, 0, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (936, NULL, '67362__', '9215002', NULL, 'PRAMUDIANTO', 'PDO', '', '2020-09-01', '1992-06-16', 'GUNUNGG KIDUL', '', '', '', '0000-00-00', '', 1, 0, 52717, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 16);
INSERT INTO `m_karyawan` VALUES (937, NULL, '67361__', '9215003', NULL, 'DIAMOND PUTRA WARIM MARKUS', 'DWM', '', '2020-09-01', '1992-04-11', 'KUDUS', '', '', '', '0000-00-00', '', 1, 0, 67363, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (938, NULL, '52366__', '7814003', NULL, 'ABDUL NATA PRAWIRA', 'ABD', '', '2020-09-01', '1978-04-26', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 67362, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (939, NULL, '48009__', '9214003', NULL, 'ECEP MULYADI', 'EMD', '', '2020-09-01', '1992-03-28', 'Cianjur', '', '', '', '0000-00-00', '', 1, 0, 52367, 0, 2, 0, 0, 3, 2, '2019-08-31 08:39:31', 2);
INSERT INTO `m_karyawan` VALUES (940, NULL, '9219001', '9219001', NULL, 'AHMAD ADITIYA KARTA', 'AAK', '', '2019-02-21', '1992-09-19', 'TASIKMALAYA', 'Jl. Slamet Riyadi Raya No 123 RT 001/ RW 004 Kel. Kebon Manggis Kec. Matraman Jakarta Timur', '73.173.908.2-001.000', 'Jl. Sudimampir No.123 Rt 001/ 04 Kebon Manggis, Matraman, Jakarta Timur 13150', '0000-00-00', '1020007547299', 1, NULL, 48010, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (941, NULL, '9619002', '9619002', NULL, 'ATHORID DINATA', 'AD', '', '2019-02-27', '1996-12-10', 'JAKARTA ', 'Kp. Ujung Harapan RT 007/ RW 005 Kel. Bahagia Kec. Babelan Kota Bekasi Jawa Barat', '', '', '0000-00-00', '', 1, 0, 9219002, 0, 2, 0, 0, 3, 4, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (942, NULL, '84210177', '84210177', NULL, 'MOHAMAD FAUZI RAHMAN', 'MFR', '', '2019-03-04', '1984-10-19', 'JAKARTA ', 'Jl Cibubur I Gg. Taruna No.24 RT 002/ RW 012 Kel. Cibubur Kec. Ciracas Kota Jakarta Timur', '698650504009000', 'Jl. Taruna no 24 rt. 002 rw.012 kel cibubur kec ciracas jaktim 13720', '0000-00-00', '1670002980513', 1, 0, 9619003, 3, 2, 3, 10, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (943, NULL, '70210178', '70210178', NULL, ' ADWIN ALMINDO', 'AA', '', '2019-03-19', '1970-12-24', 'PADANG', 'Kp. Nanggela RT 004/ RW 005 Kel Sukmajaya Kec. Tajurhalang Kab Bogor Jawa Barat', '', '', '0000-00-00', '', 1, 0, 8419004, 3, 2, 0, 0, 12, 4, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (944, NULL, '9319005', '9319005', NULL, 'ANGGA RIBELTA', 'AR', '', '2019-03-28', '1993-09-04', 'PADANG', 'Jl. Purus II No 24 A RT 005/ RW 003 Kel. Purus Kec. Padang Barat Kota Padang Sumatera Barat', '', '', '0000-00-00', '', 1, 0, 7019005, 3, 2, 0, 0, 12, 4, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (945, NULL, '9519006', '9519006', NULL, 'RHENDY PAJARYANSYAH', 'RP', '', '2019-04-01', '1995-11-30', 'BANDUNG ', 'Kp. Bojong Asih RT 007/ RW 005 Kel Dayeuhkolot Kec. Dayeuhkolot Kab. Bandung Jawa Barat', '71.220.140.9-445.000', 'Kp. Bojong Asih RT 007/ RW 005 Kel Dayeuhkolot Kec. Dayeuhkolot Kab. Bandung Jawa Barat', '0000-00-00', '1330016299281', 1, NULL, 9319006, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (956, NULL, '', '9218001', NULL, 'TIARA NURUL ANGGRAENI', 'TNA', '', '2020-01-01', '1992-08-08', 'Bandung', 'Griya Kenari Mas blok F8/9, RT05 RW11, Cileungsi, Bogor\r\n', '', '', '0000-00-00', '', 0, 0, 5911002, 3, 3, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (957, NULL, '8918005', '8918005', NULL, 'KURNIAWAN BAYU NUGROHO', 'KBN', '', '2020-01-01', '1989-05-27', 'Jakarta', 'Jl. Blok duku no 31 Rt 07 Rw 10 Cibubur , jakarta timur \r\n', '', '', '0000-00-00', '', 1, NULL, 1, 3, 2, 2, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (958, NULL, '8918007', '8918007', NULL, 'DODI CAESAR MAULANA', 'DCM', '', '2020-01-01', '1989-10-17', 'Bogor', 'Kp. Rawa makmur Rt 003/ Rw 002 Desa Singajaya Kec. jonggol Kab. Bogor ', '668901259436000', 'Kp. Rawa mamur rt.003 rw.002 kel. Singajaya kec.jonggol bogor jawa barat', '0000-00-00', '1330011759628', 1, NULL, 8918006, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (959, NULL, '8418004', '8418004', NULL, 'SANDI AGUINO', 'SA', '', '2020-01-01', '1984-06-05', 'Jakarta', 'Perum Margahayu Jaya Jl.Beringin 1 Blok A/No.8 RT009/RW 014\r\n', '', '', '0000-00-00', '', 1, NULL, 8918007, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (960, NULL, '7618001', '7618001', NULL, 'BAMBANG KRISWANTORO', 'BK', '', '2020-01-01', '1976-10-28', 'Tegal', 'Jl.May Jend.Sutoyo Cawang III Rt002/007 kebonpala, makassar, jakarta timur ', '', '', '0000-00-00', '', 1, NULL, 8418002, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (961, NULL, '8518005', '8518005', NULL, 'SISKA', 'SIA', '', '2020-01-01', '1985-01-01', 'GM Baru', 'Jl Damai No 8 Rt06/01 setu, cipayung , Jakarta timur', '', '', '0000-00-00', '', 1, NULL, 7618002, 3, 3, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (962, NULL, '8118001', '8118001', NULL, 'DHIMAS ADI PUTRANTO', 'DA', '', '2020-01-01', '1981-03-06', 'Surakarta', 'Perum grand nusa indah cluster anthurium blok A5/25, cileungsi', '', '', '0000-00-00', '', 1, NULL, 8518004, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (963, NULL, '8318001', '8318001', NULL, 'MUHAMMAD ROSIDI', 'MR', '', '2020-01-01', '1983-07-14', 'Jakarta', 'Kp. Cikempong No 16 Rt 005/007, Pakansari, Cibinong, Bogor ', '66.857.396.7-403.000', 'KP. CIKEMPONG, 16, PAKANSARI, CIBINONG, KAB.\r\nBOGOR, JAWA BARAT', '0000-00-00', '', 1, NULL, 8118002, 3, 2, 3, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (964, NULL, '8418001', '8418001', NULL, 'NYIMAS FADHILAH', 'NF', '', '2020-01-01', '1984-02-16', 'PEUREULAK', 'Jl. Akasia raya Blok J2 No7 PHP Rt 05/011 pangasihan, rawalumbu, Bekasi\r\n', '', '', '0000-00-00', '', 1, NULL, 8318002, 3, 3, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (965, NULL, '8818001', '8818001', NULL, 'MUHAMMAD FUAD ASHARI', 'MF', '', '2020-01-01', '1988-11-15', 'Bogor', 'Jl. Attawabin No 4 Rt 006/002 Cilangkap, Tapos, Depok', '', '', '0000-00-00', '', 1, NULL, 8418002, 3, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (966, NULL, '8518003', '8518003', NULL, 'NUR HAERANI', 'NH', '', '2020-01-01', '1985-10-22', 'Makasar', '', '', '', '0000-00-00', '', 1, NULL, 8818002, 3, 3, 2, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (967, NULL, '8418002', '8418002', NULL, 'TAUFIK HIDAYAT', 'TH', '', '2020-01-01', '1984-07-12', 'Bogor', 'KP. Bojong RT 01 / 15 Desa. Cicadas Kec. Gunung Putri Kab. Bogor 16964', '898552146403000', 'KP. Bojong RT 01 / 15 Desa. Cicadas Kec. Gunung Putri Kab. Bogor 16964', '0000-00-00', '1330013301478', 1, NULL, 8518004, 3, 2, 3, 14, 3, 3, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (968, NULL, '8518004', '8518004', NULL, 'HEFFI DWI INDAH LESTARI UTAMI', 'HLU', '', '2020-01-01', '1985-07-22', 'Madiun', 'Metland Sektor 3 Blok E3 No.25 RT 06 RW 08 Cileungsi Bogor\r\n', '', '', '0000-00-00', '', 1, NULL, 8418003, 0, 3, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (969, NULL, '8918006', '8918006', NULL, 'ALBERT SIAHAAN', 'AS', '', '2020-01-01', '1989-11-25', 'Emplasmen KW Sawit', 'Perumahan Graha Selaras, Blok D7 No.12. Harapan Jaya, Cibinong - Cikaret, Bogor, Jawa Barat, 16914\r\n', '', '', '0000-00-00', '', 1, NULL, 8518005, 5, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (970, NULL, '8318002', '8318002', NULL, 'SANTHY BR SITEPU', 'SBS', '', '2018-01-01', '1983-04-26', 'Jakarta', 'Permata Depok jl. Mirah 3 L1 B-1 Rt11/07 pondok jaya, cipayung, depok ', '', '', '0000-00-00', '', 1, NULL, 8918007, 5, 3, 2, 0, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (971, NULL, '8818002', '8818002', NULL, 'HENDRA SAPUTRA', 'HS', '', '2020-01-01', '1988-10-05', 'Sukabumi', 'Pesona Prima cikahuripan 6 blok C4/20, Cikahuripan, Klapanunggal, Kab Bogor', '454515842436000', '', '0000-00-00', '9000007107965', 1, NULL, 8318003, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (972, NULL, '9718002', '9718002', NULL, 'ROSMIYATI', 'RSY', '', '2020-01-01', '1997-01-10', 'Tangerang', 'Kp. Tegal RT 001 / RW 001 Desa Jatisari, Kec Cileungsi Kab. Bogor ', '', '', '0000-00-00', '', 1, NULL, 8818003, 3, 3, 2, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (973, NULL, '7818001', '7818001', NULL, 'HENRY VALENTINO', 'HV', '', '2020-01-01', '1978-09-22', 'Jakarta', 'Jl. Talang Ujung No 40 Menteng Jakarta Pusat', '', '', '0000-00-00', '', 0, 0, 9718003, 3, 2, 3, 14, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (974, NULL, '8218002', '8218002', NULL, 'TAUFIQ RAHMAN AKBAR', 'TRA', '', '2020-01-01', '1982-08-21', 'Donggala', 'Jl. Raya Jonggol, Kp Cibucil RT. 05 / RW. 02 Desa Sukamanah, Jonggol Bogor', '713662872436000', 'Klapanunggal, Bogor', '0000-00-00', '1330016535361', 1, NULL, 7818002, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (975, NULL, '9318003', '9318003', NULL, 'KAMALUDIN', 'KML', '', '2020-01-01', '1993-03-29', 'Bogor', 'Kp. Tegal RT 021/006 Desa. Kembang Kuning Kec. Klapanunggal Kab. Bogor-Jawa Barat', '801286196436000', 'Kp. Tegal RT. 021 RW. 006 Kembang Kuning Klapanunggal Kab. Bogor Jawa Barat', '0000-00-00', '1330015137748', 1, NULL, 8218003, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (976, NULL, '9519003', '9519003', NULL, 'FIRMAN PUTRA UTAMA', 'FPU', '', '2020-09-01', '1995-11-17', 'Bogor', 'Jl Haji Entong, Cibadak , Tanah Sereal , Bogor', '', '', '0000-00-00', '1330012516993', 0, 0, 9318004, 3, 2, 3, 10, 3, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (977, NULL, '9418004', '9418004', NULL, 'MUHAMAD SAIPULLAH', 'MS', '', '2020-01-01', '1994-02-11', 'Bogor', 'Kp. Kedep, RT 01/18, Ds. Tlajung udik, Kec. Gunung putri, Kab. Bogor\r\n', '84.699.253.5-403.000', 'KP. KEDEP NO.43 RT.01 RW.18 TLAJUNG UDIK GUNUNG PUTRI KAB. BOGOR JAWA BARAT', '0000-00-00', '1330015137839', 1, NULL, 9519004, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (978, NULL, '8318003', '8318003', NULL, 'YOSEF IVANA', 'YI', '', '2020-01-01', '1983-11-27', 'Ciamis', 'Kp. Dungus Maung RT.01/02 Ds. Waluya Kec. Cicalengka Kab. Bandung-Jawa Barat', '243981685444000', 'Kp. Dungus Maung RT.01/02 Ds. Waluya Kec. Cicalengka Kab. Bandung-Jawa Barat', '0000-00-00', '9000032679673', 1, NULL, 9418005, 3, 2, 3, 14, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (979, NULL, '7918001', '7918001', NULL, 'KOSASIH', 'KSS', '', '2020-01-01', '1979-05-15', 'Bogor', 'Kp. Batuhulung RT.02/06 Ds. Bubulak Kec. Bogor Barat Kota Bogor-Jawa Barat\r\n', '58.626.067.1-404.000', 'kp.BATUHULUNG RT.001 RW.006 BUBULAK-BOGOR BARAT BOGOR', '0000-00-00', '1330011122025', 1, NULL, 8318004, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (980, NULL, '9618002', '9618002', NULL, 'WILDAN GERI SAPUTRA', 'WGS', 'assets/dokumen/foto/karyawan/thumb_new_980.jpg', '2020-01-01', '1996-03-02', 'Sukabumi', 'Jl. Selabintana RT. 04/02 Desa Sudajaya Girang Kec Sukabumi, Sukabumi-Jawa Barat\r\n', '', '', '0000-00-00', '', 0, 0, 7918002, 3, 2, 2, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (981, NULL, '7218001', '7218001', NULL, 'ALEX GUNAWAN', 'AG', '', '2020-01-01', '1972-04-17', 'Binuang', 'Komp. Herlina Perkasa Jl.Daun Salam no.67 sei.Andai Banjarmasin Utara 70122', '', '', '0000-00-00', '', 1, NULL, 9618003, 3, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (982, NULL, '9418005', '9418005', NULL, 'SYEHABUDIN', 'SYB', '', '2020-01-01', '1994-07-12', 'Bogor', 'Jln. Riverside Golf Kp. Cikuda Rt.22/10 Ds Bojong Nangka Kec Gunung Putri Bogor 16963\r\n', '', '', '0000-00-00', '', 1, NULL, 7218002, 3, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (983, NULL, '7818002', '7818002', NULL, 'HERMANSYAH', 'HRM', '', '2020-01-01', '1978-02-13', 'Bogor', 'Perum Lido Permai  blok D1/02 Rt. 04/05 Ds Ciburuy Kec Cigombong Kab Bogor\r\n', '', '', '0000-00-00', '', 1, NULL, 9418006, 3, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (984, NULL, '7018001', '7018001', NULL, 'MAMAN', 'MMN', '', '2020-01-01', '1970-09-16', 'Bogor', 'Blok Rawa Rt. 008/006 Ds Namgewer Kec Cibinong', '', '', '0000-00-00', '', 0, 0, 7818003, 3, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (985, NULL, '9418006', '9418006', NULL, 'PRATAMA PUTRA', 'PP', '', '2020-01-01', '1994-01-21', 'Padang', 'Taman Alamanda Blok B.2 No.1 Rt. 001/002 Ds. Karang Satria Kec. Tambun Utara', '', '', '0000-00-00', '', 1, NULL, 7018002, 3, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (986, NULL, '8418003', '8418003', NULL, 'BADRUDIN', 'BDD', '', '2020-01-01', '1984-12-09', 'Bogor', 'kp Warung Borong Rt 2/2 Bojong Rangkas, Ciampea Bogor\r\n', '', '', '0000-00-00', '9000034635731', 1, NULL, 9418007, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (987, NULL, '8118002', '8118002', NULL, 'SAEFUL BAHRI', 'SBR', '', '2020-01-01', '1981-08-02', 'Bogor', 'Kp. Rawa Hingkik Rt. 03/08 Ds. Cileungsi Kec Cileungsi', '', '', '0000-00-00', '', 1, NULL, 8418004, 3, 2, 3, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (989, NULL, '9419002', '9419002', NULL, 'ILA RAHMA CAHAYANI', 'IRC', '', '2019-05-20', '1994-12-06', 'JAKARTA', 'Pondok Ungui Permai Blok LL3 No 1 RT 006/ RW 022 Kel. Kaliabang Tengah Kec. Bekasi Utara Kota Bekasai Jawa barat\r\n', '', '', '0000-00-00', '', 0, 0, 9119002, 3, 3, 2, 0, 12, 4, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (990, NULL, '9623001', '9623001', NULL, 'LUDI SHEAB HAMIM', 'LSH', 'assets/dokumen/foto/karyawan/thumb_new_990.jpg', '2019-05-20', '1996-04-28', 'GARUT', 'Komp. Sarijadi Blok 3 No. 13 RT 004/ RW 002 Kel. Sarijadi Kec. Sukasari Kota Bandung Jawa Barat\r\n', '91.524.655.7-428.000', 'Komplek Sarijadi Blok 3 No. 13 RT. 004 RW. 002, Sarijadi, Sukasari, Kota Bandung, Jawa Barat', '0000-00-00', '1670003069613', 1, 0, 9419003, 3, 2, 3, 14, 3, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (991, NULL, '9319005', '93210038', NULL, 'SHALIHUDDIN DAFI', 'SD', '', '2019-06-12', '1993-05-06', 'BOGOR', 'KOTA BOGOR', '80.302.531.1-404.000', 'KOTA BOGOR', '0000-00-00', '0524601712', 1, 0, 9619004, 3, 2, 2, 5, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (992, NULL, '', '9619001', NULL, 'ALFIAN NASIR ', 'AN', '', '2019-06-12', '1996-10-11', 'Parangbaddo', '', '', '', '0000-00-00', '', 0, 0, 1, 0, 0, 0, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (993, NULL, '', '95210048', NULL, 'DEWI SRI RAHAYU', 'DSR', '', '2019-06-12', '1995-09-21', 'Garut', 'Kp. Seremped Barat RT 03 RW 04 Kelurahan Cibadak Kecamatan Tanah Sereal Kota Bogor', '', '', '0000-00-00', '', 1, 0, 1, 3, 3, 3, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (994, NULL, '95210047', '95210047', NULL, 'RAHMATIKA PUTRI', 'RP', '', '2019-06-12', '1995-05-26', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 1, 3, 3, 2, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (995, NULL, '94210053', '94210053', NULL, 'NUR FA’IZAH ABDULLAH', 'NFA', '', '2019-06-12', '1994-12-08', 'Belopa', '', '', '', '0000-00-00', '', 1, 0, 1, 0, 3, 0, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (996, NULL, '8919002', '8919002', NULL, 'TIAN SUROTO', 'TS', '', '2019-06-01', '1989-09-21', 'LIMA PULUH', 'Permata Laguna Blok A 4 No.39, Batu Aji, Batam\r\n', '', '', '0000-00-00', '', 1, 0, 9419002, 3, 2, 3, 0, 3, 4, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (997, NULL, '7719003', '7719003', NULL, 'YORDAN SUMPENA', 'YS', '', '2019-06-01', '1977-07-07', 'BANDUNG ', '\"Jl. Cilengkrang II RT.005/002 Kel. Palasari, Kec.Cibiru, Bandung\r\n\"\r\n', '', '', '0000-00-00', '', 1, 0, 8919003, 3, 2, 3, 0, 3, 4, '2019-08-31 08:39:31', 22);
INSERT INTO `m_karyawan` VALUES (998, NULL, '9319011', '9319011', NULL, 'SUPRIADI', 'SPI', '', '2019-06-01', '1993-03-02', 'AUR GADING', 'DS.SAWANG LEBAR KEC.TANJUNG AGUNG PALIK KAB. BENGKULU UTARA\r\n', '905164281328000', 'Aurgading, kerkap kab.bengkulu utara', '0000-00-00', '1790000328075', 1, 0, 7719004, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (999, NULL, '8519005', '8519005', NULL, 'MUNAWAR', 'MNW', '', '2019-06-01', '1985-08-17', 'BANDA ACEH', 'Jl. Wedana Lorong Geucik Ramli No. 3A, Lhong Cut, Banda Aceh\r\n', '', '', '0000-00-00', '', 1, 0, 9319005, 3, 2, 3, 0, 3, 4, '2019-08-31 08:39:31', 29);
INSERT INTO `m_karyawan` VALUES (1000, NULL, '8719006', '8719006', NULL, 'ISKANDAR LIKURWALA', 'IL', '', '2019-06-01', '1987-12-05', 'KAMPUNG BARU', '', '', '', '0000-00-00', '', 0, 0, 8519006, 3, 0, 3, 0, 3, 4, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1001, NULL, '7019007', '7019007', NULL, 'EDI SURIANDI', 'ES', '', '2019-06-01', '1970-12-24', 'PADANG', 'Jl. Tanjung Raya 2 Pontianak, Pontianak Timur, Kalimatan Barat\r\n', '', '', '0000-00-00', '', 1, 0, 8719007, 3, 2, 3, 0, 3, 4, '2019-08-31 08:39:31', 24);
INSERT INTO `m_karyawan` VALUES (1002, NULL, '8319008', '83220233', NULL, 'SYEH MUHAMMAD MARWANI', 'SMM', '', '2019-06-01', '1983-05-06', 'SURI PURUN', 'Jl Tanjung Raya 2 Gg. Mitra Jaya No. 2 Rt 006/ RW 005 Kel. Banjar Serasan Kec. Pontianak Timur Kota Pontianak Kalimantan Barat\r\n', '', '', '0000-00-00', '', 0, 0, 7019008, 3, 2, 3, 0, 12, 4, '2019-08-31 08:39:31', 24);
INSERT INTO `m_karyawan` VALUES (1003, NULL, '8819009', '8819009', NULL, 'LODIWIK LUDJI NGURU', 'LLN', '', '2019-06-01', '1988-05-02', 'MAPIPA', 'Jl. Swakarya 2 No. 8 RT 010/ RW 003 Kel. Kuanino Kec,. Kota Raja Kota Kupang Nusa Tenggara Timur\r\n', '', '', '0000-00-00', '', 1, 0, 8319009, 5, 2, 3, 0, 3, 4, '2019-08-31 08:39:31', 20);
INSERT INTO `m_karyawan` VALUES (1004, NULL, '7719010', '7719010', NULL, 'BUKHARI YUS', 'BY', '', '2019-06-01', '1977-11-01', 'MEDAN ', 'Jl Kanna II No. I Kel. Balaroa Kec. Palu Barat Kota Palu Sulawesi Tengah\r\n', '', '', '0000-00-00', '', 0, 0, 8819010, 3, 0, 3, 0, 3, 4, '2019-08-31 08:39:31', 10);
INSERT INTO `m_karyawan` VALUES (1005, NULL, '9419004', '9419004', NULL, 'NITA NIRWANA', 'NN', '', '2020-01-01', '1994-04-23', 'Medan', 'Vila Bogor Indah Blok H4 No. 8, Bogor Utara', '', '', '0000-00-00', '', 1, NULL, 7719011, 3, 3, 2, 0, 3, 3, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1006, NULL, '8119005', '8119005', NULL, 'ANDI RETMOKO NUGROHO', 'ARN', '', '2019-08-01', '1981-03-02', 'CILACAP', 'Jl. Jambumete No. 106 Kel. Tambakreja Kec. Cilacap jawa Tengah\r\n', '', '', '0000-00-00', '', 1, 0, 9419005, 0, 2, 2, 0, 3, 4, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (1007, NULL, '9719006', '97220228', NULL, 'KEVIN RIZKI FADILLAH', 'KRF', '', '2019-08-01', '1997-07-19', 'LHOKSEUMAWE', 'Koto Baru RT 000/ RW 000 Kel. Kubang Kec. Guguak Kab. Lima Puluh Kota Sumatera barat\r\n', '', '', '0000-00-00', '', 1, 0, 8119006, 3, 2, 2, 0, 12, 4, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (1008, NULL, '95220243', '95220243', NULL, 'RUDIANSYAH HAJMI HARAHAP', 'RHH', '', '2019-08-01', '1995-06-26', 'MEDAN ', 'Jl. Jermal VII Gg. Murni XIV No. 9 RT 000/ RW 000 Kel. Denai Kec. Medan Denai Kota Medan Sumatera Utara\r\n', '', '', '0000-00-00', '1670003180162', 1, NULL, 9719007, 3, 2, 3, 14, 12, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (1009, NULL, '9119008', '9119008', NULL, 'AVIAN DWI NOFYANTO', 'ADN', '', '2019-08-01', '1991-11-05', 'JAKARTA', 'Komp. Inkopad Blok G-26/28 RT 003/ RW 006 Kel. Sasakpanjang Kec. Tajurhalang Kab. Bogor Jawa Barat\r\n', '90.614.175.9-403.000', 'Komp. Inkopad Blok G-26/28 RT 003/ RW 006 Kel. Sasakpanjang Kec. Tajurhalang Kab. Bogor Jawa Barat', '0000-00-00', '1330016454324', 1, NULL, 9519008, 3, 2, 3, 10, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (1010, NULL, '9519009', '9519009', NULL, 'DONNI DONALD SOGALREY', 'DDS', '', '2019-08-01', '1995-04-07', 'KAMAL', 'Jl. Tanjung Ria RT 005/ RW 005 Kel. Tanjung Ria Kec. Jayapura Utara Kota Jayapura Papua', '', '', '0000-00-00', '', 1, 0, 9119009, 0, 2, 2, 0, 12, 4, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1011, NULL, '9417002', '94210090', NULL, 'RAFIKA SORAYA LUFTIYANI', 'RSL', '', '2017-07-01', '1994-05-17', 'Wonosobo', 'Perum Purnamandala Blok Z-5 RT 003 RW 005 Bumireso Wonosobo Jawa Tengah\r\n', '', '', '0000-00-00', '', 1, 0, 9519010, 3, 3, 3, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1012, NULL, '96210099', '96210099', NULL, 'FIKRI RAMDHANI HARDIANSYAH', 'FRH', '', '2017-11-01', '1996-01-31', 'Bogor', 'KP.Cimanglid RT 003 RW 002 Kel/Desa : Sukamantri, Kecamatan : Tamansari\r\n', '', '', '0000-00-00', '', 1, 0, 9417003, 3, 2, 2, 0, 12, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (1013, NULL, '9617003', '9617003', NULL, 'MUHAMMAD ROKIB', 'MR', '', '2017-11-01', '1996-05-22', 'Bangkalan', 'Bojong Enyod RT 003 RW 012 Desa/Kel : Tegal Gundil, Kecamatan : Bogor Utara\r\n', '', '', '0000-00-00', '', 0, 0, 9617003, 3, 2, 2, 0, 12, 2, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (1014, NULL, '9617004', '96210101', NULL, 'MUHAMMAD RIJALLUDDIN', 'MRJ', '', '2017-11-01', '1996-06-05', 'Bogor', 'Jl. Sindang barang pengkolan RT 01/04 Kelurahan Sindang Barang, Kecamatan Bogor Barat', '', '', '0000-00-00', '', 1, 0, 9617004, 3, 2, 2, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1015, NULL, '9517037', '95210089', NULL, 'ZAKKA FAQIHUL UMAM', 'ZFU', '', '2017-07-01', '1995-03-21', 'Kendal', 'Jl. Manggisan No.08 RT 02 RW 04 Kendal, Jawa Tengah 51314', '', '', '0000-00-00', '', 1, 0, 9617005, 3, 2, 3, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1016, NULL, '8217002', '8217002', NULL, 'OKY MARIYATONANG', 'OM', '', '2017-11-01', '1982-09-12', 'Surabaya', 'Jl.Fajar 2 Blok F3/36 RT 003 RW 006 Desa/Kel : Cipondoh Makmur, Kecamatan : Cipondoh', '', '', '0000-00-00', '', 0, 0, 9517038, 3, 2, 2, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1017, NULL, '9418007', '9418007', NULL, 'MALIKI PRADHANA', 'MP', '', '2018-02-01', '1994-03-18', 'Purworejo', 'Komplek BPPB Jl Beruang No.A6', '', '', '0000-00-00', '', 0, 0, 8217003, 3, 2, 3, 0, 12, 1, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1018, NULL, '9317004', '93210096', NULL, 'MAULANA KAMIL', 'MK', '', '2017-11-01', '1993-12-31', 'Bekasi', 'Jl.Bougenvile Blok J No.109 RT 016 RW 011. Kel/Desa : Jatimulya, Kecamatan : Tambun Selatan', '', '', '0000-00-00', '', 1, 0, 9418008, 3, 2, 2, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1019, NULL, '9419005', '9419005', NULL, 'AGUNG ARAHMAN', 'AA', '', '2019-08-13', '1994-10-04', 'CIAMIS ', 'Jalan Kawali - Panjalu No. 124 RT 001/ RW 001 Tanjung Jaya Ds Margamulya Kec. Kawali Kab. Ciamis Jawa Barat', '86.109.677.4-442.000', 'TANJUNG JAYA RT/RW 01/01 MARGAMULYA, KAWALI, KAB. CIAMIS JAWA BARAT', '0000-00-00', '326301023123539', 1, NULL, 9317005, 3, 2, 2, 6, 3, 0, '2019-08-31 08:39:31', 5);
INSERT INTO `m_karyawan` VALUES (1020, NULL, '9519008', '9519008', NULL, 'DARUL KUTHNI', 'DK', '', '2019-08-15', '1995-05-23', 'MEDAN', 'Jl. ABD Hakim Gg.Ceriwis No. 9-C RT 000/ RW 000 Kel. Tanjung Sari Kec. Medan Selayang Kota Medan Sumatera Utara', '', '', '0000-00-00', '', 1, 0, 9419002, 3, 2, 2, 0, 3, 0, '2019-08-31 08:39:31', 6);
INSERT INTO `m_karyawan` VALUES (1021, NULL, '8419038', '84210039', NULL, 'HERDIYAN FERDIANSYAH', 'HF', '', '2019-08-01', '1984-01-28', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 9519003, 3, 2, 3, 0, 12, 2, '2019-08-31 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1022, NULL, '9519039', '9519039', NULL, 'STEFANUS DEKA KUSUMA SEPTIANDA', 'SKS', '', '2019-09-03', '1995-09-05', 'JAKARTA ', 'Jl. Dalang No. 40 RT 013/ RW 005 Kel. Munjul Kec. Cipayung Kota Jakarta Timur DKI Jakarta 13850', '', '', '0000-00-00', '0348521938', 1, 0, 8419039, 3, 2, 2, 5, 3, 1, '2019-09-03 12:33:20', 5);
INSERT INTO `m_karyawan` VALUES (1023, NULL, '9519040', '95210212', NULL, 'BELA RETNO FELAYATI', 'BRF', '', '2019-09-05', '1995-06-10', 'BANGKALAN', 'Kmp. Galisan RT -/ RW - Kel. Bandung Kec. Konang Kab. Bangkalan Jawa Timur', '', '', '0000-00-00', '', 0, 0, 9519040, 3, 3, 0, 0, 12, 4, '2019-09-05 13:09:13', NULL);
INSERT INTO `m_karyawan` VALUES (1024, NULL, '7613041', '760062', NULL, 'SANG KOMPIANG MULIARTAWAN', 'SKM', '', '2013-10-01', '1976-09-23', 'BANGLI', 'Puri Sriwedari Blok L/16 RT. 002/RW. 012\r\nHarjamukti', '07.268.543.1.061.000', '', '2013-12-24', '', 0, 0, 9519041, 2, 2, 3, 0, 9, 1, '2019-09-24 16:50:04', NULL);
INSERT INTO `m_karyawan` VALUES (1025, NULL, '6519001', '651147', NULL, 'ANDY REVARA (PLT. DIREKTUR UTAMA)', 'REV', 'assets/dokumen/foto/karyawan/thumb_new_1025.jpg', '2016-05-02', '1965-10-11', 'JAKARTA ', '', '', '', '0000-00-00', '', 0, NULL, 7613042, 3, 2, 3, 0, 4, 4, '2019-10-14 16:07:51', NULL);
INSERT INTO `m_karyawan` VALUES (1026, NULL, '6516002', '651147 ', NULL, 'ANDY REVARA (PGS. DIRECTOR OF COMMERCE)', 'REVR', 'assets/dokumen/foto/karyawan/thumb_new_1026.jpg', '2016-05-02', '1965-10-11', 'JAKARTA', '', '', '', '0000-00-00', '', 0, NULL, 6519002, 3, 2, 3, 0, 4, 4, '2019-10-14 16:11:53', NULL);
INSERT INTO `m_karyawan` VALUES (1027, NULL, '9119003', '9119003', NULL, 'KEVIN OXADIAS', 'KO', '', '2019-10-01', '1991-05-01', 'SEMARANG  ', 'Perum Villa Duta Jalan Katumbiri No 1,Kel. Baranangsiang Kec Bogor Timur', '73.254.978.7-404.000', 'Jl. Katumbiri no. 1 Villa Duta Bogor', '0000-00-00', '1260006679111', 1, NULL, 6516003, 3, 2, 0, 10, 3, 0, '2019-10-16 15:31:41', 6);
INSERT INTO `m_karyawan` VALUES (1028, NULL, '9619004', '9619004', NULL, 'RIZEILLA VALENZYA', 'RV', '', '2019-10-01', '1996-04-26', 'JAKARTA', 'BULEVAR HIJAU D1/37, BEKASI BARAT', '', '', '0000-00-00', '', 0, NULL, 9119002, 5, 3, 2, 0, 3, 1, '2019-10-16 15:38:54', NULL);
INSERT INTO `m_karyawan` VALUES (1029, NULL, '9719005', '9719005', NULL, 'ROMY SYAWALDI', 'RS', '', '2019-11-01', '1997-02-19', 'DURI RIAU', 'Jl Sukajadi II RT 004/ RW 005 Desa Tambusai Batang Dui Kec. Mandau Kab. Bengkalis Kota Duri Prov. Riau 28784', '964503361219000', 'KKP PRATAMA BENGKALIS', '0000-00-00', '1720000357444', 1, NULL, 9619005, 3, 2, 2, 14, 3, 0, '2019-11-06 11:14:29', 32);
INSERT INTO `m_karyawan` VALUES (1030, NULL, '6516006', '651147', NULL, 'ANDY REVARA (PGS. DIRECTOR OF FINANCE & ADMINISTRATION)', 'REVRA', '', '2016-05-02', '1965-10-11', 'JAKARTA', '', '', '', '0000-00-00', '', 0, NULL, 9719006, 3, 2, 3, 0, 4, 4, '2019-11-11 17:07:29', NULL);
INSERT INTO `m_karyawan` VALUES (1031, NULL, '97210216', '97210216', NULL, 'PUTRYAS DHIKA PERMATASARI', 'PDP', '', '2019-11-13', '1997-05-31', 'SAMARINDA', 'Perum Cilebut Residence Adhenium Blok G2 No.5 RT 011/ RW 017 Kel. Cilebut Barat Kec. Sukaraja Kab. Bogor Jawa Barat 16711', '', '', '0000-00-00', '', 1, 0, 6516007, 3, 3, 2, 0, 12, 4, '2019-11-15 16:20:45', 6);
INSERT INTO `m_karyawan` VALUES (1032, NULL, '8519002', '8519002', NULL, 'HERLIANA RACHMA NITA', 'HRN', '', '2019-11-20', '1985-10-20', 'BOGOR', 'Cikeas, RT 001/ RW 010 Kec. Gunung Putri  Kab. Bogor Jawa Barat ', '', '', '0000-00-00', '', 1, NULL, 9719002, 3, 3, 3, 0, 3, 0, '2019-11-27 14:02:06', NULL);
INSERT INTO `m_karyawan` VALUES (1033, NULL, '9119004', '9119004', NULL, 'VIKA NURSANI', 'VN', '', '2020-09-01', '1991-07-03', 'UJUNG PANDANG', '', '', '', '0000-00-00', '', 1, NULL, 8519003, 3, 3, 2, 0, 3, 0, '2019-11-29 15:56:55', 11);
INSERT INTO `m_karyawan` VALUES (1034, NULL, '9219004', '9219004', NULL, 'RISNO ARIANDI', 'RA', '', '2020-09-01', '1992-08-28', 'UJUNG PANDANG', '', '', '', '0000-00-00', '', 1, 0, 9119004, 0, 2, 0, 0, 3, 2, '2019-11-29 16:04:35', 11);
INSERT INTO `m_karyawan` VALUES (1035, NULL, '8419005', '8419005', NULL, 'JHON SUDARLI', 'JS', '', '2020-09-01', '1984-01-01', 'Kakiang', 'Dusun Unter Gedong RT. 02 RW. 07\r\nDesa Uma Beringin\r\nKecamatan Unter Iwes\r\nKabupaten Sumbawa\r\nSumbawa Besar\r\nNusa Tenggara Barat\r\nIndonesia', 'Jhon Sudarli', 'Dusun Unter Gedong RT. 02 RW. 07\r\nDesa Uma Beringin\r\nKecamatan Unter Iwes\r\nKabupaten Sumbawa\r\nSumbawa Besar\r\nNusa Tenggara Barat\r\nIndonesia', '0000-00-00', '1450006833608', 1, NULL, 9219005, 3, 2, 3, 14, 3, 0, '2019-11-29 16:09:26', 19);
INSERT INTO `m_karyawan` VALUES (1036, NULL, '8319006', '8319006', NULL, 'SAHRUL HADI', 'SH', '', '2020-09-01', '1983-12-03', 'Moncok Karya', '', '', '', '0000-00-00', '', 1, 0, 8419006, 0, 2, 0, 0, 3, 2, '2019-11-29 16:11:53', 19);
INSERT INTO `m_karyawan` VALUES (1037, NULL, '8219007', '8219007', NULL, 'MUNAWIR SAPUTRA', 'MS', '', '2020-09-01', '1982-09-22', 'Lhoksukon', '', '', '', '0000-00-00', '', 1, 0, 8319007, 0, 2, 0, 0, 3, 2, '2019-11-29 16:14:30', 29);
INSERT INTO `m_karyawan` VALUES (1038, NULL, '9119005', '9119005', NULL, 'CIPTA NUGRAHA', 'CN', '', '2020-09-01', '1991-11-25', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 8219008, 3, 2, 0, 0, 3, 2, '2019-11-29 16:22:08', 6);
INSERT INTO `m_karyawan` VALUES (1039, NULL, '8519009', '8519009', NULL, 'DARLON SIPAHELUT', 'DS', '', '2020-09-01', '1985-05-21', 'Allang', '', '', '', '0000-00-00', '', 1, 0, 9119009, 0, 2, 0, 0, 3, 2, '2019-11-29 16:25:12', 3);
INSERT INTO `m_karyawan` VALUES (1040, NULL, '9419010', '9419010', NULL, 'DHIBA MAIZURA JANUARITA', 'DMJ', '', '2020-09-01', '1994-01-02', 'BOGOR', 'Bogor Raya Permai, FF1 No. 2, Bogor', '', '', '0000-00-00', '1330020230256', 1, NULL, 8519010, 3, 3, 3, 10, 3, 0, '2019-11-29 16:29:03', NULL);
INSERT INTO `m_karyawan` VALUES (1041, NULL, '9019011', '9019011', NULL, 'MARASTIKA WICAKSONO AJI BAWONO', 'MAB', 'assets/dokumen/foto/karyawan/thumb_new_1041.jpg', '2020-09-01', '1995-02-11', 'Magelang', 'Perumahan Polri (Jl. Kav. Polri Blok H, RT.5/RW.6, Jagakarsa, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550)', '70.538.663.9-403.000', '', '0000-00-00', '1640001710765', 1, NULL, 9419011, 3, 2, 3, 10, 3, 0, '2019-11-29 16:31:18', NULL);
INSERT INTO `m_karyawan` VALUES (1042, NULL, '9419012', '9419012', NULL, 'MILKA SARI DEWI', 'MSD', '', '2020-09-01', '1994-05-25', 'MAKASSAR', '', '', '', '0000-00-00', '', 1, 0, 9019012, 0, 3, 0, 0, 3, 2, '2019-11-29 16:33:57', 2);
INSERT INTO `m_karyawan` VALUES (1043, NULL, '9219003', '9219003', NULL, 'IRPAN JAINAL', 'IJ', '', '2020-09-01', '1992-06-07', 'SORONG', '', '', '', '0000-00-00', '', 1, 0, 9419013, 0, 2, 0, 0, 3, 2, '2019-11-29 16:37:40', 8);
INSERT INTO `m_karyawan` VALUES (1044, NULL, '8719014', '8719014', NULL, 'MUHAMAD SARIPUDIN', 'MS', '', '2020-09-01', '1987-04-05', 'JAKARTA ', '', '', '', '0000-00-00', '', 1, NULL, 9219014, 3, 2, 0, 0, 3, 0, '2019-11-29 16:41:14', 6);
INSERT INTO `m_karyawan` VALUES (1045, NULL, '9419015', '9419015', NULL, 'MEAZZA PUTRA KUSUMA', 'MPK', '', '2019-12-02', '1994-05-28', 'BEKASI ', 'Villa Indah Permai Blok H 26 No.9 RT 008/ RW 035 Kel Teluk Pucung Kec. Bekasi Utara Kota Bekasi Prov Jawa Barat', '', '', '0000-00-00', '', 0, 0, 8719015, 0, 2, 2, 0, 12, 4, '2019-12-02 17:24:06', NULL);
INSERT INTO `m_karyawan` VALUES (1046, NULL, '9519060', '9519060', NULL, 'ADHE ILHAM HAWARI GUSTI', 'AHG', '', '2020-09-01', '1995-10-24', 'Balikpapan', '', '', '', '0000-00-00', '', 1, NULL, 9419016, 3, 2, 2, 0, 3, 0, '2019-12-20 16:46:47', NULL);
INSERT INTO `m_karyawan` VALUES (1047, NULL, '9119029', '9119029', NULL, 'RAHMAT DARMAJI', 'RD', '', '2020-09-01', '1991-04-03', 'WONOGIRI', '', '', '', '0000-00-00', '', 0, 0, 9519061, 0, 2, 0, 0, 3, 2, '2019-12-26 10:42:45', NULL);
INSERT INTO `m_karyawan` VALUES (1048, NULL, '9219043', '9219043', NULL, 'CARRISYA HABIBAH SABRINA', 'CHS', '', '2020-09-01', '1992-10-07', 'SUBANG', '', '', '', '0000-00-00', '', 0, 0, 9119030, 3, 3, 2, 10, 3, 1, '2019-12-26 10:46:42', NULL);
INSERT INTO `m_karyawan` VALUES (1049, NULL, '9419059', '9419059', NULL, 'AHMAD BUSAIRY', 'AB', '', '2020-09-01', '1994-02-11', 'JAKARTA ', 'RAHASIA', 'RAHASIA', 'RAHASIA', '0000-00-00', '9000030360714', 0, 0, 9219044, 3, 2, 3, 10, 3, 1, '2019-12-26 10:51:00', NULL);
INSERT INTO `m_karyawan` VALUES (1050, NULL, '9619005', '9619005', NULL, 'MUHAMMAD RIFQI AULIYA', 'MRA', '', '2020-09-01', '1996-06-03', 'JAKARTA ', '', '', '', '0000-00-00', '', 0, 0, 9419060, 0, 2, 0, 0, 3, 2, '2019-12-26 10:53:37', NULL);
INSERT INTO `m_karyawan` VALUES (1051, NULL, '8819032', '8819032', NULL, 'BENNY DANIARSA', 'BD', '', '2019-09-16', '1988-10-18', 'BOGOR', '', '', '', '0000-00-00', '', 0, 0, 9619006, 0, 0, 0, 0, 3, 2, '2019-12-26 10:56:41', NULL);
INSERT INTO `m_karyawan` VALUES (1052, NULL, '9519061', '9519061', NULL, 'DWI PUTRIANA PRATIWI', 'DPP', '', '2020-09-01', '1995-08-10', 'BEKASI ', '', '', '', '0000-00-00', '', 0, 0, 8819033, 0, 3, 3, 0, 3, 1, '2019-12-26 10:58:44', NULL);
INSERT INTO `m_karyawan` VALUES (1053, NULL, '9219044', '9219044', NULL, 'EGGIS RAFDANI', 'ER', '', '2020-09-01', '1992-10-23', 'MATARAM', '', '', '', '0000-00-00', '', 1, 0, 9519062, 3, 2, 0, 0, 3, 2, '2020-01-13 13:39:10', NULL);
INSERT INTO `m_karyawan` VALUES (1054, NULL, '96210214', '96210214', NULL, 'ADILAH ADABIYAH PRAWESTRI', 'AAP', '', '2020-01-01', '1996-04-12', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 9219045, 3, 3, 2, 0, 12, 4, '2020-01-22 14:21:48', 6);
INSERT INTO `m_karyawan` VALUES (1055, NULL, '99210215', '99210215', NULL, 'GISELLA ERIA PRASTIKA', 'GEP', '', '2020-01-01', '1999-07-24', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 9620002, 3, 3, 2, 0, 12, 4, '2020-01-22 14:26:22', 6);
INSERT INTO `m_karyawan` VALUES (1056, NULL, '9520001', '9520001', NULL, 'CHARLA LESLY VERA', 'CLV', '', '2020-01-01', '1995-02-10', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 9920002, 0, 3, 0, 0, 3, 3, '2020-01-30 14:23:14', NULL);
INSERT INTO `m_karyawan` VALUES (1057, NULL, '9420001', '9420001', NULL, 'HERY WIDODO', 'HW', '', '2020-01-01', '1994-05-16', 'BEKASI ', '', '', '', '0000-00-00', '1560015560941', 1, NULL, 9520002, 3, 2, 3, 10, 3, 0, '2020-01-30 14:27:57', NULL);
INSERT INTO `m_karyawan` VALUES (1058, NULL, '9320001', '9320001', NULL, 'IBNU HARTIANTO', 'IH', '', '2020-01-01', '1993-12-22', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 9420002, 0, 2, 0, 0, 3, 3, '2020-01-30 14:29:37', NULL);
INSERT INTO `m_karyawan` VALUES (1059, NULL, '9320002', '9320002', NULL, 'RADIUS DERI IBRAHIM', 'RDI', '', '2020-01-01', '1993-12-20', 'PAUH', '', '', '', '0000-00-00', '', 1, NULL, 9320002, 3, 2, 0, 0, 3, 0, '2020-01-30 14:32:35', NULL);
INSERT INTO `m_karyawan` VALUES (1060, NULL, '9419060', '9419060', NULL, 'MEIZHA PUTRA HIDAYAT', 'MPH', '', '2019-06-26', '1994-05-19', 'DEPOK', '', '', '', '0000-00-00', '', 0, 0, 9320003, 0, 2, 0, 0, 12, 2, '2020-02-12 09:12:23', NULL);
INSERT INTO `m_karyawan` VALUES (1061, NULL, '9418026', '94210042', NULL, 'LUCKY SATRIONUGROHO', 'LS', '', '2018-02-26', '1994-05-24', '--', '', '', '', '0000-00-00', '', 1, 0, 9419061, 0, 2, 0, 0, 12, 2, '2020-02-18 15:14:38', NULL);
INSERT INTO `m_karyawan` VALUES (1062, NULL, '95210044', '95210044', NULL, 'JUL TEGUH ARIANSYAH', 'JTA', '', '2018-02-26', '1995-07-01', 'Ujung Pandang', '', '', '', '0000-00-00', '', 1, NULL, 9418027, 3, 2, 2, 0, 12, 0, '2020-02-18 15:16:22', NULL);
INSERT INTO `m_karyawan` VALUES (1063, NULL, '8913001', '8913001', NULL, 'SAMLAWI', 'SMW', '', '2020-02-01', '1987-10-08', 'BOGOR', 'JL. AMD RAYA NO 39 BABAKAN  NO 4 RT 001 RW 004 KEC. CISEENG KAB. BOGOR', '830879334434000', 'JL. AMD RAYA NO 39 BABAKAN  NO 4 RT 001 RW 004 KEC. CISEENG KAB. BOGOR', '0000-00-00', '', 1, NULL, 9518034, 3, 2, 2, 0, 3, 0, '2020-02-21 09:44:01', NULL);
INSERT INTO `m_karyawan` VALUES (1064, NULL, '9720001', '97210209', NULL, 'REKA PUTRI MANDIRI', 'RPM', '', '2020-02-17', '1997-08-03', 'SUKABUMI', '', '', '', '0000-00-00', '', 1, 0, 8913002, 3, 3, 0, 0, 12, 4, '2020-02-27 14:49:16', NULL);
INSERT INTO `m_karyawan` VALUES (1065, NULL, '9716026', '9716026', NULL, 'ADITYA ABDI', 'AA', '', '2021-01-01', '1997-03-09', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 9720002, 3, 2, 2, 0, 3, 2, '2020-03-10 16:33:57', NULL);
INSERT INTO `m_karyawan` VALUES (1066, NULL, '9720002', '97210211', NULL, 'REZA RIZKI PERDANA', 'RRP', '', '2020-03-01', '1997-09-04', 'SURABAYA', '', '', '', '0000-00-00', '', 1, 0, 9716027, 3, 2, 2, 0, 12, 1, '2020-03-13 14:34:15', NULL);
INSERT INTO `m_karyawan` VALUES (1067, NULL, '94210046', '94210046', NULL, 'ZAINUDDIN', 'ZND', '', '2017-02-26', '1994-05-15', 'SINJAI', '', '', '', '0000-00-00', '', 1, 0, 9720003, 3, 2, 3, 0, 12, 1, '2020-03-23 15:55:17', NULL);
INSERT INTO `m_karyawan` VALUES (1068, NULL, '735013_', '735632', NULL, 'WUWUH NUGROHO', 'WN', 'assets/dokumen/foto/karyawan/thumb_new_1068.jpg', '2018-09-13', '1973-05-11', '--', '', '', '', '0000-00-00', '', 0, 0, 9417052, 0, 2, 0, 0, 5, 2, '2020-04-10 11:50:10', NULL);
INSERT INTO `m_karyawan` VALUES (1069, NULL, '7296001', '720238', NULL, 'SUROSO YULIANTO, ST. MT.', 'SSM', 'assets/dokumen/foto/karyawan/thumb_new_1069.jpg', '2020-01-01', '1972-07-21', 'PURWOREJO ', '', '', '', '1996-11-01', '', 1, 0, 735014, 0, 2, 0, 0, 4, 3, '2020-04-10 11:56:34', NULL);
INSERT INTO `m_karyawan` VALUES (1070, NULL, '9718003', '97210105', NULL, 'WILLY HARYANA', 'WH', '', '2018-04-10', '1997-03-04', 'Bogor', 'Kp Kaum Sari RT 03/05 Kel. Cibuluh Kec.Bogor Utara', '', '', '0000-00-00', '0700590082', 1, 0, 7296002, 3, 2, 3, 5, 12, 1, '2020-04-20 11:13:20', 6);
INSERT INTO `m_karyawan` VALUES (1071, NULL, '9519062', '9519062', NULL, 'AVICENNA KEVAL HASSAN', 'AKH', '', '2019-07-26', '1995-05-11', 'Bogor', 'Taman Dramaga Indah Jalan Intan Blok H-13 Dramaga, Bogor', '', '', '0000-00-00', '0330608659', 0, 0, 9718004, 0, 2, 2, 5, 12, 2, '2020-04-20 11:16:29', NULL);
INSERT INTO `m_karyawan` VALUES (1072, NULL, '9518034', '95210108', NULL, 'REZTA SATRIA P', 'RSP', '', '2018-07-26', '1995-10-17', 'Yogyakarta', 'Taman Pondok Cabe C1/No.1 RT 002 RW 008 Kel/Desa : Pondok Cabe Udik,Pamulang', '', '', '0000-00-00', '0026301500045895', 1, 0, 9519063, 3, 2, 2, 15, 12, 2, '2020-04-20 11:18:45', 6);
INSERT INTO `m_karyawan` VALUES (1073, NULL, '9517510', '95210098', NULL, 'BAGUS TRI ASTADI', 'BTA', '', '2017-11-06', '1995-05-31', 'Bantul', 'Pangkah RT 001 Kel/Desa : Sumberagung, Kecamatan : ', '', '', '0000-00-00', '1370010752588', 0, 0, 9518035, 3, 2, 2, 10, 12, 2, '2020-04-20 11:27:15', 6);
INSERT INTO `m_karyawan` VALUES (1074, NULL, '9517511', '95210102', NULL, 'RIZQIANA PUTRI F.', 'RPF', 'assets/dokumen/foto/karyawan/thumb_new_1074.jpg', '2017-11-26', '1995-08-14', 'Jakarta', 'Bumi Mutiara Blok JC 1 No. 6 RT 001 RW 033. Bj. Kulur, Gn. Putri, Bogor', '', '', '0000-00-00', '0808069501', 0, 0, 9517511, 3, 3, 2, 17, 12, 2, '2020-04-20 11:30:12', 6);
INSERT INTO `m_karyawan` VALUES (1075, NULL, '6520001', '651294', NULL, 'HANIFAH', 'HFH', '', '2020-05-01', '1965-05-29', 'MEDAN', ' Jl Brawijaya No 8G Perumahan Vila Indah Pajajaran Bogor', '092175215404000', 'PERUM INDRAPRASTA II JL. DRUPADA II NO.6 RT:001 RW:014, TEGAL GUNDIL, BOGOR UTARA', '0000-00-00', '', 0, 0, 9517512, 3, 3, 3, 10, 4, 1, '2020-04-30 10:24:59', NULL);
INSERT INTO `m_karyawan` VALUES (1076, NULL, '9217027', '92210086', NULL, 'SITI NURJANAH PUSPARINI', 'SNP', '', '2017-05-26', '1992-01-15', 'Sumedang', ' jl.bambu betung 2 no.25 cilendek timur', '', '', '0000-00-00', '', 1, 0, 6520002, 3, 3, 3, 0, 12, 2, '2020-06-04 16:39:54', 6);
INSERT INTO `m_karyawan` VALUES (1077, NULL, '9318031', '9318031', NULL, 'SONNY SUMARNA', 'SS', '', '2021-06-01', '1993-01-09', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9217028, 3, 2, 0, 0, 3, 1, '2020-06-04 16:43:45', NULL);
INSERT INTO `m_karyawan` VALUES (1078, NULL, '9416035', '94210079', NULL, 'YUNITA NUR INDAH PRIYANI', 'YIP', '', '2016-08-01', '1995-08-30', 'Banjarnegara', 'Bogor raya permai, blok fe 9 no 4', '', '', '0000-00-00', '', 1, NULL, 9318032, 3, 3, 3, 0, 12, 0, '2020-06-06 08:57:31', 6);
INSERT INTO `m_karyawan` VALUES (1079, NULL, '9316034', '93210076', NULL, 'LITA SUSILOWATI', 'LS', '', '2016-02-26', '1993-08-02', 'Kudus', 'Cilebut Residence Cluster Adhenium Blok A2 No 5', '', '', '0000-00-00', '', 1, 0, 9416036, 3, 3, 2, 0, 12, 2, '2020-06-06 09:00:26', 6);
INSERT INTO `m_karyawan` VALUES (1080, NULL, '9551202', '', NULL, 'FINA WIDIA RIANI', 'FWR', '', '2020-02-01', '1995-12-09', 'Bogor', '', '', '', '0000-00-00', '', 0, NULL, 9316035, 3, 3, 1, 0, 3, 2, '2020-06-08 15:10:04', NULL);
INSERT INTO `m_karyawan` VALUES (1081, NULL, '9520002', '', NULL, 'FINA WIDIA RIANI', 'FWR', '', '2020-02-01', '1995-12-09', 'BOGOR', '', '', '', '0000-00-00', '', 0, NULL, 9551203, 7, 3, 1, 0, 3, 2, '2020-06-08 15:17:49', NULL);
INSERT INTO `m_karyawan` VALUES (1082, NULL, '9520002', '9520002', NULL, 'FINA WIDIA RIANI', 'FWR', '', '2020-09-01', '1995-12-09', 'BOGOR', '', '', '', '0000-00-00', '', 1, NULL, 9520003, 3, 3, 0, 0, 3, 0, '2020-06-08 15:21:52', NULL);
INSERT INTO `m_karyawan` VALUES (1083, NULL, '8020001', '805099', NULL, 'WINARTO W', 'WW', '', '2020-06-22', '1980-01-01', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 9520003, 3, 2, 3, 0, 12, 1, '2020-06-22 15:41:38', NULL);
INSERT INTO `m_karyawan` VALUES (1088, NULL, '9617055', '9617055', NULL, 'MUH. BINTANG RIYANTO', 'MBR', NULL, '2017-02-01', '1996-04-11', 'Ujung Pandang', 'Jalan H. Entong Usan, Kayu Manis, Tanah Sereal, Kota Bogor', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1089, NULL, '97210135', '97210135', NULL, 'ELIAWATI', 'EW', NULL, '2019-09-01', '1997-08-10', 'Bogor', 'Kp cicadas 2 Rt 01/08 Kec ciampea Kab Bogor', '', '', '0000-00-00', '1330023218712', 1, NULL, NULL, 3, 3, 3, 10, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1090, NULL, '9517512', '9517512', NULL, 'ARI SAPUTRA', 'AS', NULL, '2017-08-01', '1995-02-10', 'Magelang', 'Druju Kidul RT/RW 002/004, Plosogede, Ngluwar, Magelang', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1091, NULL, '9818001', '98210114', NULL, 'AHMAD HIDAYAH', 'AH', NULL, '2018-11-01', '1998-10-03', 'Bogor', 'Jl. Cimanggu Lamping, Kedung Waringin, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16164', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1092, NULL, '9519063', '95210126', NULL, 'DIAN EKA FITRI', 'DEF', NULL, '2019-01-01', '1995-04-21', 'Malaysia', 'Perumahan Bukit Baruga, Cluster BaliThai Land Jl. Tabanan III No. 19 Makassar', '', '', '0000-00-00', '', 1, NULL, NULL, 3, 3, 2, 0, 12, 0, '2020-07-01 15:19:37', 11);
INSERT INTO `m_karyawan` VALUES (1093, NULL, '9919001', '99210123', NULL, 'MARRIYATUL QIBTHIYYAH', 'MQ', NULL, '2019-01-01', '1999-02-07', 'Bogor', 'Kp. Munjul Rt.02 Rw.06, Kel. Kayumanis Kec. Tanah Sareal Kota Bogor', '', '', '0000-00-00', '1330023490485', 1, NULL, NULL, 3, 3, 2, 10, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1094, NULL, '91210131', '91210131', NULL, 'OPI UL UMAM', 'OUU', NULL, '2019-07-01', '1991-05-20', 'Bekasi', 'Kp kayumanis Rt 01/01 cibadak tanah sareal kota bogor', '55.845.457.5-435.000', 'kp. babelan rt 006 rw 001 babelan kota kab bebalan jawa barat', '0000-00-00', '0840491682', 1, NULL, NULL, 3, 2, 3, 5, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1095, NULL, '9417052', '94210043', NULL, 'MEIZHA PUTRA HIDAYAT', 'MPH', NULL, '2017-01-01', '1994-05-19', 'Depok', 'Jl. H.M. Yusuf 4 No.13 RT.04 RW.022 Kp. Sugutamu, Kel. Mekarjaya, Kec. Sukmajaya, Kota Depok, Jawa Barat, Indonesia 16411', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1096, NULL, '83210074', '83210074', NULL, 'ABDUL RAUF', 'AR', NULL, '2015-04-01', '1983-08-21', 'Koburu', 'Jl.Bokeo No.27', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 10);
INSERT INTO `m_karyawan` VALUES (1097, NULL, '9418027', '9418027', NULL, 'HANIEF NUGROHO HARIADI', 'HNH', NULL, '2018-03-01', '1994-12-11', 'Cilacap', 'Jl. Mawar no. 34 Rt04/01 kel. Sidakaya kec. cilacap selatan kab. cilacap jawa tengah', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1098, NULL, '9517513', '95210095', NULL, 'DIMAS SATRIO PRAKOSO', 'DSP', NULL, '2017-11-01', '1995-04-08', 'KUDUS', 'JL. AMD CIBENTANG NO. 28 RT : 003/001 Kp. Cibentang Kec. Ciseeng Kab. Bogor 16120', '', '', '0000-00-00', '7189571447', 1, 0, NULL, 3, 2, 2, 12, 12, 1, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1099, NULL, '7314001', '73210056', NULL, 'ANDRE CH SALAWANEY', 'AC', NULL, '2014-03-01', '1973-04-28', 'Ujung Pandang', 'Jl. A. Yani no.120 Polewali kab. Polewali mandar prov. Sulbar', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 11);
INSERT INTO `m_karyawan` VALUES (1100, NULL, '9516044', '95210040', NULL, 'GALIH RIZKY', 'GR', NULL, '2016-08-18', '1995-06-19', 'Bogor', 'Jl.Tirtawangi no.4B RT.04 RW.07 Desa Cipagalo, Kec.Bojong Soang, Kab.Bandung', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1101, NULL, '92210124', '92210124', NULL, 'ALGYAN GUFARIRA', 'AG', NULL, '2019-01-01', '1992-08-04', 'Sumedang', 'Jalan Pilar Baru No.1A, RT.4/RW.3, Kedoya Selatan, Kebon Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520, Indonesia', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1102, NULL, '9419061', '9419061', NULL, 'WULANDARI FAKHRANI', 'WF', NULL, '2019-10-01', '1994-11-15', 'bogor', 'kencana tanah sareal', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1103, NULL, '9417053', '94210087', NULL, 'FERDI ARSY BAHTIARIYANZA', 'FAB', NULL, '2017-06-01', '1994-12-10', 'Bogor', 'Jl. Kebon Jukut RT03/RW10 Kel. Babakanpasar Kec. Bogor Tengah Kota Bogor 16126', '736977794404000', 'KP. GUDANG RT 003 RW 007 RANGGAMEKAR, BOGOR SELATAN KOTA BOGOR JAWA BARAT', '0000-00-00', '053101008635507', 1, NULL, NULL, 3, 2, 3, 6, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1104, NULL, '9418028', '94210107', NULL, 'RIZKI FAHMI', 'RF', NULL, '2018-05-01', '1994-08-10', 'Banda Aceh', 'Jl.Pesantren No 42 Sukamiskin, Arcamanik Bandung', '93.509.249.4-412.000', 'Villa Pertiwi Blok G-1 No 04 Depok', '0000-00-00', '8090206584', 1, NULL, NULL, 3, 2, 3, 3, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1105, NULL, '9618025', '96210104', NULL, 'MOEHAMAD IRFAN', 'MI', NULL, '2018-03-01', '1996-03-21', 'Brebes', 'Kp rawa kalong rt 02/05', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1106, NULL, '9014032', '90210061', NULL, 'AWWAL SUTRISNO', 'AS', NULL, '2014-08-01', '1990-12-28', 'Makassar', 'Perum. BTP Blok F/289', '41.308.422.9-801.000', 'Makassar', '0000-00-00', '', 1, 0, NULL, 3, 2, 3, 6, 12, 1, '2020-07-01 15:19:37', 11);
INSERT INTO `m_karyawan` VALUES (1107, NULL, '9017035', '90210085', NULL, 'REHFI IRIANSYAH TAROREH', 'RIT', NULL, '2017-05-01', '1990-05-29', 'JAYAPURA', 'KELAPA INDAH TANGERANG', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1108, NULL, '8218013', '8218013', NULL, 'OKY MARIYATONANG', 'OM', NULL, '2018-10-01', '1982-09-12', 'Surabaya', 'Cipondoh Makmur jalan Fajar 2 Blok F3 Nomor 36', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1109, NULL, '9517514', '9517514', NULL, 'ZAKKA FAQIHUL UMAM', 'ZFU', NULL, '2017-07-01', '1995-03-21', 'Kendal', 'Jl Manggisan No 08 Rt 002/004 Kel Langenharjo Kec Kendal Kab Kendal Jawa Tengah 51314', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1110, NULL, '96210142', '96210142', NULL, 'RUNI HAPSARI', 'RH', NULL, '2019-01-01', '1996-06-27', 'Banyumas', 'Griya Kencana Asri Blok F3 nomor 2. RT 007 RW 001. Kel. Kencana Kec. Tanah Sareal Kota Bogor', '', '', '0000-00-00', '7401417552', 1, NULL, NULL, 3, 3, 3, 1, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1112, NULL, '99210159', '99210159', NULL, 'DIO ABI MAULANA INDRAWAN', 'DAM', NULL, '2018-04-01', '1999-01-14', 'Jakarta', 'PERUM GRIYA PERSADA BLOK D2 NO.16 RT/RW 007/013 DESA MANGUNJAYA KECAMATAN TAMBUN SELATAN KABUPATEN BEKASI PROVINSI JAWA BARAT', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1113, NULL, '8920001', '8920001', NULL, 'MOHAMAD LUKMAN HAKIM K', 'MLH', NULL, '2020-01-01', '1989-01-17', 'Bogor', 'Jln Balandongan', '', '', '0000-00-00', '4270026686', 0, 0, NULL, 3, 2, 3, 1, 12, 1, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1114, NULL, '9619007', '96210129', '', 'MUHAMMAD FATHURROHIM NUR', 'MFN', NULL, '2019-01-01', '1996-04-12', 'Jakarta', 'Pondok Ungu Permai F11 No 11, RT 11 RW 12, Kaliabang Tengah, Bekasi Utara', NULL, NULL, NULL, NULL, 1, 0, NULL, 3, 2, 2, NULL, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1115, NULL, '8512001', '8512001', NULL, 'HENDRY MUNAJAT SUBAGDJA', 'HMS', NULL, '2012-10-01', '1985-05-07', 'Manado', 'Jl Situsari VII No. 12 Bandung Jawa Barat', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1116, NULL, '9419062', '9419062', NULL, 'ANGELICA INDRAWAN', 'AI', NULL, '2019-08-01', '1994-08-04', 'Jakarta', 'Graha Pajajaran Blok G No. 6, RT 06 RW 15, Kelurahan Katulampa, Kecamatan Bogor Timur, Bogor 16144', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1117, NULL, '7818003', '78210007', '2011137', 'CHANDRA ARIANTO', 'CA', NULL, '2018-11-01', '1978-07-27', 'Jeneponto', 'PMULANG PERMAI 1 AX-04 NO.08 PAMULANG,TANGERANG SELATAN', NULL, NULL, NULL, NULL, 1, 0, NULL, 3, 2, 2, NULL, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1118, NULL, '9617056', '9617056', NULL, 'MUHAMMAD RIJALLUDDIN', 'MR', NULL, '2017-11-01', '1996-06-05', 'Bogor', 'Jl. Sindangbarang pengkolan RT/RW 01/04 Kel Sindang Barat KecBogor Barat Kota Bogor', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1119, NULL, '9619008', '96210049', NULL, 'ALFIAN NASIR', 'AN', NULL, '2019-05-01', '1996-10-11', 'parangbaddo', 'parangbaddo, polong bangkeng utara, takalar, sulawesi selatan', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1120, NULL, '8619057', '86210116', NULL, 'ADRIAN TAURIES', 'AT', NULL, '2019-01-01', '1986-04-23', 'Jakarta', 'Ciledug indah 2 Blok E 29 No 6', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1121, NULL, '2415001', '79210069', NULL, 'TEMAZISOKHI HONDRO', 'TH', NULL, '2015-05-01', '2024-09-29', 'Bintuang', 'JLN PANCASILA DESA MUDIK', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 30);
INSERT INTO `m_karyawan` VALUES (1122, NULL, '8813001', '88210054', NULL, 'FERI SUSANTO', 'FS', NULL, '2013-03-01', '1988-11-01', 'MUARA TIMBUK', 'JL.BTN SOSIAL PERUMAHAN TAMAN KITA 4 BLOK F NO.1 KEL.KANDANGMAS KEC KAMPUNG MELAYU KOTA BENGKULU', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 36);
INSERT INTO `m_karyawan` VALUES (1123, NULL, '77210071', '77210071', NULL, 'ATEP WAHYU', 'AW', NULL, '2014-12-01', '1977-12-17', 'Bandung', 'Dusun bojong bolang desa sukadana rt003/002.kec.cumanggung kab. Sumedang jabar', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 22);
INSERT INTO `m_karyawan` VALUES (1124, NULL, '9418029', '94210006', NULL, 'RININDYA NURTIARA PUTERI', 'RNP', NULL, '2018-04-01', '1994-06-27', 'Magetan', 'Jl. Narogong Jaya VIIA blok d83 no 3', '', '', '0000-00-00', '', 0, 0, NULL, 3, 3, 3, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1125, NULL, '9317048', '9317048', NULL, 'MAULANA KAMIL', 'MK', NULL, '2017-11-01', '1993-12-31', 'Bekasi', 'Jl. Bougenvile Blok.J No.109 RT/RW.016/011 Jatimulya, Tambun Selatan, Bekasi', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1126, NULL, '9215025', '92210075', NULL, 'MOHAMAD RAMDAN', 'MR', NULL, '2015-12-01', '1992-11-17', 'Tasikmalaya', 'Kp. Babakan RT 16/06 Desa Bojonggenteng Kecamatan Bojonggenteng Kab Sukabumi JABAR', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1127, NULL, '9418030', '94210112', NULL, 'VINCENTIUS KRISMA EKARISTI', 'VKE', NULL, '2018-09-01', '1994-09-29', 'Surabaya', 'Pondok Lontar Indah A2 no. 28, Surabaya', '', '', '0000-00-00', '8620309631', 1, NULL, NULL, 4, 2, 2, 1, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1128, NULL, '94210127', '94210127', NULL, 'MUH NURWAHYU ADNAN', 'MNA', NULL, '2019-05-01', '1994-10-09', 'Makassar', 'Jl. Abdul Kadir 1 Perum Pesona Mutiara 2 No. 3 Makassar', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 11);
INSERT INTO `m_karyawan` VALUES (1129, NULL, '8614052', '86210062', NULL, 'ASRILA LETSOIN', 'AL', NULL, '2014-09-01', '1986-03-18', 'Tual', 'Jl. Ujung pandang Nabire Papua', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 2);
INSERT INTO `m_karyawan` VALUES (1130, NULL, '9215026', '92210073', NULL, 'NURHAJIJAH PUTRI UTAMI', 'NPU', NULL, '2015-11-01', '1992-07-02', 'Makassar', 'Jl.Gontang Raya No.15', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 11);
INSERT INTO `m_karyawan` VALUES (1131, NULL, '9619009', '9619009', NULL, 'FIKRI RAMDHANI HARIDIANSYAH', 'FRH', NULL, '2019-01-01', '1996-01-31', 'Bogor', 'Jl Ciapus, Kp Cimanglid, Ds Sukamantri, Kec Tamansari, Kab Bogor, RT 03 / 02, No 34', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1132, NULL, '9519064', '95210137', NULL, 'NURAENI WULANDARI', 'NW', NULL, '2019-01-01', '1995-08-27', 'Jakarta', 'Perum Griya Permai Blok C6 No.5 RT/02, RW/06, Desa Pucung, Kec. Kota Baru', '', '', '0000-00-00', '', 1, 0, NULL, 3, 3, 2, 0, 12, 2, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1133, NULL, '96210136', '96210136', NULL, 'RIANA WIDYA LESTARI', 'RWL', NULL, '2019-10-01', '1997-10-31', 'Muara Bungo', '', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 3, 0, 12, 1, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1134, NULL, '93210132', '93210132', NULL, 'ZACHARIAS DAVID KOMUL', 'ZDK', NULL, '2019-08-01', '1993-11-02', 'Ambon', 'Jl. Merdeka Nabire Papua', '96.534.342.9-954.000', 'Jln. Merdeka No.60', '0000-00-00', '0852567730', 1, NULL, NULL, 5, 2, 3, 5, 12, 0, '2020-07-01 15:19:37', 2);
INSERT INTO `m_karyawan` VALUES (1135, NULL, '9419064', '94210125', NULL, 'NADHIFAH AL FIKRIYAH', 'NAF', NULL, '2019-03-01', '1994-08-14', 'BEKASI', 'JL. BADAK VIII B. 180. RT 008 RW 016. KELURAHAN: TAMBUN SELATAN. KECAMATAN: TAMBUN SELATAN. BEKASI TIMUR.', '', '', '0000-00-00', '', 1, 0, NULL, 3, 3, 2, 0, 12, 1, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1136, NULL, '8714011', '87210068', '2011226', 'SUPRIANUS BOY GELI', 'SBG', NULL, '2014-11-01', '1987-09-17', 'Waingapu', 'Jl.S.parman no 4.RT 024 RW 008 kelurahan prailiu.kecamatan kambera.kabupatan Sumba timur.', NULL, NULL, NULL, NULL, 1, 0, NULL, 3, 2, 2, NULL, 12, 2, '2020-07-01 15:19:37', 20);
INSERT INTO `m_karyawan` VALUES (1137, NULL, '9617057', '9617057', NULL, 'MUHAMMAD ROKIB', 'MR', NULL, '2017-11-01', '1996-05-22', 'Bangkalan', 'Jl Pangeret Ujung No 35 RT 03/12 Tegal Gundil Bogor Utara', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', NULL);
INSERT INTO `m_karyawan` VALUES (1138, NULL, '97210133', '97210133', NULL, 'QUROTUL AENI', 'QA', NULL, '2019-09-01', '1997-11-18', 'Brebes', 'Desa Karangsari 04/01 , Kecamatan Bulakamba, Kabupaten Brebes', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1139, NULL, '98210041', '98210041', NULL, 'IMAM ARDIANSYAH', 'IA', NULL, '2017-06-01', '1998-09-10', 'Samboja', 'Jl Poros Rt. 02, Desa Beringin Agung, Kec. Samboja, Kutai Kartanegara, Kalimantan Timur.', '41.547.685.9-728.000', 'Jl Poros Rt. 02, Desa Beringin Agung, Kec. Samboja, Kutai Kartanegara, Kalimantan Timur.', '0000-00-00', '0568969401', 1, NULL, NULL, 3, 2, 2, 5, 12, 0, '2020-07-01 15:19:37', 27);
INSERT INTO `m_karyawan` VALUES (1140, NULL, '89210081', '89210081', NULL, 'KASIH FRIANTO WIJAYA', 'KFW', NULL, '2016-11-01', '1989-12-29', 'Medan', 'JL.KAYU MANIS X.RT.001 RW.009 KEC. MATRAMAN. JAKARTA TIMUR', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 5);
INSERT INTO `m_karyawan` VALUES (1141, NULL, '94210140', '94210140', NULL, 'INTAN SYEFIRA SALSABILA', 'ISS', NULL, '2020-02-01', '1994-11-05', 'jakarta', 'jln mandor tajir gang disin. No 22. kel.serua. kec.bojongsari.kota depok', '', '', '0000-00-00', '', 1, NULL, NULL, 3, 3, 2, 0, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1142, NULL, '9417054', '94210090', NULL, 'RAFIKA SORAYA LUFTIYANI', 'RSL', NULL, '2017-07-01', '1994-05-17', 'WONOSOBO', 'PERUM PURNAMANDALA BLOK Z-5 RT 003 RW 005 BUMIRESO, WONOSOBO, JAWA TENGAH', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1143, NULL, '91210141', '91210141', NULL, 'SUDOTO PINAHWUHTI ARI WIBOWO', 'SPA', NULL, '2020-02-01', '1991-10-03', 'Bogor', 'Kp lumbung rt 04/07', '', '', '0000-00-00', '', 1, NULL, NULL, 3, 2, 3, 0, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1144, NULL, '93210139', '93210139', NULL, 'MUHAMAD FAUZI IRAWAN', 'MFI', NULL, '2020-01-01', '1993-08-25', 'Bogor', 'JL, Bolang, Cilendek Timur, No34 RT002/RW010, Kel Cilendek Timur, Kec Kota Bogor Barat, Kota Bogor, Kode Pos 16112', '', '', '0000-00-00', '0796609833', 1, 0, NULL, 3, 2, 2, 5, 12, 1, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1145, NULL, '8412001', '84210059', NULL, 'EDI ERWANDI', 'EE', NULL, '2012-01-01', '1984-12-14', 'Sungai Purun', 'Jl.M Yamin Gg.Keluarga Bersama No.14A Rt.001/006 Kota Baru Pontianak Selatan', '', 'Jl.M Yamin Gg.Keluarga Bersama No.14A Rt.001/006 Kota Baru Pontianak Selatan', '0000-00-00', '0231926878', 1, NULL, NULL, 3, 2, 3, 5, 12, 0, '2020-07-01 15:19:37', 24);
INSERT INTO `m_karyawan` VALUES (1146, NULL, '8514014', '85210065', NULL, 'YOGO PRASETYO', 'YP', NULL, '2014-11-01', '1985-04-27', 'Tanjungpinang', 'Prrm. Pondok Pertiwi Cluster Blok M No 6, Sei Harapan, Sekupang, Batam, Kepri', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 34);
INSERT INTO `m_karyawan` VALUES (1147, NULL, '8915046', '89210066', NULL, 'YUDI HERLAMBANG', 'YH', NULL, '2015-02-01', '1989-09-01', 'Medan', 'Jl. Eka rasmi no. 95 medan', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 30);
INSERT INTO `m_karyawan` VALUES (1148, NULL, '9418031', '94210121', NULL, 'RAGIL ARYANTO', 'RA', NULL, '2018-11-01', '1994-07-18', 'Kebumen', 'Rss jatimulyo alian kebumen', '', '', '0000-00-00', '', 1, NULL, NULL, 3, 2, 3, 0, 12, 0, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1149, NULL, '8419039', '8419039', NULL, 'DANNY SUGIARTO', 'DS', NULL, '2019-11-01', '1984-04-06', 'Sragen', 'Manukan RT17, kel. Kadipiro, kec. Sambirejo, kab. Sragen', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:19:37', 15);
INSERT INTO `m_karyawan` VALUES (1150, NULL, '8419040', '84210138', NULL, 'DEA LISTYANA', 'DL', NULL, '2019-01-01', '1984-08-11', 'Bogor', 'Jl. Lolongok belakang 43 Gg. H. Abas No. 21 RT. 001 RW. 05 Kel. Empang Kec. Bogor Selatan', '', '', '0000-00-00', '', 1, 0, NULL, 3, 3, 2, 0, 12, 2, '2020-07-01 15:19:37', 6);
INSERT INTO `m_karyawan` VALUES (1151, NULL, '94210130', '94210130', NULL, 'NURIS DIANDI', 'ND', NULL, '2019-01-01', '1994-09-11', 'Purwokerto', 'Wirokraman 04/13, Sidokarto, Godean, Sleman, Yogyakarta', '964937726017000', 'Haji Sinen No 09 RT 007 RW 007 , Ragunan, Pasar Minggu', '0000-00-00', '767401001016533', 1, NULL, NULL, 3, 2, 3, 6, 12, 0, '2020-07-01 15:25:29', 5);
INSERT INTO `m_karyawan` VALUES (1152, NULL, '9317049', '93210088', NULL, 'RISKY YUNIARTI', 'RY', NULL, '2017-06-01', '1993-06-27', 'WONOGIRI', 'NGLUWAK RT/RW 01/08 GIRIWARNO GIRIMARTO WONOGIRI JAWA TENGAH', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1153, NULL, '9316035', '9316035', '2011258', 'WINDRA WAHYU TUNGGAL', 'WWT', NULL, '2016-08-01', '1993-10-12', 'Madiun', 'Perum Billabong Blok G2 O No 11', NULL, NULL, NULL, NULL, 1, 0, NULL, 3, 2, 2, NULL, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1154, NULL, '9417055', '9417055', NULL, 'ADNAN FAUZI HAMBALI', 'AFH', NULL, '2017-04-01', '1994-03-23', 'Serui', 'Jln. Gajah mada', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 2);
INSERT INTO `m_karyawan` VALUES (1155, NULL, '7814034', '78210057', NULL, 'LUKAS NOE SETITIT', 'LNS', NULL, '2014-08-01', '1978-10-18', 'RUMAAT', 'PERUMAHAN PERKEBUNAN, OHOIJANG-WATDEK, KEI KECIL, MALUKU TENGGARA-MALUKU', '41.408.209.9-941.000', 'PERUMAHAN PERKEBUNAN, OHOIJANG-WATDEK, KEI KECIL, MALUKU TENGGARA-MALUKU', '0000-00-00', '028101032129503', 1, NULL, NULL, 4, 2, 3, 6, 12, 0, '2020-07-01 15:25:29', 3);
INSERT INTO `m_karyawan` VALUES (1156, NULL, '8518018', '85210111', NULL, 'DASTUR', 'DD', NULL, '2018-09-01', '1985-07-08', 'Matang peusangan', 'Desa Leubok pirak kec. Matang kuli kab. Aceh utara', '16.879.031.9-101.000', '', '0000-00-00', '', 1, NULL, NULL, 3, 2, 3, 0, 12, 0, '2020-07-01 15:25:29', 29);
INSERT INTO `m_karyawan` VALUES (1157, NULL, '93210083', '93210083', NULL, 'MUHAMAD ARROZI GAFAR', 'MAG', NULL, '2017-02-01', '1993-02-09', 'Kijang', 'Perum.puri brata indah block b no 12', '', '', '0000-00-00', '1090015324650', 1, 0, NULL, 3, 2, 2, 10, 12, 2, '2020-07-01 15:25:29', 34);
INSERT INTO `m_karyawan` VALUES (1158, NULL, '9419066', '94210012', NULL, 'ABDULLAH HAJIS', 'AH', NULL, '2019-01-01', '1994-05-03', 'Kabupaten Bekasi', 'Kp. Blokang, No.112, RT.004, RW.007, Desa Sukamanah, Kecamatan Sukatani, Kabupaten Bekasi', '83.240.294.5-414.000', 'Kp. Blokang, No.112, RT.004, RW.007, Desa Sukamanah, Kecamatan Sukatani, Kabupaten Bekasi', '0000-00-00', '8125872560', 1, NULL, NULL, 3, 2, 3, 56, 12, 0, '2020-07-01 15:25:29', NULL);
INSERT INTO `m_karyawan` VALUES (1159, NULL, '9017036', '90210093', NULL, 'CARLOS MATHEUS HOMMY', 'CMH', NULL, '2017-10-01', '1990-12-10', 'Maluku tengah', 'Enarotali', '', '', '0000-00-00', '', 0, 0, NULL, 6, 2, 3, 0, 12, 1, '2020-07-01 15:25:29', 2);
INSERT INTO `m_karyawan` VALUES (1160, NULL, '9118022', '91210106', '2011116', 'RENDY', 'RR', NULL, '2018-01-01', '1991-12-27', 'MIDAI', 'Jl.Hr.Soebrantas. Kel.Bandarsyah. Kec.Bunguran Timur. Kab.Natuna.', NULL, NULL, NULL, NULL, 1, 0, NULL, 3, 2, 2, NULL, 12, 2, '2020-07-01 15:25:29', 34);
INSERT INTO `m_karyawan` VALUES (1161, NULL, '9519065', '95210122', NULL, 'ISMY ALIA MASITA CHODIJAH', 'IAM', NULL, '2019-01-01', '1995-06-02', 'Jakarta', 'Jl Cilebut Lebak No 17 RT/RW. 005/004 Kel. Cilebut Timur Kec. Sukaraja Kab. Bogor 16710', '', '', '0000-00-00', '', 1, NULL, NULL, 3, 3, 3, 0, 12, 0, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1162, NULL, '9219046', '9219046', '', 'MUHAMMAD MIFTAH FIRDAUS', 'MMF', NULL, '2019-01-01', '1992-09-08', 'Jakarta', 'Gg SD Rt 02 Rw 02 No 40, Srengseng Sawah, Jagakarsa, Jaksel', NULL, NULL, NULL, NULL, 1, 0, NULL, 3, 2, 2, NULL, 12, 2, '2020-07-01 15:25:29', NULL);
INSERT INTO `m_karyawan` VALUES (1163, NULL, '95210013', '95210013', NULL, 'DENY RAMDHANY', 'DR', 'assets/dokumen/foto/karyawan/thumb_new_1163.jpg', '2019-05-01', '1995-02-27', 'Bogor', 'Kp. Pangkalan RT2 RW 1', '', '', '0000-00-00', '', 1, 0, NULL, 4, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', NULL);
INSERT INTO `m_karyawan` VALUES (1164, NULL, '9420003', '94210128', NULL, 'INDRA NURRAHMAN', 'IN', NULL, '2020-05-01', '1994-03-03', 'Banyumas', 'Jl. Martadimedja Rt004 /003 desa pamijen kec. Sokaraja kab. Banyumas Jawa Tengah 53181', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1165, NULL, '2011136', '96210118', NULL, 'AKHMAD JENDRA ALFARISI', 'AJA', NULL, '2018-10-01', '1996-04-03', 'Surabaya', 'Gubeng Kertajaya 1E/20', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1166, NULL, '9317051', '9317051', NULL, 'BAMBANG RAHMADI KURNIAWAN PAYU', 'BRK', NULL, '2017-11-01', '1993-12-10', 'Gorontalo', 'Jalan Limau Gg. Salem 1 RT. 04 RW. 08 Kec. Serpong Kota Tangerang Selatan', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', NULL);
INSERT INTO `m_karyawan` VALUES (1167, NULL, '9415014', '94210092', NULL, 'MIFTAKHUDIN', 'MM', NULL, '2015-01-01', '1994-07-20', 'Purworejo', 'Jl. Bhayangkara II No.17', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 2);
INSERT INTO `m_karyawan` VALUES (1168, NULL, '9018005', '90210120', NULL, 'BAYU CIPTADI', 'BC', NULL, '2018-12-01', '1990-10-17', 'Jakarta', 'Jl.Murai E3/15 Komplek Walikota Kelurahan Sukapura , Jakarta Utara', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1169, NULL, '9217028', '9217028', NULL, 'IPUNG KURNIAWAN', 'IK', NULL, '2017-10-01', '1992-07-29', 'JOMBANG', 'Jln sukabumi gang pertiwi no 54 kel.baamang hilir kec.baamang kab.kotawaringin timur KALTENG', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 25);
INSERT INTO `m_karyawan` VALUES (1170, NULL, '9118023', '9118023', NULL, 'ZULFALI', 'ZZ', NULL, '2018-10-01', '1991-07-12', 'Leupu', 'Jln leupu blangdalam', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', NULL);
INSERT INTO `m_karyawan` VALUES (1171, NULL, '9818004', '98210117', NULL, 'FERDINAL FIRMANSYAH', 'FF', NULL, '2018-09-01', '1998-06-08', 'Tegal', 'Desa Sukadamai, RT.02/RW.08, Sukadamai, Kec. Tanah Sereal, Kota Bogor, Jawa Barat ', '95.164.236.2-501.000', 'Sukareja, Kec. Warureja, Kabupaten Tegal, Jawa Tengah ', '0000-00-00', '0458020118', 1, NULL, NULL, 3, 2, 2, 5, 12, 0, '2020-07-01 15:25:29', 25);
INSERT INTO `m_karyawan` VALUES (1172, NULL, '9016030', '90210080', NULL, 'ANDHAN MARHADI', 'AM', NULL, '2016-09-01', '1990-05-27', 'Banda Aceh', 'Bogor Raya Permai FK 4/6 Kel. Curug Bogor', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1173, NULL, '7614036', '76210058', NULL, 'OSCAR KODA', 'OK', NULL, '2014-08-01', '1976-10-06', 'Romean', 'Ohoijang Watdek, RT.003/RW.05, Kelurahan Ohoijang Watdek, Kecamatan Kei Kecil, Kabupaten Maluku Tenggara, Provinsi Maluku', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 3);
INSERT INTO `m_karyawan` VALUES (1174, NULL, '8112001', '8112001', NULL, 'EKO ENDARTONO', 'EE', NULL, '2012-01-01', '1981-05-14', 'WONOGIRI', 'JL. TANJUNG RAYA 2, GG. MITRA JAYA NO. 20B, KEL. BANJAR SERASAN, KEC. PONTIANAK TIMUR, KALIMANTAN BARAT', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 24);
INSERT INTO `m_karyawan` VALUES (1175, NULL, '7317001', '7317001', NULL, 'MUHAMAD ALI', 'MA', NULL, '2017-04-01', '1973-04-15', 'bogor', 'jl.anggrek 5/346', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1176, NULL, '8315002', '83210055', NULL, 'JOLANDA LEUWOL', 'JL', NULL, '2015-04-01', '1983-10-13', 'HARIA', 'Halong Ambon', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 3);
INSERT INTO `m_karyawan` VALUES (1177, NULL, '9315042', '9315042', NULL, 'IMAM DHARMAWAN RUSLAN', 'IDR', NULL, '2022-04-01', '1993-12-22', 'Ujung Pandang', 'Komp.Pesona Mutiara Indah no 19 Gowa', '91.870.360.4-807.000', 'Komp. Pesona Mutiara Indah no.19 Gowa', '0000-00-00', '1740003911435', 1, 0, NULL, 3, 2, 2, 10, 3, 1, '2020-07-01 15:25:29', 11);
INSERT INTO `m_karyawan` VALUES (1178, NULL, '7918002', '79210119', NULL, 'FADLI BUDIMAN', 'FB', NULL, '2018-12-01', '1979-11-27', 'bogor', 'kp.babakan kondang rt.03 rw.01 desa bantarsari kec. rancabungur kab. bogor', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1179, NULL, '8318004', '83210109', NULL, 'EVI YULIANTI', 'EY', NULL, '2018-08-01', '1983-08-28', 'Jakarta', 'Jl. H. Entong Usan No.4, Rt 01 Rw 01, Kp. Kayumanis, Kel. Cibadak, Kec. Tanah Sareal\r\nKota Bogor', '', '', '0000-00-00', '', 1, NULL, NULL, 3, 3, 3, 0, 12, 0, '2020-07-01 15:25:29', 6);
INSERT INTO `m_karyawan` VALUES (1180, NULL, '83210110', '83210110', '2011129', 'YURI MARPESI', 'YM', NULL, '2018-08-01', '1983-03-10', 'Bireuen', 'Pulo ara geudong teungoh, kec.kota juang, kab. Bireuen', NULL, NULL, NULL, NULL, 1, 0, NULL, 3, 2, 2, NULL, 12, 2, '2020-07-01 15:25:29', 29);
INSERT INTO `m_karyawan` VALUES (1181, NULL, '7215001', '72210072', NULL, 'DANIEL JOHANIS RIHULAY', 'DJR', NULL, '2015-09-01', '1972-12-20', 'Ambon', 'Jl. Merak No. 8 Biak', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', 2);
INSERT INTO `m_karyawan` VALUES (1182, NULL, '7913001', '79210052', NULL, 'KURNIAWAN', 'KK', NULL, '2013-03-01', '1979-10-23', 'BOGOR', 'GG MESJID GUNUNG BATU BOGOR', '', '', '0000-00-00', '', 1, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 15:25:29', NULL);
INSERT INTO `m_karyawan` VALUES (1183, NULL, '9417056', '9417056', NULL, 'MALIKI PRADHANA', 'MP', NULL, '2017-05-01', '1994-03-01', 'Purworejo', 'komp. Kehutanan BPPB Selakopi Hijau F12', '', '', '0000-00-00', '', 0, 0, NULL, 3, 2, 2, 0, 12, 2, '2020-07-01 16:05:44', 5);
INSERT INTO `m_karyawan` VALUES (1184, NULL, '6820001', '680029', NULL, 'HAIRUL ', 'HR', 'assets/dokumen/foto/karyawan/thumb_new_1184.jpg', '2020-07-01', '1968-08-16', 'SINGKAWANG', 'BINONG PERMAI A1 NO. 14, RT.001/RW.012 Kelurahan BINONG, Kecamatan CURUG, KOTA TANGERANG', '240040501451000', 'BINONG PERMAI A1 NO. 14, RT.001/RW.012 Kelurahan BINONG, Kecamatan CURUG, KOTA TANGERANG', '0000-00-00', '700000053038', 1, NULL, 9417057, 3, 2, 3, 10, 4, 0, '2020-07-13 10:35:29', NULL);
INSERT INTO `m_karyawan` VALUES (1185, NULL, '7220001', '720554', NULL, 'ALEX CHANDRA', 'AC', 'assets/dokumen/foto/karyawan/thumb_new_1185.jpg', '2020-07-01', '1972-02-10', 'PEMATANG SIANTAR', 'VILLA CITRA BANTARJATI BLOK A14/2, TEGAL GUNDIL, TEGAL GUNDIL, KOTA BOGOR', '092086495436000', '', '0000-00-00', '', 0, 0, 6820002, 4, 2, 3, 10, 4, 1, '2020-07-13 10:42:05', 6);
INSERT INTO `m_karyawan` VALUES (1186, NULL, '00210015', '00210015', NULL, 'ANNISA PUJIANTI', 'AP', NULL, '2019-11-01', '2000-05-24', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7220002, 3, 3, 2, 0, 12, 1, '2020-07-23 14:00:51', NULL);
INSERT INTO `m_karyawan` VALUES (1187, NULL, '655258', '655258', NULL, 'JUNIGA WAHYU', 'JW', 'assets/dokumen/foto/karyawan/thumb_new_1187.jpg', '2020-09-01', '1965-06-16', 'MEDAN', 'Versailles Residence Blok F2/10 Sektor 16 BSD City Tangerang\r\n', '481147288-411000', '', '0000-00-00', '1180005048508', 0, 0, 19002, 3, 2, 3, 10, 5, 2, '2020-09-18 09:04:30', NULL);
INSERT INTO `m_karyawan` VALUES (1188, NULL, '6520001', '651002', NULL, 'CARLOS PARLINDUNGAN P.', 'CP', NULL, '2020-09-01', '1965-03-01', 'JAKARTA ', 'Perumahan Bumi Malaka Asri II \r\nJL. Seruni  IV No.8 RT.02/ RW.10\r\nKel. Malaka Sari - Kec. Duren Sawit\r\nJakarta Timur (13460)\r\n', '92616010432000', '', '0000-00-00', '1230004605657', 0, 0, 6520002, 6, 2, 3, 10, 4, 1, '2020-09-18 09:14:33', NULL);
INSERT INTO `m_karyawan` VALUES (1189, NULL, '846108', '846108', NULL, 'SRI SUNARTI', 'SS', 'assets/dokumen/foto/karyawan/thumb_new_1189.jpg', '2020-09-01', '1984-05-01', 'INDRAMAYU', '', '585526908-437000', '', '0000-00-00', '1290006016857', 1, NULL, 6520002, 3, 3, 3, 10, 5, 0, '2020-09-18 09:23:17', NULL);
INSERT INTO `m_karyawan` VALUES (1190, NULL, '9020001', '9020001', NULL, 'GITA NOVASARI', 'GN', NULL, '2020-09-01', '1990-11-26', 'Purbalingga', 'Jl. Batas Indah No. 64 Rt 4 Rw 1 Pondok Betung Pondok Aren Tangerang Selatan\r\n', '', '', '0000-00-00', '573937585', 1, NULL, 846109, 3, 3, 3, 5, 3, 0, '2020-09-23 11:43:16', NULL);
INSERT INTO `m_karyawan` VALUES (1191, NULL, '9420004', '9420004', NULL, 'SARAH FITRI APSARI', 'SFA', NULL, '2020-09-01', '1994-01-30', 'SEMARANG', 'Jl. Marga Kencana III No. 116, BANDUNG\r\n', '', '', '0000-00-00', '', 0, 0, 9020002, 3, 3, 0, 0, 3, 1, '2020-09-23 11:49:04', NULL);
INSERT INTO `m_karyawan` VALUES (1192, NULL, '2020001', '2020001', NULL, 'DUMMY A', 'DA', 'assets/dokumen/foto/karyawan/thumb_new_629.jpg', '2020-10-21', '2020-12-25', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9420005, 0, 2, 0, 0, 4, 1, '2020-10-20 20:49:23', NULL);
INSERT INTO `m_karyawan` VALUES (1193, NULL, '2020002', '2020002', NULL, 'VP A', 'VA', NULL, '2020-10-21', '2020-10-21', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 2020002, 0, 2, 0, 0, 5, 1, '2020-10-20 20:50:11', NULL);
INSERT INTO `m_karyawan` VALUES (1194, NULL, '2020003', '2020003', NULL, 'GM A', 'GA', NULL, '2020-10-21', '2020-10-21', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 2020003, 0, 2, 0, 0, 5, 1, '2020-10-20 20:52:17', NULL);
INSERT INTO `m_karyawan` VALUES (1195, NULL, '2020004', '2020004', NULL, 'DUMMY B', 'DB', 'assets/dokumen/foto/karyawan/thumb_new_628.jpg', '2020-10-21', '2020-12-26', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 2020004, 0, 2, 0, 0, 4, 1, '2020-10-20 20:55:52', NULL);
INSERT INTO `m_karyawan` VALUES (1196, NULL, '2020005', '2020005', NULL, 'VP B', 'VB', NULL, '2020-10-21', '2020-10-21', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 2020005, 0, 2, 0, 0, 5, 1, '2020-10-20 20:56:15', NULL);
INSERT INTO `m_karyawan` VALUES (1197, NULL, '2020006', '2020006', NULL, 'GM B', 'GB', NULL, '2020-10-21', '2020-10-21', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 2020006, 0, 2, 0, 0, 5, 1, '2020-10-20 20:56:37', NULL);
INSERT INTO `m_karyawan` VALUES (1198, NULL, '2020007', '2020007', NULL, 'DIREKTUR AB', 'DAB', NULL, '2020-11-01', '2020-11-01', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 2020007, 3, 2, 3, 0, 5, 1, '2020-11-01 05:46:41', NULL);
INSERT INTO `m_karyawan` VALUES (1199, NULL, '98210147', '98210147', NULL, 'ANGGI DZIKRI ABRARIANSYAH', 'AD', NULL, '2020-08-05', '1998-09-06', 'Banjarnegara', '', '964640783412000', '', '0000-00-00', '', 1, 0, 2020008, 3, 2, 2, 0, 12, 1, '2020-11-05 13:57:11', 6);
INSERT INTO `m_karyawan` VALUES (1200, NULL, '9820001', '98210160', NULL, 'STEVEN BREMA', 'SB', NULL, '2020-08-10', '1998-07-07', 'Medan', '', '', '', '0000-00-00', '', 1, NULL, 9820002, 6, 2, 2, 0, 12, 0, '2020-11-05 14:06:46', 6);
INSERT INTO `m_karyawan` VALUES (1201, NULL, '89210201', '89210201', NULL, 'AHMAD MUHAJIR', 'AM', NULL, '2020-05-01', '1989-02-10', 'kampung baru', '', '', '', '0000-00-00', '', 1, 0, 9820002, 0, 2, 0, 0, 12, 4, '2020-12-01 16:55:10', NULL);
INSERT INTO `m_karyawan` VALUES (1202, NULL, '7420001', '7420001', NULL, 'BAMBANG SENOADJI', 'BS', NULL, '2020-01-01', '1974-11-10', 'Makasar', '', '', '', '0000-00-00', '', 1, 0, 8920003, 0, 2, 0, 0, 12, 4, '2020-12-01 16:58:19', NULL);
INSERT INTO `m_karyawan` VALUES (1203, NULL, '83210202', '83210202', NULL, 'JUNADI', 'JU', NULL, '2020-07-01', '1983-11-03', 'BALIKPAPAN', '', '', '', '0000-00-00', '', 1, 0, 7420002, 0, 2, 0, 0, 12, 4, '2020-12-02 08:21:11', NULL);
INSERT INTO `m_karyawan` VALUES (1204, NULL, '94210204', '94210204', NULL, 'SANDI AMSYAHRUDI', 'SA', NULL, '2020-06-01', '1994-12-12', 'GARUT', 'Muara Badak', '732297775721000', 'Balikpapan', '0000-00-00', '1480017585301', 1, NULL, 8320002, 3, 2, 3, 10, 12, 0, '2020-12-02 08:23:51', NULL);
INSERT INTO `m_karyawan` VALUES (1205, NULL, '6220001', '6220001', NULL, 'BENNY RIYANTO', 'BR', NULL, '2020-08-01', '1962-04-10', 'SEMARANG ', '', '', '', '0000-00-00', '', 1, 0, 9420006, 0, 2, 0, 0, 13, 1, '2021-01-04 15:13:17', NULL);
INSERT INTO `m_karyawan` VALUES (1206, NULL, '6120001', '6120001', NULL, 'AMANAH ABDULKADIR', 'AA', NULL, '2020-08-01', '1961-02-16', 'CIREBON', '', '', '', '0000-00-00', '', 1, 0, 6220002, 0, 3, 0, 0, 13, 1, '2021-01-04 15:16:08', NULL);
INSERT INTO `m_karyawan` VALUES (1207, NULL, '2093221', '93210034', NULL, 'INDRA IBRAHIM', 'II', NULL, '2019-11-15', '1993-09-28', 'Jakarta', 'Grand Riscon Pajajaran Jl Utama Blok F13 No. 10 Cimanggis Bojonggede Kab. Bogor ', '', '', '0000-00-00', '', 1, NULL, 6120002, 3, 2, 2, 40, 12, 0, '2021-01-20 11:36:35', NULL);
INSERT INTO `m_karyawan` VALUES (1208, NULL, '2095222', '95210035', NULL, 'MUHAMAD EDO JUANDA WALUYO', 'MJW', NULL, '2019-08-05', '1995-06-04', 'Bogor', 'Kp. Seremped Barat Rt003/004 Des. Cibadak Kec. Tanah Sareal Kota Bogor', '90.931.273.8-404.00', 'JL. KH. Sholeh Iskandar kp. seremped barat no.22 rt.003 rw.004 kel. cibadak kec. tanah sareal kota bogor jawa barat', '0000-00-00', '8464407450', 1, NULL, 2093222, 3, 2, 2, 56, 12, 0, '2021-01-20 11:39:10', NULL);
INSERT INTO `m_karyawan` VALUES (1209, NULL, '2082220', '82210033 ', NULL, 'SANTO NOVIAN', 'SN', NULL, '2020-10-01', '1982-11-04', 'Bandung', '', '', '', '0000-00-00', '', 1, 0, 2095223, 3, 2, 3, 14, 12, 1, '2021-01-20 11:41:12', NULL);
INSERT INTO `m_karyawan` VALUES (1210, NULL, '2096223', '9620002', NULL, 'AQIL FALIH MUHAMAD', 'AFM', NULL, '2020-08-01', '1996-11-29', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 2082221, 0, 2, 0, 0, 12, 1, '2021-01-20 11:59:37', NULL);
INSERT INTO `m_karyawan` VALUES (1211, NULL, '2090219', '90210032', NULL, 'RONY SANJAYA', 'RS', NULL, '2020-11-02', '1990-06-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 2096224, 0, 2, 0, 0, 12, 0, '2021-01-20 12:01:38', NULL);
INSERT INTO `m_karyawan` VALUES (1212, NULL, '2087206', '87210019', NULL, 'DEWI SASMITA', 'DS', NULL, '2020-10-01', '1987-11-10', 'JAKARTA', '', '', '', '0000-00-00', '1670001732097', 1, NULL, 2090220, 3, 3, 3, 14, 12, 0, '2021-01-20 12:04:31', NULL);
INSERT INTO `m_karyawan` VALUES (1213, NULL, '2092214', '92210027', NULL, 'NOVA PRAHARSINI', 'NP', NULL, '2020-10-01', '1992-11-07', 'Samarinda', '', '', '', '0000-00-00', '', 1, NULL, 2087207, 3, 3, 2, 0, 12, 0, '2021-01-20 12:07:01', NULL);
INSERT INTO `m_karyawan` VALUES (1214, NULL, '2097235', '97210010', NULL, 'AYU PUTRI SAKINAH', 'APS', NULL, '2020-12-26', '1997-09-07', 'Bogor', 'Villa Mutiara Bogor Blok i2 No.10, RT.001 / RW.012 Kel.Mekarwangi,Kec.Tanah Sareal', '939021630404000', 'Jalan Mutiara Timur 9 i2 No. 10, RT. 001 RW. 012, Mekarwangi,Tanah Sareal, Kota Bogor, Jawa Barat', '0000-00-00', '0700903686', 0, 0, 2092215, 3, 3, 2, 5, 12, 1, '2021-02-03 10:05:43', NULL);
INSERT INTO `m_karyawan` VALUES (1216, NULL, '7318001', '730566', NULL, 'ANGGORO KURNIANTO WIDIAWAN,MSC', 'AKW', 'assets/dokumen/foto/karyawan/thumb_new_1216.jpg', '2018-09-13', '1973-12-25', 'MAGELANG', '', '', '', '0000-00-00', '', 1, 0, 2097236, 3, 2, 3, 0, 7, 3, '2021-03-01 12:00:41', NULL);
INSERT INTO `m_karyawan` VALUES (1217, NULL, '7320001', '730099', NULL, 'ERIK ZULKARNAEN', 'EZN', 'assets/dokumen/foto/karyawan/thumb_new_1217.jpg', '2020-01-01', '1973-04-14', 'TASIKMALAYA', '', '', '', '0000-00-00', '', 0, 0, 7318002, 3, 2, 3, 0, 4, 3, '2021-03-04 16:32:22', NULL);
INSERT INTO `m_karyawan` VALUES (1218, NULL, '8620001', '860121', NULL, 'ZIGROSENO ASWIN WARDHANA', 'ZAWD', 'assets/dokumen/foto/karyawan/thumb_new_1218.jpg', '2020-01-01', '1986-09-22', 'BLORA', '', '', '', '0000-00-00', '', 0, 0, 7320002, 3, 2, 3, 0, 4, 3, '2021-03-18 19:11:05', NULL);
INSERT INTO `m_karyawan` VALUES (1219, NULL, '6520001', '650562', NULL, 'BUDI HARYANTO', 'BHT', 'assets/dokumen/foto/karyawan/thumb_new_1219.jpg', '2020-01-01', '1965-04-19', 'Semarang', '', '', '', '0000-00-00', '', 0, 0, 8620002, 3, 2, 3, 0, 4, 3, '2021-03-18 19:15:42', NULL);
INSERT INTO `m_karyawan` VALUES (1220, NULL, '6820001', '680029', NULL, 'HAIRUL', 'HH', 'assets/dokumen/foto/karyawan/thumb_new_1220.jpg', '2020-07-01', '1968-08-16', 'SINGKAWANG', '', '', '', '0000-00-00', '', 1, 0, 6520002, 3, 2, 3, 0, 4, 0, '2021-03-31 21:07:30', NULL);
INSERT INTO `m_karyawan` VALUES (1221, NULL, '6719001', '675211 ', NULL, 'JOKO SARWONO', 'JS', 'assets/dokumen/foto/karyawan/thumb_new_1221.jpg', '2019-01-01', '1967-08-31', 'KARANGANYAR', '', '', '', '0000-00-00', '', 0, 0, 6820002, 3, 2, 0, 0, 5, 2, '2021-04-02 20:40:22', NULL);
INSERT INTO `m_karyawan` VALUES (1222, NULL, '7120001', '710392 ', NULL, 'NI KETUT SUKANTINI', 'NKS', 'assets/dokumen/foto/karyawan/thumb_new_1222.jpg', '2020-01-01', '1971-12-15', 'AMPENAN', '', '', '', '0000-00-00', '', 0, 0, 6719002, 2, 3, 3, 0, 4, 3, '2021-04-02 20:43:41', NULL);
INSERT INTO `m_karyawan` VALUES (1223, NULL, '7320001', '730094 ', NULL, 'FATMI DEWI KANDI ASTUTI', 'FKA', 'assets/dokumen/foto/karyawan/thumb_new_1223.jpg', '2020-01-01', '1973-01-28', 'PEKALONGAN', '', '', '', '0000-00-00', '', 1, 0, 7120002, 3, 3, 3, 0, 4, 3, '2021-04-02 20:48:05', NULL);
INSERT INTO `m_karyawan` VALUES (1224, NULL, '6521001', '655267', NULL, 'SOFYAN', 'SYN', 'assets/dokumen/foto/karyawan/thumb_new_1224.jpg', '2021-04-01', '1965-02-22', 'TEBING TINGGI', 'Jalan Amarilis V Blok V8 No.8, RT006, RW009, Kelurahan Kedung Waringin, Kecamatan Tanah Sareal, Kota Bogor 16164 ', '093484442404000 ', '', '0000-00-00', '0022914011', 0, 0, 7320002, 3, 2, 3, 5, 2, 4, '2021-04-05 21:58:49', NULL);
INSERT INTO `m_karyawan` VALUES (1225, NULL, '7614037', '765520', NULL, 'CHATARINA EVI KUSDYARTI', 'CEK', 'assets/dokumen/foto/karyawan/thumb_new_1225.jpg', '2014-12-08', '1976-08-24', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 6521002, 3, 3, 3, 0, 5, 0, '2021-04-07 10:46:21', NULL);
INSERT INTO `m_karyawan` VALUES (1226, NULL, '7320001', '730094', NULL, 'FATMI DEWI KANDI ASTUTI', 'FKA', NULL, '2020-01-20', '1973-01-28', 'PEKALONGAN', '', '', '', '0000-00-00', '', 0, 0, 7614038, 3, 3, 3, 0, 4, 1, '2021-04-07 10:57:03', NULL);
INSERT INTO `m_karyawan` VALUES (1227, NULL, '7221001', '720161 ', NULL, 'PHILIPUS NANANG HARJENDRA S', 'PHS', 'assets/dokumen/foto/karyawan/thumb_new_1227.jpg', '2021-04-01', '1972-05-12', 'MAGELANG', '', '', '', '0000-00-00', '', 0, 0, 7320002, 0, 2, 3, 0, 4, 3, '2021-04-19 14:55:10', NULL);
INSERT INTO `m_karyawan` VALUES (1228, NULL, '9820001', '98210166', NULL, 'RIZKY KUSMIYANTI', 'RK', NULL, '2020-10-26', '1998-10-31', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7221002, 3, 3, 2, 0, 12, 0, '2021-04-23 08:34:05', 6);
INSERT INTO `m_karyawan` VALUES (1229, NULL, '2121001', '2121001', NULL, 'KARYAWAN TES', 'KT', NULL, '2021-05-05', '2021-05-05', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9820002, 0, 2, 2, 0, 12, 1, '2021-05-06 08:04:45', NULL);
INSERT INTO `m_karyawan` VALUES (1230, NULL, '9820001', '98210004', NULL, 'ZIKRI MUSSANDI', 'ZM', NULL, '2020-08-01', '1998-07-27', 'Bekasi', '', '', '', '0000-00-00', '', 1, 0, 2121002, 3, 2, 2, 0, 12, 1, '2021-05-25 13:44:03', NULL);
INSERT INTO `m_karyawan` VALUES (1231, NULL, '7318001', '730503', NULL, 'MOKHAMMAD SALIM SANTOSO', 'MSS', 'assets/dokumen/foto/karyawan/thumb_new_486.jpg', '2020-01-01', '1973-01-26', 'BREBES', 'Dirgantara Residence Blok B7 Jl.Letkol Atang Senjaya Bantar Jaya  Ranca Bungur Bogor 16133', '07.220.838.2-954.000', 'Desa Samau RT000 RW000 Anggraidi Biak Kota Papua', '1998-03-01', '0833717770', 0, 0, 7218002, 3, 2, 3, 5, 4, 1, '2021-06-30 08:39:31', NULL);
INSERT INTO `m_karyawan` VALUES (1232, NULL, '9820001', '98210217', NULL, 'AFIF RAFIDITYA', 'AR', NULL, '2020-01-01', '1998-06-14', 'Jakarta', 'Jl. Purwa Raya Komplek Kavling DKI, Jagakarsa, Kota Jakarta Selatan, Provinsi DKI Jakarta, 12630', '', '', '0000-00-00', '', 1, 0, 7318002, 3, 2, 2, 0, 12, 1, '2021-07-05 10:10:52', NULL);
INSERT INTO `m_karyawan` VALUES (1233, NULL, '90210026', '90210026', NULL, 'MUHAMMAD SYAIFUL ANAM', 'MSA', NULL, '2020-10-01', '1990-04-14', 'Lampung', '', '', '', '0000-00-00', '', 1, 0, 9820002, 0, 2, 0, 0, 12, 1, '2021-07-05 11:36:48', 26);
INSERT INTO `m_karyawan` VALUES (1234, NULL, '710366_', '710366', NULL, 'RIZAL AHMAD FAUZI', 'RAF', 'assets/dokumen/foto/karyawan/thumb_new_1234.jpg', '2021-07-01', '1971-06-05', 'TASIKMALAYA', 'Jl. BRATASENA 1 No. 7 RT:001 RW:015, TEGAL GUNDIL, KOTA BOGOR UTARA, KOTA BOGOR ', '', 'Jl. BRATASENA 1 No. 7 RT:001 RW:015, TEGAL GUNDIL, KOTA BOGOR UTARA, KOTA BOGOR ', '0000-00-00', '', 0, 0, 90708, 3, 2, 3, 0, 7, 4, '2021-07-05 12:05:21', NULL);
INSERT INTO `m_karyawan` VALUES (1235, NULL, '82210021', '82210021', NULL, 'HENDRO YULIANTO', 'HY', NULL, '2020-10-01', '1982-07-14', 'Prabumulih ', '', '', '', '0000-00-00', '', 1, 0, 710367, 0, 2, 0, 0, 12, 2, '2021-07-19 09:15:32', 17);
INSERT INTO `m_karyawan` VALUES (1236, NULL, '8721020', '87210194', NULL, 'AGUS SISWO', 'AS', NULL, '2021-01-01', '1987-08-01', 'PRABUMULIH', '', '', '', '0000-00-00', '', 1, 0, 8221003, 3, 2, 3, 0, 12, 0, '2021-08-09 17:01:05', 6);
INSERT INTO `m_karyawan` VALUES (1237, NULL, '96210271', '96210271', NULL, 'FAHRY SETYANEGORO', 'FS', NULL, '2021-07-01', '1996-04-17', 'Bandung', '', '', '', '0000-00-00', '', 1, 0, 8721021, 3, 2, 2, 0, 12, 1, '2021-08-10 17:13:15', NULL);
INSERT INTO `m_karyawan` VALUES (1238, NULL, '7521001', '750081', NULL, 'JOVE MELDI PRIYATAMA SINAGA', 'JPS', 'assets/dokumen/foto/karyawan/thumb_new_1238.jpg', '2021-08-01', '1975-12-29', 'MEDAN', '', '', '', '0000-00-00', '', 1, 0, 9621002, 6, 2, 0, 0, 4, 0, '2021-08-12 10:40:19', NULL);
INSERT INTO `m_karyawan` VALUES (1240, NULL, '9120002', '91210037', NULL, 'AKHMAD JULIANSYAH', 'AJ', NULL, '2020-10-01', '1991-07-13', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 7521002, 0, 2, 0, 0, 12, 1, '2021-09-03 14:39:11', NULL);
INSERT INTO `m_karyawan` VALUES (1241, NULL, '8121001', '81210207', NULL, 'ZAKKI FIRMANTO', 'ZF', NULL, '2021-06-01', '1981-06-04', 'Masamba', '', '', '', '0000-00-00', '', 1, 0, 9120003, 0, 2, 0, 0, 12, 1, '2021-09-03 14:41:52', NULL);
INSERT INTO `m_karyawan` VALUES (1242, NULL, '9719010', '97210115', NULL, 'MURDANI', 'MUR', NULL, '2019-01-01', '1997-03-02', 'Teupin Mane ', '', '', '', '0000-00-00', '', 1, 0, 8121002, 0, 2, 0, 0, 12, 0, '2021-09-03 14:51:11', 29);
INSERT INTO `m_karyawan` VALUES (1243, NULL, '9621272', '96210208', NULL, 'MUHAMMAD IHSAN FAUZAN', 'MIF', NULL, '2021-06-01', '1996-10-09', 'Bandung', 'Komplek Bumi Harapan Blok DD-11 No.32 Rt 06 Rw 09,Desa Cibiru Hilir, Kecamatan Cileunyi, Kabupaten Bandung', '', '', '0000-00-00', '075001005850504', 0, 0, 9719011, 3, 2, 2, 6, 12, 1, '2021-09-20 14:23:13', 6);
INSERT INTO `m_karyawan` VALUES (1244, NULL, '5914002', '59210063', NULL, 'SIRHADI DWIDJOSAROSO', 'SD', NULL, '2014-11-26', '1959-05-01', 'Denpasar ', '', '', '', '0000-00-00', '', 1, 0, 9621273, 0, 2, 0, 0, 12, 0, '2021-09-24 15:01:59', 21);
INSERT INTO `m_karyawan` VALUES (1245, NULL, '8319055', '8319006', NULL, 'SYAHRUL HADI', 'SH', NULL, '2019-01-10', '1983-12-03', 'Denpasar', '', '', '', '0000-00-00', '', 0, 0, 5914003, 0, 2, 0, 0, 12, 1, '2021-09-24 16:03:07', NULL);
INSERT INTO `m_karyawan` VALUES (1246, NULL, '7804001', '78210064', NULL, 'BORNIS CARLY', 'BC', NULL, '2004-11-26', '1978-11-18', 'Jakarta', 'Pulo indah Asri 2 No 45 petir Cipondoh Tanggerang', '796009819953000', 'JL ALFALAH 1 DURI KOSAMBI CENGKARENG', '0000-00-00', '7189744638', 1, NULL, 8319056, 3, 2, 3, 56, 12, 0, '2021-09-24 16:34:51', NULL);
INSERT INTO `m_karyawan` VALUES (1247, NULL, '7421001', '7421001', NULL, 'RAMA PRATAMA', 'RP', NULL, '2021-07-12', '1974-11-17', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 7804002, 3, 2, 3, 0, 13, 0, '2021-09-27 12:40:02', NULL);
INSERT INTO `m_karyawan` VALUES (1248, NULL, '9421122', '94210220', NULL, 'MUHAMMAD FADHOL', 'MF', 'assets/dokumen/foto/karyawan/thumb_new_1248.jpg', '2021-09-08', '1994-03-21', 'Bangkalan ', '', '', '', '0000-00-00', '', 1, NULL, 7421002, 3, 2, 2, 0, 12, 0, '2021-09-28 08:38:12', NULL);
INSERT INTO `m_karyawan` VALUES (1249, NULL, '9305001', '93210067', NULL, 'HERMAWAN SAPUTRA', 'HS', NULL, '2005-05-26', '1993-06-29', 'Bekasi ', '', '', '', '0000-00-00', '', 1, 0, 9421123, 0, 2, 0, 0, 12, 1, '2021-09-28 11:26:19', 18);
INSERT INTO `m_karyawan` VALUES (1250, NULL, '8120001', '81210150', NULL, 'TONO TRIWIBOWO', 'TT', NULL, '2020-09-26', '1981-07-29', ' Jakarta', '', '', '', '0000-00-00', '', 1, 0, 9305002, 0, 2, 0, 0, 12, 1, '2021-09-28 14:46:00', 21);
INSERT INTO `m_karyawan` VALUES (1251, NULL, '8320002', '83210155', NULL, 'EKDWIS SANYOTO ADJI', 'ESA', NULL, '2020-09-26', '1983-07-17', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 8120002, 0, 2, 0, 0, 12, 1, '2021-09-28 14:50:54', 21);
INSERT INTO `m_karyawan` VALUES (1252, NULL, '8620001', '86210152', NULL, 'HAMKA EFENDI PANGGABEAN', 'HEP', NULL, '2020-09-26', '1986-04-25', 'Sibolga', '', '', '', '0000-00-00', '', 1, 0, 8320003, 0, 2, 0, 0, 12, 1, '2021-09-28 14:55:17', 33);
INSERT INTO `m_karyawan` VALUES (1253, NULL, '9020003', '90210153', NULL, 'IBRAHIM GONTA', 'IG', NULL, '2020-09-26', '1990-09-17', 'LOMULI', '', '', '', '0000-00-00', '', 1, 0, 8620002, 0, 2, 0, 0, 12, 1, '2021-09-28 14:59:10', NULL);
INSERT INTO `m_karyawan` VALUES (1254, NULL, '9220001', '92210151', NULL, 'HIKMATYAR TANZIL BIKSUGUNA', 'HTB', NULL, '2020-09-26', '1992-05-25', 'Indralaya', '', '', '', '0000-00-00', '', 1, 0, 9020004, 0, 2, 0, 0, 12, 1, '2021-09-28 15:04:57', NULL);
INSERT INTO `m_karyawan` VALUES (1255, NULL, '8217003', '82210097', NULL, 'OKI MARIYATONANG', 'OM', NULL, '2017-01-11', '1982-09-12', 'Surabaya', '', '', '', '0000-00-00', '', 0, 0, 9220002, 0, 2, 0, 0, 12, 1, '2021-09-28 16:43:14', NULL);
INSERT INTO `m_karyawan` VALUES (1256, NULL, '9021154', '9021154', NULL, 'CAMILLA AZALEA', 'CA', NULL, '2021-10-04', '1990-09-09', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 8217004, 0, 3, 0, 0, 12, 1, '2021-10-05 09:02:06', NULL);
INSERT INTO `m_karyawan` VALUES (1257, NULL, '8417001', '84210149', NULL, 'YULLI ARIYADI', 'YA', NULL, '2017-07-05', '1984-07-01', 'Ujung Pandang', 'CIREBON', '423209246525000', 'TEGALGONDO RT 02/ RW 10, WONOSARI, KLATEN', '0000-00-00', '359101001964506', 1, NULL, 9021155, 3, 2, 3, 6, 12, 0, '2021-10-06 09:45:16', 22);
INSERT INTO `m_karyawan` VALUES (1258, NULL, '7421002', '7421002', NULL, 'L WAHYU ARDANI', 'LWA', NULL, '2021-10-18', '1974-04-23', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 8417002, 3, 2, 3, 0, 12, 1, '2021-10-18 16:04:50', NULL);
INSERT INTO `m_karyawan` VALUES (1259, NULL, '7921001', '7921001', NULL, 'FAUZAR EFENDY', 'FE', NULL, '2021-10-18', '1979-04-14', 'Probolinggo', '', '', '', '0000-00-00', '', 0, 0, 7421003, 3, 2, 3, 0, 12, 1, '2021-10-18 16:23:42', NULL);
INSERT INTO `m_karyawan` VALUES (1260, NULL, '9118024', '91210113', NULL, 'ZULFAZLI', 'ZI', NULL, '2018-10-01', '1991-07-12', 'Leupu', '', '', '', '0000-00-00', '', 1, 0, 7921002, 0, 2, 0, 0, 12, 1, '2021-10-22 09:27:58', NULL);
INSERT INTO `m_karyawan` VALUES (1261, NULL, '2121002', '2121002', NULL, 'WFM', 'WFM', 'assets/dokumen/foto/karyawan/thumb_new_628.jpg', '2021-10-26', '2021-12-25', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9118025, 3, 2, 2, 0, 4, 1, '2021-10-26 15:29:37', NULL);
INSERT INTO `m_karyawan` VALUES (1262, NULL, '9720002', '97210146', NULL, 'NADYA PRISCILLIA SYARAFINA', 'NPS', NULL, '2020-07-26', '1997-10-18', 'Pemalang ', 'Taman Sari Persada, Cluster Palm, Cibadak, Tanah Sereal, Bogor', '', '', '0000-00-00', '', 1, NULL, 2121003, 3, 3, 2, 0, 12, 0, '2021-11-09 16:10:01', NULL);
INSERT INTO `m_karyawan` VALUES (1263, NULL, '9416036', '94210134', NULL, ' RIZKY NANDA RINI ', 'RNR', NULL, '2016-09-16', '1994-05-30', 'Sei Kopas kab asahan ', '', '', '', '0000-00-00', '', 1, 0, 9720003, 0, 3, 0, 0, 12, 1, '2021-11-11 11:17:01', NULL);
INSERT INTO `m_karyawan` VALUES (1264, NULL, '9020003', '90210018', NULL, 'DENI MUHAMAD ILYAS', 'DMI', NULL, '2020-11-01', '1990-12-02', 'Bekasi ', 'JL. Raya H Abdul Gani No.50 RT.001 RW.002 Kel. Kalibaru Kec.Cilodong, Depok Jawa-Barat', '965961386412000', 'JL. Raya H Abdul Gani No.50 RT.001 RW.002 Kel. Kalibaru Kec.Cilodong, Depok Jawa-Barat', '0000-00-00', '1670001747202', 1, NULL, 9416037, 3, 2, 3, 10, 12, 0, '2021-11-12 17:00:50', NULL);
INSERT INTO `m_karyawan` VALUES (1265, NULL, '7321001', '730293', NULL, 'ENDANG WIDYANINGRUM', 'EW', 'assets/dokumen/foto/karyawan/thumb_new_1265.jpg', '2021-11-01', '1973-08-18', 'JAKARTA', 'BSD SEKTOR 12 BLOK F1/17 Jl BAYU KENCANA TANGERANG SELATAN ', '90.709.058.3-411.000', '', '0000-00-00', '18374852', 0, 0, 9020004, 3, 3, 3, 5, 4, 4, '2021-11-17 08:22:40', NULL);
INSERT INTO `m_karyawan` VALUES (1266, NULL, '9520003', '95210205', NULL, 'M. HIDAYATUL IHSAN', 'MHI', NULL, '2020-05-24', '1995-08-13', 'Pariaman ', '', '', '', '0000-00-00', '', 1, 0, 7321002, 0, 2, 0, 0, 12, 1, '2021-11-17 09:16:07', NULL);
INSERT INTO `m_karyawan` VALUES (1267, NULL, '9721212', '97210024', NULL, 'ADI SETIADI', 'AS', NULL, '2021-01-04', '1997-09-16', 'Bandung ', '', '', '', '0000-00-00', '', 1, 0, 9520004, 0, 2, 0, 0, 12, 1, '2021-11-22 11:34:02', NULL);
INSERT INTO `m_karyawan` VALUES (1268, NULL, '6516001', '651147', NULL, 'ANDY REVARA', 'AR', 'assets/dokumen/foto/karyawan/thumb_new_1268.jpg', '2016-05-02', '1965-10-11', 'JAKARTA', 'TAMAN SARI BUKIT BDG B-XVI NO.18, RT:006 RW:011, SINDANG JAYA, MANDALAJATI, KOTA BANDUNG', '', '', '0000-00-00', '', 0, 0, 9721213, 3, 2, 3, 0, 4, 4, '2021-11-23 09:49:16', NULL);
INSERT INTO `m_karyawan` VALUES (1269, NULL, '7021001', '70210186', NULL, 'MULYADI', 'MLD', NULL, '2021-01-01', '1970-06-07', 'Jakarta ', '', '', '', '0000-00-00', '', 0, 0, 6516002, 0, 2, 0, 0, 12, 1, '2021-11-30 16:44:33', NULL);
INSERT INTO `m_karyawan` VALUES (1270, NULL, '9820215', '98210022', NULL, 'IKHLASUL AMAL', 'IA', NULL, '2020-01-10', '1998-05-18', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7021002, 0, 2, 0, 0, 12, 1, '2021-12-06 18:23:15', NULL);
INSERT INTO `m_karyawan` VALUES (1271, NULL, '8420001', '84210028', NULL, 'AKHMAD RIDUAN', 'AR', NULL, '2020-01-10', '1984-04-28', 'Banjarmasin ', '', '', '', '0000-00-00', '', 1, 0, 9820216, 0, 2, 0, 0, 12, 0, '2021-12-06 18:28:24', NULL);
INSERT INTO `m_karyawan` VALUES (1272, NULL, '9320004', '93210023', NULL, 'KORI SULISTIYO', 'KS', NULL, '2020-01-10', '1993-10-04', 'Cilacap', 'Dusun Liunggunung RT 04 RW 03 Desa Ciruyung Kecamatan Karangpucung Kabupaten Cilacap Provinsi Jawa Tengah', '965701287522000', 'Dusun Liunggunung RT 04 RW 03 Desa Ciruyung Kecamatan Karangpucung Kabupaten Cilacap Provinsi Jawa Tengah', '0000-00-00', '819305720', 1, NULL, 8420002, 3, 2, 3, 5, 12, 0, '2021-12-06 18:30:44', NULL);
INSERT INTO `m_karyawan` VALUES (1273, NULL, '9020003', '90210020', NULL, 'EBIT', 'EB', NULL, '2020-01-10', '1990-10-28', 'Airitam', '', '', '', '0000-00-00', '', 1, 0, 9320005, 0, 2, 0, 0, 12, 0, '2021-12-06 18:35:49', NULL);
INSERT INTO `m_karyawan` VALUES (1274, NULL, '9520003', '95210031', NULL, 'ARASMAN YUSUF REZA', 'AYR', NULL, '2020-01-10', '1995-06-15', 'Bandung ', '', '', '', '0000-00-00', '', 1, NULL, 9020004, 3, 2, 2, 10, 12, 0, '2021-12-06 18:45:38', NULL);
INSERT INTO `m_karyawan` VALUES (1275, NULL, '8822001', '88210014', NULL, 'AHMAT JAILANI SIDIK', 'AJS', NULL, '2022-01-10', '1988-11-01', 'Sragen', '', '', '', '0000-00-00', '', 1, NULL, 9520004, 3, 2, 3, 0, 12, 0, '2021-12-06 18:48:59', NULL);
INSERT INTO `m_karyawan` VALUES (1276, NULL, '7920001', '79210029', NULL, 'WAITO B. MASHURI', 'WBM', NULL, '2020-01-10', '1979-05-05', 'Brebes', '', '', '', '0000-00-00', '', 1, 0, 8822002, 0, 2, 0, 0, 12, 1, '2021-12-06 18:51:26', NULL);
INSERT INTO `m_karyawan` VALUES (1277, NULL, '7716001', '77210045', NULL, 'M RIDWAN', 'MR', NULL, '2016-08-18', '1977-07-17', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 7920002, 0, 2, 0, 0, 12, 0, '2021-12-06 18:54:25', NULL);
INSERT INTO `m_karyawan` VALUES (1278, NULL, '8220002', '82210051', NULL, 'MOHAMMAD ADNAN SUDRAJAT', 'MAS', NULL, '2020-01-10', '1982-04-01', 'Bekasi ', '', '', '', '0000-00-00', '', 1, 0, 7716002, 0, 2, 0, 0, 12, 1, '2021-12-06 19:14:23', NULL);
INSERT INTO `m_karyawan` VALUES (1279, NULL, '6720001', '67210017', NULL, 'CHAIRIL SALIM', 'CS', NULL, '2020-10-01', '1967-09-09', 'Medan', '', '', '', '0000-00-00', '', 1, 0, 8220003, 0, 2, 0, 0, 12, 1, '2021-12-08 09:19:40', NULL);
INSERT INTO `m_karyawan` VALUES (1280, NULL, '9320004', '92210145', NULL, 'AHMAD SOBIRIN', 'AS', NULL, '2020-06-15', '1993-12-15', 'Tangerang', '', '', '', '0000-00-00', '', 0, 0, 6720002, 0, 2, 0, 0, 12, 1, '2021-12-08 10:23:49', NULL);
INSERT INTO `m_karyawan` VALUES (1281, NULL, '8412002', '8419005 ', NULL, 'JHON SUDARLI', 'JS', NULL, '2012-06-01', '1984-01-01', 'Kakiang ', '', '', '', '0000-00-00', '', 0, 0, 9320005, 0, 2, 0, 0, 12, 1, '2021-12-08 10:27:31', NULL);
INSERT INTO `m_karyawan` VALUES (1282, NULL, '8619058', '86210050', NULL, 'ARIF SUYATO', 'AS', NULL, '2019-01-01', '1986-06-25', 'Wonogiri', '', '', '', '0000-00-00', '', 0, 0, 8412003, 0, 2, 0, 0, 12, 1, '2021-12-09 08:22:41', NULL);
INSERT INTO `m_karyawan` VALUES (1283, NULL, '9320004', '93210148', NULL, ' JOSHUA OCTOVIANUS PATTYMAHU', 'OP', NULL, '2020-09-26', '1993-10-22', 'Jakarta ', '', '', '', '0000-00-00', '', 1, 0, 8619059, 0, 2, 0, 0, 12, 1, '2021-12-13 11:21:02', NULL);
INSERT INTO `m_karyawan` VALUES (1284, NULL, '9221152', '92210196', NULL, 'BINTANG ARI PUTRA', 'BAP', NULL, '2021-02-08', '1992-06-06', 'Jakarta ', 'Jl Sirnagalih 3 Buntu Kp Kebon Barat RT 002/ RW 008 Cinangka Sawangan Depok 16516', '', '', '0000-00-00', '6760362601', 1, NULL, 9320005, 3, 2, 2, 1, 12, 0, '2021-12-15 08:48:19', NULL);
INSERT INTO `m_karyawan` VALUES (1285, NULL, '9821167', '98210195', NULL, 'ANDI NUR HANIF', 'ANH', NULL, '2021-02-08', '1998-06-10', 'Lamongan', '', '', '', '0000-00-00', '', 1, NULL, 9221153, 3, 2, 2, 0, 12, 0, '2021-12-15 08:54:00', NULL);
INSERT INTO `m_karyawan` VALUES (1286, NULL, '0122001', '0122001', NULL, 'FARIS JAWAD', 'FJ', NULL, '2022-01-03', '2001-04-06', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9821168, 3, 2, 2, 0, 12, 0, '2022-01-03 15:30:23', NULL);
INSERT INTO `m_karyawan` VALUES (1287, NULL, '0222001', '0222001', NULL, 'HILMI MUHAMMAD DAFA', 'HMD', NULL, '2022-01-03', '2002-02-20', 'Bandung', '', '', '', '0000-00-00', '', 1, NULL, 122002, 3, 2, 2, 0, 12, 0, '2022-01-03 15:57:17', NULL);
INSERT INTO `m_karyawan` VALUES (1288, NULL, '9420006', '94210025', NULL, 'BAYU SANJAYA', 'BS', NULL, '2020-10-01', '1994-06-30', 'Anggana', 'Jl kelapa RT 4 Sidomulyo, Kecamatan Anggana kabupaten Kutai Kartanegara-Kalimantan timur ', '', '', '0000-00-00', '1480017962021', 1, NULL, 222002, 3, 2, 3, 10, 12, 0, '2022-01-10 16:57:42', NULL);
INSERT INTO `m_karyawan` VALUES (1289, NULL, '8522001', '850142', NULL, 'DIMAS INDRA PERMANA', 'DIP', 'assets/dokumen/foto/karyawan/thumb_new_1289.jpg', '2022-01-01', '1985-04-14', 'JAKARTA', '', '', '', '0000-00-00', '', 0, 0, 9420007, 3, 2, 0, 0, 4, 4, '2022-01-14 14:39:07', NULL);
INSERT INTO `m_karyawan` VALUES (1290, NULL, '8822001', '88220222', NULL, 'RITA FAUZIAH', 'RF', NULL, '2022-01-01', '1988-01-01', '-', '', '', '', '0000-00-00', '', 1, 0, 8522002, 0, 3, 0, 0, 12, 4, '2022-01-19 12:25:13', NULL);
INSERT INTO `m_karyawan` VALUES (1291, NULL, '8922224', '89220223', NULL, 'NOFRIADI', 'NOF', NULL, '2022-01-01', '1989-01-01', '-', '', '', '', '0000-00-00', '', 0, 0, 8822002, 0, 0, 0, 0, 0, 1, '2022-01-19 12:35:06', NULL);
INSERT INTO `m_karyawan` VALUES (1292, NULL, '9022001', '90220224', NULL, 'ANDIKA PAWITRA', 'AP', NULL, '2022-01-01', '1990-01-01', '-', '', '', '', '0000-00-00', '', 0, 0, 8922225, 0, 0, 0, 0, 12, 1, '2022-01-19 12:38:01', NULL);
INSERT INTO `m_karyawan` VALUES (1293, NULL, '9122001', '91220225', NULL, 'DITO HENDRA SATYA PERMANA PUTRA', 'DPP', NULL, '2022-01-01', '1991-01-01', '-', '', '', '', '0000-00-00', '', 0, 0, 9022002, 0, 0, 0, 0, 0, 1, '2022-01-19 12:40:18', NULL);
INSERT INTO `m_karyawan` VALUES (1294, NULL, '9420006', '94220226', NULL, 'DANIL PASARIBU', 'DP', NULL, '2020-01-01', '1994-01-01', '-', '', '', '', '0000-00-00', '', 0, 0, 9122002, 0, 2, 0, 0, 12, 1, '2022-01-19 12:42:48', NULL);
INSERT INTO `m_karyawan` VALUES (1295, NULL, '9322001', '93220227', NULL, 'DEN HAMZAH', 'DH', NULL, '2022-01-01', '1993-01-01', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9420007, 0, 0, 0, 0, 0, 1, '2022-01-19 12:45:28', NULL);
INSERT INTO `m_karyawan` VALUES (1296, NULL, '8922224', '89220222', NULL, 'LA ODE HERU NOFIL IRIAWAN', 'LNI', NULL, '2022-01-04', '1989-11-14', 'Muna', 'jalan kanal victory sorong papua barat', '', '', '0000-00-00', '', 1, NULL, 9322002, 3, 2, 2, 0, 12, 0, '2022-01-20 11:12:05', NULL);
INSERT INTO `m_karyawan` VALUES (1297, NULL, '9621272', '96210219', NULL, 'SURYA PERGASAN PILLAY', 'SPP', NULL, '2021-08-01', '1996-05-28', 'Medan ', '', '', '', '0000-00-00', '', 1, 0, 8922225, 0, 2, 0, 0, 12, 1, '2022-02-09 13:42:36', NULL);
INSERT INTO `m_karyawan` VALUES (1298, NULL, '90210030', '90210030', NULL, 'Dodi Juhansa', NULL, NULL, '2021-01-01', '1990-07-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 2, 2, NULL, 12, 1, '2022-02-15 14:24:17', NULL);
INSERT INTO `m_karyawan` VALUES (1299, NULL, '9021003', '90210030', NULL, 'DODI JUHANSA', 'DJ', NULL, '2022-01-24', '1990-07-20', 'JAKARTA', '', '', '', '0000-00-00', '', 1, 0, 90210031, 0, 2, 2, 0, 12, 0, '2022-03-04 11:22:58', NULL);
INSERT INTO `m_karyawan` VALUES (1300, NULL, '7296001', '725185', NULL, 'ASEP ACHMAD MULYANA', 'AAM', 'assets/dokumen/foto/karyawan/thumb_new_1300.jpg', '1996-12-01', '1972-03-17', 'SUMEDANG', 'Jl. Limus Pratama Regency Blok G No. 1 Cilleungsi', '58.552.692.4.436.000', 'Jl. Limus Pratama Regency Blok G No. 1 Cilleungsi', '1996-12-01', '', 1, 0, 9021004, 3, 2, 3, 0, 5, 1, '2022-03-09 14:06:08', NULL);
INSERT INTO `m_karyawan` VALUES (1301, NULL, '7196001', '715063', NULL, 'TEGUH PRIYONO', 'TP', 'assets/dokumen/foto/karyawan/thumb_new_1301.jpg', '1996-11-01', '1971-05-04', 'JAKARTA', 'Jl. O2 No.7 Rt.010/03 kel. Srengseng Sawah kec. Jagakarsa Jakarta Selatan', '07.286.581.9-008-000', 'Jl. Karya Bhakti III No.31 Rt.003/011 kel. Pondok Kopi Kec. Duren Sawit Jakarta Timur', '1996-11-01', '', 1, 0, 7296002, 3, 2, 3, 0, 5, 1, '2022-03-09 14:24:07', NULL);
INSERT INTO `m_karyawan` VALUES (1302, NULL, '94220235', '94220235', NULL, 'PRISTIONO', 'PPP', NULL, '2022-01-11', '1994-12-21', 'Sidomulyo', '', '', '', '2022-01-11', '', 1, 0, 7196002, 3, 2, 0, 0, 12, 1, '2022-03-16 10:41:38', NULL);
INSERT INTO `m_karyawan` VALUES (1303, NULL, '9922001', '9922001', NULL, 'KHURUN AIN MUZAQI', 'KAM', NULL, '2022-03-02', '1999-05-29', 'Banjarnegara', '', '', '', '0000-00-00', '', 1, 0, 94220236, 3, 3, 2, 0, 12, 0, '2022-03-21 16:21:48', NULL);
INSERT INTO `m_karyawan` VALUES (1304, NULL, '9321007', '93210078', NULL, 'WINDRA WAHYU TUNGGAL', 'WWT', NULL, '2016-08-01', '1993-10-12', 'Madiun', '', '', '', '2016-08-01', '', 1, NULL, 9922002, 3, 3, 3, 0, 12, 0, '2022-03-22 10:56:21', NULL);
INSERT INTO `m_karyawan` VALUES (1305, NULL, '9919002', '99210123', NULL, 'MARRIYATUL QIBTHIYYAH', 'MQ', NULL, '2019-01-01', '1999-02-07', 'Bogor', '', '', '', '2019-01-01', '', 0, 0, 9321008, 0, 3, 0, 0, 0, 0, '2022-03-22 11:00:08', NULL);
INSERT INTO `m_karyawan` VALUES (1306, NULL, '9422023', '94220238', NULL, 'DHIMITA JATI PRADITYA', 'DJP', NULL, '2023-03-01', '1994-08-21', 'Bogor', '', '', '', '0000-00-00', '0223915981', 1, 0, 9919003, 3, 3, 3, 5, 3, 4, '2022-04-04 13:20:24', NULL);
INSERT INTO `m_karyawan` VALUES (1307, NULL, '2222001', '2222001', NULL, 'IDEA SERVICE DELIVERY', 'ISD', NULL, '2022-04-05', '2022-04-05', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9422024, 0, 2, 0, 0, 12, 1, '2022-04-05 14:05:22', NULL);
INSERT INTO `m_karyawan` VALUES (1308, NULL, '7422001', '740277', NULL, 'LUKMAN HAKIM ABD. RAUF', 'LAR', 'assets/dokumen/foto/karyawan/thumb_new_1308.jpg', '2022-04-01', '1974-08-12', 'WATAMPONE', 'CELEBRATION GARDEN AC 7 NO.12 GRAND WISATA, RT:002 RW:007, KEL: LAMBANGJAYA, KEV: TAMBUN SELATAN, KABUPATEN BEKASI', '094324308428000', '', '0000-00-00', '1320004351632', 1, 0, 2222002, 3, 2, 3, 10, 7, 1, '2022-04-06 13:06:55', NULL);
INSERT INTO `m_karyawan` VALUES (1309, NULL, '7222001', '720348', NULL, 'AKHMAD LUDFY', 'AL', 'assets/dokumen/foto/karyawan/thumb_new_1309.jpg', '2022-04-01', '1972-04-20', 'JAKARTA', 'KOMPLEK MEGA ASRI II BLOK D.5, RT:006 RW:007, KEL: CAMPAKA, KEC: ANDIR, KOTA BANDUNG', '094275435428000', '', '0000-00-00', '1310014005161', 0, 0, 7422002, 3, 2, 3, 10, 7, 1, '2022-04-06 13:12:48', NULL);
INSERT INTO `m_karyawan` VALUES (1310, NULL, '9622023', '96220239', NULL, 'ADITYA NUGRAHA', 'AN', NULL, '0000-00-00', '1996-04-19', 'Ciamis', '', '', '', '0000-00-00', '', 1, 0, 7222002, 0, 2, 0, 0, 12, 1, '2022-04-18 08:24:00', NULL);
INSERT INTO `m_karyawan` VALUES (1311, NULL, '7022024', '70220240', NULL, 'ALIK SUBAGIYO', 'AS', NULL, '0000-00-00', '1970-04-22', 'Bojonegoro', '', '', '', '0000-00-00', '', 1, 0, 9622024, 3, 2, 0, 0, 12, 1, '2022-04-18 09:35:25', NULL);
INSERT INTO `m_karyawan` VALUES (1312, NULL, '8022001', '80220241', NULL, 'AGUS SUPENA', 'AS', NULL, '2022-04-01', '1980-04-06', 'Bandung', '', '', '', '0000-00-00', '', 1, 0, 7022025, 3, 2, 3, 0, 12, 1, '2022-05-10 08:46:53', NULL);
INSERT INTO `m_karyawan` VALUES (1313, NULL, '7222001', '720373', NULL, 'ANDRI YUNIANTO', 'AY', 'assets/dokumen/foto/karyawan/thumb_new_1313.jpg', '2022-06-10', '1972-06-12', 'MAGELANG', 'JL. BUARAN III BLOK ME NO.3, RT:005 RW:015, KEL: DUREN SAWIT, KEC: DUREN SAWIT, JAKARTA TIMUR', '09.652.062.2-061.000', '', '0000-00-00', '', 1, 0, 8022002, 3, 2, 3, 0, 7, 4, '2022-06-07 09:34:48', NULL);
INSERT INTO `m_karyawan` VALUES (1314, NULL, '0021016', '00210154', NULL, 'ARIEF PERMANA', 'AP', NULL, '2021-01-01', '2000-11-25', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7222002, 3, 2, 2, 0, 12, 4, '2022-06-08 09:11:08', NULL);
INSERT INTO `m_karyawan` VALUES (1315, NULL, '8121208', '81210156', NULL, 'ABU SOFYAN', 'AS', NULL, '2021-01-01', '1981-12-17', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 21017, 3, 2, 3, 0, 12, 0, '2022-06-08 09:20:03', NULL);
INSERT INTO `m_karyawan` VALUES (1316, NULL, '9421221', '94210144', NULL, 'WULAN KUSUMANINGTYAS', 'WK', NULL, '2021-01-01', '1994-09-28', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 8121209, 3, 3, 2, 0, 12, 0, '2022-06-08 09:23:14', NULL);
INSERT INTO `m_karyawan` VALUES (1317, NULL, '9621015', '96210157', NULL, 'NOVITA HANDAYANI', 'NH', NULL, '2021-01-04', '1996-11-19', 'Jakarta', 'Jl Melati 5 No. 23 RT/RW 006/011 Jati Sampurna. Bekasi 17433', '865940316447000', 'KPP PRATAMA PONDOK GEDE', '0000-00-00', '6468529510', 1, NULL, 9421222, 3, 3, 2, 56, 12, 0, '2022-06-22 10:08:31', NULL);
INSERT INTO `m_karyawan` VALUES (1318, NULL, '9822001', '98220246', NULL, 'FARAH MARTARIZA PUTRI', 'FMP', NULL, '2022-06-01', '1998-03-23', 'Medan', '', '', '', '0000-00-00', '', 1, NULL, 9621016, 3, 3, 3, 0, 12, 0, '2022-07-04 10:06:08', NULL);
INSERT INTO `m_karyawan` VALUES (1319, NULL, '8520001', '850139', NULL, 'MARIA ULIARTA PASARIBU, M.M', 'MPM', 'assets/dokumen/foto/karyawan/thumb_new_1319.jpg', '2020-01-01', '1985-02-20', 'MEDAN', '', '', '', '0000-00-00', '', 1, 0, 9822025, 5, 3, 3, 0, 4, 0, '2022-07-06 10:17:48', NULL);
INSERT INTO `m_karyawan` VALUES (1320, NULL, '9722229', '97220242', NULL, 'RIZKI ADHI SAPUTRA', 'RAS', NULL, '2022-04-01', '1997-08-23', 'Banyumas ', '', '', '', '0000-00-00', '', 1, NULL, 8520002, 3, 2, 2, 5, 12, 0, '2022-07-11 13:37:15', NULL);
INSERT INTO `m_karyawan` VALUES (1321, NULL, '9822247', '98220248', NULL, 'FALDA AZQARRYN AGAM', 'FAA', NULL, '2022-04-28', '1998-08-06', 'Jakarta', '', '', '', '0000-00-00', '1820011546561', 1, NULL, 9722230, 0, 3, 2, 0, 12, 0, '2022-07-13 10:12:48', NULL);
INSERT INTO `m_karyawan` VALUES (1322, NULL, '9122231', '98210001', NULL, 'EZRA GIAFATH', 'EG', NULL, '2022-01-01', '1998-11-04', 'Jakarta', 'Komplek DKI Blok B2 No 3, Kel. Pondok Kelapa, Kec. Duren Sawit, Jakarta Timur', '', '', '0000-00-00', '', 1, NULL, 9822248, 3, 2, 2, 0, 12, 0, '2022-07-19 13:45:28', NULL);
INSERT INTO `m_karyawan` VALUES (1323, NULL, '9122231', '96210002', NULL, 'ANGGER KURNIA SANTOSO', 'AK', NULL, '2022-01-01', '1996-05-01', 'Jakarta', '', '', '', '0000-00-00', '', 1, NULL, 9122232, 3, 2, 2, 0, 12, 0, '2022-07-19 13:55:53', NULL);
INSERT INTO `m_karyawan` VALUES (1324, NULL, '9122231', '94210003', NULL, 'MONICA FADILA', 'MF', NULL, '2022-01-01', '1991-01-01', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9122232, 0, 0, 0, 0, 12, 1, '2022-07-19 14:55:58', NULL);
INSERT INTO `m_karyawan` VALUES (1325, NULL, '9122231', '94210053', NULL, 'NUR FA\'IZAH ABDULLAH', 'NFA', NULL, '2022-01-01', '1991-01-01', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9122232, 0, 0, 0, 0, 12, 1, '2022-07-19 15:32:11', NULL);
INSERT INTO `m_karyawan` VALUES (1326, NULL, '9122231', '95210191', NULL, 'HARRY WISUDA', 'HW', NULL, '2022-01-01', '1991-01-01', 'Bogor', 'Bali Resort Bogor, Kintamani KG-20', '63.033.321.9-403.000', 'Pratama Cibinong', '0000-00-00', '', 1, NULL, 9122232, 3, 2, 2, 0, 12, 0, '2022-07-19 15:37:44', NULL);
INSERT INTO `m_karyawan` VALUES (1327, NULL, '9122231', '86210062', NULL, 'ASRILA LETSOIN', 'AL', NULL, '2022-01-01', '1991-01-01', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9122232, 0, 0, 0, 0, 12, 1, '2022-07-19 15:50:42', NULL);
INSERT INTO `m_karyawan` VALUES (1328, NULL, '9122231', '97210011', NULL, 'MUHAMAD UBAIDILAH', 'MU', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9122232, 0, 2, 0, 0, 12, 1, '2022-07-25 15:14:44', NULL);
INSERT INTO `m_karyawan` VALUES (1329, NULL, '9122231', '99210200', NULL, 'ANDHIKA FAJAR KHARISMA', 'AFK', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9122232, 0, 2, 0, 0, 12, 1, '2022-07-25 15:18:48', NULL);
INSERT INTO `m_karyawan` VALUES (1330, NULL, '9122231', '86210062', NULL, 'ASRILA LETSOIN', 'AL', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9122232, 0, 2, 0, 0, 12, 1, '2022-07-25 15:30:51', NULL);
INSERT INTO `m_karyawan` VALUES (1331, NULL, '0022001', '00220252 ', NULL, 'M ADAM RADITYA P.N', 'MPN', NULL, '2022-07-01', '2000-07-16', 'Bandar Lampung', 'JL. Pejaten Raya No.49 , Pasar Minggu , Jakarta Selatan', '91.331.826.7-322.000', 'JL. Mawar Gang Kemakmuran No.23/6 RT.003 Enggal , Enggal , Kota Bandar Lampung', '0000-00-00', '5540592545', 1, NULL, 9122232, 3, 2, 2, 1, 12, 0, '2022-07-26 10:36:38', NULL);
INSERT INTO `m_karyawan` VALUES (1332, NULL, '7821020', '78210203', NULL, 'RAHMAT', 'RRR', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 22002, 0, 2, 0, 0, 12, 1, '2022-07-26 13:49:34', NULL);
INSERT INTO `m_karyawan` VALUES (1333, NULL, '7321019', '73210190', NULL, 'NURDIN', 'NNN', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7821021, 0, 2, 0, 0, 12, 0, '2022-07-26 16:08:40', NULL);
INSERT INTO `m_karyawan` VALUES (1334, NULL, '91992__', '74210189', NULL, 'BAMBANG SENOAJI', 'BS', NULL, '0000-00-00', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7321020, 0, 2, 0, 0, 12, 1, '2022-07-26 16:14:18', NULL);
INSERT INTO `m_karyawan` VALUES (1335, NULL, '7021018', '70210188', NULL, 'HASANUDIN', 'HHH', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 91993, 0, 0, 0, 0, 12, 0, '2022-07-26 16:22:22', NULL);
INSERT INTO `m_karyawan` VALUES (1336, NULL, '9122231', '86210183', NULL, 'ASEP SAIPUL MILAH', 'ASM', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7021019, 0, 2, 0, 0, 12, 1, '2022-07-26 16:43:23', NULL);
INSERT INTO `m_karyawan` VALUES (1337, NULL, '5821018', '58210182', NULL, 'SAARIH', 'SAA', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9122232, 0, 2, 0, 0, 12, 1, '2022-07-26 16:54:40', NULL);
INSERT INTO `m_karyawan` VALUES (1338, NULL, '9221017', '92210175', NULL, 'FAUZAN AZIMA NASUTION', 'FAN', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 5821019, 0, 2, 0, 0, 12, 1, '2022-07-26 17:10:38', NULL);
INSERT INTO `m_karyawan` VALUES (1339, NULL, '7821017', '78210171', NULL, 'SAEFUL RAHMAT', 'SR', NULL, '1991-01-11', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9221018, 0, 2, 0, 0, 12, 1, '2022-07-29 09:05:45', NULL);
INSERT INTO `m_karyawan` VALUES (1340, NULL, '74210170', '74210170', NULL, 'ASEP', 'ASP', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7821018, 0, 2, 0, 0, 12, 1, '2022-07-29 09:13:23', NULL);
INSERT INTO `m_karyawan` VALUES (1341, NULL, '7921016', '79210169', NULL, 'ASEP', 'SEP', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9122232, 0, 2, 0, 0, 12, 1, '2022-07-29 09:19:18', NULL);
INSERT INTO `m_karyawan` VALUES (1342, NULL, '7221016', '72210168', NULL, 'M ALI MARGONO', 'MAM', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7921017, 0, 2, 0, 0, 12, 1, '2022-07-29 09:39:11', NULL);
INSERT INTO `m_karyawan` VALUES (1343, NULL, '9921019', '99210193', NULL, 'RANDRETYA DAVIT ANUGRAH', 'RDA', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7221017, 0, 2, 0, 0, 12, 1, '2022-07-29 13:49:01', NULL);
INSERT INTO `m_karyawan` VALUES (1344, NULL, '9521019', '95210192', NULL, 'YANUARYAZ ACHMAD NUR WIDAPUTRA', 'YNW', NULL, '2022-01-01', '1995-01-29', 'Semarang ', 'Jl. Kp Setu Asem no 72 RT 01 RW 14, Mekarwangi, Tanah Sereal ', '76.986.285.5-518.000', 'Suryokusumo V F no.3 RT 005 RW 020, Muktiharjo Kidul , Pedurungan Kota Semarang', '0000-00-00', '7189969567', 1, NULL, 9921020, 3, 2, 2, 56, 12, 0, '2022-07-29 13:53:40', NULL);
INSERT INTO `m_karyawan` VALUES (1345, NULL, '9321016', '93210167', NULL, 'MUHAMMAD DICKY CHAIRUDIN ', 'MC', NULL, '2022-01-01', '1993-08-04', 'Bogor', 'Kp.Babakan rt01/09, kel.Bubulak, Kec. Kota Bogor Barat', '', '', '0000-00-00', '', 1, NULL, 9521020, 3, 2, 3, 5, 12, 0, '2022-07-29 13:56:24', NULL);
INSERT INTO `m_karyawan` VALUES (1346, NULL, '7921016', '79210165', NULL, 'TEGUH BUDI PRIYANTO', 'TBP', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9321017, 0, 2, 0, 0, 12, 1, '2022-07-29 14:03:11', NULL);
INSERT INTO `m_karyawan` VALUES (1347, NULL, '8721016', '87210164', NULL, 'ANWAR FAUZI', 'AF', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7921017, 0, 2, 0, 0, 12, 1, '2022-08-08 11:02:11', NULL);
INSERT INTO `m_karyawan` VALUES (1348, NULL, '7821016', '78210163', NULL, 'ERDY SUKARDI', 'ES', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 8721017, 0, 2, 0, 0, 12, 1, '2022-08-08 11:06:31', NULL);
INSERT INTO `m_karyawan` VALUES (1349, NULL, '8021016', '80210162', NULL, 'FREDY', 'FRD', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7821017, 0, 2, 0, 0, 12, 1, '2022-08-08 11:08:53', NULL);
INSERT INTO `m_karyawan` VALUES (1350, NULL, '7221016', '72210161', NULL, 'LATIP', 'LTP', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 8021017, 0, 2, 0, 0, 12, 1, '2022-08-08 11:11:11', NULL);
INSERT INTO `m_karyawan` VALUES (1351, NULL, '9421015', '94210158', NULL, 'DONY DWI HIDAYAT', 'DDH', NULL, '2022-01-01', '1991-01-11', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7221017, 0, 2, 0, 0, 12, 1, '2022-08-08 11:42:28', NULL);
INSERT INTO `m_karyawan` VALUES (1352, NULL, '8321014', '83210143', NULL, 'TAUFIK HIDAYAT', 'TH', NULL, '2022-01-01', '1983-08-01', 'Jakarta', 'Jl. Raya Krukut Gg. H. Suaib No. 3M, Rt. 006 Rw. 002,  Kel. Krukut Kec. Limo Depok -  Jawa Barat Indonesia 16512', '357261882009000', 'Jl. Temulawak III No. 50 Rt. 001 Rw.008, Kel. Cibubur Kec. Ciracas Jakarta Timur Indonesia 13720', '0000-00-00', '7191547939', 1, NULL, 9421016, 3, 2, 3, 56, 12, 0, '2022-08-08 11:58:11', NULL);
INSERT INTO `m_karyawan` VALUES (1353, NULL, '7522230', '75220249', NULL, 'RUSLI', 'RLI', NULL, '2022-01-01', '1975-01-01', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 8321015, 0, 2, 3, 0, 12, 0, '2022-08-17 21:42:02', NULL);
INSERT INTO `m_karyawan` VALUES (1354, NULL, '9522246', '95220250', NULL, 'MUHAMMAD ILHAM MAULANA MARDHIKA', 'MIM', NULL, '2022-01-01', '1995-08-08', 'Jakarta', '', '', '', '0000-00-00', '', 1, NULL, 7522231, 3, 2, 2, 5, 12, 0, '2022-08-17 21:47:29', NULL);
INSERT INTO `m_karyawan` VALUES (1355, NULL, '9822249', '98220253', NULL, 'PRAYOGA DWI PANGESTU', 'PDP', NULL, '2022-01-01', '1998-01-14', 'JAKARTA', '', '', '', '0000-00-00', '', 1, NULL, 9522247, 6, 2, 2, 0, 12, 0, '2022-08-17 21:50:39', NULL);
INSERT INTO `m_karyawan` VALUES (1356, NULL, '0022053', '00220254', NULL, 'WIDAD SELASIH', 'WS', NULL, '2022-01-01', '2000-01-26', 'Bogor', '', '', '', '0000-00-00', '', 1, NULL, 9822250, 3, 3, 2, 0, 12, 0, '2022-08-17 21:58:46', NULL);
INSERT INTO `m_karyawan` VALUES (1357, NULL, '7622001', '76220247', NULL, 'RACHMAN SALEH', 'RS', NULL, '2022-01-01', '1976-01-01', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 22054, 3, 2, 3, 0, 12, 0, '2022-08-17 22:02:32', NULL);
INSERT INTO `m_karyawan` VALUES (1358, NULL, '7021189', '70210185', NULL, 'MULYADI', 'MLY', NULL, '2021-01-01', '1970-06-07', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 7622002, 0, 2, 0, 0, 12, 1, '2022-08-31 09:42:51', NULL);
INSERT INTO `m_karyawan` VALUES (1359, NULL, '9622245', '960078', NULL, 'CAHYA BUDI MUHAMMAD', 'CBM', 'assets/dokumen/foto/karyawan/thumb_new_1359.jpg', '2022-09-01', '1996-04-26', 'BANDUNG ', 'JL. MULIA NO.2 KP TAJUR, RT:004 RW:002, KEL:TAJUR, KEC: CILEDUG, KOTA TANGERANG, BANTEN', '', '', '0000-00-00', '0797656770', 1, 0, 7021190, 3, 2, 3, 0, 4, 4, '2022-09-13 08:42:03', NULL);
INSERT INTO `m_karyawan` VALUES (1360, NULL, '9622245', '960078', NULL, 'CAHYA BUDI MUHAMMAD', 'CBM', NULL, '2022-09-14', '1996-09-14', 'Bogor', '', '', '', '0000-00-00', '', 0, 0, 9622246, 0, 0, 0, 0, 0, 1, '2022-09-14 09:32:18', NULL);
INSERT INTO `m_karyawan` VALUES (1361, NULL, '7318001', '730566', NULL, 'ANGGORO KURNIANTO WIDIAWAN,MSC', 'AKWW', 'assets/dokumen/foto/karyawan/thumb_new_1361.jpg', '2018-09-13', '1973-12-25', 'MAGELANG', '', '', '', '0000-00-00', '', 1, 0, 9622246, 3, 3, 3, 0, 7, 3, '2022-09-15 15:41:19', NULL);
INSERT INTO `m_karyawan` VALUES (1362, NULL, '2222002', '2222002', NULL, 'PENTEST1', 'P1', NULL, '2022-09-16', '2022-09-16', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 7318002, 3, 2, 2, 0, 12, 0, '2022-09-16 15:03:21', NULL);
INSERT INTO `m_karyawan` VALUES (1363, NULL, '2222003', '2222003', NULL, 'PENTEST2', 'P2', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 2222003, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1364, NULL, '9820001', '98210004', NULL, 'ZIKRI MUSSANDI ', 'ZM', NULL, '2020-08-01', '1998-07-27', 'Bekasi', '', '', '', '0000-00-00', '', 0, 0, 2222004, 0, 0, 0, 0, 12, 1, '2022-09-19 13:35:05', NULL);
INSERT INTO `m_karyawan` VALUES (1365, NULL, '2222004', '2222004', NULL, 'TESTING', 'TST', NULL, '2022-09-19', '2022-09-19', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 9820002, 10, 2, 2, 0, 12, 0, '2022-09-19 17:10:09', NULL);
INSERT INTO `m_karyawan` VALUES (1366, NULL, '9922002', '99220259', NULL, 'MELINDA UTAMI', 'MU', NULL, '2022-09-26', '1999-08-19', 'Banyumas', '', '', '', '0000-00-00', '', 1, 0, 2222005, 0, 3, 2, 0, 12, 0, '2022-09-27 17:06:18', NULL);
INSERT INTO `m_karyawan` VALUES (1367, NULL, '91992__', '9114007', NULL, 'RYAN ARFIANTO FACHIM', 'RAF', NULL, '0000-00-00', '1991-12-30', 'Jayapura', '', '', '', '0000-00-00', '', 0, 0, 9922003, 0, 0, 0, 0, 12, 1, '2022-10-04 10:34:14', NULL);
INSERT INTO `m_karyawan` VALUES (1368, NULL, '8222001', '82220264 ', NULL, 'SUNOTO', 'SO', NULL, '2022-10-03', '1982-05-06', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 91993, 0, 2, 0, 0, 12, 1, '2022-10-13 15:42:32', NULL);
INSERT INTO `m_karyawan` VALUES (1369, NULL, '2222004', '2222004', NULL, 'PENTEST3', 'P3', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222004, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1370, NULL, '2222005', '2222005', NULL, 'PENTEST4', 'P4', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222005, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1371, NULL, '2222006', '2222006', NULL, 'PENTEST5', 'P5', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222006, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1372, NULL, '2222007', '2222007', NULL, 'PENTEST6', 'P6', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222007, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1373, NULL, '2222008', '2222008', NULL, 'PENTEST7', 'P7', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222008, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1374, NULL, '2222009', '2222009', NULL, 'PENTEST8', 'P8', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222009, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1375, NULL, '2222010', '2222010', NULL, 'PENTEST9', 'P9', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222010, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1376, NULL, '2222011', '2222011', NULL, 'PENTEST10', 'P10', NULL, '2022-09-16', '2022-09-16', 'BOGOR', '', '', '', NULL, '', 1, 0, 2222011, 10, 3, 3, 0, 12, 0, '2022-09-16 15:06:16', NULL);
INSERT INTO `m_karyawan` VALUES (1377, NULL, '9722243', '97220260', NULL, 'MAYANG JUWITA', 'MJ', NULL, '2022-09-01', '1997-06-13', 'Jakarta', '', '', '', '0000-00-00', '', 1, 0, 2222012, 0, 3, 0, 0, 12, 1, '2022-10-18 15:46:21', NULL);
INSERT INTO `m_karyawan` VALUES (1378, NULL, '9622245', '96220266', NULL, 'ANGGI WIYANI PUTRI N', 'AWP', NULL, '2022-10-10', '1996-09-02', 'balikpapan', '', '', '', '0000-00-00', '', 1, 0, 9722244, 0, 3, 0, 0, 12, 1, '2022-10-21 14:56:57', NULL);
INSERT INTO `m_karyawan` VALUES (1379, NULL, '9822254', '98220267', NULL, 'PUTRI AWALIA', 'PA', NULL, '2022-10-25', '1998-05-24', 'Depok', '', '', '', '0000-00-00', '', 1, 0, 9622246, 3, 3, 2, 0, 12, 1, '2022-10-28 16:52:22', NULL);
INSERT INTO `m_karyawan` VALUES (1380, NULL, '9722261', '97220274', NULL, 'RIAN FITRIANA', 'RF', NULL, '2022-11-01', '1997-12-20', 'TASIKMALAYA', '', '', '', '0000-00-00', '', 1, 0, 9822255, 3, 2, 2, 0, 12, 4, '2022-11-02 16:24:16', NULL);
INSERT INTO `m_karyawan` VALUES (1381, NULL, '9222001', '928897', NULL, 'REVINA FEBRIANTY PUTRITAMA', 'RFP', 'assets/dokumen/foto/karyawan/thumb_new_1381.jpg', '2022-11-01', '1992-02-28', 'JAKARTA', 'JL. PATRA KOMALA NO.13, RT:002 RW:001, JATIPULO, PALMERAH', '831187372031000', '', '0000-00-00', '2802929221', 1, 0, 9722262, 3, 3, 2, 5, 2, 4, '2022-11-03 16:49:10', NULL);
INSERT INTO `m_karyawan` VALUES (1382, NULL, '01230279', '0123288', NULL, 'DHANIA PUTRI ADITIA', 'DIA', NULL, '2023-01-01', '2001-01-03', 'Cianjur', '', '', '', '0000-00-00', '', 1, 0, 9222002, 3, 3, 3, 0, 3, 4, '2022-11-10 12:36:37', NULL);
INSERT INTO `m_karyawan` VALUES (1383, NULL, '9822268', '98220261', NULL, 'ADMINESER MANULLANG', 'AM', NULL, '2022-09-01', '1998-12-06', 'BOGOR', '', '', '', '0000-00-00', '', 1, 0, 2222013, 3, 2, 2, 0, 12, 0, '2022-12-21 16:50:40', NULL);
INSERT INTO `m_karyawan` VALUES (1384, NULL, '9222001', '92220271', NULL, 'USMAN ALAMSYAH', 'UA', NULL, '2022-11-10', '1992-12-27', 'Bogor', '', '', '', '2022-11-10', '', 1, 0, 9822269, 0, 3, 0, 0, 12, 0, '2022-12-22 11:28:56', NULL);
INSERT INTO `m_karyawan` VALUES (1386, NULL, '23001__', '2222012', NULL, 'NOC', 'NOC', NULL, '0000-00-00', '2023-01-03', 'Bogor', '', '', '', '0000-00-00', '', 1, 0, 9222002, 0, 2, 0, 0, 0, 0, '2023-01-05 17:08:15', NULL);
INSERT INTO `m_karyawan` VALUES (1387, NULL, '97230278', '97230278', NULL, 'RIZKI HIDAYATI', 'RH', NULL, '0000-00-00', '1997-06-04', 'Cilacap', '', '', '', '2023-01-16', '', 1, 0, 23002, 0, 3, 0, 0, 12, 4, '2023-02-01 11:26:44', NULL);
INSERT INTO `m_karyawan` VALUES (1388, NULL, '9923028', '99230280', NULL, 'MELSA PUTRI FANI', 'MPF', NULL, '2023-01-01', '1999-04-03', 'Koto Panjang', 'Jalan Musi IX No. 234 Abadijaya, Sukmajaya, Depok', '63.519.066.3-204.000', 'Jorong Koto Panjang No. 256 Kecamatan Sungai Tarab Kota Batusangkar Sumatera Barat', '2023-01-01', '7221529434', 1, NULL, 97276, 3, 3, 2, 56, 12, 0, '2023-02-01 16:31:54', NULL);
INSERT INTO `m_karyawan` VALUES (1389, NULL, '0223001', '01230287', NULL, 'RATNA SARI', 'RS', NULL, '2023-01-01', '2002-01-14', 'Depok', '', '', '', '0000-00-00', '', 1, 0, 9923029, 3, 3, 2, 0, 12, 0, '2023-02-01 19:17:36', NULL);
INSERT INTO `m_karyawan` VALUES (1390, NULL, '7423001', '74230291', NULL, 'ASEP', 'ASQ', NULL, '2023-02-01', '1974-04-06', 'Bogor', '', '', '', '2023-02-01', '', 1, 0, 223002, 0, 2, 0, 0, 12, 4, '2023-02-03 13:11:45', NULL);
INSERT INTO `m_karyawan` VALUES (1391, NULL, '8923001', '89230290', NULL, 'IMANUEL R MEA', 'IRM', NULL, '2023-01-26', '1989-12-25', 'Doyo', '', '', '', '2023-01-26', '', 1, 0, 7423002, 0, 2, 0, 0, 12, 4, '2023-02-03 13:24:37', NULL);
INSERT INTO `m_karyawan` VALUES (1392, NULL, '8823001', '88230289', NULL, 'ANTHONY DANO', 'AD', NULL, '2023-01-01', '1988-04-12', '-', '', '', '', '2023-01-01', '', 1, 0, 8923002, 0, 2, 0, 0, 12, 4, '2023-02-03 13:30:12', NULL);
INSERT INTO `m_karyawan` VALUES (1393, NULL, '98230282', '98230282', NULL, 'FAJRI RAHMAN QUSYAIFI', 'FRQ', NULL, '2023-01-01', '1998-10-30', 'Payakumbuh, Sumatera Barat', 'Perumahan Griya Satwika Komplek Telkom Blok B1/7, Ciputat Timur, Kota Tangerang selatan', '624812657453000', 'Perumahan Griya Satwika Komplek Telkom Blok B1/7, Ciputat Timur, Kota Tangerang selatan', '2023-01-01', '1110010457873', 1, NULL, 8823002, 3, 2, 2, 14, 12, 0, '2023-02-03 13:43:33', NULL);
INSERT INTO `m_karyawan` VALUES (1394, NULL, '0123288', '01230281', NULL, 'AZ-ZAHRA PUTRI ISLAMIYAH', 'API', NULL, '2023-01-01', '2001-08-01', '-', '', '', '', '2023-01-01', '', 1, 0, 9723029, 0, 3, 0, 0, 12, 4, '2023-02-03 13:47:50', NULL);
INSERT INTO `m_karyawan` VALUES (1395, NULL, '99230283', '99230283', NULL, 'REZA FAHLEVI', 'RF', NULL, '2023-01-01', '1999-02-04', 'Jakarta', '', '', '', '2023-01-01', '', 1, 0, 123289, 0, 2, 0, 0, 12, 4, '2023-02-03 13:51:13', NULL);
INSERT INTO `m_karyawan` VALUES (1396, NULL, '9718003', '97230284', NULL, 'DESTY AUDINA', 'DA', NULL, '2018-01-01', '1997-12-05', 'Jakarta', '', '', '', '2018-01-01', '', 1, 0, 9923282, 0, 3, 0, 0, 12, 4, '2023-02-03 13:54:40', NULL);
INSERT INTO `m_karyawan` VALUES (1397, NULL, '01230285', '01230285', NULL, 'NAUFAL ALIM HARYA PUTRA', 'NHP', NULL, '2023-01-01', '2001-07-04', 'Wonogiri', '', '', '', '2023-01-01', '', 1, 0, 9718004, 0, 2, 0, 0, 12, 4, '2023-02-03 13:56:48', NULL);
INSERT INTO `m_karyawan` VALUES (1398, NULL, '0223001', '01230287', NULL, 'RATNA SARI', 'RS', NULL, '2023-01-01', '2002-01-14', 'Depok', '', '', '', '2023-01-01', '', 0, 0, 123289, 0, 3, 0, 0, 12, 4, '2023-02-03 15:19:51', NULL);
INSERT INTO `m_karyawan` VALUES (1399, NULL, '7323001', '720246', NULL, 'RINDO FITEGA', 'RF', 'assets/dokumen/foto/karyawan/thumb_new_1399.jpg', '2023-02-01', '1972-07-31', 'PADANG', 'KAV DKI BLOK A.11 NO.34 , RT:005 RW:011, KEL: MALAKA JAYA, KEC: DUREN SAWIT, JAKARTA TIMUR, DKI ', '17.066.935.2-015000', 'KAV DKI BLOK A XI NO.34 RT. 005/011 Kel. MALAKA JAYA', '0000-00-00', '0682258001', 1, 0, 223002, 3, 2, 3, 5, 4, 3, '2023-02-08 09:50:42', NULL);
INSERT INTO `m_karyawan` VALUES (1400, NULL, '9423001', '94230288', NULL, 'FEDRY TIASMANA', 'FT', NULL, '2023-01-01', '1994-07-02', 'Jakarta', '', '', '', '2023-01-01', '', 1, 0, 7323002, 0, 2, 0, 0, 12, 0, '2023-02-13 10:25:08', NULL);
INSERT INTO `m_karyawan` VALUES (1401, NULL, '9923281', '99220273', NULL, 'FITRAH AMALIA ARSY', 'FAA', NULL, '2023-01-01', '1999-05-14', 'Pasuruan', '', '', '', '2023-01-01', '', 1, NULL, 9423002, 3, 3, 2, 0, 12, 0, '2023-02-16 11:54:05', NULL);
INSERT INTO `m_karyawan` VALUES (1402, NULL, '9923281', '99230292', NULL, 'SANDHY MOHAMMAD IBNU SHINA', 'SIS', NULL, '2023-01-01', '1999-08-03', 'BOGOR', '', '', '', '0000-00-00', '', 1, NULL, 9923282, 3, 2, 2, 0, 12, 0, '2023-02-20 13:18:25', NULL);
INSERT INTO `m_karyawan` VALUES (1403, NULL, '9923293', '99230292', NULL, 'SANDHY MOHAMMAD IBNU SHINA', 'SIS', NULL, '2023-02-20', '1999-08-03', 'Bogor', '', '', '', '2023-02-20', '', 0, 0, 9923282, 0, 0, 0, 0, 12, 4, '2023-02-20 16:39:22', NULL);
INSERT INTO `m_karyawan` VALUES (1404, NULL, '0023001', '00230286', NULL, 'IRVAN HUSNI SAUGI', 'IHS', NULL, '2023-01-01', '2000-02-01', 'Bekasi', 'Jl. Swakelola Kav. Cimanuk, RT/RW 003/014, Kel. Karyamulya, Kecamatan Kesambi, Kota Cirebon, Jawa Barat', '62.154.068.1-407.000', 'Jl. Raya Narogong KM. 5 No. 224, Bojong Rawalumbu, Rawalumbu, Kota Bekasi, Jawa Barat', '2023-01-01', '', 1, NULL, 9923294, 3, 2, 2, 0, 12, 0, '2023-02-22 14:35:31', NULL);
INSERT INTO `m_karyawan` VALUES (1405, NULL, '9922274', '99220276', NULL, 'YOGANATA MUNDI DHARMA', 'YMD', NULL, '2022-01-01', '1999-09-18', 'SRAGEN', '', '622661734404000', 'KPP Pratama Bogor, JL. IR. H. JUANDA Nomor 64', '0000-00-00', '0584875206', 1, NULL, 23002, 3, 2, 2, 5, 12, 0, '2023-02-27 17:28:21', NULL);
INSERT INTO `m_karyawan` VALUES (1406, NULL, '9422245', '94220258', NULL, 'NUGROHO ADI PRAMUDITA', 'NAP', NULL, '2022-09-01', '1994-10-04', 'Bogor', '', '', '', '2022-09-01', '', 1, 0, 9922275, 0, 2, 0, 0, 12, 4, '2023-03-17 11:42:50', NULL);
INSERT INTO `m_karyawan` VALUES (1407, NULL, '0423001', '0423001', NULL, 'MUHAMMAD TARIQ ZULFIQAR', 'MTZ', NULL, '2023-03-20', '2004-08-02', 'Surabaya', '', '', '', '2023-03-20', '', 1, 0, 9422246, 0, 2, 0, 0, 12, 4, '2023-03-27 14:41:48', NULL);
INSERT INTO `m_karyawan` VALUES (1408, NULL, '04230308', '04230308', NULL, 'IKRAR RANCANG JATI', 'IRJ', NULL, '2023-06-01', '2004-08-23', 'Batam', '', '', '', '2023-06-01', '', 1, NULL, 423002, 3, 2, 2, 0, 12, 0, '2023-03-27 14:47:56', NULL);
INSERT INTO `m_karyawan` VALUES (1409, NULL, '9423029', '94230295', NULL, 'ANGELICA INDRAWAN', 'AI', NULL, '2023-03-01', '1994-08-04', 'Jakarta', 'Perumahan Graha Pajajaran Blok G No 6 RT 06 RW 15, Kelurahan Katulampa, Kecamatan Bogor Timur. Bogor 16144', '91.277.669.7-404.000', 'Kp Tajur RT 005 RW 003, Muarasari, Bogor Selatan, Bogor', '2023-03-01', '7370265563', 1, NULL, 423003, 5, 3, 2, 1, 12, 0, '2023-03-30 09:03:38', NULL);
INSERT INTO `m_karyawan` VALUES (1410, NULL, '0023029', '00230296', NULL, 'CHRISTIAN INDRAWAN', 'CI', NULL, '2023-03-01', '2000-02-21', 'Jakarta', '', '', '', '2023-03-01', '', 1, 0, 9423030, 0, 0, 0, 0, 12, 4, '2023-03-30 12:32:57', NULL);
INSERT INTO `m_karyawan` VALUES (1411, NULL, '8523001', '87230298', NULL, 'MUHAMMAD HAMDI', 'MH', NULL, '2023-03-27', '1985-12-24', 'Sumenep', '', '', '', '2023-03-27', '', 1, 0, 23030, 0, 0, 0, 0, 12, 4, '2023-03-30 12:36:45', NULL);
INSERT INTO `m_karyawan` VALUES (1412, NULL, '0323029', '03230297', NULL, 'GIMNASTIAR SACHRUN', 'GS', NULL, '2023-03-07', '2003-07-06', 'Ambon', '', '', '', '2023-03-07', '', 1, 0, 8523002, 0, 0, 0, 0, 12, 4, '2023-03-30 12:40:09', NULL);
INSERT INTO `m_karyawan` VALUES (1413, NULL, '9823283', '98230299', NULL, 'RIESKA NURUL ALFIAH', 'RNA', NULL, '2023-04-17', '1998-12-14', 'Tulungagung', '', '', '', '2023-04-17', '', 1, 0, 323030, 0, 3, 0, 0, 12, 4, '2023-04-17 11:44:13', NULL);
INSERT INTO `m_karyawan` VALUES (1414, NULL, '9723285', '97230300', NULL, 'RIZKI CHAIRANI', 'RC', NULL, '2023-05-02', '1997-05-29', 'Lhokseumawe', '', '', '', '2023-05-02', '', 1, 0, 9823284, 0, 3, 0, 0, 12, 4, '2023-05-05 14:57:09', NULL);
INSERT INTO `m_karyawan` VALUES (1415, NULL, '0023297', '00230301', NULL, 'ANDRE IRMANTO', 'AI', NULL, '2023-04-27', '2000-02-21', 'Jakarta', '', '', '', '2023-04-27', '', 1, 0, 9723286, 0, 2, 0, 0, 12, 4, '2023-05-05 15:04:15', NULL);
INSERT INTO `m_karyawan` VALUES (1416, NULL, '0323298', '', NULL, 'RAFTIAN AKMAL NUGRAHA', 'RAN', NULL, '2023-05-01', '2003-04-11', 'Bandung', '', '', '', '2023-05-01', '', 1, 0, 23298, 0, 0, 0, 0, 12, 4, '2023-05-09 09:55:29', NULL);
INSERT INTO `m_karyawan` VALUES (1417, NULL, '9023001', '90230305', NULL, 'FAISAL RAMADHAN', 'FR', NULL, '2023-05-08', '1990-03-26', 'Jakarta', '', '', '', '2023-05-08', '', 0, 0, 323299, 0, 0, 0, 0, 12, 4, '2023-05-10 14:44:16', NULL);
INSERT INTO `m_karyawan` VALUES (1418, NULL, '0023302', '00230304', NULL, 'ALI ZAENAL ABIDIN ALJUFRI', 'AAA', NULL, '2023-05-08', '2000-09-08', 'Surakarta', '', '', '', '2023-05-08', '', 1, 0, 9023002, 0, 0, 0, 0, 12, 4, '2023-05-10 14:49:25', NULL);
INSERT INTO `m_karyawan` VALUES (1419, NULL, '9023306', '900046', NULL, 'STEVANY PRIESCILA PALILU', 'SPP', 'assets/dokumen/foto/karyawan/thumb_new_1419.jpg', '2023-05-01', '1990-09-09', 'MANADO', 'APARTEMEN SENTRA TIMUR RESIDENCE R0203C\r\nPULOGEBANG, CAKUNG, JAKARTA TIMUR', '167493394821000', 'LINGKUNGAN III, TINGKULU, WANEA, MANADO\r\n', '0000-00-00', '1310006191722', 1, 0, 23303, 5, 3, 2, 10, 4, 1, '2023-05-11 10:05:44', NULL);
INSERT INTO `m_karyawan` VALUES (1420, NULL, '9223001', '92230303', NULL, 'HENDRA', 'HND', NULL, '2023-04-26', '1992-10-15', 'Samarinda', 'JL. Apt. Pranoto, Perum. Bukit Pinang Bahari Blok B4, Samarinda Seberang, Kota Samarinda. ', '84.655.454.1-952.000', 'Jl. Sosiri Tauboria, Abepura. Kota Jayapura.', '2023-04-26', '1720000306092', 1, NULL, 9023307, 3, 2, 3, 10, 12, 0, '2023-05-15 11:28:36', NULL);
INSERT INTO `m_karyawan` VALUES (1421, NULL, '9623001', '96210198', NULL, 'MUHAMMAD ANDYK MAULANA', 'MAM', NULL, '2023-06-01', '1996-05-13', 'Pasuruan', 'Perum Tambak Yudam Makmur I-17 Pasuruan', '53.076.761.5-624.000', 'KPP Pratama Pasuruan', '2023-06-01', '7194773131', 1, NULL, 9223002, 3, 2, 3, 56, 12, 0, '2023-06-07 17:14:22', NULL);
INSERT INTO `m_karyawan` VALUES (1422, NULL, '0023305', '230306', NULL, 'HANUM AZZAHRA PRAMESWARI', 'HAP', NULL, '2023-06-01', '2000-10-26', 'Bogor', '', '', '', '2023-06-01', '', 1, 0, 9623002, 0, 3, 0, 0, 12, 4, '2023-06-07 17:20:37', NULL);
INSERT INTO `m_karyawan` VALUES (1423, NULL, '9922277', '99220265', NULL, 'UJININGTYA SHABRI LARASATI', 'USL', NULL, '2022-10-07', '1999-06-11', 'Banjarnegara', '', '', '', '2022-10-07', '', 1, NULL, 23306, 3, 3, 2, 0, 12, 0, '2023-06-22 09:33:25', NULL);
INSERT INTO `m_karyawan` VALUES (1424, NULL, '0023305', '00230309', NULL, 'FARRAH ALFARANI NUR HIDAYAT', 'FNH', NULL, '2023-06-01', '2000-09-13', 'Samarinda', '', '', '', '2023-06-01', '', 1, 0, 9922278, 0, 0, 0, 0, 12, 4, '2023-06-26 09:07:26', NULL);
INSERT INTO `m_karyawan` VALUES (1425, NULL, '7884301', '7884301', NULL, 'MUHAMMAD IQBAL NASUTION', 'MIN', NULL, '0000-00-00', '1978-06-15', 'Medan', '', '', '', '0000-00-00', '', 1, 0, 23306, 0, 0, 0, 0, 12, 4, '2023-07-05 09:45:19', NULL);

-- ----------------------------
-- Table structure for m_karyawan_old
-- ----------------------------
DROP TABLE IF EXISTS `m_karyawan_old`;
CREATE TABLE `m_karyawan_old`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nik_lama` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nik` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nik_tg` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nik_kontrak` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `inisial` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tgl_masuk` date NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `tpt_lahir` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat_karyawan` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `npwp` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat_npwp` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_pengangkatan` date NULL DEFAULT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_aktif` int NULL DEFAULT NULL,
  `idkary` int NULL DEFAULT NULL,
  `r_agama_id` int NOT NULL,
  `r_jenis_kelamin_id` int NOT NULL,
  `r_status_nikah_id` int NOT NULL,
  `r_bank_id` int NOT NULL,
  `r_status_karyawan_id` int NOT NULL,
  `r_telkom_group_id` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 989 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of m_karyawan_old
-- ----------------------------
INSERT INTO `m_karyawan_old` VALUES (104, NULL, '906202', '906202', NULL, 'NURUL QAMARIYAH', 'NQ', 'assets/dokumen/foto/karyawan/thumb_279.jpg', '2017-12-01', '1990-10-22', 'Pamekasan', 'Jl. Pelabuhan branta pesisir,Tlanakan, Pamekasan-Madura', '73.452.836.7-608.000', '', '0000-00-00', '1670001870426', 1, 279, 3, 3, 2, 10, 2, 1);
INSERT INTO `m_karyawan_old` VALUES (249, NULL, '6615009', '660187', NULL, 'PUGUH INDARYONO', 'PG', 'assets/dokumen/foto/karyawan/thumb_235.jpg', '2015-06-01', '1966-03-09', 'SALATIGA', 'Jalan Pinang Perak I No.3 Taman Yasmin Sektor 6, RT 03/09, Kel. Curug Mekar, Kec. Bogor Barat, Bogor', '092252626404000', '', '2019-01-01', '0050308511', 1, 235, 3, 2, 3, 3, 4, 1);
INSERT INTO `m_karyawan_old` VALUES (628, NULL, '9118001', '916031', NULL, 'WENDI MAKSALMINA', 'WM', '', '2018-09-13', '1991-07-23', '--', '', '', '', '0000-00-00', '', 1, 7618002, 0, 0, 0, 0, 11, 2);

-- ----------------------------
-- Table structure for m_organisasi
-- ----------------------------
DROP TABLE IF EXISTS `m_organisasi`;
CREATE TABLE `m_organisasi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `inisial` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `level` int NULL DEFAULT NULL,
  `kode` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kode_organisasi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_aktif` int NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL,
  `r_jenis_organisasi_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `parent_id`(`parent_id` ASC) USING BTREE,
  INDEX `level`(`level` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 679 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of m_organisasi
-- ----------------------------
INSERT INTO `m_organisasi` VALUES (4, 'PATRAKOM', 'PATRA TELEKOMUNIKASI INDONESIA', '-', 1, '', NULL, 1, NULL, 1);
INSERT INTO `m_organisasi` VALUES (5, 'PERFORMANCE', 'PERFORMANCE & CORPORATE PLANNING', '-', 4, '', NULL, 1, 4, 1);
INSERT INTO `m_organisasi` VALUES (6, 'IA & RM', 'INTERNAL AUDIT & RISK MANAGEMENT', '-', 4, '', NULL, 1, 4, 1);
INSERT INTO `m_organisasi` VALUES (7, 'BUSINESS', 'DIREKTORAT OF BUSINESS', '-', 2, 'D2', NULL, 1, 4, 2);
INSERT INTO `m_organisasi` VALUES (8, 'NETWORK', 'DIREKTORAT OF NETWORK', '-', 2, 'D3', NULL, 1, 4, 2);
INSERT INTO `m_organisasi` VALUES (9, 'ADKUG', 'DIREKTORAT KEUANGAN & ADMINISTRASI', '-', 2, 'D5', '20000', 1, 229, 2);
INSERT INTO `m_organisasi` VALUES (10, 'BUSDEV', 'BUSINESS DEVELOPMENT', '-', 3, '', NULL, 1, 7, 3);
INSERT INTO `m_organisasi` VALUES (11, 'TSAT_FIN', 'FINANCE', '-', 3, 'D5', '21000', 1, 9, 3);
INSERT INTO `m_organisasi` VALUES (12, 'HCGA', 'HUMAN CAPITAL GENERAL AFFAIRS', '-', 3, '', NULL, 1, 9, 3);
INSERT INTO `m_organisasi` VALUES (13, 'PRODUCT DEV', 'PRODUCT DEVELOPMENT', '-', 4, '', NULL, 1, 10, 4);
INSERT INTO `m_organisasi` VALUES (14, 'AP', 'ANALYS PRODUCT, PRICING & STRATEGY', '-', 4, '', NULL, 1, 10, 4);
INSERT INTO `m_organisasi` VALUES (15, 'A&B', 'ACCOUNTING & BUDGETING ', '-', 4, '', NULL, 1, 11, 4);
INSERT INTO `m_organisasi` VALUES (16, 'TREASURY', 'TREASURY & TAX', '-', 4, '', NULL, 1, 11, 4);
INSERT INTO `m_organisasi` VALUES (17, 'M&S', 'MARKETING & SALES', '-', 3, '', NULL, 1, 7, 3);
INSERT INTO `m_organisasi` VALUES (18, 'BILLING', 'BILLING MANAGEMENT', '-', 4, '', NULL, 1, 11, 4);
INSERT INTO `m_organisasi` VALUES (19, 'SEGMEN 1', 'SEGMENT 1 MARITIM OIL & GAS', '-', 4, '', NULL, 1, 17, 4);
INSERT INTO `m_organisasi` VALUES (20, 'COLLECTION', 'COLLECTION', '-', 4, '', NULL, 1, 11, 4);
INSERT INTO `m_organisasi` VALUES (21, 'SEGMENT 2', 'SEGMENT 2 FINANCE & PLANTATION', '-', 4, '', NULL, 1, 17, 4);
INSERT INTO `m_organisasi` VALUES (22, 'SEGMENT  3', 'SEGMENT 3 TELECOMMUNICATION', '-', 4, '', NULL, 1, 17, 4);
INSERT INTO `m_organisasi` VALUES (23, 'HCM', 'HUMAN CAPITAL MANAGEMENT', '-', 4, '', NULL, 1, 12, 4);
INSERT INTO `m_organisasi` VALUES (24, 'CORCOM', 'CORPORATE COMMUNICATION', '-', 4, '', NULL, 1, 12, 4);
INSERT INTO `m_organisasi` VALUES (25, 'SD', 'SERVICE DELIVERY', '-', 3, 'OP.320', NULL, 1, 8, 3);
INSERT INTO `m_organisasi` VALUES (26, 'GA', 'GENERAL AFFAIRS', '-', 4, '', NULL, 1, 12, 4);
INSERT INTO `m_organisasi` VALUES (27, 'NO', 'NETWORK OPERATION', '-', 3, 'OP.310', NULL, 1, 8, 3);
INSERT INTO `m_organisasi` VALUES (28, 'SD RF', 'SERVICE DELIVERY RF', '-', 4, '', NULL, 1, 144, 4);
INSERT INTO `m_organisasi` VALUES (29, 'NORF', 'NETWORK OPERATION RF', '-', 4, '', NULL, 1, 27, 4);
INSERT INTO `m_organisasi` VALUES (30, 'SD VSAT & DATACOM', 'SERVICE DELIVERY VSAT IP & DATACOM', '-', 4, '', NULL, 1, 25, 4);
INSERT INTO `m_organisasi` VALUES (31, 'NOVD', 'NETWORK OPERATION VSAT IP & DATACOM', '-', 4, '', NULL, 1, 27, 4);
INSERT INTO `m_organisasi` VALUES (32, 'IA & HSE', 'INTERNAL AUDIT & HEALTH SAFETY ENVIRONMENT', '-', 5, '', NULL, 1, 6, 5);
INSERT INTO `m_organisasi` VALUES (33, 'LEGAL&RM', 'LEGAL & RISK MANAGEMENT', '-', 5, '', NULL, 1, 6, 5);
INSERT INTO `m_organisasi` VALUES (34, 'RA', 'REVENUE ASSURANCE', '-', 5, '', NULL, 1, 5, 5);
INSERT INTO `m_organisasi` VALUES (35, 'PERF&CORP', 'BUSINESS PERFORMANCE & CORPORATE PLANNING', '-', 5, '', NULL, 1, 5, 5);
INSERT INTO `m_organisasi` VALUES (36, 'BI', 'BUSINESS INCUBATION', '-', 5, '', NULL, 1, 13, 5);
INSERT INTO `m_organisasi` VALUES (37, 'BPS', 'BUSINESS PLAN & STRATEGY', '-', 5, '', NULL, 1, 14, 5);
INSERT INTO `m_organisasi` VALUES (38, 'PMP', 'PRODUCT MANAGEMENT & PRICING', '-', 5, '', NULL, 1, 14, 5);
INSERT INTO `m_organisasi` VALUES (39, 'PARTNERSHIP', 'PARTNERSHIP', '-', 5, '', NULL, 1, 14, 5);
INSERT INTO `m_organisasi` VALUES (40, 'SS', 'SERVICE SOLUTION MARITIM OIL DAN GAS', '-', 5, '', NULL, 1, 19, 5);
INSERT INTO `m_organisasi` VALUES (41, 'SALES', 'SALES  SEGMENT 1 MARITIM OIL & GAS', '-', 5, '', NULL, 1, 19, 5);
INSERT INTO `m_organisasi` VALUES (42, 'SDRF', 'SERVICE DELIVERY RF', '-', 5, '', NULL, 1, 28, 5);
INSERT INTO `m_organisasi` VALUES (43, 'SD SUPPORT', 'SERVICE DELIVERY SUPPORT RF', '-', 5, '', NULL, 1, 28, 5);
INSERT INTO `m_organisasi` VALUES (44, 'SD DATACOM', 'SERVICE DELIVERY DATACOM', '-', 5, '', NULL, 1, 30, 5);
INSERT INTO `m_organisasi` VALUES (45, 'SD SUPPORT DATACOM', 'SERVICE DELIVERY SUPPORT DATACOM', '-', 5, '', NULL, 1, 30, 5);
INSERT INTO `m_organisasi` VALUES (46, 'RFE', 'RF & ELECTRIC ', '-', 5, '', NULL, 1, 29, 5);
INSERT INTO `m_organisasi` VALUES (47, 'SCPC & GYRO', 'SCPC,DSCPC &GYRO', '-', 5, '', NULL, 1, 29, 5);
INSERT INTO `m_organisasi` VALUES (48, 'RADIO', 'RADIO &TERESTERIAL', '-', 5, '', NULL, 1, 29, 5);
INSERT INTO `m_organisasi` VALUES (49, 'BACKHAULING', 'IT,INTERNET & BACKHAULING', '-', 5, '', NULL, 1, 31, 5);
INSERT INTO `m_organisasi` VALUES (50, 'NOC', 'NOC', '-', 5, '', NULL, 1, 31, 5);
INSERT INTO `m_organisasi` VALUES (51, 'VSAT IP', 'VSAT IP', '-', 5, '', NULL, 1, 31, 5);
INSERT INTO `m_organisasi` VALUES (52, 'TREASURY', 'TREASURY', '-', 5, '', NULL, 1, 16, 5);
INSERT INTO `m_organisasi` VALUES (53, 'TAX', 'TAX', '-', 5, '', NULL, 1, 16, 5);
INSERT INTO `m_organisasi` VALUES (54, 'BP', 'BILLING PROCESS', '-', 5, '', NULL, 1, 18, 5);
INSERT INTO `m_organisasi` VALUES (55, 'DEBT', 'DEBT & REVENUE ASSURANCE', '-', 5, '', NULL, 1, 18, 5);
INSERT INTO `m_organisasi` VALUES (56, 'CM', 'COLLECTION MANAGEMENT', '-', 5, '', NULL, 1, 20, 5);
INSERT INTO `m_organisasi` VALUES (57, 'DEBT COLL', 'DEBT COLLECTION', '-', 5, '', NULL, 1, 20, 5);
INSERT INTO `m_organisasi` VALUES (58, 'HCPD', 'HC PLANNING & DEVELOPMENT', '-', 4, '', '', 1, 23, 5);
INSERT INTO `m_organisasi` VALUES (59, 'HCSA', 'HC SOLUTION & SERVICE ADMINISTRATION', '-', 5, '', NULL, 1, 23, 5);
INSERT INTO `m_organisasi` VALUES (60, 'SEKRETARIAT', 'KESEKRETARIATAN', '-', 5, '', NULL, 1, 24, 5);
INSERT INTO `m_organisasi` VALUES (61, 'PROC', 'PROCUREMENT', '-', 5, '', NULL, 1, 26, 5);
INSERT INTO `m_organisasi` VALUES (62, 'LOG', 'LOGISTIC', '-', 5, '', NULL, 1, 26, 5);
INSERT INTO `m_organisasi` VALUES (63, 'AMIC', 'ASSET MANAGEMENT INVENTORY CONTROL', '-', 5, '', NULL, 1, 26, 5);
INSERT INTO `m_organisasi` VALUES (68, 'SD', 'AS', '3', 6, '', NULL, 1, 7, 1);
INSERT INTO `m_organisasi` VALUES (69, 'SE', 'SERVICE SOLUTION SEGMEN FINANCE', '-', 5, '', NULL, 1, 21, 5);
INSERT INTO `m_organisasi` VALUES (70, 'SQA', 'SQA', '-', 5, '', NULL, 1, 50, 5);
INSERT INTO `m_organisasi` VALUES (71, 'BG', 'BUDGETTING', '-', 5, '', NULL, 1, 15, 5);
INSERT INTO `m_organisasi` VALUES (72, 'AC', 'ACCOUNTING', '-', 5, '', NULL, 1, 15, 5);
INSERT INTO `m_organisasi` VALUES (74, 'CM', 'CORCOMM', '-', 5, '', NULL, 1, 24, 5);
INSERT INTO `m_organisasi` VALUES (75, 'MPS', 'MARKETING PLAN & STRATEGY', '-', 5, '', NULL, 1, 19, 5);
INSERT INTO `m_organisasi` VALUES (76, 'DC', 'DATACOMM', '-', 5, '', NULL, 1, 31, 5);
INSERT INTO `m_organisasi` VALUES (78, 'PD', 'PRODUCT DEVELOPMENT', '.', 5, '', NULL, 1, 13, 5);
INSERT INTO `m_organisasi` VALUES (79, 'SIA', 'INTERNAL AUDIT DAN RISK MANAGEMENT', '-', 3, '', NULL, 1, 4, 4);
INSERT INTO `m_organisasi` VALUES (80, 'SSF', 'SALES  SEGMENT 2 FINANCE & PLANTATION', '-', 5, '', NULL, 1, 21, 5);
INSERT INTO `m_organisasi` VALUES (81, 'SS', 'SS', 'ajdgka', 5, '', NULL, 1, 5, 5);
INSERT INTO `m_organisasi` VALUES (82, 'SE', 'SE - SERVICE SOLUTION SEGMEN MARITIM, OIL & G', '-', 5, '', NULL, 1, 19, 5);
INSERT INTO `m_organisasi` VALUES (83, 'NOD', 'NETWORK OPERATION DATACOM', '-', 5, '', NULL, 1, 27, 4);
INSERT INTO `m_organisasi` VALUES (84, 'TSAT_HCM', 'HUMAN CAPITAL MANAGEMENT', '-', 3, '', '24000', 1, 9, 3);
INSERT INTO `m_organisasi` VALUES (85, 'TSAT_CS', 'CORPORATE SECRETARY', '-', 3, '', '11000', 1, 94, 3);
INSERT INTO `m_organisasi` VALUES (86, 'TSAT_AP', 'ASSET & PROCUREMENT', '-', 3, '', '22000', 1, 9, 3);
INSERT INTO `m_organisasi` VALUES (88, 'TSAT_FIN', 'FINANCE', '-', 3, 'D5', NULL, 1, 9, 2);
INSERT INTO `m_organisasi` VALUES (90, 'TSAT_WSD', 'WORKFORCE STRATEGY & DEVELOPMENT', '-', 5, '', NULL, 1, 91, 5);
INSERT INTO `m_organisasi` VALUES (91, 'TSAT_HCPD', 'HC PLANNING AND DEVELOPMENT', '-', 4, '', NULL, 1, 84, 4);
INSERT INTO `m_organisasi` VALUES (94, 'TSAT_CEOOFFICE', 'DIREKTORAT UTAMA', '-', 2, 'D0', '10000', 1, 229, 2);
INSERT INTO `m_organisasi` VALUES (95, 'TSAT_CCOS', 'CORPORATE COMMUNICATION & OFFICE SUPPORT', '-', 4, '', NULL, 1, 85, 4);
INSERT INTO `m_organisasi` VALUES (96, 'TSAT_RM', 'REGULATORY MANAGEMENT', '-', 4, '', NULL, 1, 85, 4);
INSERT INTO `m_organisasi` VALUES (97, 'TSAT_CPM', 'CORPORATE PERFORMANCE MGT', '-', 4, '', NULL, 1, 85, 4);
INSERT INTO `m_organisasi` VALUES (98, 'TSAT_LC', 'LEGAL COMPLIANCE', '-', 4, '', NULL, 1, 85, 4);
INSERT INTO `m_organisasi` VALUES (99, 'TSAT_ARM', 'AUDIT & RISK MANAGEMENT', '-', 3, '', '', 1, 94, 3);
INSERT INTO `m_organisasi` VALUES (102, 'TSAT_RM', 'RISK MANAGEMENT', '-', 4, '', NULL, 1, 99, 4);
INSERT INTO `m_organisasi` VALUES (103, 'TSAT_TRS', 'TRANSFORMATION', '-', 3, 'D3', '', 1, 94, 2);
INSERT INTO `m_organisasi` VALUES (104, 'TSAT_AM', 'AUDIT MANAGEMENT', '-', 4, '', NULL, 1, 99, 4);
INSERT INTO `m_organisasi` VALUES (105, 'TSAT_TR', 'TRANSFORMATION READINESS', '-', 4, '', NULL, 1, 103, 4);
INSERT INTO `m_organisasi` VALUES (106, 'TSAT_AB', 'ACCOUNTING & BUDGETING', '-', 4, '', NULL, 1, 11, 4);
INSERT INTO `m_organisasi` VALUES (107, 'TSAT_TT', 'TREASURY & TAX', '-', 4, '', NULL, 1, 11, 4);
INSERT INTO `m_organisasi` VALUES (108, 'TSAT_T', 'TREASURY', '-', 5, '', NULL, 1, 107, 5);
INSERT INTO `m_organisasi` VALUES (109, 'TSAT_ASSET', 'ASSET', '-', 4, '', NULL, 1, 86, 4);
INSERT INTO `m_organisasi` VALUES (110, 'TSAT_IM', 'INVENTORY MANAGEMENT', '-', 5, '', NULL, 1, 109, 5);
INSERT INTO `m_organisasi` VALUES (111, 'TSAT_AMGN', 'ASSET MANAGEMENT', '-', 5, '', NULL, 1, 109, 5);
INSERT INTO `m_organisasi` VALUES (112, 'TSAT_PROC', 'PROCUREMENT', '-', 4, '', NULL, 1, 86, 4);
INSERT INTO `m_organisasi` VALUES (113, 'TSAT_PROC1', 'PROCUREMENT 1', '-', 5, '', NULL, 1, 112, 5);
INSERT INTO `m_organisasi` VALUES (114, 'TSAT_LOG', 'LOGISTIC', '-', 4, '', NULL, 1, 86, 4);
INSERT INTO `m_organisasi` VALUES (115, 'TSAT_LOG&WH', 'LOGISTIC & WAREHOUSE MANAGEMENT', '-', 5, '', '', 1, 114, 5);
INSERT INTO `m_organisasi` VALUES (116, 'TSAT_OUTLOG', 'OUTBOUND LOGISTIC', '-', 5, '', NULL, 1, 114, 5);
INSERT INTO `m_organisasi` VALUES (117, 'TSAT_BILLCO', 'BILLING & COLLECTION', '-', 4, '', NULL, 1, 225, 4);
INSERT INTO `m_organisasi` VALUES (118, 'TSAT_RA', 'REVENUE ASSURANCE', '-', 4, '', NULL, 1, 225, 4);
INSERT INTO `m_organisasi` VALUES (119, 'TSAT_DEV', 'DIREKTORAT PENGEMBANGAN', '-', 2, 'D2', '30000', 1, 229, 2);
INSERT INTO `m_organisasi` VALUES (120, 'TSAT_PDPM', 'PRODUCT DEVELOPMENT & PROJECT MANAGEMENT', '-', 3, '', '33000', 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (121, 'TSAT_PD', 'PRODUCT DEVELOPMENT', '-', 4, '', NULL, 1, 120, 4);
INSERT INTO `m_organisasi` VALUES (123, 'TSAT_SBD', 'STRATEGIC BUSINESS DEVELOPMENT', '-', 3, '', '31000', 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (124, 'TSAT_BUSDEV', 'BUSINESS DEVELOPMENT', '-', 4, '', NULL, 1, 123, 4);
INSERT INTO `m_organisasi` VALUES (125, 'TSAT_CS', 'CORPORATE STRATEGY', '-', 4, '', NULL, 1, 123, 4);
INSERT INTO `m_organisasi` VALUES (126, 'TSAT_SPM', 'SYSTEM PLANNING & MANAGEMENT', '-', 3, '', '32000', 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (129, 'TSAT_CPM', 'CAPACITY PLANNING & MANAGEMENT', '-', 4, '', NULL, 1, 126, 4);
INSERT INTO `m_organisasi` VALUES (130, 'TSAT_SPM', 'SPECTRUM PLANNING & MANAGEMENT', '-', 4, '', NULL, 1, 126, 4);
INSERT INTO `m_organisasi` VALUES (131, 'TSAT_FPM', 'FLEET PLANNING & MANAGEMENT', '-', 4, '', NULL, 1, 126, 4);
INSERT INTO `m_organisasi` VALUES (132, 'TSAT_PM', 'PROJECT MANAGEMENT', '-', 4, '', NULL, 1, 120, 4);
INSERT INTO `m_organisasi` VALUES (133, 'TSAT_COMMERCE', 'DIREKTORAT KOMERSIAL', '-', 2, 'D4', '40000', 1, 229, 2);
INSERT INTO `m_organisasi` VALUES (134, 'TSAT_COMMERCE 1', 'COMMERCE SEGMENT 1', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (135, 'TSAT_SEGMEN 1A', 'COMMERCE SEGMENT 1A (TELCO & ENTERPRISE)', '-', 4, '', NULL, 1, 134, 4);
INSERT INTO `m_organisasi` VALUES (136, 'TSAT_SEGMEN 1B', 'COMMERCE SEGMENT 1B', '-', 4, '', NULL, 1, 134, 4);
INSERT INTO `m_organisasi` VALUES (137, 'TSAT_COMMERCE 2', 'COMMERCE SEGMENT 2', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (138, 'TSAT_COMMERCE 3', 'COMMERCE SEGMENT 3', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (139, 'TSAT_SEGMEN 2A', 'COMMERCE SEGMENT 2A (MARITIME, OIL & GAS, AVI', '-', 4, '', NULL, 1, 137, 4);
INSERT INTO `m_organisasi` VALUES (140, 'TSAT_SEGMEN 2B', 'COMMERCE SEGMENT 2B (CONSUMER)', '-', 4, '', NULL, 1, 137, 4);
INSERT INTO `m_organisasi` VALUES (141, 'TSAT_SEGMEN 3A', 'COMMERCE SEGMENT 3A (SATELLITE TRANSPONDER)', '-', 4, '', NULL, 1, 138, 4);
INSERT INTO `m_organisasi` VALUES (142, 'TSAT_OPERATION', 'DIREKTORAT OPERASI', '-', 2, 'D3', '50000', 1, 229, 2);
INSERT INTO `m_organisasi` VALUES (143, 'TSAT_SATELIT OPERATION', 'SATELLITE OPERATION\r\n\r\n', '-', 3, '', '51000', 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (144, 'TSAT_SERVICE DELIVERY', 'SERVICE DELIVERY', '-', 3, '', '52000', 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (145, 'TSAT_NETWORK OPERATION', 'NETWORK OPERATION', '-', 3, '', '53000', 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (146, 'TSAT_DATACOM, ADJACENT SERVICE & IT', 'DATACOM, ADJACENT SERVICE & IT', '-', 3, '', '', 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (147, 'TSAT_SATELLITE TRANSPONDER & CARRIER SERVICE ', 'SATELLITE TRANSPONDER & CARRIER SERVICE CENTE', '-', 4, '', NULL, 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (148, 'TSAT_SATELLITE DATA ANALYSIS', 'SATELLITE DATA ANALYSIS', '-', 4, '', NULL, 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (149, 'TSAT_ORBITAL OPERATION', 'ORBITAL OPERATION', '-', 4, '', NULL, 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (150, 'TSAT_SATELLITE CONTROL OPERATION', 'SATELLITE CONTROL OPERATION', '-', 4, '', NULL, 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (151, 'TSAT_GROUND CONTROL SYSTEM OPERATION', 'GROUND CONTROL SYSTEM OPERATION', '-', 4, '', NULL, 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (152, 'TSAT_SATELLITE PERFORMANCE REPORT & SUPPORT M', 'SATELLITE PERFORMANCE REPORT & SUPPORT MANAGE', '-', 4, '', NULL, 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (153, 'TSAT_SERVICE DEPLOYMENT RF', 'SERVICE DEPLOYMENT RF', '-', 4, '', NULL, 1, 144, 4);
INSERT INTO `m_organisasi` VALUES (154, 'TSAT_SD DSCPC', 'SD DSCPC', '-', 5, '', NULL, 1, 153, 5);
INSERT INTO `m_organisasi` VALUES (155, 'TSAT_SERVICE DEPLOYMENT MOBILE', 'SERVICE DEPLOYMENT MOBILE', '-', 4, '', NULL, 1, 144, 4);
INSERT INTO `m_organisasi` VALUES (156, 'TSAT_SD MARINE & AVIATION', 'SD MARINE & AVIATION', '-', 5, '', NULL, 1, 155, 5);
INSERT INTO `m_organisasi` VALUES (157, 'TSAT_SD WIRELESS', 'SD WIRELESS', '-', 5, '', NULL, 1, 155, 5);
INSERT INTO `m_organisasi` VALUES (158, 'TSAT_SERVICE DEPLOYMENT VSAT IP', 'SERVICE DEPLOYMENT VSAT IP', '-', 4, '', NULL, 1, 144, 4);
INSERT INTO `m_organisasi` VALUES (159, 'TSAT_SD SUPPORT', 'SD SUPPORT', '-', 5, '', NULL, 1, 158, 5);
INSERT INTO `m_organisasi` VALUES (160, 'TSAT_SCPC, DSCPC & RF 1 (OLO & GOV)', 'SCPC, DSCPC & RF 1 (OLO & GOV)', '-', 4, '', NULL, 1, 145, 3);
INSERT INTO `m_organisasi` VALUES (161, 'TSAT_SCPC, DSCPC & RF 2 (MARITIM, PERKEBUNAN,', 'SCPC, DSCPC & RF 2 (MARITIM, PERKEBUNAN, PERT', '-', 4, '', NULL, 1, 145, 3);
INSERT INTO `m_organisasi` VALUES (162, 'TSAT_SCPC, DSCPC & RF 2 & GYRO', 'SCPC, DSCPC & RF 2 & GYRO', '-', 5, '', NULL, 1, 161, 5);
INSERT INTO `m_organisasi` VALUES (163, 'TSAT_SCPC-RF-2 & RADIO, TERESTERIAL', 'SCPC-RF-2 & RADIO, TERESTERIAL', '-', 5, '', NULL, 1, 161, 5);
INSERT INTO `m_organisasi` VALUES (164, 'TSAT_VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANG', 'VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', '-', 5, '', NULL, 1, 161, 5);
INSERT INTO `m_organisasi` VALUES (165, 'TSAT_ASSURANCE VSAT-IP (MARITIM, PERKEBUNAN, ', 'ASSURANCE VSAT-IP (MARITIM, PERKEBUNAN, PERTA', '-', 5, '', NULL, 1, 161, 5);
INSERT INTO `m_organisasi` VALUES (166, 'TSAT_OPERATION VSAT-IP (BANKING, CONSUMER)', 'OPERATION VSAT-IP (BANKING, CONSUMER)', '-', 4, '', NULL, 1, 145, 4);
INSERT INTO `m_organisasi` VALUES (167, 'TSAT_VSAT-IP (BANKING & CONSUMER)', 'VSAT-IP (BANKING & CONSUMER)', '-', 5, '', NULL, 1, 166, 5);
INSERT INTO `m_organisasi` VALUES (168, 'TSAT_AREA KTI (KAWASAN TIMUR) (MS, TIM, SON, ', 'AREA KTI (KAWASAN TIMUR) (MS, TIM, SON, AB, J', '-', 4, '', NULL, 1, 145, 4);
INSERT INTO `m_organisasi` VALUES (169, 'TSAT_OPERATION REGIONAL FIELD AREA AMBON & SO', 'OPERATION REGIONAL FIELD AREA AMBON & SORONG', '-', 5, '', NULL, 1, 168, 5);
INSERT INTO `m_organisasi` VALUES (170, 'TSAT_AREA KBI (KAWASAN BARAT INDONESIA) (SUMA', 'AREA KBI (KAWASAN BARAT INDONESIA) (SUMATRA, ', '-', 4, '', NULL, 1, 145, 4);
INSERT INTO `m_organisasi` VALUES (171, 'TSAT_OPERATION REGIONAL FIELD BATAM', 'OPERATION REGIONAL FIELD BATAM', '-', 5, '', NULL, 1, 170, 5);
INSERT INTO `m_organisasi` VALUES (172, 'TSAT_OPERATION REGIONAL FIELD DENPASAR', 'OPERATION REGIONAL FIELD DENPASAR', '-', 5, '', NULL, 1, 170, 5);
INSERT INTO `m_organisasi` VALUES (173, 'TSAT_IT DEVELOPMENT', 'IT DEVELOPMENT', '-', 4, '', NULL, 1, 146, 4);
INSERT INTO `m_organisasi` VALUES (174, 'TSAT_IT OPERATION', 'IT OPERATION', '-', 4, '', NULL, 1, 146, 4);
INSERT INTO `m_organisasi` VALUES (175, 'TSAT_OSS & BSS  PLATFORM OPERATION', 'OSS & BSS  PLATFORM OPERATION', '-', 5, '', NULL, 1, 174, 5);
INSERT INTO `m_organisasi` VALUES (176, 'TSAT_TRANSPONDER ASSURANCE', 'TRANSPONDER ASSURANCE', '-', 5, '', NULL, 1, 147, 5);
INSERT INTO `m_organisasi` VALUES (177, 'TSAT_SPACECRAFT ANALYST', 'SPACECRAFT ANALYST', '-', 5, '', NULL, 1, 148, 5);
INSERT INTO `m_organisasi` VALUES (178, 'TSAT_MISSION EVALUATION', 'MISSION EVALUATION', '-', 5, '', NULL, 1, 149, 5);
INSERT INTO `m_organisasi` VALUES (179, 'TSAT_SATELLITE PLANNING', 'SATELLITE PLANNING', '-', 5, '', NULL, 1, 150, 5);
INSERT INTO `m_organisasi` VALUES (180, 'TSAT_SATELLITE EXECUTION', 'SATELLITE EXECUTION', '-', 5, '', NULL, 1, 150, 5);
INSERT INTO `m_organisasi` VALUES (181, 'TSAT_RF & BASEBAND', 'RF & BASEBAND', '-', 5, '', NULL, 1, 151, 5);
INSERT INTO `m_organisasi` VALUES (182, 'TSAT_COMPUTER & NETWORK', 'COMPUTER & NETWORK', '-', 5, '', NULL, 1, 151, 5);
INSERT INTO `m_organisasi` VALUES (183, 'TSAT_ENERGY SYSTEM OPERATION', 'ENERGY SYSTEM OPERATION', '-', 5, '', NULL, 1, 151, 5);
INSERT INTO `m_organisasi` VALUES (184, 'TSAT_FINANCE AND SUPPORT MANAGEMENT', 'FINANCE AND SUPPORT MANAGEMENT', '-', 5, '', NULL, 1, 152, 5);
INSERT INTO `m_organisasi` VALUES (185, 'TSAT_HC SOLUTION & SERVICE', 'HC SOLUTION & SERVICE', '-', 4, '', NULL, 1, 84, 4);
INSERT INTO `m_organisasi` VALUES (186, 'TSAT_BUSINESS PROCESS & HEALTH SAFETY ENVIRON', 'BUSINESS PROCESS & HEALTH SAFETY ENVIRONMENT', '-', 4, '', NULL, 1, 99, 4);
INSERT INTO `m_organisasi` VALUES (187, 'TSAT_REGULATORY MANAGEMENT', 'REGULATORY MANAGEMENT', '-', 5, '', '', 1, 239, 5);
INSERT INTO `m_organisasi` VALUES (188, 'TSAT_LEGAL COMPLIANCE', 'LEGAL COMPLIANCE', '-', 5, '', '', 1, 239, 5);
INSERT INTO `m_organisasi` VALUES (189, 'CORP', 'CORPORATE PERFORMANCE MANAGEMENT', '-', 5, '', '', 1, 240, 5);
INSERT INTO `m_organisasi` VALUES (190, 'TSAT_CORPORATE COMMUNICATION', 'CORPORATE COMMUNICATION', '-', 5, '', NULL, 1, 95, 5);
INSERT INTO `m_organisasi` VALUES (191, 'TSAT_HC POLICIES & OD', 'HC POLICIES & OD', '-', 5, '', NULL, 1, 91, 5);
INSERT INTO `m_organisasi` VALUES (192, 'TSAT_HC SERVICE', 'HC SERVICE', '-', 5, '', NULL, 1, 185, 5);
INSERT INTO `m_organisasi` VALUES (193, 'TSAT_HC SOLUTION', 'HC SOLUTION', '-', 5, '', NULL, 1, 185, 5);
INSERT INTO `m_organisasi` VALUES (194, 'TSAT_BUDGETING', 'BUDGETING', '-', 5, '', NULL, 1, 106, 5);
INSERT INTO `m_organisasi` VALUES (195, 'TSAT_FINANCE REPORTING', 'FINANCE REPORTING', '-', 5, '', NULL, 1, 106, 5);
INSERT INTO `m_organisasi` VALUES (196, 'TSAT_PROCUREMENT 2', 'PROCUREMENT 2', '-', 5, '', NULL, 1, 112, 5);
INSERT INTO `m_organisasi` VALUES (197, 'TSAT_BILLING ', 'BILLING ', '-', 5, '', NULL, 1, 117, 5);
INSERT INTO `m_organisasi` VALUES (198, 'TSAT_COLLECTION MANAGEMENT', 'COLLECTION MANAGEMENT', '-', 5, '', NULL, 1, 117, 5);
INSERT INTO `m_organisasi` VALUES (199, 'TSAT_CORPORATE STRATEGY', 'CORPORATE STRATEGY', '-', 5, '', NULL, 1, 125, 5);
INSERT INTO `m_organisasi` VALUES (200, 'TSAT_CAPACITY MANAGEMENT & SERVICE PLAN', 'CAPACITY MANAGEMENT & SERVICE PLAN', '-', 5, '', NULL, 1, 129, 5);
INSERT INTO `m_organisasi` VALUES (201, 'TSAT_PRODUCT DEVELOPMENT', 'PRODUCT DEVELOPMENT', '-', 5, '', NULL, 1, 121, 5);
INSERT INTO `m_organisasi` VALUES (202, 'TSAT_SOLUTION & SUPPORT 1B', 'SOLUTION & SUPPORT 1B', '-', 5, '', NULL, 1, 136, 5);
INSERT INTO `m_organisasi` VALUES (203, 'TSAT_SOLUTION & SUPPORT 2A (MARITIME, OIL & G', 'SOLUTION & SUPPORT 2A (MARITIME, OIL & GAS, A', '-', 5, '', NULL, 1, 139, 5);
INSERT INTO `m_organisasi` VALUES (204, 'TSAT_SOLUTION & SUPPORT 3A (SATELLITE TRANSPO', 'SOLUTION & SUPPORT 3A (SATELLITE TRANSPONDER)', '-', 5, '', NULL, 1, 141, 5);
INSERT INTO `m_organisasi` VALUES (205, 'TSAT_TRANSPONDER MANAGEMENT AND OPTIMIZING', 'TRANSPONDER MANAGEMENT AND OPTIMIZING', '-', 5, '', NULL, 1, 147, 5);
INSERT INTO `m_organisasi` VALUES (206, 'TSAT_SPACECRAFT RECOVERY', 'SPACECRAFT RECOVERY', '-', 5, '', NULL, 1, 148, 5);
INSERT INTO `m_organisasi` VALUES (207, 'TSAT_MISSION PLANNING', 'MISSION PLANNING', '-', 5, '', NULL, 1, 149, 5);
INSERT INTO `m_organisasi` VALUES (208, 'TSAT_SATELLITE EVALUATION', 'SATELLITE EVALUATION', '-', 5, '', NULL, 1, 150, 5);
INSERT INTO `m_organisasi` VALUES (209, 'TSAT_SATELLITE PERFORMANCE MANAGEMENT', 'SATELLITE PERFORMANCE MANAGEMENT', '-', 5, '', NULL, 1, 152, 5);
INSERT INTO `m_organisasi` VALUES (210, 'TSAT_SD SCPC 1', 'SD SCPC 1', '-', 5, '', NULL, 1, 153, 5);
INSERT INTO `m_organisasi` VALUES (211, 'TSAT_SD MANAGE & NEW SERVICE', 'SD MANAGE & NEW SERVICE', '-', 5, '', NULL, 1, 153, 5);
INSERT INTO `m_organisasi` VALUES (212, 'TSAT_SD VSAT IP & CONSUMER', 'SD VSAT IP & CONSUMER', '-', 5, '', NULL, 1, 158, 5);
INSERT INTO `m_organisasi` VALUES (213, 'TSAT_SCPC, DSCPC & RF 1 (OLO)', 'SCPC, DSCPC & RF 1 (OLO)', '-', 5, '', NULL, 1, 160, 5);
INSERT INTO `m_organisasi` VALUES (214, 'TSAT_SCPC, DSCPC & RF 1 (GOV)', 'SCPC, DSCPC & RF 1 (GOV)', '-', 5, '', NULL, 1, 160, 5);
INSERT INTO `m_organisasi` VALUES (215, 'TSAT_SYSTEM QUALITY ASSURANCE (OLO & GOV)', 'SYSTEM QUALITY ASSURANCE (OLO & GOV)', '-', 5, '', NULL, 1, 160, 5);
INSERT INTO `m_organisasi` VALUES (216, 'TSAT_SUPPORT OPERATION & ASSURANCE VSAT-IP (B', 'SUPPORT OPERATION & ASSURANCE VSAT-IP (BANKIN', '-', 5, '', NULL, 1, 166, 5);
INSERT INTO `m_organisasi` VALUES (217, 'TSAT_OPERATION REGIONAL FIELD MAKASSAR ', 'OPERATION REGIONAL FIELD MAKASSAR ', '-', 5, '', NULL, 1, 168, 5);
INSERT INTO `m_organisasi` VALUES (218, 'TSAT_OPERATION REGIONAL FIELD AREA TIMIKA', 'OPERATION REGIONAL FIELD AREA TIMIKA', '-', 5, '', NULL, 1, 168, 5);
INSERT INTO `m_organisasi` VALUES (219, 'TSAT_OPERATION REGIONAL FIELD AREA JAYAPURA &', 'OPERATION REGIONAL FIELD AREA JAYAPURA & WAME', '-', 5, '', NULL, 1, 168, 5);
INSERT INTO `m_organisasi` VALUES (220, 'TSAT_OPERATION REGIONAL FIELD MEDAN', 'OPERATION REGIONAL FIELD MEDAN', '-', 5, '', NULL, 1, 170, 5);
INSERT INTO `m_organisasi` VALUES (221, 'TSAT_OPERATION REGIONAL FIELD SURABAYA ', 'OPERATION REGIONAL FIELD SURABAYA ', '-', 5, '', NULL, 1, 170, 5);
INSERT INTO `m_organisasi` VALUES (222, 'TSAT_IT PLANNING & ARCHITECTURE', 'IT PLANNING & ARCHITECTURE', '-', 5, '', NULL, 1, 173, 5);
INSERT INTO `m_organisasi` VALUES (223, 'TSAT_OSS & BSS  PLATFORM DEVELOPMENT', 'OSS & BSS  PLATFORM DEVELOPMENT', '-', 5, '', NULL, 1, 173, 5);
INSERT INTO `m_organisasi` VALUES (224, 'TSAT_OPERATION NETWORK & DATACOMM', 'OPERATION NETWORK & DATACOMM', '-', 5, '', NULL, 1, 174, 5);
INSERT INTO `m_organisasi` VALUES (225, 'TSAT_BILLING & COLLECTION', 'BILLING & COLLECTION', '-', 3, '', '23000', 1, 9, 3);
INSERT INTO `m_organisasi` VALUES (226, 'TSAT_EXPERT', 'EXPERT', '-', 3, '', NULL, 1, 94, 3);
INSERT INTO `m_organisasi` VALUES (227, 'DIR DEV', 'DEVELOPMENT', '--', 2, '', NULL, 1, 229, 2);
INSERT INTO `m_organisasi` VALUES (228, 'PGS. CMO', 'PGS. DIRECTOR OF COMMERCE (CMO)', '-', 2, '', NULL, 1, NULL, 2);
INSERT INTO `m_organisasi` VALUES (229, 'TSAT', 'TELKOM SATELIT INDONESIA', '-', 1, '', '00000', 1, NULL, 1);
INSERT INTO `m_organisasi` VALUES (230, 'PGS. CFO', 'PGS. DIRECTOR OF FINANCE & ADMINISTRATION (CFO)', '--', 2, '', NULL, 1, NULL, 2);
INSERT INTO `m_organisasi` VALUES (231, 'BILCO', 'PJ VP BILLING & COLLECTION', '-', 3, '', '', 1, 225, 3);
INSERT INTO `m_organisasi` VALUES (232, 'OLOS', 'OTHER LICENSE OPERATOR SERVICE', '-', 3, '', '41000', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (233, 'GRS', 'GOVERNMENT & REGIONAL SERVICE', '-', 3, '', '42000', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (234, 'ES', 'ENTERPRISE SEVICE', '-', 3, '', '43000', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (235, 'MMAS', 'MINING, MARITIME & AVIATION SERVICE', '-', 3, '', '44000', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (237, 'ARM HSE', 'AUDIT, RISK MANAGEMENT & HSE', '-', 3, '', '12000', 1, 94, 3);
INSERT INTO `m_organisasi` VALUES (238, 'ARM', 'AUDIT & RISK MANAGEMENT', '-', 4, '', '', 1, 237, 4);
INSERT INTO `m_organisasi` VALUES (239, 'RMLC', 'REGULATORY MANAGEMENT & LEGAL COMPLIANCE', '-', 4, '', '', 1, 85, 4);
INSERT INTO `m_organisasi` VALUES (240, 'CPM', 'CORPORATE PERFORMANCE MANAGEMENT', '-', 4, '', '', 1, 85, 4);
INSERT INTO `m_organisasi` VALUES (241, 'MA', 'MARITIME & AVIATION ', '-', 4, '', '', 1, 235, 4);
INSERT INTO `m_organisasi` VALUES (242, 'CI', 'CASH IN', '-', 5, '', '', 1, 107, 5);
INSERT INTO `m_organisasi` VALUES (243, 'CO', 'CASH OUT', '-', 5, '', '', 1, 107, 5);
INSERT INTO `m_organisasi` VALUES (244, 'TO', 'TAX OPERATION', '-', 5, '', '', 1, 107, 5);
INSERT INTO `m_organisasi` VALUES (245, 'RA BILCO', 'REVENUE ASSURANCE', '-', 5, '', '', 1, 118, 4);
INSERT INTO `m_organisasi` VALUES (246, 'BPS', 'BUSINESS PORTFOLIO STRATEGY', '-', 4, '', '', 1, 123, 4);
INSERT INTO `m_organisasi` VALUES (247, 'SDOM', 'SALES DOMESTIC', '-', 4, '', '', 1, 232, 4);
INSERT INTO `m_organisasi` VALUES (248, 'SOVER', 'SALES OVERSEAS', '-', 4, '', '', 1, 232, 4);
INSERT INTO `m_organisasi` VALUES (249, 'SCEN', 'SALES CENTRAL', '-', 4, '', '', 1, 233, 4);
INSERT INTO `m_organisasi` VALUES (250, 'SREG', 'SALES REGIONAL', '-', 4, '', '', 1, 307, 4);
INSERT INTO `m_organisasi` VALUES (251, 'SBANK', 'SALES BANKING', '-', 4, '', '', 1, 234, 4);
INSERT INTO `m_organisasi` VALUES (252, 'SESME', 'SALES ENTERPRISE & SME', '-', 4, '', '', 1, 234, 4);
INSERT INTO `m_organisasi` VALUES (253, 'MIN', 'MINING ', '-', 4, '', '', 1, 235, 4);
INSERT INTO `m_organisasi` VALUES (254, 'KOMER', 'DIREKTORAT KOMERSIAL', '-', 3, '', '40100', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (255, 'SOLU', 'SOLUTION ', '-', 4, '', '', 1, 254, 4);
INSERT INTO `m_organisasi` VALUES (256, 'SOLOSGRS', 'SOLUTION OLOS & GRS', '-', 5, '', '', 1, 255, 5);
INSERT INTO `m_organisasi` VALUES (257, 'SENSMMAS', 'SOLUTION ENS & MMAS', '-', 5, '', '', 1, 255, 5);
INSERT INTO `m_organisasi` VALUES (258, 'PPC', 'PPC & SEKDIT', '-', 4, '', '', 1, 254, 4);
INSERT INTO `m_organisasi` VALUES (259, 'SPPM', 'SALES PLANNING & PERFORMANCE MANAGEMENT', '-', 5, '', '', 1, 258, 5);
INSERT INTO `m_organisasi` VALUES (260, 'SAC', 'SALES ADMINISTRATION COMPLIANCE', '-', 5, '', '', 1, 258, 5);
INSERT INTO `m_organisasi` VALUES (261, 'SBM', 'SEKDIT & BUDGETING MANAGEMENT', '-', 5, '', '', 1, 258, 5);
INSERT INTO `m_organisasi` VALUES (262, 'DOPS', 'DIREKTORAT OPERASI', '-', 3, '', '50100', 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (263, 'ITDSS', 'IT & DIGITAL ', '-', 4, '', '', 1, 262, 4);
INSERT INTO `m_organisasi` VALUES (264, 'CNDI', 'CORE NETWORK & DIGITAL INFRA', '-', 5, '', '', 1, 263, 5);
INSERT INTO `m_organisasi` VALUES (265, 'ITDS', 'IT & DIGITAL SERVICE ', '-', 5, '', '', 1, 263, 5);
INSERT INTO `m_organisasi` VALUES (266, 'ITSM', 'IT SERVICE MANAGEMENT', '-', 5, '', '', 1, 263, 5);
INSERT INTO `m_organisasi` VALUES (267, 'ITIDS', 'IT & INTEGRATED DIGITAL SOLUTION', '-', 5, '', '', 1, 263, 5);
INSERT INTO `m_organisasi` VALUES (268, 'DPS', 'DIGITAL PLATFORM SOLUTION', '-', 5, '', '', 1, 263, 5);
INSERT INTO `m_organisasi` VALUES (269, 'DCS', 'DIGITAL CYBER SECURITY', '-', 5, '', '', 1, 263, 5);
INSERT INTO `m_organisasi` VALUES (271, 'BPHSE', 'BUSINESS PROCESS & HEALTH SAFETY ENVIRONMENT', '-', 4, '', '', 1, 237, 4);
INSERT INTO `m_organisasi` VALUES (272, 'TSAT CPM', 'CORPORATE PERFORMANCE MANAGEMENT', '-', 5, '', '', 1, 240, 5);
INSERT INTO `m_organisasi` VALUES (273, 'TUA', 'TECHNOLOGY UPDATE ANALYSIS', '-', 5, '', '', 1, 255, 5);
INSERT INTO `m_organisasi` VALUES (274, 'DA', 'DIREKTORAT A', 'Dummy', 2, '', '80', 1, NULL, 2);
INSERT INTO `m_organisasi` VALUES (275, 'UA', 'UNIT A', 'Dummy', 3, '', '81', 1, 274, 3);
INSERT INTO `m_organisasi` VALUES (276, 'DB', 'DIREKTORAT B', 'Dummy', 2, '', '90', 1, NULL, 2);
INSERT INTO `m_organisasi` VALUES (277, 'UB', 'UNIT B', 'Dummy', 3, '', '91', 1, 276, 3);
INSERT INTO `m_organisasi` VALUES (278, 'DAB', 'DIREKTORAT AB', 'Dummy', 2, '', '70', 1, NULL, 2);
INSERT INTO `m_organisasi` VALUES (279, 'NETWORK OPERATION', 'NETWORK OPERATION', '-', 3, '', '53000', 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (280, 'NETWORK INFRASTRUKTUR 1', 'NETWORK INFRASTRUKTUR 1', '-', 4, '', '', 1, 279, 4);
INSERT INTO `m_organisasi` VALUES (281, 'NETWORK INFRASTRUKTUR 2', 'NETWORK INFRASTRUKTUR 2', '-', 4, '', '', 1, 279, 4);
INSERT INTO `m_organisasi` VALUES (282, 'NETWORK & SOLUTION OPERATION CENTER', 'NETWORK & SOLUTION OPERATION CENTER', '-', 4, '', '', 1, 279, 4);
INSERT INTO `m_organisasi` VALUES (283, 'ASSURANCE MANAGEMENT', 'ASSURANCE MANAGEMENT', '-', 4, '', '', 1, 279, 4);
INSERT INTO `m_organisasi` VALUES (284, 'REGIONAL', 'REGIONAL', '-', 4, '', '', 1, 279, 4);
INSERT INTO `m_organisasi` VALUES (285, 'RF, ELECTRICAL & BROADCAST', 'RF, ELECTRICAL & BROADCAST', '-', 5, '', '', 1, 280, 5);
INSERT INTO `m_organisasi` VALUES (286, 'SCPC, DSCPC, USAT & RADIO IP', 'SCPC, DSCPC, USAT & RADIO IP', '-', 5, '', '', 1, 280, 5);
INSERT INTO `m_organisasi` VALUES (287, 'EMERGING SOLUTION NETWORK', 'EMERGING SOLUTION NETWORK', '-', 5, '', '', 1, 280, 5);
INSERT INTO `m_organisasi` VALUES (288, 'HUB VSAT', 'HUB VSAT', '-', 5, '', '', 1, 281, 5);
INSERT INTO `m_organisasi` VALUES (289, 'HUB VSAT', 'HUB VSAT', '-', 5, '', '', 1, 281, 5);
INSERT INTO `m_organisasi` VALUES (290, 'HUB VSAT', 'HUB VSAT', '-', 5, '', '', 1, 281, 5);
INSERT INTO `m_organisasi` VALUES (291, 'REMOTE VSAT', 'REMOTE VSAT', '-', 5, '', '', 1, 281, 5);
INSERT INTO `m_organisasi` VALUES (292, 'CONSUMER DAN MOBILE CONNECTIVITY SYSTEM', 'CONSUMER DAN MOBILE CONNECTIVITY SYSTEM', '-', 5, '', '', 1, 281, 5);
INSERT INTO `m_organisasi` VALUES (293, 'SERVICE SOLUTION CARE CENTER', 'SERVICE SOLUTION CARE CENTER', '-', 5, '', '', 1, 282, 5);
INSERT INTO `m_organisasi` VALUES (294, 'NETWORK & SERVICE OPTIMIZATION', 'NETWORK & SERVICE OPTIMIZATION', '-', 5, '', '', 1, 282, 5);
INSERT INTO `m_organisasi` VALUES (295, 'SERVICE LEVEL & ASSURANCE MANAGEMENT', 'SERVICE LEVEL & ASSURANCE MANAGEMENT', '-', 5, '', '', 1, 283, 5);
INSERT INTO `m_organisasi` VALUES (296, 'ADMINISTRATION ASSURANCE MANAGEMENT', 'ADMINISTRATION ASSURANCE MANAGEMENT', '-', 5, '', '', 1, 283, 5);
INSERT INTO `m_organisasi` VALUES (297, 'SPARE & REPAIR ASSURANCE MANAGEMENT', 'SPARE & REPAIR ASSURANCE MANAGEMENT', '-', 5, '', '', 1, 398, 5);
INSERT INTO `m_organisasi` VALUES (298, 'REGIONAL 1', 'REGIONAL 1', '-', 5, '', '', 1, 284, 5);
INSERT INTO `m_organisasi` VALUES (299, 'REGIONAL 2', 'REGIONAL 2', '-', 5, '', '', 1, 284, 5);
INSERT INTO `m_organisasi` VALUES (300, 'REGIONAL 3', 'REGIONAL 3', '-', 5, '', '', 1, 284, 5);
INSERT INTO `m_organisasi` VALUES (301, 'REGIONAL 4', 'REGIONAL 4', '-', 5, '', '', 1, 284, 5);
INSERT INTO `m_organisasi` VALUES (302, 'REGIONAL 5', 'REGIONAL 5', '-', 5, '', '', 1, 284, 5);
INSERT INTO `m_organisasi` VALUES (303, 'REGIONAL 6', 'REGIONAL 6', '-', 5, '', '', 1, 284, 5);
INSERT INTO `m_organisasi` VALUES (304, 'DIREKTORAT KOMERSIAL', 'DIREKTORAT KOMERSIAL', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (305, 'OTHER LISENCE OPERATOR SERVICE', 'OTHER LICENSE OPERATOR SERVICE', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (306, 'REGIONAL & CONSUMER SERVICE', 'REGIONAL & CONSUMER SERVICE', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (307, 'REGIONAL & CONSUMER SERVICE', 'REGIONAL & CONSUMER SERVICE', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (308, 'ENTERPRISE SERVICE', 'ENTERPRISE SERVICE', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (309, 'GOVERNMENT SERVICE', 'GOVERNMENT SERVICE', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (310, 'GOVERNMENT SERVICE', 'GOVERNMENT SERVICE', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (311, 'PPC & SEKDIT', 'PPC & SEKDIT', '-', 4, '', '', 1, 304, 4);
INSERT INTO `m_organisasi` VALUES (312, 'SOLUTION ', 'SOLUTION ', '-', 4, '', '', 1, 304, 4);
INSERT INTO `m_organisasi` VALUES (313, 'SALES DOMESTIC', 'SALES DOMESTIC', '-', 4, '', '', 1, 305, 4);
INSERT INTO `m_organisasi` VALUES (314, 'SALES OVERSEAS', 'SALES OVERSEAS', '-', 4, '', '', 1, 305, 4);
INSERT INTO `m_organisasi` VALUES (315, 'SALES CONSUMER', 'SALES CONSUMER', '-', 4, '', '', 1, 307, 4);
INSERT INTO `m_organisasi` VALUES (317, 'SALES BANKING', 'SALES BANKING', '-', 4, '', '', 1, 308, 4);
INSERT INTO `m_organisasi` VALUES (318, 'SALES OTHER ENTERPRISE SECTOR', 'SALES OTHER ENTERPRISE SECTOR', '-', 4, '', '', 1, 308, 4);
INSERT INTO `m_organisasi` VALUES (319, 'SALES MINISTRY, ARMY, POLICE', 'SALES MINISTRY, ARMY, POLICE', '-', 4, '', '', 1, 310, 4);
INSERT INTO `m_organisasi` VALUES (320, 'SALES PUBLIC SERVICE', 'SALES PUBLIC SERVICE', '-', 4, '', '', 1, 310, 4);
INSERT INTO `m_organisasi` VALUES (321, 'SALES PLANNING & PERFORMANCE MANAGEMENT', 'SALES PLANNING & PERFORMANCE MANAGEMENT', '-', 5, '', '', 1, 311, 5);
INSERT INTO `m_organisasi` VALUES (322, 'SALES ADMINISTRATION COMPLIANCE', 'SALES ADMINISTRATION COMPLIANCE', '-', 5, '', '', 1, 311, 5);
INSERT INTO `m_organisasi` VALUES (323, 'SEKDIT & BUDGETING MANAGEMENT', 'SEKDIT & BUDGETING MANAGEMENT', '-', 5, '', '', 1, 311, 5);
INSERT INTO `m_organisasi` VALUES (324, 'SOLUTION OLOS & GOS', 'SOLUTION OLOS & GOS', '-', 5, '', '', 1, 312, 5);
INSERT INTO `m_organisasi` VALUES (325, 'SOLUTION ENS & RCS', 'SOLUTION ENS & RCS', '-', 5, '', '', 1, 312, 5);
INSERT INTO `m_organisasi` VALUES (326, 'TECHNOLOGY UPDATE ANALYSIS', 'TECHNOLOGY UPDATE ANALYSIS', '-', 5, '', '', 1, 312, 5);
INSERT INTO `m_organisasi` VALUES (327, 'BILLING COLLECTION PERFORMANCE & REPORTING', 'BILLING COLLECTION PERFORMANCE & REPORTING', '-', 5, '', '', 1, 373, 5);
INSERT INTO `m_organisasi` VALUES (328, '--', 'PRODUCT DEVELOPMENT', '--', 3, '', 'Product Development', 1, 120, 4);
INSERT INTO `m_organisasi` VALUES (329, 'WRS', 'WHOLESALE & REGIONAL SERVICES', '-', 3, '', '', 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (330, 'FMR', 'DIREKTORAT KEUANGAN & MANAJEMEN RISIKO', '-', 2, 'D5', '', 1, 229, 2);
INSERT INTO `m_organisasi` VALUES (331, 'FIN22', 'FINANCE', '-', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (332, 'ASPROLOG', 'ASSET, PROCUREMENT & LOGISTICS', '-', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (333, 'BILCO REVAS', 'BILLING COLLECTION & REVENUE ASSURANCE', '-', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (334, 'HCM', 'HUMAN CAPITAL MANAGEMENT', '-', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (335, 'PPM', 'PRODUCT & DIGITAL DEVELOPMENT', '-', 3, '', '', 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (336, 'NPM', 'NETWORK PLANNING & MANAGEMENT', '-', 4, '', '', 1, 126, 4);
INSERT INTO `m_organisasi` VALUES (337, 'PTI', 'PRODUCT & TECHNOLOGY INCUBATION', '-', 4, '', '', 1, 335, 4);
INSERT INTO `m_organisasi` VALUES (338, 'ILWM', 'INBOUND LOGISTIC & WAREHOUSE MANAGEMENT', '-', 5, '', '', 1, 367, 5);
INSERT INTO `m_organisasi` VALUES (339, 'GIP', 'GROUND INFRASTRUCTURE PLANNING', '-', 5, '', '', 1, 336, 5);
INSERT INTO `m_organisasi` VALUES (340, 'PPD', 'PRODUCT & PLATFORM DEVELOPMENT', '-', 3, '', '', 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (341, 'PPD-1', 'PRODUCT & PLATFORM DEVELOPMENT', '-', 4, '', '', 1, 335, 4);
INSERT INTO `m_organisasi` VALUES (342, 'ICT', 'ICT & PLATFORM SOLUTION', '-', 5, '', '', 1, 341, 5);
INSERT INTO `m_organisasi` VALUES (343, 'PPCS', 'PPC & SUPPORT', '-', 4, '', '', 1, 304, 4);
INSERT INTO `m_organisasi` VALUES (344, 'PPM', 'PLANNING & PERFORMANCE MANAGEMENT', '-', 5, '', '', 1, 343, 5);
INSERT INTO `m_organisasi` VALUES (345, 'SBM', 'SECRETARIAT & BUDGETING MANAGEMENT', '-', 5, '', '', 1, 343, 5);
INSERT INTO `m_organisasi` VALUES (346, 'SWRS', 'SOLUTION WHOLESALE & REGIONAL SERVICES', '-', 5, '', '', 1, 385, 5);
INSERT INTO `m_organisasi` VALUES (347, 'SGE', 'SOLUTION GOVERNMENT & ENTERPRISE', '-', 5, '', '', 1, 385, 5);
INSERT INTO `m_organisasi` VALUES (348, 'OPM', 'OPERATION PERFORMANCE MANAGEMENT', '-', 5, '', '', 1, 262, 5);
INSERT INTO `m_organisasi` VALUES (349, 'STM', 'SATELLITE TRANSPONDER MANAGEMENT', '-', 4, '', '', 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (350, 'TF', 'TRANSPONDER FULFILLMENT', '-', 5, '', '', 1, 349, 5);
INSERT INTO `m_organisasi` VALUES (351, 'OOSDA', 'ORBITAL OPERATION & SATELLITE DATA ANALYSIS', '-', 4, '', '', 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (352, 'SAR', 'SPACECRAFT ANALYST & RECOVERY', '-', 5, '', '', 1, 351, 5);
INSERT INTO `m_organisasi` VALUES (353, 'SE1', 'SATELLITE EXECUTION 1', '-', 5, '', '', 1, 150, 5);
INSERT INTO `m_organisasi` VALUES (354, 'SE2', 'SATELLITE EXECUTION 2', '-', 5, '', '', 1, 150, 5);
INSERT INTO `m_organisasi` VALUES (355, 'GCS', 'GROUND CONTROL SYSTEM', '-', 3, '', '', 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (356, 'RF', 'RF', '-', 5, '', '', 1, 386, 5);
INSERT INTO `m_organisasi` VALUES (357, 'BCN', 'BASEBAND & COMPUTER NETWORK', '-', 5, '', '', 1, 355, 5);
INSERT INTO `m_organisasi` VALUES (358, 'IARM22', 'INTERNAL AUDIT & RISK MANAGEMENT', '-', 3, '', '', 1, 94, 3);
INSERT INTO `m_organisasi` VALUES (359, 'IA22', 'INTERNAL AUDIT', '-', 4, '', '', 1, 358, 4);
INSERT INTO `m_organisasi` VALUES (360, 'RMHSE22', 'RISK MANAGEMENT & HSE', '-', 4, '', '', 1, 358, 4);
INSERT INTO `m_organisasi` VALUES (361, 'AB22', 'ACCOUNTING & BUDGETING', '-', 4, '', '', 1, 331, 4);
INSERT INTO `m_organisasi` VALUES (362, 'B22', 'BUDGETING', '-', 5, '', '', 1, 361, 5);
INSERT INTO `m_organisasi` VALUES (363, 'TT22', 'TREASURY & TAX', '-', 4, '', '', 1, 331, 4);
INSERT INTO `m_organisasi` VALUES (364, 'TO22', 'TREASURY OPERATION', '-', 5, '', '', 1, 363, 5);
INSERT INTO `m_organisasi` VALUES (365, 'A22', 'ASSET', '-', 4, '', '', 1, 332, 4);
INSERT INTO `m_organisasi` VALUES (366, 'P22', 'PROCUREMENT', '-', 4, '', '', 1, 332, 4);
INSERT INTO `m_organisasi` VALUES (367, 'L22', 'LOGISTICS', '-', 4, '', '', 1, 332, 4);
INSERT INTO `m_organisasi` VALUES (368, 'AM22', 'ASSET MANAGEMENT', '-', 5, '', '', 1, 365, 5);
INSERT INTO `m_organisasi` VALUES (370, 'P222', 'PROCUREMENT 2', '-', 5, '', '', 1, 61, 5);
INSERT INTO `m_organisasi` VALUES (371, 'OL22', 'OUTBOUND LOGISTIC', '-', 5, '', '', 1, 367, 5);
INSERT INTO `m_organisasi` VALUES (372, 'BC22', 'BILLING & COLLECTION', '-', 4, '', '', 1, 333, 4);
INSERT INTO `m_organisasi` VALUES (373, 'RA22', 'REVENUE ASSURANCE', '-', 4, '', '', 1, 333, 4);
INSERT INTO `m_organisasi` VALUES (374, 'B22', 'BILLING', '-', 5, '', '', 1, 372, 5);
INSERT INTO `m_organisasi` VALUES (375, 'C22', 'COLLECTION', '-', 5, '', '', 1, 372, 5);
INSERT INTO `m_organisasi` VALUES (376, 'RA22', 'REVENUE ASSURANCE', '-', 5, '', '', 1, 34, 5);
INSERT INTO `m_organisasi` VALUES (377, 'HCM22', 'HUMAN CAPITAL MANAGEMENT', '-', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (378, 'HCPD22', 'HC PLANNING & DEVELOPMENT', '-', 4, '', '', 1, 377, 4);
INSERT INTO `m_organisasi` VALUES (379, 'HCSS22', 'HC SERVICE & SOLUTION', '-', 4, '', '', 1, 23, 4);
INSERT INTO `m_organisasi` VALUES (380, 'WP22', 'WORKFORCE PLANNING', '-', 5, '', '', 1, 91, 5);
INSERT INTO `m_organisasi` VALUES (381, 'HCD22', 'HC DEVELOPMENT', '-', 5, '', '', 1, 58, 5);
INSERT INTO `m_organisasi` VALUES (382, 'FPM22', 'FLEET PLANNING & MANAGEMENT', '-', 5, '', '', 1, 336, 5);
INSERT INTO `m_organisasi` VALUES (383, 'PM22', 'PROJECT MANAGEMENT', '-', 5, '', '', 1, 337, 5);
INSERT INTO `m_organisasi` VALUES (384, 'PD22', 'PRODUCT DEVELOPMENT', '-', 5, '', '', 1, 341, 5);
INSERT INTO `m_organisasi` VALUES (385, 'S22', 'SOLUTION', '-', 4, '', '', 1, 304, 4);
INSERT INTO `m_organisasi` VALUES (386, 'GCS22', 'GROUND CONTROL SYSTEM', '-', 3, '', '', 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (387, 'TA22', 'TRANSPONDER ASSURANCE', '-', 5, '', '', 1, 349, 5);
INSERT INTO `m_organisasi` VALUES (388, 'SAR22', 'SPACECRAFT ANALYST & RECOVERY', '-', 5, '', '', 1, 351, 5);
INSERT INTO `m_organisasi` VALUES (389, 'BCN22', 'BASEBAND & COMPUTER NETWORK', '-', 5, '', '', 1, 386, 5);
INSERT INTO `m_organisasi` VALUES (390, 'ESO22', 'ENERGY SYSTEM OPERATION', '-', 5, '', '', 1, 434, 5);
INSERT INTO `m_organisasi` VALUES (391, 'BSM22', 'BUDGETING AND SUPPORT MANAGEMENT', '-', 5, '', '', 1, 434, 5);
INSERT INTO `m_organisasi` VALUES (392, 'SD SCPC22', 'SD SCPC', '-', 5, '', '', 1, 153, 5);
INSERT INTO `m_organisasi` VALUES (393, 'SD DSCPC22', 'SD DSCPC', '-', 5, '', '', 1, 153, 5);
INSERT INTO `m_organisasi` VALUES (394, 'SD MANAGE & NEW SERVICE22', 'SD MANAGE & NEW SERVICE', '-', 5, '', '', 1, 153, 5);
INSERT INTO `m_organisasi` VALUES (395, 'SD MARINE & AVIATION22', 'SD MARINE & AVIATION', '-', 5, '', '', 1, 155, 5);
INSERT INTO `m_organisasi` VALUES (396, 'SD WIRELESS22', 'SD WIRELESS', '-', 5, '', '', 1, 155, 5);
INSERT INTO `m_organisasi` VALUES (397, 'SD VSAT IP & CONSUMER22', 'SD VSAT IP & CONSUMER', '-', 5, '', '', 1, 158, 5);
INSERT INTO `m_organisasi` VALUES (398, 'OPERATION & ASSURANCE MANAGEMENT22', 'OPERATION & ASSURANCE MANAGEMENT', '-', 4, '', '', 1, 279, 4);
INSERT INTO `m_organisasi` VALUES (399, 'SERVICE SOLUTION CARE CENTER22', 'SERVICE SOLUTION CARE CENTER', '-', 5, '', '', 1, 398, 5);
INSERT INTO `m_organisasi` VALUES (400, 'NETWORK & SERVICE OPTIMIZATION22', 'NETWORK & SERVICE OPTIMIZATION', '-', 5, '', '', 1, 398, 5);
INSERT INTO `m_organisasi` VALUES (401, 'SERVICE LEVEL & ASSURANCE MANAGEMENT22', 'SERVICE LEVEL & ASSURANCE MANAGEMENT', '-', 5, '', '', 1, 398, 5);
INSERT INTO `m_organisasi` VALUES (402, 'ADMINISTRATION ASSURANCE MANAGEMENT22', 'ADMINISTRATION ASSURANCE MANAGEMENT', '-', 5, '', '', 1, 398, 5);
INSERT INTO `m_organisasi` VALUES (403, 'SPARE & REPAIR ASSURANCE MANAGEMENT', 'SPARE & REPAIR ASSURANCE MANAGEMENT', '-', 5, '', '', 1, 398, 4);
INSERT INTO `m_organisasi` VALUES (404, 'INFORMATION TECHNOLOGY22', 'INFORMATION TECHNOLOGY', '-', 4, '', '', 1, 262, 4);
INSERT INTO `m_organisasi` VALUES (405, 'IP CORE NETWORK22', 'IP CORE NETWORK', '-', 5, '', '', 1, 404, 5);
INSERT INTO `m_organisasi` VALUES (406, 'IT & CYBER SECURITY', 'IT & CYBER SECURITY', '-', 5, '', '', 1, 404, 5);
INSERT INTO `m_organisasi` VALUES (407, 'IT INTEGRATION', 'IT INTEGRATION', '-', 5, '', '', 1, 404, 5);
INSERT INTO `m_organisasi` VALUES (410, 'PP22', 'PROCUREMENT 1', '-', 5, '', '', 1, 366, 5);
INSERT INTO `m_organisasi` VALUES (411, 'P222', 'PROCUREMENT 2', '-', 5, '', '', 1, 112, 5);
INSERT INTO `m_organisasi` VALUES (412, 'PROC 2 22', 'PROCUREMENT 2', '-', 5, '', '', 1, 366, 5);
INSERT INTO `m_organisasi` VALUES (413, '22', 'REVENUE ASSURANCE', '-', 4, '', '', 1, 333, 4);
INSERT INTO `m_organisasi` VALUES (414, 'RA222', 'REVENUE ASSURANCE', '-', 5, '', '', 1, 373, 5);
INSERT INTO `m_organisasi` VALUES (416, 'HCPD22', 'HC PLANNING & DEVELOPMENT', '-', 4, '', '', 1, 23, 4);
INSERT INTO `m_organisasi` VALUES (419, '222', 'HUMAN CAPITAL MANAGEMENT_', '0', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (420, 'PD22', 'HC PLANNING & DEVELOPMENT', '-', 4, '', '', 1, 23, 4);
INSERT INTO `m_organisasi` VALUES (423, 'HCPD22', 'HC PLANNING DAN DEVELOPMENT', '-', 4, '', '', 1, 91, 4);
INSERT INTO `m_organisasi` VALUES (424, 'WP222', 'WORKFORCE PLANNING', '-', 5, '', '', 1, 423, 5);
INSERT INTO `m_organisasi` VALUES (425, '22', 'HC PLANNING DAN DEVELOPMENT 22', '-', 4, '', '', 1, 23, 4);
INSERT INTO `m_organisasi` VALUES (426, '2222', 'WORKFORCE PLANNING', '-', 5, '', '', 1, 425, 5);
INSERT INTO `m_organisasi` VALUES (427, 'HCM222', 'HUMAN CAPITAL MANAGEMENT (HCM)', '-', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (428, 'HCPD22', 'HC PLANNING & DEVELOPMENT (HCPD)', '-', 4, '', '', 1, 427, 4);
INSERT INTO `m_organisasi` VALUES (429, 'SS22', 'HC SERVICE & SOLUTION (HCSS)', '-', 4, '', '', 1, 427, 4);
INSERT INTO `m_organisasi` VALUES (430, 'WF222', 'WORKFORCE PLANNING', '-', 5, '', '', 1, 428, 5);
INSERT INTO `m_organisasi` VALUES (431, 'HD22', 'HC DEVELOPMENT', '-', 5, '', '', 1, 428, 5);
INSERT INTO `m_organisasi` VALUES (432, '22SP', 'SPECTRUM PLANNING', '-', 5, '', '', 1, 130, 5);
INSERT INTO `m_organisasi` VALUES (433, 'RF22', 'RF', '-', 5, '', '', 1, 434, 5);
INSERT INTO `m_organisasi` VALUES (434, 'GCS22', 'GROUND CONTROL SYSTEM', '-', 4, '', '', 1, 143, 4);
INSERT INTO `m_organisasi` VALUES (435, 'BCN22', 'BASEBAND & COMPUTER NETWORK', '-', 5, '', '', 1, 434, 5);
INSERT INTO `m_organisasi` VALUES (436, 'HCS22', 'HC SERVICE (HCS)', '-', 5, '', '', 1, 429, 5);
INSERT INTO `m_organisasi` VALUES (437, 'HCSS22', 'HC SOLUTION', '-', 5, '', '', 1, 429, 5);
INSERT INTO `m_organisasi` VALUES (438, 'FIN22', 'FINANCE', '-', 3, '', '', 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (439, 'ACB22', 'ACCOUNTING & BUDGETING', '-', 4, '', '', 1, 438, 4);
INSERT INTO `m_organisasi` VALUES (440, 'TAX22', 'TREASURY & TAX', '-', 4, '', '', 1, 438, 4);
INSERT INTO `m_organisasi` VALUES (441, 'ACC22', 'ACCOUNTING', '-', 5, '', '', 1, 439, 5);
INSERT INTO `m_organisasi` VALUES (442, 'BD22', 'BUDGETING', '-', 5, '', '', 1, 439, 5);
INSERT INTO `m_organisasi` VALUES (443, 'TO22', 'TAX OPERATION', '-', 5, '', '', 1, 440, 5);
INSERT INTO `m_organisasi` VALUES (444, 'TO22', 'TREASURY OPERATION', '-', 5, '', '', 1, 440, 5);
INSERT INTO `m_organisasi` VALUES (445, 'SA22', 'SPECTRUM ANALYSIS', '-', 5, '', '', 1, 130, 5);
INSERT INTO `m_organisasi` VALUES (446, 'WNS2', 'ENTERPRISE SERVICE – 2', '-', 4, '', '', 1, 308, 4);
INSERT INTO `m_organisasi` VALUES (447, 'GOV2', 'GOVERNMENT SERVICE – 2', '-', 4, '', '', 1, 310, 4);
INSERT INTO `m_organisasi` VALUES (448, 'RCS2', 'REGIONAL & CONSUMER SERVICE – 2', '--', 4, '', '', 1, 307, 4);
INSERT INTO `m_organisasi` VALUES (449, 'OLOS1', 'OTHER LICENSE OPERATOR SERVICE – 1', '-', 4, '', '', 1, 305, 4);
INSERT INTO `m_organisasi` VALUES (450, 'OSS', 'OFFERING & SALES SUPPORT', '--', 4, '', '', 1, 310, 4);
INSERT INTO `m_organisasi` VALUES (451, 'GOS1', 'GOVERNMENT SERVICE - 1', '-', 4, '', 'GOS1', 1, 310, 4);
INSERT INTO `m_organisasi` VALUES (452, 'OLOS 2', 'OTHER LICENSE OPERATOR SERVICE – 2', '-', 4, '', '', 1, 305, 4);
INSERT INTO `m_organisasi` VALUES (453, NULL, 'CORPORATE SECRETARY', NULL, 3, '', NULL, 1, 94, 3);
INSERT INTO `m_organisasi` VALUES (454, NULL, 'SUB DIT AUDIT & SYNERGY', NULL, 3, '', NULL, 1, 94, 3);
INSERT INTO `m_organisasi` VALUES (455, NULL, 'SYSTEM PLANNING & MANAGEMENT', NULL, 3, '', NULL, 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (456, NULL, 'PRODUCT & BUSINESS DEVELOPMENT', NULL, 3, '', NULL, 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (457, NULL, 'SERVICE MANAGEMENT & OPERATION', NULL, 3, '', NULL, 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (458, NULL, 'RESOURCE MANAGEMENT & OPERATION', NULL, 3, '', NULL, 1, 142, 3);
INSERT INTO `m_organisasi` VALUES (459, NULL, 'FINANCE & RISK MANAGEMENT', NULL, 3, '', NULL, 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (460, NULL, 'ASSET MANAGEMENT', NULL, 3, '', NULL, 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (461, NULL, 'BILLING COLLECTION & REVENUE ASSURANCE', NULL, 3, '', NULL, 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (462, NULL, 'HUMAN CAPITAL MANAGEMENT', NULL, 3, '', NULL, 1, 330, 3);
INSERT INTO `m_organisasi` VALUES (463, NULL, 'SOLUTION & MARKETING STRATEGY', NULL, 3, '', NULL, 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (464, NULL, 'GOVERNMENT SERVICE', NULL, 3, '', NULL, 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (465, NULL, 'OTHER LICENSE OPERATOR SERVICE', NULL, 3, '', NULL, 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (466, NULL, 'LOCAL BUSINESS & CONSUMER SERVICE', NULL, 3, '', NULL, 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (467, NULL, 'ENTERPRISE SERVICE', NULL, 3, '', NULL, 1, 133, 3);
INSERT INTO `m_organisasi` VALUES (468, NULL, 'PMO GROUP', NULL, 4, '', NULL, 1, 674, 3);
INSERT INTO `m_organisasi` VALUES (469, NULL, 'HTS SatMP2', NULL, 4, '', NULL, 1, 674, 3);
INSERT INTO `m_organisasi` VALUES (470, NULL, 'HTS 113BT', NULL, 4, '', NULL, 1, 674, 3);
INSERT INTO `m_organisasi` VALUES (471, NULL, 'ERP', NULL, 4, '', NULL, 1, 674, 3);
INSERT INTO `m_organisasi` VALUES (484, NULL, 'CORCOMM & OFFICE SUPPORT', NULL, 4, '', NULL, 1, 453, 4);
INSERT INTO `m_organisasi` VALUES (485, NULL, 'LEGAL COMPLIANCE', NULL, 4, '', NULL, 1, 453, 4);
INSERT INTO `m_organisasi` VALUES (486, NULL, 'CORPORATE PERFORMANCE MANAGEMENT', NULL, 4, '', NULL, 1, 453, 4);
INSERT INTO `m_organisasi` VALUES (487, NULL, 'INTERNAL AUDIT', NULL, 4, '', NULL, 1, 454, 4);
INSERT INTO `m_organisasi` VALUES (488, NULL, 'PARENTING & BUSINESS PROCESS CONTROL', NULL, 4, '', NULL, 1, 454, 4);
INSERT INTO `m_organisasi` VALUES (489, NULL, 'SATELLITE PLANNING & MANAGEMENT', NULL, 4, '', NULL, 1, 455, 4);
INSERT INTO `m_organisasi` VALUES (490, NULL, 'REGULATORY PLANNING & MANAGEMENT', NULL, 4, '', NULL, 1, 455, 4);
INSERT INTO `m_organisasi` VALUES (491, NULL, 'BUSINESS DEVELOPMENT', NULL, 4, '', NULL, 1, 456, 4);
INSERT INTO `m_organisasi` VALUES (492, NULL, 'PRODUCT MANAGEMENT', NULL, 4, '', NULL, 1, 456, 4);
INSERT INTO `m_organisasi` VALUES (493, NULL, 'COST & TARIF STRATEGY', NULL, 4, '', NULL, 1, 456, 4);
INSERT INTO `m_organisasi` VALUES (494, NULL, 'PMO GROUP', NULL, 4, '', NULL, 1, 468, 4);
INSERT INTO `m_organisasi` VALUES (495, NULL, 'HTS SatMP2', NULL, 4, '', NULL, 1, 469, 4);
INSERT INTO `m_organisasi` VALUES (496, NULL, 'HTS 113BT', NULL, 4, '', NULL, 1, 470, 4);
INSERT INTO `m_organisasi` VALUES (497, NULL, 'ERP', NULL, 4, '', NULL, 1, 471, 4);
INSERT INTO `m_organisasi` VALUES (498, NULL, 'FULFILLMENT', NULL, 4, '', NULL, 1, 457, 4);
INSERT INTO `m_organisasi` VALUES (499, NULL, 'ASSURANCE MANAGEMENT', NULL, 4, '', NULL, 1, 457, 4);
INSERT INTO `m_organisasi` VALUES (500, NULL, 'REGIONAL', NULL, 4, '', NULL, 1, 457, 4);
INSERT INTO `m_organisasi` VALUES (501, NULL, 'INFORMATION TECHNOLOGY & CYBER SECURITY', NULL, 4, '', NULL, 1, 457, 4);
INSERT INTO `m_organisasi` VALUES (502, NULL, 'QUALITY & SERVICE OPTIMIZATION', NULL, 4, '', NULL, 1, 457, 4);
INSERT INTO `m_organisasi` VALUES (503, NULL, 'GROUND SEGMENT & CME OPERATION', NULL, 4, '', NULL, 1, 458, 4);
INSERT INTO `m_organisasi` VALUES (504, NULL, 'VSAT & NTE OPERATION', NULL, 4, '', NULL, 1, 458, 4);
INSERT INTO `m_organisasi` VALUES (505, NULL, 'SATELLITE OPERATION', NULL, 4, '', NULL, 1, 458, 4);
INSERT INTO `m_organisasi` VALUES (506, NULL, 'ORBITAL OPERATION & DATA ANALYSIS', NULL, 4, '', NULL, 1, 458, 4);
INSERT INTO `m_organisasi` VALUES (507, NULL, 'RESOURCE PLANNING & ENGINEERING', NULL, 4, '', NULL, 1, 458, 4);
INSERT INTO `m_organisasi` VALUES (508, NULL, 'ACCOUNTING & BUDGETING', NULL, 4, '', NULL, 1, 459, 4);
INSERT INTO `m_organisasi` VALUES (509, NULL, 'TREASURY & TAX', NULL, 4, '', NULL, 1, 459, 4);
INSERT INTO `m_organisasi` VALUES (510, NULL, 'RISK MANAGEMENT', NULL, 4, '', NULL, 1, 459, 4);
INSERT INTO `m_organisasi` VALUES (511, NULL, 'PROCUREMENT', NULL, 4, '', NULL, 1, 460, 4);
INSERT INTO `m_organisasi` VALUES (512, NULL, 'ASSETS, LOGISTICS & HSE', NULL, 4, '', NULL, 1, 460, 4);
INSERT INTO `m_organisasi` VALUES (513, NULL, 'BILLING & COLLECTION', NULL, 4, '', NULL, 1, 461, 4);
INSERT INTO `m_organisasi` VALUES (514, NULL, 'REVENUE ASSURANCE', NULL, 4, '', NULL, 1, 461, 4);
INSERT INTO `m_organisasi` VALUES (515, NULL, 'HC PLANNING & DEVELOPMENT', NULL, 4, '', NULL, 1, 462, 4);
INSERT INTO `m_organisasi` VALUES (516, NULL, 'HC SERVICE & SOLUTION', NULL, 4, '', NULL, 1, 462, 4);
INSERT INTO `m_organisasi` VALUES (517, NULL, 'SALES STRATEGY', NULL, 4, '', NULL, 1, 463, 4);
INSERT INTO `m_organisasi` VALUES (518, NULL, 'SOLUTION MANAGEMENT', NULL, 4, '', NULL, 1, 463, 4);
INSERT INTO `m_organisasi` VALUES (519, NULL, 'CUSTOMER MANAGEMENT', NULL, 4, '', NULL, 1, 463, 4);
INSERT INTO `m_organisasi` VALUES (520, NULL, 'PERFORMANCE, SUPPORT & ADMINISTRATION', NULL, 4, '', NULL, 1, 463, 4);
INSERT INTO `m_organisasi` VALUES (521, NULL, 'MILITARY, POLICE & AGENCY SERVICES', NULL, 4, '', NULL, 1, 464, 4);
INSERT INTO `m_organisasi` VALUES (522, NULL, 'MINISTRY & PUBLIC SERVICES', NULL, 4, '', NULL, 1, 464, 4);
INSERT INTO `m_organisasi` VALUES (523, NULL, 'TELKOMGROUP SERVICE', NULL, 4, '', NULL, 1, 465, 4);
INSERT INTO `m_organisasi` VALUES (524, NULL, 'NETWORK OPERATOR SERVICE', NULL, 4, '', NULL, 1, 465, 4);
INSERT INTO `m_organisasi` VALUES (525, NULL, 'LOCAL BUSINESS SERVICE', NULL, 4, '', NULL, 1, 466, 4);
INSERT INTO `m_organisasi` VALUES (526, NULL, 'CONSUMER SERVICE', NULL, 4, '', NULL, 1, 466, 4);
INSERT INTO `m_organisasi` VALUES (527, NULL, 'BROADCAST, FINANCE & BANKING SERVICE', NULL, 4, '', NULL, 1, 467, 4);
INSERT INTO `m_organisasi` VALUES (528, NULL, 'MARITIME, MINING & ENERGY SERVICE', NULL, 4, '', NULL, 1, 467, 4);
INSERT INTO `m_organisasi` VALUES (547, NULL, 'CORPORATE COMMUNICATION & OFFICE SUPPORT', NULL, 5, '', NULL, 1, 484, 5);
INSERT INTO `m_organisasi` VALUES (548, NULL, 'LEGAL COMPLIANCE', NULL, 5, '', NULL, 1, 485, 5);
INSERT INTO `m_organisasi` VALUES (549, NULL, 'CORPORATE PERFORMANCE MANAGEMENT', NULL, 5, '', NULL, 1, 486, 5);
INSERT INTO `m_organisasi` VALUES (550, NULL, 'SPACE CAPACITY MANAGEMENT', NULL, 5, '', NULL, 1, 489, 5);
INSERT INTO `m_organisasi` VALUES (551, NULL, 'GROUND CAPACITY MANAGEMENT', NULL, 5, '', NULL, 1, 489, 5);
INSERT INTO `m_organisasi` VALUES (552, NULL, 'SPECTRUM MANAGEMENT', NULL, 5, '', NULL, 1, 490, 5);
INSERT INTO `m_organisasi` VALUES (553, NULL, 'REGULATORY MANAGEMENT', NULL, 5, '', NULL, 1, 490, 5);
INSERT INTO `m_organisasi` VALUES (554, NULL, 'PROJECT MANAGEMENT', NULL, 5, '', NULL, 1, 470, 5);
INSERT INTO `m_organisasi` VALUES (555, NULL, 'PROJECT MANAGEMENT', NULL, 5, '', NULL, 1, 469, 5);
INSERT INTO `m_organisasi` VALUES (556, NULL, 'CORPORATE STRATEGY', NULL, 5, '', NULL, 1, 491, 5);
INSERT INTO `m_organisasi` VALUES (557, NULL, 'BUSINES DEVELOPMENT', NULL, 5, '', NULL, 1, 491, 5);
INSERT INTO `m_organisasi` VALUES (558, NULL, 'TECHNOLOGY INCUBATION', NULL, 5, '', NULL, 1, 492, 5);
INSERT INTO `m_organisasi` VALUES (559, NULL, 'PRODUCT DEVELOPMENT', NULL, 5, '', NULL, 1, 492, 5);
INSERT INTO `m_organisasi` VALUES (560, NULL, 'PRODUCT MANAGEMENT', NULL, 5, '', NULL, 1, 492, 5);
INSERT INTO `m_organisasi` VALUES (561, NULL, 'RF & BROADCAST', NULL, 5, '', NULL, 1, 503, 5);
INSERT INTO `m_organisasi` VALUES (562, NULL, 'RADIO IP & SPARE MGT', NULL, 5, '', NULL, 1, 503, 5);
INSERT INTO `m_organisasi` VALUES (563, NULL, 'SCPC, DSCPC', NULL, 5, '', NULL, 1, 503, 5);
INSERT INTO `m_organisasi` VALUES (564, NULL, 'ELECTRICAL & ENERGY SYSTEM', NULL, 5, '', NULL, 1, 503, 5);
INSERT INTO `m_organisasi` VALUES (565, NULL, 'HUB VSAT', NULL, 5, '', NULL, 1, 504, 5);
INSERT INTO `m_organisasi` VALUES (566, NULL, 'NTE', NULL, 5, '', NULL, 1, 504, 5);
INSERT INTO `m_organisasi` VALUES (567, NULL, 'IP CORE NETWORK & DATACOM', NULL, 5, '', NULL, 1, 504, 5);
INSERT INTO `m_organisasi` VALUES (568, NULL, 'REMOTE VSAT', NULL, 5, '', NULL, 1, 504, 5);
INSERT INTO `m_organisasi` VALUES (569, NULL, 'REPAIR & SPARE MANAGEMENT', NULL, 5, '', NULL, 1, 504, 5);
INSERT INTO `m_organisasi` VALUES (570, NULL, 'SPACECRAFT ANALYST & RECOVERY', NULL, 5, '', NULL, 1, 506, 5);
INSERT INTO `m_organisasi` VALUES (571, NULL, 'MISSION PLANNING', NULL, 5, '', NULL, 1, 506, 5);
INSERT INTO `m_organisasi` VALUES (572, NULL, 'MISSION EVALUATION', NULL, 5, '', NULL, 1, 506, 5);
INSERT INTO `m_organisasi` VALUES (573, NULL, 'SATELLITE EXECUTION 1', NULL, 5, '', NULL, 1, 505, 5);
INSERT INTO `m_organisasi` VALUES (574, NULL, 'SATELLITE EXECUTION 2', NULL, 5, '', NULL, 1, 505, 5);
INSERT INTO `m_organisasi` VALUES (575, NULL, 'BASEBAND & COMPUTER NETWORK', NULL, 5, '', NULL, 1, 505, 5);
INSERT INTO `m_organisasi` VALUES (576, NULL, 'SATELLITE CONTROL ANTENNA SYSTEM', NULL, 5, '', NULL, 1, 505, 5);
INSERT INTO `m_organisasi` VALUES (577, NULL, 'PLANNING, SUPPORT & BUDGETING', NULL, 5, '', NULL, 1, 507, 5);
INSERT INTO `m_organisasi` VALUES (578, NULL, 'ENGINEERING & PERFORMANCE', NULL, 5, '', NULL, 1, 507, 5);
INSERT INTO `m_organisasi` VALUES (579, NULL, 'EMERGING SOLUTION NETWORK', NULL, 5, '', NULL, 1, 507, 5);
INSERT INTO `m_organisasi` VALUES (580, NULL, 'SERVICE ACTIVATION', NULL, 5, '', NULL, 1, 498, 5);
INSERT INTO `m_organisasi` VALUES (581, NULL, 'SERVICE INTEGRATION', NULL, 5, '', NULL, 1, 498, 5);
INSERT INTO `m_organisasi` VALUES (582, NULL, 'RESOURCE ALLOCATION & INVENTORY MGT', NULL, 5, '', NULL, 1, 498, 5);
INSERT INTO `m_organisasi` VALUES (583, NULL, 'TRANSPONDER FULFILLMENT', NULL, 5, '', NULL, 1, 498, 5);
INSERT INTO `m_organisasi` VALUES (584, NULL, 'NON VSAT BASED DELIVERY', NULL, 5, '', NULL, 1, 498, 5);
INSERT INTO `m_organisasi` VALUES (585, NULL, 'VSAT BASED DELIVERY', NULL, 5, '', NULL, 1, 498, 5);
INSERT INTO `m_organisasi` VALUES (586, NULL, 'SERVICE SOLUTION CARE CENTER', NULL, 5, '', NULL, 1, 499, 5);
INSERT INTO `m_organisasi` VALUES (587, NULL, 'TRANSPONDER ASSURANCE', NULL, 5, '', NULL, 1, 499, 5);
INSERT INTO `m_organisasi` VALUES (588, NULL, 'SERVICE LEVEL & ASSURANCE MGT', NULL, 5, '', NULL, 1, 499, 5);
INSERT INTO `m_organisasi` VALUES (589, NULL, 'PAPUA MALUKU', NULL, 5, '', NULL, 1, 500, 5);
INSERT INTO `m_organisasi` VALUES (590, NULL, 'KALIMANTAN SULAWESI', NULL, 5, '', NULL, 1, 500, 5);
INSERT INTO `m_organisasi` VALUES (591, NULL, 'JATIM BALI NUSRA', NULL, 5, '', NULL, 1, 500, 5);
INSERT INTO `m_organisasi` VALUES (592, NULL, 'SUMATERA JABAR JATENG', NULL, 5, '', NULL, 1, 500, 5);
INSERT INTO `m_organisasi` VALUES (593, NULL, 'IT ENTERPRISE & AUTOMATION SYSTEM', NULL, 5, '', NULL, 1, 501, 5);
INSERT INTO `m_organisasi` VALUES (594, NULL, 'IT SERVICE & INFRASTRUKTUR', NULL, 5, '', NULL, 1, 501, 5);
INSERT INTO `m_organisasi` VALUES (595, NULL, 'CYBER SECURITY & INTERNET SYSTEM', NULL, 5, '', NULL, 1, 501, 5);
INSERT INTO `m_organisasi` VALUES (596, NULL, 'NETWORK & SERVICE OPTIMIZATION', NULL, 5, '', NULL, 1, 502, 5);
INSERT INTO `m_organisasi` VALUES (597, NULL, 'SLA & KPI REPORT QUALITY MANAGEMENT', NULL, 5, '', NULL, 1, 502, 5);
INSERT INTO `m_organisasi` VALUES (598, NULL, 'ACCOUNT MANAGER', NULL, 5, '', NULL, 1, 463, 5);
INSERT INTO `m_organisasi` VALUES (599, NULL, 'SECRETARIAT & BUDGETING MANAGEMENT', NULL, 5, '', NULL, 1, 520, 5);
INSERT INTO `m_organisasi` VALUES (600, NULL, 'SALES ADMINISTRASI COMPLIANCE', NULL, 5, '', NULL, 1, 520, 5);
INSERT INTO `m_organisasi` VALUES (601, NULL, 'PLANNING & PERFORMANCE MANAGEMENT', NULL, 5, '', NULL, 1, 520, 5);
INSERT INTO `m_organisasi` VALUES (602, NULL, 'SOLUTION GOS & ENS', NULL, 5, '', NULL, 1, 518, 5);
INSERT INTO `m_organisasi` VALUES (603, NULL, 'SOLUTION OLOS & LBCS', NULL, 5, '', NULL, 1, 518, 5);
INSERT INTO `m_organisasi` VALUES (604, NULL, 'OFFERING & SALES SUPPORT (GOS)', NULL, 5, '', NULL, 1, 675, 5);
INSERT INTO `m_organisasi` VALUES (605, NULL, 'OFFERING & SALES SUPPORT (LOCAL)', NULL, 5, '', NULL, 1, 676, 5);
INSERT INTO `m_organisasi` VALUES (606, NULL, 'OFFERING & SALES SUPPORT (OLOS)', NULL, 5, '', NULL, 1, 677, 5);
INSERT INTO `m_organisasi` VALUES (607, NULL, 'OFFERING & SALES SUPPORT (ENS)', NULL, 5, '', NULL, 1, 678, 5);
INSERT INTO `m_organisasi` VALUES (608, NULL, 'ACCOUNTING ', NULL, 5, '', NULL, 1, 508, 5);
INSERT INTO `m_organisasi` VALUES (609, NULL, 'BUDGETING', NULL, 5, '', NULL, 1, 508, 5);
INSERT INTO `m_organisasi` VALUES (610, NULL, 'TREASURY OPERATION', NULL, 5, '', NULL, 1, 509, 5);
INSERT INTO `m_organisasi` VALUES (611, NULL, 'TAX OPERATION', NULL, 5, '', NULL, 1, 509, 5);
INSERT INTO `m_organisasi` VALUES (612, NULL, 'RISK MANAGEMENT', NULL, 5, '', NULL, 1, 510, 5);
INSERT INTO `m_organisasi` VALUES (613, NULL, 'PROCUREMENT 1', NULL, 5, '', NULL, 1, 511, 5);
INSERT INTO `m_organisasi` VALUES (614, NULL, 'PROCUREMENT 2', NULL, 5, '', NULL, 1, 511, 5);
INSERT INTO `m_organisasi` VALUES (615, NULL, 'HSE', NULL, 5, '', NULL, 1, 512, 5);
INSERT INTO `m_organisasi` VALUES (616, NULL, 'INVENTORY', NULL, 5, '', NULL, 1, 512, 5);
INSERT INTO `m_organisasi` VALUES (617, NULL, 'ASSET MANAGEMENT', NULL, 5, '', NULL, 1, 460, 5);
INSERT INTO `m_organisasi` VALUES (618, NULL, 'GA & LOGISTIC OPERATION', NULL, 5, '', NULL, 1, 512, 5);
INSERT INTO `m_organisasi` VALUES (619, NULL, 'BILLING', NULL, 5, '', NULL, 1, 513, 5);
INSERT INTO `m_organisasi` VALUES (620, NULL, 'COLLECTION', NULL, 5, '', NULL, 1, 513, 5);
INSERT INTO `m_organisasi` VALUES (621, NULL, 'REVENUE ASSURANCE', NULL, 5, '', NULL, 1, 514, 5);
INSERT INTO `m_organisasi` VALUES (622, NULL, 'BILLCO REVASS PERFORMANCE & REPORT', NULL, 5, '', NULL, 1, 514, 5);
INSERT INTO `m_organisasi` VALUES (623, NULL, 'WORKFORCE PLANNING', NULL, 5, '', NULL, 1, 515, 5);
INSERT INTO `m_organisasi` VALUES (624, NULL, 'HC DEVELOPMENT', NULL, 5, '', NULL, 1, 515, 5);
INSERT INTO `m_organisasi` VALUES (625, NULL, 'HC SERVICE', NULL, 5, '', NULL, 1, 516, 5);
INSERT INTO `m_organisasi` VALUES (626, NULL, 'HC SOLUTION', NULL, 5, '', NULL, 1, 516, 5);
INSERT INTO `m_organisasi` VALUES (674, NULL, 'DIREKTORAT PENGEMBANGAN', '-', 3, '', '', 1, 119, 3);
INSERT INTO `m_organisasi` VALUES (675, NULL, 'GOVERNMENT SERVICE', NULL, 4, '', NULL, 1, 464, 4);
INSERT INTO `m_organisasi` VALUES (676, NULL, 'LOCAL BUSINESS & CONSUMER SERVICE', NULL, 4, '', NULL, 1, 466, 4);
INSERT INTO `m_organisasi` VALUES (677, NULL, 'OTHER LICENSE OPERATOR SERVICE', NULL, 4, '', NULL, 1, 465, 4);
INSERT INTO `m_organisasi` VALUES (678, NULL, 'ENTERPRISE SERVICE', NULL, 4, '', NULL, 1, 467, 4);

-- ----------------------------
-- Table structure for m_sistem_sipatra
-- ----------------------------
DROP TABLE IF EXISTS `m_sistem_sipatra`;
CREATE TABLE `m_sistem_sipatra`  (
  `id` int NOT NULL,
  `nama` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of m_sistem_sipatra
-- ----------------------------
INSERT INTO `m_sistem_sipatra` VALUES (1, 'HCM');
INSERT INTO `m_sistem_sipatra` VALUES (2, 'SIAP ONLINE');
INSERT INTO `m_sistem_sipatra` VALUES (3, 'ASSET');
INSERT INTO `m_sistem_sipatra` VALUES (4, 'FINANCE');
INSERT INTO `m_sistem_sipatra` VALUES (5, 'PROCUREMENT');
INSERT INTO `m_sistem_sipatra` VALUES (6, 'REVAS');
INSERT INTO `m_sistem_sipatra` VALUES (7, 'INVOICE TRACKING');
INSERT INTO `m_sistem_sipatra` VALUES (8, 'INVOICE BILLING');
INSERT INTO `m_sistem_sipatra` VALUES (31, 'TNA');

-- ----------------------------
-- Table structure for m_tna_anggaran
-- ----------------------------
DROP TABLE IF EXISTS `m_tna_anggaran`;
CREATE TABLE `m_tna_anggaran`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` double NULL DEFAULT NULL,
  `year` int NULL DEFAULT NULL,
  `type` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT 'active',
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` datetime NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_tna_anggaran
-- ----------------------------
INSERT INTO `m_tna_anggaran` VALUES (3, 34, 2024, 'tna', 'active', '456', '2024-01-12 00:00:00', NULL, NULL);
INSERT INTO `m_tna_anggaran` VALUES (15, 3.411, 2024, 'tna', 'active', '456', '2024-01-13 00:00:00', NULL, NULL);
INSERT INTO `m_tna_anggaran` VALUES (16, 3.411, 2024, 'tna', 'active', '456', '2024-01-13 00:00:00', NULL, NULL);
INSERT INTO `m_tna_anggaran` VALUES (19, 567, 2024, 'NON TNA', 'active', '456', '2024-01-14 00:00:00', NULL, NULL);
INSERT INTO `m_tna_anggaran` VALUES (21, 0, NULL, NULL, 'active', NULL, NULL, '0000-00-00 00:00:00', '2024-01-15 00:00:00');
INSERT INTO `m_tna_anggaran` VALUES (22, 77777, 2024, 'TNA', 'active', '456', '2024-01-22 00:00:00', '0000-00-00 00:00:00', '2024-01-15 00:00:00');
INSERT INTO `m_tna_anggaran` VALUES (23, 111, 2025, 'TNA', 'active', '456', '2024-01-22 00:00:00', '0000-00-00 00:00:00', '2024-01-15 00:00:00');
INSERT INTO `m_tna_anggaran` VALUES (24, 333, 2025, 'TNA', 'active', NULL, '2024-01-22 00:00:00', '0000-00-00 00:00:00', '2024-01-16 00:00:00');
INSERT INTO `m_tna_anggaran` VALUES (25, 0, NULL, NULL, 'active', NULL, NULL, '0000-00-00 00:00:00', '2024-01-22 00:00:00');

-- ----------------------------
-- Table structure for m_tna_justifikasi_rjbp
-- ----------------------------
DROP TABLE IF EXISTS `m_tna_justifikasi_rjbp`;
CREATE TABLE `m_tna_justifikasi_rjbp`  (
  `id` int NOT NULL,
  `justifikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_tna_justifikasi_rjbp
-- ----------------------------

-- ----------------------------
-- Table structure for m_tna_justifikasi_rjbp_kompetensi
-- ----------------------------
DROP TABLE IF EXISTS `m_tna_justifikasi_rjbp_kompetensi`;
CREATE TABLE `m_tna_justifikasi_rjbp_kompetensi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `m_tna_justifikasi_rjbp_id` int NULL DEFAULT NULL,
  `r_tna_kompentensi_id` int NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_tna_justifikasi_rjbp_kompetensi
-- ----------------------------

-- ----------------------------
-- Table structure for m_tna_usulan
-- ----------------------------
DROP TABLE IF EXISTS `m_tna_usulan`;
CREATE TABLE `m_tna_usulan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `m_organisasi_id` int NULL DEFAULT NULL,
  `m_karyawan_id` int NULL DEFAULT NULL,
  `r_tna_kompetensi_id` int NULL DEFAULT NULL,
  `r_tna_traning_id` int NULL DEFAULT NULL,
  `jenis_pelatihan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jenis_development` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nama_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `justifikasi_pengajuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `metoda_pembelajaran` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `estimasi_biaya` double NULL DEFAULT NULL,
  `nama_penyelenggara` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `waktu_pelaksanaan` date NULL DEFAULT NULL,
  `status_karyawan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tahapan_id` int NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_tna_usulan
-- ----------------------------
INSERT INTO `m_tna_usulan` VALUES (1, 427, 401, 347, 14, 'Human Resources', 'Pelatihan', 'Pletihan Partner & relationship Managemenr', 'testing latihan', 'Online', 1000000, 'PT. Adiguna', '2024-01-24', 'Non FTE', 170, '1', 456, '2024-01-26 00:00:00', NULL, NULL);
INSERT INTO `m_tna_usulan` VALUES (2, 427, 1063, 347, 14, 'Human Resources', 'Pelatihan', 'Pletihan Partner & relationship Managemenr', 'testing latihan', 'Online', 1000000, 'PT. Adiguna', '2024-01-24', 'Non FTE', 171, '1', 456, '2024-01-26 00:00:00', NULL, NULL);

-- ----------------------------
-- Table structure for r_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `r_jabatan`;
CREATE TABLE `r_jabatan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `level` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `r_kelompok_jabatan_id` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 673 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of r_jabatan
-- ----------------------------
INSERT INTO `r_jabatan` VALUES (2, 'Komisaris', 'BOC', 1);
INSERT INTO `r_jabatan` VALUES (3, 'PRESIDENT DIRECTOR', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (4, 'AVP INTERNAL AUDIT & RISK MANAGEMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (5, 'MANAGER IA & HEALTH SAFETY ENVIRONMENT', 'III', 3);
INSERT INTO `r_jabatan` VALUES (6, 'OFFICER 1 INTERNAL AUDIT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (7, 'OFFICER 1 HSE & BUSINESS', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (8, 'MANAGER LEGAL & RISK MANAGEMENT', 'III', 3);
INSERT INTO `r_jabatan` VALUES (9, 'OFFICER 2 LEGAL', 'V', 1);
INSERT INTO `r_jabatan` VALUES (10, 'OFFICER 3 RISK MANAGEMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (11, 'AVP PERFORMANCE & CORPORATE PLANNING', 'II', 1);
INSERT INTO `r_jabatan` VALUES (12, 'MANAGER REVENUE ASSURANCE', 'III', 3);
INSERT INTO `r_jabatan` VALUES (13, 'OFFICER 1 REVENUE ASSURANCE', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (14, 'MANAGER BUSINESS PERFORMANCE & CORPORATE PLAN', 'III', 3);
INSERT INTO `r_jabatan` VALUES (15, 'OFFICER 1 BUSINESS PERFORMANCE & CORPORATE PLAN', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (16, 'OFFICER 2 BUSINESS PERFORMANCE & CORPORATE PLAN', 'V', 1);
INSERT INTO `r_jabatan` VALUES (17, 'DIRECTOR OF BUSINESS', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (18, 'VP BUSINESS DEVELOPMENT', 'I', 1);
INSERT INTO `r_jabatan` VALUES (19, 'GM PRODUCT DEVELOPMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (20, 'MANAGER PRODUCT DEVELOPMENT', 'III', 3);
INSERT INTO `r_jabatan` VALUES (21, 'OFFICER 3 PRODUCT DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (22, 'MANAGER BUSINESS INCUBATION', 'III', 3);
INSERT INTO `r_jabatan` VALUES (23, 'OFFICER 2 BUSINESS INCUBATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (24, 'AVP ANALYSIS PRODUCT, PRICING & STRATEGY', 'II', 1);
INSERT INTO `r_jabatan` VALUES (25, 'MANAGER BUSINESS PLAN & STRATEGY', 'III', 3);
INSERT INTO `r_jabatan` VALUES (26, 'OFFICER 3 BUSINESS PLAN & STRATEGY', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (27, 'MANAGER PRODUCT MANAGEMENT & PRICING', 'III', 3);
INSERT INTO `r_jabatan` VALUES (28, 'OFFICER 1 PRODUCT MANAGEMENT & PRICING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (29, 'MANAGER PARTNERSHIP', 'III', 3);
INSERT INTO `r_jabatan` VALUES (30, 'OFFICER 1 PARTNERSHIP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (31, 'VP MARKETING & SALES', 'I', 1);
INSERT INTO `r_jabatan` VALUES (32, 'GM SEGMENT 1 MARITIM, OIL & GAS', 'II', 2);
INSERT INTO `r_jabatan` VALUES (33, 'ACCOUNT MANAGER SALES', 'III', 3);
INSERT INTO `r_jabatan` VALUES (34, 'JUNIOR ACCOUNT MANAGER SALES', 'IV', 3);
INSERT INTO `r_jabatan` VALUES (35, 'MANAGER SERVICE & SOLUTION', 'III', 5);
INSERT INTO `r_jabatan` VALUES (36, 'OFFICER 1 SALES SOLUTION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (37, 'OFFICER 3 SALES SUPPORT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (38, 'GM SEGMENT 2 FINANCE & PLANTATION', 'II', 2);
INSERT INTO `r_jabatan` VALUES (40, 'GM SEGMENT 3 TELECOMMUNICATION', 'II', 2);
INSERT INTO `r_jabatan` VALUES (41, 'GM SEGMENT N..', 'II', 2);
INSERT INTO `r_jabatan` VALUES (42, 'OFFICER 2 SALES SOLUTION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (43, 'OFFICER 3 SALES SOLUTION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (44, 'DIRECTOR OF NETWORK', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (45, 'VP SERVICE DELIVERY', 'I', 1);
INSERT INTO `r_jabatan` VALUES (46, 'GM SERVICE DELIVERY RF', 'II', 2);
INSERT INTO `r_jabatan` VALUES (47, 'MANAGER SERVICE DELIVERY RF', 'III', 3);
INSERT INTO `r_jabatan` VALUES (48, 'ENGINEER 1 SERVICE DELIVERY RF', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (49, 'ENGINEER 2 SERVICE DELIVERY RF', 'V', 1);
INSERT INTO `r_jabatan` VALUES (50, 'ENGINEER 3 SERVICE DELIVERY RF', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (51, 'GM SERVICE DELIVERY VSAT, IP &  DATACOMM', 'II', 2);
INSERT INTO `r_jabatan` VALUES (52, 'MANAGER SERVICE DELIVERY DATACOMM', 'III', 3);
INSERT INTO `r_jabatan` VALUES (53, 'ENGINEER 1 SERVICE DELIVERY DATACOMM', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (54, 'ENGINEER 2 SERVICE DELIVERY DATACOMM', 'V', 1);
INSERT INTO `r_jabatan` VALUES (55, 'ENGINEER 3 SERVICE DELIVERY DATACOMM', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (56, 'MANAGER SERVICE DELIVERY SUPPORT DATACOMM', 'III', 3);
INSERT INTO `r_jabatan` VALUES (57, 'OFFICER 1 SERVICE DELIVERY SUPPORT DATACOMM', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (58, 'OFFICER 2 SERVICE DELIVERY SUPPORT DATACOMM', 'V', 1);
INSERT INTO `r_jabatan` VALUES (59, 'OFFICER 3 SERVICE DELIVERY SUPPORT DATACOMM', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (60, 'VP NETWORK OPERATION', 'I', 1);
INSERT INTO `r_jabatan` VALUES (61, 'GM NETWORK OPERATION RF', 'II', 2);
INSERT INTO `r_jabatan` VALUES (62, 'MANAGER RF & ELEKTRIK', 'III', 3);
INSERT INTO `r_jabatan` VALUES (63, 'ENGINEER 1  RF', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (64, 'ENGINEER 3  ELEKTRIK', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (65, 'ENGINEER 1 WORKSHOP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (66, 'ENGINEER 1  QC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (67, 'MANAGER SCPC, DSCPC & GYRO', 'III', 3);
INSERT INTO `r_jabatan` VALUES (68, 'ENGINEER 1 SCPC & DSCPC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (69, 'ENGINEER 3 SCPC & DSCPC', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (70, 'ENGINEER 1 GYRO, MSS, FBB', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (71, 'ENGINEER 3 GYRO, MSS, FBB', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (72, 'OFFICER 1 ADMINISTRATION SUPPORT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (73, 'OFFICER 2 ADMINISTRATION SUPPORT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (74, 'PJ. MANAGER RADIO & TERESTERIAL', 'III', 3);
INSERT INTO `r_jabatan` VALUES (75, 'ENGINEER 3 RADIO IP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (76, 'ENGINEER 3 TERESTERIAL', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (77, 'GM NETWORK OPERATION DATACOM', 'II', 2);
INSERT INTO `r_jabatan` VALUES (78, 'MANAGER IT, INTERNET & BACKHAULING', 'III', 3);
INSERT INTO `r_jabatan` VALUES (79, 'ENGINEER 2  IT & INTERNET', 'V', 1);
INSERT INTO `r_jabatan` VALUES (80, 'ENGINEER 1 BACKHAULING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (81, 'ENGINEER 3 SYSTEM MONITOR', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (82, 'MANAGER NOC', 'III', 3);
INSERT INTO `r_jabatan` VALUES (83, 'ENGINEER 1 MANAJEMEN FREKWENSI', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (84, 'ENGINEER 3 MANAJEMEN FREKWENSI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (86, 'OFFICER 2 HELPDESK CUSTOMER OFFICE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (87, 'MANAGER VSAT IP', 'III', 3);
INSERT INTO `r_jabatan` VALUES (88, 'ENGINEER 1 HUB VSAT IP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (89, 'ENGINEER 3 HUB VSAT IP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (90, 'ENGINEER 1 REMOTE VSAT IP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (91, 'ENGINEER 3 REMOTE VSAT IP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (92, 'DIRECTOR OF FINANCE & ADMINISTRATION', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (93, 'VP FINANCE', 'I', 1);
INSERT INTO `r_jabatan` VALUES (94, 'AVP ACCOUNTING & BUDGETING', 'II', 1);
INSERT INTO `r_jabatan` VALUES (95, 'MANAGER BUDGETTING', 'III', 3);
INSERT INTO `r_jabatan` VALUES (96, 'OFFICER 1 BUDGETING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (97, 'MANAGER ACCOUNTING', 'III', 3);
INSERT INTO `r_jabatan` VALUES (98, 'OFFICER 3 ACCOUNTING', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (99, 'AVP TREASURY & TAX', 'II', 1);
INSERT INTO `r_jabatan` VALUES (100, 'MANAGER TREASURY', 'III', 3);
INSERT INTO `r_jabatan` VALUES (101, 'OFFICER 3 TREASURY', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (102, 'MANAGER TAX', 'III', 3);
INSERT INTO `r_jabatan` VALUES (103, 'OFFICER 2 TAX', 'V', 1);
INSERT INTO `r_jabatan` VALUES (104, 'AVP BILLING MANAGEMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (105, 'MANAGER BILLING PROCESS', 'III', 3);
INSERT INTO `r_jabatan` VALUES (106, 'OFFICER 3 BILLING PROCESS', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (107, 'MANAGER DEBT & REVENUE ASSURANCE', 'III', 3);
INSERT INTO `r_jabatan` VALUES (108, 'OFFICER 3 DEBT & REVENUE ASSURANCE', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (109, 'AVP COLLECTION', 'II', 1);
INSERT INTO `r_jabatan` VALUES (110, 'MANAGER COLLECTION MANAGEMENT ', 'III', 3);
INSERT INTO `r_jabatan` VALUES (111, 'OFFICER 1 COLLECTION MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (112, 'MANAGER DEBT COLLECTION', 'III', 3);
INSERT INTO `r_jabatan` VALUES (113, 'OFFICER 2 DEBT COLLECTION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (114, 'VP HUMAN CAPITAL & GENERAL AFFAIR', 'I', 1);
INSERT INTO `r_jabatan` VALUES (115, 'AVP HUMAN CAPITAL MANAGEMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (116, 'MANAGER HC PLANNING & DEVELOPMENT', 'III', 3);
INSERT INTO `r_jabatan` VALUES (117, 'OFFICER 1 CAREER MANAGEMENT & PERFORMANCE', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (118, 'OFFICER 3 TRAINING & DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (119, 'MANAGER HC SOLUTION & SERVICE ADMINISTRATION', 'III', 3);
INSERT INTO `r_jabatan` VALUES (120, 'OFFICER 1 SOLUTION & SERVICE ADMINISTRATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (121, 'OFFICER 2 SOLUTION & SERVICE ADMINISTRATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (122, 'AVP CORPORATE COMMUNICATION', 'II', 1);
INSERT INTO `r_jabatan` VALUES (123, 'MANAGER CORPORATE COMMUNICATION', 'III', 3);
INSERT INTO `r_jabatan` VALUES (124, 'OFFICER 2 CORPORATE COMMUNICATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (125, 'OFFICER 3 CORPORATE COMMUNICATION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (126, 'MANAGER KESEKRETARIATAN', 'III', 3);
INSERT INTO `r_jabatan` VALUES (129, 'AVP GENERAL AFFAIR', 'II', 1);
INSERT INTO `r_jabatan` VALUES (130, 'MANAGER PROCUREMENT', 'III', 3);
INSERT INTO `r_jabatan` VALUES (131, 'OFFICER 1 PROCUREMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (132, 'OFFICER 2 PROCUREMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (133, 'OFFICER 3 PROCUREMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (134, 'MANAGER LOGISTIC', 'III', 3);
INSERT INTO `r_jabatan` VALUES (135, 'OFFICER 3 OUTBOUND LOGISTIC', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (136, 'OFFICER 1 INBOUND LOGISTIC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (137, 'OFFICER 3 INBOUND LOGISTIC', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (138, 'MANAGER ASET MANAGEMENT & INVENTORY CONTROL', 'III', 3);
INSERT INTO `r_jabatan` VALUES (139, 'OFFICER 1 ASET MANAGEMENT & INVENTORY CONTROL', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (140, 'EXPERT PERFORMANCE & CORPORATE PLANNING III', 'III', 3);
INSERT INTO `r_jabatan` VALUES (141, 'EXPERT SERVICE DELIVERY VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (142, 'EXPERT NETWORK OPERATION VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (143, 'EXPERT NETWORK OPERATION VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (144, 'EXPERT FINANCE VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (145, 'SECRETARY', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (146, 'EXPERT HUMAN CAPITAL & GENERAL AFFAIR VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (147, 'EXPERT BILLING VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (148, 'EXPERT ASSET MANAGEMENT III', 'III', 1);
INSERT INTO `r_jabatan` VALUES (149, 'TENAGA PROFESIONAL IA &RISK MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (150, 'TENAGA PROFESIONAL PENAGIHAN & PENCAIRAN PIUTANG', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (153, 'OFFICER 2 ADMINISTRATION SUPPORT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (154, 'OFFICER 1 ADMINISTRATION SUPPORT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (156, 'ENGINEER 1 SQA', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (157, 'OFFICER 1  SQA', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (158, 'EXPERT LEGAL IV', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (159, 'EXPERT NETWORK OPERATION V', 'V', 1);
INSERT INTO `r_jabatan` VALUES (160, 'EXPERT TREASURY V', 'V', 1);
INSERT INTO `r_jabatan` VALUES (161, 'EXPERT MARKETING & SALES V', 'V', 1);
INSERT INTO `r_jabatan` VALUES (162, 'EXPERT INBOUND LOGISTIK V', 'V', 1);
INSERT INTO `r_jabatan` VALUES (164, 'ENGINEER SUPPORT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (165, 'ADMINISTRASI SUPPORT DATA ASSET MANAGEMENT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (166, 'SALES SUPPORT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (167, 'ENGINEER 1 RADIO IP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (168, 'INVENTORY CONTROL', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (169, 'TEKNISI DS3', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (170, 'TEKNISI SUPPORT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (171, 'OFFICER DATACOMM', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (172, 'HELPDESK & CUSTOMER OFFICE', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (173, 'EOS', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (174, 'IT HELPDESK SUPPORT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (175, 'TECHNICAL SUPPORT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (176, 'ENGINEER', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (177, 'DRIVER', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (178, 'DRIVER DIREKSI', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (179, 'KOMANDAN SECURITY', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (180, 'WAKIL KOMANDAN SECURITY', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (181, 'SECURITY', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (182, 'KOORDINATOR OFFICE BOY', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (183, 'OFFICE BOY', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (184, 'CLEANING SERVICE', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (185, 'GARDENER', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (186, 'MAINTENCE (OPERATOR GENSET)', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (187, 'ADM LOGISTIK', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (188, 'RECEPTIONIST', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (189, 'BENDAHARA GUDANG', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (190, 'ENGGINEER ON SITE', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (191, 'ADM PERGUDANGAN', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (192, 'STAFF SQA', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (193, 'MANAGER RADIO & TERESTERIAL', 'III', 1);
INSERT INTO `r_jabatan` VALUES (194, 'PJ. MANAGER SERVICE & SOLUTION', 'IV', 5);
INSERT INTO `r_jabatan` VALUES (195, 'PJ. MANAGER SERVICE DELIVERY SUPPORT DATACOMM', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (196, 'OFFICER 2 TREASURY', 'V', 1);
INSERT INTO `r_jabatan` VALUES (197, 'PROFESIONAL EXPERT GENERAL AFFAIR', 'II', 1);
INSERT INTO `r_jabatan` VALUES (198, 'EXPERT NETWORK OPERATION IV', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (199, 'EXPERT DEBT COLLECTION VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (200, 'OFFICER 2 BUSINESS PERFORMANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (201, 'STAF SUPPORT RISK MANAGEMENT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (202, 'STAF SUPPORT INTERNAL AUDIT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (203, 'ENGINEER RADIO IP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (204, 'STAFF SUPPORT BILLING', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (205, 'STAF SALES SOLUTION', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (206, 'GM. BUSINESS DEVELOPMENT', 'II', 2);
INSERT INTO `r_jabatan` VALUES (207, 'SENIOR BUSINESS ANALYST MARITIME & NEW BUSINESS', 'II', 1);
INSERT INTO `r_jabatan` VALUES (208, 'ASMAN INBOUND LOGISTIC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (209, 'ASMAN OFFICE SERVICES', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (210, 'OFFICER 3 ADMINISTRATION SUPPORT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (211, 'OFFICER 3 NETWORK SUPPORT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (212, 'SO. SUPPORT & ADMINISTRATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (213, 'EXPERT IA & RISK MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (214, 'MANAGER INTERNAL AUDIT & RISK MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (215, 'GM. NETWORK OPERATION & CONTROL', 'II', 1);
INSERT INTO `r_jabatan` VALUES (216, 'MANAGER PROJECT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (217, 'EXPERT NETWORK OPERATION III', 'III', 1);
INSERT INTO `r_jabatan` VALUES (218, 'PJ GM PRODUCT DEVELOPMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (219, 'ASMAN SERVICE ADMINISTRATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (220, 'ASMAN HR SERVICE ADMINISTRATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (221, 'SO. SALES SUPPORT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (222, 'ASMAN CASH & BANK', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (223, 'ASMAN COLLECTION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (224, 'ASMAN DEBT & COLLECTION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (225, 'MANAGER BILLING', 'III', 1);
INSERT INTO `r_jabatan` VALUES (226, 'MANAGER BILLING & COLLECTION', 'III', 1);
INSERT INTO `r_jabatan` VALUES (227, 'MANAGER PRODUCT & SERVICES DEVELOPMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (228, 'EXPERT CORPORATE COMUNICATION VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (229, 'EXPERT HC SOLUTION & SERVICE ADM. IV', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (230, 'EXPERT FINANCE IV', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (231, 'EXPERT FINANCE V', 'V', 1);
INSERT INTO `r_jabatan` VALUES (232, 'PJ. MANAGER IT, INTERNET, & BACKHAULING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (233, 'MANAGER HRM', 'III', 1);
INSERT INTO `r_jabatan` VALUES (234, 'CORPORATE SECRETARY', 'III', 1);
INSERT INTO `r_jabatan` VALUES (235, 'PJ AVP CORPORATE SECRETARY', 'III', 1);
INSERT INTO `r_jabatan` VALUES (236, 'ASMAN IA & RISK MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (237, 'SO. TAX', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (238, 'HEAD OF INTERNAL AUDIT & HSE', 'III', 1);
INSERT INTO `r_jabatan` VALUES (239, 'KAPRO GUGUS TUGAS KHUSUS KESISTEMAN, APLIKASI', 'III', 1);
INSERT INTO `r_jabatan` VALUES (241, 'MANAGER NOC & MECHANICAL ELECTRICAL', 'III', 1);
INSERT INTO `r_jabatan` VALUES (242, 'ASMAN HSE', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (243, 'ASMAN HELPDESK', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (244, 'OFFICER 1 WORKSHOP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (245, 'OFFICER 1 WAREHOUSING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (246, 'ASMAN ASET MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (247, 'ASMAN WAREHOUSING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (248, 'ASMAN PURCHASING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (249, 'OFFICER 1 HC INFORMATION SYSTEM', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (250, 'SO. INFORMATION SYSTEM', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (251, 'ASMAN HSE & BUSINESS PROCESS', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (252, 'SO. KESISTEMAN & APLIKASI', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (253, 'JUNIOR BUSINESS ANALYST MARITIME & NEW BUSINESS', 'III', 1);
INSERT INTO `r_jabatan` VALUES (254, ' MANAGER IT PLANNING & DEVELOPMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (255, 'MANAGER HELPDESK & SQA', 'III', 1);
INSERT INTO `r_jabatan` VALUES (256, 'MANAGER MARKETING', 'III', 1);
INSERT INTO `r_jabatan` VALUES (257, 'MANAGER MARKETING PLAN & STRATEGY', 'III', 1);
INSERT INTO `r_jabatan` VALUES (258, 'ASMAN ASSET MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (259, 'SO. WAREHOUSING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (260, 'SO. ACCOUNTING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (261, 'STAF KHUSUS WORKSHOP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (262, 'STAF KHUSUS PURCHASING PLAN', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (263, 'ASMAN PROCUREMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (264, 'ASMAN PURCHASING PLAN', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (265, 'STAFF ACCOUNTING', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (266, 'STAFF ASSET MANAGEMENT & INVENTORY CONTROL', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (267, 'EXPERT BUSINESS DEVELOPMENT VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (268, 'TECHNICIAN NCC', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (269, 'MANAGER NETWORK MAINTENANCE', 'III', 1);
INSERT INTO `r_jabatan` VALUES (270, 'ASMAN SEGMEN', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (271, 'ACCOUNT MANAGER PROHIRE', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (272, 'EXPERT LEGAL VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (273, 'PJ. AVP HUMAN CAPITAL MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (274, 'STAFF SUPPORT DATACOMM', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (275, 'ENGINEER 2 PROJECT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (276, 'ENGINEER 3 PROJECT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (277, 'STAF NETWORK INSTALLATION', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (278, 'TECHNICIAN PROJECT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (279, 'OFFICER 3 SERVICE DELIVERY SUPPORT RF', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (280, 'ENGGINEER 1 GYRO, MSS, FBB', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (281, 'STAF NETWORK MAINTENANCE', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (282, 'TECHNICIAN PENGELOLAAN FREKUENSI', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (283, 'ENGINEER 2 SEGMEN', 'V', 1);
INSERT INTO `r_jabatan` VALUES (284, 'ENGINEER 2 SCPC & DSCPC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (285, 'ASMAN NETWORK SUPPORT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (286, 'ENGINEER 3 HELPDESK', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (287, 'ENGINEER 3 NCC', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (288, 'STAF NCC', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (289, 'ENGINEER 3 HUB VSAT IP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (290, 'TECHNICIAN ME', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (291, 'TECHNICIAN ELECTRIK', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (292, 'ASMAN PENGELOLAAN FREKUENSI', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (293, 'OFFICER 3 MARKETING PLAN & STRATEGY', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (294, 'STAF BILLING', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (295, 'STAFF DEBT & REVENUE ASSURANCE', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (296, 'TEKNISI', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (297, 'TECHNICIAN NETWORK AREA', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (298, 'OFFICER 3 ADMINISTRATION SUPPORT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (299, 'OFFICER 3 OFFICE SERVICES', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (300, 'OFFICER 3 SEAT MANAGEMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (301, 'OFFICER 3 ADMINISTRATION RKAP, RJPP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (302, 'OFFICER 3 ASSET MANAGEMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (303, 'OFFICER 3 WAREHOUSING', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (304, 'OFFICER 3 PURCHASING PLAN', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (305, 'ASMAN BUDGETING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (306, 'STAF SALES SUPPORT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (307, 'ASMAN PRODUCT MANAGEMENT & PRICING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (308, 'OFFICER 3 BUSINESS PARTNERSHIP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (309, 'SO. BUSINESS PARTNERSHIP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (310, 'ASMAN PARTNERSHIP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (311, 'OFFICER 3 SUPPORT & ADMINISTRATION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (312, 'ENGINEER 3 PENGELOLAAN FREKUENSI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (313, 'ENGINEER 1 RADIO IP', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (314, 'SUPERVISOR NETWORK AREA', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (315, 'ASMAN NCC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (316, 'ASMAN SQA', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (317, 'ASMAN NCM DATA CENTER', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (318, 'ENGINEER 1 TERESTERIAL', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (319, 'OFFICER 3 COLLECTION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (320, 'OFFICER 3 BILLING', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (321, 'OFFICER 2 BILLING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (322, 'OFFICER 2 COLLECTION MANAGEMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (323, 'EXPERT BILLING PROCESS V', 'V', 1);
INSERT INTO `r_jabatan` VALUES (324, 'STAF BILLING & COLLECTION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (325, 'ENGINEER 1 PROJECT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (326, 'TECHNICIAN NCM', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (327, 'MANAGER LEGAL & COMPLIANCE', 'III', 1);
INSERT INTO `r_jabatan` VALUES (328, 'STAF HRD', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (329, 'OFFICER 2 CAREER MANAGEMENT & PERFORMANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (330, 'ASMAN HR DEVELOPMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (331, 'SE. INSTALATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (332, 'ENGINEER 2 PROVISIONING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (333, 'ENGINEER 2 SERVICE DELIVERY RF', 'V', 1);
INSERT INTO `r_jabatan` VALUES (334, 'OFFICER 3 CASH & BANK', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (335, 'STAF SALES', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (336, 'OFFICER 3 PRODUCT & SERVICES DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (337, 'STAFF PROCUREMENT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (338, 'STAFF PURCHASING PLAN', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (339, 'EXPERT HUMAN CAPITAL & GENERAL AFFAIR VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (340, 'OFFICER 2 CORPORATE PLANNING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (341, 'OFFICER 2 CORPORATE COMMUNICATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (342, 'OFFICER 1 BUSINESS PERFORMANCE CORPORATE PLAN', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (343, 'OFFICER 2 BUSINESS PERFORMANCE CORPORATE PLAN', 'V', 1);
INSERT INTO `r_jabatan` VALUES (344, 'OFFICER 2 COMPLIANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (345, 'OFFICER 2 ACCOUNTING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (346, 'OFFICER 2 HR SERVICE ADMINISTRATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (347, 'OFFICER 2 SERVICE ADMINISTRATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (348, 'OFFICER 3 BILLING SETTLEMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (349, 'OFFICER 3 PLANNING & DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (350, 'OFFICER 2 BUSINESS PERFORMANCE CORPORATE PLAN', 'V', 1);
INSERT INTO `r_jabatan` VALUES (351, 'OFFICER 2 HELPDESK', 'V', 1);
INSERT INTO `r_jabatan` VALUES (352, 'MANAGER FINANCIAL ACCOUNTING', 'III', 1);
INSERT INTO `r_jabatan` VALUES (353, ' EXPERT DEBT COLLECTION VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (354, 'STAFF SUPPORT LOGISTIC', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (355, 'WAKIL DIREKTUR UTAMA', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (356, 'DIRECTOR OF COMMERCE (CMO)', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (357, 'DIRECTOR OF DEVELOPMENT (CDO)', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (358, 'DIRECTOR OF NETWORK OPERATION (CTO)', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (359, 'DIRECTOR OF FINANCE & ADMINISTRATION (CFO)', 'BOD', 1);
INSERT INTO `r_jabatan` VALUES (360, 'PJ AVP ACCOUNTING & BUDGETTING', 'III', 1);
INSERT INTO `r_jabatan` VALUES (361, 'PJ MANAGER ASSET MANAGEMENT & INVENTORY CONTROL', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (362, 'PJ MANAGER HC PLANNING & DEVELOPMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (363, 'VP STRATEGY, SATELLITE PLANNING & SYSTEM', 'I ', 1);
INSERT INTO `r_jabatan` VALUES (364, 'VP BUSINESS DEVELOPMENT & PARTNERSHIP', 'I', 1);
INSERT INTO `r_jabatan` VALUES (365, 'VP SATELLITE OPERATION', 'I', 1);
INSERT INTO `r_jabatan` VALUES (366, 'VP TRANSFORMATION', 'I', 1);
INSERT INTO `r_jabatan` VALUES (367, 'VP SEGMENT 1', 'I', 1);
INSERT INTO `r_jabatan` VALUES (368, 'VP SEGMENT 2', 'I', 1);
INSERT INTO `r_jabatan` VALUES (369, 'VP SEGMENT 3', 'I', 1);
INSERT INTO `r_jabatan` VALUES (370, 'VP PROJECT MANAGEMENT & DEPLOYMENT', 'I', 1);
INSERT INTO `r_jabatan` VALUES (371, 'VP CORPORATE AFFAIR', 'I', 1);
INSERT INTO `r_jabatan` VALUES (372, 'JUNIOR ACCOUNT MANAGER SALES VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (373, 'ENGINEER 2 INSTALATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (374, 'EXPERT INTERNAL AUDIT VI', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (375, 'VP HUMAN CAPITAL MANAGEMENT', 'I', 1);
INSERT INTO `r_jabatan` VALUES (376, 'SENIOR EXECUTIVE ACCOUNT MANAGER', 'I', 1);
INSERT INTO `r_jabatan` VALUES (377, 'VP ASSET & PROCUREMENT', 'I', 1);
INSERT INTO `r_jabatan` VALUES (378, 'MANAGER WORKFORCE STRATEGY & DEVELOPMENT', 'IV', 6);
INSERT INTO `r_jabatan` VALUES (379, 'OFFICER 1 WORKFORCE STRATEGY & DEVELOPMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (380, 'AVP CORPORATE COMMUNICATION & OFFICE SUPPORT', 'III', 4);
INSERT INTO `r_jabatan` VALUES (381, 'MANAGER CORPORATE PERFORMANCE MANAGEMENT', 'IV', 6);
INSERT INTO `r_jabatan` VALUES (382, 'AVP AUDIT MANAGEMENT', 'III', 4);
INSERT INTO `r_jabatan` VALUES (383, 'SENIOR OFFICER RISK MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (384, 'VP TRANSFORMATION', 'II', 1);
INSERT INTO `r_jabatan` VALUES (385, 'SENIOR OFFICER TRANSFORMATION READINESS', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (386, 'AVP ACCOUNTING & BUDGETING', 'III', 4);
INSERT INTO `r_jabatan` VALUES (387, 'AVP TREASURY & TAX', 'III', 4);
INSERT INTO `r_jabatan` VALUES (388, 'VP FINANCE', 'II', 1);
INSERT INTO `r_jabatan` VALUES (389, 'VP HUMAN CAPITAL MANAGEMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (390, 'MANAGER INVENTORY MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (391, 'AVP LOGISTIC', 'III', 1);
INSERT INTO `r_jabatan` VALUES (392, 'MANAGER PROCUREMENT 1', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (393, 'MANAGER OUTBOUND LOGISTIC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (394, 'AVP BILLING & COLLECTION', 'III', 1);
INSERT INTO `r_jabatan` VALUES (395, 'VP PRODUCT DEVELOPMENT & PROJECT MANAGEMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (396, 'SENIOR OFFICER PRODUCT DEVELOPMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (397, 'VP CORPORATE SECRETARY', 'II', 1);
INSERT INTO `r_jabatan` VALUES (398, 'MANAGER REGULATORY MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (399, 'MANAGER LEGAL COMPLIANCE', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (400, 'AVP CORPORATE PERFORMANCE MGT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (401, 'AVP BUSINESS PROCESS & HEALTH SAFETY ENVIRONMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (402, 'AVP HC SOLUTION & SERVICE', 'III', 1);
INSERT INTO `r_jabatan` VALUES (403, 'MANAGER TREASURY', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (404, 'VP ASSET & PROCUREMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (405, 'AVP ASSET', 'III', 1);
INSERT INTO `r_jabatan` VALUES (406, 'MANAGER ASSET MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (407, 'AVP PROCUREMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (408, 'MANAGER LOGISTIC & WAREHOUSE MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (409, 'AVP REVENUE ASSURANCE', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (410, 'VP STRATEGIC BUSINESS DEVELOPMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (411, 'PRINCIPLE EXPERT SATELLITE', 'III', 1);
INSERT INTO `r_jabatan` VALUES (412, 'AVP BUSINESS DEVELOPMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (413, 'AVP CORPORATE STRATEGY', 'III', 1);
INSERT INTO `r_jabatan` VALUES (414, 'SENIOR OFFICER CORPORATE STRATEGY', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (415, 'VP SYSTEM PLANNING & MANAGEMENT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (416, 'AVP CAPACITY PLANNING & MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (417, 'SENIOR OFFICER CAPACITY MANAGEMENT & SERVICE ', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (418, 'AVP SPECTRUM PLANNING & MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (419, 'SENIOR OFFICER FLEET PLANNING & MGT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (420, 'SENIOR OFFICER GROUND INFRASTRUCTURE PLANNING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (421, 'AVP PRODUCT DEVELOPMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (422, 'AVP PROJECT MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (423, 'SENIOR OFFICER PROJECT MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (424, 'VP COMMERCE SEGMENT 1 (TELCO & ENTERPRISE)', 'II', 1);
INSERT INTO `r_jabatan` VALUES (425, 'SEAM COMMERCE SEGMENT 1A (TELCO & ENTERPRISE)', 'II', 1);
INSERT INTO `r_jabatan` VALUES (426, 'SENIOR ACCOUNT MANAGER 1A (TELCO & ENTERPRISE)', 'IV', 5);
INSERT INTO `r_jabatan` VALUES (427, 'GM COMMERCE SEGMENT 1B', 'III', 1);
INSERT INTO `r_jabatan` VALUES (428, 'SENIOR ACCOUNT MANAGER 1B', 'IV', 5);
INSERT INTO `r_jabatan` VALUES (429, 'SENIOR OFFICER SOLUTION & SUPPORT 1B', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (430, 'VP COMMERCE SEGMENT 2 (CONSUMER, MARITIME, OIL & GAS, AVIATION & NATURAL RESOURCES)', 'II', 1);
INSERT INTO `r_jabatan` VALUES (431, 'GM COMMERCE SEGMENT 2A (MARITIME, OIL & GAS, AVIATION & NATURAL RESOURCES)', 'III', 1);
INSERT INTO `r_jabatan` VALUES (432, 'SENIOR ACCOUNT MANAGER 2A (MARITIME, OIL & GAS, AVIATION & NATURAL RESOURCES)', 'IV', 5);
INSERT INTO `r_jabatan` VALUES (433, 'SENIOR OFFICER SOLUTION & SUPPORT 2A (MARITIME OIL & GAS, AVIATION & NATURAL RESOURCES)', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (434, 'SENIOR OFFICER SOLUTION & SUPPORT 2B (CONSUMER)', 'IV', 5);
INSERT INTO `r_jabatan` VALUES (435, 'VP COMMERCE SEGMENT 3 ( SATELLITE TRANSPONDER)', 'II', 1);
INSERT INTO `r_jabatan` VALUES (436, 'GM COMMERCE SEGMENT 3A (SATELLITE TRANSPONDER)', 'III', 1);
INSERT INTO `r_jabatan` VALUES (437, 'SENIOR ACCOUNT MANAGER 3A (SATELLITE TRANSPONDER)', 'IV', 5);
INSERT INTO `r_jabatan` VALUES (438, 'SENIOR OFFICER SOLUTION & SUPPORT 3A (SATELLITE TRANSPONDER)', 'IV', 5);
INSERT INTO `r_jabatan` VALUES (439, 'VP SATELLITE OPERATION', 'II', 1);
INSERT INTO `r_jabatan` VALUES (440, 'GM SATELLITE TRANSPONDER & CARRIER SERVICE CENTER', 'III', 1);
INSERT INTO `r_jabatan` VALUES (441, 'MANAGER TRANSPONDER ASSURANCE', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (442, 'GM SATELLITE DATA ANALYSIS', 'III', 1);
INSERT INTO `r_jabatan` VALUES (443, 'MANAGER SPACECRAFT ANALYST', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (444, 'GM ORBITAL OPERATION', 'III', 1);
INSERT INTO `r_jabatan` VALUES (445, 'MANAGER MISSION EVALUATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (446, 'GM SATELLITE CONTROL OPERATION', 'III', 1);
INSERT INTO `r_jabatan` VALUES (447, 'MANAGER SATELLITE PLANNING', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (448, 'MANAGER SATELLITE EXECUTION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (449, 'GM GROUND CONTROL SYSTEM OPERATION', 'III', 1);
INSERT INTO `r_jabatan` VALUES (450, 'MANAGER RF & BASEBAND', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (451, 'MANAGER COMPUTER & NETWORK', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (452, 'MANAGER ENERGY SYSTEM OPERATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (453, 'GM SATELLITE PERFORMANCE REPORT & SUPPORT MANAGEMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (454, 'MANAGER FINANCE AND SUPPORT MANAGEMENT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (455, 'VP SERVICE DELIVERY', 'II', 1);
INSERT INTO `r_jabatan` VALUES (456, 'GM SERVICE DEPLOYMENT RF', 'III', 1);
INSERT INTO `r_jabatan` VALUES (457, 'MANAGER SD DSCPC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (458, 'SENIOR ENGINEER DSCPC', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (459, 'MANAGER SD MARINE & AVIATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (460, 'MANAGER SD WIRELESS', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (461, 'GM SERVICE DEPLOYMENT VSAT IP', 'III', 1);
INSERT INTO `r_jabatan` VALUES (462, 'MANAGER SD SUPPORT', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (463, 'VP NETWORK OPERATION', 'II', 1);
INSERT INTO `r_jabatan` VALUES (464, 'GM SCPC, DSCPC & RF 1 (OLO & GOV)', 'III', 1);
INSERT INTO `r_jabatan` VALUES (465, 'GM SCPC, DSCPC & RF 2 (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'III', 1);
INSERT INTO `r_jabatan` VALUES (466, 'MANAGER SCPC, DSCPC & RF 2 & GYRO', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (467, 'MANAGER SCPC-RF-2 & RADIO, TERESTERIAL', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (468, 'MANAGER VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (469, 'MANAGER ASSURANCE VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (470, 'MANAGER VSAT-IP (BANKING & CONSUMER)', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (471, 'GM AREA KTI (KAWASAN TIMUR) (MS, TIM, SON, AB, JAP)', 'III', 1);
INSERT INTO `r_jabatan` VALUES (472, 'MANAGER OPERATION REGIONAL FIELD AREA AMBON & SORONG', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (473, 'MANAGER OPERATION REGIONAL FIELD BATAM', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (475, 'MANAGER OPERATION REGIONAL FIELD DENPASAR', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (476, 'GM IT DEVELOPMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (477, 'MANAGER OSS & BSS  PLATFORM OPERATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (478, 'OFFICER 1 SECRETARY', 'V', 1);
INSERT INTO `r_jabatan` VALUES (479, 'OFFICER 3 SECRETARY', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (480, 'OFFICER 2 CORPORATE COMMUNICATION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (481, 'OFFICER 1 REGULATORY MANAGEMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (482, 'OFFICER 1 LEGAL COMPLIANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (483, 'OFFICER 2 LEGAL COMPLIANCE', 'VI ', 1);
INSERT INTO `r_jabatan` VALUES (484, 'OFFICER 1 CORPORATE PERFORMANCE MANAGEMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (485, 'OFFICER 2 INTERNAL AUDIT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (486, 'OFFICER 1 HEALTH SAFETY ENVIRONMENT', 'V ', 1);
INSERT INTO `r_jabatan` VALUES (487, 'OFFICER 2 HC POLICIES & SYSTEM', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (488, 'OFFICER 2 COMPETENCY DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (489, 'OFFICER 1 HC SERVICE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (490, 'OFFICER 1 HC SOLUTION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (491, 'OFFICER 1 BUDGETING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (492, 'OFFICER 1 FINANCE REPORTING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (493, 'OFFICER 1 TREASURY', 'V', 1);
INSERT INTO `r_jabatan` VALUES (494, 'OFFICER 2 TREASURY', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (495, 'OFFICER 1 TAX', 'V', 1);
INSERT INTO `r_jabatan` VALUES (496, 'OFFICER 1 ASSET MANAGEMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (497, 'OFFICER 2 ASSET MANAGEMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (498, 'OFFICER 1 PROCUREMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (499, 'OFFICER 2 PROCUREMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (500, 'OFFICER 1 INBOUND LOGISTIC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (501, 'OFFICER 2 INBOUND LOGISTIC', 'VI ', 1);
INSERT INTO `r_jabatan` VALUES (502, 'OFFICER 1 WAREHOUSE MANAGEMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (503, 'OFFICER 1 OUTBOUND LOGISTIC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (504, 'OFFICER 2 OUTBOUND LOGISTIC', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (505, 'OFFICER 1 BILLING PROCESS', 'V', 1);
INSERT INTO `r_jabatan` VALUES (506, 'OFFICER 2 BILLING PROCESS', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (507, 'OFFICER 1 INVOICING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (508, 'OFFICER 3 INVOICING', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (509, 'OFFICER 1 COLLECTION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (510, 'OFFICER 2 DEBT COLLECTION', 'VI ', 1);
INSERT INTO `r_jabatan` VALUES (511, 'OFFICER 1 REVENUE ASSURANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (512, 'OFFICER 1 CORPORATE STRATEGY', 'V', 1);
INSERT INTO `r_jabatan` VALUES (513, 'OFFICER 2 CAPACITY MANAGEMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (514, 'OFFICER 2 SPECTRUM PLANNING & MGT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (515, 'OFFICER 1 PRODUCT ANALYSIS & TARIFF', 'V', 1);
INSERT INTO `r_jabatan` VALUES (516, 'OFFICER 1 PROJECT PERFORMANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (517, 'ACCOUNT MANAGER 1A (TELCO & ENTERPRISE)', 'V', 5);
INSERT INTO `r_jabatan` VALUES (518, 'ACCOUNT MANAGER 1B', 'V', 5);
INSERT INTO `r_jabatan` VALUES (519, 'JUNIOR ACCOUNT MANAGER 1B', 'VI', 5);
INSERT INTO `r_jabatan` VALUES (520, 'OFFICER 1 SOLUTION & SUPPORT 1B', 'V', 1);
INSERT INTO `r_jabatan` VALUES (521, 'OFFICER 2 SOLUTION & SUPPORT 1B', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (522, 'OFFICER 1 SOLUTION & SUPPORT 2A (MARITIME, OIL & GAS, AVIATION & NATURAL RESOURCES)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (523, 'JUNIOR ACCOUNT MANAGER 2A (MARITIME, OIL & GAAS, AVIATION & NATURAL RESOURCES)', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (524, 'ACCOUNT MANAGER 2B (CONSUMER)', 'V', 5);
INSERT INTO `r_jabatan` VALUES (525, 'OFFICER 1 SOLUTION & SUPPORT 3A (SATELLITE TRANSPONDER)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (526, 'OFFICER 2 SOLUTION & SUPPORT 3A (SATELLITE TRANSPONDER)', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (527, 'ENGINEER TRANSPONDER ASSURANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (528, 'ENGINEER TRANSPONDER MANAGEMENT AND OPTIMIZING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (529, 'ENGINEER SPACECRAFT ANALYST', 'V', 1);
INSERT INTO `r_jabatan` VALUES (530, 'ENGINEER SPACECRAFT RECOVERY', 'V', 1);
INSERT INTO `r_jabatan` VALUES (531, 'OFFICER1 SATELLITE PERFORMANCE MANAGEMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (532, 'ENGINEER DEPLOYMENT SCPC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (533, 'ENGINEER DEPLOYMENT DSCPC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (534, 'TECHNICIAN DSCPC', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (535, 'JUNIOR ENGINEER NEW SERVICE', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (536, 'ENGINEER PROJECT MARINE & AVIATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (537, 'ENGINEER DEPLOYMENT MARINE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (538, 'ENGINEER SD WIRELESS', 'V', 1);
INSERT INTO `r_jabatan` VALUES (539, 'MANAGER OPERATION REGIONAL FIELD MAKASSAR ', 'V', 1);
INSERT INTO `r_jabatan` VALUES (540, 'MANAGER SYSTEM QUALITY ASSURANCE (OLO & GOV)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (541, 'ENGINEER MISSION PLANNING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (542, 'JUNIOR ENGINEER MISSION PLANNING', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (543, 'ENGINEER SATELLITE PLANNING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (544, 'JUNIOR ENGINEER SATELLITE PLANNING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (545, 'ENGINEER SATELLITE EXECUTION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (546, 'JUNIOR ENGINEER SATELLITE EXECUTION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (547, 'ENGINEER SATELLITE EVALUATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (548, 'JUNIOR ENGINEER SATELLITE EVALUATION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (549, 'JUNIOR ENGINEER RF & BASEBAND', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (550, 'JUNIOR ENGINEER ENERGY SYSTEM OPERATION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (551, 'OFFICER2 SATELLITE PERFORMANCE MANAGEMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (552, 'OFFICER1 FINANCE AND SUPPORT MANAGEMENT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (553, 'ENGINEER PROJECT SD SCPC 1', 'V', 1);
INSERT INTO `r_jabatan` VALUES (554, 'ENGINEER DEPLOYMENT SCPC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (555, 'JUNIOR ENGINEER DEPLOYMENT SCPC', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (556, 'ENGINEER DSCPC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (557, 'ENGINEER PROJECT DSCPC', 'V', 1);
INSERT INTO `r_jabatan` VALUES (558, 'ENGINEER SD MANAGE & NEW SERVICE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (559, 'ENGINEER PROJECT NEW SERVICE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (560, 'ENGINEER SD VSAT IP & CONSUMER', 'V', 1);
INSERT INTO `r_jabatan` VALUES (561, 'ENGINEER PROJECT VSAT IP-1', 'V', 1);
INSERT INTO `r_jabatan` VALUES (562, 'JUNIOR ENGINEER PROJECT VSAT IP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (563, 'JUNIOR ENGINEER VSAT CONSUMER', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (564, 'OFFICER1 SUPPORT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (565, 'OFFICER1 SERVICE DELIVERY SUPPORT-1', 'V', 1);
INSERT INTO `r_jabatan` VALUES (566, 'OFFICER1 SERVICE DELIVERY SUPPORT-2', 'V', 1);
INSERT INTO `r_jabatan` VALUES (567, 'OFFICER1 SERVICE DELIVERY SUPPORT-3', 'V', 1);
INSERT INTO `r_jabatan` VALUES (568, 'OFFICER1 SERVICE DELIVERY SUPPORT-4', 'V', 1);
INSERT INTO `r_jabatan` VALUES (569, 'OFFICER 3 SERVICE DELIVERY SUPPORT', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (570, 'ENGINEER SCPC, DSCPC & RF1 (OLO)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (571, 'JUNIOR ENGINEER SCPC, DSCPC & RF1 (OLO)', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (572, 'ENGINEER WORKSHOP & TEST BENCH', 'V', 1);
INSERT INTO `r_jabatan` VALUES (573, 'ENGINEER POWER & ELECTRICAL', 'V', 1);
INSERT INTO `r_jabatan` VALUES (574, 'JUNIOR ENGINEER POWER & ELECTRICAL', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (575, 'OFFICER1 ADMIN WORKSHOP', 'V', 1);
INSERT INTO `r_jabatan` VALUES (576, 'TECHNICIAN POWER AND ELECTRICAL', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (577, 'OFFICER2 ADMIN SPARE', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (578, 'ENGINEER SCPC, DSCPC & RF 1 (GOV)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (579, 'JUNIOR ENGINEER SCPC, DSCPC & RF 1 (GOV)', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (580, 'ENGINEER ANALYST ASSURANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (581, 'ENGINEER ANALYST ASSURANCE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (582, 'ENGINEER SCPC, DSCPC & RF 2 & GYRO', 'V', 1);
INSERT INTO `r_jabatan` VALUES (583, 'JUNIOR ENGINEER SCPC, DSCPC & RF 2 & GYRO', 'V', 1);
INSERT INTO `r_jabatan` VALUES (584, 'TECHNICIAN SCPC, DSCPC & RF 2 & GYRO', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (585, 'ENGINEER- SCPC/RF-2 & RADIO, TERESTERIAL', 'V', 1);
INSERT INTO `r_jabatan` VALUES (586, 'JUNIOR ENGINEER SCPC/RF-2 & RADIO, TERESTERIAL', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (587, 'ENGINEER HUB VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (588, 'ENGINEER REMOTE VSAT IP (MARITIM, PERKEBUNAN,PERTAMBANGAN)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (589, 'OFFICER3 HELPDESK VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (590, 'TECHNICIAN REMOTE VSAT IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (591, 'ENGINEER VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (592, 'TECHNICIAN VSAT-IP (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (593, 'OFFICER3 SUPPORT QUALITY ASSURANCE (MARITIM, PERKEBUNAN, PERTAMBANGAN)', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (594, 'ENGINEER VSAT-IP (BANKING & CONSUMER)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (595, 'ENGINEER PROVISIONING 1 (BANKING & CONSUMER)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (596, 'OFFICER1 HELPDESK VSAT-IP (BANKING & CONSUMER)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (597, 'OFFICER1 SUPPORT OPERATION & ASSURANCE VSAT-IP (BANKING & CONSUMER)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (598, 'OFFICER1 CUSTOMER RELATION (BANKING & CONSUMER)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (599, 'OFFICER1 ANALYST ASSURANCE (BANKING & CONSUMER)', 'V', 1);
INSERT INTO `r_jabatan` VALUES (600, 'OFFICER1 ADMINISTRASI SUPPORT', 'V', 1);
INSERT INTO `r_jabatan` VALUES (601, 'OFFICER1 ADMIN SUPPORT OPERATION', 'V', 1);
INSERT INTO `r_jabatan` VALUES (602, 'ENGINEER FIELD OPERATION MAKASSAR ', 'V', 1);
INSERT INTO `r_jabatan` VALUES (603, 'TECHNICIAN FIELD OPERATION MAKASSAR ', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (604, 'JUNIOR ENGINEER FIELD OPERATION SORONG', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (605, 'ENGINEER OPERATION REGIONAL FIELD AREA TIMIKA', 'V', 1);
INSERT INTO `r_jabatan` VALUES (606, 'ENGINEER OPERATION REGIONAL FIELD AREA JAYAPURA', 'V', 1);
INSERT INTO `r_jabatan` VALUES (607, 'JUNIOR ENGINEER FIELD OPERATION NABIRE', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (608, 'TECHNICIAN FIELD OPERATION JAYAPURA', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (609, 'ENGINEER FIELD OPERATION BATAM', 'V', 1);
INSERT INTO `r_jabatan` VALUES (610, 'JUNIOR ENGINEER FIELD OPERATION BATAM', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (611, 'ENGINEER FIELD OPERATION MEDAN', 'V', 1);
INSERT INTO `r_jabatan` VALUES (612, 'JUNIOR ENGINEER FIELD OPERATION MEDAN', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (613, 'ENGINEER FIELD OPERATION SURABAYA ', 'V', 1);
INSERT INTO `r_jabatan` VALUES (614, 'JUNIOR ENGINEER FIELD OPERATION SURABAYA ', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (615, 'TECHNICIAN FIELD OPERATION SURABAYA ', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (616, 'JUNIOR ENGINEER FIEL OPERATION BALIKPAPAN', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (617, 'ENGINEER IT PLATFORM ARCHITECTURE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (618, 'ENGINEER DATA & INFORMATION ARCHITECTURE', 'V', 1);
INSERT INTO `r_jabatan` VALUES (619, 'JUNIOR ENGINEER OSS & BSS FULFILLMENT DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (620, 'JUNIOR ENGINEER NETWORK & SECURITY DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (621, 'JUNIOR ENGINEER NETWORK & SECURITY DEVELOPMENT', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (622, 'JUNIOR ENGINEER IT OPERATION', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (623, 'ENGINEER OPERATION NETWORK & DATACOMM', 'V', 1);
INSERT INTO `r_jabatan` VALUES (624, 'ENGINEER NETWOK BACKHAULING', 'V', 1);
INSERT INTO `r_jabatan` VALUES (625, 'JUNIOR ENGINEER IT & INTERNET', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (626, 'SENIOR PRINCIPAL EXPERT', 'II', 1);
INSERT INTO `r_jabatan` VALUES (627, 'PRINCIPLE EXPERT SATELLITE', 'III', 1);
INSERT INTO `r_jabatan` VALUES (628, 'AVP TRANSFORMATION READINESS', 'III', 1);
INSERT INTO `r_jabatan` VALUES (629, 'AVP PROCUREMENT', 'III', 1);
INSERT INTO `r_jabatan` VALUES (630, 'OFFICER 2 STRATEGIC PARTNERSHIP', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (631, 'MARKETING SUPPORT VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (632, 'ACCOUNT MANAGER VII', 'VII', 3);
INSERT INTO `r_jabatan` VALUES (633, 'ADMIN SUPPORT FIELD OPERATION VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (634, 'ADMIN TEKNIS M2M UNIT SCPC & RF VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (635, 'ADMINISTRASI LOGISTIK VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (636, 'ENGINEER VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (637, 'ENGINEER ON SITE PEGADAIAN VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (638, 'ENGINEER ON SITE VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (639, 'FIELD OPERATION ENGINEER VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (640, 'FIELD OPERATION TECHNICIAN SORONG VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (641, 'FREIGHT FORWARDING SUPPORT VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (642, 'HELPDESK AND TECHNICAL SUPPORT ON SITE VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (643, 'MANAGER SCPC,DSCPC&RF 1 UNIT NETWORK OPERATION', 'IV', 1);
INSERT INTO `r_jabatan` VALUES (644, 'NOC BRI VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (645, 'OFFICER LOGISTIK VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (646, 'PELAKSANA ADMINISTRASI VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (647, 'PELAKSANA LOGISTIK', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (648, 'SALES MARKETING VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (649, 'STAFF LOGISTIC VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (650, 'TAX OFFICER VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (651, 'TECHNICAL SUPPORT VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (652, 'TECHNICAL SUPPORT AREA BOGOR VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (653, 'TECHNICAL SUPPORT AREA JABODETABEK & JABAR VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (654, 'TECHNICAL SUPPORT NOC HUB RF DAN IDR IP VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (655, 'TECHNICAL SUPPORT NOC-RF VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (656, 'TEKNISI VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (657, 'TEKNISI STANDBY CIBINONG VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (658, 'TEKNISI STANDNY NIAS VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (659, 'TEKNISI STM1-MAKASSAR  VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (660, 'TS EOS BRI VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (661, 'VSAT ENGINEER JABOTABEK VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (662, 'ADMIN BUSINESS SOLUTION VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (663, ' JUNIOR ACCOUNT MANAGER 1B VII', 'VII', 1);
INSERT INTO `r_jabatan` VALUES (664, 'OFFICER 2 RISK MANAGEMENT', 'VI ', 1);
INSERT INTO `r_jabatan` VALUES (665, 'PJ MANAGER IT PLANNING & ARCHITECTURE', 'V ', 1);
INSERT INTO `r_jabatan` VALUES (666, 'PJ SENIOR ENGINEER VSAT-IP (BANKING & CONSUMER)', 'V ', 1);
INSERT INTO `r_jabatan` VALUES (667, 'PJ SENIOR ACCOUNT MANAGER 1B', 'V ', 1);
INSERT INTO `r_jabatan` VALUES (668, 'PJ MANAGER SD VSAT IP & CONSUMER', 'V ', 1);
INSERT INTO `r_jabatan` VALUES (669, 'PJ MANAGER SD MANAGE & NEW SERVICE', 'V ', 1);
INSERT INTO `r_jabatan` VALUES (670, 'PJ MANAGER SD SCPC 1', 'V ', 1);
INSERT INTO `r_jabatan` VALUES (671, 'JUNIOR ENGINEER FIELD OPERATION BALIKPAPAN', 'VI', 1);
INSERT INTO `r_jabatan` VALUES (672, 'NOC BAKTI HTS', 'VII', 1);

-- ----------------------------
-- Table structure for r_jenis_usulan
-- ----------------------------
DROP TABLE IF EXISTS `r_jenis_usulan`;
CREATE TABLE `r_jenis_usulan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_jenis_usulan
-- ----------------------------
INSERT INTO `r_jenis_usulan` VALUES (1, 'prospect');
INSERT INTO `r_jenis_usulan` VALUES (2, 'cuti');
INSERT INTO `r_jenis_usulan` VALUES (3, 'SPPD');
INSERT INTO `r_jenis_usulan` VALUES (4, 'Work Order');
INSERT INTO `r_jenis_usulan` VALUES (5, 'Form Order');
INSERT INTO `r_jenis_usulan` VALUES (6, 'Perbaikan Presensi');
INSERT INTO `r_jenis_usulan` VALUES (7, 'Request Invoice');
INSERT INTO `r_jenis_usulan` VALUES (8, 'Provisioning');
INSERT INTO `r_jenis_usulan` VALUES (9, 'Service order');
INSERT INTO `r_jenis_usulan` VALUES (10, 'SPB');
INSERT INTO `r_jenis_usulan` VALUES (11, 'Log');
INSERT INTO `r_jenis_usulan` VALUES (12, 'Pengajuan Panjar');
INSERT INTO `r_jenis_usulan` VALUES (13, 'Pembayaran Panjar');
INSERT INTO `r_jenis_usulan` VALUES (14, 'BAST IT');
INSERT INTO `r_jenis_usulan` VALUES (15, 'Vicon');
INSERT INTO `r_jenis_usulan` VALUES (16, 'Form Permohonan Review');
INSERT INTO `r_jenis_usulan` VALUES (17, 'BoQ');
INSERT INTO `r_jenis_usulan` VALUES (18, 'SPPH');
INSERT INTO `r_jenis_usulan` VALUES (19, 'SPH');
INSERT INTO `r_jenis_usulan` VALUES (20, 'BAK');
INSERT INTO `r_jenis_usulan` VALUES (21, 'Lembar Pengantar Sirkuler');
INSERT INTO `r_jenis_usulan` VALUES (22, 'Pengecekan Asset');
INSERT INTO `r_jenis_usulan` VALUES (23, 'Log3');
INSERT INTO `r_jenis_usulan` VALUES (24, 'Evaluasi Karyawan');
INSERT INTO `r_jenis_usulan` VALUES (25, 'Room Meeting');
INSERT INTO `r_jenis_usulan` VALUES (26, 'BAST Pengembalian IT');
INSERT INTO `r_jenis_usulan` VALUES (27, 'Pencairan IT');
INSERT INTO `r_jenis_usulan` VALUES (28, 'Usulan TNA');

-- ----------------------------
-- Table structure for r_tahapan_usulan
-- ----------------------------
DROP TABLE IF EXISTS `r_tahapan_usulan`;
CREATE TABLE `r_tahapan_usulan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `urutan` int NULL DEFAULT NULL,
  `is_aktif` bit(1) NULL DEFAULT NULL,
  `r_jenis_usulan_id` int NOT NULL,
  `min_time` int NULL DEFAULT NULL,
  `max_time` int NULL DEFAULT NULL,
  `is_verif_sd` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idx_r_tahapan_usulan_urutan`(`urutan` ASC) USING BTREE,
  INDEX `r_jenis_usulan_id`(`r_jenis_usulan_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 177 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tahapan_usulan
-- ----------------------------
INSERT INTO `r_tahapan_usulan` VALUES (1, 'draft', 1, b'1', 1, 2, 3, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (2, 'P n L', 2, b'1', 1, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (3, 'Persetujuan', 3, b'1', 1, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (4, 'On Progres', 4, b'1', 1, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (5, 'Hasil', 5, b'1', 1, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (6, 'Usulan', 1, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (7, 'Verifikasi Atasan', 2, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (8, 'Verifikasi HCM', 4, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (9, 'Selesai', 5, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (10, 'Usulan SPPD', 1, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (11, 'Pemeriksa', 2, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (12, 'Persetujuan', 5, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (13, 'Fiatur', 6, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (14, 'Selesai', 8, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (15, 'Usulan Workorder Sales & Marketing', 1, b'1', 4, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (16, 'Verifikasi workorder Manager SM', 2, b'1', 4, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (17, 'Verifikasi Workorder GM SM', 3, b'1', 4, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (18, 'Usulan Provisioning', 1, b'1', 8, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (19, 'Verifikasi provisioning Manager SD', 2, b'1', 8, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (20, 'Verifikasi provisioning NOC', 3, b'1', 8, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (21, 'Usulan form order', 1, b'1', 5, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (22, 'Verifikasi Form Order Manager SD', 2, b'1', 5, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (23, 'Proses Pengerjaan', 5, b'1', 5, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (24, 'Update Progress', 6, b'1', 5, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (25, 'Selesai', 7, b'1', 5, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (26, 'Verifikasi Officer 1 Solution', 3, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (28, 'Verifikasi HCM', 3, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (29, 'Usulan Presensi', 1, b'1', 6, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (30, 'Verifikasi Atasan', 2, b'1', 6, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (31, 'Verifikasi HCM', 3, b'1', 6, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (32, 'Selesai', 4, b'1', 6, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (33, 'Usulan request Invoice', 1, b'1', 7, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (34, 'Persetujuan Manager Commerce', 2, b'1', 7, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (35, 'Verifikasi GM Sales', 3, b'1', 7, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (36, 'Verifikasi Billing', 4, b'1', 7, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (37, 'Proses Pengerjaan', 4, b'1', 8, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (38, 'Update Progres Pengerjaan', 5, b'1', 8, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (39, 'Selesai', 6, b'1', 8, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (40, 'Verifikasi FO Logistik & Procurement', 3, b'1', 5, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (41, 'Verifikasi Form Order AVP', 4, b'1', 5, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (42, 'Proses Pengerjaan Work Order', 4, b'1', 4, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (43, 'Work Order Selesai Dikerjakan', 5, b'1', 4, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (44, 'Selesai', 5, b'1', 7, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (45, 'Perbaikan Request Invoice', 0, b'1', 7, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (46, 'Draft', 0, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (47, 'Cuti ditolak', 6, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (48, 'Perbaikan Usulan SPPD', 0, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (49, 'Verifikasi HCM', 4, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (50, 'Perbaikan', 0, b'1', 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (51, 'Usulan Service Order', 1, b'1', 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (52, 'Verifikasi Manager', 2, b'1', 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (53, 'Verifikasi Admin Unit', 3, b'1', 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (54, 'Verifikasi GM/VP', 4, b'1', 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (55, 'Proses Pengerjaan', 5, b'1', 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (56, 'Selesai Teknisi', 6, b'1', 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (57, 'Perbaikan SPB', 0, b'1', 10, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (58, 'Mengusulkan SPB', 1, b'1', 10, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (59, 'Verifikasi Akun Anggaran', 2, b'1', 10, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (60, 'Verifikasi Admin Finance', 3, b'1', 10, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (61, 'Verifikasi AVP', 4, b'1', 10, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (62, 'Fiatur', 5, b'1', 10, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (63, 'Selesai', 6, b'1', 10, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (64, 'Extend Day', 7, NULL, 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (65, 'Selesai', 8, NULL, 9, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (66, 'Usulan Panjar', 1, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (67, 'Pemeriksa Admin Unit', 2, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (68, 'Pemeriksa Pengambil Panjar', 3, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (69, 'Persetujuan', 4, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (70, 'Pemeriksa Budget', 5, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (71, 'Pemeriksa Treasury & Tax 1', 6, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (72, 'Pemeriksa Treasury & Tax 2', 7, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (73, 'Fiatur', 8, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (81, 'Transfer', 9, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (82, 'Selesai', 10, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (83, 'Konfirmasi Perbaikan', 0, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (84, 'Pembatalan', 11, b'1', 12, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (85, 'Pembayaran', 7, b'1', 3, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (86, 'Pembatalan Cuti', 7, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (87, 'Pembatalan Cuti ditolak', 8, b'1', 2, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (88, 'Request Konfirmasi', 1, b'1', 14, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (89, 'Verifikasi Manager', 3, b'1', 14, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (90, 'Verifikasi GM', 4, b'1', 14, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (91, 'Verifikasi BAST User', 6, b'1', 14, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (92, 'Selesai', 7, b'1', 14, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (93, 'Pengiriman Barang', 5, b'1', 14, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (94, 'Konfirmasi User', 2, b'1', 14, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (95, 'Request Konfirmasi', 1, b'1', 15, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (96, 'Konfirmasi User', 2, b'1', 15, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (97, 'Pembuatan Vicon', 3, b'1', 15, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (98, 'Selesai', 4, b'1', 15, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (99, 'Cancel', 5, b'1', 15, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (100, 'Draft', 1, b'1', 16, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (101, 'Verifikasi Unit Legal (Upload Draft Dokumen)', 2, b'1', 16, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (102, 'Verifikasi User', 3, b'1', 16, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (103, 'Verifikasi Unit Legal (LPS Done)', 4, b'1', 16, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (104, 'Sirkuler Dokumen', 5, b'1', 16, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (105, 'Usulan BoQ', 1, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (106, 'Verifikasi Pembuat', 2, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (107, 'Verifikasi Pemeriksa 1', 5, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (108, 'Verifikasi Budget 1', 9, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (109, 'Selesai', 6, b'1', 16, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (110, 'Usulan SPPH', 1, b'1', 18, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (111, 'Verifikasi AVP Procurement', 2, b'1', 18, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (113, 'Selesai', 3, b'1', 18, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (114, 'Usulan SPH', 1, b'1', 19, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (115, 'Verifikasi Procurement', 2, b'1', 19, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (116, 'Selesai', 3, b'1', 19, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (117, 'Usulan BAK', 1, b'1', 20, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (118, 'Upload BAK Signed', 3, b'1', 20, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (119, 'Selesai', 4, b'1', 20, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (120, 'Draft', 1, b'1', 21, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (121, 'Verifikasi Pemeriksa', 2, b'1', 21, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (122, 'Verifikasi Penyetuju', 3, b'1', 21, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (123, 'Selesai', 4, b'1', 21, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (124, 'Verifikasi AVP Procurement', 2, b'1', 20, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (125, 'Usulan', 1, b'1', 22, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (126, 'Pengecekan', 2, b'1', 22, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (127, 'Selesai', 3, b'1', 22, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (128, 'Usulan', 1, b'1', 23, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (129, 'Verifikasi Pengaju', 2, b'1', 23, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (130, 'Verifikasi Penyetuju', 3, b'1', 23, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (131, 'Pengiriman', 4, b'1', 23, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (132, 'Penerimaan', 5, b'1', 23, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (133, 'Selesai', 6, b'1', 23, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (134, 'Batal', 0, b'1', 23, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (135, 'Penilaian', 1, b'1', 24, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (136, 'Verifikasi', 2, b'1', 24, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (137, 'Reset', 0, b'1', 24, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (139, 'Verifikasi Budget 2', 10, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (140, 'Verifikasi Finance 1', 12, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (141, 'Verifikasi Penyetuju 1', 11, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (142, 'Verifikasi Penyetuju 2', 13, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (143, 'Verifikasi Finance 2', 14, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (144, 'Progress Pengadaan', 16, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (145, 'Selesai', 17, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (146, 'Verifikasi Asset', 7, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (147, 'Verifikasi Penyetuju 3', 15, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (148, 'Usulan', 1, b'1', 25, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (149, 'Konfirmasi', 2, b'1', 25, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (150, 'Selesai', 3, b'1', 25, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (151, 'Cancel', 4, b'1', 25, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (152, 'Verifikasi I', 3, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (153, 'Verifikasi II', 4, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (154, 'Verifikasi Procurement', 8, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (155, 'Verifikasi Pemeriksa 2', 6, b'1', 17, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (156, 'Request Konfirmasi', 1, b'1', 26, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (157, 'Konfirmasi User', 2, b'1', 26, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (158, 'Verifikasi Manager', 4, b'1', 26, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (159, 'Verifikasi GM', 5, b'1', 26, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (160, 'Verifikasi Pengembalian Barang', 3, b'1', 26, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (161, 'Selesai', 7, b'1', 26, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (163, 'Usulan', 1, b'1', 27, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (164, 'Verifikasi 1', 2, b'1', 27, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (165, 'Verifikasi 2', 3, b'1', 27, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (166, 'Verifikasi 3', 4, b'1', 27, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (167, 'Selesai', 5, b'1', 27, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (168, 'Verifikasi BAST Pengembalian', 6, b'1', 26, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (169, 'Verifikasi Manager SD', 3, b'1', 12, NULL, NULL, 1);
INSERT INTO `r_tahapan_usulan` VALUES (170, 'Draft', 1, b'1', 28, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (171, 'Menunggu Verifikasi Manager Lini Unit', 2, b'1', 28, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (172, 'Menunggu Verifikasi Admin HCPD', 3, b'1', 28, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (173, 'Menunggu Verifikasi Manager HCPD', 4, b'1', 28, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (174, 'Menunggu Verifikasi AVP HCPD', 5, b'1', 28, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (175, 'Menunggu Verifikasi VP HCM', 6, b'1', 28, NULL, NULL, NULL);
INSERT INTO `r_tahapan_usulan` VALUES (176, 'Selesai', 7, b'1', 28, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_jenis_pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_jenis_pelatihan`;
CREATE TABLE `r_tna_jenis_pelatihan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_jenis_pelatihan
-- ----------------------------
INSERT INTO `r_tna_jenis_pelatihan` VALUES (1, 'Human Resources', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_jenis_pelatihan` VALUES (2, 'General & Support', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_jenis_pelatihan` VALUES (3, 'IT', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_jenis_pelatihan` VALUES (4, 'Downstream', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_jenis_pelatihan` VALUES (5, 'Business Support', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_jenis_pelatihan` VALUES (6, 'Upstream', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_jenis_pelatihan` VALUES (7, 'Satellite-specialized support', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_jenis_pelatihan` VALUES (8, 'Safety', '1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_job_family
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_job_family`;
CREATE TABLE `r_tna_job_family`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code_numeric` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `objid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `is_import` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '0',
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_job_family
-- ----------------------------
INSERT INTO `r_tna_job_family` VALUES (1, 'JFA-DIG', '1.', '1. DIGITAL TECHNOLOGY', '80114597', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_family` VALUES (2, 'JFA-CUS', '2.', '2. CUSTOMER CENTRICITY', '80114598', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_family` VALUES (3, 'JFA-COR', '3.', '3. CORPORATE ENABLERS', '80114599', '1', '1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_job_family_temp
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_job_family_temp`;
CREATE TABLE `r_tna_job_family_temp`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `objid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_job_family_temp
-- ----------------------------
INSERT INTO `r_tna_job_family_temp` VALUES (1, 'JFA-DIG', '1. DIGITAL TECHNOLOGY', '80114597', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_family_temp` VALUES (2, 'JFA-CUS', '2. CUSTOMER CENTRICITY', '80114598', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_family_temp` VALUES (3, 'JFA-COR', '3. CORPORATE ENABLERS', '80114599', '1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_job_function
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_job_function`;
CREATE TABLE `r_tna_job_function`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_job_family_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code_numeric` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `objid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `is_import` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '0' COMMENT '\'0\'=No; 1=Yes',
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1' COMMENT '\'0\' inactive; \'1\' active',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 82 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_job_function
-- ----------------------------
INSERT INTO `r_tna_job_function` VALUES (11, 'JFA-COR', 'JFU-SCM', '3.5', '3.5 SUPPLY CHAIN MANAGEMENT', '80114685', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (12, 'JFA-COR', 'JFU-GAS', '3.6', '3.6 GENERAL AFFAIRS & SUPPORT', '80114686', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (13, 'JFA-DIG', 'JFU-DIC', '1.1', '1.1 DIGITAL CONNECTIVITY', '80114675', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (14, 'JFA-DIG', 'JFU-DPI', '1.2', '1.2 DIGITAL PLATFORM AND IT', '80114676', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (15, 'JFA-DIG', 'JFU-DIS', '1.3', '1.3 DIGITAL SERVICE', '80114677', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (16, 'JFA-CUS', 'JFU-SLS', '2.1', '2.1 SALES', '80114678', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (17, 'JFA-CUS', 'JFU-MKT', '2.2', '2.2 MARKETING', '80114679', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (18, 'JFA-CUS', 'JFU-CSE', '2.3', '2.3 CUSTOMER ENGAGEMENT', '80114680', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (19, 'JFA-COR', 'JFU-BSD', '3.1', '3.1 BUSINESS STRATEGY & DEVELOPMENT', '80114681', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (20, 'JFA-COR', 'JFU-CRC', '3.2', '3.2 CORP AFFAIRS,REGULATION & COMPLIANCE', '80114682', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (21, 'JFA-COR', 'JFU-FIN', '3.3', '3.3 FINANCE', '80114683', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (22, 'JFA-COR', 'JFU-HCA', '3.4', '3.4 HUMAN CAPITAL', '80114684', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (23, 'JFA-COR', 'JFU-SCM', '3.5', '3.5 SUPPLY CHAIN MANAGEMENT', '80114685', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (24, 'JFA-COR', 'JFU-GAS', '3.6', '3.6 GENERAL AFFAIRS & SUPPORT', '80114686', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (25, '80114850', 'JRO-ANO', '1.1.1', '1.1.1 ACCESS NETWORK O&M', '1.1.1 ACCE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (26, '80114764', 'JRO-TCN', '1.1.2', '1.1.2 TRANSPORT AND CORE NETWORK O&M', '1.1.2 TRAN', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (27, '80114765', 'JRO-SBV', '1.1.3', '1.1.3 SERV BROADBAND&VIDEO PLATFORM O&M', '1.1.3 SERV', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (28, '80114766', 'JRO-ADP', '1.1.4', '1.1.4 ACCESS NETWORK DESIGN & PLANNING', '1.1.4 ACCE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (29, '80114767', 'JRO-TDP', '1.1.5', '1.1.5 TRANSPORT&CORE NETWORK DESIGN&PLAN', '1.1.5 TRAN', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (30, '80114768', 'JRO-SDP', '1.1.6', '1.1.6 SERV BROAD&VIDEO PLATF DESIGN&PLAN', '1.1.6 SERV', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (31, '80114769', 'JRO-TLD', '1.1.7', '1.1.7 TELECOMMUNICATION DEVELOPMENT', '1.1.7 TELE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (32, '80114770', 'JRO-TSP', '1.1.8', '1.1.8 TELECOMMUNICATION STRATEGY&POLICY', '1.1.8 TELE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (33, '80114771', 'JRO-DSI', '1.2.1', '1.2.1 DATA SCIENCE', '1.2.1 DATA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (34, '80114772', 'JRO-MAI', '1.2.2', '1.2.2 MACHINE LEARNING AND AI', '1.2.2 MACH', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (35, '80114773', 'JRO-IOT', '1.2.3', '1.2.3 SENSORS & INTERNET OF THINGS (IOT)', '1.2.3 SENS', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (36, '80114774', 'JRO-BCR', '1.2.4', '1.2.4 BLOCKCHAIN AND CRYPTOGRAPHY', '1.2.4 BLOC', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (37, '80114875', 'JRO-IFS', '1.2.5', '1.2.5 INFORMATION AND SECURITY', '1.2.5 INFO', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (38, '80114876', 'JRO-DCT', '1.2.6', '1.2.6 DATA CENTER', '1.2.6 DATA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (39, '80114877', 'JRO-SOE', '1.2.7', '1.2.7 SOFTWARE ENGINEERING', '1.2.7 SOFT', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (40, '80114878', 'JRO-SYE', '1.2.8', '1.2.8 SYSTEM ENGINEERING', '1.2.8 SYST', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (41, '80114879', 'JRO-SAE', '1.2.9', '1.2.9 SALES ENGINEERING', '1.2.9 SALE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (42, '80114880', 'JRO-IDE', '1.2.10', '1.2.10 INFRASTRUCTURE DESIGN&ENGINEERING', '1.2.10 INF', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (43, '80114881', 'JRO-DVD', '1.3.1', '1.3.1 DEVELOPMENT & DESIGN', '1.3.1 DEVE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (44, '80114882', 'JRO-PMG', '1.3.2', '1.3.2 PRODUCT MANAGEMENT', '1.3.2 PROD', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (45, '80114883', 'JRO-AMG', '2.1.1', '2.1.1 ACCOUNT MANAGEMENT', '2.1.1 ACCO', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (46, '80114884', 'JRO-SOM', '2.1.2', '2.1.2 SALES OPERATION & MANAGEMENT', '2.1.2 SALE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (47, '80114885', 'JRO-MED', '2.2.1', '2.2.1 MEDIA', '2.2.1 MEDI', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (48, '80114886', 'JRO-CCM', '2.2.2', '2.2.2 CORPORATE COMMUNICATIONS', '2.2.2 CORP', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (49, '80114887', 'JRO-CMD', '2.2.3', '2.2.3 COMMUNICATION DESIGN', '2.2.3 COMM', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (50, '80114888', 'JRO-MAR', '2.2.4', '2.2.4 MARKETING', '2.2.4 MARK', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (51, '80114889', 'JRO-CRM', '2.3.1', '2.3.1 CUSTOMER RELATIONSHIP MANAGEMENT', '2.3.1 CUST', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (52, '80114890', 'JRO-CSO', '2.3.2', '2.3.2 CUSTOMER SERVICE OPERATIONS', '2.3.2 CUST', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (53, '80114891', 'JRO-CMG', '2.3.3', '2.3.3 COMMUNITY MANAGEMENT', '2.3.3 COMM', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (54, '80114892', 'JRO-DSB', '3.1.1', '3.1.1 DIG STRATEGY & BUSS TRANSFORMATION', '3.1.1 DIGI', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (55, '80114893', 'JRO-PPM', '3.1.2', '3.1.2 PROGRAM & PROJECT MANAGEMENT', '3.1.2 PROG', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (56, '80114894', 'JRO-BAI', '3.1.3', '3.1.3 BUSINESS ANALYSIS AND INTELLIGENCE', '3.1.3 BUSI', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (57, '80114895', 'JRO-LCO', '3.2.1', '3.2.1 LEGAL & COMPLIANCE', '3.2.1 LEGA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (58, '80114896', 'JRO-RMG', '3.2.2', '3.2.2 RISK MANAGEMENT', '3.2.2 RISK', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (59, '80114897', 'JRO-REG', '3.2.3', '3.2.3 REGULATORY MANAGEMENT', '3.2.3 REGU', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (60, '80114898', 'JRO-IAU', '3.2.4', '3.2.4 INTERNAL AUDIT', '3.2.4 INTE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (61, '80114899', 'JRO-INR', '3.2.5', '3.2.5 INVESTOR RELATION', '3.2.5 INVE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (62, '80114900', 'JRO-ACO', '3.3.1', '3.3.1 ACCOUNTING', '3.3.1 ACCO', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (63, '80114901', 'JRO-FIN', '3.3.2', '3.3.2 FINANCIAL CONTROL', '3.3.2 FINA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (64, '80114902', 'JRO-TAX', '3.3.3', '3.3.3 TAXATION', '3.3.3 TAXA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (65, '80114903', 'JRO-TRE', '3.3.4', '3.3.4 TREASURY', '3.3.4 TREA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (66, '80114904', 'JRO-APR', '3.3.5', '3.3.5 ACCOUNTS PAYABLE/ACCOUNTS RECEIV', '3.3.5 ACCO', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (67, '80114905', 'JRO-CRA', '3.3.6', '3.3.6 COLLECTIONS & REVENUE ASSURANCE', '3.3.6 COLL', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (68, '80114906', 'JRO-CRF', '3.3.7', '3.3.7 CORPORATE FINANCE', '3.3.7 CORP', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (69, '80114907', 'JRO-ACQ', '3.4.1', '3.4.1 TALENT ACQUISITION', '3.4.1 TALE', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (70, '80114908', 'JRO-LND', '3.4.2', '3.4.2 LEARNING AND DEVELOPMENT', '3.4.2 LEAR', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (71, '80114909', 'JRO-EIR', '3.4.3', '3.4.3 EMPLOYEE AND INDUSTRIAL RELATIONS', '3.4.3 EMPL', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (72, '80114910', 'JRO-HBP', '3.4.4', '3.4.4 HC BUSINESS PARTNER', '3.4.4 HC B', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (73, '80114911', 'JRO-REW', '3.4.5', '3.4.5 TOTAL REWARDS', '3.4.5 TOTA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (74, '80114912', 'JRO-ODV', '3.4.6', '3.4.6 ORGANIZATION DEVELOPMENT', '3.4.6 ORGA', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (75, '80114913', 'JRO-EDU', '3.4.7', '3.4.7 EDUCATION', '3.4.7 EDUC', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (76, '80114914', 'JRO-PLO', '3.5.1', '3.5.1 PROCUREMENT & LOGISTICS', '3.5.1 PROC', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (77, '80114915', 'JRO-SUP', '3.5.2', '3.5.2 SUPPLY PLANNING & OPERATIONS', '3.5.2 SUPP', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (78, '80114916', 'JRO-ADM', '3.6.1', '3.6.1 ADMINISTRATION & SECRETARIAL', '3.6.1 ADMI', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (79, '80114917', 'JRO-FMA', '3.6.2', '3.6.2 FACILITIES MGMT & ASSET SECURITY', '3.6.2 FACI', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (80, '80114918', 'JRO-PRP', '3.6.3', '3.6.3 PROPERTY', '3.6.3 PROP', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_function` VALUES (81, '80114919', 'JRO-HEA', '3.6.4', '3.6.4 HEALTH', '3.6.4 HEAL', '1', '1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_job_function_temp
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_job_function_temp`;
CREATE TABLE `r_tna_job_function_temp`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_job_family_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `objid` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1' COMMENT '\'0\' inactive; \'1\' active',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_job_function_temp
-- ----------------------------

-- ----------------------------
-- Table structure for r_tna_job_role
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_job_role`;
CREATE TABLE `r_tna_job_role`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_job_function_code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `r_tna_job_function_code_numeric` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code_numeric` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `long_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `objid` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `is_import` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '0',
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_job_role
-- ----------------------------
INSERT INTO `r_tna_job_role` VALUES (1, 'JFU-DIC', '1.1', '1.1.1', 'JRO-ANO', '1.1.1 ACCESS NETWORK O&M', '1.1.1 ACCESS NETWORK O&M', '80114850', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (2, 'JFU-DIC', '1.1', '1.1.2', 'JRO-TCN', '1.1.2 TRANSPORT AND CORE NETWORK O&M', '1.1.2 TRANSPORT AND CORE NETWORK O&M', '80114764', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (3, 'JFU-DIC', '1.1', '1.1.3', 'JRO-SBV', '1.1.3 SERV BROADBAND&VIDEO PLATFORM O&M', '1.1.3 SERVICE BROADBAND AND VIDEO PLATFORM O&M', '80114765', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (4, 'JFU-DIC', '1.1', '1.1.4', 'JRO-ADP', '1.1.4 ACCESS NETWORK DESIGN & PLANNING', '1.1.4 ACCESS NETWORK DESIGN & PLANNING', '80114766', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (5, 'JFU-DIC', '1.1', '1.1.5', 'JRO-TDP', '1.1.5 TRANSPORT&CORE NETWORK DESIGN&PLAN', '1.1.5 TRANSPORT AND CORE NETWORK DESIGN AND PLANNING', '80114767', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (6, 'JFU-DIC', '1.1', '1.1.6', 'JRO-SDP', '1.1.6 SERV BROAD&VIDEO PLATF DESIGN&PLAN', '1.1.6 SERVICE BROADBAND & VIDEO PLATFORM DESIGN & PLANNING', '80114768', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (7, 'JFU-DIC', '1.1', '1.1.7', 'JRO-TLD', '1.1.7 TELECOMMUNICATION DEVELOPMENT', '1.1.7 TELECOMMUNICATION DEVELOPMENT', '80114769', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (8, 'JFU-DIC', '1.1', '1.1.8', 'JRO-TSP', '1.1.8 TELECOMMUNICATION STRATEGY&POLICY', '1.1.8 TELECOMMUNICATION STRATEGY & POLICY', '80114770', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (9, 'JFU-DPI', '1.2', '1.2.1', 'JRO-DSI', '1.2.1 DATA SCIENCE', '1.2.1 DATA SCIENCE', '80114771', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (10, 'JFU-DPI', '1.2', '1.2.2', 'JRO-MAI', '1.2.2 MACHINE LEARNING AND AI', '1.2.2 MACHINE LEARNING AND AI', '80114772', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (11, 'JFU-DPI', '1.2', '1.2.3', 'JRO-IOT', '1.2.3 SENSORS & INTERNET OF THINGS (IOT)', '1.2.3 SENSORS & INTERNET OF THINGS (IOT)', '80114773', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (12, 'JFU-DPI', '1.2', '1.2.4', 'JRO-BCR', '1.2.4 BLOCKCHAIN AND CRYPTOGRAPHY', '1.2.4 BLOCKCHAIN AND CRYPTOGRAPHY', '80114774', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (13, 'JFU-DPI', '1.2', '1.2.5', 'JRO-IFS', '1.2.5 INFORMATION AND SECURITY', '1.2.5 INFORMATION AND SECURITY', '80114875', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (14, 'JFU-DPI', '1.2', '1.2.6', 'JRO-DCT', '1.2.6 DATA CENTER', '1.2.6 DATA CENTER', '80114876', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (15, 'JFU-DPI', '1.2', '1.2.7', 'JRO-SOE', '1.2.7 SOFTWARE ENGINEERING', '1.2.7 SOFTWARE ENGINEERING', '80114877', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (16, 'JFU-DPI', '1.2', '1.2.8', 'JRO-SYE', '1.2.8 SYSTEM ENGINEERING', '1.2.8 SYSTEM ENGINEERING', '80114878', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (17, 'JFU-DPI', '1.2', '1.2.9', 'JRO-SAE', '1.2.9 SALES ENGINEERING', '1.2.9 SALES ENGINEERING', '80114879', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (18, 'JFU-DPI', '1.2', '1.2.10', 'JRO-IDE', '1.2.10 INFRASTRUCTURE DESIGN&ENGINEERING', '1.2.10 INFRASTRUCTURE DESIGN AND ENGINEERING', '80114880', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (19, 'JFU-DIS', '1.3', '1.3.1', 'JRO-DVD', '1.3.1 DEVELOPMENT & DESIGN', '1.3.1 DEVELOPMENT & DESIGN', '80114881', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (20, 'JFU-DIS', '1.3', '1.3.2', 'JRO-PMG', '1.3.2 PRODUCT MANAGEMENT', '1.3.2 PRODUCT MANAGEMENT', '80114882', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (21, 'JFU-SLS', '2.1', '2.1.1', 'JRO-AMG', '2.1.1 ACCOUNT MANAGEMENT', '2.1.1 ACCOUNT MANAGEMENT', '80114883', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (22, 'JFU-SLS', '2.1', '2.1.2', 'JRO-SOM', '2.1.2 SALES OPERATION & MANAGEMENT', '2.1.2 SALES OPERATION & MANAGEMENT', '80114884', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (23, 'JFU-MKT', '2.2', '2.2.1', 'JRO-MED', '2.2.1 MEDIA', '2.2.1 MEDIA', '80114885', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (24, 'JFU-MKT', '2.2', '2.2.2', 'JRO-CCM', '2.2.2 CORPORATE COMMUNICATIONS', '2.2.2 CORPORATE COMMUNICATIONS', '80114886', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (25, 'JFU-MKT', '2.2', '2.2.3', 'JRO-CMD', '2.2.3 COMMUNICATION DESIGN', '2.2.3 COMMUNICATION DESIGN', '80114887', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (26, 'JFU-MKT', '2.2', '2.2.4', 'JRO-MAR', '2.2.4 MARKETING', '2.2.4 MARKETING', '80114888', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (27, 'JFU-CSE', '2.3', '2.3.1', 'JRO-CRM', '2.3.1 CUSTOMER RELATIONSHIP MANAGEMENT', '2.3.1 CUSTOMER RELATIONSHIP MANAGEMENT', '80114889', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (28, 'JFU-CSE', '2.3', '2.3.2', 'JRO-CSO', '2.3.2 CUSTOMER SERVICE OPERATIONS', '2.3.2 CUSTOMER SERVICE OPERATIONS', '80114890', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (29, 'JFU-CSE', '2.3', '2.3.3', 'JRO-CMG', '2.3.3 COMMUNITY MANAGEMENT', '2.3.3 COMMUNITY MANAGEMENT', '80114891', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (30, 'JFU-BSD', '3.1', '3.1.1', 'JRO-DSB', '3.1.1 DIG STRATEGY & BUSS TRANSFORMATION', '3.1.1 DIGITAL STRATEGY AND BUSINESS TRANSFORMATION', '80114892', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (31, 'JFU-BSD', '3.1', '3.1.2', 'JRO-PPM', '3.1.2 PROGRAM & PROJECT MANAGEMENT', '3.1.2 PROGRAM & PROJECT MANAGEMENT', '80114893', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (32, 'JFU-BSD', '3.1', '3.1.3', 'JRO-BAI', '3.1.3 BUSINESS ANALYSIS AND INTELLIGENCE', '3.1.3 BUSINESS ANALYSIS AND INTELLIGENCE', '80114894', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (33, 'JFU-CRC', '3.2', '3.2.1', 'JRO-LCO', '3.2.1 LEGAL & COMPLIANCE', '3.2.1 LEGAL & COMPLIANCE', '80114895', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (34, 'JFU-CRC', '3.2', '3.2.2', 'JRO-RMG', '3.2.2 RISK MANAGEMENT', '3.2.2 RISK MANAGEMENT', '80114896', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (35, 'JFU-CRC', '3.2', '3.2.3', 'JRO-REG', '3.2.3 REGULATORY MANAGEMENT', '3.2.3 REGULATORY MANAGEMENT', '80114897', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (36, 'JFU-CRC', '3.2', '3.2.4', 'JRO-IAU', '3.2.4 INTERNAL AUDIT', '3.2.4 INTERNAL AUDIT', '80114898', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (37, 'JFU-CRC', '3.2', '3.2.5', 'JRO-INR', '3.2.5 INVESTOR RELATION', '3.2.5 INVESTOR RELATION', '80114899', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (38, 'JFU-FIN', '3.3', '3.3.1', 'JRO-ACO', '3.3.1 ACCOUNTING', '3.3.1 ACCOUNTING', '80114900', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (39, 'JFU-FIN', '3.3', '3.3.2', 'JRO-FIN', '3.3.2 FINANCIAL CONTROL', '3.3.2 FINANCIAL CONTROL', '80114901', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (40, 'JFU-FIN', '3.3', '3.3.3', 'JRO-TAX', '3.3.3 TAXATION', '3.3.3 TAXATION', '80114902', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (41, 'JFU-FIN', '3.3', '3.3.4', 'JRO-TRE', '3.3.4 TREASURY', '3.3.4 TREASURY', '80114903', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (42, 'JFU-FIN', '3.3', '3.3.5', 'JRO-APR', '3.3.5 ACCOUNTS PAYABLE/ACCOUNTS RECEIV', '3.3.5 ACCOUNTS PAYABLE/ ACCOUNTS RECEIVABLE', '80114904', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (43, 'JFU-FIN', '3.3', '3.3.6', 'JRO-CRA', '3.3.6 COLLECTIONS & REVENUE ASSURANCE', '3.3.6 COLLECTIONS & REVENUE ASSURANCE', '80114905', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (44, 'JFU-FIN', '3.3', '3.3.7', 'JRO-CRF', '3.3.7 CORPORATE FINANCE', '3.3.7 CORPORATE FINANCE', '80114906', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (45, 'JFU-HCA', '3.4', '3.4.1', 'JRO-ACQ', '3.4.1 TALENT ACQUISITION', '3.4.1 TALENT ACQUISITION', '80114907', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (46, 'JFU-HCA', '3.4', '3.4.2', 'JRO-LND', '3.4.2 LEARNING AND DEVELOPMENT', '3.4.2 LEARNING AND DEVELOPMENT', '80114908', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (47, 'JFU-HCA', '3.4', '3.4.3', 'JRO-EIR', '3.4.3 EMPLOYEE AND INDUSTRIAL RELATIONS', '3.4.3 EMPLOYEE AND INDUSTRIAL RELATIONS', '80114909', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (48, 'JFU-HCA', '3.4', '3.4.4', 'JRO-HBP', '3.4.4 HC BUSINESS PARTNER', '3.4.4 HC BUSINESS PARTNER', '80114910', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (49, 'JFU-HCA', '3.4', '3.4.5', 'JRO-REW', '3.4.5 TOTAL REWARDS', '3.4.5 TOTAL REWARDS', '80114911', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (50, 'JFU-HCA', '3.4', '3.4.6', 'JRO-ODV', '3.4.6 ORGANIZATION DEVELOPMENT', '3.4.6 ORGANIZATION DEVELOPMENT', '80114912', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (51, 'JFU-HCA', '3.4', '3.4.7', 'JRO-EDU', '3.4.7 EDUCATION', '3.4.7 EDUCATION', '80114913', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (52, 'JFU-SCM', '3.5', '3.5.1', 'JRO-PLO', '3.5.1 PROCUREMENT & LOGISTICS', '3.5.1 PROCUREMENT & LOGISTICS', '80114914', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (53, 'JFU-SCM', '3.5', '3.5.2', 'JRO-SUP', '3.5.2 SUPPLY PLANNING & OPERATIONS', '3.5.2 SUPPLY PLANNING & OPERATIONS', '80114915', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (54, 'JFU-GAS', '3.6', '3.6.1', 'JRO-ADM', '3.6.1 ADMINISTRATION & SECRETARIAL', '3.6.1 ADMINISTRATION & SECRETARIAL', '80114916', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (55, 'JFU-GAS', '3.6', '3.6.2', 'JRO-FMA', '3.6.2 FACILITIES MGMT & ASSET SECURITY', '3.6.2 FACILITIES MANAGEMENT & ASSET SECURITY', '80114917', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (56, 'JFU-GAS', '3.6', '3.6.3', 'JRO-PRP', '3.6.3 PROPERTY', '3.6.3 PROPERTY', '80114918', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_job_role` VALUES (57, 'JFU-GAS', '3.6', '3.6.4', 'JRO-HEA', '3.6.4 HEALTH', '3.6.4 HEALTH', '80114919', '1', '1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_job_role_temp
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_job_role_temp`;
CREATE TABLE `r_tna_job_role_temp`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_job_function_code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `long_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `objid` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_job_role_temp
-- ----------------------------

-- ----------------------------
-- Table structure for r_tna_kompetensi
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_kompetensi`;
CREATE TABLE `r_tna_kompetensi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_job_role_code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `helper` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `owner` enum('Telkom','Telkomsat') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `is_import` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '0',
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 441 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_kompetensi
-- ----------------------------
INSERT INTO `r_tna_kompetensi` VALUES (1, 'JRO-ANO', 'T-45', 'JRO-ANOKOMPETENSI1', 'IT INFRASTRUCTURE MAINTENANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (2, 'JRO-ANO', 'T-46', 'JRO-ANOKOMPETENSI2', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (3, 'JRO-ANO', 'T-48', 'JRO-ANOKOMPETENSI3', 'NETWORK SERVICE NODE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (4, 'JRO-ANO', 'T-49', 'JRO-ANOKOMPETENSI4', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (5, 'JRO-ANO', 'T-50', 'JRO-ANOKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (6, 'JRO-ANO', 'T-51', 'JRO-ANOKOMPETENSI6', 'NETWORK VIRTUALIZATION & AUTOMATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (7, 'JRO-ANO', 'T-57', 'JRO-ANOKOMPETENSI7', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (8, 'JRO-TCN', 'T-41', 'JRO-TCNKOMPETENSI1', 'INFORMATION SYSTEM AND BUSINESS ALIGNMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (9, 'JRO-TCN', 'T-46', 'JRO-TCNKOMPETENSI2', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (10, 'JRO-TCN', 'T-47', 'JRO-TCNKOMPETENSI3', 'NETWORK CORE BACKBONE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (11, 'JRO-TCN', 'T-49', 'JRO-TCNKOMPETENSI4', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (12, 'JRO-TCN', 'T-50', 'JRO-TCNKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (13, 'JRO-TCN', 'T-57', 'JRO-TCNKOMPETENSI6', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (14, 'JRO-TCN', 'T-66', 'JRO-TCNKOMPETENSI7', 'BUSINESS PROCESS MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (15, 'JRO-TCN', 'T-79', 'JRO-TCNKOMPETENSI8', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (16, 'JRO-SBV', 'T-06', 'JRO-SBVKOMPETENSI1', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (17, 'JRO-SBV', 'T-20', 'JRO-SBVKOMPETENSI2', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (18, 'JRO-SBV', 'T-21', 'JRO-SBVKOMPETENSI3', 'APPLICATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (19, 'JRO-SBV', 'T-35', 'JRO-SBVKOMPETENSI4', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (20, 'JRO-SBV', 'T-50', 'JRO-SBVKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (21, 'JRO-SBV', 'T-57', 'JRO-SBVKOMPETENSI6', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (22, 'JRO-SBV', 'T-60', 'JRO-SBVKOMPETENSI7', 'TESTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (23, 'JRO-SBV', 'T-71', 'JRO-SBVKOMPETENSI8', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (24, 'JRO-ADP', 'T-40', 'JRO-ADPKOMPETENSI1', 'FREQUENCY SPECTRUM MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (25, 'JRO-ADP', 'T-41', 'JRO-ADPKOMPETENSI2', 'INFORMATION SYSTEM AND BUSINESS ALIGNMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (26, 'JRO-ADP', 'T-46', 'JRO-ADPKOMPETENSI3', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (27, 'JRO-ADP', 'T-49', 'JRO-ADPKOMPETENSI4', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (28, 'JRO-ADP', 'T-50', 'JRO-ADPKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (29, 'JRO-ADP', 'T-78', 'JRO-ADPKOMPETENSI6', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (30, 'JRO-ADP', 'T-79', 'JRO-ADPKOMPETENSI7', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (31, 'JRO-ADP', 'T-81', 'JRO-ADPKOMPETENSI8', 'REGULATION MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (32, 'JRO-TDP', 'T-20', 'JRO-TDPKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (33, 'JRO-TDP', 'T-38', 'JRO-TDPKOMPETENSI2', 'DISASTER RECOVERY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (34, 'JRO-TDP', 'T-46', 'JRO-TDPKOMPETENSI3', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (35, 'JRO-TDP', 'T-47', 'JRO-TDPKOMPETENSI4', 'NETWORK CORE BACKBONE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (36, 'JRO-TDP', 'T-49', 'JRO-TDPKOMPETENSI5', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (37, 'JRO-TDP', 'T-50', 'JRO-TDPKOMPETENSI6', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (38, 'JRO-TDP', 'T-57', 'JRO-TDPKOMPETENSI7', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (39, 'JRO-TDP', 'T-81', 'JRO-TDPKOMPETENSI8', 'REGULATION MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (40, 'JRO-SDP', 'T-20', 'JRO-SDPKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (41, 'JRO-SDP', 'T-22', 'JRO-SDPKOMPETENSI2', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (42, 'JRO-SDP', 'T-32', 'JRO-SDPKOMPETENSI3', 'DEMAND MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (43, 'JRO-SDP', 'T-34', 'JRO-SDPKOMPETENSI4', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (44, 'JRO-SDP', 'T-35', 'JRO-SDPKOMPETENSI5', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (45, 'JRO-SDP', 'T-50', 'JRO-SDPKOMPETENSI6', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (46, 'JRO-SDP', 'T-71', 'JRO-SDPKOMPETENSI7', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (47, 'JRO-TLD', 'T-20', 'JRO-TLDKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (48, 'JRO-TLD', 'T-34', 'JRO-TLDKOMPETENSI2', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (49, 'JRO-TLD', 'T-46', 'JRO-TLDKOMPETENSI3', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (50, 'JRO-TLD', 'T-49', 'JRO-TLDKOMPETENSI4', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (51, 'JRO-TLD', 'T-50', 'JRO-TLDKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (52, 'JRO-TLD', 'T-57', 'JRO-TLDKOMPETENSI6', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (53, 'JRO-TLD', 'T-79', 'JRO-TLDKOMPETENSI7', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (54, 'JRO-TLD', 'T-81', 'JRO-TLDKOMPETENSI8', 'REGULATION MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (55, 'JRO-TSP', 'T-33', 'JRO-TSPKOMPETENSI1', 'DIGITAL FORENSICS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (56, 'JRO-TSP', 'T-34', 'JRO-TSPKOMPETENSI2', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (57, 'JRO-TSP', 'T-46', 'JRO-TSPKOMPETENSI3', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (58, 'JRO-TSP', 'T-49', 'JRO-TSPKOMPETENSI4', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (59, 'JRO-TSP', 'T-50', 'JRO-TSPKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (60, 'JRO-TSP', 'T-57', 'JRO-TSPKOMPETENSI6', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (61, 'JRO-TSP', 'T-71', 'JRO-TSPKOMPETENSI7', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (62, 'JRO-TSP', 'T-79', 'JRO-TSPKOMPETENSI8', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (63, 'JRO-DSI', 'T-21', 'JRO-DSIKOMPETENSI1', 'APPLICATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (64, 'JRO-DSI', 'T-22', 'JRO-DSIKOMPETENSI2', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (65, 'JRO-DSI', 'T-25', 'JRO-DSIKOMPETENSI3', 'COMPUTATIONAL MODELLING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (66, 'JRO-DSI', 'T-28', 'JRO-DSIKOMPETENSI4', 'DATA ENGINEERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (67, 'JRO-DSI', 'T-30', 'JRO-DSIKOMPETENSI5', 'DATA STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (68, 'JRO-DSI', 'T-31', 'JRO-DSIKOMPETENSI6', 'DATA VISUALIZATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (69, 'JRO-DSI', 'T-35', 'JRO-DSIKOMPETENSI7', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (70, 'JRO-DSI', 'T-57', 'JRO-DSIKOMPETENSI8', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (71, 'JRO-MAI', 'T-20', 'JRO-MAIKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (72, 'JRO-MAI', 'T-26', 'JRO-MAIKOMPETENSI2', 'DATA ANALYTICS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (73, 'JRO-MAI', 'T-28', 'JRO-MAIKOMPETENSI3', 'DATA ENGINEERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (74, 'JRO-MAI', 'T-35', 'JRO-MAIKOMPETENSI4', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (75, 'JRO-MAI', 'T-50', 'JRO-MAIKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (76, 'JRO-MAI', 'T-54', 'JRO-MAIKOMPETENSI6', 'SECURITY OPERATION & MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (77, 'JRO-MAI', 'T-71', 'JRO-MAIKOMPETENSI7', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (78, 'JRO-MAI', 'T-81', 'JRO-MAIKOMPETENSI8', 'REGULATION MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (79, 'JRO-IOT', 'T-20', 'JRO-IOTKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (80, 'JRO-IOT', 'T-22', 'JRO-IOTKOMPETENSI2', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (81, 'JRO-IOT', 'T-34', 'JRO-IOTKOMPETENSI3', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (82, 'JRO-IOT', 'T-35', 'JRO-IOTKOMPETENSI4', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (83, 'JRO-IOT', 'T-43', 'JRO-IOTKOMPETENSI5', 'IOT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (84, 'JRO-IOT', 'T-71', 'JRO-IOTKOMPETENSI6', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (85, 'JRO-IOT', 'T-79', 'JRO-IOTKOMPETENSI7', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (86, 'JRO-BCR', 'T-20', 'JRO-BCRKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (87, 'JRO-BCR', 'T-22', 'JRO-BCRKOMPETENSI2', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (88, 'JRO-BCR', 'T-34', 'JRO-BCRKOMPETENSI3', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (89, 'JRO-BCR', 'T-44', 'JRO-BCRKOMPETENSI4', 'IT ASSET LIFECYCLE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (90, 'JRO-BCR', 'T-57', 'JRO-BCRKOMPETENSI5', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (91, 'JRO-BCR', 'T-60', 'JRO-BCRKOMPETENSI6', 'TESTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (92, 'JRO-BCR', 'T-79', 'JRO-BCRKOMPETENSI7', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (93, 'JRO-IFS', 'T-22', 'JRO-IFSKOMPETENSI1', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (94, 'JRO-IFS', 'T-34', 'JRO-IFSKOMPETENSI2', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (95, 'JRO-IFS', 'T-50', 'JRO-IFSKOMPETENSI3', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (96, 'JRO-IFS', 'T-52', 'JRO-IFSKOMPETENSI4', 'PROBLEM MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (97, 'JRO-IFS', 'T-53', 'JRO-IFSKOMPETENSI5', 'SECURITY ARCHITECTURE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (98, 'JRO-IFS', 'T-54', 'JRO-IFSKOMPETENSI6', 'SECURITY OPERATION & MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (99, 'JRO-IFS', 'T-55', 'JRO-IFSKOMPETENSI7', 'SECURITY STRATEGY AND GOVERNANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (100, 'JRO-IFS', 'T-57', 'JRO-IFSKOMPETENSI8', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (101, 'JRO-DCT', 'T-22', 'JRO-DCTKOMPETENSI1', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (102, 'JRO-DCT', 'T-27', 'JRO-DCTKOMPETENSI2', 'DATA CENTER FACILITIES MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (103, 'JRO-DCT', 'T-29', 'JRO-DCTKOMPETENSI3', 'DATA MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (104, 'JRO-DCT', 'T-34', 'JRO-DCTKOMPETENSI4', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (105, 'JRO-DCT', 'T-44', 'JRO-DCTKOMPETENSI5', 'IT ASSET LIFECYCLE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (106, 'JRO-DCT', 'T-49', 'JRO-DCTKOMPETENSI6', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (107, 'JRO-DCT', 'T-57', 'JRO-DCTKOMPETENSI7', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (108, 'JRO-DCT', 'T-60', 'JRO-DCTKOMPETENSI8', 'TESTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (109, 'JRO-SOE', 'T-22', 'JRO-SOEKOMPETENSI1', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (110, 'JRO-SOE', 'T-34', 'JRO-SOEKOMPETENSI2', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (111, 'JRO-SOE', 'T-44', 'JRO-SOEKOMPETENSI3', 'IT ASSET LIFECYCLE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (112, 'JRO-SOE', 'T-52', 'JRO-SOEKOMPETENSI4', 'PROBLEM MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (113, 'JRO-SOE', 'T-57', 'JRO-SOEKOMPETENSI5', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (114, 'JRO-SOE', 'T-60', 'JRO-SOEKOMPETENSI6', 'TESTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (115, 'JRO-SOE', 'T-63', 'JRO-SOEKOMPETENSI7', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (116, 'JRO-SOE', 'T-69', 'JRO-SOEKOMPETENSI8', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (117, 'JRO-SYE', 'T-22', 'JRO-SYEKOMPETENSI1', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (118, 'JRO-SYE', 'T-23', 'JRO-SYEKOMPETENSI2', 'CHANGE SUPPORT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (119, 'JRO-SYE', 'T-30', 'JRO-SYEKOMPETENSI3', 'DATA STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (120, 'JRO-SYE', 'T-34', 'JRO-SYEKOMPETENSI4', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (121, 'JRO-SYE', 'T-52', 'JRO-SYEKOMPETENSI5', 'PROBLEM MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (122, 'JRO-SYE', 'T-57', 'JRO-SYEKOMPETENSI6', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (123, 'JRO-SYE', 'T-59', 'JRO-SYEKOMPETENSI7', 'SYSTEM ENGINEERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (124, 'JRO-SYE', 'T-60', 'JRO-SYEKOMPETENSI8', 'TESTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (125, 'JRO-SAE', 'T-06', 'JRO-SAEKOMPETENSI1', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (126, 'JRO-SAE', 'T-08', 'JRO-SAEKOMPETENSI2', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (127, 'JRO-SAE', 'T-10', 'JRO-SAEKOMPETENSI3', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (128, 'JRO-SAE', 'T-15', 'JRO-SAEKOMPETENSI4', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (129, 'JRO-SAE', 'T-18', 'JRO-SAEKOMPETENSI5', 'DIGITAL SALES STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (130, 'JRO-SAE', 'T-26', 'JRO-SAEKOMPETENSI6', 'DATA ANALYTICS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (131, 'JRO-SAE', 'T-34', 'JRO-SAEKOMPETENSI7', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (132, 'JRO-IDE', 'T-20', 'JRO-IDEKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (133, 'JRO-IDE', 'T-22', 'JRO-IDEKOMPETENSI2', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (134, 'JRO-IDE', 'T-24', 'JRO-IDEKOMPETENSI3', 'COMPONENT INTEGRATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (135, 'JRO-IDE', 'T-44', 'JRO-IDEKOMPETENSI4', 'IT ASSET LIFECYCLE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (136, 'JRO-IDE', 'T-46', 'JRO-IDEKOMPETENSI5', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (137, 'JRO-IDE', 'T-50', 'JRO-IDEKOMPETENSI6', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (138, 'JRO-IDE', 'T-56', 'JRO-IDEKOMPETENSI7', 'SECURITY THREAT, ASSESSMENT & PENETRATION TESTING ', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (139, 'JRO-IDE', 'T-71', 'JRO-IDEKOMPETENSI8', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (140, 'JRO-DVD', 'T-03', 'JRO-DVDKOMPETENSI1', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (141, 'JRO-DVD', 'T-10', 'JRO-DVDKOMPETENSI2', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (142, 'JRO-DVD', 'T-20', 'JRO-DVDKOMPETENSI3', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (143, 'JRO-DVD', 'T-21', 'JRO-DVDKOMPETENSI4', 'APPLICATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (144, 'JRO-DVD', 'T-34', 'JRO-DVDKOMPETENSI5', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (145, 'JRO-DVD', 'T-35', 'JRO-DVDKOMPETENSI6', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (146, 'JRO-DVD', 'T-61', 'JRO-DVDKOMPETENSI7', 'USER EXPERIENCE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (147, 'JRO-DVD', 'T-71', 'JRO-DVDKOMPETENSI8', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (148, 'JRO-PMG', 'T-03', 'JRO-PMGKOMPETENSI1', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (149, 'JRO-PMG', 'T-17', 'JRO-PMGKOMPETENSI2', 'PRICING & TARIFF POLICY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (150, 'JRO-PMG', 'T-20', 'JRO-PMGKOMPETENSI3', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (151, 'JRO-PMG', 'T-34', 'JRO-PMGKOMPETENSI4', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (152, 'JRO-PMG', 'T-35', 'JRO-PMGKOMPETENSI5', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (153, 'JRO-PMG', 'T-36', 'JRO-PMGKOMPETENSI6', 'DIGITAL PRODUCT/SERVICE PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (154, 'JRO-PMG', 'T-61', 'JRO-PMGKOMPETENSI7', 'USER EXPERIENCE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (155, 'JRO-PMG', 'T-71', 'JRO-PMGKOMPETENSI8', 'EMERGING TECHNOLOGY MONITORING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (156, 'JRO-AMG', 'T-08', 'JRO-AMGKOMPETENSI1', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (157, 'JRO-AMG', 'T-10', 'JRO-AMGKOMPETENSI2', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (158, 'JRO-AMG', 'T-15', 'JRO-AMGKOMPETENSI3', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (159, 'JRO-AMG', 'T-16', 'JRO-AMGKOMPETENSI4', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (160, 'JRO-AMG', 'T-17', 'JRO-AMGKOMPETENSI5', 'PRICING & TARIFF POLICY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (161, 'JRO-AMG', 'T-18', 'JRO-AMGKOMPETENSI6', 'DIGITAL SALES STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (162, 'JRO-AMG', 'T-62', 'JRO-AMGKOMPETENSI7', 'USER SUPPORT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (163, 'JRO-AMG', 'T-78', 'JRO-AMGKOMPETENSI8', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (164, 'JRO-SOM', 'T-06', 'JRO-SOMKOMPETENSI1', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (165, 'JRO-SOM', 'T-08', 'JRO-SOMKOMPETENSI2', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (166, 'JRO-SOM', 'T-09', 'JRO-SOMKOMPETENSI3', 'CUSTOMER EXPERIENCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (167, 'JRO-SOM', 'T-10', 'JRO-SOMKOMPETENSI4', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (168, 'JRO-SOM', 'T-15', 'JRO-SOMKOMPETENSI5', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (169, 'JRO-SOM', 'T-18', 'JRO-SOMKOMPETENSI6', 'DIGITAL SALES STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (170, 'JRO-SOM', 'T-26', 'JRO-SOMKOMPETENSI7', 'DATA ANALYTICS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (171, 'JRO-SOM', 'T-62', 'JRO-SOMKOMPETENSI8', 'USER SUPPORT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (172, 'JRO-MED', 'T-06', 'JRO-MEDKOMPETENSI1', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (173, 'JRO-MED', 'T-07', 'JRO-MEDKOMPETENSI2', 'CORPORATE COMMUNICATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (174, 'JRO-MED', 'T-08', 'JRO-MEDKOMPETENSI3', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (175, 'JRO-MED', 'T-10', 'JRO-MEDKOMPETENSI4', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (176, 'JRO-MED', 'T-11', 'JRO-MEDKOMPETENSI5', 'DIGITAL CONTENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (177, 'JRO-MED', 'T-16', 'JRO-MEDKOMPETENSI6', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (178, 'JRO-MED', 'T-20', 'JRO-MEDKOMPETENSI7', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (179, 'JRO-MED', 'T-30', 'JRO-MEDKOMPETENSI8', 'DATA STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (180, 'JRO-CCM', 'T-02', 'JRO-CCMKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (181, 'JRO-CCM', 'T-06', 'JRO-CCMKOMPETENSI2', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (182, 'JRO-CCM', 'T-07', 'JRO-CCMKOMPETENSI3', 'CORPORATE COMMUNICATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (183, 'JRO-CCM', 'T-10', 'JRO-CCMKOMPETENSI4', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (184, 'JRO-CCM', 'T-14', 'JRO-CCMKOMPETENSI5', 'INVESTOR RELATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (185, 'JRO-CCM', 'T-16', 'JRO-CCMKOMPETENSI6', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (186, 'JRO-CCM', 'T-30', 'JRO-CCMKOMPETENSI7', 'DATA STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (187, 'JRO-CCM', 'T-39', 'JRO-CCMKOMPETENSI8', 'DOCUMENTATION PRODUCTION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (188, 'JRO-CMD', 'T-02', 'JRO-CMDKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (189, 'JRO-CMD', 'T-06', 'JRO-CMDKOMPETENSI2', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (190, 'JRO-CMD', 'T-07', 'JRO-CMDKOMPETENSI3', 'CORPORATE COMMUNICATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (191, 'JRO-CMD', 'T-10', 'JRO-CMDKOMPETENSI4', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (192, 'JRO-CMD', 'T-15', 'JRO-CMDKOMPETENSI5', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (193, 'JRO-CMD', 'T-16', 'JRO-CMDKOMPETENSI6', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (194, 'JRO-CMD', 'T-30', 'JRO-CMDKOMPETENSI7', 'DATA STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (195, 'JRO-CMD', 'T-39', 'JRO-CMDKOMPETENSI8', 'DOCUMENTATION PRODUCTION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (196, 'JRO-MAR', 'T-04', 'JRO-MARKOMPETENSI1', 'CAMPAIGN MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (197, 'JRO-MAR', 'T-06', 'JRO-MARKOMPETENSI2', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (198, 'JRO-MAR', 'T-08', 'JRO-MARKOMPETENSI3', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (199, 'JRO-MAR', 'T-10', 'JRO-MARKOMPETENSI4', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (200, 'JRO-MAR', 'T-15', 'JRO-MARKOMPETENSI5', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (201, 'JRO-MAR', 'T-17', 'JRO-MARKOMPETENSI6', 'PRICING & TARIFF POLICY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (202, 'JRO-MAR', 'T-18', 'JRO-MARKOMPETENSI7', 'DIGITAL SALES STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (203, 'JRO-CRM', 'T-07', 'JRO-CRMKOMPETENSI1', 'CORPORATE COMMUNICATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (204, 'JRO-CRM', 'T-08', 'JRO-CRMKOMPETENSI2', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (205, 'JRO-CRM', 'T-09', 'JRO-CRMKOMPETENSI3', 'CUSTOMER EXPERIENCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (206, 'JRO-CRM', 'T-10', 'JRO-CRMKOMPETENSI4', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (207, 'JRO-CRM', 'T-16', 'JRO-CRMKOMPETENSI5', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (208, 'JRO-CRM', 'T-18', 'JRO-CRMKOMPETENSI6', 'DIGITAL SALES STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (209, 'JRO-CRM', 'T-20', 'JRO-CRMKOMPETENSI7', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (210, 'JRO-CRM', 'T-26', 'JRO-CRMKOMPETENSI8', 'DATA ANALYTICS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (211, 'JRO-CSO', 'T-06', 'JRO-CSOKOMPETENSI1', 'CHANNEL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (212, 'JRO-CSO', 'T-08', 'JRO-CSOKOMPETENSI2', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (213, 'JRO-CSO', 'T-09', 'JRO-CSOKOMPETENSI3', 'CUSTOMER EXPERIENCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (214, 'JRO-CSO', 'T-10', 'JRO-CSOKOMPETENSI4', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (215, 'JRO-CSO', 'T-15', 'JRO-CSOKOMPETENSI5', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (216, 'JRO-CSO', 'T-26', 'JRO-CSOKOMPETENSI6', 'DATA ANALYTICS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (217, 'JRO-CSO', 'T-65', 'JRO-CSOKOMPETENSI7', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (218, 'JRO-CMG', 'T-01', 'JRO-CMGKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (219, 'JRO-CMG', 'T-10', 'JRO-CMGKOMPETENSI2', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (220, 'JRO-CMG', 'T-15', 'JRO-CMGKOMPETENSI3', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (221, 'JRO-CMG', 'T-16', 'JRO-CMGKOMPETENSI4', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (222, 'JRO-CMG', 'T-18', 'JRO-CMGKOMPETENSI5', 'DIGITAL SALES STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (223, 'JRO-CMG', 'T-37', 'JRO-CMGKOMPETENSI6', 'DIGITAL SOLUTION DEPLOYMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (224, 'JRO-CMG', 'T-73', 'JRO-CMGKOMPETENSI7', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (225, 'JRO-DSB', 'T-01', 'JRO-DSBKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (226, 'JRO-DSB', 'T-03', 'JRO-DSBKOMPETENSI2', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (227, 'JRO-DSB', 'T-05', 'JRO-DSBKOMPETENSI3', 'CAPITAL EXPENDITURE & INVESTMENT ASSESSMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (228, 'JRO-DSB', 'T-08', 'JRO-DSBKOMPETENSI4', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (229, 'JRO-DSB', 'T-15', 'JRO-DSBKOMPETENSI5', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (230, 'JRO-DSB', 'T-20', 'JRO-DSBKOMPETENSI6', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (231, 'JRO-DSB', 'T-35', 'JRO-DSBKOMPETENSI7', 'DIGITAL PRODUCT INNOVATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (232, 'JRO-DSB', 'T-58', 'JRO-DSBKOMPETENSI8', 'SUSTAINABILITY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (233, 'JRO-PPM', 'T-03', 'JRO-PPMKOMPETENSI1', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (234, 'JRO-PPM', 'T-12', 'JRO-PPMKOMPETENSI2', 'ENTERPRISE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (235, 'JRO-PPM', 'T-50', 'JRO-PPMKOMPETENSI3', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (236, 'JRO-PPM', 'T-66', 'JRO-PPMKOMPETENSI4', 'BUSINESS PROCESS MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (237, 'JRO-PPM', 'T-67', 'JRO-PPMKOMPETENSI5', 'CHANGE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (238, 'JRO-PPM', 'T-79', 'JRO-PPMKOMPETENSI6', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (239, 'JRO-PPM', 'T-80', 'JRO-PPMKOMPETENSI7', 'QUALITY ASSURANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (240, 'JRO-PPM', 'T-82', 'JRO-PPMKOMPETENSI8', 'RISK MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (241, 'JRO-BAI', 'T-03', 'JRO-BAIKOMPETENSI1', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (242, 'JRO-BAI', 'T-08', 'JRO-BAIKOMPETENSI2', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (243, 'JRO-BAI', 'T-13', 'JRO-BAIKOMPETENSI3', 'INVESTMENT TRANSACTION MANAGEMEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (244, 'JRO-BAI', 'T-16', 'JRO-BAIKOMPETENSI4', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (245, 'JRO-BAI', 'T-19', 'JRO-BAIKOMPETENSI5', 'STRATEGIC ALLIANCES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (246, 'JRO-BAI', 'T-20', 'JRO-BAIKOMPETENSI6', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (247, 'JRO-BAI', 'T-34', 'JRO-BAIKOMPETENSI7', 'DIGITAL PRODUCT AND SOLUTIONS DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (248, 'JRO-BAI', 'T-66', 'JRO-BAIKOMPETENSI8', 'BUSINESS PROCESS MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (249, 'JRO-LCO', 'T-05', 'JRO-LCOKOMPETENSI1', 'CAPITAL EXPENDITURE & INVESTMENT ASSESSMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (250, 'JRO-LCO', 'T-20', 'JRO-LCOKOMPETENSI2', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (251, 'JRO-LCO', 'T-39', 'JRO-LCOKOMPETENSI3', 'DOCUMENTATION PRODUCTION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (252, 'JRO-LCO', 'T-73', 'JRO-LCOKOMPETENSI4', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (253, 'JRO-LCO', 'T-75', 'JRO-LCOKOMPETENSI5', 'INTEGRATED INTERNAL AUDIT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (254, 'JRO-LCO', 'T-76', 'JRO-LCOKOMPETENSI6', 'LEGAL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (255, 'JRO-LCO', 'T-78', 'JRO-LCOKOMPETENSI7', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (256, 'JRO-RMG', 'T-03', 'JRO-RMGKOMPETENSI1', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (257, 'JRO-RMG', 'T-15', 'JRO-RMGKOMPETENSI2', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (258, 'JRO-RMG', 'T-20', 'JRO-RMGKOMPETENSI3', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (259, 'JRO-RMG', 'T-65', 'JRO-RMGKOMPETENSI4', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (260, 'JRO-RMG', 'T-66', 'JRO-RMGKOMPETENSI5', 'BUSINESS PROCESS MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (261, 'JRO-RMG', 'T-73', 'JRO-RMGKOMPETENSI6', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (262, 'JRO-RMG', 'T-80', 'JRO-RMGKOMPETENSI7', 'QUALITY ASSURANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (263, 'JRO-RMG', 'T-82', 'JRO-RMGKOMPETENSI8', 'RISK MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (264, 'JRO-REG', 'T-07', 'JRO-REGKOMPETENSI1', 'CORPORATE COMMUNICATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (265, 'JRO-REG', 'T-16', 'JRO-REGKOMPETENSI2', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (266, 'JRO-REG', 'T-42', 'JRO-REGKOMPETENSI3', 'INFORMATION SYSTEM GOVERNANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (267, 'JRO-REG', 'T-49', 'JRO-REGKOMPETENSI4', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (268, 'JRO-REG', 'T-50', 'JRO-REGKOMPETENSI5', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (269, 'JRO-REG', 'T-73', 'JRO-REGKOMPETENSI6', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (270, 'JRO-REG', 'T-76', 'JRO-REGKOMPETENSI7', 'LEGAL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (271, 'JRO-REG', 'T-79', 'JRO-REGKOMPETENSI8', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (272, 'JRO-IAU', 'T-12', 'JRO-IAUKOMPETENSI1', 'ENTERPRISE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (273, 'JRO-IAU', 'T-20', 'JRO-IAUKOMPETENSI2', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (274, 'JRO-IAU', 'T-63', 'JRO-IAUKOMPETENSI3', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (275, 'JRO-IAU', 'T-73', 'JRO-IAUKOMPETENSI4', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (276, 'JRO-IAU', 'T-75', 'JRO-IAUKOMPETENSI5', 'INTEGRATED INTERNAL AUDIT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (277, 'JRO-IAU', 'T-78', 'JRO-IAUKOMPETENSI6', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (278, 'JRO-IAU', 'T-80', 'JRO-IAUKOMPETENSI7', 'QUALITY ASSURANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (279, 'JRO-INR', 'T-02', 'JRO-INRKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (280, 'JRO-INR', 'T-03', 'JRO-INRKOMPETENSI2', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (281, 'JRO-INR', 'T-08', 'JRO-INRKOMPETENSI3', 'CUSTOMER & MARKET INTELLIGENCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (282, 'JRO-INR', 'T-14', 'JRO-INRKOMPETENSI4', 'INVESTOR RELATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (283, 'JRO-INR', 'T-20', 'JRO-INRKOMPETENSI5', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (284, 'JRO-INR', 'T-21', 'JRO-INRKOMPETENSI6', 'APPLICATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (285, 'JRO-INR', 'T-63', 'JRO-INRKOMPETENSI7', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (286, 'JRO-INR', 'T-69', 'JRO-INRKOMPETENSI8', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (287, 'JRO-ACO', 'T-31', 'JRO-ACOKOMPETENSI1', 'DATA VISUALIZATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (288, 'JRO-ACO', 'T-63', 'JRO-ACOKOMPETENSI2', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (289, 'JRO-ACO', 'T-65', 'JRO-ACOKOMPETENSI3', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (290, 'JRO-ACO', 'T-69', 'JRO-ACOKOMPETENSI4', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (291, 'JRO-ACO', 'T-84', 'JRO-ACOKOMPETENSI5', 'TAXATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (292, 'JRO-ACO', 'T-85', 'JRO-ACOKOMPETENSI6', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (293, 'JRO-FIN', 'T-20', 'JRO-FINKOMPETENSI1', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (294, 'JRO-FIN', 'T-50', 'JRO-FINKOMPETENSI2', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (295, 'JRO-FIN', 'T-57', 'JRO-FINKOMPETENSI3', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (296, 'JRO-FIN', 'T-63', 'JRO-FINKOMPETENSI4', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (297, 'JRO-FIN', 'T-66', 'JRO-FINKOMPETENSI5', 'BUSINESS PROCESS MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (298, 'JRO-FIN', 'T-69', 'JRO-FINKOMPETENSI6', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (299, 'JRO-FIN', 'T-78', 'JRO-FINKOMPETENSI7', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (300, 'JRO-FIN', 'T-85', 'JRO-FINKOMPETENSI8', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (301, 'JRO-TAX', 'T-63', 'JRO-TAXKOMPETENSI1', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (302, 'JRO-TAX', 'T-65', 'JRO-TAXKOMPETENSI2', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (303, 'JRO-TAX', 'T-69', 'JRO-TAXKOMPETENSI3', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (304, 'JRO-TAX', 'T-76', 'JRO-TAXKOMPETENSI4', 'LEGAL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (305, 'JRO-TAX', 'T-84', 'JRO-TAXKOMPETENSI5', 'TAXATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (306, 'JRO-TAX', 'T-85', 'JRO-TAXKOMPETENSI6', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (307, 'JRO-TRE', 'T-14', 'JRO-TREKOMPETENSI1', 'INVESTOR RELATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (308, 'JRO-TRE', 'T-63', 'JRO-TREKOMPETENSI2', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (309, 'JRO-TRE', 'T-65', 'JRO-TREKOMPETENSI3', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (310, 'JRO-TRE', 'T-69', 'JRO-TREKOMPETENSI4', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (311, 'JRO-TRE', 'T-70', 'JRO-TREKOMPETENSI5', 'DIGITALLY CONTROLLED KNOWLEDGE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (312, 'JRO-TRE', 'T-85', 'JRO-TREKOMPETENSI6', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (313, 'JRO-APR', 'T-01', 'JRO-APRKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (314, 'JRO-APR', 'T-16', 'JRO-APRKOMPETENSI2', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (315, 'JRO-APR', 'T-63', 'JRO-APRKOMPETENSI3', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (316, 'JRO-APR', 'T-65', 'JRO-APRKOMPETENSI4', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (317, 'JRO-APR', 'T-69', 'JRO-APRKOMPETENSI5', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (318, 'JRO-APR', 'T-73', 'JRO-APRKOMPETENSI6', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (319, 'JRO-APR', 'T-84', 'JRO-APRKOMPETENSI7', 'TAXATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (320, 'JRO-APR', 'T-85', 'JRO-APRKOMPETENSI8', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (321, 'JRO-CRA', 'T-10', 'JRO-CRAKOMPETENSI1', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (322, 'JRO-CRA', 'T-16', 'JRO-CRAKOMPETENSI2', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (323, 'JRO-CRA', 'T-50', 'JRO-CRAKOMPETENSI3', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (324, 'JRO-CRA', 'T-63', 'JRO-CRAKOMPETENSI4', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (325, 'JRO-CRA', 'T-65', 'JRO-CRAKOMPETENSI5', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (326, 'JRO-CRA', 'T-66', 'JRO-CRAKOMPETENSI6', 'BUSINESS PROCESS MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (327, 'JRO-CRA', 'T-69', 'JRO-CRAKOMPETENSI7', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (328, 'JRO-CRA', 'T-73', 'JRO-CRAKOMPETENSI8', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (329, 'JRO-CRF', 'T-14', 'JRO-CRFKOMPETENSI1', 'INVESTOR RELATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (330, 'JRO-CRF', 'T-15', 'JRO-CRFKOMPETENSI2', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (331, 'JRO-CRF', 'T-17', 'JRO-CRFKOMPETENSI3', 'PRICING & TARIFF POLICY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (332, 'JRO-CRF', 'T-63', 'JRO-CRFKOMPETENSI4', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (333, 'JRO-CRF', 'T-65', 'JRO-CRFKOMPETENSI5', 'BILLING & REVENUE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (334, 'JRO-CRF', 'T-69', 'JRO-CRFKOMPETENSI6', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (335, 'JRO-CRF', 'T-85', 'JRO-CRFKOMPETENSI7', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (336, 'JRO-ACQ', 'T-02', 'JRO-ACQKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (337, 'JRO-ACQ', 'T-10', 'JRO-ACQKOMPETENSI2', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (338, 'JRO-ACQ', 'T-16', 'JRO-ACQKOMPETENSI3', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (339, 'JRO-ACQ', 'T-74', 'JRO-ACQKOMPETENSI4', 'HUMAN CAPITAL STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (340, 'JRO-ACQ', 'T-77', 'JRO-ACQKOMPETENSI5', 'ORGANIZATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (341, 'JRO-ACQ', 'T-83', 'JRO-ACQKOMPETENSI6', 'TALENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (342, 'JRO-LND', 'T-01', 'JRO-LNDKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (343, 'JRO-LND', 'T-02', 'JRO-LNDKOMPETENSI2', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (344, 'JRO-LND', 'T-22', 'JRO-LNDKOMPETENSI3', 'ARCHITECTURE DESIGN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (345, 'JRO-LND', 'T-26', 'JRO-LNDKOMPETENSI4', 'DATA ANALYTICS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (346, 'JRO-LND', 'T-70', 'JRO-LNDKOMPETENSI5', 'DIGITALLY CONTROLLED KNOWLEDGE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (347, 'JRO-LND', 'T-74', 'JRO-LNDKOMPETENSI6', 'HUMAN CAPITAL STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (348, 'JRO-LND', 'T-77', 'JRO-LNDKOMPETENSI7', 'ORGANIZATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (349, 'JRO-LND', 'T-83', 'JRO-LNDKOMPETENSI8', 'TALENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (350, 'JRO-EIR', 'T-02', 'JRO-EIRKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (351, 'JRO-EIR', 'T-68', 'JRO-EIRKOMPETENSI2', 'COMPENSATION & BENEFITS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (352, 'JRO-EIR', 'T-72', 'JRO-EIRKOMPETENSI3', 'EMPLOYEE & INDUSTRIAL RELATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (353, 'JRO-EIR', 'T-73', 'JRO-EIRKOMPETENSI4', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (354, 'JRO-EIR', 'T-74', 'JRO-EIRKOMPETENSI5', 'HUMAN CAPITAL STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (355, 'JRO-EIR', 'T-76', 'JRO-EIRKOMPETENSI6', 'LEGAL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (356, 'JRO-EIR', 'T-77', 'JRO-EIRKOMPETENSI7', 'ORGANIZATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (357, 'JRO-EIR', 'T-83', 'JRO-EIRKOMPETENSI8', 'TALENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (358, 'JRO-HBP', 'T-01', 'JRO-HBPKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (359, 'JRO-HBP', 'T-02', 'JRO-HBPKOMPETENSI2', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (360, 'JRO-HBP', 'T-67', 'JRO-HBPKOMPETENSI3', 'CHANGE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (361, 'JRO-HBP', 'T-68', 'JRO-HBPKOMPETENSI4', 'COMPENSATION & BENEFITS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (362, 'JRO-HBP', 'T-72', 'JRO-HBPKOMPETENSI5', 'EMPLOYEE & INDUSTRIAL RELATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (363, 'JRO-HBP', 'T-74', 'JRO-HBPKOMPETENSI6', 'HUMAN CAPITAL STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (364, 'JRO-HBP', 'T-77', 'JRO-HBPKOMPETENSI7', 'ORGANIZATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (365, 'JRO-HBP', 'T-83', 'JRO-HBPKOMPETENSI8', 'TALENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (366, 'JRO-REW', 'T-02', 'JRO-REWKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (367, 'JRO-REW', 'T-12', 'JRO-REWKOMPETENSI2', 'ENTERPRISE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (368, 'JRO-REW', 'T-68', 'JRO-REWKOMPETENSI3', 'COMPENSATION & BENEFITS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (369, 'JRO-REW', 'T-74', 'JRO-REWKOMPETENSI4', 'HUMAN CAPITAL STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (370, 'JRO-REW', 'T-77', 'JRO-REWKOMPETENSI5', 'ORGANIZATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (371, 'JRO-REW', 'T-84', 'JRO-REWKOMPETENSI6', 'TAXATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (372, 'JRO-ODV', 'T-02', 'JRO-ODVKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (373, 'JRO-ODV', 'T-03', 'JRO-ODVKOMPETENSI2', 'BUSINESS PLANNING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (374, 'JRO-ODV', 'T-20', 'JRO-ODVKOMPETENSI3', 'DIGITAL STRATEGIC BUSINESS & PORTFOLIO MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (375, 'JRO-ODV', 'T-67', 'JRO-ODVKOMPETENSI4', 'CHANGE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (376, 'JRO-ODV', 'T-72', 'JRO-ODVKOMPETENSI5', 'EMPLOYEE & INDUSTRIAL RELATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (377, 'JRO-ODV', 'T-74', 'JRO-ODVKOMPETENSI6', 'HUMAN CAPITAL STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (378, 'JRO-ODV', 'T-77', 'JRO-ODVKOMPETENSI7', 'ORGANIZATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (379, 'JRO-ODV', 'T-83', 'JRO-ODVKOMPETENSI8', 'TALENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (380, 'JRO-EDU', 'T-01', 'JRO-EDUKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (381, 'JRO-EDU', 'T-52', 'JRO-EDUKOMPETENSI2', 'PROBLEM MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (382, 'JRO-EDU', 'T-70', 'JRO-EDUKOMPETENSI3', 'DIGITALLY CONTROLLED KNOWLEDGE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (383, 'JRO-EDU', 'T-77', 'JRO-EDUKOMPETENSI4', 'ORGANIZATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (384, 'JRO-EDU', 'T-79', 'JRO-EDUKOMPETENSI5', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (385, 'JRO-EDU', 'T-83', 'JRO-EDUKOMPETENSI6', 'TALENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (386, 'JRO-PLO', 'T-10', 'JRO-PLOKOMPETENSI1', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (387, 'JRO-PLO', 'T-15', 'JRO-PLOKOMPETENSI2', 'DIGITAL MARKETING STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (388, 'JRO-PLO', 'T-16', 'JRO-PLOKOMPETENSI3', 'PARTNERSHIP & RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (389, 'JRO-PLO', 'T-17', 'JRO-PLOKOMPETENSI4', 'PRICING & TARIFF POLICY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (390, 'JRO-PLO', 'T-18', 'JRO-PLOKOMPETENSI5', 'DIGITAL SALES STRATEGY', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (391, 'JRO-PLO', 'T-46', 'JRO-PLOKOMPETENSI6', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (392, 'JRO-PLO', 'T-69', 'JRO-PLOKOMPETENSI7', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (393, 'JRO-PLO', 'T-78', 'JRO-PLOKOMPETENSI8', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (394, 'JRO-SUP', 'T-39', 'JRO-SUPKOMPETENSI1', 'DOCUMENTATION PRODUCTION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (395, 'JRO-SUP', 'T-46', 'JRO-SUPKOMPETENSI2', 'NETWORK ACCESS (WIRELESS, WIRELINE)', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (396, 'JRO-SUP', 'T-49', 'JRO-SUPKOMPETENSI3', 'NETWORK SUPPORT FACILITIES', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (397, 'JRO-SUP', 'T-50', 'JRO-SUPKOMPETENSI4', 'NETWORK TRANSPORT & AGGREGATION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (398, 'JRO-SUP', 'T-57', 'JRO-SUPKOMPETENSI5', 'SERVICE PERFORMANCE MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (399, 'JRO-SUP', 'T-66', 'JRO-SUPKOMPETENSI6', 'BUSINESS PROCESS MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (400, 'JRO-SUP', 'T-78', 'JRO-SUPKOMPETENSI7', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (401, 'JRO-SUP', 'T-79', 'JRO-SUPKOMPETENSI8', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (402, 'JRO-ADM', 'T-02', 'JRO-ADMKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (403, 'JRO-ADM', 'T-07', 'JRO-ADMKOMPETENSI2', 'CORPORATE COMMUNICATIONS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (404, 'JRO-ADM', 'T-39', 'JRO-ADMKOMPETENSI3', 'DOCUMENTATION PRODUCTION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (405, 'JRO-ADM', 'T-63', 'JRO-ADMKOMPETENSI4', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (406, 'JRO-ADM', 'T-69', 'JRO-ADMKOMPETENSI5', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (407, 'JRO-ADM', 'T-73', 'JRO-ADMKOMPETENSI6', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (408, 'JRO-ADM', 'T-78', 'JRO-ADMKOMPETENSI7', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (409, 'JRO-ADM', 'T-85', 'JRO-ADMKOMPETENSI8', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (410, 'JRO-FMA', 'T-01', 'JRO-FMAKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (411, 'JRO-FMA', 'T-21', 'JRO-FMAKOMPETENSI2', 'APPLICATION DEVELOPMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (412, 'JRO-FMA', 'T-39', 'JRO-FMAKOMPETENSI3', 'DOCUMENTATION PRODUCTION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (413, 'JRO-FMA', 'T-63', 'JRO-FMAKOMPETENSI4', 'ACCOUNTING STANDARDS & REPORTING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (414, 'JRO-FMA', 'T-69', 'JRO-FMAKOMPETENSI5', 'CORPORATE FINANCIAL PLANNING & ANALYSIS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (415, 'JRO-FMA', 'T-76', 'JRO-FMAKOMPETENSI6', 'LEGAL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (416, 'JRO-FMA', 'T-78', 'JRO-FMAKOMPETENSI7', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (417, 'JRO-FMA', 'T-85', 'JRO-FMAKOMPETENSI8', 'TREASURY MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (418, 'JRO-PRP', 'T-02', 'JRO-PRPKOMPETENSI1', 'BUSINESS PARTNERING', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (419, 'JRO-PRP', 'T-64', 'JRO-PRPKOMPETENSI2', 'ASSET MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (420, 'JRO-PRP', 'T-73', 'JRO-PRPKOMPETENSI3', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (421, 'JRO-PRP', 'T-76', 'JRO-PRPKOMPETENSI4', 'LEGAL MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (422, 'JRO-PRP', 'T-78', 'JRO-PRPKOMPETENSI5', 'PROCUREMENT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (423, 'JRO-PRP', 'T-79', 'JRO-PRPKOMPETENSI6', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (424, 'JRO-HEA', 'T-01', 'JRO-HEAKOMPETENSI1', 'BUSINESS & INDUSTRY ACUMEN', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (425, 'JRO-HEA', 'T-10', 'JRO-HEAKOMPETENSI2', 'CUSTOMER RELATIONSHIP MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (426, 'JRO-HEA', 'T-39', 'JRO-HEAKOMPETENSI3', 'DOCUMENTATION PRODUCTION', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (427, 'JRO-HEA', 'T-68', 'JRO-HEAKOMPETENSI4', 'COMPENSATION & BENEFITS', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (428, 'JRO-HEA', 'T-73', 'JRO-HEAKOMPETENSI5', 'GOVERNANCE & COMPLIANCE', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (429, 'JRO-HEA', 'T-79', 'JRO-HEAKOMPETENSI6', 'PROGRAM & PROJECT MANAGEMENT', 'Telkom', '1', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (430, '', 'TS001', NULL, 'Hub Management System', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', 456, '2024-01-24 00:00:00');
INSERT INTO `r_tna_kompetensi` VALUES (431, '', 'TS002', NULL, 'Downstream Service Delivery', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', 456, '2024-01-24 00:00:00');
INSERT INTO `r_tna_kompetensi` VALUES (432, '', 'TS003', NULL, 'Tech & Maintanance Support', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (433, '', 'TS004', NULL, 'Satellite Transponder & Carrier Service', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (434, '', 'TS005', NULL, 'Satellite Control Operation', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (435, '', 'TS006', NULL, 'Satellite Data Analysis', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (436, '', 'TS007', NULL, 'Orbital Planning & Operation', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (437, '', 'TS008', NULL, 'Ground Control Segment', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (438, '', 'TS009', NULL, 'Spacecarft Design & Engineering', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (439, '', 'TS010', NULL, 'Satellite-specialized support', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_kompetensi` VALUES (440, '', 'TS011', NULL, 'Business Enabler', 'Telkomsat', '0', '1', 456, '2024-01-24 00:00:00', NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_kompetensi_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_kompetensi_jabatan`;
CREATE TABLE `r_tna_kompetensi_jabatan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_jabatan_id` int NULL DEFAULT NULL,
  `r_tna_job_role_id` int NULL DEFAULT NULL,
  `r_tna_job_competence_id` int NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_kompetensi_jabatan
-- ----------------------------

-- ----------------------------
-- Table structure for r_tna_lembaga
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_lembaga`;
CREATE TABLE `r_tna_lembaga`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_lembaga` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nama_pic` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `telp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `website` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_lembaga
-- ----------------------------
INSERT INTO `r_tna_lembaga` VALUES (1, 'PT. Samudra Karya Mustika', 'Deni', '0857-3432-4533, 0819-6733-8722', 'www.skmtraining.co.id', 'Ruko Tritunggal B8, Salakan, Bangunharjo, Sewon, Bantul Regency, Special Region of Yogyakarta 55188', '1', 456, '2024-01-23 00:00:00', NULL, NULL);
INSERT INTO `r_tna_lembaga` VALUES (5, NULL, NULL, NULL, NULL, NULL, '1', 456, '2024-01-23 00:00:00', NULL, NULL);
INSERT INTO `r_tna_lembaga` VALUES (6, NULL, NULL, NULL, NULL, NULL, '1', 456, '2024-01-23 00:00:00', NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_lembaga_detail
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_lembaga_detail`;
CREATE TABLE `r_tna_lembaga_detail`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_lembaga_id` int NULL DEFAULT NULL,
  `nama_pelatihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jenis_pelatihan` enum('Pelatihan','Sertifikasi') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT 'pelatihan / sertifikasi',
  `metoda` enum('Online','Offline','Blended') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `kapasitas` int NULL DEFAULT NULL,
  `biaya` double NULL DEFAULT NULL,
  `periode` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_lembaga_detail
-- ----------------------------
INSERT INTO `r_tna_lembaga_detail` VALUES (2, 0, '34', 'Pelatihan', 'Online', 344, 34444, NULL, '1', 456, '2024-01-23 00:00:00', NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_metoda_pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_metoda_pelatihan`;
CREATE TABLE `r_tna_metoda_pelatihan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `label` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_metoda_pelatihan
-- ----------------------------
INSERT INTO `r_tna_metoda_pelatihan` VALUES (1, 'Online', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_metoda_pelatihan` VALUES (2, 'Offline', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_metoda_pelatihan` VALUES (3, 'Blended', '1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_tipe_pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_tipe_pelatihan`;
CREATE TABLE `r_tna_tipe_pelatihan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_tipe_pelatihan
-- ----------------------------
INSERT INTO `r_tna_tipe_pelatihan` VALUES (1, 'Pelatihan', '1', NULL, NULL, NULL, NULL);
INSERT INTO `r_tna_tipe_pelatihan` VALUES (2, 'Sertifikasi', '1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_training
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_training`;
CREATE TABLE `r_tna_training`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_kompetensi_code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `type` enum('Pelatihan','Sertifikasi') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_training
-- ----------------------------
INSERT INTO `r_tna_training` VALUES (8, 'T-02', 'P240001', 'Pelatihan Organization Bussiness', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (9, 'T-02', 'P240002', 'Pelatihan Bussiness Partnering', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (10, 'T-02', 'S240001', 'Sertifikasi Public Speaking', 'Sertifikasi', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (11, 'T-10', 'P240003', 'Pelatihan Customer Relationship Management', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (12, 'T-10', 'P240004', 'Pelatihan Communication Skill & Presentation Skill', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (13, 'T-10', 'P240005', 'Sertifikasi Public Speaking', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (14, 'T-16', 'P240006', 'Pelatihan Partnership & Relationship Management', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (15, 'T-16', 'P240007', 'Pelatihan Bussiness Partnering', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (16, 'T-16', 'P240008', 'Sertifikasi Public Speaking', 'Sertifikasi', '1', 456, '2024-01-24 00:00:00', 456, '2024-01-24 00:00:00');
INSERT INTO `r_tna_training` VALUES (17, 'T-16', 'S240002', 'Sertifikasi Business Relationship', 'Sertifikasi', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (18, 'T-74', 'P240009', 'Pelatihan Resource Strategy', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (19, 'T-74', 'P240010', 'Pelatihan Partnership & Relationship Management', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (20, 'T-74', 'S240003', 'Sertifikasi HUman Resouces Management', 'Sertifikasi', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (21, 'T-74', 'S240004', 'Sertifikasi Strategy Business', 'Sertifikasi', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (22, 'T-77', 'P240011', 'Pelatihan Organization Development', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (23, 'T-77', 'S240005', 'Sertifikasi Human Resources Development', 'Sertifikasi', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (24, 'T-83', 'P240012', 'Pelatihan Talent Management', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);
INSERT INTO `r_tna_training` VALUES (25, 'T-83', 'P240013', 'Pelatihan Digitalisasi Talent', 'Pelatihan', '1', 456, '2024-01-24 00:00:00', NULL, NULL);

-- ----------------------------
-- Table structure for r_tna_training_temp
-- ----------------------------
DROP TABLE IF EXISTS `r_tna_training_temp`;
CREATE TABLE `r_tna_training_temp`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_tna_competence_id` int NULL DEFAULT NULL,
  `r_tna_competence_code` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `type` enum('Pelatihan','Sertifikasi') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_code` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '1',
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_tna_training_temp
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `salt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `activation_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_time` int UNSIGNED NULL DEFAULT NULL,
  `remember_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_on` int UNSIGNED NOT NULL,
  `last_login` int UNSIGNED NULL DEFAULT NULL,
  `active` tinyint UNSIGNED NULL DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `m_karyawan_id` int NOT NULL,
  `firebase_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 853 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '127.0.0.1', 'administrator', '$2y$08$on5.tsgp0Eo7EF7S9fFLuOplHe8Ma4204bNEXts6VFA1KSO/HIbfy', '', 'admin@gmail.com', '', NULL, NULL, 'm/Pe.Qv4KXHNPcLChf.mMO', 1268889823, 1566715755, 1, 'Admin', 'istrator', 'ADMIN', '0', 104, NULL);
INSERT INTO `users` VALUES (3, '127.0.0.1', 'ihsanarifr', '$2a$08$WkFHUhVcn/vzMMvrnkBqtOom.y.FMphbQ5ZwaE4Q8UIe3V9YdJM1O', NULL, 'ihsanarifr@gmail.com', NULL, NULL, NULL, NULL, 1497717678, 1566254760, 1, NULL, NULL, NULL, NULL, 249, NULL);
INSERT INTO `users` VALUES (4, '203.99.96.97', 'ririn242526', '$2a$08$vXBcP8Mx97IkE/F1WB27fe3Ux4sjWYsD2yZKUHIBJAI3hvuKTB1lm', NULL, 'nurul.qamariyah@gmail.com', NULL, NULL, NULL, '4X5lbRPinPefOJL8I47Ase', 1499327212, 1506327732, 1, NULL, NULL, NULL, NULL, 104, NULL);
INSERT INTO `users` VALUES (456, '10.99.226.102', '916031', '$2y$08$on5.tsgp0Eo7EF7S9fFLuOplHe8Ma4204bNEXts6VFA1KSO/HIbfy', NULL, 'wendy@gmail.com', NULL, NULL, NULL, 'GNcFPBfybEf6WXoqwGWlWe', 1547904085, 1570158658, 1, NULL, NULL, NULL, NULL, 628, NULL);

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups`  (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `group_id` mediumint UNSIGNED NOT NULL
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES (1, 83, 55);
INSERT INTO `users_groups` VALUES (0, 456, 55);

-- ----------------------------
-- View structure for v_organisasi
-- ----------------------------
DROP VIEW IF EXISTS `v_organisasi`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_organisasi` AS select `t5`.`id` AS `id`,`t5`.`r_jenis_organisasi_id` AS `r_jenis_organisasi_id`,`t1`.`id` AS `i1`,`t1`.`nama` AS `o1`,`t1`.`level` AS `l1`,`t1`.`kode` AS `k1`,`t2`.`id` AS `i2`,`t2`.`nama` AS `o2`,`t2`.`level` AS `l2`,`t2`.`kode` AS `k2`,`t3`.`id` AS `i3`,`t3`.`nama` AS `o3`,`t3`.`level` AS `l3`,`t3`.`kode` AS `k3`,`t4`.`id` AS `i4`,`t4`.`nama` AS `o4`,`t4`.`level` AS `l4`,`t4`.`kode` AS `k4`,`t5`.`id` AS `i5`,`t5`.`nama` AS `o5`,`t5`.`level` AS `l5`,`t5`.`kode` AS `k5` from (`m_organisasi` `t5` left join (`m_organisasi` `t4` left join (`m_organisasi` `t3` left join (`m_organisasi` `t2` left join `m_organisasi` `t1` on((`t2`.`parent_id` = `t1`.`id`))) on((`t3`.`parent_id` = `t2`.`id`))) on((`t4`.`parent_id` = `t3`.`id`))) on((`t5`.`parent_id` = `t4`.`id`)));

SET FOREIGN_KEY_CHECKS = 1;
