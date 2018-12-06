<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'notenote');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/i6 Ac%eP&V9 m=G!a7Jb:?jdr:>w`y+YoHkp,X;c}T@Ng;|gdL9{ao$%W07SsJg');
define('SECURE_AUTH_KEY',  'm@#l&66Tdw;Sstv=5z634,w`BXwS)P Z^pjw45DC_Ic0hqc80ee*r2i`T_o}BR#P');
define('LOGGED_IN_KEY',    '5$xl)0.Z-QCh<diB)1SFVdMN+$6B@cAUZ(<I4[Q[uZV#~z]l#3:lMN3e&L+b>p7B');
define('NONCE_KEY',        'Yn<lEs(MK l$QtPog[lo6k;}[7aUDL[~}y;I_z:]3`y|rSc]aZbZ}}g)j[m03/Jq');
define('AUTH_SALT',        '>]|MVFG[ces=RM)!b%jt3Pc;l|)lqrc6)$kOiE!kzHb^ FAd{C6N/XH<Hh#suTqA');
define('SECURE_AUTH_SALT', 'Z9bGI+,7p*_{Gi+k7 p3bsjL1,#]WnQ`S~h_pO kM(A;j8xd]ajlZg!WqLI#F-jQ');
define('LOGGED_IN_SALT',   '!zz~ki^KE}FqAX+38utN<TWD8-w~Z<.Fw&fVK+:{^7!:kD1dnO?;)xx0.=@q-8m&');
define('NONCE_SALT',       'R;3%@<ni6IxPaU0lT[h|>eA VQQa]/fiF2~3O0?1JQ3=BC+Xtr9Z6s<s*|}EIN)/');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');
