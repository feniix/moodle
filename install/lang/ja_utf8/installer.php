<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = '指定されたadminディレクトリが正しくありません。';
$string['admindirname'] = 'Adminディレクトリ';
$string['admindirsettinghead'] = '管理ディレクトリの設定中 ...';
$string['admindirsettingsub'] = 'まれなケースですが /admin をコントロールパネルまたはその他のページにアクセスするための特別なURIとして使用しているウェブホストがあります。残念ですが、これは標準的なMoodle管理ページのロケーションと衝突します。あなたのインストールに関するadminディレクトリをリネームすることで、この衝突を回避できます。例えば: <br /> <br /><b>moodleadmin</b><br /> <br />
これによりMoodleの管理ページへのリンクは修正されます。';
$string['bypassed'] = 'バイパス';
$string['cannotcreatelangdir'] = 'langディレクトリを作成できません。';
$string['cannotcreatetempdir'] = 'tempディレクトリを作成できません。';
$string['cannotdownloadcomponents'] = 'コンポーネットをダウンロードできません。';
$string['cannotdownloadzipfile'] = 'ZIPファイルをダウンロードできません。';
$string['cannotfindcomponent'] = 'コンポーネントを見つけることができません。';
$string['cannotsavemd5file'] = 'mp5ファイルを保存できません。';
$string['cannotsavezipfile'] = 'ZIPファイルを保存できません。';
$string['cannotunzipfile'] = 'ZIPファイルを解凍できません。';
$string['caution'] = '警告';
$string['check'] = 'チェック';
$string['chooselanguagehead'] = '言語を選択してください。';
$string['chooselanguagesub'] = 'インストールのみに使用する言語を選択してください。この言語は、サイトのデフォルト言語としても使用されます。サイト言語は、後で変更することが可能です。';
$string['closewindow'] = 'ウィンドウを閉じる';
$string['compatibilitysettingshead'] = 'PHP設定を確認しています ...';
$string['compatibilitysettingssub'] = 'Moodleを適切に動作させるためには、あなたのサーバがこれらすべてのテストに通る必要があります。';
$string['componentisuptodate'] = 'コンポーネントは最新です。';
$string['configfilenotwritten'] = 'インストールスクリプトは、自動的にあなたの選択した設定を反映したconfig.phpファイルを作成することができませんでした。おそらく、Moodleディレクトリに書き込み権が無いためだと思われます。下記のコードをconfig.phpという名称のファイルとしてMoodleのルートディレクトリにコピーすることができます。';
$string['configfilewritten'] = 'config.phpが正常に作成されました。';
$string['configurationcompletehead'] = '設定が完了しました。';
$string['configurationcompletesub'] = 'Moodleは、Moodleインストレーションルートへの設定内容の保存を試みました。';
$string['continue'] = '続ける';
$string['ctyperecommended'] = 'あなたのサイトが非ラテン言語をサポートしている場合、サイトパフォーマンスを改善するため、PHP ctype拡張モジュールのインストールを強くお勧めします。';
$string['ctyperequired'] = 'サイトパフォーマンスの改善および多言語サポートを提供するため、MoodleではPHP ctype拡張モジュールが必須です。';
$string['curlrecommended'] = 'Moodleネットワーキング機能を有効にするため、cURLライブラリのインストールを強くお勧めします。';
$string['curlrequired'] = 'Moodleリポジトリと通信するため、MoodleではPHP cURL拡張モジュールが必須です。';
$string['customcheck'] = 'その他のチェック';
$string['database'] = 'データベース';
$string['databasecreationsettingshead'] = 'ほとんどのMoodleデータが保存されるデータベース設定を行ってください。このデータベースはインストーラーにより、下記の設定が指定された形で自動的に作成されます。';
$string['databasecreationsettingssub'] = '<b>タイプ:</b> インストーラーにより「mysql」に修正されました。<br />
<b>ホスト:</b> インストーラーにより「localhost」に修正されました。<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> インストーラーにより「root」に修正されました。<br />
<b>パスワード:</b> あなたのデータベースパスワードです。<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用される任意の接頭辞です。';
$string['databasesettingshead'] = 'ほとんどのMoodleデータが保存されるデータベース設定を行います。このデータベースは、アクセスするためのユーザ名およびパスワードとともにすでに作成されている必要があります。';
$string['databasesettingssub'] = '<b>タイプ:</b> mysql または postgres7<br />
<b>ホスト:</b> 例 localhost または db.isp.com<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (任意)';
$string['databasesettingssub_mssql'] = '<b>タイプ:</b> SQL*Server (非UTF-8) <b><strong class=\"errormsg\">実験用! (運用環境には使用しないでください。)</strong></b><br />
<b>ホスト:</b> 例 localhost または db.isp.com<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (必須)';
$string['databasesettingssub_mssql_n'] = '<b>タイプ:</b> SQL*Server (UTF-8)<b><font color=\"red\">実験用! (運用環境には使用しないでください。)</font></b><br />
<b>ホスト:</b> 例 localhost または db.isp.com<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (必須)';
$string['databasesettingssub_mysql'] = '<b>タイプ:</b> MySQL<br />
<b>ホスト:</b> 例 localhost または db.isp.com<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (任意)';
$string['databasesettingssub_mysqli'] = '<b>タイプ:</b> Improved MySQL<br />
<b>ホスト:</b> 例 localhost または db.isp.com<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (任意)';
$string['databasesettingssub_oci8po'] = '<b>タイプ:</b> Oracle<br />
<b>ホスト:</b> 使用されませんので空白にしてください。<br />
<b>データベース名:</b>tnsnames.oraのコネクション名<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (必須、最大2cc.)';
$string['databasesettingssub_odbc_mssql'] = '<b>タイプ:</b> SQL*Server (ODBC経由) <b><strong class=\"errormsg\">実験用! (運用環境には使用しないでください。)</strong></b><br />
<b>ホスト:</b>ODBCコントロールパネルのDSN名<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (必須)';
$string['databasesettingssub_postgres7'] = '<b>タイプ:</b> PostgreSQL<br />
<b>ホスト:</b> 例 localhost または db.isp.com<br />
<b>データベース名:</b> 例 moodle<br />
<b>ユーザ名:</b> データベースのユーザ名<br />
<b>パスワード:</b> データベースのパスワード<br />
<b>テーブル接頭辞:</b> すべてのテーブル名に使用する接頭辞 (必須)';
$string['databasesettingswillbecreated'] = '<b>メモ:</b> データベースが存在していない場合、インストーラーはデータベースの自動作成を試みます。';
$string['dataroot'] = 'データディレクトリ';
$string['datarooterror'] = 'あなたが指定した「データディレクトリ」が見つからないか、作成されませんでした。パスを訂正するか、ディレクトリを手動で作成してください。';
$string['datarootpublicerror'] = 'あなたが指定した「データディレクトリ」は、ウェブ経由でアクセスすることができます。異なるディレクトリを使用してください。';
$string['dbconnectionerror'] = 'あなたが指定したデータベースに接続できませんでした。データベース設定を確認してください。';
$string['dbcreationerror'] = 'データベース作成エラー。設定で指定された名称のデータベースを作成できませんでした。';
$string['dbhost'] = 'ホストサーバ';
$string['dbprefix'] = 'テーブル接頭辞';
$string['dbtype'] = 'タイプ';
$string['dbwrongencoding'] = '選択したデータベースは、非推奨のエンコーディング ($a) で動作しています。代わりにユニコード (UTF-8) でエンコードされたデータベースの使用をお勧めします。下記の「DBエンコーディングテストをスキップ」をチェックすることで、このテストをバイパスできますが、将来的に問題が発生する恐れがあります。';
$string['dbwronghostserver'] = '上記説明の「ホスト」ルールに従ってください。';
$string['dbwrongnlslang'] = 'あなたのウェブサーバのNLS_LANG環境変数には、AL32UTF8文字セットを使用してください。OCI8を適切に設定するには、PHPドキュメンテーションをご覧ください。';
$string['dbwrongprefix'] = '上記説明の「テーブル接頭辞」ルールに従ってください。';
$string['directorysettingshead'] = 'Moodleのインストール先を確認してください。';
$string['directorysettingssub'] = '<p><b>ウェブアドレス:</b>
Moodleにアクセスする完全なウェブアドレスを指定してください。複数のURIよりアクセス可能な場合は、学生が利用する最も自然なURIを選択してください。末尾にスラッシュを付けないでください。</p>
<br />
<br />
<p><b>Moodleディレクトリ:</b>
インストール先の完全なディレクトリパスを指定してください。大文字/小文字が間違っていないか確認してください。</p>
<br />
<br />
<p><b>データディレクトリ:</b>
アップロードされたファイルをMoodleが保存する場所が必要です。 このディレクトリは、ウェブサーバのユーザ (通常は「nobody」または「apache」) が読み込みおよび書き込みできるようにしてください。しかし、ウェブから直接アクセスできないようにしてください。データディレクトリがない場合、インストーラーは作成を試みます。</p>';
$string['dirroot'] = 'Moodleディレクトリ';
$string['dirrooterror'] = '「Moodleディレクトリ」設定が間違っているようです - インストール済みMoodleが見つかりませんでした。下記の値がリセットされました。';
$string['download'] = 'ダウンロード';
$string['downloadedfilecheckfailed'] = 'ダウンロードファイルのチェックに失敗しました。';
$string['downloadlanguagebutton'] = '「 $a 」言語パックをダウンロードする';
$string['downloadlanguagehead'] = '言語パックのダウンロード';
$string['downloadlanguagenotneeded'] = 'デフォルトの言語パック「 $a 」でインストール処理を続けることができます。';
$string['downloadlanguagesub'] = 'あなたは、言語パックをダウンロードして、この言語でインストールを継続することができます。<br /><br />もし、あなたが言語パックをダウンロードできない場合、インストールは英語で継続されます。 (インストールの完了後、さらに言語パックをダウンロードして、インストールすることができます。)';
$string['environmenterrortodo'] = 'このバージョンのMoodleをインストールする前に、発見された動作環境の問題 (エラー) を解消してください!';
$string['environmenthead'] = 'あなたの環境を確認しています ...';
$string['environmentrecommendcustomcheck'] = 'このテストに不適合の場合、潜在的な問題があることを意味します。';
$string['environmentrecommendinstall'] = '最適な動作のため、インストールおよび有効化してください。';
$string['environmentrecommendversion'] = 'バージョン $a->needed 以上を推奨します。あなたは現在 $a->current を使用しています。';
$string['environmentrequirecustomcheck'] = 'このテストはパスする必要があります。';
$string['environmentrequireinstall'] = '必ずインストールおよび有効化してください。';
$string['environmentrequireversion'] = 'バージョン $a->needed 以上が必須です。あなたは現在 $a->current を使用しています。';
$string['environmentsub'] = 'あなたのシステムに関する様々な要素が、システム要件に合致するか確認しています。';
$string['environmentxmlerror'] = '環境データ ($a->error_code) の読み込み中にエラーが発生しました。';
$string['error'] = 'エラー';
$string['fail'] = '失敗';
$string['fileuploads'] = 'ファイルアップロード';
$string['fileuploadserror'] = 'これは有効にしてください。';
$string['fileuploadshelp'] = '<p>あなたのサーバでは、ファイルのアップロードができないようです。</p>
<p>Moodleのインストールは可能ですが、ファイルのアップロードができない場合は、コースファイルやユーザプロファイルのイメージをアップロードすることができません。</p>
<p>ファイルアップロードを可能にするには、あなた (またはシステム管理者) があなたのシステムのメインphp.iniファイルを編集して、<b>file_uploads</b> を「1」にする必要があります。</p>';
$string['gdversion'] = 'GDバージョン';
$string['gdversionerror'] = 'イメージの処理および作成を行うにはGDライブラリが必要です。';
$string['gdversionhelp'] = '<p>あなたのサーバには、GDがインストールされていないようです。</p>

