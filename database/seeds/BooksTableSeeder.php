<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('branches')->insert([
        [
          'name' => 'tokyo',
        ],
        [
          'name' => 'fukuoka',
        ],
        [
         'name' => 'osaka',
        ],
      ]);
      DB::table('quizzes')->insert([
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '楽天のオフィスが2番目にあった場所',
          'answer' => '祐天寺',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '英語化プロジェクト開始時の社内平均TOEICスコアは526点ですが、2017年の平均は約__0点です',
          'answer' => '83',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '1997年設立当初の加盟店は13店舗でしたが、2018年現在は約__,000店舗',
          'answer' => '45',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '三木谷浩史の年齢',
          'answer' => '53',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => 'Viberが生まれた国は',
          'answer' => 'キプロス',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '楽天がジャスダックに上場した年',
          'answer' => '2000',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '楽天カード発行開始から、取引高日本一位になるまで何年かかったでしょう',
          'answer' => '13',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '楽天が所有している野球チームの正式名称',
          'answer' => '東北楽天ゴールデンイーグルス',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '創業当時(1997年)の１日当たりのGMSは32万円ですが、現在は約__億円です',
          'answer' => '50',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => 'ラクマで2018年上半期に最も人気だったブランド',
          'answer' => 'Nike',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '会社設立から上場まで_年かかった',
          'answer' => '7',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => 'ウォーリアーズの本拠地は____州',
          'answer' => 'カリフォルニア',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '2007年の楽天会員数は2300万人ですが、2017年までの10年間で約_._億人まで成長',
          'answer' => '1.1',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => 'ECは何の略　E______ C_______',
          'answer' => 'Electronic Commerce',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '１日当たりのGMSは50億円ですが、SPU時は約_00億になるでしょうか？',
          'answer' => '1',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '楽天市場ができた年',
          'answer' => '1997',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => 'イニエスタのヴィッセル神戸の背番号',
          'answer' => '8',
        ],
        [
          'nameshutsudai' => '0',
          'namekaitou' => '0',
          'quiz' => '楽天銀行の設立した年',
          'answer' => '2000',
        ],
      ]);
    }
}
