# OctoberCMS Agent Plugin

PHP側でユーザのブラウザ、OS、デバイスを判定するための [OctoberCMS](http://octobercms.com/) 用プラグインです。
PHPだけでなくTwigテンプレートからも利用できます。

このプラグインは [jenssegers/agent](https://github.com/jenssegers/agent) のタダのラッパーです。
jenssegers さんと更にその[ベース](https://github.com/serbanghita/Mobile-Detect) を作った serbanghita さんに感謝です。


## API
利用可能なAPIはこちら[jenssegers/agent](https://github.com/jenssegers/agent)を参考にしてください。


## 使い方
### インストール
#### composerの場合
プロジェクトのcomposer.jsonに下記を追加してください。（まだ、packagist に登録していないので `repositories` が必要になってしまいます・・・。）
```
{
    "require": [
        ...
        "pikanji/oc-agent-plugin": "dev-master"
    ],
...
    "repositories": [
        ...
        {
            "url": "https://github.com/pikanji/agent-plugin.git",
            "type": "git"
        }
}
```

プロジェクトルートから下記を実行します。
```
composer update
```

#### UIからの場合
まだ、OctoberCMSのプラグインとして登録していないので、できません・・・。


### Twigテンプレートからの利用
ページやレイアウトにコンポーネントを追加するだけで利用できます。
レイアウトに追加すれば、ページごとに追加する必要が無いのでおすすめです。


まず、準備はレイアウトの設定セクションに `[Agent]` を記述するだけです。Agentプラグイン自体の設定は何もありません。

```
description = "Default layout"

[Agent]
==
<!DOCTYPE html>
...

```

そして、テンプレートから下記のように利用できます。
```
...
{% if Agent.isFireFox() %}
...
```

### PHPからの利用
[jenssegers/agent](https://github.com/jenssegers/agent) を直接使うだけなので、そちらの README を参考にしてください。
依存関係としてすでにインストールされているので別途インストールする必要はありません。

基本的にはこのようになります。
```php
use Jenssegers\Agent\Agent;
...

$agent = new Agent();
if ($agent->isFireFox()) {
...

```