<p>GDは、Moodleがイメージ (ユーザプロファイルアイコン等) を処理したり、新しいイメージ (ロググラフ等) を作成するためにPHPが必要とするライブラリです。Moodleは、GDなしでも動作します -  イメージ処理等が使用できないだけです。</p>

<p>Unix環境下で、GDをPHPにインストールするには、PHPを --with-gd パラメータでコンパイルしてください。</p>

<p>Windows環境下では、php.iniでphp_gd2.dllを参照している行のコメントアウトを取り除いてください。</p>';
$string['globalsquotes'] = '安全では無いGlobalsのハンドリング';
$string['globalsquoteserror'] = 'PHP設定を修正してください: register_globalsを「Off」および/またはmagic_quotes_gpcを「On」';
$string['globalsquoteshelp'] = '<p>Magic Quotes GPCの無効化およびRegister Globalsの有効化の同時設定お勧めできません。</p>

<p>php.iniに関する推奨設定は <b>magic_quotes_gpc = On</b> および <b>register_globals = Off</b> です。</p>

<p>あなたが php.ini にアクセスできない場合、Moodleディレクトリの中に .htaccess という名称のファイルを次のように記述することができます:</p>
<blockquote><div>php_value magic_quotes_gpc On</div></blockquote>
<blockquote><div>php_value register_globals Off</div></blockquote>';
$string['globalswarning'] = '<p><strong>セキュリティ警告</strong>: Moodleを適切に動作させるため、<br />現在のPHP設定を変更する必要があります。<p/><p><code>register_globals=off</code>  の<em>設定を行って</em>ください。<p>この設定は、<code>php.ini</code>、Apache/IIS <br />設定、または <code>.htaccess</code> ファイルの編集により管理することができます。</p>';
$string['help'] = 'ヘルプ';
$string['iconvrecommended'] = 'より良いパフォーマンスを得るため、ICONVライブラリのインストールおよび稼動を強くお勧めします。あなたのサイトがラテン文字以外をサポートしている場合、特にお勧めします。';
$string['info'] = '情報';
$string['installation'] = 'インストレーション';
$string['invalidmd5'] = '無効なmp5ファイルです。';
$string['langdownloaderror'] = '残念ですが、言語「 $a 」がインストールされていません。インストール処理は英語で継続されます。';
$string['langdownloadok'] = '言語「 $a 」が正常にインストールされました。インストール処理は、この言語で継続されます。';
$string['language'] = '言語設定';
$string['magicquotesruntime'] = 'Magic Quotesランタイム';
$string['magicquotesruntimeerror'] = 'これは無効にしてください。';
$string['magicquotesruntimehelp'] = '<p>Moodleを正常に動作させるためには、Magic quotesランタイムを無効にする必要があります。</p>

