<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brokers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('img')->nullable();
            $table->string('name');
            $table->integer('rating')->nullable();
            $table->integer('spread');
            $table->string('commision');
            $table->integer('deposit');
            $table->text('review')->nullable();
            $table->text('link')->nullable();
            $table->boolean('manual')->nullable();
            $table->boolean('disabled')->nullable();
            $table->boolean('local');
            $table->timestamps();
        });
        DB::table('brokers')->insert(
            array(
                array(
                    'name' => "MONEX",
                    'spread' => "0",
                    'commision' => "$2 / lot",
                    'deposit' => "500",
                    'local' => true,
                    'manual' => '1',
                    'disabled' => '0',
                    'link' => 'https://mifx.com/open-live-account.php?adv=169136',
                    'img' => '<img src="https://mifx.com/images/monexlogo.svg">',
                ),
                array(
                    'name' => "Garuda Berjangka",
                    'spread' => "2",
                    'commision' => "$10 / lot",
                    'deposit' => "100",
                    'local' => true,
                    'manual' => '1',
                    'disabled' => '1',
                    'link' => '',
                    'img' => '<img src="http://garudaberjangka.com/wp-content/themes/Avada/assets/images/logo.png">',
                ),
                array(
                    'name' => "Soegee Futures",
                    'spread' => "1",
                    'commision' => "$10 / lot",
                    'deposit' => "100",
                    'local' => true,
                    'manual' => '1',
                    'disabled' => '1',
                    'link' => '',
                    'img' => '<img src="http://soegeefx.com/wp-content/uploads/2018/02/SOEGEEFUTURESPT-18Pt.png">',
                ),
                array(
                    'name' => "GKInvest",
                    'spread' => "1",
                    'commision' => "$5 / lot",
                    'deposit' => "200",
                    'local' => true,
                    'manual' => '1',
                    'disabled' => '0',
                    'link' => 'http://www.gkinvest.co.id/?refcode=SFB63',
                    'img' => '<img src="https://cdn.gkinvest.co.id/LP/img/ContentInvest_v1/logo.png">',
                ),
                array(
                    'name' => "GKFX Prime",
                    'spread' => "1",
                    'commision' => "$7 / lot",
                    'deposit' => "200",
                    'local' => false,
                    'manual' => '1',
                    'disabled' => '1',
                    'link' => '',
                    'img' => '<img src="https://cdnr.gkfxprime.com/NFCA/ENG/img/banner/logoPopup.png?v=1.0.142">',
                ),
                array(
                    'name' => "IC Market",
                    'spread' => "0",
                    'commision' => "$7 / lot",
                    'deposit' => "200",
                    'local' => false,
                    'manual' => '0',
                    'disabled' => '0',
                    'link' => 'https://icmarkets.com/?camp=6962',
                    'img' => '<img class="tmb black" src="https://d3mn8vt3j59r2b.cloudfront.net/boldy/images/logo.png">',
                ),
                array(
                    'name' => "FXTM",
                    'spread' => "1.3",
                    'commision' => "$0 / lot",
                    'deposit' => "100",
                    'local' => false,
                    'manual' => '1',
                    'disabled' => '0',
                    'link' => 'http://www.forextimeid.com/?partner_id=4919126',
                    'img' => '<img src="https://www.forextimeid.com/sites/all/themes/fxtm/i/logo.png">',
                ),
                array(
                    'name' => "FBS",
                    'spread' => "0.5",
                    'commision' => "$0 / lot",
                    'deposit' => "100",
                    'local' => false,
                    'manual' => '0',
                    'disabled' => '0',
                    'link' => 'https://fbs.trade/?ppu=5244992',
                    'img' => '<img src="https://fbs.trade/i/logo.png">',
                ),
                array(
                    'name' => "XM",
                    'spread' => "1",
                    'commision' => "$0 / lot",
                    'deposit' => "5",
                    'local' => false,
                    'manual' => '1',
                    'disabled' => '0',
                    'link' => 'https://clicks.pipaffiliates.com/c?c=317128&l=id&p=2',
                    'img' => '<img class="tmb black" src="https://cloud.xm-cdn.com/assets/img/common/logo/xm.svg?v4.0">',
                ),
                array(
                    'name' => "TICKMILL",
                    'spread' => "1.6",
                    'commision' => "$0 / lot",
                    'deposit' => "25",
                    'local' => false,
                    'manual' => '0',
                    'disabled' => '0',
                    'link' => 'http://partners.etoro.com/A73112_TClick.aspx',
                    'img' => '<img src="http://www.javafx.co.id/assets/images/logo.png">',
                ),
                // array(
                //     'name' => "Weltrade",
                //     'spread' => "1.9",
                //     'commision' => "$0 / lot",
                //     'deposit' => "200",
                //     'local' => true,
                //     'link' => 'http://partners.etoro.com/A73112_TClick.aspx',
                //     'img' => '<img src="http://www.javafx.co.id/assets/images/logo.png">',
                // ),
                array(
                    'name' => "Weltrade",
                    'spread' => "1.9",
                    'commision' => "$0 / lot",
                    'deposit' => "200",
                    'local' => false,
                    'manual' => '0',
                    'disabled' => '0',
                    'link' => 'http://id.weltrade.com/?r1=ipartner&r2=17977',
                    'img' => '<img src="http://www.javafx.co.id/assets/images/logo.png">',
                ),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brokers');
    }
}