<p>通常はデフォルトで無効にされています ... php.iniの <b>magic_quotes_runtime</b> 設定を確認してください。</p>

<p>php.iniファイルにアクセスできない場合は、Moodleディレクトリの.htaccessファイルに次の行を追加してください:</p>
<blockquote><div>php_value magic_quotes_runtime Off</div></blockquote>';
$string['mbstringrecommended'] = 'より良いパフォーマンスを得るため、mbstringライブラリのインストールおよび稼動を強くお勧めします。あなたのサイトがラテン文字以外をサポートしている場合、特にお勧めします。';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'PHPのmemory limitが低すぎます ... 後で問題が発生する可能性があります。';
$string['memorylimithelp'] = '<p>現在、サーバのPHPメモリー制限が $a に設定されています。</p>
<p>この設定では、Moodleのメモリーに関わるトラブルが発生します。 特に多くのモジュールを使用したり、多くのユーザがMoodleを使用する場合に、トラブルが発生します。</p>
<p>可能でしたら、PHPのメモリー制限上限を40M以上に設定されることをお勧めします。この設定を実現するために、いくつかの方法があります:
<ol>
<li>コンパイル可能な場合は、PHPを<i>--enable-memory-limit</i>オプションでコンパイルしてください。
これにより、Moodle自身がメモリー制限を設定することが可能になります。</li>
<li>php.iniファイルにアクセスできる場合は、<b>memory_limit</b>設定を40Mのように変更することができます。php.iniファイルにアクセスできない場合は、管理者に変更を依頼してください。</li>
<li>いくつかのPHPサーバでは、下記の行を含む.htaccessファイルをMoodleディレクトリに作成することができます:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>しかし、この設定が<b>すべての</b>PHPページの動作を妨げる場合もあります。ページ閲覧中にエラーが表示される場合は、.htaccessファイルを削除してください。</p></li>
</ol>';
$string['missingrequiredfield'] = 'いくつかの必須入力フィールドが入力されていません。';
$string['moodledocslink'] = 'このページのMoodle Docs';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'PHPのMSSQL拡張モジュールが適切に設定されていないため、SQL*Serverと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['mssql_n'] = 'SQL*Server UTF-8サポート (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'あなたのサイトがiso-8859-1 (ラテン) 言語のみ使用している場合、現在インストールされている MySQL 4.1.12 (またはそれ以上) を使用することができます。';
$string['mysql416required'] = 'Moodle1.6では、将来すべてのデータをUTF-8に変換するため、MySQL 4.1.16が要求される最低限のバージョンです。';
$string['mysqlextensionisnotpresentinphp'] = 'PHPのMySQL拡張モジュールが適切に設定されていないため、MySQLと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHPのMySQLi拡張モジュールが適切に設定されていないため、MySQLと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。MySQLi拡張モジュールは、PHP4では使用できません。';
$string['name'] = '名称';
$string['next'] = '次へ';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHPのOCI8拡張モジュールが適切に設定されていないため、Oracleと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['odbcextensionisnotpresentinphp'] = 'PHPのODBC拡張モジュールが適切に設定されていないため、SQL*Serverと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['ok'] = 'OK';
$string['opensslrecommended'] = 'Moodleネットワーキング機能を有効にするため、OpenSSLライブラリのインストールを強くお勧めします。';
$string['pass'] = 'パス';
$string['password'] = 'パスワード';
$string['pgsqlextensionisnotpresentinphp'] = 'PHPのPGSQL拡張モジュールが適切に設定されていないため、PostgreSQLと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['php50restricted'] = 'PHP 5.0.x には数多くの既知の問題があります。5.1.x にアップグレードするか、4.3.x または 4.4.x にダウングレードしてください。';
$string['phpversion'] = 'PHPバージョン';
$string['phpversionerror'] = 'PHPバージョンは少なくとも 4.3.0 または 5.1.0 をお使いください (5.0.x には既知の多数の問題があります)。'; // ORPHANED
$string['phpversionhelp'] = '<p>Moodleには、少なくとも 4.3.0 または 5.1.0 のPHPバージョンが必要です (5.0.x には既知の多数の問題があります)。</p>
<p>現在、バージョン $a が動作しています。</p>
<p>PHPをアップグレードするか、新しいバージョンがインストールされているホストに移動してください!<br />
(5.0.x の場合、バージョン 4.4.x にダウングレードすることもできます。)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = '前へ';
$string['qtyperqpwillberemoved'] = 'アップグレード中、RQP問題タイプは削除されます。あなたはこの問題タイプを使用していませんので、トラブルが発生することはありません。';
$string['qtyperqpwillberemovedanyway'] = 'アップグレード中、RQP問題タイプは削除されます。あなたのデータベース内にRQP問題タイプが登録されています。アップグレードを続ける前に、 http://moodle.org/mod/data/view.php?d=13&amp;rid=797 から対応するプログラムをインストールしない場合、これらの問題は動作しなくなります。';
$string['remotedownloaderror'] = 'あなたのサーバへのコンポーネントのダウンロードに失敗しました。プロクシ設定を確認してください。PHP cURL拡張モジュールの使用を強くお勧めします。<br /><br /><a href=\"$a->url\">$a->url</a>ファイルを手動でダウンロードした後、あなたのサーバの「$a->dest」にコピーおよび解凍してください。';
$string['remotedownloadnotallowed'] = 'あなたのサーバーにコンポーネントをダウンロードすることができません (allow_url_fopen が無効)。<br /><br /><a href=\"$a->url\">$a->url</a> ファイルを手動でダウンロードして、サーバの「 $a->dest 」にコピーした後、解凍してください。';
$string['report'] = 'レポート';
$string['restricted'] = '使用禁止';
$string['safemode'] = 'セーフモード';
$string['safemodeerror'] = 'セーフモードが有効の場合、Moodleに問題が発生する場合があります。';
$string['safemodehelp'] = '<p>セーフモードが有効にされている場合、Moodleには様々な問題が発生する場合があります。 特に新しいファイルを作成することができません。</p>
<p>通常セーフモードは、被害妄想を持ったウェブホストで有効にされています。Moodleサイト用に別の新しいウェブホスティング会社を探してください。</p>
<p>セーフモード環境下で、インストール作業を続けることも可能ですが、後でいくつかの問題が発生することが予想されます。</p>';
$string['serverchecks'] = 'サーバチェック';
$string['sessionautostart'] = 'セッション自動スタート';
$string['sessionautostarterror'] = 'これは無効にしてください。';
$string['sessionautostarthelp'] = '<p>Moodleはセッションサポートを必要とします。また、セッションサポートなしでは動作しません。</p>
<p>セッションは、php.iniファイルで有効にすることができます ... session.auto_startパラメータを探してください。</p>';
$string['skipdbencodingtest'] = 'DBエンコーディングテストをスキップ';
$string['status'] = '状態';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = '日本語';
$string['unicoderecommended'] = 'あなたのすべてのデータをユニコードフォーマット (UTF-8) で保存することをお勧めします。Moodleの新しいインストールは、ユニコードをデフォルトキャラクタにセットしたデータベースで実行してください。アップグレードの場合、UTF-8移行プロセスを実行してださい (詳細は管理ページをご覧ください)。';
$string['unicoderequired'] = 'あなたのすべてのデータをユニコードフォーマット (UTF-8) で保存することが必須です。Moodleの新しいインストールは、ユニコードをデフォルトキャラクタにセットしたデータベースで実行してください。アップグレードの場合、UTF-8移行プロセスを実行してださい (詳細は管理ページをご覧ください)。';
$string['user'] = 'ユーザ';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'インストールが正常に完了したため、このページをご覧いただいています。あなたのコンピュータで <strong>$a->packname $a->packversion</strong> パッケージを起動してください。おめでとうございます!';
$string['welcomep30'] = 'このリリース <strong>$a->installername</strong> には、<strong>Moodle</strong> で環境を作成するアプリケーションが含まれています。すなわち:';
$string['welcomep40'] = 'パッケージには <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong> も含まれています。';
$string['welcomep50'] = 'このパッケージ内のすべてのアプリケーションの使用は個々のライセンスによって規定されています。全体の <strong>$a->installername</strong> パッケージは <a href=\"http://www.opensource.org/docs/definition_plain.html\">オープンソース</a> であり、<a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>ライセンスの下で配布されています。';
$string['welcomep60'] = '次からのページは、あなたのコンピュータに <strong>Moodle</strong> を簡単に設定およびセットアップする手順にしたがって進みます。デフォルトの設定を使用することも、必要に応じて任意で設定を変更することもできます。';
$string['welcomep70'] = '<strong>Moodle</strong>のセットアップを続けるには「次へ」ボタンをクリックしてください。';
$string['wrongdestpath'] = '宛先パスが正しくありません。';
$string['wrongsourcebase'] = 'ソースURIベースが正しくありません。';
$string['wrongzipfilename'] = 'ZIPファイル名が正しくありません。';
$string['wwwroot'] = 'ウェブアドレス';
$string['wwwrooterror'] = '「ウェブアドレス」が正しくありません - インストール済みMoodleはそこに表示されません。下記の値はリセットされました。';
$string['xmlrpcrecommended'] = '任意のxmlrpc拡張モジュールのインストールは、Moodleネットワーキング機能に有用です。';
$string['ziprequired'] = 'MoodleではPHP Zip拡張モジュールが必須です。info-ZIPバイナリまたはPclZipライブラリは、今後使用されません。';
?>
