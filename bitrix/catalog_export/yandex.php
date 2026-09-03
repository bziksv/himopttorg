<?php
if (!isset($_GET["referer1"]) || $_GET["referer1"] == "") $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || $_GET["referer2"] == "") $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
?>
<?xml version="1.0" encoding="windows-1251"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2026-09-03 10:27">
<shop>
<name>ХИМОПТТОРГ</name>
<company>ХИМОПТТОРГ</company>
<url>http://l.himopttorg.ru</url>
<platform>1C-Bitrix</platform>
<currencies>
<currency id="RUB" rate="1" />
<currency id="USD" rate="23.4" />
<currency id="EUR" rate="37.1" />
</currencies>
<categories>
<category id="185">Лакокрасочная продукция</category>
<category id="3285" parentId="185">Prodecor краски</category>
<category id="3286" parentId="185">Грунт-эмали ХВ-0278 по ржавчине</category>
<category id="3287" parentId="185">Грунты</category>
<category id="3288" parentId="185">Грунты ГФ-021</category>
<category id="3289" parentId="185">Водоэмульсионные краски</category>
<category id="3290" parentId="185">Дорожные краски</category>
<category id="3291" parentId="185">Лаки Пропитки Олифы Пудра</category>
<category id="3292" parentId="185">Малярные инструменты</category>
<category id="3293" parentId="185">Растворители</category>
<category id="3334" parentId="3293">Растворитель Р-5</category>
<category id="3335" parentId="3293">Ацетон</category>
<category id="3336" parentId="3293">Керосин</category>
<category id="3337" parentId="3293">Ксилол</category>
<category id="3338" parentId="3293">Нефрас</category>
<category id="3339" parentId="3293">Растворитель 646</category>
<category id="3340" parentId="3293">Растворитель 650</category>
<category id="3341" parentId="3293">Растворитель Р-12</category>
<category id="3342" parentId="3293">Растворитель Р-4</category>
<category id="3343" parentId="3293">Уайт-спирит</category>
<category id="3344" parentId="3293">Сольвент</category>
<category id="3359" parentId="3293">Толуол</category>
<category id="3294" parentId="185">Автомобильные краски</category>
<category id="3295" parentId="185">Эмали ГФ АС КО ЭП ХВ ХС</category>
<category id="3296" parentId="185">Эмали НЦ</category>
<category id="187" parentId="185">Жидкое стекло</category>
<category id="3145" parentId="185">Аэрозольные краски</category>
<category id="191" parentId="185">Колеры для красок</category>
<category id="200" parentId="185">Эмали ПФ</category>
<category id="3144" parentId="185">Эмали ПФС Стрела</category>
<category id="293">Химическая продукция</category>
<category id="3312" parentId="293">Кислоты</category>
<category id="3345" parentId="3312">Кислота соляная</category>
<category id="3346" parentId="3312">Кислота ортофосфорная техническая</category>
<category id="3347" parentId="3312">Кислота сульфаминовая</category>
<category id="3348" parentId="3312">Кислота азотная</category>
<category id="3360" parentId="3312">Кислота аккумуляторная серная</category>
<category id="3313" parentId="293">Тосол Антифриз</category>
<category id="3314" parentId="293">Смазочные материалы</category>
<category id="3349" parentId="3314">Литол</category>
<category id="3350" parentId="3314">Эмульсол</category>
<category id="3327" parentId="293">Хладоны</category>
<category id="3115" parentId="293">Перекись водорода</category>
<category id="3112" parentId="293">Сода кальцинированная</category>
<category id="3113" parentId="293">Сода каустическая</category>
<category id="3124" parentId="293">Соль таблетированная</category>
<category id="295" parentId="293">Дезинфецирующие средства</category>
<category id="3353" parentId="295">Кальций гипохлорит</category>
<category id="3354" parentId="295">Известь хлорная</category>
<category id="314" parentId="293">Карбид кальция</category>
<category id="321" parentId="293">Лабораторное оборудование</category>
<category id="317" parentId="293">Химия прочая</category>
<category id="3355" parentId="317">Известь пушонка</category>
<category id="3356" parentId="317">Кислота лимонная</category>
<category id="297" parentId="293">Бытовые моющие средства</category>
<category id="299" parentId="293">Растворители химически чистые</category>
<category id="3351" parentId="299">Ацетон</category>
<category id="3352" parentId="299">Изопропиловый спирт</category>
<category id="301" parentId="293">Средства для водоподготовки</category>
<category id="3361" parentId="301">Аминат</category>
<category id="302" parentId="293">Кальций хлористый</category>
<category id="228">Резинотехнические изделия</category>
<category id="3325" parentId="228">Ремни клиновые</category>
<category id="3324" parentId="228">Рукава напорные Б</category>
<category id="3303" parentId="228">Рукава напорные П</category>
<category id="3326" parentId="228">Рукава всасывающие П</category>
<category id="3305" parentId="228">Техпластины трансформаторные</category>
<category id="3306" parentId="228">Техпластины вакуумные</category>
<category id="3307" parentId="228">Техпластины губчатые</category>
<category id="3308" parentId="228">Техпластины МБС</category>
<category id="3309" parentId="228">Техпластины пищевые</category>
<category id="3310" parentId="228">Техпластины ТМКЩ</category>
<category id="3311" parentId="228">Шланги ПВХ</category>
<category id="3197" parentId="228">Шланги подкачки колес</category>
<category id="313" parentId="228">Рукава дюритовые ТУ 0056016-87</category>
<category id="3362" parentId="228">Сырая резина</category>
<category id="327" parentId="228">Манжеты</category>
<category id="3357" parentId="228">Рукава всасывающие</category>
<category id="3298" parentId="3357">Рукава всасывающие Б</category>
<category id="3299" parentId="3357">Рукава всасывающие В</category>
<category id="3300" parentId="3357">Рукава всасывающие КЩ</category>
<category id="229" parentId="228">Хомуты и соединения</category>
<category id="231" parentId="228">Клей 88</category>
<category id="232" parentId="228">Ковры резиновые</category>
<category id="233" parentId="228">Лента конвейерная</category>
<category id="3358" parentId="228">Рукава напорные</category>
<category id="3301" parentId="3358">Рукава напорные В</category>
<category id="3302" parentId="3358">Рукава напорные ВГ</category>
<category id="3304" parentId="3358">Рукава напорные Ш</category>
<category id="242" parentId="228">Рукава для газосварки тип 1</category>
<category id="243" parentId="228">Рукава для газосварки тип 2</category>
<category id="244" parentId="228">Рукава для газосварки тип 3</category>
<category id="316" parentId="228">Рукава РВД</category>
<category id="251" parentId="228">Рукава паропроводные</category>
<category id="252" parentId="228">Рукава пневматические</category>
<category id="253" parentId="228">Рукава с нитяным оплетом</category>
<category id="256" parentId="253">Сырая резина</category>
<category id="261" parentId="228">Шланги поливочные</category>
<category id="262" parentId="228">Шнуры и трубки</category>
<category id="168">Асбестотехнические изделия</category>
<category id="3283" parentId="168">Асбошнур</category>
<category id="169" parentId="168">Асбокартон</category>
<category id="3284" parentId="168">Паронит</category>
<category id="171" parentId="168">Асботкань</category>
<category id="203">Пластмассы</category>
<category id="3297" parentId="203">Канистры и кубы</category>
<category id="204" parentId="203">Фторопласт</category>
<category id="206" parentId="203">Капролон</category>
<category id="207" parentId="203">Оргстекло</category>
<category id="208" parentId="203">Пленка полиэтиленовая</category>
<category id="3333" parentId="203">Полистирол</category>
<category id="210" parentId="203">Текстолит</category>
<category id="364">Хозяйственные товары</category>
<category id="3315" parentId="364">Диски алмазные</category>
<category id="3332" parentId="364">Коронки и чашки алмазные</category>
<category id="3317" parentId="364">Мраморная крошка</category>
<category id="3318" parentId="364">Перчатки и прочее</category>
<category id="3319" parentId="364">Полотно х-прошивное</category>
<category id="3320" parentId="364">Слесарные инструменты</category>
<category id="3321" parentId="364">Стеклоткань Шпагат</category>
<category id="3323" parentId="364">Клей Дисперсия ПВА</category>
<category id="3322" parentId="364">Клей Смола ЭД-20 Полиэтиленполиамин</category>
<category id="3142" parentId="364">Все для уборки</category>
<category id="3138" parentId="364">Лопаты и метлы</category>
<category id="365" parentId="364">Все для дома</category>
</categories>
<offers>
<offer id="34266" available="false">
<url>http://himopttorg.ru/catalog/tosol_antifriz_1/antifriz_g11_zelenyy_pl_kan_5_kg_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>437</price>
<currencyId>RUB</currencyId>
<categoryId>3313</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5c4/9k0wss7ifh024zzycsz48b163p9sn15p.jpeg</picture>
<name>Антифриз G11 зеленый пл/кан 5 кг Дзержинск</name>
<description>Антифриз G11 зеленый пл/кан 5 кг Дзержинск</description>
</offer>
<offer id="34267" available="false">
<url>http://himopttorg.ru/catalog/tosol_antifriz_1/antifriz_g12_krasnyy_pl_kan_5_kg_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>437</price>
<currencyId>RUB</currencyId>
<categoryId>3313</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a68/rjd2c54fp4jj0sogm1u64x1b4nu23ham.jpeg</picture>
<name>Антифриз G12 красный пл/кан  5 кг Дзержинск</name>
<description>Антифриз G12 красный пл/кан  5 кг Дзержинск</description>
</offer>
<offer id="34268" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asbest_khrizotilovyy_a_6k_30/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>48</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b7a/4q8epg3zrftk0rrl014jdkp9w47m24ke.jpeg</picture>
<name>Асбест хризотиловый  А-6К-30</name>
<description>Асбест хризотиловый  А-6К-30</description>
</offer>
<offer id="34269" available="true">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_3_mm_1000kh800/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84.4</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c88/0dda0acoz106fr040jpyqz579z9evi78.jpg</picture>
<name>Асбокартон КАОН  3 мм 1000х800</name>
<description>Асбокартон КАОН  3 мм 1000х800</description>
</offer>
<offer id="34270" available="true">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_4_mm_1000kh800/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84.4</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a5c/yomu2gwuvhy16h7o842fpi452j5ztwvh.jpg</picture>
<name>Асбокартон КАОН  4 мм 1000х800</name>
<description>Асбокартон КАОН  4 мм 1000х800</description>
</offer>
<offer id="34271" available="true">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_5_mm_1000kh800/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84.4</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/51e/57n4pm9e5a0jaqu9g420ayn8eey4wuoo.jpg</picture>
<name>Асбокартон КАОН  5 мм 1000х800</name>
<description>Асбокартон КАОН  5 мм 1000х800</description>
</offer>
<offer id="34272" available="true">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_6_mm_1000kh800/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84.4</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/792/p5xhyc9d3lfp0lr8w79ojujksqcoborz.jpg</picture>
<name>Асбокартон КАОН  6 мм 1000х800</name>
<description>Асбокартон КАОН  6 мм 1000х800</description>
</offer>
<offer id="34273" available="true">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_10_mm_1000kh800/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84.4</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/74a/3djhzwx550zys68ub306d3fi5n1n3dfp.jpg</picture>
<name>Асбокартон КАОН 10 мм 1000х800</name>
<description>Асбокартон КАОН 10 мм 1000х800</description>
</offer>
<offer id="34275" available="false">
<url>http://himopttorg.ru/catalog/asbotkan/asbotkan_at_2_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>171</categoryId>
<picture>http://himopttorg.ru/upload/iblock/517/2o2lbomt5e98dm49tli8c0hryqb8btaq.jpg</picture>
<name>Асботкань АТ-2 ВАТИ</name>
<description>Асботкань АТ-2 ВАТИ</description>
</offer>
<offer id="34276" available="true">
<url>http://himopttorg.ru/catalog/asbotkan/asbotkan_at_3_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>171</categoryId>
<picture>http://himopttorg.ru/upload/iblock/86b/x1xyjqlbpamw9u9k7p4y3s8ilbudd8is.jpg</picture>
<name>Асботкань АТ-3 ВАТИ</name>
<description>Асботкань АТ-3 ВАТИ</description>
</offer>
<offer id="34277" available="true">
<url>http://himopttorg.ru/catalog/asbotkan/asbotkan_at_4_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1200</price>
<currencyId>RUB</currencyId>
<categoryId>171</categoryId>
<picture>http://himopttorg.ru/upload/iblock/622/vp8ggis0mnqxwg44ub8vfq2vfg031tlm.jpg</picture>
<name>Асботкань АТ-4 ВАТИ</name>
<description>Асботкань АТ-4 ВАТИ</description>
</offer>
<offer id="34278" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_6_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>820</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3b6/1tpazgqsf3ju9mbadmtdxrwto7ak6qcq.jpg</picture>
<name>Асбошнур  6 мм ВАТИ</name>
<description>Асбошнур  6 мм ВАТИ</description>
</offer>
<offer id="34279" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_8_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>750</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/313/6maydsnpfgyxoltkdkjo4gp0x7lbm63r.jpg</picture>
<name>Асбошнур  8 мм ВАТИ</name>
<description>Асбошнур  8 мм ВАТИ</description>
</offer>
<offer id="34280" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_10_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>750</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3ba/lqmk7oi3mf3p4jxwcolew86438jw5gag.jpg</picture>
<name>Асбошнур 10 мм ВАТИ</name>
<description>Асбошнур 10 мм ВАТИ</description>
</offer>
<offer id="34281" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_12_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>560</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7b5/e1b5vtz0o7ursx4l57n13bb5yj9o39de.jpg</picture>
<name>Асбошнур 12 мм ВАТИ</name>
<description>Асбошнур 12 мм ВАТИ</description>
</offer>
<offer id="34282" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_14_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>530</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6ef/tqxhqk0865bbhvmjwhdi528gbbfpwdef.jpg</picture>
<name>Асбошнур 14 мм ВАТИ</name>
<description>Асбошнур 14 мм ВАТИ</description>
</offer>
<offer id="34284" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_16_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>530</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f92/j2w4gta3c0ze7vaxho0nz319nquebzxl.jpg</picture>
<name>Асбошнур 16 мм ВАТИ</name>
<description>Асбошнур 16 мм ВАТИ</description>
</offer>
<offer id="34285" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_18_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5e4/om4h6ulwyrmxyu2vppnijznalrocmvyd.jpg</picture>
<name>Асбошнур 18 мм ВАТИ</name>
<description>Асбошнур 18 мм ВАТИ</description>
</offer>
<offer id="34286" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_20_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a34/h04196e6e068ccoy0zpgtq90c1q1732o.jpg</picture>
<name>Асбошнур 20 мм ВАТИ</name>
<description>Асбошнур 20 мм ВАТИ</description>
</offer>
<offer id="34287" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_25_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8c6/xcy1svk93221myy165bkmp548ebsq356.jpg</picture>
<name>Асбошнур 25 мм ВАТИ</name>
<description>Асбошнур 25 мм ВАТИ</description>
</offer>
<offer id="34310" available="false">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_023_glubokopronik_pl_kan_10_l_admiral/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>351</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0a4/3kq4pxgpcs7eof4ao9wo4or2dya1v694.jpeg</picture>
<name>Грунт 023 глубокопроник пл/кан 10 л Адмирал</name>
<description>Грунт 023 глубокопроник пл/кан 10 л Адмирал</description>
</offer>
<offer id="34314" available="true">
<url>http://himopttorg.ru/catalog/grunty_gf_021_1/grunt_gf_021_kr_korich_b_sokhn_emblema_bar_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>3288</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a93/eq8mqye5jprp41tdkzrlbimbdcqr38w9.jpeg</picture>
<name>Грунт ГФ-021 кр корич б/сохн Эмблема бар 25 кг</name>
<description>Грунт ГФ-021 кр корич б/сохн Эмблема бар 25 кг      </description>
</offer>
<offer id="34316" available="true">
<url>http://himopttorg.ru/catalog/grunty_gf_021_1/grunt_gf_021_kr_korich_bar_20_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>189</price>
<currencyId>RUB</currencyId>
<categoryId>3288</categoryId>
<picture>http://himopttorg.ru/upload/iblock/370/rzdwdvtz9sr8hvpuq3j3c6tg50zc6giu.jpeg</picture>
<name>Грунт ГФ-021 кр корич бар 20 кг LIDA</name>
<description>Грунт ГФ-021 кр корич бар 20 кг LIDA</description>
</offer>
<offer id="34317" available="true">
<url>http://himopttorg.ru/catalog/grunty_gf_021_1/grunt_gf_021_kr_korich_bar_50_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>169</price>
<currencyId>RUB</currencyId>
<categoryId>3288</categoryId>
<picture>http://himopttorg.ru/upload/iblock/68e/g7alcongfwnizf9nqhm1z6l65b6k2fs4.jpeg</picture>
<name>Грунт ГФ-021 кр корич бар 50 кг LIDA</name>
<description>Грунт ГФ-021 кр корич бар 50 кг LIDA</description>
</offer>
<offer id="34319" available="true">
<url>http://himopttorg.ru/catalog/grunty_gf_021_1/grunt_gf_021_sv_seryy_b_sokhn_emblema_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>3288</categoryId>
<picture>http://himopttorg.ru/upload/iblock/943/fpwb19k6zh9y01lg7hpwj661wdwfzjok.jpeg</picture>
<name>Грунт ГФ-021 св серый б/сохн Эмблема бар 25 кг</name>
<description>Грунт ГФ-021 св серый б/сохн Эмблема бар 25 кг</description>
</offer>
<offer id="34321" available="true">
<url>http://himopttorg.ru/catalog/grunty_gf_021_1/grunt_gf_021_sv_seryy_bar_20_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>199</price>
<currencyId>RUB</currencyId>
<categoryId>3288</categoryId>
<picture>http://himopttorg.ru/upload/iblock/403/wb934bu2ge1d1wrr74g8vghseuow1hx2.jpeg</picture>
<name>Грунт ГФ-021 св серый бар 20 кг LIDA</name>
<description>Грунт ГФ-021 св серый бар 20 кг LIDA</description>
</offer>
<offer id="34322" available="true">
<url>http://himopttorg.ru/catalog/grunty_gf_021_1/grunt_gf_021_sv_seryy_bar_50_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>183</price>
<currencyId>RUB</currencyId>
<categoryId>3288</categoryId>
<picture>http://himopttorg.ru/upload/iblock/35d/5vjf9cwlokr7wayo2vu1yxcuc50u2mhj.jpeg</picture>
<name>Грунт ГФ-021 св серый бар 50 кг LIDA</name>
<description>Грунт ГФ-021 св серый бар 50 кг LIDA</description>
</offer>
<offer id="34328" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_belyy_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a66/08lfzmzytq3fcm4rxb1ykjjaeo2nyc2m.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав белый бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав белый бар 20 кг </description>
</offer>
<offer id="34330" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_goluboy_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>570</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/890/e9z2gtt2g02xr1udqwoz8aa2ipfkm1fc.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав голубой бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав голубой бар 20 кг </description>
</offer>
<offer id="34331" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_zheltyy_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/57b/o3wsfo0z8v6g4vuhcp71uubf00c4dblq.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав желтый бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав желтый бар 20 кг </description>
</offer>
<offer id="34333" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_zelenyy_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/282/wa3feum95xxe8kao57zzn4sslh44paej.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав зеленый бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав зеленый бар 20 кг </description>
</offer>
<offer id="34337" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_krasnyy_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a90/ngf13c4bp3aa8zl9v9c0gosoo7iefkpd.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав красный бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав красный бар 20 кг </description>
</offer>
<offer id="34339" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_seryy_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>595</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/599/q4xasz1fjiejys0kt1jtbj6ju40wbews.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав серый бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав серый бар 20 кг </description>
</offer>
<offer id="34342" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_temno_korich_ral8017_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e98/08we59rsxfk4l4dogaay6i0s8f1c773r.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав темно-корич RAL8017 бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав темно-корич RAL8017 бар 20 кг</description>
</offer>
<offer id="34343" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_chernyy_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/517/70mdj82ykvs4nkjoe7thgp9uchq71efi.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав черный бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав черный бар 20 кг</description>
</offer>
<offer id="34379" available="false">
<url>http://himopttorg.ru/catalog/kley_dispersiya_pva/dispersiya_pva_df_51_10s_pl_boch_40_kg_timashevsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3323</categoryId>
<picture>http://himopttorg.ru/upload/iblock/70d/c083wame9n6wgdhbox1x7lo3x7pehmf7.jpeg</picture>
<name>Дисперсия ПВА ДФ 51/10С пл/боч 40 кг Тимашевск</name>
<description>Дисперсия ПВА ДФ 51/10С пл/боч 40 кг Тимашевск</description>
</offer>
<offer id="34386" available="true">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_khch_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>372</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/05d/yixa2lccaay6ilye9007v6obzljd1shd.jpg</picture>
<name>Изопропанол ХЧ пл/кан 8 кг (10 л) Экос-1</name>
<description>Изопропанол ХЧ пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="34387" available="true">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_khch_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>408</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/817/e8zmtjvn39hb8i20r8dhfv5ozymuif3w.jpeg</picture>
<name>Изопропанол ХЧ ст/бут 0,8 кг Экос-1</name>
<description>Изопропанол ХЧ ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="34388" available="true">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_ch_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>330</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3bc/atoepb3wkh3bflbqdqo4mz4nlni5thsy.jpeg</picture>
<name>Изопропанол Ч пл/кан 8 кг (10 л) Экос-1</name>
<description>Изопропанол Ч пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="34389" available="true">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_ch_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>366</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/875/nc9b3xyvpy6x0dqb4nuwbfkxjxbaao9e.jpeg</picture>
<name>Изопропанол Ч ст/бут 0,8 кг Экос-1</name>
<description>Изопропанол Ч ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="34394" available="true">
<url>http://himopttorg.ru/catalog/kanistry_i_kuby/kanistra_p_e_10_l_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>160</price>
<currencyId>RUB</currencyId>
<categoryId>3297</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1ee/acwg89e66yxnwrpad1nl3l52gw92yhek.jpeg</picture>
<name>Канистра п/э 10 л</name>
<description>Канистра п/э 10 л </description>
</offer>
<offer id="34402" available="false">
<url>http://himopttorg.ru/catalog/kislota_azotnaya/kislota_azotnaya_novomoskovsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>38</price>
<currencyId>RUB</currencyId>
<categoryId>3348</categoryId>
<picture>http://himopttorg.ru/upload/iblock/501/iunndju1s3e88u3twdxbf5g6bketk3ee.jpeg</picture>
<name>Кислота азотная Новомосковск</name>
<description>Кислота азотная Новомосковск</description>
</offer>
<offer id="34403" available="true">
<url>http://himopttorg.ru/catalog/kislota_akkumulyatornaya_sernaya/kislota_akkumulyatornaya_sernaya_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>219</price>
<currencyId>RUB</currencyId>
<categoryId>3360</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eab/howw3k83vrmzc62ns79ndq5wf0jcx9vi.jpg</picture>
<name>Кислота аккумуляторная серная</name>
<description>Кислота аккумуляторная серная </description>
</offer>
<offer id="34404" available="true">
<url>http://himopttorg.ru/catalog/kislota_ortofosfornaya_tekhnicheskaya/kislota_ortofosfornaya_termich_pishch_marka_a_pl_kan_35_kg_voskresensk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>252</price>
<currencyId>RUB</currencyId>
<categoryId>3346</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a17/5mdd8wsw5py8hseu43s3de5q8in52279.jpeg</picture>
<name>Кислота ортофосфорная термич пищ марка А пл/кан 35 кг Воскресенск</name>
<description>Кислота ортофосфорная термич пищ марка А пл/кан 35 кг Воскресенск</description>
</offer>
<offer id="34406" available="true">
<url>http://himopttorg.ru/catalog/kislota_solyanaya/kislota_solyanaya_novomoskovsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>53</price>
<currencyId>RUB</currencyId>
<categoryId>3345</categoryId>
<picture>http://himopttorg.ru/upload/iblock/601/4s6zugpsc26ul0pos8unmcunntli4mb2.jpg</picture>
<name>Кислота соляная Новомосковск</name>
<description>Кислота соляная Новомосковск</description>
</offer>
<offer id="34407" available="false">
<url>http://himopttorg.ru/catalog/kislota_sulfaminovaya/kislota_sulfaminovaya_p_mesh_40_kg_tambov/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>203</price>
<currencyId>RUB</currencyId>
<categoryId>3347</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e64/jlz0nsjj990in8ju2kyv03245d0h6n91.jpeg</picture>
<name>Кислота сульфаминовая п/меш 40 кг Тамбов</name>
<description>Кислота сульфаминовая п/меш 40 кг Тамбов</description>
</offer>
<offer id="34409" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_pl_khobbi_1_5_38_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>40</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0be/wp2l3tc4kq4pf6amh1g5a0jd9k3hb2p0.jpeg</picture>
<name>Кисть пл Хобби 1,5&quot;/38 мм</name>
<description>Кисть пл Хобби 1,5&quot;/38 мм</description>
</offer>
<offer id="34410" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_pl_khobbi_2_5_63_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>70</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/792/20dfd2rh974y5ap68t95htfnnlg390d6.jpeg</picture>
<name>Кисть пл Хобби 2,5&quot;/63 мм</name>
<description>Кисть пл Хобби 2,5&quot;/63 мм</description>
</offer>
<offer id="34411" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_pl_khobbi_3_75_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>82.4</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d42/odpislo0eknvp4mc19yi6wllplsru3n1.jpeg</picture>
<name>Кисть пл Хобби 3&quot;/75 мм</name>
<description>Кисть пл Хобби 3&quot;/75 мм</description>
</offer>
<offer id="34412" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_pl_khobbi_4_100_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>110</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/29d/cuylrpdmbjlqas834n0ehes9a3xocjlc.jpeg</picture>
<name>Кисть пл Хобби 4&quot;/100 мм</name>
<description>Кисть пл Хобби 4&quot;/100 мм</description>
</offer>
<offer id="34415" available="false">
<url>http://himopttorg.ru/catalog/kley_88/kley_88_sa_ban_1_0_l_yarelastotekhnika/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>231</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4f1/3w87v9gxnd5yu9d4foe0xej7zayupfs5.jpeg</picture>
<name>Клей 88 СА бан 1,0 л ЯРЭЛАСТОТЕХНИКА</name>
<description>Клей 88 СА бан 1,0 л ЯРЭЛАСТОТЕХНИКА</description>
</offer>
<offer id="34416" available="false">
<url>http://himopttorg.ru/catalog/kley_88/kley_88_sa_ban_2_4_l_1_8_kg_yarelastotekhnika/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1890</price>
<currencyId>RUB</currencyId>
<categoryId>231</categoryId>
<picture>http://himopttorg.ru/upload/iblock/402/n0wmuf71ub5s56f4mmj403l24zrqldbh.jpeg</picture>
<name>Клей 88 СА бан 2,4 л (1,8 кг) ЯРЭЛАСТОТЕХНИКА</name>
<description>Клей 88 СА бан 2,4 л (1,8 кг) ЯРЭЛАСТОТЕХНИКА</description>
</offer>
<offer id="34418" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_rebristyy_80kh120_sm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>777</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b7e/bnu19cclpstb08to3ykwgk674fstzp7d.jpeg</picture>
<name>Коврик влаговпитывающий ребристый 80х120 см коричневый</name>
<description>Коврик влаговпитывающий ребристый 80х120 см коричневый</description>
</offer>
<offer id="34427" available="false">
<url>http://himopttorg.ru/catalog/kolery_dlya_krasok/koler_diva_vdak_150_salatnyy_ved_1_kg_moskva/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>344.5</price>
<currencyId>RUB</currencyId>
<categoryId>191</categoryId>
<picture>http://himopttorg.ru/upload/iblock/995/6son9p7418h0axramq9d1a6dbhsxlx53.gif</picture>
<name>Колер Дива ВДАК № 150 салатный вед 1 кг Москва</name>
<description>Колер Дива ВДАК № 150 салатный вед 1 кг Москва</description>
</offer>
<offer id="34435" available="false">
<url>http://himopttorg.ru/catalog/kolery_dlya_krasok/koler_diva_vdak_700_siniy_ved_1_kg_moskva/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>409</price>
<currencyId>RUB</currencyId>
<categoryId>191</categoryId>
<picture>http://himopttorg.ru/upload/iblock/df6/fue3pd8l5ysgyedki4houfyvy0ti2fqc.gif</picture>
<name>Колер Дива ВДАК № 700 синий вед 1 кг Москва</name>
<description>Колер Дива ВДАК № 700 синий вед 1 кг Москва</description>
</offer>
<offer id="34439" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kompozitsiya_tsinol_ban_1_1_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1250</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f2a/dmei8y4ib21m5e9nrwe2xjas2bvsdpk9.jpeg</picture>
<name>Композиция Цинол бан 1,1 кг</name>
<description>Композиция Цинол бан 1,1 кг</description>
</offer>
<offer id="34457" available="true">
<url>http://himopttorg.ru/catalog/kanistry_i_kuby/kub_p_e_1000_l_b_u/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>12750</price>
<currencyId>RUB</currencyId>
<categoryId>3297</categoryId>
<picture>http://himopttorg.ru/upload/iblock/44b/q9i4hy5f13ubcfcwtaekpkqywawjbu1w.jpeg</picture>
<name>Куб п/э 1000 л б/у</name>
<description>Куб п/э 1000 л б/у</description>
</offer>
<offer id="34459" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_gf_95_bar_40_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>370</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5d1/451ky882kga40i0ekw1w3206k78991et.png</picture>
<name>Лак ГФ-95 бар 40 кг</name>
<description>Лак ГФ-95 бар 40 кг</description>
</offer>
<offer id="34461" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_ml_92_bar_40_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>415</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4b7/v1r90erfwlqofo9jbkg09jogwhs9ad0o.png</picture>
<name>Лак МЛ-92 бар 40 кг</name>
<description>Лак МЛ-92 бар 40 кг</description>
</offer>
<offer id="34465" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/lenta_kleyashch_na_krep_bum_50_mmkh20_m_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Лента клеящ на креп бум 50 ммх20 м</name>
<description>Лента клеящ на креп бум 50 ммх20 м </description>
</offer>
<offer id="34490" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/monoetanolamin_khch_st_but_1_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>684</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1d3/heih29otnnloujbfvy6l5bxdggtl0xyk.jpeg</picture>
<name>Моноэтаноламин ХЧ ст/бут 1 кг Экос-1</name>
<description>Моноэтаноламин ХЧ ст/бут 1 кг Экос-1</description>
</offer>
<offer id="34500" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_agi_6kh6_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/89f/5k1uddagarxgnqg9xj4ah3tlanpwi6rd.jpeg</picture>
<name>Набивка АГИ  6х6 мм ВАТИ</name>
<description>Набивка АГИ  6х6 мм ВАТИ</description>
</offer>
<offer id="34502" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_agi_10kh10_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c9a/x2d3oi77eluzslzo2ycqvnyir8ux3rho.jpg</picture>
<name>Набивка АГИ 10х10 мм ВАТИ</name>
<description>Набивка АГИ 10х10 мм ВАТИ</description>
</offer>
<offer id="34503" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_agi_12kh12_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4ce/yapwcjpe0av0yo8xs5pa161tbyfd11sc.jpg</picture>
<name>Набивка АГИ 12х12 мм ВАТИ</name>
<description>Набивка АГИ 12х12 мм ВАТИ</description>
</offer>
<offer id="34504" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_agi_14kh14_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7ca/8gnmv13gpivhp2b6aljwej8yz2l974v3.jpg</picture>
<name>Набивка АГИ 14х14 мм ВАТИ</name>
<description>Набивка АГИ 14х14 мм ВАТИ</description>
</offer>
<offer id="34505" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_agi_16kh16_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1e0/nznaga7zjhavxm6v62g8twsdzf5hbid6.jpg</picture>
<name>Набивка АГИ 16х16 мм ВАТИ</name>
<description>Набивка АГИ 16х16 мм ВАТИ</description>
</offer>
<offer id="34506" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_agi_18kh18_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/47c/en169d6df0tayq98ynha420y29zoepkk.jpg</picture>
<name>Набивка АГИ 18х18 мм ВАТИ</name>
<description>Набивка АГИ 18х18 мм ВАТИ</description>
</offer>
<offer id="34507" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_agi_20kh20_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aca/a3viheoze99ew8hhui8bhawx0qjthgfb.jpg</picture>
<name>Набивка АГИ 20х20 мм ВАТИ</name>
<description>Набивка АГИ 20х20 мм ВАТИ</description>
</offer>
<offer id="34509" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_6kh6_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>665</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/093/sbz1rk5zxltr230tz0tghp6mnzrc1gde.jpg</picture>
<name>Набивка АП-31  6х6 мм ВАТИ</name>
<description>Набивка АП-31  6х6 мм ВАТИ</description>
</offer>
<offer id="34510" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_8kh8_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>665</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dc7/06qzx5p6nxmhnm2l0v97sew3ou2gvsec.jpg</picture>
<name>Набивка АП-31  8х8 мм ВАТИ</name>
<description>Набивка АП-31  8х8 мм ВАТИ</description>
</offer>
<offer id="34511" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_10kh10_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>665</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2b1/3c0cz1aelpw8q05abz42245c3ixb66jo.jpg</picture>
<name>Набивка АП-31 10х10 мм ВАТИ</name>
<description>Набивка АП-31 10х10 мм ВАТИ</description>
</offer>
<offer id="34512" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_12kh12_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>665</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/264/10s8571dzi7h3p8uajquuuzau45ghv5u.jpg</picture>
<name>Набивка АП-31 12х12 мм ВАТИ</name>
<description>Набивка АП-31 12х12 мм ВАТИ</description>
</offer>
<offer id="34513" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_16kh16_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>595</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/053/17jiq13ll064tkgho518tttfr2ll141e.jpg</picture>
<name>Набивка АП-31 16х16 мм ВАТИ</name>
<description>Набивка АП-31 16х16 мм ВАТИ</description>
</offer>
<offer id="34514" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_18kh18_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>595</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/12a/fm1th9iqleszu7vdd1i27yextt8hcrph.jpg</picture>
<name>Набивка АП-31 18х18 мм ВАТИ</name>
<description>Набивка АП-31 18х18 мм ВАТИ</description>
</offer>
<offer id="34515" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_20kh20_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>595</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9b3/ti5s7u0sbjfl3gmq785baybpswv9srcd.jpg</picture>
<name>Набивка АП-31 20х20 мм ВАТИ</name>
<description>Набивка АП-31 20х20 мм ВАТИ</description>
</offer>
<offer id="34517" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_8kh8_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f88/f2blhl3ggg5njuzn7dh43nyscdpfgsqh.jpg</picture>
<name>Набивка АПР-31  8х8 мм ВАТИ</name>
<description>Набивка АПР-31  8х8 мм ВАТИ</description>
</offer>
<offer id="34518" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_10kh10_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b1e/ix85fkys3h91pabxqx9ulo5hicb4x7zd.jpg</picture>
<name>Набивка АПР-31 10х10 мм ВАТИ</name>
<description>Набивка АПР-31 10х10 мм ВАТИ</description>
</offer>
<offer id="34519" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_12kh12_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b99/h6nc0w4ofkpuwjfkcw9sbu4rp77qpevw.jpg</picture>
<name>Набивка АПР-31 12х12 мм ВАТИ</name>
<description>Набивка АПР-31 12х12 мм ВАТИ</description>
</offer>
<offer id="34520" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_14kh14_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/318/4e8k9hzsz2ebxxip7jmt4nuknkdui5b1.jpg</picture>
<name>Набивка АПР-31 14х14 мм ВАТИ</name>
<description>Набивка АПР-31 14х14 мм ВАТИ</description>
</offer>
<offer id="34521" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_16kh16_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>995</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/22c/g1xrtyzh87xbbc7v61xna148fvxe9xvz.jpg</picture>
<name>Набивка АПР-31 16х16 мм ВАТИ</name>
<description>Набивка АПР-31 16х16 мм ВАТИ</description>
</offer>
<offer id="34522" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_20kh20_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>995</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd4/rnim2hc3j33ziz6mnh0fpnkrij3lc882.jpg</picture>
<name>Набивка АПР-31 20х20 мм ВАТИ</name>
<description>Набивка АПР-31 20х20 мм ВАТИ</description>
</offer>
<offer id="34525" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_lp_10kh10_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1cb/qaq3l2fj6bfzhs0wxjfgte1ak58ftrhb.jpg</picture>
<name>Набивка ЛП 10х10 мм ВАТИ</name>
<description>Набивка ЛП 10х10 мм ВАТИ</description>
</offer>
<offer id="34526" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_lp_12kh12_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/311/16eurm50e71chwkfzjnn0fwj8zsy70au.jpg</picture>
<name>Набивка ЛП 12х12 мм ВАТИ</name>
<description>Набивка ЛП 12х12 мм ВАТИ</description>
</offer>
<offer id="34527" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_lp_14kh14_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9f3/e3s9ke6sx1d4o9gilrelr9ejme7s7sv3.jpg</picture>
<name>Набивка ЛП 14х14 мм ВАТИ</name>
<description>Набивка ЛП 14х14 мм ВАТИ</description>
</offer>
<offer id="34528" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_lp_16kh16_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>950</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d43/n0vye4n3l33dfeaj9q8zxso2e2zov1i6.jpg</picture>
<name>Набивка ЛП 16х16 мм ВАТИ</name>
<description>Набивка ЛП 16х16 мм ВАТИ</description>
</offer>
<offer id="34529" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_lp_18kh18_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>950</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e33/69rcml7vjjn2treoh3y7g1i6yatsvb3h.jpg</picture>
<name>Набивка ЛП 18х18 мм ВАТИ</name>
<description>Набивка ЛП 18х18 мм ВАТИ</description>
</offer>
<offer id="34530" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_lp_20kh20_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>950</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/132/52zzvng3rsjv1awmtll9rgfwv00sjru7.jpg</picture>
<name>Набивка ЛП 20х20 мм ВАТИ</name>
<description>Набивка ЛП 20х20 мм ВАТИ</description>
</offer>
<offer id="34533" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_khbp_31_10kh10_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/17e/oe20qggc52615f8oejv7s3idabzwebbw.jpg</picture>
<name>Набивка ХБП-31 10х10 мм ВАТИ</name>
<description>Набивка ХБП-31 10х10 мм ВАТИ</description>
</offer>
<offer id="34534" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_khbp_31_12kh12_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d09/mgtoo7i07o8b8ko8cm72nk0ay7e6mwwc.jpg</picture>
<name>Набивка ХБП-31 12х12 мм ВАТИ</name>
<description>Набивка ХБП-31 12х12 мм ВАТИ</description>
</offer>
<offer id="34535" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_khbp_31_14kh14_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fac/6zq9rjufc4wxxtqtpiq6p6ztzen10pap.jpg</picture>
<name>Набивка ХБП-31 14х14 мм ВАТИ</name>
<description>Набивка ХБП-31 14х14 мм ВАТИ</description>
</offer>
<offer id="34536" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_khbp_31_16kh16_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9ac/6mks21ze1fao8dwfsjkaswp2ontmu279.jpg</picture>
<name>Набивка ХБП-31 16х16 мм ВАТИ</name>
<description>Набивка ХБП-31 16х16 мм ВАТИ</description>
</offer>
<offer id="34537" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_khbp_31_18kh18_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5c6/upvq5lrz8vpd2xhi4p2fzqh6yyy3awoo.jpg</picture>
<name>Набивка ХБП-31 18х18 мм ВАТИ</name>
<description>Набивка ХБП-31 18х18 мм ВАТИ</description>
</offer>
<offer id="34538" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_khbp_31_20kh20_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ad7/ykm8qtu17sdnqecx15sn9vni4y9ntmps.jpg</picture>
<name>Набивка ХБП-31 20х20 мм ВАТИ</name>
<description>Набивка ХБП-31 20х20 мм ВАТИ</description>
</offer>
<offer id="34547" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_2_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4650</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ec4/5m0n68fjr6gp0nnc1jqlpzf00cban55y.jpeg</picture>
<name>Оргстекло  2 мм 1500х2050 ACRYMA</name>
<description>Оргстекло  2 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="34548" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_3_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>6500</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/279/5x5zi9t9qfzc31jx67bkitlfqhicsm98.jpeg</picture>
<name>Оргстекло  3 мм 1500х2050 ACRYMA</name>
<description>Оргстекло  3 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="34549" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_4_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>8600</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/373/04f8h6s1330gp9wjllogjuabmv4f05f7.jpeg</picture>
<name>Оргстекло  4 мм 1500х2050 ACRYMA</name>
<description>Оргстекло  4 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="34550" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_6_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>13300</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d63/l9yc6m0rrkw8kffms275n2dtuerwu8qu.jpeg</picture>
<name>Оргстекло  6 мм 1500х2050 ACRYMA</name>
<description>Оргстекло  6 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="34551" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_8_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>17100</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f1e/xo6ksgory1kuygsfg7ze645hijaskv5a.jpeg</picture>
<name>Оргстекло  8 мм 1500х2050 ACRYMA</name>
<description>Оргстекло  8 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="34552" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_10_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>21300</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/42e/0nb7hmmzi54ipxg2yozc9es71pceu6ex.jpeg</picture>
<name>Оргстекло 10 мм 1500х2050 ACRYMA</name>
<description>Оргстекло 10 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="34558" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_1_0_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3da/4gig5kndv6llyzuawcuh5uhmfbdostkd.png</picture>
<name>Паронит ПМБ 1,0 мм ВАТИ</name>
<description>Паронит ПМБ 1,0 мм ВАТИ</description>
</offer>
<offer id="34559" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_1_5_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>178</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f51/59569ws0rvl3vvjobvdfmzvzj7m4ghxn.png</picture>
<name>Паронит ПМБ 1,5 мм ВАТИ</name>
<description>Паронит ПМБ 1,5 мм ВАТИ</description>
</offer>
<offer id="34560" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_2_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>172</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5e8/k2uu7yt4t2i0kde3efm4w4hsl636pq0u.png</picture>
<name>Паронит ПМБ 2 мм ВАТИ</name>
<description>Паронит ПМБ 2 мм ВАТИ</description>
</offer>
<offer id="34561" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_3_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>172</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0b0/c0crbshazrxt19yayfj5b2gd9xdvx4hc.png</picture>
<name>Паронит ПМБ 3 мм ВАТИ</name>
<description>Паронит ПМБ 3 мм ВАТИ</description>
</offer>
<offer id="34562" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_4_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>172</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/83c/t23ul5qu2stv2d23cnv9vw1bjqvg7h3s.png</picture>
<name>Паронит ПМБ 4 мм ВАТИ</name>
<description>Паронит ПМБ 4 мм ВАТИ</description>
</offer>
<offer id="34563" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_5_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>172</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9ec/s69d8xl380p7mc7qqa5ofhhlct7ugs1j.png</picture>
<name>Паронит ПМБ 5 мм ВАТИ</name>
<description>Паронит ПМБ 5 мм ВАТИ</description>
</offer>
<offer id="34565" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_0_5_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>205</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b39/yhi81kydgbljltqlw5ltbhm42nkp1xtp.png</picture>
<name>Паронит ПОН-Б 0,5 мм ВАТИ</name>
<description>Паронит ПОН-Б 0,5 мм ВАТИ</description>
</offer>
<offer id="34566" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_0_6_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>205</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/66d/0kts89cm1qrhg9vgsmpwnd9ke0gof7t9.png</picture>
<name>Паронит ПОН-Б 0,6 мм ВАТИ</name>
<description>Паронит ПОН-Б 0,6 мм ВАТИ</description>
</offer>
<offer id="34567" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_0_8_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>190</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9ae/op5rywv5dxisxib9ejk9gow46o5dapmo.png</picture>
<name>Паронит ПОН-Б 0,8 мм ВАТИ</name>
<description>Паронит ПОН-Б 0,8 мм ВАТИ</description>
</offer>
<offer id="34568" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_1_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>190</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1ca/k8w1ztpmzqk7nvfo9ils7yttsytoc1kp.png</picture>
<name>Паронит ПОН-Б 1 мм ВАТИ</name>
<description>Паронит ПОН-Б 1 мм ВАТИ</description>
</offer>
<offer id="34569" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_1_5_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>170</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f41/r54rdzm21croxfvof1oyx3gdcxx0skob.png</picture>
<name>Паронит ПОН-Б 1,5 мм ВАТИ</name>
<description>Паронит ПОН-Б 1,5 мм ВАТИ</description>
</offer>
<offer id="34570" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_2_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>165</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5b5/g7yby2fpt3913f9hypt0me0owfjwnty3.png</picture>
<name>Паронит ПОН-Б 2 мм ВАТИ</name>
<description>Паронит ПОН-Б 2 мм ВАТИ</description>
</offer>
<offer id="34571" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_3_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>165</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/42a/0no78g99enk6r7e5ucvmrqobpanwy2v8.png</picture>
<name>Паронит ПОН-Б 3 мм ВАТИ</name>
<description>Паронит ПОН-Б 3 мм ВАТИ</description>
</offer>
<offer id="34572" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_4_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>165</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac1/p3sro64181ckufsr9lafnxy21lok134h.png</picture>
<name>Паронит ПОН-Б 4 мм ВАТИ</name>
<description>Паронит ПОН-Б 4 мм ВАТИ</description>
</offer>
<offer id="34573" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_5_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>165</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/913/qdvj1r6qzjpqy2g49wi3lnerobf1z0ab.png</picture>
<name>Паронит ПОН-Б 5 мм ВАТИ</name>
<description>Паронит ПОН-Б 5 мм ВАТИ</description>
</offer>
<offer id="34574" available="false">
<url>http://himopttorg.ru/catalog/perekis_vodoroda/perekis_vodoroda_pl_kan_24_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>92</price>
<currencyId>RUB</currencyId>
<categoryId>3115</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6ff/8hujtdho5tt1slpvtmb57slpydlwht1q.jpeg</picture>
<name>Перекись водорода пл/кан 24 кг</name>
<description>Перекись водорода пл/кан 24 кг</description>
</offer>
<offer id="34590" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_vakuumnye_1/plastina_vakuumnaya_3_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>568</price>
<currencyId>RUB</currencyId>
<categoryId>3306</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9c8/kfchwyfn9m5g3l20q5fvp1ezxmdsy24o.jpg</picture>
<name>Пластина вакуумная  3 мм СЗР</name>
<description>Пластина вакуумная  3 мм СЗР</description>
</offer>
<offer id="34592" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_vakuumnye_1/plastina_vakuumnaya_5_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>3306</categoryId>
<picture>http://himopttorg.ru/upload/iblock/52f/r06yl4icbha2m6zc4dk2ra8kh0rjpuk1.jpg</picture>
<name>Пластина вакуумная  5 мм СЗР</name>
<description>Пластина вакуумная  5 мм СЗР</description>
</offer>
<offer id="34594" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_1_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>255</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/799/nh2c2lriwswtxc5dg39ov4ww9cre9150.gif</picture>
<name>Пластина МБС  1 мм СЗР</name>
<description>Пластина МБС  1 мм СЗР</description>
</offer>
<offer id="34597" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_2_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/497/jfdf9yxj8x5b0rnjive6vyvdu59ij02d.gif</picture>
<name>Пластина МБС  2 мм СЗР</name>
<description>Пластина МБС  2 мм СЗР</description>
</offer>
<offer id="34598" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_3_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6f5/ewjl7vm2nvpqdhoxgaezpgxyfsimoh7l.gif</picture>
<name>Пластина МБС  3 мм СЗР</name>
<description>Пластина МБС  3 мм СЗР</description>
</offer>
<offer id="34600" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_4_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/afe/3s0ypv9nn9l596ogsdhk6jlar98848g1.gif</picture>
<name>Пластина МБС  4 мм СЗР</name>
<description>Пластина МБС  4 мм СЗР</description>
</offer>
<offer id="34601" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_5_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/089/ctw1d1sqre6s06sy14558kk74bmrn6z6.gif</picture>
<name>Пластина МБС  5 мм СЗР</name>
<description>Пластина МБС  5 мм СЗР</description>
</offer>
<offer id="34602" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_6_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/757/l97m5299qwqcvqpu5znbewvpmaoxv7u9.gif</picture>
<name>Пластина МБС  6 мм СЗР</name>
<description>Пластина МБС  6 мм СЗР</description>
</offer>
<offer id="34603" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_8_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef2/lx307d7adwqnvkn5h6cld8uv7z5vpyid.gif</picture>
<name>Пластина МБС  8 мм СЗР</name>
<description>Пластина МБС  8 мм СЗР</description>
</offer>
<offer id="34611" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_3_mm_2_gr_uet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>473</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/709/lri7ugn9bn6f7jchcx3d2xd79t72bqwq.jpeg</picture>
<name>Пластина пористая  3 мм 2 гр УЭТ</name>
<description>Пластина пористая  3 мм 2 гр УЭТ</description>
</offer>
<offer id="34612" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_4_mm_2_gr_uet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>473</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/971/qrcylzk92wnfnyacojh2paao2hsxf8ah.jpeg</picture>
<name>Пластина пористая  4 мм 2 гр УЭТ</name>
<description>Пластина пористая  4 мм 2 гр УЭТ</description>
</offer>
<offer id="34613" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_5_mm_1_gr_uet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>473</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6b4/th2lrtrci8ade7kkgo87uknjijn3kfmb.jpeg</picture>
<name>Пластина пористая  5 мм 1 гр УЭТ</name>
<description>Пластина пористая  5 мм 1 гр УЭТ</description>
</offer>
<offer id="34614" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_6_mm_1_gr_uet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>460</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aa5/4munznrsy8z6syxid9k04ah5fyxukihg.jpeg</picture>
<name>Пластина пористая  6 мм 1 гр УЭТ</name>
<description>Пластина пористая  6 мм 1 гр УЭТ</description>
</offer>
<offer id="34615" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_8_mm_1_gr_uet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>473</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/869/0uarkn3s4lqx9k93kc73q0e06le7pjqx.jpeg</picture>
<name>Пластина пористая  8 мм 1 гр УЭТ</name>
<description>Пластина пористая  8 мм 1 гр УЭТ</description>
</offer>
<offer id="34617" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_10_mm_1_gr_uet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>473</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef9/gmfql3mh7irv4q957nkc0uun6cpdqcgw.jpeg</picture>
<name>Пластина пористая 10 мм 1 гр УЭТ</name>
<description>Пластина пористая 10 мм 1 гр УЭТ</description>
</offer>
<offer id="34621" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_20_mm_1_gr_uet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>473</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cc2/6kym2l645rvk78rzgdvw7ys8iwhnz9b4.jpeg</picture>
<name>Пластина пористая 20 мм 1 гр УЭТ</name>
<description>Пластина пористая 20 мм 1 гр УЭТ</description>
</offer>
<offer id="34622" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_20_mm_1kh2_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>9000</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/346/1w24g2gs77ovv57xj9imad12rslcjju7.jpeg</picture>
<name>Пластина пористая 20 мм 1х2 м</name>
<description>Пластина пористая 20 мм 1х2 м</description>
</offer>
<offer id="34623" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_1_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>245</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/11f/xvtbia3i7drcn82oxu0x4m145abyh7o1.gif</picture>
<name>Пластина ТМКЩ  1 мм СЗР</name>
<description>Пластина ТМКЩ  1 мм СЗР</description>
</offer>
<offer id="34624" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_1_5_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>437</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ba6/wcxbyy4dvcwqd7ku8wgn8z2aylscz1t3.gif</picture>
<name>Пластина ТМКЩ  1,5 мм СЗР</name>
<description>Пластина ТМКЩ  1,5 мм СЗР</description>
</offer>
<offer id="34627" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_2_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>172</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2e0/e8c9tz3zzmg99781uuwb5v3x94gauk91.gif</picture>
<name>Пластина ТМКЩ  2 мм СЗР</name>
<description>Пластина ТМКЩ  2 мм СЗР</description>
</offer>
<offer id="34628" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_3_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d69/47dh2zgn2mqeikpuucuedmns4yjssraq.gif</picture>
<name>Пластина ТМКЩ  3 мм</name>
<description>Пластина ТМКЩ  3 мм </description>
</offer>
<offer id="34631" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_3_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/abe/iyw80x4mpkc2ol9c55lsnpjnpsa37gjs.gif</picture>
<name>Пластина ТМКЩ  3 мм СЗР</name>
<description>Пластина ТМКЩ  3 мм СЗР</description>
</offer>
<offer id="34632" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_4_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3ad/utpy80jaupn08hoytfg8uca0tz4llpyl.gif</picture>
<name>Пластина ТМКЩ  4 мм</name>
<description>Пластина ТМКЩ  4 мм </description>
</offer>
<offer id="34634" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_4_mm_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>118</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d19/59nkc3tbx6xp1hpo3f426p0bg83ph160.gif</picture>
<name>Пластина ТМКЩ  4 мм КВАРТ</name>
<description>Пластина ТМКЩ  4 мм КВАРТ</description>
</offer>
<offer id="34635" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_4_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/180/wth0mhh3u3qgux2v9j33vp9lqiea71z6.gif</picture>
<name>Пластина ТМКЩ  4 мм СЗР</name>
<description>Пластина ТМКЩ  4 мм СЗР</description>
</offer>
<offer id="34639" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_5_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a40/wedm3bisgdia9mmx79jauqjjylz07m3m.gif</picture>
<name>Пластина ТМКЩ  5 мм СЗР</name>
<description>Пластина ТМКЩ  5 мм СЗР</description>
</offer>
<offer id="34640" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_6_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7ad/h2cil10wzgqc08b7v4ldcg2guan0h9iq.gif</picture>
<name>Пластина ТМКЩ  6 мм</name>
<description>Пластина ТМКЩ  6 мм </description>
</offer>
<offer id="34643" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_6_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8b7/66ycewbcyfj8eatasohg4fs2eskv18bg.gif</picture>
<name>Пластина ТМКЩ  6 мм СЗР</name>
<description>Пластина ТМКЩ  6 мм СЗР</description>
</offer>
<offer id="34646" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_8_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>124</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/564/92hrhky63fjenc94okidios7hq37uktl.gif</picture>
<name>Пластина ТМКЩ  8 мм СЗР</name>
<description>Пластина ТМКЩ  8 мм СЗР</description>
</offer>
<offer id="34647" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_10_mm_720kh720_russkaya_rezina/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>153</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/91d/zd5rt1i06trjdg8es7r9vge4vyu2owjn.jpeg</picture>
<name>Пластина ТМКЩ 10 мм 720х720 Русская резина</name>
<description>Пластина ТМКЩ 10 мм 720х720 Русская резина</description>
</offer>
<offer id="34648" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_10_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>123</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3d8/all4hdywmt5389adzkpjux4s9vmln9r4.gif</picture>
<name>Пластина ТМКЩ 10 мм СЗР</name>
<description>Пластина ТМКЩ 10 мм СЗР</description>
</offer>
<offer id="34652" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_20_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>128</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a3b/4od113yfsxswus7ftc7fz4tsw7w60v7m.gif</picture>
<name>Пластина ТМКЩ 20 мм СЗР</name>
<description>Пластина ТМКЩ 20 мм СЗР</description>
</offer>
<offer id="34653" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_25_mm_720kh720/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>188</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b38/krlkyq80b12oo5pdcesw42ghbin1j65j.jpeg</picture>
<name>Пластина ТМКЩ 25 мм 720х720</name>
<description>Пластина ТМКЩ 25 мм 720х720</description>
</offer>
<offer id="34661" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_transformatornye/plastina_transformatornaya_6_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>438.9</price>
<currencyId>RUB</currencyId>
<categoryId>3305</categoryId>
<picture>http://himopttorg.ru/upload/iblock/778/ei5swnxsahl16ptkfs3azbsirxpszrcs.jpg</picture>
<name>Пластина трансформаторная  6 мм</name>
<description>Пластина трансформаторная  6 мм</description>
</offer>
<offer id="34663" available="false">
<url>http://himopttorg.ru/catalog/plenka_polietilenovaya/plenka_polietilenovaya_150_mkr_1500kh2_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>260</price>
<currencyId>RUB</currencyId>
<categoryId>208</categoryId>
<picture>http://himopttorg.ru/upload/iblock/354/99rsya8h1a6of5m9pxv7ipf6ayqvz7qe.jpeg</picture>
<name>Пленка полиэтиленовая 150 мкр (1500х2)</name>
<description>Пленка полиэтиленовая 150 мкр (1500х2) </description>
</offer>
<offer id="34664" available="true">
<url>http://himopttorg.ru/catalog/plenka_polietilenovaya/plenka_polietilenovaya_200_mkr_1500kh2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>260</price>
<currencyId>RUB</currencyId>
<categoryId>208</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f4d/93ps3i3l82itymxxw23z9i91qcstaylw.jpeg</picture>
<name>Пленка полиэтиленовая 200 мкр(1500х2)</name>
<description>Пленка полиэтиленовая 200 мкр(1500х2)</description>
</offer>
<offer id="34665" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_20_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c36/wq2fv70kdo0ois3hjg7nwarnq75tyy9j.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  20 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  20 мм Пермь</description>
</offer>
<offer id="34666" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_30_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/54d/841epoa9kfpzeyi40vv0jcobhw8mk3uy.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  30 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  30 мм Пермь</description>
</offer>
<offer id="34667" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_40_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/535/6gdasmkjqd5z5civkqtk2xtk2vr0uoqh.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  40 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  40 мм Пермь</description>
</offer>
<offer id="34668" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_50_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bcc/o6pkive6gyllw4ilwzas5cngtezlzgzw.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  50 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  50 мм Пермь</description>
</offer>
<offer id="34670" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_70_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5ce/s3ay68qby07s0t9yie99wpdxm54lrhav.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  70 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  70 мм Пермь</description>
</offer>
<offer id="34671" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_80_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/697/pf2dsl3olf4jzoxreqzlk9ruuj728ujr.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  80 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  80 мм Пермь</description>
</offer>
<offer id="34672" available="false">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_90kh1000mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c12/jadhsb2eu2mphyrd9dhsc2xrz5kkzbmd.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  90х1000мм</name>
<description>Полиамид ПА 6 (капролон) стерж  90х1000мм </description>
</offer>
<offer id="34673" available="true">
<url>http://himopttorg.ru/catalog/kley_smola_ed_20_polietilenpoliamin/polietilenpoliamin_pl_kan_1_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2200</price>
<currencyId>RUB</currencyId>
<categoryId>3322</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd6/foj05hjdilgo3nt6qvym96o6lbyv6tf7.jpeg</picture>
<name>Полиэтиленполиамин пл/кан  1 кг</name>
<description>Полиэтиленполиамин пл/кан  1 кг </description>
</offer>
<offer id="34674" available="false">
<url>http://himopttorg.ru/catalog/kley_smola_ed_20_polietilenpoliamin/polietilenpoliamin_pl_kan_5_kg_nizhniy_tagil/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2200</price>
<currencyId>RUB</currencyId>
<categoryId>3322</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e96/ctyelo3oivrpkh94a8qg2z30po174kto.jpeg</picture>
<name>Полиэтиленполиамин пл/кан  5 кг Нижний Тагил</name>
<description>Полиэтиленполиамин пл/кан  5 кг Нижний Тагил</description>
</offer>
<offer id="34721" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>378</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/302/ihmzw6k33l0wlsoe50imhno872144zzk.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 10 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  25 мм 10 м гр 1 СЗР</description>
</offer>
<offer id="34745" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_32_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>360</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/57e/z95ja99zj3tby0zh0zl883kxfl24ed5z.jpeg</picture>
<name>Рукав всасывающий В  32 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий В  32 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="34747" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_38_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>372</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7c9/t34w8xqw1xk02a43mqqggpm0dd1em1l2.jpeg</picture>
<name>Рукав всасывающий В  38 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий В  38 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="34752" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>654</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e01/vtkmdg9xmausdcvm12x7p1s2wc6gun0m.jpeg</picture>
<name>Рукав всасывающий В  50 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий В  50 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="34762" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_10_m_gr_2_r_5/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>855</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/358/kfhqb0dfds9gtgs0un6z1957u2pug4g2.jpeg</picture>
<name>Рукав всасывающий В  75 мм  10 м гр 2 р-5</name>
<description>Рукав всасывающий В  75 мм  10 м гр 2 р-5</description>
</offer>
<offer id="34763" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1246</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/78f/25w66bff9at0xuez1e9iscv6jhizd0i1.jpeg</picture>
<name>Рукав всасывающий В 100 мм  4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В 100 мм  4 м гр 1 СЗРТ</description>
</offer>
<offer id="34764" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1200</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/003/eb741oo2md9c7r28o1tfvx1fqusi5u9o.jpeg</picture>
<name>Рукав всасывающий В 100 мм  4 м гр 1 Химтекс</name>
<description>Рукав всасывающий В 100 мм  4 м гр 1 Химтекс</description>
</offer>
<offer id="34770" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_10_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1076</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/66e/f38vvl50204pgau52u1o0vzap7m7kl4f.jpeg</picture>
<name>Рукав всасывающий В 100 мм 10 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В 100 мм 10 м гр 1 СЗРТ</description>
</offer>
<offer id="34798" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_3/rukav_napornyy_iii_6_3_mm_2_mpa_kislorod_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>46.3</price>
<currencyId>RUB</currencyId>
<categoryId>244</categoryId>
<picture>http://himopttorg.ru/upload/iblock/270/w02nl2tzznt73huaoejk4tvopz1qpkzn.jpeg</picture>
<name>Рукав напорный III- 6,3 мм 2 МПа кислород ВРТ</name>
<description>Рукав напорный III- 6,3 мм 2 МПа кислород ВРТ</description>
</offer>
<offer id="34799" available="true">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_3/rukav_napornyy_iii_6_3_mm_2_mpa_kislorod_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>50</price>
<currencyId>RUB</currencyId>
<categoryId>244</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4d8/d3r6hut552mi8r2ogz8slu3hzx2cdz0p.jpeg</picture>
<name>Рукав напорный III- 6,3 мм 2 МПа кислород СЗР</name>
<description>Рукав напорный III- 6,3 мм 2 МПа кислород СЗР</description>
</offer>
<offer id="34804" available="true">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_3/rukav_napornyy_iii_9_mm_2_mpa_kislorod_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>57.5</price>
<currencyId>RUB</currencyId>
<categoryId>244</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fbc/6p6u8o48uwdylgyzigmyfx91zbu9qdgg.jpeg</picture>
<name>Рукав напорный III- 9 мм 2 МПа кислород СЗР</name>
<description>Рукав напорный III- 9 мм 2 МПа кислород СЗР</description>
</offer>
<offer id="34845" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_20_mm_1_0_mpa_tu_szr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/227/r8ognnyg2o3qqb5prgdglpl5kumanmuq.jpeg</picture>
<name>Рукав напорный ВГ 20 мм 1,0 МПа ТУ СЗР</name>
<description>Рукав напорный ВГ 20 мм 1,0 МПа ТУ СЗР</description>
</offer>
<offer id="34850" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_25_mm_1_0_mpa_tu_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>221.9</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/df7/hq3zs4ouhxr2ld2wf5oqpty92xzrz5a3.jpeg</picture>
<name>Рукав напорный ВГ 25 мм 1,0 МПа ТУ ВРТ</name>
<description>Рукав напорный ВГ 25 мм 1,0 МПа ТУ ВРТ</description>
</offer>
<offer id="34853" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_38kh53_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>688</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d9f/1sqa3i9oua4pc26aoyvll7ka2idk9sk8.gif</picture>
<name>Рукав напорный ВГ 38х53 мм 1,0 МПа Кварт</name>
<description>Рукав напорный ВГ 38х53 мм 1,0 МПа Кварт</description>
</offer>
<offer id="34862" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_sh_1/rukav_napornyy_sh_50kh71_mm_1_6_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>3304</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9cc/lr4lvtb8p0fcd6s3egrz9k4d1mnn21xq.gif</picture>
<name>Рукав напорный Ш 50х71 мм 1,6 МПа Химтекс</name>
<description>Рукав напорный Ш 50х71 мм 1,6 МПа Химтекс</description>
</offer>
<offer id="34864" available="true">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_18_mm_0_8_mpa_par_2_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>721</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/41a/vm2nk0y94w1devc6bmg62s3z53kthz0i.gif</picture>
<name>Рукав паропроводный 18 мм 0,8 МПа пар-2 Кварт</name>
<description>Рукав паропроводный 18 мм 0,8 МПа пар-2 Кварт</description>
</offer>
<offer id="34868" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_32kh56_mm_0_8_mpa_par_2_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1420</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cdf/551flm1h70vd3gwm9ia0qap7b8us6jm8.gif</picture>
<name>Рукав паропроводный 32х56 мм 0,8 МПа пар-2 Кварт</name>
<description>Рукав паропроводный 32х56 мм 0,8 МПа пар-2 Кварт</description>
</offer>
<offer id="34880" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_6kh14_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>142</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7bf/3qfycrho9dv6gfa48acs5r9jg5dyqj6n.jpeg</picture>
<name>Рукав с нит опл  6х14 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл  6х14 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34881" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_6kh14_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/19d/jnfo51dcjomp898jjfje6jbg5df1ma2g.jpeg</picture>
<name>Рукав с нит опл  6х14 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл  6х14 мм 1,6 МПа СЗР </description>
</offer>
<offer id="34883" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_8kh15_mm_1_0_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>184</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/825/0iuwo7999u2ht77hdjfoygwdvmfc3vpv.jpeg</picture>
<name>Рукав с нит опл  8х15 мм 1,0 МПа ВРТ</name>
<description>Рукав с нит опл  8х15 мм 1,0 МПа ВРТ</description>
</offer>
<offer id="34885" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_10kh17_5_mm_1_47_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>184</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1af/fjc5q3v6v617pq2yh9m1y48nfnj39rwd.jpeg</picture>
<name>Рукав с нит опл 10х17,5 мм 1,47 МПа ВРТ</name>
<description>Рукав с нит опл 10х17,5 мм 1,47 МПа ВРТ</description>
</offer>
<offer id="34886" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_12kh20_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>175</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4bf/w6nupdomkfbod1mykhuzxnf4danuud28.jpeg</picture>
<name>Рукав с нит опл 12х20 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл 12х20 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34888" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_14kh23_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>231</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/786/8xxznpktzdvuhvc8to6vofnw9rcsqboi.jpeg</picture>
<name>Рукав с нит опл 14х23 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл 14х23 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34890" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_16kh25_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>302</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/366/5sbib4x4bqleqp6y347tpvwb1dbghcje.jpeg</picture>
<name>Рукав с нит опл 16х25 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл 16х25 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34891" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_18kh27_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>331</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3cd/1ks5fq4hfviotvapqvztk8olb4649xlg.jpeg</picture>
<name>Рукав с нит опл 18х27 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл 18х27 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34892" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_18kh27_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>187</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a82/yfzilzs6d43wg0v2b9wrjvxdmqxe2fre.jpeg</picture>
<name>Рукав с нит опл 18х27 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 18х27 мм 1,6 МПа СЗР </description>
</offer>
<offer id="34893" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_20kh29_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>360</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3f1/1ian2dr7ai5egmrjuaztly71g3ykwoub.jpeg</picture>
<name>Рукав с нит опл 20х29 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл 20х29 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34894" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_22kh32_mm_1_47_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>368.8</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b35/h2uq023vxihuude81ne9sey0g9iqp9q7.jpeg</picture>
<name>Рукав с нит опл 22х32 мм 1,47 МПа ВРТ</name>
<description>Рукав с нит опл 22х32 мм 1,47 МПа ВРТ</description>
</offer>
<offer id="34895" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_22kh32_mm_1_47_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/157/ao4lt2jz3la5z9hofqt9t47mew0dpj9c.jpeg</picture>
<name>Рукав с нит опл 22х32 мм 1,47 МПа СЗР</name>
<description>Рукав с нит опл 22х32 мм 1,47 МПа СЗР </description>
</offer>
<offer id="34896" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_25kh35_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>325</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c11/6lyr5bxm7x9oy1iqs1s9e2vj4l0hpkky.jpeg</picture>
<name>Рукав с нит опл 25х35 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл 25х35 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34897" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_25kh35_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>260</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2b3/4awcdu2n4z2iwwt86qpx84o3u0i15kfm.jpeg</picture>
<name>Рукав с нит опл 25х35 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 25х35 мм 1,6 МПа СЗР </description>
</offer>
<offer id="34898" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_27kh36_5_mm_0_49_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>275</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5ac/94tmfzuvmsddickuav436zu0keap6yk4.jpeg</picture>
<name>Рукав с нит опл 27х36,5 мм 0,49 МПа СЗР</name>
<description>Рукав с нит опл 27х36,5 мм 0,49 МПа СЗР </description>
</offer>
<offer id="34900" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_32kh43_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>363</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9cb/46l94nm381hluqslka95jf7f396ciqe2.jpeg</picture>
<name>Рукав с нит опл 32х43 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 32х43 мм 1,6 МПа СЗР </description>
</offer>
<offer id="34901" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_38kh49_mm_1_6_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>663.1</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/973/m1coj6juwf48nvvqxy1f48ycnhiz3rg1.jpeg</picture>
<name>Рукав с нит опл 38х49 мм 1,6 МПа ВРТ</name>
<description>Рукав с нит опл 38х49 мм 1,6 МПа ВРТ</description>
</offer>
<offer id="34902" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_38kh49_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>435</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5f6/gbtc8y1fdk7fdz8qjpm7xnq14jjgt623.jpeg</picture>
<name>Рукав с нит опл 38х49 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 38х49 мм 1,6 МПа СЗР </description>
</offer>
<offer id="34904" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_42kh55_mm_1_47_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>731</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fc9/42w9jxt27cqrpy9keifk1mmm9tlsg7x3.jpeg</picture>
<name>Рукав с нит опл 42х55 мм 1,47 МПа ВРТ</name>
<description>Рукав с нит опл 42х55 мм 1,47 МПа ВРТ</description>
</offer>
<offer id="34905" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_50kh61_5_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>630</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5a3/28fp1qwsjlnknn3w99icusls2aurn41s.jpeg</picture>
<name>Рукав с нит опл 50х61,5 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 50х61,5 мм 1,6 МПа СЗР </description>
</offer>
<offer id="34907" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_76kh91_mm_0_98_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1843</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/632/cffoztzfjdks008em2uijlgbyfgh0nmk.jpeg</picture>
<name>Рукав с нит опл 76х91 мм 0,98 МПа Кварт</name>
<description>Рукав с нит опл 76х91 мм 0,98 МПа Кварт</description>
</offer>
<offer id="34919" available="false">
<url>http://himopttorg.ru/catalog/smazochnye_materialy_1/smazka_grafitnaya_zhirovaya_pl_bar_9_0_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>960</price>
<currencyId>RUB</currencyId>
<categoryId>3314</categoryId>
<picture>http://himopttorg.ru/upload/iblock/60c/xawbvr1sajjdu06ca8oo94ib967g72fx.png</picture>
<name>Смазка графитная жировая пл/бар  9,0 кг</name>
<description>Смазка графитная жировая пл/бар  9,0 кг</description>
</offer>
<offer id="34922" available="true">
<url>http://himopttorg.ru/catalog/litol/smazka_litol_24_pl_bar_9_0_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2678</price>
<currencyId>RUB</currencyId>
<categoryId>3349</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1a6/9z4jkh8o4np20h29g40nk6jy437r9zdx.png</picture>
<name>Смазка Литол-24 пл/бар  9,0 кг</name>
<description>Смазка Литол-24 пл/бар  9,0 кг </description>
</offer>
<offer id="34925" available="true">
<url>http://himopttorg.ru/catalog/smazochnye_materialy_1/smazka_solidol_zhirovoy_pl_bar_9_0_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1133</price>
<currencyId>RUB</currencyId>
<categoryId>3314</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1e6/rdx5zoyzjj1zz9qr2qfm5w373y3fn2h4.png</picture>
<name>Смазка Солидол жировой пл/бар  9,0 кг</name>
<description>Смазка Солидол жировой пл/бар  9,0 кг </description>
</offer>
<offer id="34930" available="true">
<url>http://himopttorg.ru/catalog/kley_smola_ed_20_polietilenpoliamin/smola_ed_20_bar_5_kg_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3322</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c50/nv6kpo2d412kjqygusar58kkxjhypoea.jpeg</picture>
<name>Смола ЭД-20 бар 5 кг Дзержинск</name>
<description>Смола ЭД-20 бар 5 кг Дзержинск</description>
</offer>
<offer id="34931" available="true">
<url>http://himopttorg.ru/catalog/soda_kaltsinirovannaya_1/soda_kaltsinirovannaya_p_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>47</price>
<currencyId>RUB</currencyId>
<categoryId>3112</categoryId>
<picture>http://himopttorg.ru/upload/iblock/05a/jqr2trgfuwgqst1y4tjh6ztkmxb4jqyn.jpg</picture>
<name>Сода кальцинированная п/меш 25 кг</name>
<description>Сода кальцинированная п/меш 25 кг</description>
</offer>
<offer id="34934" available="false">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_tabletirovannaya_ekstra_mozyr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>30</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<picture>http://himopttorg.ru/upload/iblock/648/xyz378u2t47c732zpgz0p7bws52wsir7.jpeg</picture>
<name>Соль таблетированная Экстра Мозырь</name>
<description>Соль таблетированная Экстра Мозырь</description>
</offer>
<offer id="34945" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_2kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>844</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fc7/g2ng0lg3i4ayd8d36skqyimxnz2a52go.jpeg</picture>
<name>Текстолит ПТ лист  2х1000х1000 мм</name>
<description>Текстолит ПТ лист  2х1000х1000 мм </description>
</offer>
<offer id="34946" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_8kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac7/od7y6nnnmxpp71r96ro6vfgnresstanl.jpeg</picture>
<name>Текстолит ПТ лист  8х1000х1000 мм</name>
<description>Текстолит ПТ лист  8х1000х1000 мм </description>
</offer>
<offer id="34947" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_10kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/007/zd6r4beu3fk85azau4xgg9ayxmd0vrvy.jpeg</picture>
<name>Текстолит ПТ лист 10х1000х1000 мм</name>
<description>Текстолит ПТ лист 10х1000х1000 мм </description>
</offer>
<offer id="34953" available="false">
<url>http://himopttorg.ru/catalog/tosol_antifriz_1/tosol_a_40_pl_kan_10_kg_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>813</price>
<currencyId>RUB</currencyId>
<categoryId>3313</categoryId>
<picture>http://himopttorg.ru/upload/iblock/46e/8e3yjb180y2eooylisfucp59uyh5492i.jpeg</picture>
<name>Тосол А-40 пл/кан 10 кг Дзержинск</name>
<description>Тосол А-40 пл/кан 10 кг Дзержинск</description>
</offer>
<offer id="34954" available="false">
<url>http://himopttorg.ru/catalog/tosol_antifriz_1/tosol_a_40m_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>68</price>
<currencyId>RUB</currencyId>
<categoryId>3313</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4e9/8eymdzp4xrxrt161haqcsizvjejis1nx.jpeg</picture>
<name>Тосол А-40М Дзержинск</name>
<description>Тосол А-40М Дзержинск</description>
</offer>
<offer id="34988" available="false">
<url>http://himopttorg.ru/catalog/aminat/aminat_d_pl_kan_22_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>283</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<picture>http://himopttorg.ru/upload/iblock/28f/fozwu56i25tuj31b8vtorv8nptxfefb6.jpg</picture>
<name>Аминат Д пл/кан 22 кг Экос-1</name>
<description>Аминат Д пл/кан 22 кг Экос-1</description>
</offer>
<offer id="34990" available="false">
<url>http://himopttorg.ru/catalog/aminat/aminat_k_pl_kan_22_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>390</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9e3/n9m85bwurva8cv3t80x3r0q1oiuh91du.jpeg</picture>
<name>Аминат К пл/кан 22 кг Экос-1</name>
<description>Аминат К пл/кан 22 кг Экос-1</description>
</offer>
<offer id="34991" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_2_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1350</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dc9/xwbhbvje55rigid6sfohivhlwbw2wzni.jpg</picture>
<name>Асбошнур  2 мм ВАТИ</name>
<description>Асбошнур  2 мм ВАТИ</description>
</offer>
<offer id="34992" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_22_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f0c/1lbdkbm138uy71p502fw9y73kz0uuu59.jpg</picture>
<name>Асбошнур 22 мм ВАТИ</name>
<description>Асбошнур 22 мм ВАТИ</description>
</offer>
<offer id="34993" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_30_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>605</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d06/g1i31ba8t93xn3wu1ebptfe7ddrq5rgk.jpg</picture>
<name>Асбошнур 30 мм ВАТИ</name>
<description>Асбошнур 30 мм ВАТИ</description>
</offer>
<offer id="35001" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_200_mm_natur_mekh_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>190</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/95e/xgw3pwa2z12p4f65nfvaeoq9qxq1bl88.jpeg</picture>
<name>Валик в сборе 200 мм натур мех</name>
<description>Валик в сборе 200 мм натур мех </description>
</offer>
<offer id="35007" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_siniy_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/745/s0j7974kf5k6cbmy3ryn9cx8r55v3cfu.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав синий бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав синий бар 20 кг</description>
</offer>
<offer id="35008" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_siniy_zh_b_0_8_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>212.5</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aca/0ur9401lswfdaju7egkn6b5xayoowgpd.jpeg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав синий ж/б 0,8 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав синий ж/б 0,8 кг</description>
</offer>
<offer id="35017" available="true">
<url>http://himopttorg.ru/catalog/kislota_ortofosfornaya_tekhnicheskaya/kislota_ortofosfornaya_tekh_tu_pl_kan_35_kg_voskresensk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>170</price>
<currencyId>RUB</currencyId>
<categoryId>3346</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a56/nydiprd4bqgb42hq2z09mniavc1i12oh.jpeg</picture>
<name>Кислота ортофосфорная тех ТУ пл/кан 35 кг Воскресенск</name>
<description>Кислота ортофосфорная тех ТУ пл/кан 35 кг Воскресенск</description>
</offer>
<offer id="35018" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_pl_khobbi_2_50_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>60</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b82/ji7dtlylneq9lvlrbtars9e6rg57krg0.jpeg</picture>
<name>Кисть пл Хобби 2&quot;/50 мм</name>
<description>Кисть пл Хобби 2&quot;/50 мм</description>
</offer>
<offer id="35022" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_80kh120kh2_2_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2109</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8f8/8aksyd632vok8fhoo616wyp643l8ituj.jpeg</picture>
<name>Коврик грязесборный  80х120х2,2 см</name>
<description>Коврик грязесборный  80х120х2,2 см</description>
</offer>
<offer id="35024" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kompozitsiya_tsinol_ved_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1168</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/88b/9axde3qd7ttz1vahf3pmqqy1s7okey45.jpeg</picture>
<name>Композиция Цинол вед 25 кг</name>
<description>Композиция Цинол вед 25 кг</description>
</offer>
<offer id="35026" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_nts_2144_glyants_bar_16_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>598</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/06b/m9rjeht7ghp0dyi3tvtpmdrtid6fgbzy.jpg</picture>
<name>Лак НЦ-2144 глянц бар 16 кг Ярославль</name>
<description>Лак НЦ-2144 глянц бар 16 кг Ярославль</description>
</offer>
<offer id="35040" available="false">
<url>http://himopttorg.ru/catalog/smazochnye_materialy_1/maslo_transformatornoe_vg_boch_216_5_l_lukoyl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>38500</price>
<currencyId>RUB</currencyId>
<categoryId>3314</categoryId>
<picture>http://himopttorg.ru/upload/iblock/636/7ey7gzdz4331k4q2omu5ip4yjxlpdxge.jpeg</picture>
<name>Масло трансформаторное ВГ боч 216,5 л Лукойл</name>
<description>Масло трансформаторное ВГ боч 216,5 л Лукойл</description>
</offer>
<offer id="35043" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_18kh18_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>995</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c5d/xq0153shiz1lndk0o8u25ns7kk60mzym.jpg</picture>
<name>Набивка АПР-31 18х18 мм ВАТИ</name>
<description>Набивка АПР-31 18х18 мм ВАТИ</description>
</offer>
<offer id="35046" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_5_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>10800</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ec4/n0se3iinbznhld8cuoz27ocbt3wjk29w.jpeg</picture>
<name>Оргстекло  5 мм 1500х2050 ACRYMA</name>
<description>Оргстекло  5 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="35055" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_5_mm_1kh2_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2400</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fff/sl9isbr3ep1w8btjkuwu9s341jjtgieg.jpeg</picture>
<name>Пластина пористая  5 мм 1х2 м</name>
<description>Пластина пористая  5 мм 1х2 м</description>
</offer>
<offer id="35056" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_10_mm_1kh2_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4800</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/59d/p87sx2i3zez68p3mnwzdq537ahnset2g.jpeg</picture>
<name>Пластина пористая 10 мм 1х2 м</name>
<description>Пластина пористая 10 мм 1х2 м</description>
</offer>
<offer id="35064" available="true">
<url>http://himopttorg.ru/catalog/plenka_polietilenovaya/plenka_polietilenovaya_100_mkr_1500kh2_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>247</price>
<currencyId>RUB</currencyId>
<categoryId>208</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8c1/pu0eexkfieqpoehy4d3ov28qcmsr54nz.jpeg</picture>
<name>Пленка полиэтиленовая 100 мкр (1500х2)</name>
<description>Пленка полиэтиленовая 100 мкр (1500х2) </description>
</offer>
<offer id="35077" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/remontnoe_soedinenie_20_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>169</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c07/125aktmh5vipubiag01qbx21ld9b87m2.jpg</picture>
<name>Ремонтное соединение 20 мм</name>
<description>Ремонтное соединение 20 мм</description>
</offer>
<offer id="35089" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_4_m_gr_2_r_3_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1225</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b91/9m8z21qyyt73x4mr8q1l2vnae50ciskn.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   4 м гр 2 р-3 СЗР</name>
<description>Рукав всасывающий Б 100 мм   4 м гр 2 р-3 СЗР</description>
</offer>
<offer id="35092" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>907</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7af/ccamkzrgnvzyzb4kmlfzri55ggeoj1qq.jpeg</picture>
<name>Рукав всасывающий В  75 мм   4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий В  75 мм   4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="35098" available="true">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_1/rukav_napornyy_i_9_mm_0_63_mpa_atsetilen_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>55</price>
<currencyId>RUB</currencyId>
<categoryId>242</categoryId>
<picture>http://himopttorg.ru/upload/iblock/801/zzltfo1jh6lulrxc8ymes4lgoqksvu5f.jpeg</picture>
<name>Рукав напорный I- 9 мм 0,63 МПа ацетилен СЗР</name>
<description>Рукав напорный I- 9 мм 0,63 МПа ацетилен СЗР </description>
</offer>
<offer id="35109" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_16_mm_1_0_mpa_tu_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>131.3</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/690/mnx55irh5cgnapm7zoq22ztn4s2wmp0u.jpeg</picture>
<name>Рукав напорный ВГ 16 мм 1,0 МПа ТУ ВРТ</name>
<description>Рукав напорный ВГ 16 мм 1,0 МПа ТУ ВРТ</description>
</offer>
<offer id="35111" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_18_mm_1_0_mpa_tu_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>137.5</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/469/55qxqj3zj2n8u3n2y6vrxp3u9a4mi1ij.jpeg</picture>
<name>Рукав напорный ВГ 18 мм 1,0 МПа ТУ ВРТ</name>
<description>Рукав напорный ВГ 18 мм 1,0 МПа ТУ ВРТ</description>
</offer>
<offer id="35115" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_sh_1/rukav_napornyy_sh_38kh57_mm_1_6_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>659</price>
<currencyId>RUB</currencyId>
<categoryId>3304</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ffa/6ep6wfnx6gmg42wbbis1nwecsaybjr6l.gif</picture>
<name>Рукав напорный Ш 38х57 мм 1,6 МПа Химтекс</name>
<description>Рукав напорный Ш 38х57 мм 1,6 МПа Химтекс</description>
</offer>
<offer id="35120" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_25kh40_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>592</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/08c/2cvzwgwamgf2giixum4nqop5cylac09s.gif</picture>
<name>Рукав пневматический Г 25х40 мм 1,0 МПа Кварт</name>
<description>Рукав пневматический Г 25х40 мм 1,0 МПа Кварт</description>
</offer>
<offer id="35121" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_25kh40_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>408</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8e3/53srap77yssiid5mctp77pi43zic4ixo.gif</picture>
<name>Рукав пневматический Г 25х40 мм 1,0 МПа Химтекс</name>
<description>Рукав пневматический Г 25х40 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="35123" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_14kh23_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>155</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8e9/cp5nth4olc65lamag1ooc8wrsmf6tvy4.jpeg</picture>
<name>Рукав с нит опл 14х23 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 14х23 мм 1,6 МПа СЗР </description>
</offer>
<offer id="35126" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_70kh82_5_mm_0_29_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1447.5</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a5f/26y4o0n4vgp3es5bgcjubgmnlubnwmod.jpeg</picture>
<name>Рукав с нит опл 70х82,5 мм 0,29 МПа КРТ</name>
<description>Рукав с нит опл 70х82,5 мм 0,29 МПа КРТ</description>
</offer>
<offer id="35127" available="true">
<url>http://himopttorg.ru/catalog/smazochnye_materialy_1/smazka_solidol_zhirovoy_pl_bar_18_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2266</price>
<currencyId>RUB</currencyId>
<categoryId>3314</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f82/vao53zpdiic518u2vi5wz4jlu1japes8.png</picture>
<name>Смазка Солидол жировой пл/бар 18 кг</name>
<description>Смазка Солидол жировой пл/бар 18 кг </description>
</offer>
<offer id="35128" available="false">
<url>http://himopttorg.ru/catalog/kley_smola_ed_20_polietilenpoliamin/smola_ed_20_bar_50_kg_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>890</price>
<currencyId>RUB</currencyId>
<categoryId>3322</categoryId>
<picture>http://himopttorg.ru/upload/iblock/436/zpx5tlkhyzo2qzv8x0zld87sifyogrbi.jpeg</picture>
<name>Смола ЭД-20 бар 50 кг Дзержинск</name>
<description>Смола ЭД-20 бар 50 кг Дзержинск</description>
</offer>
<offer id="35130" available="false">
<url>http://himopttorg.ru/catalog/bytovye_moyushchie_sredstva/sredstvo_moyushchee_tekhn_vimol_marka_v_p_mesh_40_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84</price>
<currencyId>RUB</currencyId>
<categoryId>297</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e48/qdinfiji97x3w64m1ev3ocks4493nm10.jpeg</picture>
<name>Средство моющее техн Вимол марка В п/меш 40 кг</name>
<description>Средство моющее техн Вимол марка В п/меш 40 кг</description>
</offer>
<offer id="35134" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_4kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9be/mrhwmabk4lwjx9ibm2mwq0lo8ewxw5bz.jpeg</picture>
<name>Текстолит ПТ лист  4х1000х1000 мм</name>
<description>Текстолит ПТ лист  4х1000х1000 мм </description>
</offer>
<offer id="35135" available="false">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_5kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/039/ji07851ea98jck5ohvbt3t76rtsu6tj5.jpeg</picture>
<name>Текстолит ПТ лист  5х1000х1000 мм</name>
<description>Текстолит ПТ лист  5х1000х1000 мм </description>
</offer>
<offer id="35136" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_6kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ca8/8g8brdedqh9laeraer6vxtyo7ek7cs9w.jpeg</picture>
<name>Текстолит ПТ лист  6х1000х1000 мм</name>
<description>Текстолит ПТ лист  6х1000х1000 мм </description>
</offer>
<offer id="35157" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_25_40_972_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>54.6</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fc7/zh39e2gwylo8daop0uxbc0o5le8odbl3.jpeg</picture>
<name>Хомут NORMA TORRO 25-40/972</name>
<description>Хомут NORMA TORRO 25-40/972 </description>
</offer>
<offer id="35160" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_40_60_972/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>61.1</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4c4/gm4zgszcr49kz7dy7hziabyd7m0x2ngl.jpeg</picture>
<name>Хомут NORMA TORRO 40-60/972</name>
<description>Хомут NORMA TORRO 40-60/972</description>
</offer>
<offer id="35225" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_aero_belaya_zh_ved_26_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e2c/lykgyqsqtolo7d2fskk160m5vry3bbrn.png</picture>
<name>Эмаль Линия АЭРО белая ж/вед 26 кг Ярославль</name>
<description>Эмаль Линия АЭРО белая ж/вед 26 кг Ярославль</description>
</offer>
<offer id="35242" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_golubaya_zh_b_1_7_kg_gamma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>248.9</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро голубая ж/б 1,7 кг Гамма</name>
<description>Эмаль НЦ-132 нитро голубая ж/б 1,7 кг Гамма</description>
</offer>
<offer id="35244" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_zelenaya_bar_40_kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>405</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dfb/y9tzx8z26a3ahwoe5vdkycrox5g35fbv.jpg</picture>
<name>Эмаль НЦ-132 нитро зеленая бар 40 кг Алексин</name>
<description>Эмаль НЦ-132 нитро зеленая бар 40 кг Алексин</description>
</offer>
<offer id="35248" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_zol_zheltaya_bar_40_kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>390</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/220/n7aj897nnalts57zyzv8xhy8bsyovjub.jpg</picture>
<name>Эмаль НЦ-132 нитро зол желтая бар 40 кг Алексин</name>
<description>Эмаль НЦ-132 нитро зол желтая бар 40 кг Алексин</description>
</offer>
<offer id="35251" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_krasnaya_bar_40_kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>455</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/83c/cgwj24cbkg35p0137oaadnwna7vrpxk4.jpg</picture>
<name>Эмаль НЦ-132 нитро красная бар 40 кг Алексин</name>
<description>Эмаль НЦ-132 нитро красная бар 40 кг Алексин</description>
</offer>
<offer id="35256" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_sv_seraya_bar_40kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>405</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8bc/6giiipggwzmksd6y929nzrljqj51ej7g.jpg</picture>
<name>Эмаль НЦ-132 нитро св серая бар 40кг Алексин</name>
<description>Эмаль НЦ-132 нитро св серая бар 40кг Алексин</description>
</offer>
<offer id="35259" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_seraya_bar_40_kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>410</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/110/near826uw33kruuwg0sncthzkckk7wz8.jpg</picture>
<name>Эмаль НЦ-132 нитро серая бар 40 кг Алексин</name>
<description>Эмаль НЦ-132 нитро серая бар 40 кг Алексин</description>
</offer>
<offer id="35264" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_sinyaya_bar_40_kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eaa/ake12k5bc14t6au2dnlhkv4fe4f9q0bq.jpg</picture>
<name>Эмаль НЦ-132 нитро синяя бар 40 кг Алексин</name>
<description>Эмаль НЦ-132 нитро синяя бар 40 кг Алексин</description>
</offer>
<offer id="35267" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_chernaya_bar_40kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>430</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/68c/5ea46uxi5fbvyd6xx29xyq0l7n8o9eqb.jpg</picture>
<name>Эмаль НЦ-132 нитро черная бар 40кг Алексин</name>
<description>Эмаль НЦ-132 нитро черная бар 40кг Алексин</description>
</offer>
<offer id="35271" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_belaya_bar_50_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>253</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/40b/gtqffxrwuhll4rz24dlbijxabxf67ds4.jpeg</picture>
<name>Эмаль ПФ-115 белая бар 50 кг LIDA</name>
<description>Эмаль ПФ-115 белая бар 50 кг LIDA</description>
</offer>
<offer id="35278" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_belaya_profit_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/55f/lnl8lp15yshp785a9wpn8r8cng558ar5.jpg</picture>
<name>Эмаль ПФ-115 белая Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 белая Профит бар 25 кг Х-И</description>
</offer>
<offer id="35284" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_golubaya_profit_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>137.5</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/230/m3vpm0oqg2lfgkkuchli2sc0ak7ydvnp.jpg</picture>
<name>Эмаль ПФ-115 голубая Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 голубая Профит бар 25 кг Х-И</description>
</offer>
<offer id="35289" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_zheltaya_profit_bar_25_kg_kh_i_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c84/rog2rcp5wmaj5j86wcp0o8709y6v0bi5.jpg</picture>
<name>Эмаль ПФ-115 желтая Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 желтая Профит бар 25 кг Х-И </description>
</offer>
<offer id="35294" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_zelenaya_profit_bar_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>212</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/575/he1oq7abm4ur3m8nmq2v84lrbjxubs81.jpg</picture>
<name>Эмаль ПФ-115 зеленая Профит бар 25 кг</name>
<description>Эмаль ПФ-115 зеленая Профит бар 25 кг </description>
</offer>
<offer id="35303" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_krasnaya_profit_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>235</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3a1/8dxuwh4i4oc38fo0vhpgru38898g8gzm.jpg</picture>
<name>Эмаль ПФ-115 красная Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 красная Профит бар 25 кг Х-И</description>
</offer>
<offer id="35315" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_sv_seraya_profit_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>208</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d5e/zzg06xzewy2hlredkliqg3kury3f320z.jpg</picture>
<name>Эмаль ПФ-115 св серая Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 св серая Профит бар 25 кг Х-И</description>
</offer>
<offer id="35320" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_seraya_profit_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>212</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/706/7j1vt07pkevdwlpxpptbdkj3usd9nnmc.jpg</picture>
<name>Эмаль ПФ-115 серая Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 серая Профит бар 25 кг Х-И</description>
</offer>
<offer id="35324" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_sinyaya_profit_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>212</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/05e/a53sdxjgu9nuloya6h4md2swf6xrh44j.jpg</picture>
<name>Эмаль ПФ-115 синяя Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 синяя Профит бар 25 кг Х-И</description>
</offer>
<offer id="35329" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_chernaya_profit_bar_20_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>193.8</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/799/zjlom2ufodde9svgwhnt7pdhvnxllblc.jpg</picture>
<name>Эмаль ПФ-115 черная Профит бар 20 кг Х-И</name>
<description>Эмаль ПФ-115 черная Профит бар 20 кг Х-И</description>
</offer>
<offer id="35335" available="false">
<url>http://himopttorg.ru/catalog/emulsol/emulsol_egt_boch_175_kg_rostov_na_donu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>21200</price>
<currencyId>RUB</currencyId>
<categoryId>3350</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dd3/pxtzvo7pnvnk3pruravljq9vzxb1ohs1.jpeg</picture>
<name>Эмульсол ЭГТ боч 175 кг Ростов-на-Дону</name>
<description>Эмульсол ЭГТ боч 175 кг Ростов-на-Дону</description>
</offer>
<offer id="35336" available="true">
<url>http://himopttorg.ru/catalog/emulsol/emulsol_egt_rostov_na_donu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>3350</categoryId>
<picture>http://himopttorg.ru/upload/iblock/81c/ihmilbzo8gmqo8352ft8mexyz5imj0tv.jpeg</picture>
<name>Эмульсол ЭГТ Ростов-на-Дону</name>
<description>Эмульсол ЭГТ Ростов-на-Дону</description>
</offer>
<offer id="35337" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/etiltsellozolv_ch_st_but_0_95_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>620</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cf8/m07d9ae8co8q7sxiginxkyhv0z9hk7k4.jpeg</picture>
<name>Этилцеллозольв Ч ст/бут 0,95 кг Экос-1</name>
<description>Этилцеллозольв Ч ст/бут 0,95 кг Экос-1</description>
</offer>
<offer id="35338" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_12_22_972_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>48.1</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/361/0gfuurwf860im4zcvc9y6gj5a0d2mrfj.jpeg</picture>
<name>Хомут NORMA TORRO 12-22/972</name>
<description>Хомут NORMA TORRO 12-22/972 </description>
</offer>
<offer id="35361" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_aero_zheltaya_zh_ved_26_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>257</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e9a/oay7lhgiq60h9373nkqi3rjpj3s40do9.png</picture>
<name>Эмаль Линия АЭРО желтая ж/вед 26 кг Ярославль</name>
<description>Эмаль Линия АЭРО желтая ж/вед 26 кг Ярославль</description>
</offer>
<offer id="35362" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_aero_krasnaya_zh_ved_26_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>288</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/12d/qwdczwu7mkr54qcwx37b8xmq2de0cilv.png</picture>
<name>Эмаль Линия АЭРО красная ж/вед 26 кг Ярославль</name>
<description>Эмаль Линия АЭРО красная ж/вед 26 кг Ярославль</description>
</offer>
<offer id="35393" available="false">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/pudra_alyuminievaya_pap_1_bar_volgograd/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>720</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8b8/cczkjs60neztu1vvzimc4xp7yezs8hbm.jpeg</picture>
<name>Пудра алюминиевая ПАП-1 бар Волгоград</name>
<description>Пудра алюминиевая ПАП-1 бар Волгоград</description>
</offer>
<offer id="35399" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovry_dielektricheskie_750kh750kh6_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>748</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cb5/g60lw4thn928gnuoecxcodbp11iejznd.jpeg</picture>
<name>Ковры диэлектрические 750х750х6 мм</name>
<description>Ковры диэлектрические 750х750х6 мм </description>
</offer>
<offer id="35409" available="false">
<url>http://himopttorg.ru/catalog/litol/smazka_litol_24_pl_bar_18_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5562</price>
<currencyId>RUB</currencyId>
<categoryId>3349</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1af/trm6811wk4q3gj52xwxq12fgg8498s99.png</picture>
<name>Смазка Литол-24 пл/бар 18 кг</name>
<description>Смазка Литол-24 пл/бар 18 кг </description>
</offer>
<offer id="35418" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/rastvoritel_r_5_boch_175_kg_gost/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/897/c4fv1lwlyd0ydi1vo7jskplq138k31s2.png</picture>
<name>Растворитель Р-5 боч 175 кг ГОСТ</name>
<description>Растворитель Р-5 боч 175 кг ГОСТ</description>
</offer>
<offer id="35426" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_3/rukav_napornyy_iii_12_mm_2_mpa_kislorod_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>244</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f24/hfjh5uf1akg97uxwxt4aiwyb1pkm6jcz.jpeg</picture>
<name>Рукав напорный III-12 мм 2 МПа кислород Кварт</name>
<description>Рукав напорный III-12 мм 2 МПа кислород Кварт</description>
</offer>
<offer id="35441" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_4_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6b1/g65ct06dupf1q5v8d7viie8e0mb8dg4x.jpg</picture>
<name>Асбошнур  4 мм ВАТИ</name>
<description>Асбошнур  4 мм ВАТИ</description>
</offer>
<offer id="35442" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_ap_31_14kh14_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>665</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f50/p8xqtxdnh1inc55nur70sq7p3yn4etsa.jpg</picture>
<name>Набивка АП-31 14х14 мм ВАТИ</name>
<description>Набивка АП-31 14х14 мм ВАТИ</description>
</offer>
<offer id="35447" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_10_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>610</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7df/1tpjoblnzrg54x797dbdenwdz6e7rl9t.jpeg</picture>
<name>Рукав всасывающий В  50 мм 10 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  50 мм 10 м гр 1 СЗРТ</description>
</offer>
<offer id="35448" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_20kh29_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/24e/hr0y9kz4k0pkfdzr4wc6ewwlg0ln9hfg.jpeg</picture>
<name>Рукав с нит опл 20х29 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 20х29 мм 1,6 МПа СЗР </description>
</offer>
<offer id="35476" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_1/rukav_napornyy_i_9_mm_0_63_mpa_atsetilen_kvart_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>65</price>
<currencyId>RUB</currencyId>
<categoryId>242</categoryId>
<picture>http://himopttorg.ru/upload/iblock/624/iucbvdnvb54dqe590m9b3opqu0aci02k.jpeg</picture>
<name>Рукав напорный I- 9 мм 0,63 МПа ацетилен Кварт</name>
<description>Рукав напорный I- 9 мм 0,63 МПа ацетилен Кварт </description>
</offer>
<offer id="35486" available="true">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_20kh40_mm_0_8_mpa_par_2_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>875</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/218/jz1g2booa2rzo09ylewf70mkq36fniwu.gif</picture>
<name>Рукав паропроводный 20х40 мм 0,8 МПа пар-2 Кварт</name>
<description>Рукав паропроводный 20х40 мм 0,8 МПа пар-2 Кварт</description>
</offer>
<offer id="35489" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_40kh51_5_mm_1_6_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>453</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/82d/ud7fi8tg22gz9q2ac6jsf9g4q6twn3x3.jpeg</picture>
<name>Рукав с нит опл 40х51,5 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 40х51,5 мм 1,6 МПа СЗР</description>
</offer>
<offer id="35492" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_8_16_972_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>36</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ded/ra09r24q7wkkyxxrhvhdeawi05z39fyv.jpg</picture>
<name>Хомут NORMA TORRO  8-16/972</name>
<description>Хомут NORMA TORRO  8-16/972 </description>
</offer>
<offer id="35493" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_20_32_972_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>53.3</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0cb/70vcbwpon8h4jz6j93e9a4hjxsbtr4wo.jpeg</picture>
<name>Хомут NORMA TORRO 20-32/972</name>
<description>Хомут NORMA TORRO 20-32/972 </description>
</offer>
<offer id="35499" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_60kh1000_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5cd/etlak0cjk8d7sd3jrs2io55oe4gl31vq.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж  60х1000 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  60х1000 мм Пермь</description>
</offer>
<offer id="35506" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0a2/pmurdluhdqtmrjk0xsn17ed148yspgf7.jpeg</picture>
<name>Рукав всасывающий Б  75 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  75 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="35509" available="false">
<url>http://himopttorg.ru/catalog/syraya_rezina/syraya_rezina_gkh_2566_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>418</price>
<currencyId>RUB</currencyId>
<categoryId>256</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4e1/re00sxnzfhws98dlp2fwhe3i8vrlb5k0.jpeg</picture>
<name>Сырая резина ГХ-2566 СЗР</name>
<description>Сырая резина ГХ-2566 СЗР</description>
</offer>
<offer id="35511" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_riflenaya_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>231</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8b7/79btbrkbhycnqh4z4v3kncaijvd9cj7c.jpeg</picture>
<name>Автодорожка рифленая СЗР</name>
<description>Автодорожка рифленая СЗР</description>
</offer>
<offer id="35518" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_100_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd5/2az0edh7sbsogyfok4lfw5qfoircjgrh.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж 100 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж 100 мм Пермь</description>
</offer>
<offer id="35523" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_20kh33_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e0b/0nfaocl14j210hamhak4yapq8w3q1nes.gif</picture>
<name>Рукав пневматический Г 20х33 мм 1,0 МПа Кварт</name>
<description>Рукав пневматический Г 20х33 мм 1,0 МПа Кварт</description>
</offer>
<offer id="35543" available="true">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_50kh80_mm_0_8_mpa_par_2_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2125</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/db1/joq1525v5e2y5f3ln2adukzvmo10eeez.gif</picture>
<name>Рукав паропроводный 50х80 мм 0,8 МПа пар-2 Кварт</name>
<description>Рукав паропроводный 50х80 мм 0,8 МПа пар-2 Кварт</description>
</offer>
<offer id="35554" available="false">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_sv_ser_ral_7035_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>365</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3ba/p0q3cuaq53otk57aoog80kv290d2ebw0.png</picture>
<name>Эмаль ПФС Стрела св сер RAL 7035 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела св сер RAL 7035 бар 45 кг Ярославль</description>
</offer>
<offer id="35563" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_goluboy_zh_b_0_8_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>212.5</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/794/jtb3ev5msqadmpfjcvhu91kwmsd2ryan.jpeg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав голубой ж/б 0,8 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав голубой ж/б 0,8 кг</description>
</offer>
<offer id="35572" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_chernaya_ral_9005_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>380</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/920/ow2rtv5gpgw142inv6433uuh9he7p7bs.png</picture>
<name>Эмаль ПФС Стрела черная RAL 9005 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела черная RAL 9005 бар 45 кг Ярославль</description>
</offer>
<offer id="35576" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_6_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1089</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d73/klpse16s27c6juop9qukuhxqge3imylh.jpeg</picture>
<name>Рукав всасывающий В 100 мм  6 м гр 1 Химтекс</name>
<description>Рукав всасывающий В 100 мм  6 м гр 1 Химтекс</description>
</offer>
<offer id="35598" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_16kh25_mm_1_6_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>175</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a32/q17evuyedxtfja0q4jufrzvx1u1rexb0.jpeg</picture>
<name>Рукав с нит опл 16х25 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 16х25 мм 1,6 МПа СЗР </description>
</offer>
<offer id="35616" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_pishchevye_1/plastina_pishchevaya_4_mm_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>576</price>
<currencyId>RUB</currencyId>
<categoryId>3309</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bb2/wt3lhtxcnhvm0emzts26v81dgdug2yk4.jpeg</picture>
<name>Пластина пищевая  4 мм Кварт</name>
<description>Пластина пищевая  4 мм Кварт</description>
</offer>
<offer id="35618" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_10_m_gr_2_r_3_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>772</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/60d/q3plckdr3h67xzfeubf9q7r6tnl2z1p7.jpeg</picture>
<name>Рукав всасывающий Б  50 мм 10 м гр 2 р-3 СЗР</name>
<description>Рукав всасывающий Б  50 мм 10 м гр 2 р-3 СЗР</description>
</offer>
<offer id="35628" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_100_mm_isk_mekh_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>139</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eb8/zllbnylggnfmg1u69uk064vrg4sbbkox.jpeg</picture>
<name>Валик в сборе 100 мм иск мех</name>
<description>Валик в сборе 100 мм иск мех </description>
</offer>
<offer id="35649" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_4/rastvoritel_r_4_boch_175_kg_gost/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>245</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>http://himopttorg.ru/upload/iblock/06d/j2fhkbz3ob2ab1n1v7wnck2en5a1qxku.png</picture>
<name>Растворитель Р-4 боч 175 кг ГОСТ</name>
<description>Растворитель Р-4 боч 175 кг ГОСТ</description>
</offer>
<offer id="35659" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_10_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>854</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0a2/n29g647ltzgd2750fj77vxmv3lkyu6bq.jpeg</picture>
<name>Рукав всасывающий В  75 мм  10 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  75 мм  10 м гр 1 СЗРТ</description>
</offer>
<offer id="35675" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_sh_1/rukav_napornyy_sh_50kh71_mm_1_6_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1121.3</price>
<currencyId>RUB</currencyId>
<categoryId>3304</categoryId>
<picture>http://himopttorg.ru/upload/iblock/453/vygogrtnxhfl9bvdh4r8dh8atv6nhq0o.gif</picture>
<name>Рукав напорный Ш 50х71 мм 1,6 МПа СЗР</name>
<description>Рукав напорный Ш 50х71 мм 1,6 МПа СЗР</description>
</offer>
<offer id="35679" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_42kh55_mm_1_47_mpa_szr_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>525</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5d0/4ear3p2i9uw2kwyo397tsefwp0s04jre.jpeg</picture>
<name>Рукав с нит опл 42х55 мм 1,47 МПа СЗР</name>
<description>Рукав с нит опл 42х55 мм 1,47 МПа СЗР </description>
</offer>
<offer id="35701" available="false">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_t_zelenaya_ral_6028_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>381</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a0e/s1o89phy4b4jal021i01a70elga6ks0b.png</picture>
<name>Эмаль ПФС Стрела т зеленая RAL 6028 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела т зеленая RAL 6028 бар 45 кг Ярославль</description>
</offer>
<offer id="35708" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_5_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7a6/mud83dv144bbrser7av4k3fm0x97oflj.gif</picture>
<name>Пластина ТМКЩ  5 мм</name>
<description>Пластина ТМКЩ  5 мм </description>
</offer>
<offer id="35788" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_868_sereb_seraya_tes_termo_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>597</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1fa/r5f713hztqsh2pifnhjduuqj89p6ms9i.jpg</picture>
<name>Эмаль КО-868 сереб-серая ТЕС-ТЕРМО бар 25 кг</name>
<description>Эмаль КО-868 сереб-серая ТЕС-ТЕРМО бар 25 кг</description>
</offer>
<offer id="35791" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_56kh69_mm_0_98_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1065</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/74b/st2krhu9gm8p1ddj0b0pfqtbhge6vhvs.jpeg</picture>
<name>Рукав с нит опл 56х69 мм 0,98 МПа КРТ</name>
<description>Рукав с нит опл 56х69 мм 0,98 МПа КРТ</description>
</offer>
<offer id="35815" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_50kh61_5_mm_1_6_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>793</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3c7/v2qkwivxbq6v7vlsprd9r50n1q81a2l1.jpeg</picture>
<name>Рукав с нит опл 50х61,5 мм 1,6 МПа Кварт</name>
<description>Рукав с нит опл 50х61,5 мм 1,6 МПа Кварт</description>
</offer>
<offer id="35824" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kompozitsiya_alpol_zh_ved_18_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1095</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a9b/n7tve2i34tp071aluqh71m88xlzb0fbp.jpg</picture>
<name>Композиция Алпол ж/вед 18 кг</name>
<description>Композиция Алпол ж/вед 18 кг</description>
</offer>
<offer id="35837" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_140_mm_isk_mekh_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>169</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cd3/usxddj89xfkof0didlj6chjyyod0qp9y.jpeg</picture>
<name>Валик в сборе 140 мм иск мех</name>
<description>Валик в сборе 140 мм иск мех </description>
</offer>
<offer id="35838" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_180_mm_isk_mekh_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>164</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/490/zwz8k2md90x319vpykid99o2uk042n6h.jpeg</picture>
<name>Валик в сборе 180 мм иск мех</name>
<description>Валик в сборе 180 мм иск мех </description>
</offer>
<offer id="35839" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_215_mm_isk_mekh_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/985/3carx81cbhwr2t493ytyrprbag8onzyi.jpeg</picture>
<name>Валик в сборе 215 мм иск мех</name>
<description>Валик в сборе 215 мм иск мех </description>
</offer>
<offer id="35845" available="false">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_bt_577_chernyy_bar_50_kg_moskva/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>179</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/20a/0osfad8df132wj5xmvekrrbkty1uuafm.jpg</picture>
<name>Лак БТ-577 черный бар 50 кг Москва</name>
<description>Лак БТ-577 черный бар 50 кг Москва</description>
</offer>
<offer id="35856" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_pishchevye_1/plastina_pishchevaya_5_mm_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>576</price>
<currencyId>RUB</currencyId>
<categoryId>3309</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4e4/uvbe99bcb6h4oiz0khkuos7s2jh38rs8.jpeg</picture>
<name>Пластина пищевая  5 мм Кварт</name>
<description>Пластина пищевая  5 мм Кварт</description>
</offer>
<offer id="35871" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_16kh36_mm_0_8_mpa_par_2_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>738</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/81c/yvdfwns880e9ojq6otwbutpo68mqd4bz.gif</picture>
<name>Рукав паропроводный 16х36 мм 0,8 МПа пар-2 Кварт</name>
<description>Рукав паропроводный 16х36 мм 0,8 МПа пар-2 Кварт</description>
</offer>
<offer id="35893" available="false">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_golubaya_ral_5015_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>393</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d9a/07biiomvf4rkovqhvzjguobq17zgjers.png</picture>
<name>Эмаль ПФС Стрела голубая RAL 5015 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела голубая RAL 5015 бар 45 кг Ярославль</description>
</offer>
<offer id="35898" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_pishchevye_1/plastina_pishchevaya_3_mm_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>576</price>
<currencyId>RUB</currencyId>
<categoryId>3309</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5e2/n0o0e4x60g6grwbrcgleufixvmcfadpj.jpeg</picture>
<name>Пластина пищевая  3 мм Кварт</name>
<description>Пластина пищевая  3 мм Кварт</description>
</offer>
<offer id="35905" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_120kh1000mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/586/1h7foe02ihtg9zeekyieqpd718296tz7.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж 120х1000мм</name>
<description>Полиамид ПА 6 (капролон) стерж 120х1000мм </description>
</offer>
<offer id="35917" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_65_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>690</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/db0/f8c44ystou3patpuq790ahvvfkh140na.jpeg</picture>
<name>Рукав всасывающий В  65 мм  4 м гр 1 Химтекс</name>
<description>Рукав всасывающий В  65 мм  4 м гр 1 Химтекс</description>
</offer>
<offer id="35919" available="false">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_20kh33_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>335</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bc6/uhgdg0ur70znxa2cfpiz9zch2ux3yvn0.gif</picture>
<name>Рукав пневматический Г 20х33 мм 1,0 МПа Химтекс</name>
<description>Рукав пневматический Г 20х33 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="35937" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_kh_b_5_ti_nitka_s_pkhv_volna_berezka/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>18.7</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/033/wr8ydgzwxx00kpanoasbhljt11tld07a.jpeg</picture>
<name>Перчатки х/б 5-ти нитка с пхв Волна Березка</name>
<description>Перчатки х/б 5-ти нитка с пхв Волна Березка</description>
</offer>
<offer id="35975" available="true">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_3/rukav_napornyy_iii_16_mm_2_mpa_kislorod_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>166</price>
<currencyId>RUB</currencyId>
<categoryId>244</categoryId>
<picture>http://himopttorg.ru/upload/iblock/abe/2c6zlodtchx5hysbiek1p7o8lialeig1.jpeg</picture>
<name>Рукав напорный III-16 мм 2 МПа кислород Кварт</name>
<description>Рукав напорный III-16 мм 2 МПа кислород Кварт</description>
</offer>
<offer id="35980" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_20_mm_1_0_mpa_tu_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>162.5</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1e6/hb7rk2wsjg3iih53vcjquw43903u9mqy.jpeg</picture>
<name>Рукав напорный ВГ 20 мм 1,0 МПа ТУ  ВРТ</name>
<description>Рукав напорный ВГ 20 мм 1,0 МПа ТУ  ВРТ</description>
</offer>
<offer id="36016" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_seraya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>185</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e0a/kbsd3h5z1jbnkarpc0w0z2nzbgi04dgf.jpg</picture>
<name>Эмаль ПФ-115 серая Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 серая Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="36049" available="true">
<url>http://himopttorg.ru/catalog/prodecor_kraski/grunt_emal_prodecor_1201_ral9002_bar_50_kg_rk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>253</price>
<currencyId>RUB</currencyId>
<categoryId>3285</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2ae/prtop8sqtyh13z6abyjzojyfcrpx38pc.jpeg</picture>
<name>Грунт-эмаль Prodecor 1201  RAL9002 бар 50 кг РК</name>
<description>Грунт-эмаль Prodecor 1201  RAL9002 бар 50 кг РК</description>
</offer>
<offer id="36052" available="false">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_belaya_ral_9003_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>447</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/40a/y2k2jdiqq2g9wolul6zh1cg79am4rvvu.png</picture>
<name>Эмаль ПФС Стрела белая RAL 9003 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела белая RAL 9003 бар 45 кг Ярославль</description>
</offer>
<offer id="36053" available="false">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_oranzh_ral_2009_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>433</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/209/cum07uavtytv3fj1s80g11n9fvf313i7.png</picture>
<name>Эмаль ПФС Стрела оранж  RAL 2009 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела оранж  RAL 2009 бар 45 кг Ярославль</description>
</offer>
<offer id="36064" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_rebristyy_80kh120_sm_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>755</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b1e/g534o70z19jrxtn6ar7bstokupqtbq4u.jpeg</picture>
<name>Коврик влаговпитывающий ребристый 80х120 см серый</name>
<description>Коврик влаговпитывающий ребристый 80х120 см серый</description>
</offer>
<offer id="36065" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_50kh100kh1_6_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>570</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f99/ge3f42xd2hxtgians269apjr5eo5k6gg.jpeg</picture>
<name>Коврик грязесборный  50х100х1,6 см</name>
<description>Коврик грязесборный  50х100х1,6 см</description>
</offer>
<offer id="36066" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_80kh120kh1_6_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1320</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/254/a8trtzcbbw48bqsgvub52rlfb451f8w4.jpeg</picture>
<name>Коврик грязесборный  80х120х1,6 см</name>
<description>Коврик грязесборный  80х120х1,6 см</description>
</offer>
<offer id="36068" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_100kh200kh1_6_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3800</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4de/7ig7vwfauvwxjsyza3gmg3dyjeue03ng.jpeg</picture>
<name>Коврик грязесборный 100х200х1,6 см</name>
<description>Коврик грязесборный 100х200х1,6 см</description>
</offer>
<offer id="36112" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_korichnevaya_emlayt_bar_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>169</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ea1/plvcxvfszbm9mamuekzgco9std6kzt8s.jpg</picture>
<name>Эмаль ПФ-115 коричневая Эмлайт бар 25 кг</name>
<description>Эмаль ПФ-115 коричневая Эмлайт бар 25 кг </description>
</offer>
<offer id="36121" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/vannochka_dlya_kraski_32kh35_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>97.8</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a7d/pye2rjdcp9if85wmpc92l3825w6xxrop.jpeg</picture>
<name>Ванночка для краски 32х35 см</name>
<description>Ванночка для краски 32х35 см</description>
</offer>
<offer id="36123" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_6_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>607.5</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/370/ze0qjbavabf1bc2agcryx0p4aiwy40k8.jpeg</picture>
<name>Рукав всасывающий В  50 мм  6 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий В  50 мм  6 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="36124" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_6_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1095</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/758/1ne4b9ipzx11jenoizv3fyapoqu47uak.jpeg</picture>
<name>Рукав всасывающий В 100 мм  6 м гр 1  СЗРТ</name>
<description>Рукав всасывающий В 100 мм  6 м гр 1  СЗРТ</description>
</offer>
<offer id="36129" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_chernaya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>180</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1ff/8oovngitogbr1k5s8e3be8zxuisad3k8.jpg</picture>
<name>Эмаль ПФ-115 черная Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 черная Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="36141" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_150_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2477</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ad8/rvoonfhza5rqp4m9xsgye4781ynfciez.jpeg</picture>
<name>Рукав всасывающий В 150 мм  4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В 150 мм  4 м гр 1 СЗРТ</description>
</offer>
<offer id="36145" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_125_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1900</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c97/tr34nbcyx4ml9fbve052m0mfay0b84xp.jpeg</picture>
<name>Рукав всасывающий В 125 мм  4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В 125 мм  4 м гр 1 СЗРТ</description>
</offer>
<offer id="36151" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_6_m_gr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>741</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f1f/cy4kllc6h0xbcbqcx0luch8kzrrhebvl.jpeg</picture>
<name>Рукав всасывающий В  75 мм   6 м гр 1</name>
<description>Рукав всасывающий В  75 мм   6 м гр 1</description>
</offer>
<offer id="36181" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>818</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/919/gs2hqyb356fh93ouid0pazbqmddg94k4.jpeg</picture>
<name>Рукав всасывающий В  75 мм   4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  75 мм   4 м гр 1 СЗРТ</description>
</offer>
<offer id="36198" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_32_mm_10_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>339</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/57a/3xyw0s8uu14ok6abq1k8lqt5v8uwqwxu.jpg</picture>
<name>Рукав всасывающий В  32 мм 10 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  32 мм 10 м гр 1 СЗРТ</description>
</offer>
<offer id="36206" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_belaya_emlayt_bar_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>235</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6fd/qwjiqzkmey7baj3p364wk44ekn0g7dwx.jpg</picture>
<name>Эмаль ПФ-115 белая Эмлайт бар 25 кг</name>
<description>Эмаль ПФ-115 белая Эмлайт бар 25 кг </description>
</offer>
<offer id="36207" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_zheltaya_emlayt_bar_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>197</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e81/jm33wvf7bhkaacyrymw4b8e0168tqhzx.jpg</picture>
<name>Эмаль ПФ-115 желтая Эмлайт бар 25 кг</name>
<description>Эмаль ПФ-115 желтая Эмлайт бар 25 кг </description>
</offer>
<offer id="36228" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_10_mm_720kh720/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1600</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3f4/lgi996frjeart1712rhq0iwunq8yxhhl.jpeg</picture>
<name>Пластина ТМКЩ 10 мм 720х720</name>
<description>Пластина ТМКЩ 10 мм 720х720</description>
</offer>
<offer id="36308" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_seryy_u_bar_20_kg_ral7040_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b62/0bqj6og38hinzeotttxv2ryn80b4sweg.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав серый У бар 20 кг RAL7040 СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав серый У бар 20 кг RAL7040 СПб</description>
</offer>
<offer id="36317" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_zelenaya_emlayt_bar_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>195</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/af5/yjdjdshe4lzi1ftt8klkalptpdt0iqq4.jpg</picture>
<name>Эмаль ПФ-115 зеленая Эмлайт бар 25 кг</name>
<description>Эмаль ПФ-115 зеленая Эмлайт бар 25 кг </description>
</offer>
<offer id="36355" available="false">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_nts_218_bar_22_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>515</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/758/phomu9ibapi09przm1vde9t1njgfkz6y.jpg</picture>
<name>Лак НЦ-218 бар 22 кг</name>
<description>Лак НЦ-218 бар 22 кг </description>
</offer>
<offer id="36357" available="false">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_seraya_ral_7046_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>347</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/649/h442h6tswrwd6x84y6br7kw24w186kvs.png</picture>
<name>Эмаль ПФС Стрела серая RAL 7046 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела серая RAL 7046 бар 45 кг Ярославль</description>
</offer>
<offer id="36361" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_30_mm_720kh720_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4600</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f9c/bguoxr8k4dia8yps5lt4qpjttjl3a8th.jpeg</picture>
<name>Пластина ТМКЩ 30 мм 720х720</name>
<description>Пластина ТМКЩ 30 мм 720х720 </description>
</offer>
<offer id="36386" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_25kh36_mm_0_63_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>372</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2ef/uxvi5cpqf1dn1hqqk7k5yw2q6xddya54.gif</picture>
<name>Рукав напорный ВГ 25х36 мм 0,63 МПа Химтекс</name>
<description>Рукав напорный ВГ 25х36 мм 0,63 МПа Химтекс</description>
</offer>
<offer id="36401" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_20_mm_720kh720_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3100</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b35/pogswxc2oq2xq514xjgwtpbzqujuodw2.jpeg</picture>
<name>Пластина ТМКЩ 20 мм 720х720</name>
<description>Пластина ТМКЩ 20 мм 720х720 </description>
</offer>
<offer id="36402" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_40_mm_720kh720_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>6200</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/962/chaw6ulyl49806s0nz65zjfogx4qa6st.jpeg</picture>
<name>Пластина ТМКЩ 40 мм 720х720</name>
<description>Пластина ТМКЩ 40 мм 720х720 </description>
</offer>
<offer id="36410" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_2/rukav_napornyy_ii_6_3_mm_0_63_mpa_b_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>63.1</price>
<currencyId>RUB</currencyId>
<categoryId>243</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6f1/xozbx0unetqsx2i0fij6lv0xkg6496l1.jpeg</picture>
<name>Рукав напорный II- 6,3 мм 0,63 МПа (Б) Кварт</name>
<description>Рукав напорный II- 6,3 мм 0,63 МПа (Б) </description>
</offer>
<offer id="36416" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_zheltyy_u_bar_20_kg_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/39d/ajqkfm4mt1kudgq15mkwzjh5ky9oq9dq.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав желтый У бар 20 кг СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав желтый У бар 20 кг СПб</description>
</offer>
<offer id="36428" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>625</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a3a/0spasmrrlmhypq74ro9x1vfmwfcqqc07.jpeg</picture>
<name>Рукав всасывающий В  50 мм  4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  50 мм  4 м гр 1 СЗРТ</description>
</offer>
<offer id="36435" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/rastvoritel_r_5_a_boch_175_kg_gost/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>192</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d17/5e0onp9gbhbmnupoia5p3ch589c2k7rk.png</picture>
<name>Растворитель Р-5 А боч 175 кг ГОСТ</name>
<description>Растворитель Р-5 А боч 175 кг ГОСТ</description>
</offer>
<offer id="36443" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_16_mm_720kh720_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>262</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e1a/mgnw4qfd25obd93mxmwe1e18v7990e98.jpeg</picture>
<name>Пластина МБС 16 мм 720х720</name>
<description>Пластина МБС 16 мм 720х720 </description>
</offer>
<offer id="36468" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_40kh60kh1_6_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>264</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e42/9u489bjn7k8szmw7j81vd6e1krgi9kow.jpeg</picture>
<name>Коврик грязесборный  40х60х1,6 см</name>
<description>Коврик грязесборный  40х60х1,6 см</description>
</offer>
<offer id="36469" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_interernyy_welcome_40kh60_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>208.2</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7b8/53jjn1w9eby18ot7i4712y53on1nlahu.jpeg</picture>
<name>Коврик интерьерный Welcome 40х60 см</name>
<description>Коврик интерьерный Welcome 40х60 см</description>
</offer>
<offer id="36478" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_40_mm_720kh720_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>7700</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1cc/sh4c1e5ccd3c90ofmp7hi412gfq5wnk6.jpeg</picture>
<name>Пластина МБС 40 мм 720х720</name>
<description>Пластина МБС 40 мм 720х720 </description>
</offer>
<offer id="36518" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_6_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>820</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aee/0r8rfw2un90kxbsf8ctom071pv17wwm2.jpeg</picture>
<name>Рукав всасывающий В  75 мм   6 м гр 1 СЗР</name>
<description>Рукав всасывающий В  75 мм   6 м гр 1 СЗР</description>
</offer>
<offer id="36545" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_40kh60kh1_2_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>217</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/10d/xy57vbcn8tk6bgclnbobbvggmpm7qihh.jpeg</picture>
<name>Коврик грязесборный  40х60х1,2 см</name>
<description>Коврик грязесборный  40х60х1,2 см</description>
</offer>
<offer id="36555" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_20_mm_720kh720_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3800</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/521/zpslp1n8xqx3oi7copqmeup03hi23zzv.jpeg</picture>
<name>Пластина МБС 20 мм 720х720</name>
<description>Пластина МБС 20 мм 720х720 </description>
</offer>
<offer id="36584" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl100kh113_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2150</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/be0/xylmnq69e91nu2ec33kjk9udsbq1i9tn.jpeg</picture>
<name>Рукав с нит опл100х113 мм 1,0 МПа Кварт</name>
<description>Рукав с нит опл100х113 мм 1,0 МПа Кварт</description>
</offer>
<offer id="36595" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_10_mm_720kh720/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2000</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bf0/9hydffhmon6azs2h02wchduqr3624cf0.jpeg</picture>
<name>Пластина МБС 10 мм 720х720</name>
<description>Пластина МБС 10 мм 720х720</description>
</offer>
<offer id="36601" available="true">
<url>http://himopttorg.ru/catalog/lopaty_i_metly/lopata_polikarbonat_460kh400_mm_zoloto_gp/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1673</price>
<currencyId>RUB</currencyId>
<categoryId>3138</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f90/m2qtu12xwpommmazsswnc9rf5g7ghvb6.jpg</picture>
<name>Лопата поликарбонат 460х400 мм золото ГП</name>
<description>Лопата поликарбонат 460х400 мм золото ГП</description>
</offer>
<offer id="36610" available="true">
<url>http://himopttorg.ru/catalog/lopaty_i_metly/metla_sinteticheskaya_ploskaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>312</price>
<currencyId>RUB</currencyId>
<categoryId>3138</categoryId>
<name>Метла синтетическая плоская</name>
<description>Метла синтетическая плоская</description>
</offer>
<offer id="36621" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_sinyaya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>190</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef3/nqmhj6eqab48zudtfmw81y1s0u0ufoq4.jpg</picture>
<name>Эмаль ПФ-115 синяя Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 синяя Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="36631" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/mylo_tualetnoe_100_gr_v_assortimente/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>25</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fda/l156rx1qp3broo5i8zeov1bu4gm1z4x4.jpg</picture>
<name>Мыло туалетное 100 гр в ассортименте</name>
<description>Мыло туалетное 100 гр в ассортименте</description>
</offer>
<offer id="36647" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_250_mm_natur_mekh_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>195</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Валик в сборе 250 мм натур мех</name>
<description>Валик в сборе 250 мм натур мех </description>
</offer>
<offer id="36654" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_krasnaya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>190</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dcd/6gw5jd6mli5quoefejx3mokw6yg61s80.jpg</picture>
<name>Эмаль ПФ-115 красная Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 красная Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="36675" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/vetosh_trikotazhnaya_v_briketakh/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>236</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/563/zgnju4bs24ldmvpsgueuxirk69rp58gb.jpg</picture>
<name>Ветошь трикотажная в брикетах</name>
<description>Ветошь трикотажная в брикетах</description>
</offer>
<offer id="36683" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_palmira_420_g/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>77.3</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/603/lsy49t11cpuc2sb7ov4690sn7e5q3mdl.gif</picture>
<name>Моющее средство пальмира 420 г</name>
<description>Моющее средство пальмира 420 г</description>
</offer>
<offer id="36686" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_progress_1l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>65.5</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/167/eonn0ohv9ubyzmaal3umltm3dco45gps.jpg</picture>
<name>Моющее средство Прогресс 1л</name>
<description>Моющее средство Прогресс 1л</description>
</offer>
<offer id="36694" available="true">
<url>http://himopttorg.ru/catalog/lopaty_i_metly/cherenok_diam_40_v_s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3138</categoryId>
<name>Черенок диам 40 в/с</name>
<description>Черенок диам 40 в/с</description>
</offer>
<offer id="36697" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_p_1/rukav_napornyy_p_50_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>664.7</price>
<currencyId>RUB</currencyId>
<categoryId>3303</categoryId>
<picture>http://himopttorg.ru/upload/iblock/854/w5ne4z7e2bfl3400snnl4ab1k6pz73zs.gif</picture>
<name>Рукав напорный П 50 мм 1,0 МПа Кварт</name>
<description>Рукав напорный П 50 мм 1,0 МПа Кварт</description>
</offer>
<offer id="36700" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_65_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>800</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/900/s7hmq5br20ut0ecdoxh2knjmwsfmdv11.jpeg</picture>
<name>Рукав всасывающий Б  65 мм 10 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  65 мм 10 м гр 1 СЗР</description>
</offer>
<offer id="36715" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/mylo_zhidkoe_5_l_v_assortimente/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>190</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aa7/9nezwo5418w981bze3h3t3jc9yjufdxf.jpg</picture>
<name>Мыло жидкое 5 л в ассортименте</name>
<description>Мыло жидкое 5 л в ассортименте</description>
</offer>
<offer id="36751" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/mylo_tualetnoe_200_gr_bannoe_v_ob/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>37.1</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Мыло туалетное 200 гр Банное в/об</name>
<description>Мыло туалетное 200 гр Банное в/об</description>
</offer>
<offer id="36761" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_sinyaya_ral_5005_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>401</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/708/vpnj022o5fziq1teq7ackdhm5jp0fl8c.png</picture>
<name>Эмаль ПФС Стрела синяя RAL 5005 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела синяя RAL 5005 бар 45 кг Ярославль</description>
</offer>
<offer id="36765" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_gf_0119_kr_korich_bar_65_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>193</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b89/6quy4sn1f0fcm5endbdbjjqgdigbjtrx.jpg</picture>
<name>Грунт ГФ-0119 кр корич бар 65 кг</name>
<description>Грунт ГФ-0119 кр корич бар 65 кг  </description>
</offer>
<offer id="36798" available="true">
<url>http://himopttorg.ru/catalog/kanistry_i_kuby/kanistra_p_e_21_5_l_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>290</price>
<currencyId>RUB</currencyId>
<categoryId>3297</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ae1/rr82jnnlskzx9gzsho28dwx06nbq0u9i.jpeg</picture>
<name>Канистра п/э 21,5 л</name>
<description>Канистра п/э 21,5 л </description>
</offer>
<offer id="36805" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_dlya_stekla_minuta_500_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>65.2</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/90c/azsn0w7l71grsda4s3eican15unxgs95.jpg</picture>
<name>Моющее средство для стекла МИНУТА 500 мл</name>
<description>Моющее средство для стекла МИНУТА 500 мл</description>
</offer>
<offer id="36811" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_mbs_trikotazhnye_granat/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>113</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/be2/l614h0qppsy936v92s9igvizpp3u5qak.jpg</picture>
<name>Перчатки МБС трикотажные ГРАНАТ</name>
<description>Перчатки МБС трикотажные ГРАНАТ</description>
</offer>
<offer id="36820" available="true">
<url>http://himopttorg.ru/catalog/plenka_polietilenovaya/plenka_streych_20_mkm_0_50kh300m_2_0_kg_1up_6sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>463</price>
<currencyId>RUB</currencyId>
<categoryId>208</categoryId>
<name>Пленка стрейч 20 мкм 0,50х300м (2,0 кг) (1уп-6шт)</name>
<description>Пленка стрейч 20 мкм 0,50х300м (2,0 кг) (1уп-6шт)</description>
</offer>
<offer id="36844" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/belizna_1000ml_novomoskovsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>40.5</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b06/ttph4oo45akwn2mybps0t5p7xar8a1wa.jpg</picture>
<name>Белизна 1000мл</name>
<description>Белизна 1000мл </description>
</offer>
<offer id="36860" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_sv_seraya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>180</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d22/6n8u8agjniul3bunx0w9db612dkxc677.jpg</picture>
<name>Эмаль ПФ-115 св серая Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 св серая Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="36868" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_32_mm_10_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>332.4</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2ac/0c9fepcdglgwo6ieukuhz0ddnt5ce6j3.jpeg</picture>
<name>Рукав всасывающий В  32 мм 10 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий В  32 мм 10 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="36874" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/labomid_203/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>106</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2dc/sr39mf8se3vc878bu243q7sunjb34xf8.jpg</picture>
<name>Лабомид 203</name>
<description>Лабомид 203</description>
</offer>
<offer id="36879" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_oranzh_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0bb/4lzpexlt769mvrr53fm5p53bkbhvsmtn.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав оранж бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав оранж бар 20 кг </description>
</offer>
<offer id="36897" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_sanfor_750ml_gel/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>161</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2df/8slek86e4p9p8v9aw63ffxfhr25rx58a.jpg</picture>
<name>Моющее средство САНФОР 750мл гель</name>
<description>Моющее средство САНФОР 750мл гель</description>
</offer>
<offer id="36904" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_8_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a0d/c48q5mjigi7jx1cl2quuj0plf6ncwm91.gif</picture>
<name>Пластина ТМКЩ  8 мм</name>
<description>Пластина ТМКЩ  8 мм </description>
</offer>
<offer id="36916" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_kh_b_s_dvoynym_lateksnym_pokrytiem_lyuks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>29.8</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c3f/4if31q47y7ncl6albql7tv4yln4koz0s.jpg</picture>
<name>Перчатки х/б с двойным латексным покрытием ЛЮКС</name>
<description>Перчатки х/б с двойным латексным покрытием ЛЮКС</description>
</offer>
<offer id="36917" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_golubaya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>175</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/06a/wu81ciw7g01ki6ksnz2x7ssi2r1i106b.jpg</picture>
<name>Эмаль ПФ-115 голубая Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 голубая Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="36928" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_4/rastvoritel_r_4_pl_but_0_9_l_kh_i_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>226</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<name>Растворитель Р-4 пл/бут 0,9 л Х-И</name>
<description>Растворитель Р-4 пл/бут 0,9 л Х-И </description>
</offer>
<offer id="36962" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_mister_proper_500ml_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство Мистер Пропер 500мл</name>
<description>Моющее средство Мистер Пропер 500мл </description>
</offer>
<offer id="36994" available="false">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_v_s_pomol_3_mesh_50_kg_gost/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>16</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль в/с помол № 3  меш 50 кг ГОСТ</name>
<description>Соль в/с помол № 3  меш 50 кг ГОСТ</description>
</offer>
<offer id="37054" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_30_mm_720kh720_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5800</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<name>Пластина МБС 30 мм 720х720</name>
<description>Пластина МБС 30 мм 720х720 </description>
</offer>
<offer id="37057" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/rastvoritel_647_pl_kan_10_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1850</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<name>Растворитель 647 пл/кан 10 л Х-И</name>
<description>Растворитель 647 пл/кан 10 л Х-И</description>
</offer>
<offer id="37106" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_kr_korich_u_bar_20_kg_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dfd/cbh7dg3j8brxqde06ll7heea73hijtxq.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав кр корич У бар 20 кг СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав кр корич У бар 20 кг СПб</description>
</offer>
<offer id="37147" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/mylo_zhidkoe_500_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>108</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Мыло жидкое 500 мл</name>
<description>Мыло жидкое 500 мл</description>
</offer>
<offer id="37160" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>287</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f18/2qff2lkobwcg0zb1q539xfmaxjzqpfhi.jpeg</picture>
<name>Автодорожка пятачковая КРТ</name>
<description>Автодорожка пятачковая КРТ</description>
</offer>
<offer id="37229" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_20kh33_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>252</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1ef/7np4x2962ic3ldioo3caz06idt2cvxau.gif</picture>
<name>Рукав напорный ВГ 20х33 мм 1,0 МПа Химтекс</name>
<description>Рукав напорный ВГ 20х33 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="37260" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_4_m_gr_1_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>489</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4b8/2p20h3g6bipucz5z5fwj5pcdmuwgqb1c.jpeg</picture>
<name>Рукав всасывающий Б  38 мм 4 м гр 1 КРТ</name>
<description>Рукав всасывающий Б  38 мм 4 м гр 1 КРТ</description>
</offer>
<offer id="37265" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_10_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>216</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f4c/2a56f322a6s2mg1fyn6z5r47gc7j1rpw.jpeg</picture>
<name>Рукав силиконовый 10 мм 1,0 МПа</name>
<description>Рукав силиконовый 10 мм 1,0 МПа</description>
</offer>
<offer id="37266" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_20_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ea7/g51rkco9830jv2yzssw2g4ast4842aix.jpeg</picture>
<name>Рукав силиконовый 20 мм 1,0 МПа</name>
<description>Рукав силиконовый 20 мм 1,0 МПа</description>
</offer>
<offer id="37283" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_38kh53_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>398</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/899/0aobqw26ctjoe49f77ftfp38o3avfsab.gif</picture>
<name>Рукав пневматический Г 38х53 мм 1,0 МПа Химтекс</name>
<description>Рукав пневматический Г 38х53 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="37307" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_16_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>221</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/02b/6etde3rp42zhdzta7uk5iza3kivq0o8j.jpeg</picture>
<name>Рукав силиконовый 16 мм 1,0 МПа</name>
<description>Рукав силиконовый 16 мм 1,0 МПа</description>
</offer>
<offer id="37314" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_seryy_bar_20_kg_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав серый бар 20 кг ХИ</name>
<description>Грунт-эмаль ХВ-0278 по ржав серый бар 20 кг ХИ</description>
</offer>
<offer id="37324" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/stiralnyy_poroshok_lotos_volga_20_kg_avtomat/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1480</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d83/hcfb5p61rsp3s5otr13odvkesezxxno8.jpg</picture>
<name>Стиральный порошок Лотос-Волга 20 кг автомат</name>
<description>Стиральный порошок Лотос-Волга 20 кг автомат</description>
</offer>
<offer id="37334" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_belyy_bar_20_kg_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав белый бар 20 кг ХИ</name>
<description>Грунт-эмаль ХВ-0278 по ржав белый бар 20 кг ХИ</description>
</offer>
<offer id="37351" available="false">
<url>http://himopttorg.ru/catalog/perekis_vodoroda/perekis_vodoroda_pl_kan_11_4_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1125</price>
<currencyId>RUB</currencyId>
<categoryId>3115</categoryId>
<picture>http://himopttorg.ru/upload/iblock/66e/d0km8yaz8cjsnb6jhg24qrk9oozf8b5h.jpg</picture>
<name>Перекись водорода пл/кан 11,4 кг</name>
<description>Перекись водорода пл/кан 11,4 кг</description>
</offer>
<offer id="37356" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_4kh500kh500/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2902</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/635/06wigljferqsorsv208vfyl198s2n856.jpg</picture>
<name>Пластина силиконовая 4Х500х500</name>
<description>Пластина силиконовая 4Х500х500</description>
</offer>
<offer id="37358" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_14_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>298</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f95/4u4175pdsh1q89h1f2f9noysn41z4f02.jpeg</picture>
<name>Рукав силиконовый 14 мм 1,0 МПа</name>
<description>Рукав силиконовый 14 мм 1,0 МПа</description>
</offer>
<offer id="37359" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_18_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>423</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/14f/ndplu6sqvx94wb7mm0ar7ugiatj9mc8a.jpeg</picture>
<name>Рукав силиконовый 18 мм 1,0 МПа</name>
<description>Рукав силиконовый 18 мм 1,0 МПа</description>
</offer>
<offer id="37360" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_25_kh5_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>556</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/793/glg3qm5m3m1jhffx2nxapjvuc9b2kwj3.jpeg</picture>
<name>Рукав силиконовый 25 х5 мм 1,0 МПа</name>
<description>Рукав силиконовый 25 х5 мм 1,0 МПа</description>
</offer>
<offer id="37361" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_32_kh5_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>860</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/28e/x0h5k9y8sp6ysv8fgph396h9aralm6me.jpeg</picture>
<name>Рукав силиконовый 32 х5 мм 1,0 МПа</name>
<description>Рукав силиконовый 32 х5 мм 1,0 МПа</description>
</offer>
<offer id="37362" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_38_kh5_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>742</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b59/p4tjqgzppvev83fo3m9xotqzk6p770tq.jpeg</picture>
<name>Рукав силиконовый 38 х5 мм 1,0 МПа</name>
<description>Рукав силиконовый 38 х5 мм 1,0 МПа</description>
</offer>
<offer id="37363" available="false">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_40_kh5_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>820.7</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a4d/0oo8inhaapwjzj90nmqqoib27yl645u1.jpeg</picture>
<name>Рукав силиконовый 40 х5 мм 1,0 МПа</name>
<description>Рукав силиконовый 40 х5 мм 1,0 МПа</description>
</offer>
<offer id="37366" available="false">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/ognebiozashch_ekodom_rozovyy_pl_kan_11_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>946</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e15/1rwxd4198dqetmj2xk9mzwi624udripf.png</picture>
<name>Огнебиозащ Экодом розовый пл/кан 11 кг</name>
<description>Огнебиозащ Экодом розовый пл/кан 11 кг</description>
</offer>
<offer id="37387" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_feyri_450ml_v_assortimente/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>174</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f20/46k2k0nh9fv048bmx6wu8hrpqmnqodgx.jpg</picture>
<name>Моющее средство ФЕЙРИ 450мл в ассортименте</name>
<description>Моющее средство ФЕЙРИ 450мл в ассортименте</description>
</offer>
<offer id="37395" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_kr_korich_bar_20_kg_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав кр корич бар 20 кг ХИ</name>
<description>Грунт-эмаль ХВ-0278 по ржав кр корич бар 20 кг ХИ</description>
</offer>
<offer id="37396" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_siniy_bar_20_kg_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав синий бар 20 кг ХИ</name>
<description>Грунт-эмаль ХВ-0278 по ржав синий бар 20 кг ХИ</description>
</offer>
<offer id="37424" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_3kh500kh500_belaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4217</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Пластина силиконовая 3Х500х500 белая</name>
<description>Пластина силиконовая 3Х500х500 белая</description>
</offer>
<offer id="37469" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_dlya_vannoy_spa_50kh80_sm_bezhevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>442.7</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/854/p7f9gf4o5msx52fxkkn6z9hzt9xx8tsv.jpg</picture>
<name>Коврик для ванной SPA 50х80 см бежевый</name>
<description>Коврик для ванной SPA 50х80 см бежевый</description>
</offer>
<offer id="37470" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_dlya_vannoy_spa_50kh80_sm_zelenyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>455</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/adf/ugutps2hqpdhlczj3qqyhusbow4p1ehb.jpg</picture>
<name>Коврик для ванной SPA 50х80 см зеленый</name>
<description>Коврик для ванной SPA 50х80 см зеленый</description>
</offer>
<offer id="37471" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_dlya_vannoy_spa_58kh90_sm_bezhevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>573.2</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d6c/za5dphtxj9ymqi49rvrhru3bd8pf2tia.jpg</picture>
<name>Коврик для ванной SPA 58х90 см бежевый</name>
<description>Коврик для ванной SPA 58х90 см бежевый</description>
</offer>
<offer id="37472" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_dlya_vannoy_spa_58kh90_sm_zelenyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>590</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a4a/7w0osg7xrwwzbxrkdgates51c00rev13.jpg</picture>
<name>Коврик для ванной SPA 58х90 см зеленый</name>
<description>Коврик для ванной SPA 58х90 см зеленый</description>
</offer>
<offer id="37479" available="false">
<url>http://himopttorg.ru/catalog/polotno_kh_proshivnoe_1/polotno_kh_proshivnoe_1_6_m_kh_70_m_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>6200</price>
<currencyId>RUB</currencyId>
<categoryId>3319</categoryId>
<name>Полотно х-прошивное (1,6 м х 70 м)</name>
<description>Полотно х-прошивное (1,6 м х 70 м)</description>
</offer>
<offer id="37484" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/bumaga_tual_dobryy_motok_b_vtulki/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>15.4</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2c0/7xvxn90655n2732yox0s18e7d2lqasbl.jpg</picture>
<name>Бумага туал Добрый моток б/втулки</name>
<description>Бумага туал Добрый моток б/втулки</description>
</offer>
<offer id="37485" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/bumaga_tual_dobryy_motok_s_vtulk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>17.3</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4d1/3p2fksb99edui0his0q73zz6xzxgaafo.jpg</picture>
<name>Бумага туал Добрый моток с/втулк</name>
<description>Бумага туал Добрый моток с/втулк</description>
</offer>
<offer id="37514" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/meshki_d_m_30l_romashka_rul_20sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43.6</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e5b/q13hvzb6fkydzj5s1kexdvvebk1uq7fo.jpg</picture>
<name>Мешки д/м 30л.РОМАШКА(рул.20шт)</name>
<description>Мешки д/м 30л.РОМАШКА(рул.20шт)</description>
</offer>
<offer id="37515" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/meshok_polipropilenovyy_tkanyy_105smkh55sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>29.4</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4f8/k8qk9cjnptps5tozfp6cvfrmbjjz6jqh.jpg</picture>
<name>Мешок полипропиленовый тканый 105смх55см</name>
<description>Мешок полипропиленовый тканый 105смх55см</description>
</offer>
<offer id="37519" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/osvezhitel_vozdukha_v_assort_300ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>103</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e6a/gvbtt5pp471vtdm9f5je03ewvlqjfbo3.jpg</picture>
<name>Освежитель воздуха в ассорт 300мл</name>
<description>Освежитель воздуха в ассорт 300мл</description>
</offer>
<offer id="37526" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/polotentse_beloe_2_sl_peryshko_2sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>106</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3c9/dqmxqwn7qzi7rfkmnroe8l87jsulszo2.jpg</picture>
<name>Полотенце белое 2-сл Перышко 2шт</name>
<description>Полотенце белое 2-сл Перышко 2шт</description>
</offer>
<offer id="37533" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/stolovyy_nabor_19_predmetov_authentic_black_white_luminarc/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3646</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/95d/6pnqzgsbmkhm4uuaaqwma1e84y5lledq.jpeg</picture>
<name>Столовый набор 19 предметов Authentic Black&amp;White Luminarc</name>
<description>Столовый набор 19 предметов Authentic Black&amp;White Luminarc</description>
</offer>
<offer id="37555" available="true">
<url>http://himopttorg.ru/catalog/atseton_1/atseton_ch_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>366</price>
<currencyId>RUB</currencyId>
<categoryId>3351</categoryId>
<picture>http://himopttorg.ru/upload/iblock/193/82qulydxk2dupq1kyb4jmo0onwzeanaz.jpg</picture>
<name>Ацетон Ч пл/кан 8 кг (10 л) Экос-1</name>
<description>Ацетон Ч пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="37633" available="false">
<url>http://himopttorg.ru/catalog/zhidkoe_steklo/zhidkoe_steklo_pl_kan_15_kg_voronezh/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>55</price>
<currencyId>RUB</currencyId>
<categoryId>187</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2b0/s3ro7vse647nrsgukhwn7mtuxrjmgwaf.jpeg</picture>
<name>Жидкое стекло пл/кан 15 кг Воронеж</name>
<description>Жидкое стекло пл/кан 15 кг Воронеж</description>
</offer>
<offer id="37634" available="false">
<url>http://himopttorg.ru/catalog/zhidkoe_steklo/zhidkoe_steklo_pl_kan_45_kg_voronezh/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>52</price>
<currencyId>RUB</currencyId>
<categoryId>187</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f90/2r8yzzlr2jx768nttz53y92o0ehvcqrp.jpeg</picture>
<name>Жидкое стекло пл/кан 45 кг Воронеж</name>
<description>Жидкое стекло пл/кан 45 кг Воронеж</description>
</offer>
<offer id="37656" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/lenta_fum_10_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1854</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/11c/9xyzrurse38rw1scdp01ydrkppm0vkt7.jpeg</picture>
<name>Лента ФУМ 10 мм Пермь</name>
<description>Лента ФУМ 10 мм Пермь</description>
</offer>
<offer id="37657" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/lenta_fum_20_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1854</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cf1/xyapv6wop1bah2icba59uerz0h3umuve.jpeg</picture>
<name>Лента ФУМ 20 мм Пермь</name>
<description>Лента ФУМ 20 мм Пермь</description>
</offer>
<offer id="37661" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_2kh1000kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<name>Фторопласт пласт  2х1000х1000 мм</name>
<description>Фторопласт пласт  2х1000х1000 мм</description>
</offer>
<offer id="37662" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_4kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<name>Фторопласт пласт  4х1000х1000 мм</name>
<description>Фторопласт пласт  4х1000х1000 мм </description>
</offer>
<offer id="37663" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_20kh1000_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/914/dbydjvbv30kjbdsab626o0wosye3403l.jpeg</picture>
<name>Фторопласт стерж  20х1000 мм Пермь</name>
<description>Фторопласт стерж  20х1000 мм Пермь</description>
</offer>
<offer id="37665" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_30kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1ad/srvzinnr0ynzc1ojfqvhifrpzloqyggi.jpeg</picture>
<name>Фторопласт стерж  30х1000 мм</name>
<description>Фторопласт стерж  30х1000 мм </description>
</offer>
<offer id="37666" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_40kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e17/iex7ebd073d3oibtzks620ixxtcts57i.jpeg</picture>
<name>Фторопласт стерж  40х1000 мм</name>
<description>Фторопласт стерж  40х1000 мм </description>
</offer>
<offer id="37667" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_50kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/713/0kjnudj8il16p0kdv1biyy9b2ravneo2.jpeg</picture>
<name>Фторопласт стерж  50х1000 мм</name>
<description>Фторопласт стерж  50х1000 мм </description>
</offer>
<offer id="37668" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_60kh1000_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a67/tli9rpurrs40c91dsbpcjnx1oqtkfy56.jpeg</picture>
<name>Фторопласт стерж  60х1000 мм Пермь</name>
<description>Фторопласт стерж  60х1000 мм Пермь</description>
</offer>
<offer id="37669" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_70kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c3e/4ugpmqw6haz6iuv7wnszccb0noda9bog.jpeg</picture>
<name>Фторопласт стерж  70х1000 мм</name>
<description>Фторопласт стерж  70х1000 мм </description>
</offer>
<offer id="37670" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_80kh1000_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/742/41kcih69fqnhgelixjrbe0gh5r7mjrl4.jpeg</picture>
<name>Фторопласт стерж  80х1000 мм Пермь</name>
<description>Фторопласт стерж  80х1000 мм Пермь</description>
</offer>
<offer id="37671" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_90kh1000_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0bc/xllslzcn7cyfvnzrx1865u7wxi2r6s37.jpeg</picture>
<name>Фторопласт стерж  90х1000 мм Пермь</name>
<description>Фторопласт стерж  90х1000 мм Пермь</description>
</offer>
<offer id="37676" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_25_mm_0_7_mpa_morozostoykiy_snegir_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>108</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/037/h82zlz1ogarjttbx2xq9yg07r8qunpny.png</picture>
<name>Шланг нап всас ПВХ 25 мм 0,7 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 25 мм 0,7 МПа морозостойкий Снегирь</description>
</offer>
<offer id="37680" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_38_mm_0_7_mpa_morozostoykiy_snegir_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>147</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/748/54os53l0ftzp2mbmk22ncajd7j21t24v.png</picture>
<name>Шланг нап всас ПВХ 38 мм 0,7 МПа  морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 38 мм 0,7 МПа  морозостойкий Снегирь</description>
</offer>
<offer id="37689" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_76_mm_agro_elastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1273</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5d1/g1t04nq9b5yo46urid75f9qgo5zkrw48.jpeg</picture>
<name>Шланг нап всас ПВХ 76 мм  Агро Эластик</name>
<description>Шланг нап всас ПВХ 76 мм  Агро Эластик</description>
</offer>
<offer id="37690" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_100_mm_agro_elastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2022</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/288/yt7dxxbk002emosqpcdbaa687gbwk3mv.jpeg</picture>
<name>Шланг нап всас ПВХ 100 мм  Агро Эластик</name>
<description>Шланг нап всас ПВХ 100 мм  Агро Эластик</description>
</offer>
<offer id="37708" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_19_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>470</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9b2/fvgzdi7kx50onqt829e0r2wm4xztowb5.jpeg</picture>
<name>Шланг ПВХ 19 мм с мет спиралью</name>
<description>Шланг ПВХ 19 мм с мет спиралью</description>
</offer>
<offer id="37709" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_40_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1350</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/761/oszdvtvy9ci2idhgjo8ey4qzngad22m0.jpeg</picture>
<name>Шланг ПВХ 40 мм с мет спиралью</name>
<description>Шланг ПВХ 40 мм с мет спиралью</description>
</offer>
<offer id="37710" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_45_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>819.7</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/915/q4pbgbu0p70glf2v985l91hltb0x7wae.jpeg</picture>
<name>Шланг ПВХ 45 мм с мет спиралью</name>
<description>Шланг ПВХ 45 мм с мет спиралью</description>
</offer>
<offer id="37764" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_100kh1000mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/89c/maqwm5es15xwh73ek2ibi4hle0cpmgrn.jpeg</picture>
<name>Фторопласт стерж 100х1000мм Пермь</name>
<description>Фторопласт стерж 100х1000мм Пермь</description>
</offer>
<offer id="37771" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_5kh1000kh1000_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f08/14d65wvzwlles851wfvb2d3ssh9hnlw6.jpeg</picture>
<name>Фторопласт пласт  5х1000х1000 мм Пермь</name>
<description>Фторопласт пласт  5х1000х1000 мм Пермь</description>
</offer>
<offer id="37786" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_3kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/448/osxidg5e1smm0l2kejn1arsfe5d6rlnj.jpeg</picture>
<name>Фторопласт пласт  3х1000х1000 мм</name>
<description>Фторопласт пласт  3х1000х1000 мм </description>
</offer>
<offer id="37788" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_12_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>247</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3fd/xril6yqhao43mkrlramiomvqckgmmty5.jpeg</picture>
<name>Рукав силиконовый 12 мм 1,0 МПа</name>
<description>Рукав силиконовый 12 мм 1,0 МПа</description>
</offer>
<offer id="37792" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_51_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1807</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd3/y5vg33odn0g4cwsg1eazcrag8nw34nri.jpeg</picture>
<name>Шланг ПВХ 51 мм с мет спиралью</name>
<description>Шланг ПВХ 51 мм с мет спиралью</description>
</offer>
<offer id="37817" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_100kh113_mm_0_5_mpa_1500s_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1586</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/91b/95fvf8k46qwpgcxijyclv9uta904k9t3.jpeg</picture>
<name>Шланг нап всас ПВХ 100х113 мм 0,5 МПа 1500S МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 100х113 мм 0,5 МПа 1500S МПТ-Пластик</description>
</offer>
<offer id="37852" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_32kh41_5_mm_0_63_mpa_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>407</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/03d/g81uopl7ri27ont4wwolrbq96m9sq5rd.jpeg</picture>
<name>Рукав с нит опл 32х41,5 мм 0,63 МПа СЗРТ</name>
<description>Рукав с нит опл 32х41,5 мм 0,63 МПа СЗРТ</description>
</offer>
<offer id="37858" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_12/rastvoritel_r_12_pl_kan_5_l_lkm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2200</price>
<currencyId>RUB</currencyId>
<categoryId>3341</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1e3/mqhdchjhne05kn0yabp108npam6h3rgi.jpg</picture>
<name>Растворитель Р-12 пл/кан 5 л ЛКМ</name>
<description>Растворитель Р-12 пл/кан 5 л ЛКМ</description>
</offer>
<offer id="37860" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_krucha_metal_flex_30_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>830</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a35/rqrrsc9nitohf1bbzc0qfw7kuqpwxdxa.jpeg</picture>
<name>Шланг ПВХ Круча Metal-Flex 30 мм</name>
<description>Шланг ПВХ Круча Metal-Flex 30 мм</description>
</offer>
<offer id="37864" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1400kh5000kh4_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>10250</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ade/b5gd9t10k7n3lg3kbu5rtrbjcp547sye.jpg</picture>
<name>Автодорожка пятачковая 1400х5000х4 мм</name>
<description>Автодорожка пятачковая 1400х5000х4 мм</description>
</offer>
<offer id="37865" available="false">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_200_mm_porolon/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>81.5</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/751/r0w41qe1k8zbbtqj82b5oydfycx3foa1.jpeg</picture>
<name>Валик в сборе 200 мм поролон</name>
<description>Валик в сборе 200 мм поролон</description>
</offer>
<offer id="37870" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_chernyy_bar_20_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>360</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав черный бар 20 кг Х-И</name>
<description>Грунт-эмаль ХВ-0278 по ржав черный бар 20 кг Х-И</description>
</offer>
<offer id="37873" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kraska_bt_177_serebr_bar_18_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>290</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fd7/2ofhf6zzjs1oqlarlmk8v6jfw5ohq5w1.jpeg</picture>
<name>Краска БТ-177 серебр бар 18 кг</name>
<description>Краска БТ-177 серебр бар 18 кг </description>
</offer>
<offer id="37881" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/mylo_khozyaystvennoe_72_200_gr_upak_60_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>22.6</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2f8/zu1901vnodk2uo1ui51vx354mwmznjhc.jpg</picture>
<name>Мыло хозяйственное 72% 200 гр </name>
<description>Мыло хозяйственное 72% 200 гр</description>
</offer>
<offer id="37882" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_12_mm_1000kh1000_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3064</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/349/kmc4mkxekya49tpbq4h04564xh4jqd7f.jpg</picture>
<name>Пластина ТМКЩ 12 мм 1000х1000</name>
<description>Пластина ТМКЩ 12 мм 1000х1000 </description>
</offer>
<offer id="37914" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_belaya_bar_22_kg_aleksin/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>435</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6a0/442sljt7u01yrygqgy2eiytuif54tcjk.jpg</picture>
<name>Эмаль НЦ-132 нитро белая бар 22 кг Алексин</name>
<description>Эмаль НЦ-132 нитро белая бар 22 кг Алексин</description>
</offer>
<offer id="37931" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_fl_03_k_bar_56_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>278</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<picture>http://himopttorg.ru/upload/iblock/413/9yb4wtewoskg3cy041xlfgg766t3vsgo.png</picture>
<name>Грунт ФЛ-03 К бар 56 кг Х-И</name>
<description>Грунт ФЛ-03 К бар 56 кг Х-И</description>
</offer>
<offer id="37959" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_krucha_metal_flex_14_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>367</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b6c/i8k9l03bg2zsaypq7x8sw6uy7ia34ldr.jpeg</picture>
<name>Шланг ПВХ Круча Metal-Flex 14 мм</name>
<description>Шланг ПВХ Круча Metal-Flex 14 мм</description>
</offer>
<offer id="37985" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/mylo_zhidkoe_5_l_v_assort_antibak/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>254</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Мыло жидкое 5 л в ассорт антибак</name>
<description>Мыло жидкое 5 л в ассорт антибак</description>
</offer>
<offer id="38019" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_krasnyy_bar_20_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>375</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав красный бар 20 кг Х-И</name>
<description>Грунт-эмаль ХВ-0278 по ржав красный бар 20 кг Х-И</description>
</offer>
<offer id="38025" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_zelenyy_bar_20_kg_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав зеленый бар 20 кг ХИ</name>
<description>Грунт-эмаль ХВ-0278 по ржав зеленый бар 20 кг ХИ</description>
</offer>
<offer id="38034" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_oranzhevaya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>196</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fe5/fn0hsllgiclo0yqoqiomin2bnuggvanr.jpg</picture>
<name>Эмаль ПФ-115 оранжевая Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 оранжевая Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="38040" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_zheltyy_bar_20_kg_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>360</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав желтый бар 20 кг ХИ</name>
<description>Грунт-эмаль ХВ-0278 по ржав желтый бар 20 кг ХИ</description>
</offer>
<offer id="38050" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_60kh74_mm_1_6_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1356</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4f8/160bupm6ilhcnt9qz0yuru0pgvp76nok.jpg</picture>
<name>Рукав с нит опл 60х74 мм 1,6 МПа Кварт</name>
<description>Рукав с нит опл 60х74 мм 1,6 МПа Кварт</description>
</offer>
<offer id="38060" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khs_436_zelenaya_kompl_s_otver_20_4_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>373</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/981/aqpg6r80j524236pix55ta5kmzp5qobv.jpg</picture>
<name>Эмаль ХС-436 зеленая компл с отвер 20,4 кг</name>
<description>Эмаль ХС-436 зеленая компл с отвер 20,4 кг</description>
</offer>
<offer id="38077" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/remontnoe_soedinenie_16_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>107</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/258/ckktj9uz7jr68r6d0x8dauqn23rmhpzt.jpg</picture>
<name>Ремонтное соединение 16 мм</name>
<description>Ремонтное соединение 16 мм</description>
</offer>
<offer id="38078" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/remontnoe_soedinenie_18_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>126</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f61/51n7wr731z6i2v08em5m1dmhtj8qe18h.jpg</picture>
<name>Ремонтное соединение 18 мм</name>
<description>Ремонтное соединение 18 мм</description>
</offer>
<offer id="38079" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/remontnoe_soedinenie_32_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>208</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ea7/xz9ypxoghld8z4e4lrsdz53ahnu0nme9.jpg</picture>
<name>Ремонтное соединение 32 мм</name>
<description>Ремонтное соединение 32 мм</description>
</offer>
<offer id="38085" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_32kh0_5_mpa_n/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>165</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bf3/6msx4d7chyyd9ogvd51nscf2penbjb0o.jpg</picture>
<name>Рукав напорный ВГ 32х0,5   МПа Н</name>
<description>Рукав напорный ВГ 32х0,5   МПа Н</description>
</offer>
<offer id="38104" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/rastvoritel_648_pl_kan_10_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2008</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<name>Растворитель 648 пл/кан 10 л Х-И</name>
<description>Растворитель 648 пл/кан 10 л Х-И</description>
</offer>
<offer id="38120" available="false">
<url>http://himopttorg.ru/catalog/soda_kausticheskaya/soda_kausticheskaya_natr_edkiy_gran_p_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>105</price>
<currencyId>RUB</currencyId>
<categoryId>3113</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0ee/g24p6h5xlm6gqq5kafp45x9f92p97h14.jpeg</picture>
<name>Сода каустическая/натр едкий гран п/меш 25 кг</name>
<description>Сода каустическая/натр едкий гран п/меш 25 кг</description>
</offer>
<offer id="38124" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_20_mm_1000kh1000/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4326</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ca6/04iv2p42thw6rer7alwt7ta1ae5w647e.jpg</picture>
<name>Пластина ТМКЩ 20 мм 1000х1000</name>
<description>Пластина ТМКЩ 20 мм 1000х1000</description>
</offer>
<offer id="38137" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_ml_92_bar_18_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>420</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<name>Лак МЛ-92 бар 18 кг Х-И</name>
<description>Лак МЛ-92 бар 18 кг Х-И</description>
</offer>
<offer id="38147" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_30_45_971_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>27.7</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3bb/kejaeg6efikhz8d973cxmzpgo5c6q9zh.jpeg</picture>
<name>Хомут NORMA TORRO 30-45/971</name>
<description>Хомут NORMA TORRO 30-45/971 </description>
</offer>
<offer id="38171" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_16_mm_1000kh1000_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4500</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/93c/grapk4u9fo84sbvy9pnw3uw406nw2ves.jpg</picture>
<name>Пластина ТМКЩ 16 мм 1000х1000</name>
<description>Пластина ТМКЩ 16 мм 1000х1000 </description>
</offer>
<offer id="38173" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_siniy_u_bar_20_kg_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/131/0eabp6lv4cojlvqehtj70w3s52zewgs0.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав синий У бар 20 кг  СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав синий У бар 20 кг  СПб</description>
</offer>
<offer id="38175" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khs_436_seraya_kompl_s_otver_20_4_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>365.4</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/229/22vue05tzegz55lcbb112p9tz060szuz.jpg</picture>
<name>Эмаль ХС-436 серая компл с отвер 20,4 кг</name>
<description>Эмаль ХС-436 серая компл с отвер 20,4 кг</description>
</offer>
<offer id="38180" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50_mm_assenizatorskiy_morozostoykiy_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>472.5</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<name>Шланг нап всас ПВХ 50 мм ассенизаторский морозостойкий</name>
<description>Шланг нап всас ПВХ 50 мм ассенизаторский морозостойкий</description>
</offer>
<offer id="38182" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_200_3bknl65_0_0_3_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>246</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/82f/u0elpvfb25fc569vmm0hxueom92szinp.jpg</picture>
<name>Лента кон  200-3БКНЛ65-0-0    3,5 мм</name>
<description>Лента кон  200-3БКНЛ65-0-0    3,5 мм</description>
</offer>
<offer id="38187" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_16_mm_0_5_mpa_tu_n/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>62.1</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5db/k7quhdy7uxqjpwhk3q11dnik47db2ujh.jpg</picture>
<name>Рукав напорный ВГ 16 мм  0,5 МПа ТУ Н</name>
<description>Рукав напорный ВГ 16 мм  0,5 МПа ТУ Н</description>
</offer>
<offer id="38188" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_18_mm_0_5_mpa_tu_n/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>70.6</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/274/o0ji1xp1dnpalbuo3u7zm3ghouk6za2l.jpg</picture>
<name>Рукав напорный ВГ 18 мм  0,5 МПа ТУ Н</name>
<description>Рукав напорный ВГ 18 мм  0,5 МПа ТУ Н</description>
</offer>
<offer id="38189" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_25_mm_0_5_mpa_tu_n/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>97.5</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/162/bcpw63qexvxrbkfe3lrm8nyee004mjto.jpg</picture>
<name>Рукав напорный ВГ 25 мм  0,5 МПа ТУ Н</name>
<description>Рукав напорный ВГ 25 мм  0,5 МПа ТУ Н</description>
</offer>
<offer id="38195" available="false">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_korich_ral_8002_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>389</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/739/0ikkawqme45qj0l1aaym0m6u2cqt1pfb.png</picture>
<name>Эмаль ПФС Стрела корич  RAL 8002 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела корич  RAL 8002 бар 45 кг Ярославль</description>
</offer>
<offer id="38196" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_krasnaya_ral_3020_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/06f/8dcshbhkph6obl92lody43v0347y5rlf.png</picture>
<name>Эмаль ПФС Стрела красная RAL 3020 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела красная RAL 3020 бар 45 кг Ярославль</description>
</offer>
<offer id="38208" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_10kh1000kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1cb/s0hilpwv8ef9po0x3gt8ghq48h47198t.jpeg</picture>
<name>Фторопласт пласт 10х1000х1000 мм</name>
<description>Фторопласт пласт 10х1000х1000 мм </description>
</offer>
<offer id="38212" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_sanitarnyy_oksi_gel_750_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>65.5</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6f6/mvnxmbmvzs17rdw98splxhwumm37887b.jpg</picture>
<name>Моющее средство санитарный ОКСИ гель 750 мл</name>
<description>Моющее средство санитарный ОКСИ гель 750 мл</description>
</offer>
<offer id="38236" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_3kh1000kh1000_mm__1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<name>Текстолит ПТ лист  3х1000х1000 мм</name>
<description>Текстолит ПТ лист  3х1000х1000 мм </description>
</offer>
<offer id="38241" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_2_mm_buzuluk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cb1/3xwkcwva4lubxxq02o4mshmd11jmltb2.jpg</picture>
<name>Пластина ТМКЩ  2 мм Бузулук</name>
<description>Пластина ТМКЩ  2 мм Бузулук</description>
</offer>
<offer id="38250" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_75_mm_morozostoykiy_assenizatorskiy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1147.5</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<name>Шланг нап всас ПВХ 75 мм морозостойкий ассенизаторский</name>
<description>Шланг нап всас ПВХ 75 мм морозостойкий ассенизаторский</description>
</offer>
<offer id="38253" available="false">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_aero_zheltaya_zh_ved_28_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>257</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/967/v06roxvfkpkgoqcr2td1ubsnxmw5y86k.png</picture>
<name>Эмаль Линия АЭРО желтая ж/вед 28 кг Ярославль</name>
<description>Эмаль Линия АЭРО желтая ж/вед 28 кг Ярославль</description>
</offer>
<offer id="38254" available="false">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_chernaya_zh_ved_28_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4f2/g4m8rwcrny7g2mppu0jeuucbxjnqb1c0.jpg</picture>
<name>Эмаль Линия черная ж/вед 28 кг Ярославль</name>
<description>Эмаль Линия черная ж/вед 28 кг Ярославль</description>
</offer>
<offer id="38263" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_50_mm_720kh720__1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>7927</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/94a/fb0da3ed3ty89wp6ec5x41dzcrsh1m7y.jpg</picture>
<name>Пластина ТМКЩ 50 мм 720х720</name>
<description>Пластина ТМКЩ 50 мм 720х720 </description>
</offer>
<offer id="38275" available="true">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_tabletirovannaya_ekstra_mesh_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>28</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль таблетированная Экстра меш 25 кг</name>
<description>Соль таблетированная Экстра меш 25 кг </description>
</offer>
<offer id="38281" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_102_mm_agro_elastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2059</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2ae/yst6of8x10rndqqv6hvnmti0eq5sj98i.jpeg</picture>
<name>Шланг нап всас ПВХ 102 мм  Агро Эластик</name>
<description>Шланг нап всас ПВХ 102 мм  Агро Эластик</description>
</offer>
<offer id="38284" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_raklya_30kh120_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>243</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Кисть Ракля 30х120 мм</name>
<description>Кисть Ракля 30х120 мм </description>
</offer>
<offer id="38288" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_1/rukav_napornyy_i_12_mm_0_63_mpa_atsetilen_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>90.1</price>
<currencyId>RUB</currencyId>
<categoryId>242</categoryId>
<picture>http://himopttorg.ru/upload/iblock/873/orqt2f0q9k0zq8zc5xmhu4rs2puvxeas.jpeg</picture>
<name>Рукав напорный I- 12 мм 0,63 МПа ацетилен Кварт</name>
<description>Рукав напорный I- 12 мм 0,63 МПа ацетилен Кварт</description>
</offer>
<offer id="38290" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_20kh32_mm_0_3_mpa_par_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>356.7</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ad9/0h5gsfb695zkjbmp9f78bgw0y6sokaec.gif</picture>
<name>Рукав паропроводный 20х32 мм 0,3 МПа пар-1 Химтекс</name>
<description>Рукав паропроводный 20х32 мм 0,3 МПа пар-1 Химтекс</description>
</offer>
<offer id="38291" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_25kh40_mm_0_3_mpa_par_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>417.6</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7eb/r56rrseja2olbemi99gnni3wh6jpfjb8.gif</picture>
<name>Рукав паропроводный 25х40 мм 0,3 МПа пар-1 Химтекс</name>
<description>Рукав паропроводный 25х40 мм 0,3 МПа пар-1 Химтекс</description>
</offer>
<offer id="38292" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_25kh46_mm_0_8_mpa_par_2_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>875</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/61e/5wzyfpfnvlaf1mprvdcjzsxmp76vqpdp.gif</picture>
<name>Рукав паропроводный 25х46 мм 0,8 МПа пар-2 Химтекс</name>
<description>Рукав паропроводный 25х46 мм 0,8 МПа пар-2 Химтекс</description>
</offer>
<offer id="38294" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_zelenaya_bar_40_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>247</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/518/2nxo1wmv028h23ly1ryhjldplbf087zx.jpg</picture>
<name>Эмаль НЦ-132 нитро зеленая бар 40 кг Х-И</name>
<description>Эмаль НЦ-132 нитро зеленая бар 40 кг Х-И</description>
</offer>
<offer id="38310" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_seryy_u_bar_20_kg_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>320</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eb9/rldn8ty1g64hx23uk5fgr84ald9nbznj.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав серый У бар 20 кг  СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав серый У бар 20 кг  СПб</description>
</offer>
<offer id="38312" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_32_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>418</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/391/0xosgqnzd2fg0errofaotw02iyc07l2j.jpg</picture>
<name>Рукав всасывающий В  32 мм 4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий В  32 мм 4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="38313" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_65_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>780</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d58/4r13t4xkvtelqoeqk3kp9bkvshfs7ye6.jpg</picture>
<name>Рукав всасывающий В  65 мм  4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий В  65 мм  4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="38314" available="false">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_18kh31_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>275</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/289/w503ahno9zk7c7t7gm02yta251plulbw.gif</picture>
<name>Рукав пневматический Г 18х31 мм 1,0 МПа Химтекс</name>
<description>Рукав пневматический Г 18х31 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="38348" available="false">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_sterzh_70kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>480</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7f9/lem2r7q5ejgvpggkwp6belw0iyr4tks7.jpeg</picture>
<name>Текстолит ПТ стерж  70х1000 мм</name>
<description>Текстолит ПТ стерж  70х1000 мм </description>
</offer>
<offer id="38349" available="false">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_sterzh_90kh1000_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>480</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7e6/ufwr16ybrff16p4s8g29y79d1xpbdjpy.jpeg</picture>
<name>Текстолит ПТ стерж  90х1000 мм</name>
<description>Текстолит ПТ стерж  90х1000 мм </description>
</offer>
<offer id="38359" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_sh_1/rukav_napornyy_sh_32kh44_mm_1_0_mpa_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>442</price>
<currencyId>RUB</currencyId>
<categoryId>3304</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a47/ufkchq8o4whtj95r06le8rm82mj0n9us.gif</picture>
<name>Рукав напорный Ш 32х44 мм 1,0 МПа</name>
<description>Рукав напорный Ш 32х44 мм 1,0 МПа </description>
</offer>
<offer id="38360" available="true">
<url>http://himopttorg.ru/catalog/kley_88/kley_88_luxe_0_9l_rogneda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>750</price>
<currencyId>RUB</currencyId>
<categoryId>231</categoryId>
<picture>http://himopttorg.ru/upload/iblock/40e/cmj0s1gse8wyg7n1cvoza01tdkgmvmfb.png</picture>
<name>Клей 88-LUXE 0,9л РОГНЕДА</name>
<description>Клей 88-LUXE 0,9л РОГНЕДА</description>
</offer>
<offer id="38383" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_chernyy_u_bar_20_kg_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f5d/0zfb4t2kmgl8cfpw5zswgzq26nsy30dv.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав черный У бар 20 кг СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав черный У бар 20 кг СПб</description>
</offer>
<offer id="38412" available="true">
<url>http://himopttorg.ru/catalog/lopaty_i_metly/lopata_sovkovaya_relsovaya_stal_4_krot/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>360</price>
<currencyId>RUB</currencyId>
<categoryId>3138</categoryId>
<name>Лопата совковая рельсовая сталь 4 КРОТ</name>
<description>Лопата совковая рельсовая сталь 4 КРОТ</description>
</offer>
<offer id="38414" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_38_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>621</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/929/8ioptumbli7na50f5jkx9fzztda4d9w5.jpeg</picture>
<name>Шланг ПВХ 38 мм с мет спиралью</name>
<description>Шланг ПВХ 38 мм с мет спиралью</description>
</offer>
<offer id="38428" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_3kh500kh500_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2120</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7fb/ltaxsskapvd5eoiek2ssxxjzvh1om6yp.jpg</picture>
<name>Пластина силиконовая 3Х500х500</name>
<description>Пластина силиконовая 3Х500х500 </description>
</offer>
<offer id="38438" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/shchetka_po_metallu_6_ti_ryadnaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Щетка по металлу 6-ти рядная</name>
<description>Щетка по металлу 6-ти рядная</description>
</offer>
<offer id="38454" available="true">
<url>http://himopttorg.ru/catalog/lopaty_i_metly/lopata_shtykovaya_rels_stal_krot_4_bez_cher/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>386</price>
<currencyId>RUB</currencyId>
<categoryId>3138</categoryId>
<name>Лопата штыковая рельс сталь КРОТ 4 без чер</name>
<description>Лопата штыковая рельс сталь КРОТ 4 без чер</description>
</offer>
<offer id="38461" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_20_mm_grafit/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>560</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<name>Полиамид ПА 6 (капролон) стерж  20 мм графит.</name>
<description>Полиамид ПА 6 (капролон) стерж  20 мм графит.</description>
</offer>
<offer id="38463" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_26_28_18_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>36.1</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7c2/bxjd26wvd4zvwbufjz6kcnl56wr0mw4l.jpg</picture>
<name>Хомут силовой одноболтовый 26-28/18 W1</name>
<description>Хомут силовой одноболтовый 26-28/18 W1</description>
</offer>
<offer id="38464" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_36_39_20_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>38.9</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6fb/ju46wzj0hprgk4g8l98dhb2atrqp0pux.jpg</picture>
<name>Хомут силовой одноболтовый 36-39/20 W1</name>
<description>Хомут силовой одноболтовый 36-39/20 W1</description>
</offer>
<offer id="38469" available="true">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_8_mm_1000kh800/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84.4</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1dd/eeybwdr6wguc1qdcbfeoxiyx9x3arogb.jpg</picture>
<name>Асбокартон КАОН  8 мм 1000х800</name>
<description>Асбокартон КАОН  8 мм 1000х800</description>
</offer>
<offer id="38487" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_32_35_18_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>37.5</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a16/2cx06ry1xj5lng80sf02eeo1y5kygjx1.jpg</picture>
<name>Хомут силовой одноболтовый 32-35/18 W1</name>
<description>Хомут силовой одноболтовый 32-35/18 W1</description>
</offer>
<offer id="38489" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>762</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/581/8u2cn0gqxatw04uiyu1vsadrqcupb8xp.jpg</picture>
<name>Рукав всасывающий Б  50 мм  4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий Б  50 мм  4 м гр 1 СЗРТ</description>
</offer>
<offer id="38501" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_pf_170_b_ts_bar_40_kg_lida_belarus/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>221</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0f0/6oz61za45c86pwfqwb7pg2pztobofk3d.jpeg</picture>
<name>Лак ПФ-170 б/ц бар 40 кг Лида Беларусь</name>
<description>Лак ПФ-170 б/ц бар 40 кг Лида Беларусь</description>
</offer>
<offer id="39181" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khs_436_zheltaya_kompl_s_otver_20_4_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>377</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c30/0hlhtwr28ypfmv21gqzrsx33ln5bq5o2.jpg</picture>
<name>Эмаль ХС-436 желтая компл с отвер 20,4 кг</name>
<description>Эмаль ХС-436 желтая компл с отвер 20,4 кг</description>
</offer>
<offer id="39182" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_komet_475_gr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>101</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/396/pajsnyc1vctvk0s4nmaj3hva34v8rmb9.jpg</picture>
<name>Моющее средство Комет 475 гр</name>
<description>Моющее средство Комет 475 гр</description>
</offer>
<offer id="39183" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khs_436_sinyaya_kompl_s_otver_20_4_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a62/4v4161v8cdiwzub50hcxi2683dappvx1.jpg</picture>
<name>Эмаль ХС-436 синяя компл с отвер 20,4 кг</name>
<description>Эмаль ХС-436 синяя компл с отвер 20,4 кг</description>
</offer>
<offer id="39188" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_25_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>221</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0dc/i6ie6l5ww7fignrys2r6kc8tgmyeocj1.jpg</picture>
<name>Шланг нап всас ПВХ 25 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 25 мм север зеленый -55С</description>
</offer>
<offer id="39192" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/zhidkoe_mylo_minuta_500_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>86.7</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/39c/9wad89ykojn11grgusttd2cam6polcra.jpg</picture>
<name>Жидкое мыло МИНУТА  500 мл</name>
<description>Жидкое мыло МИНУТА  500 мл</description>
</offer>
<offer id="39193" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_32_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>283</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f2a/jsfrktti1rgc7678ip5cs514q0ed3nxi.jpg</picture>
<name>Шланг нап всас ПВХ 32 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 32 мм север зеленый -55С</description>
</offer>
<offer id="39196" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/sernaya_kislota_khch_18_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>138</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Серная кислота ХЧ 18 кг</name>
<description>Серная кислота ХЧ 18 кг</description>
</offer>
<offer id="39199" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_102_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2079</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e0d/c6kqhbh481mt5if74jeo1eyq6anemxxw.jpg</picture>
<name>Шланг нап всас ПВХ 102 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 102 мм север зеленый -55С</description>
</offer>
<offer id="39200" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_38_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>362</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a33/1wfgw11hiqoz01443nc7o3z3uadfvgut.jpg</picture>
<name>Шланг нап всас ПВХ 38 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 38 мм север зеленый -55С</description>
</offer>
<offer id="39201" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_65kh77_5_mm_0_29_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>970</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/71f/fi46narxims8w60bp2e0vsvb6lf0xcrx.jpg</picture>
<name>Рукав с нит опл 65х77,5 мм 0,29 МПа КРТ</name>
<description>Рукав с нит опл 65х77,5 мм 0,29 МПа КРТ</description>
</offer>
<offer id="39208" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_18kh38_mm_0_8_mpa_par_2_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/08b/gby4bvrzcqk04z48jze6mjixswq83ak4.gif</picture>
<name>Рукав паропроводный 18х38 мм 0,8 МПа пар-2 Химтекс</name>
<description>Рукав паропроводный 18х38 мм 0,8 МПа пар-2 Химтекс</description>
</offer>
<offer id="39886" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t100_2_40kh60_sm_6mm_korichnevyy_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>126</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4a9/ft6e4ermaeq4ozw5zm4rm292u0arq1n5.jpg</picture>
<name>Коврик влаговпитывающий Т100/2 40х60 см 6мм коричневый</name>
<description>Коврик влаговпитывающий Т100/2 40х60 см 6мм коричневый</description>
</offer>
<offer id="40945" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/rastvoritel_r_12_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2300</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<name>Растворитель Р-12 пл/кан 10 л</name>
<description>Растворитель Р-12 пл/кан 10 л </description>
</offer>
<offer id="45399" available="false">
<url>http://himopttorg.ru/catalog/perekis_vodoroda/perekis_vodoroda_pl_kan_11_4_kg_marka_a/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>144</price>
<currencyId>RUB</currencyId>
<categoryId>3115</categoryId>
<picture>http://himopttorg.ru/upload/iblock/546/khgv0updo7by1dotsr7w2c7077cftp26.jpg</picture>
<name>Перекись водорода пл/кан 11,4 кг марка А</name>
<description>Перекись водорода пл/кан 11,4 кг марка А</description>
</offer>
<offer id="45400" available="true">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_38kh64_mm_0_8_mpa_par_2_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1287</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b53/4uz09nnc3otv52itu0k5pnammnk9g7fg.gif</picture>
<name>Рукав паропроводный 38х64 мм 0,8 МПа пар-2 Химтекс</name>
<description>Рукав паропроводный 38х64 мм 0,8 МПа пар-2 Химтекс</description>
</offer>
<offer id="45402" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_19_mm_3_4_pyatisloynyy_3_0_mpa_lapotok_50m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4588</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a9e/k79190ly0dx1hrtkg8dk9mqd1jv13lqc.jpg</picture>
<name>Шланг ПВХ 19 мм (3/4) пятислойный 3,0 МПа ЛапотОК 50м</name>
<description>Шланг ПВХ 19 мм (3/4) пятислойный 3,0 МПа ЛапотОК 50м</description>
</offer>
<offer id="45403" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_70kh86_mm_0_98_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1562</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/433/f0cke24txmdjo5pqmjpe35gq22riiunj.jpeg</picture>
<name>Рукав с нит опл 70х86 мм 0,98 МПа КРТ</name>
<description>Рукав с нит опл 70х86 мм 0,98 МПа КРТ</description>
</offer>
<offer id="45407" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_4_m_gr_2_r_5_szr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1231</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ffd/ics7jgqj00nshln2fadnwazhi18waz6n.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   4 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б 100 мм   4 м гр 2 р-5 СЗР</description>
</offer>
<offer id="45409" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_aero_belaya_zh_ved_28_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b5f/546d9b74v5406t04hix9n3joh9ugupzp.png</picture>
<name>Эмаль Линия АЭРО белая ж/вед 28 кг Ярославль</name>
<description>Эмаль Линия АЭРО белая ж/вед 28 кг Ярославль</description>
</offer>
<offer id="45421" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_b_6_3kh11_mm_1_7_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>67</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/160/q915xpfr08yo9gisd10e9wr2ab5s1n0b.jpg</picture>
<name>Шланг напорный ПВХ арм нитью Б  6,3х11 мм 1,7 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью Б  6,3х11 мм 1,7 МПа МПТ-Пластик</description>
</offer>
<offer id="45423" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_aero_chernaya_zh_ved_28_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8c3/xhwoudcnesb3kp7z13bf0i8otk0i74kj.png</picture>
<name>Эмаль Линия АЭРО черная ж/вед 28 кг Ярославль</name>
<description>Эмаль Линия АЭРО черная ж/вед 28 кг Ярославль</description>
</offer>
<offer id="45426" available="true">
<url>http://himopttorg.ru/catalog/atseton_1/atseton_osch_9_5_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>395</price>
<currencyId>RUB</currencyId>
<categoryId>3351</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3b9/vgb5m715yb6lc3lxtiimgyjxaqpvkku5.jpg</picture>
<name>Ацетон ОСЧ 9-5 пл/кан 8 кг (10 л) Экос-1</name>
<description>Ацетон ОСЧ 9-5 пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="45427" available="false">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_osch_11_5_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>426</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/791/7higpysohw8d5plrhv021iqnettv1x61.jpg</picture>
<name>Изопропанол ОСЧ 11-5 пл/кан 8 кг (10 л) Экос-1</name>
<description>Изопропанол ОСЧ 11-5 пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="45429" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_6kh14_mm_1_6_mpa_gib_dorn_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>95</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/172/fq7x2a9fg4i2nfsainkn3aki9qdnc8mh.jpeg</picture>
<name>Рукав с нит опл  6х14 мм 1,6 МПа  гиб.дорн СЗР</name>
<description>Рукав с нит опл  6х14 мм 1,6 МПа  гиб.дорн СЗР</description>
</offer>
<offer id="45431" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_3_mm_1500kh2050_acryma_kop_0_6_0_7/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5900</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<name>Оргстекло  3 мм 1500х2050 ACRYMA коп 0,6-0,7</name>
<description>Оргстекло  3 мм 1500х2050 ACRYMA коп 0,6-0,7</description>
</offer>
<offer id="45432" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_3_mm_1500kh2050_acryma_o_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5900</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<name>Оргстекло  3 мм 1500х2050 ACRYMA О</name>
<description>Оргстекло  3 мм 1500х2050 ACRYMA О</description>
</offer>
<offer id="45433" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_10kh17_5_mm_1_47_mpa_gib_dorn_szr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/14b/v4hqs537encdoecoxzbdg1j86p5oob0i.jpeg</picture>
<name>Рукав с нит опл 10х17,5 мм 1,47 МПа гиб.дорн СЗР</name>
<description>Рукав с нит опл 10х17,5 мм 1,47 МПа гиб.дорн СЗР</description>
</offer>
<offer id="45434" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_8kh15_5_mm_1_47_mpa_gib_dorn_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>110</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/484/dm136utkid3c1dakts298rxwnrye5c6t.jpeg</picture>
<name>Рукав с нит опл  8х15,5 мм 1,47 МПа гиб.дорн СЗР</name>
<description>Рукав с нит опл  8х15,5 мм 1,47 МПа гиб.дорн СЗР </description>
</offer>
<offer id="45438" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_65_mm_0_7_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>351</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/60b/r4c9wiopsvq3pdt21mxazs8t3ycl1il2.png</picture>
<name>Шланг нап всас ПВХ 65 мм 0,7 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 65 мм 0,7 МПа морозостойкий Снегирь</description>
</offer>
<offer id="45442" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khs_436_seraya_kompl_s_otver_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>448</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e8b/dar91iqtbk2nu2a39lil782rx12fxrdh.jpg</picture>
<name>Эмаль ХС-436 серая компл с отвер 20 кг</name>
<description>Эмаль ХС-436 серая компл с отвер 20 кг</description>
</offer>
<offer id="45459" available="false">
<url>http://himopttorg.ru/catalog/smazochnye_materialy_1/smazka_grafitnaya_bar_21_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3700</price>
<currencyId>RUB</currencyId>
<categoryId>3314</categoryId>
<name>Смазка графитная бар 21 кг</name>
<description>Смазка графитная бар 21 кг</description>
</offer>
<offer id="45460" available="true">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_32kh56_mm_0_8_mpa_par_2_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1133</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/710/9w10e1saxbw8yuktpsln5729jcnmb614.gif</picture>
<name>Рукав паропроводный 32х56 мм 0,8 МПа пар-2 Химтекс</name>
<description>Рукав паропроводный 32х56 мм 0,8 МПа пар-2 Химтекс</description>
</offer>
<offer id="45464" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_5_1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>22125</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Пластина силиконовая 5*1000 мм</name>
<description>Пластина силиконовая 5*1000 мм</description>
</offer>
<offer id="45465" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_mbs_50_mm_1000kh1000/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>225</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4c8/9jwpn3zy73dc6bbfy1uockancgp9tu7p.jpg</picture>
<name>Пластина МБС 50 мм 1000х1000</name>
<description>Пластина МБС 50 мм 1000х1000</description>
</offer>
<offer id="45466" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_40_mm_1000kh1000_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>8300</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0f1/kt37st8tdfxub2nz3zqn9u7rchimzw88.jpeg</picture>
<name>Пластина ТМКЩ 40 мм 1000х1000</name>
<description>Пластина ТМКЩ 40 мм 1000х1000</description>
</offer>
<offer id="45467" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_vakuumnye_1/plastina_vakuumnaya_4mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1000</price>
<currencyId>RUB</currencyId>
<categoryId>3306</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f51/jiifzhrb0jojhg26vgnartmurixs1pnu.jpg</picture>
<name>Пластина вакуумная  4мм СЗР</name>
<description>Пластина вакуумная  4мм СЗР</description>
</offer>
<offer id="45468" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_dielektricheskiy_gruppa_1_1_2_8m_tolshch_6mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd4/bu36epbmrc38aig7rwoznzq27nlprven.jpeg</picture>
<name>Коврик диэлектрический группа 1 (1,2*8м толщ 6мм)</name>
<description>Коврик диэлектрический группа 1</description>
</offer>
<offer id="45469" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_12kh20_mm_1_6_mpa_gib_dorn_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/68b/3w58553o99vlpdrd6jrvr631y1n0myvv.jpeg</picture>
<name>Рукав с нит опл 12х20 мм 1,6 МПа гиб.дорн СЗР</name>
<description>Рукав с нит опл 12х20 мм 1,6 МПа гиб.дорн СЗР </description>
</offer>
<offer id="45470" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_gbs_m_59_63_20_w2sk_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>299</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ce4/h99orhf6v0dk07pul11h3flc3rdjnn3y.jpeg</picture>
<name>Хомут NORMA GBS М  59-63/20 W2SK</name>
<description>Хомут NORMA GBS М  59-63/20 W2SK</description>
</offer>
<offer id="45486" available="false">
<url>http://himopttorg.ru/catalog/polotno_kh_proshivnoe_1/polotno_kh_proshivnoe_1_5_m_kh_45_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3795</price>
<currencyId>RUB</currencyId>
<categoryId>3319</categoryId>
<name>Полотно х-прошивное (1,5 м х 45 м)</name>
<description>Полотно х-прошивное (1,5 м х 45 м)</description>
</offer>
<offer id="45493" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_75_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ae0/myt57jp632bfiewzy1okq207qbc062o7.jpg</picture>
<name>Шланг нап всас ПВХ 75 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 75 мм север зеленый -55С</description>
</offer>
<offer id="45501" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_38kh49_mm_1_6_mpa_g_d_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>446</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e73/ew8wsqzokbk7p5r4jyizkyss271uiea5.jpeg</picture>
<name>Рукав с нит опл 38х49 мм 1,6 МПа  г/д СЗР</name>
<description>Рукав с нит опл 38х49 мм 1,6 МПа СЗР </description>
</offer>
<offer id="45503" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kompozitsiya_organosilikatnaya_os_12_03_belaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>558</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Композиция органосиликатная ОС-12-03 белая</name>
<description>Композиция органосиликатная ОС-12-03 белая</description>
</offer>
<offer id="45504" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kompozitsiya_organosilikatnaya_os_12_03_krasnaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>543</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Композиция органосиликатная ОС-12-03 красная</name>
<description>Композиция органосиликатная ОС-12-03 красная</description>
</offer>
<offer id="45507" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_khelp_480_gr_soda_efekt_pemoksol/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>74.6</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d22/xa5nx0t7usli001j48ny6qx6qtoe0828.jpg</picture>
<name>Моющее средство ХЭЛП 480 гр сода-эфект пемоксоль</name>
<description>Моющее средство ХЭЛП 480 гр  сода-эфект пемоксоль</description>
</offer>
<offer id="45510" available="false">
<url>http://himopttorg.ru/catalog/soda_kaltsinirovannaya_1/soda_pishchevaya_p_mesh_50_kg_gost/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75</price>
<currencyId>RUB</currencyId>
<categoryId>3112</categoryId>
<name>Сода пищевая п/меш 50 кг ГОСТ</name>
<description>Сода пищевая п/меш 50 кг ГОСТ</description>
</offer>
<offer id="45511" available="false">
<url>http://himopttorg.ru/catalog/grunty_2/gruntovka_praymer_vika_seryy_1_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>520</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<name>Грунтовка Праймер Vika серый 1 кг</name>
<description>Грунтовка Праймер Vika серый 1 кг</description>
</offer>
<offer id="45514" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_1n_1_tmkshch_m_4_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>895</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac3/19fclyoehs1vaccnidnfkccchky9t3q8.gif</picture>
<name>Пластина 1Н-1-ТМКЩ-М 4 мм </name>
<description>Пластина 1Н-1-ТМКЩ-М 4 мм </description>
</offer>
<offer id="45522" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/izoamilovyy_spirt_chda_st_but_0_8_kg_ekos_1_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>780</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e11/uttej3u13yka3fgljr4slidzom6oc3op.jpg</picture>
<name>Изоамиловый спирт ЧДА ст/бут 0,8 кг Экос-1</name>
<description>Изоамиловый спирт ЧДА ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="45524" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_25_mm_1_0_mpa_tu_kvart_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/204/lvtrhxojcfqb7blqrp9nrmyo17ux7or3.jpeg</picture>
<name>Рукав напорный ВГ 25 мм 1,0 МПа ТУ Кварт</name>
<description>Рукав напорный ВГ 25 мм 1,0 МПа ТУ Кварт</description>
</offer>
<offer id="45525" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_500_2bknl_65_2_1_5_1_5_2l_4_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>950</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e48/tj3fjqxvdrpbzi6he7yb7ng4l9hektvk.jpg</picture>
<name>Лента кон 500-2БКНЛ-65-2-1,5-1,5 2Л    4,5 мм</name>
<description>Лента кон 500-2БКНЛ-65-2-1,5-1,5 2Л   </description>
</offer>
<offer id="45529" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_5kh1000kh5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>50000</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Пластина силиконовая 5х1000х5000 мм</name>
<description>Пластина силиконовая 5х1000х5000 мм</description>
</offer>
<offer id="45530" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_10_m_gr_2_r_5_szr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>862</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8a3/2zu3exiihg6zvt2s1cbqeg6o2ci6hhs0.jpeg</picture>
<name>Рукав всасывающий Б  50 мм 10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б  50 мм 10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="45659" available="true">
<url>http://himopttorg.ru/catalog/prodecor_kraski/grunt_emal_prodecor_1202_seraya_ral7035_bar_20_kg_rk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>662</price>
<currencyId>RUB</currencyId>
<categoryId>3285</categoryId>
<picture>http://himopttorg.ru/upload/iblock/759/rd5owuzb87h93z7m61tnvv3biwtnzcr6.png</picture>
<name>Грунт-эмаль Prodecor 1202 серая RAL7035 бар 20 кг РК</name>
<description>Грунт-эмаль Prodecor 1202 серая RAL7035 бар 20 кг РК</description>
</offer>
<offer id="45662" available="false">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_vishnev_bar_44_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>392.1</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/99a/r2x23u113jdkl7imhrd610e4zmiqwedu.png</picture>
<name>Эмаль МЛ-12 вишнев бар 44 кг LIDA</name>
<description>Эмаль МЛ-12 вишнев бар 44 кг LIDA</description>
</offer>
<offer id="45663" available="false">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_seraya_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>562</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d27/z5xvu5v39ou5k1nnkfoec0vs2vy1nl2y.jpg</picture>
<name>Эмаль МЛ-12 серая бар 45 кг Ярославль</name>
<description>Эмаль МЛ-12 серая бар 45 кг Ярославль</description>
</offer>
<offer id="45665" available="false">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_seraya_bar_45_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>670</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/67c/inw1wv0t6754fr2c0ykctxtdtx0n469t.png</picture>
<name>Эмаль МЛ-12 серая бар 45 кг LIDA</name>
<description>Эмаль МЛ-12 серая бар 45 кг LIDA</description>
</offer>
<offer id="45666" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_chisto_oranzh_ral_2004_bar_45_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>745</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5aa/og55b41sh8fvn5g353783tmkainx8m44.png</picture>
<name>Эмаль МЛ-12 чисто оранж RAL 2004 бар 45 кг LIDA</name>
<description>Эмаль МЛ-12 чисто оранж RAL 2004 бар 45 кг LIDA</description>
</offer>
<offer id="45667" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_sinyaya_transport_k_ral5017_bar_45_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>692</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/359/kymw37vn2yc6idhsotsvtk2tn3l5tw0a.png</picture>
<name>Эмаль МЛ-12 синяя транспорт К RAL5017 бар 45 кг LIDA</name>
<description>Эмаль МЛ-12 синяя транспорт К RAL5017 бар 45 кг LIDA</description>
</offer>
<offer id="45668" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_zol_zhelt_bar_45_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>790</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/910/07ne0aamc5hz2wvij4brjoqe5gli7i10.png</picture>
<name>Эмаль МЛ-12 зол желт бар 45 кг LIDA</name>
<description>Эмаль МЛ-12 зол желт бар 45 кг LIDA</description>
</offer>
<offer id="45669" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_chernaya_bar_40_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>685</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7ea/mfjiar0yv99d273v8v64e5dt92677mh1.png</picture>
<name>Эмаль МЛ-12 черная бар 40 кг LIDA</name>
<description>Эмаль МЛ-12 черная бар 40 кг LIDA</description>
</offer>
<offer id="45670" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_chernaya_zh_b_2_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>770</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль МЛ-12 черная ж/б 2 кг LIDA</name>
<description>Эмаль МЛ-12 черная ж/б 2 кг LIDA</description>
</offer>
<offer id="45671" available="true">
<url>http://himopttorg.ru/catalog/vodoemulsionnye_kraski/kraska_vdak_2180_novye_tekhnologii_w5_vlagost_14_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>108</price>
<currencyId>RUB</currencyId>
<categoryId>3289</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9ca/rd4h2tp0hxg21c2o9wlxpir1qldo6gho.jpeg</picture>
<name>Краска ВДАК-2180 Новые технологии W5 влагост 14 кг</name>
<description>Краска ВДАК-2180 Новые технологии W5 влагост 14 кг </description>
</offer>
<offer id="45672" available="true">
<url>http://himopttorg.ru/catalog/vodoemulsionnye_kraski/kraska_vdak_1180_novye_tekhnologii_f5_fasad_14_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>128</price>
<currencyId>RUB</currencyId>
<categoryId>3289</categoryId>
<picture>http://himopttorg.ru/upload/iblock/51f/fgnk1fzps4vpw1xc7kis4xugquu74hpj.jpeg</picture>
<name>Краска ВДАК-1180 Новые технологии F5 фасад 14 кг</name>
<description>Краска ВДАК-1180 Новые технологии F5 фасад 14 кг </description>
</offer>
<offer id="45673" available="false">
<url>http://himopttorg.ru/catalog/aerozolnye_kraski/emal_aeroz_universal_belyy_ral_9003_520_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>322</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<name>Эмаль аэроз универсал белый RAL 9003 520 мл</name>
<description>Эмаль аэроз универсал белый RAL 9003 520 мл </description>
</offer>
<offer id="45674" available="false">
<url>http://himopttorg.ru/catalog/aerozolnye_kraski/emal_aeroz_universal_sin_ral_5002_400_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>239</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<name>Эмаль аэроз универсал син RAL 5002 400 мл</name>
<description>Эмаль аэроз универсал син RAL 5002 400 мл </description>
</offer>
<offer id="45675" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/standart_titr_kislota_solyanaya_0_1n/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>998</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Стандарт-титр кислота соляная 0,1Н</name>
<description>Стандарт-титр кислота соляная 0,1Н</description>
</offer>
<offer id="45677" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_6_m_gr_2_r_5_khimteks_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1600</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6fa/16qqz7e6faqqfq4lvlam35cg88a9ga53.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   6 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б 100 мм   6 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="45678" available="false">
<url>http://himopttorg.ru/catalog/rastvoritel_646/rastvoritel_646_boch_175_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>3339</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b0f/jbd5xz3hw5ilicl6tkprknsm4lewx5jx.png</picture>
<name>Растворитель 646 боч 175 кг</name>
<description>Растворитель 646 боч 175 кг </description>
</offer>
<offer id="45679" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_650/rastvoritel_650_pl_kan_10_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2400</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>http://himopttorg.ru/upload/iblock/11d/11ntz1id9i28kvkowvsgp7qzmgrsat7f.jpeg</picture>
<name>Растворитель 650 пл/кан 10 л Х-И</name>
<description>Растворитель 650 пл/кан 10 л Х-И</description>
</offer>
<offer id="45680" available="true">
<url>http://himopttorg.ru/catalog/toluol/toluol_neftyanoy_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5200</price>
<currencyId>RUB</currencyId>
<categoryId>3359</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2c8/2b7lxet8q0eafam38h7pv1jikycjph13.jpeg</picture>
<name>Толуол нефтяной пл/кан 10 л</name>
<description>Толуол нефтяной пл/кан 10 л</description>
</offer>
<offer id="45681" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_pl_kan_10_l_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1250</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<name>Уайт-спирит пл/кан 10 л  ХИ</name>
<description>Уайт-спирит пл/кан 10 л  ХИ</description>
</offer>
<offer id="45682" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_ekonom_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1450</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<name>Уайт-спирит Эконом пл/кан 10 л</name>
<description>Уайт-спирит Эконом пл/кан 10 л  </description>
</offer>
<offer id="45683" available="true">
<url>http://himopttorg.ru/catalog/solvent/solvent_pl_kan_10_l_ekonom/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1550</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8e0/68n5g7zcvcu0em86g15t7ix31iqez9ah.jpg</picture>
<name>Сольвент пл/кан 10 л Эконом</name>
<description>Сольвент пл/кан 10 л Эконом</description>
</offer>
<offer id="45684" available="false">
<url>http://himopttorg.ru/catalog/atseton/atseton_boch_165_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3335</categoryId>
<picture>http://himopttorg.ru/upload/iblock/689/u762so8afir3da6t5y2ki2cwjobox6ys.jpeg</picture>
<name>Ацетон боч 165 кг</name>
<description>Ацетон боч 165 кг </description>
</offer>
<offer id="45685" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_5/rastvoritel_r_5_pl_kan_10_l_gost_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2850</price>
<currencyId>RUB</currencyId>
<categoryId>3334</categoryId>
<picture>http://himopttorg.ru/upload/iblock/75c/jiw2ynlnnks4tf8w3c92971x2bj7iazi.jpg</picture>
<name>Растворитель Р-5 пл/кан 10 л ГОСТ Х-И</name>
<description>Растворитель Р-5 пл/кан 10 л ГОСТ Х-И</description>
</offer>
<offer id="45686" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/uskoritel_sushki_021_ban_4_7_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0d5/jnvpqp3rhw9ec65vx55s92s64oio505p.png</picture>
<name>Ускоритель сушки 021 бан 4,7 кг</name>
<description>Ускоритель сушки 021 бан 4,7 кг</description>
</offer>
<offer id="45687" available="false">
<url>http://himopttorg.ru/catalog/rastvoritel_r_4/rastvoritel_r_4_pl_kan_10_l_eko/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1450</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d7b/1wsf1xyk13ws3vltioexnmqhna0jvpzq.png</picture>
<name>Растворитель Р-4 пл/кан 10 л Эко</name>
<description>Растворитель Р-4 пл/кан 10 л Эко</description>
</offer>
<offer id="45688" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/orto_ksilol_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3800</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dd6/9j6jcohj1snws5xhz0woddxrkb3vuu99.png</picture>
<name>Орто-ксилол пл/кан 10 л</name>
<description>Орто-ксилол пл/кан 10 л</description>
</offer>
<offer id="45689" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_646/rastvoritel_646_pl_kan_10_l_gost_tambov/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1900</price>
<currencyId>RUB</currencyId>
<categoryId>3339</categoryId>
<picture>http://himopttorg.ru/upload/iblock/000/hqwbu3hotvev7bj1av1a2b120dq2s1h0.jpg</picture>
<name>Растворитель 646 пл/кан 10 л ГОСТ Тамбов</name>
<description>Растворитель 646 пл/кан 10 л ГОСТ Тамбов</description>
</offer>
<offer id="45690" available="false">
<url>http://himopttorg.ru/catalog/kerosin/kerosin_ts_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2100</price>
<currencyId>RUB</currencyId>
<categoryId>3336</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9df/skgfu99sod68hcnxyjv9y220caomh5k6.jpeg</picture>
<name>Керосин ТС пл/кан 10 л</name>
<description>Керосин ТС пл/кан 10 л</description>
</offer>
<offer id="45691" available="false">
<url>http://himopttorg.ru/catalog/ksilol/ksilol_boch_180_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>245</price>
<currencyId>RUB</currencyId>
<categoryId>3337</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b4f/bafmt0vmc7irn1uwbcifh387qzitlm3k.png</picture>
<name>Ксилол боч 180 кг</name>
<description>Ксилол боч 180 кг</description>
</offer>
<offer id="45692" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_5/rastvoritel_r_5_pl_kan_10_l_gost_tambov/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2250</price>
<currencyId>RUB</currencyId>
<categoryId>3334</categoryId>
<name>Растворитель Р-5 пл/кан 10 л ГОСТ Тамбов</name>
<description>Растворитель Р-5 пл/кан 10 л ГОСТ Тамбов</description>
</offer>
<offer id="45693" available="false">
<url>http://himopttorg.ru/catalog/ksilol/ksilol_pl_kan_10_l_tambov/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3500</price>
<currencyId>RUB</currencyId>
<categoryId>3337</categoryId>
<name>Ксилол пл/кан 10 л Тамбов</name>
<description>Ксилол пл/кан 10 л Тамбов</description>
</offer>
<offer id="45694" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_but_0_9_l_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>231</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<name>Уайт-спирит бут 0,9 л ХИ</name>
<description>Уайт-спирит бут 0,9 л ХИ</description>
</offer>
<offer id="45695" available="false">
<url>http://himopttorg.ru/catalog/rastvoritel_646/rastvoritel_646_pl_but_0_5_l_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>81.3</price>
<currencyId>RUB</currencyId>
<categoryId>3339</categoryId>
<picture>http://himopttorg.ru/upload/iblock/89d/qd091ih8d3lqk7nqy64esp3lv811w6pz.png</picture>
<name>Растворитель 646 пл/бут 0,5 л ХИ</name>
<description>Растворитель 646 пл/бут 0,5 л ХИ</description>
</offer>
<offer id="45696" available="false">
<url>http://himopttorg.ru/catalog/kerosin/kerosin_ts_1_pl_kan_0_9_l_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>115</price>
<currencyId>RUB</currencyId>
<categoryId>3336</categoryId>
<picture>http://himopttorg.ru/upload/iblock/23f/jl0nl6pzf06nvyyon2jb1szg2g77x38l.png</picture>
<name>Керосин ТС-1 пл/кан 0,9 л ХИ</name>
<description>Керосин ТС-1 пл/кан 0,9 л ХИ</description>
</offer>
<offer id="45697" available="false">
<url>http://himopttorg.ru/catalog/kerosin/kerosin_ts_1_pl_kan_0_5_l_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>62.5</price>
<currencyId>RUB</currencyId>
<categoryId>3336</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a4a/bl0ncer3b2cya82vrjxbcj9a9d1pye4n.png</picture>
<name>Керосин ТС-1 пл/кан 0,5 л ХИ</name>
<description>Керосин ТС-1 пл/кан 0,5 л ХИ</description>
</offer>
<offer id="45698" available="false">
<url>http://himopttorg.ru/catalog/ksilol/ksilol_boch_170_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>172.2</price>
<currencyId>RUB</currencyId>
<categoryId>3337</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aa7/p4j06hxuon3gu6gqjk2eykciij220bew.png</picture>
<name>Ксилол боч 170 кг</name>
<description>Ксилол боч 170 кг</description>
</offer>
<offer id="45699" available="false">
<url>http://himopttorg.ru/catalog/ksilol/ksilol_pl_but_0_9_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>195</price>
<currencyId>RUB</currencyId>
<categoryId>3337</categoryId>
<picture>http://himopttorg.ru/upload/iblock/969/zi3ebfbgs6scnc99kz88hcxd765tof1w.png</picture>
<name>Ксилол пл/бут 0,9 л Х-И</name>
<description>Ксилол пл/бут 0,9 л Х-И</description>
</offer>
<offer id="45700" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/solvent_neft_nefras_a_130_150_0_9l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e8f/ksfcx69o7qtkaxi16cq5jrau6x6x5ytp.jpg</picture>
<name>Сольвент нефт (нефрас А 130/150) 0,9л Х-И</name>
<description>Сольвент нефт (нефрас А 130/150) 0,9л Х-И</description>
</offer>
<offer id="45701" available="true">
<url>http://himopttorg.ru/catalog/ksilol/ksilol_pl_kan_10_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3800</price>
<currencyId>RUB</currencyId>
<categoryId>3337</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d66/n7haxckoqy0mwzucpsagcdmv80gy1msi.jpg</picture>
<name>Ксилол пл/кан 10 л Х-И</name>
<description>Ксилол пл/кан 10 л Х-И</description>
</offer>
<offer id="45702" available="false">
<url>http://himopttorg.ru/catalog/ksilol/ksilol_but_0_5_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>115</price>
<currencyId>RUB</currencyId>
<categoryId>3337</categoryId>
<picture>http://himopttorg.ru/upload/iblock/40b/u7nblfulf58j7464d6kiff1ks6dkpm2h.png</picture>
<name>Ксилол бут 0,5 л Х-И</name>
<description>Ксилол бут 0,5 л Х-И</description>
</offer>
<offer id="45704" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_ekonom_boch_145_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b2f/et2jefsuvqk1qe5sgmoylyokocsojsh3.png</picture>
<name>Уайт-спирит Эконом боч 145 кг</name>
<description>Уайт-спирит Эконом боч 145 кг</description>
</offer>
<offer id="45705" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/obezzhirivatel_nefras_s2_80_120_avto_0_9_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>257</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3d6/8ql9ku3bp78ufd610xx967i6jh0pt802.jpg</picture>
<name>Обезжириватель Нефрас С2-80/120 АВТО 0,9 л</name>
<description>Обезжириватель Нефрас С2-80/120 АВТО 0,9 л</description>
</offer>
<offer id="45706" available="false">
<url>http://himopttorg.ru/catalog/rastvoritel_r_4/rastvoritel_r_4_pl_kan_10_l_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1350</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<name>Растворитель Р-4 пл/кан 10 л Дзержинск</name>
<description>Растворитель Р-4 пл/кан 10 л Дзержинск</description>
</offer>
<offer id="45707" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_pl_kan_10_l_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>900</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<name>Уайт-спирит пл/кан 10 л Дзержинск</name>
<description>Уайт-спирит пл/кан 10 л Дзержинск</description>
</offer>
<offer id="45708" available="false">
<url>http://himopttorg.ru/catalog/solvent/solvent_pl_kan_10_l_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>960</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<name>Сольвент пл/кан 10 л Дзержинск</name>
<description>Сольвент пл/кан 10 л Дзержинск</description>
</offer>
<offer id="45709" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_646/rastvoritel_646_pl_but_0_9_l_lkm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>3339</categoryId>
<picture>http://himopttorg.ru/upload/iblock/49a/wpm5ug67j0tgy9xc8vlcfk6de0qi67ak.png</picture>
<name>Растворитель 646 пл/бут 0,9 л ЛКМ</name>
<description>Растворитель 646 пл/бут 0,9 л ЛКМ</description>
</offer>
<offer id="45711" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/rastvoritel_r_5_a_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2900</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<name>Растворитель Р-5 А пл/кан 10 л</name>
<description>Растворитель Р-5 А пл/кан 10 л </description>
</offer>
<offer id="45712" available="true">
<url>http://himopttorg.ru/catalog/kerosin/kerosin_ts_1_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2650</price>
<currencyId>RUB</currencyId>
<categoryId>3336</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9e5/u5llgqlgfxfq7mhhxhamm4mrlit94dmu.jpg</picture>
<name>Керосин ТС-1 пл/кан 10 л</name>
<description>Керосин ТС-1 пл/кан 10 л</description>
</offer>
<offer id="45713" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_646/rastvoritel_646_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2750</price>
<currencyId>RUB</currencyId>
<categoryId>3339</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ec1/a8ot7u0f9fqt8nu4cf0bk8g9cxuvxwu3.jpg</picture>
<name>Растворитель 646 пл/кан 10 л</name>
<description>Растворитель 646 пл/кан 10 л</description>
</offer>
<offer id="45714" available="false">
<url>http://himopttorg.ru/catalog/atseton/atseton_pl_kan_10_l_nov_kuybyshev/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3335</categoryId>
<picture>http://himopttorg.ru/upload/iblock/689/h2xisakfzzhl1re4mrir0w405uxj03br.jpg</picture>
<name>Ацетон пл/кан 10 л Нов Куйбышев</name>
<description>Ацетон пл/кан 10 л Нов Куйбышев</description>
</offer>
<offer id="45715" available="false">
<url>http://himopttorg.ru/catalog/nefras/nefras_s_2_80_120_boch_140_kg_ryazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>3338</categoryId>
<picture>http://himopttorg.ru/upload/iblock/235/dvuuygk2h6f0pfl1ydb8giow3w3aq6uo.jpeg</picture>
<name>Нефрас С 2 80/120 боч 140 кг Рязань</name>
<description>Нефрас С 2 80/120 боч 140 кг Рязань </description>
</offer>
<offer id="45716" available="false">
<url>http://himopttorg.ru/catalog/nefras/nefras_s_2_80_120_br_2_galosha_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3100</price>
<currencyId>RUB</currencyId>
<categoryId>3338</categoryId>
<picture>http://himopttorg.ru/upload/iblock/86a/z8z662eq20f1rmcuz8u57ue1clwkzcx6.jpeg</picture>
<name>Нефрас С 2 80/120 БР-2 &quot;ГАЛОША&quot; пл/кан 10 л</name>
<description>Нефрас С 2 80/120 БР-2 &quot;ГАЛОША&quot; пл/кан 10 л </description>
</offer>
<offer id="45717" available="false">
<url>http://himopttorg.ru/catalog/rastvoritel_646/rastvoritel_646_pl_kan_10_l_dzerzhinsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3339</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8f4/5n7i4c2ymnkr6ksbgmj4skqyvl76xtye.jpeg</picture>
<name>Растворитель 646 пл/кан 10 л Дзержинск</name>
<description>Растворитель 646 пл/кан 10 л Дзержинск</description>
</offer>
<offer id="45718" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_4/rastvoritel_r_4_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2850</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0b9/76z6f5a3wrxl3iq7ukzw5lw0qurusivr.jpg</picture>
<name>Растворитель Р-4 пл/кан 10 л</name>
<description>Растворитель Р-4 пл/кан 10 л </description>
</offer>
<offer id="45719" available="true">
<url>http://himopttorg.ru/catalog/atseton/atseton_pl_kan_10_l_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1950</price>
<currencyId>RUB</currencyId>
<categoryId>3335</categoryId>
<picture>http://himopttorg.ru/upload/iblock/850/thh4elh1m9k05z97p9jk4adbx8jxonfe.jpg</picture>
<name>Ацетон пл/кан 10 л ХИ</name>
<description>Ацетон пл/кан 10 л ХИ</description>
</offer>
<offer id="45720" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/razbavitel_vika_60_0_9_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8e3/8cxhnyijx4av3y32b03cagn8qnj3j08z.jpeg</picture>
<name>Разбавитель Vika 60 0,9 л</name>
<description>Разбавитель Vika 60 0,9 л</description>
</offer>
<offer id="45721" available="true">
<url>http://himopttorg.ru/catalog/izvest_pushonka/izvest_pushonka_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>350</price>
<currencyId>RUB</currencyId>
<categoryId>3355</categoryId>
<picture>http://himopttorg.ru/upload/iblock/525/t0lexcnpnl5o1xycmh5j8umj9uggkcqp.jpg</picture>
<name>Известь пушонка меш 25 кг</name>
<description>Известь пушонка меш 25 кг</description>
</offer>
<offer id="45722" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/voda_distilirovannaya_pitevaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>14.4</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Вода дистилированная (питьевая)</name>
<description>Вода дистилированная (питьевая)</description>
</offer>
<offer id="45723" available="true">
<url>http://himopttorg.ru/catalog/soda_kausticheskaya/natr_edkiy_tekhn_rastvor_46/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>60</price>
<currencyId>RUB</currencyId>
<categoryId>3113</categoryId>
<picture>http://himopttorg.ru/upload/iblock/01d/ac9k4r43gv8ly74icd6jyp1s4yqt4giz.jpg</picture>
<name>Натр едкий техн раствор 46%</name>
<description>Натр едкий техн раствор 46%</description>
</offer>
<offer id="45724" available="true">
<url>http://himopttorg.ru/catalog/kislota_limonnaya/kislota_limonnaya_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>140</price>
<currencyId>RUB</currencyId>
<categoryId>3356</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9e8/0raj8atfzet3hkxlcsjsknpgfi0qnmbw.jpg</picture>
<name>Кислота лимонная меш 25 кг</name>
<description>Кислота лимонная меш 25 кг</description>
</offer>
<offer id="45725" available="false">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaliy_azotnokislyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>458</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aeb/3hvulg11t4fxn2p3oaov972dfq0xgyl4.jpg</picture>
<name>Калий азотнокислый</name>
<description>Калий азотнокислый </description>
</offer>
<offer id="45726" available="false">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/natriy_nitrat_ochishch_p_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>460</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Натрий нитрат очищ п/меш 25 кг</name>
<description>Натрий нитрат очищ п/меш 25 кг</description>
</offer>
<offer id="45727" available="false">
<url>http://himopttorg.ru/catalog/kislota_limonnaya/kislota_limonnaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>129</price>
<currencyId>RUB</currencyId>
<categoryId>3356</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e18/ryxgot8lphkq9vgexszuw0stmsnodtyj.jpeg</picture>
<name>Кислота лимонная</name>
<description>Кислота лимонная</description>
</offer>
<offer id="45728" available="false">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kali_edkoe_tverdoe_cheshuya_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>260</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Кали едкое твердое чешуя меш 25 кг</name>
<description>Кали едкое твердое чешуя меш 25 кг</description>
</offer>
<offer id="45729" available="false">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaliya_bikhromat_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>475</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Калия бихромат меш 25 кг</name>
<description>Калия бихромат меш 25 кг</description>
</offer>
<offer id="45730" available="false">
<url>http://himopttorg.ru/catalog/izvest_pushonka/izvest_pushonka_mesh_30_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>340</price>
<currencyId>RUB</currencyId>
<categoryId>3355</categoryId>
<picture>http://himopttorg.ru/upload/iblock/53e/plziaqu7qnqjvv0ev7ajfl27lnukr3kp.jpg</picture>
<name>Известь пушонка меш 30 кг</name>
<description>Известь пушонка меш 30 кг</description>
</offer>
<offer id="45731" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_10_m_gr_2_r_3_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>338</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/57b/o03lvq2k4rt3c8ybsum9gxn65ac18m7j.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 10 м гр 2 р-3 СЗР</name>
<description>Рукав всасывающий Б  25 мм 10 м гр 2 р-3 СЗР</description>
</offer>
<offer id="45732" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_6_m_gr_2_r_5_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/afc/8grq71f1bkuru2r61uyfjbrjcdolinon.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   6 м гр 2 р-5 Кварт</name>
<description>Рукав всасывающий Б 100 мм   6 м гр 2 р-5 Кварт</description>
</offer>
<offer id="45734" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>833</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/915/qguddn54504f81kqmgi1a2x8d8n6v8s6.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  4 м гр 1  Химтекс</name>
<description>Рукав всасывающий Б  75 мм  4 м гр 1  Химтекс</description>
</offer>
<offer id="45735" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>667</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/095/jevxf4yvmrvazs4wj3obck6qvneqb2np.jpeg</picture>
<name>Рукав всасывающий Б  50 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  50 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="45736" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>787</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aad/k77rmb7v8qcy6y5k5d350oenlkxfkhpa.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  4 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  50 мм  4 м гр 1 Химтекс</description>
</offer>
<offer id="45737" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1158</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8f1/0b8cx1f7ju07n397feis4dc8ioakwm4e.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  75 мм  4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="45738" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_6_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>927</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/853/ink225cmreqdygyv6umgmxfd8jeqp375.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  6 м гр 1 СЗРТ</name>
<description>Рукав всасывающий Б  75 мм  6 м гр 1 СЗРТ</description>
</offer>
<offer id="45739" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_6_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1187</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b6b/jqv1n09l8ln6u9gf1i70kwcmvl8wksfn.jpg</picture>
<name>Рукав всасывающий Б 100 мм   6 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б 100 мм   6 м гр 1 Химтекс</description>
</offer>
<offer id="45741" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_4_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>831</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2f3/0liaibgkvc7s43076h246ybcaxdvjxsh.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  4 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий Б  50 мм  4 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="45742" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_150_mm_6_m_gr1_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7db/xbwwvl1xm129g6s5rguzksolhh5ph8pq.jpeg</picture>
<name>Рукав всасывающий Б 150 мм  6 м гр1 Кварт</name>
<description>Рукав всасывающий Б 150 мм  6 м гр1 Кварт</description>
</offer>
<offer id="45743" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_4_m_gr_1_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>418</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a1f/5hwpw8gkhln76sga2z6jggph4dx7vq2e.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 4 м гр 1 КРТ</name>
<description>Рукав всасывающий Б  25 мм 4 м гр 1 КРТ</description>
</offer>
<offer id="45744" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_4_m_gr_1_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>475</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3b2/zj7tmvdhuyoem657wh5kf224ozilp35y.jpeg</picture>
<name>Рукав всасывающий Б  32 мм 4 м гр 1 КРТ</name>
<description>Рукав всасывающий Б  32 мм 4 м гр 1 КРТ</description>
</offer>
<offer id="45745" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_125_mm_6_m_gr_1_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2638</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6ab/i0cfyifxikuj615iiq7a3ye6ym60jww9.jpeg</picture>
<name>Рукав всасывающий Б 125 мм  6 м гр 1 Кварт</name>
<description>Рукав всасывающий Б 125 мм  6 м гр 1 Кварт</description>
</offer>
<offer id="45746" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_6_m_gr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>668</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/713/00ja2ch1t7urcjt54n33z12388nlkkaa.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  6 м гр 1</name>
<description>Рукав всасывающий Б  50 мм  6 м гр 1</description>
</offer>
<offer id="45748" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_6_m_gr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>381</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac5/nq8m90u326q0xhjrfr14fnn7ea2jk85l.jpg</picture>
<name>Рукав всасывающий Б  25 мм 6 м гр 1</name>
<description>Рукав всасывающий Б  25 мм 6 м гр 1 </description>
</offer>
<offer id="45749" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_6_m_gr_1_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>475</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/01f/nb8ksw70oh5l1jhi28mm3ysvz64bujvh.jpg</picture>
<name>Рукав всасывающий Б  32 мм 6 м гр 1 КРТ</name>
<description>Рукав всасывающий Б  32 мм 6 м гр 1 КРТ</description>
</offer>
<offer id="45750" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_6_m_gr_1_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c19/qr4741rg60y1gr5w0atdwrus7gppcngy.jpg</picture>
<name>Рукав всасывающий Б  38 мм 6 м гр 1  КРТ</name>
<description>Рукав всасывающий Б  38 мм 6 м гр 1  КРТ</description>
</offer>
<offer id="45751" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1230</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1b6/iyzaq8tm6pda42i99ycng7k3m553ovex.jpeg</picture>
<name>Рукав всасывающий Б 100 мм  10 м гр 1 СЗР</name>
<description>Рукав всасывающий Б 100 мм  10 м гр 1 СЗР</description>
</offer>
<offer id="45752" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>428</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/869/hy29l7a9eum6zish62j1a3q6s3u4sc4m.jpeg</picture>
<name>Рукав всасывающий Б  32 мм 10 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  32 мм 10 м гр 1 СЗР</description>
</offer>
<offer id="45753" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_4_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1262</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/643/9xdc2349s6qsz8vjz1o0dbbc3803ag9r.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   4 м гр 1 СЗР</name>
<description>Рукав всасывающий Б 100 мм   4 м гр 1 СЗР</description>
</offer>
<offer id="45754" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/73c/g85g5smc87s5w5swir1s99hm5d2u3xpv.jpeg</picture>
<name>Рукав всасывающий Б  38 мм 10 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  38 мм 10 м гр 1 СЗР</description>
</offer>
<offer id="45755" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>820</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aad/iaiwqkq0ztg37grc193rsh26tkw89h0l.jpeg</picture>
<name>Рукав всасывающий Б  50 мм 10 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  50 мм 10 м гр 1 СЗР</description>
</offer>
<offer id="45756" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_4_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>973</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7b6/kt47fk337aop0brhw6h5fiuq3t816vd1.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  4 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  75 мм  4 м гр 1 СЗР</description>
</offer>
<offer id="45757" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>927</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8e5/xggedpwvqyqshne67iptdicu28wxhkhv.jpeg</picture>
<name>Рукав всасывающий Б  75 мм 10 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  75 мм 10 м гр 1 СЗР</description>
</offer>
<offer id="45758" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_50kh64_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>560</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/74e/b9y2gs2by9ji4ymje9a209d5sntg3o6g.gif</picture>
<name>Рукав напорный В  50х64 мм 1,0 МПа Химтекс</name>
<description>Рукав напорный В  50х64 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="45759" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_65_mm_10_m_gr_2_r_3/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>809</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8e4/zaxqvik8qtttbrxp02hjh86g40i07ojq.jpeg</picture>
<name>Рукав всасывающий КЩ  65 мм 10 м гр 2 р-3</name>
<description>Рукав всасывающий КЩ  65 мм 10 м гр 2 р-3 </description>
</offer>
<offer id="45760" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_16_mm_0_4_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75.3</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3a9/8y9fxjlgb2wcqrfqmry23rnthmun334t.gif</picture>
<name>Рукав напорный В  16 мм 0,4 МПа СЗР</name>
<description>Рукав напорный В  16 мм 0,4 МПа СЗР</description>
</offer>
<offer id="45761" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_20_mm_1_0_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>186.3</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fba/jdjeh956zg85h0s0aw730mwzjxkug0mi.gif</picture>
<name>Рукав напорный В  20 мм 1,0 МПа</name>
<description>Рукав напорный В  20 мм 1,0 МПа </description>
</offer>
<offer id="45762" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_65kh83_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1066</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/26c/umkb7p0rc1ou0gi2d2wzboqg8u5fibng.gif</picture>
<name>Рукав напорный В 65х83 мм 1,0 МПа Химтекс</name>
<description>Рукав напорный В 65х83 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="45764" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_100_mm_6_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1700</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/867/5cgmeqlv7muftagpdxigyuqfrggusobk.jpeg</picture>
<name>Рукав всасывающий КЩ 100 мм 6 м гр 1 СЗР</name>
<description>Рукав всасывающий КЩ 100 мм 6 м гр 1 СЗР </description>
</offer>
<offer id="45765" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_120kh132_mm_0_3_mpa_700n_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1660</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3b3/gmf2xto8poxfh42gsule3ov8jidp69wf.jpg</picture>
<name>Шланг нап всас ПВХ 120х132 мм 0,3 МПа 700N МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 120х132 мм 0,3 МПа 700N МПТ-Пластик</description>
</offer>
<offer id="45766" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_32_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1134</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f4e/vi6xi6zx5xtchnu8wbo1zbyaw5wisxrz.jpeg</picture>
<name>Шланг ПВХ 32 мм с мет спиралью</name>
<description>Шланг ПВХ 32 мм с мет спиралью</description>
</offer>
<offer id="45767" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_25_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>824</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a1a/t5grku511g83ozgiiy3hvchbe1qrtzni.jpeg</picture>
<name>Шланг ПВХ 25 мм с мет спиралью</name>
<description>Шланг ПВХ 25 мм с мет спиралью</description>
</offer>
<offer id="45768" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_90kh102_mm_0_4_mpa_700n_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1011.2</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fb9/0md2mds8pdw0jyvdb03wpjtqtz8y35qj.jpg</picture>
<name>Шланг нап всас ПВХ 90х102 мм 0,4 МПа 700N МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 90х102 мм 0,4 МПа 700N МПТ-Пластик</description>
</offer>
<offer id="45769" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_gbs_m_79_85_25_w12sk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>390</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b1e/fhsjjxezfoo60jeqzz3f8dd2oi4g1u97.jpg</picture>
<name>Хомут NORMA GBS М  79-85/25 W12SK</name>
<description>Хомут NORMA GBS М  79-85/25 W12SK</description>
</offer>
<offer id="45770" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_38kh45_mm_0_6_mpa_700n_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>283</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/de9/4cytl8dh46kiyl62o5eeylercjprd10y.jpeg</picture>
<name>Шланг нап всас ПВХ 38х45 мм 0,6 МПа 700N МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 38х45 мм 0,6 МПа 700N МПТ-Пластик</description>
</offer>
<offer id="45771" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_32_mm_0_7_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>124</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4e1/cfgyhhkh67t65nmvxd7jwn683bit8409.png</picture>
<name>Шланг нап всас ПВХ 32 мм 0,7 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 32 мм 0,7 МПа морозостойкий Снегирь</description>
</offer>
<offer id="45772" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_6_0kh1_0_mm_pishchevaya_100m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>14.7</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ce3/rn598cez3bw2ggle2qxidmvqhzw1dyfo.jpeg</picture>
<name>Трубка не арм  6,0х1,0 мм пищевая 100м</name>
<description>Трубка не арм  6,0х1,0 мм пищевая </description>
</offer>
<offer id="45773" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_8_0kh1_0_mm_pishchevaya_100m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>18</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7ff/vn4j1mi76dl8nhwarec71fiwzxh7pqdv.jpeg</picture>
<name>Трубка не арм  8,0х1,0 мм пищевая 100м</name>
<description>Трубка не арм  8,0х1,0 мм пищевая </description>
</offer>
<offer id="45774" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_10_0kh1_5_mm_pishchevaya_100m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>28</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b30/cob0pxaco4f9f9qmpxyx5ihhw593f506.jpeg</picture>
<name>Трубка не арм 10,0х1,5 мм пищевая 100м</name>
<description>Трубка не арм 10,0х1,5 мм пищевая </description>
</offer>
<offer id="45775" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_12_0kh1_5_mm_pishchevaya_100m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>37.4</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d65/ms1oyjc9yubywsx42oerkctpmdpbd0h7.jpeg</picture>
<name>Трубка не арм 12,0х1,5 мм пищевая 100м</name>
<description>Трубка не арм 12,0х1,5 мм пищевая </description>
</offer>
<offer id="45776" available="false">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_16_0kh2_0_mm_pishchevaya_50m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>65.5</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/51b/m1lzgrmnvi05ly1cps0luvg2e4x0b3ts.jpeg</picture>
<name>Трубка не арм 16,0х2,0 мм пищевая 50м</name>
<description>Трубка не арм 16,0х2,0 мм пищевая </description>
</offer>
<offer id="45777" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_14_0kh1_5_mm_pishchevaya_50m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>50</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/793/le38o0prea6660g5qwwfx7q3ggl7x6gr.jpg</picture>
<name>Трубка не арм 14,0х1,5 мм пищевая 50м</name>
<description>Трубка не арм 14,0х1,5 мм пищевая 50 м</description>
</offer>
<offer id="45778" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_poliuretanovyy_16_mm_4_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>418</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b2f/hhyrvinrnq7dmfbz2g68i549s1dncxkf.jpg</picture>
<name>Шланг полиуретановый 16 мм 4 МПа</name>
<description>Шланг полиуретановый 16 мм 4 МПа</description>
</offer>
<offer id="45779" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_poliuretanovyy_25_mm_4_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>568.6</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ed6/k1yz99qbachb4cew26nm1uwg8liwixe2.jpg</picture>
<name>Шланг полиуретановый 25 мм 4 МПа</name>
<description>Шланг полиуретановый 25 мм 4 МПа</description>
</offer>
<offer id="45780" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_poliuretanovyy_32_mm_4_mpa/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>860.2</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3d6/zw2u5t4nj4qdxg8xwnmj25ucvb7u56my.jpg</picture>
<name>Шланг полиуретановый 32 мм 4 МПа</name>
<description>Шланг полиуретановый 32 мм 4 МПа</description>
</offer>
<offer id="45781" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_32_50_972/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>57.2</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dc6/cz1ytqk6xbnz9bbr82op6pcl5ncx7llu.jpeg</picture>
<name>Хомут NORMA TORRO 32-50/972</name>
<description>Хомут NORMA TORRO 32-50/972</description>
</offer>
<offer id="45782" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_19kh26_mm_1_0_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>215</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/890/557g4k2gp7c6pf0gmlce5r83ww2noqlu.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 19х26 мм 1,0 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 19х26 мм 1,0 МПа МПТ-Пластик</description>
</offer>
<offer id="45783" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_13kh19_mm_1_3_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>123</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3f9/4w0w263ool4dqnnv9ix3f28vwthk7r28.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 13х19 мм 1,3 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 13х19 мм 1,3 МПа МПТ-Пластик</description>
</offer>
<offer id="45784" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_50kh62_mm_0_5_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>855</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d17/ezg3scjtjwlzab2n4rlrpd9agmiyffzo.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 50х62 мм 0,5 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 50х62 мм 0,5 МПа МПТ-Пластик</description>
</offer>
<offer id="45785" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_10kh16_mm_1_5_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>103</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/227/9m9wspfp8rx5gc9qlqrdw3qrx09v7ngb.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 10х16 мм 1,5 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 10х16 мм 1,5 МПа МПТ-Пластик</description>
</offer>
<offer id="45786" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_16kh22_mm_1_1_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>164</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ad2/8ecwhn6khlu25rnyiau8fu8ygpe80eun.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 16х22 мм 1,1 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 16х22 мм 1,1 МПа МПТ-Пластик</description>
</offer>
<offer id="45787" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_18kh24_mm_1_0_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>203</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/45f/mknzvgg8q2i3yrqd50vsfgnj4vz81e1p.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 18х24 мм 1,0 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 18х24 мм 1,0 МПа МПТ-Пластик</description>
</offer>
<offer id="45788" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_25kh33_mm_1_0_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>315</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8de/d7cynt67lau77rx6hpqdvudd63vn9sos.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 25х33 мм 1,0 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 25х33 мм 1,0 МПа МПТ-Пластик</description>
</offer>
<offer id="45789" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_8kh13_5_mm_1_7_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>87</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f15/7t32yafbms3lamyhvcn69mqbe0urfdin.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П  8х13,5 мм 1,7 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П  8х13,5 мм 1,7 МПа МПТ-Пластик</description>
</offer>
<offer id="45790" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_40kh50_mm_0_7_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>576</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/102/q9si7h5b7km6wb0rycxxsjzmsjl62ay6.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 40х50 мм 0,7 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 40х50 мм 0,7 МПа МПТ-Пластик</description>
</offer>
<offer id="45791" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_6kh11_mm_1_7_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>66.9</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/903/lntm44zf7h86k1lg1x6h62tp7dr9knl7.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П  6х11 мм 1,7 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П  6х11 мм 1,7 МПа МПТ-Пластик</description>
</offer>
<offer id="45792" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_16_25_972/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>50.7</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/531/gl9iyv4pbv0o7x4durlnb1yq56l3m85s.jpeg</picture>
<name>Хомут NORMA TORRO 16-25/972</name>
<description>Хомут NORMA TORRO 16-25/972 </description>
</offer>
<offer id="45793" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_20kh26_mm_1_0_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/19d/blo6hv2c7b3telakdw3napfvq7arszeo.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 20х26 мм 1,0 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 20х26 мм 1,0 МПа МПТ-Пластик</description>
</offer>
<offer id="45794" available="false">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/pnevmotrubka_poliuretanovaya_pu95_8kh6_0_8_mpa_golubaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>80</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<name>Пневмотрубка полиуретановая  PU95 8х6 0,8 МПа голубая</name>
<description>Пневмотрубка полиуретановая  PU95 8х6 0,8 МПа голубая </description>
</offer>
<offer id="45795" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_16_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>618</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dfe/djdfz4nymwtsa3x5v02n1bsocflvinxn.jpeg</picture>
<name>Шнур резиновый МБС 16 мм</name>
<description>Шнур резиновый МБС 16 мм</description>
</offer>
<offer id="45796" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_10_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>650</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef7/ovy3pmix66pev5md0vkp0ji4dbfjy3jb.jpeg</picture>
<name>Шнур резиновый МБС 10 мм</name>
<description>Шнур резиновый МБС 10 мм </description>
</offer>
<offer id="45797" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_8_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>656</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac8/d7pr3uaqfhxrvu472uu77knvwc9cwzzu.jpeg</picture>
<name>Шнур резиновый МБС  8 мм</name>
<description>Шнур резиновый МБС  8 мм </description>
</offer>
<offer id="45798" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_silikonovaya_6kh4_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>573</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0dd/qcqhvb3wxuzsqzsblul18oes2sbnvsip.jpg</picture>
<name>Трубка силиконовая  6х4 мм</name>
<description>Трубка силиконовая  6х4 мм</description>
</offer>
<offer id="45799" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_bystrosemom_12_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1061</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/263/hmpgry34sxur2k8mbnzmk07boyvxcbc2.jpg</picture>
<name>Шланг подкачки колес с быстросъемом 12 м 20 атм</name>
<description>Шланг подкачки колес с быстросъемом 12 м 20 атм</description>
</offer>
<offer id="45800" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_bystrosemom_16_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1264</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0bd/4lt0jiat3dmjgeej80dtvikqxkyx48su.jpg</picture>
<name>Шланг подкачки колес с быстросъемом 16 м 20 атм</name>
<description>Шланг подкачки колес с быстросъемом 16 м 20 атм</description>
</offer>
<offer id="45801" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_bystrosemom_20_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1442</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/75f/rrkvoeaqchmjfp5w20nzyb4a1gbprrox.jpg</picture>
<name>Шланг подкачки колес с быстросъемом 20 м 20 атм</name>
<description>Шланг подкачки колес с быстросъемом 20 м 20 атм</description>
</offer>
<offer id="45802" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_nakonechnekom_prishchepka_16_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1066</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1da/1ps9568r6382u3ey7vfeo2xvekp81047.jpg</picture>
<name>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 16 м 20 атм</name>
<description>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 16 м 20 атм</description>
</offer>
<offer id="45803" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_20_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>626</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/24f/q7r89y5jn12y7uudgphj2jiqwg2op99z.jpeg</picture>
<name>Шнур резиновый МБС 20 мм</name>
<description>Шнур резиновый МБС 20 мм</description>
</offer>
<offer id="45804" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/rukav_dlya_poliva_24_5_0_5_50m_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/67d/svgfp9692symw78p940es9505p6kieh8.jpg</picture>
<name>Рукав для полива 24,5-0,5  50м Кварт</name>
<description>Рукав для полива 24,5-0,5  50м Кварт </description>
</offer>
<offer id="45805" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_18_0kh2_0_mm_pishchevaya_50m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>66.8</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/249/orcufrkr1wzkod878n1r00l9vbbayynf.jpeg</picture>
<name>Трубка не арм 18,0х2,0 мм пищевая 50м</name>
<description>Трубка не арм 18,0х2,0 мм пищевая </description>
</offer>
<offer id="45806" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_20kh2_0_mm_pishchevaya_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/878/tu7n0oefdxebnqutjaxk34wxtbd9i3o8.jpg</picture>
<name>Трубка не арм 20х2,0 мм пищевая 50 м</name>
<description>Трубка не арм 20,х2,0 мм пищевая  50 м</description>
</offer>
<offer id="45807" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_serebro_0_5_mpa_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/927/2brdvm1hla8r0uo6766pckk4gkauygzi.jpg</picture>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм серебро 0,5 МПа 50 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм серебро 0,5 МПа 50 м</description>
</offer>
<offer id="45808" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_25_mm_serebro_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>113</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/629/0y8fr16j49qr587y5purp5tjbjmwsz2p.jpg</picture>
<name>Шланг поливочный ТЭП  1&quot; 25 мм серебро 50 м</name>
<description>Шланг поливочный ТЭП  1&quot; 25 мм серебро 50 м</description>
</offer>
<offer id="45809" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_bystrosemom_6_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fd5/g3cwxumvcai6p0q9oxvmiog1oplx3h4s.jpg</picture>
<name>Шланг подкачки колес с быстросъемом  6 м 20 атм</name>
<description>Шланг подкачки колес с быстросъемом  6 м 20 атм</description>
</offer>
<offer id="45810" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_bystrosemom_9_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>791</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/47d/5eroc4rs84wjptz63b3kay7e9rkrwl6r.jpg</picture>
<name>Шланг подкачки колес с быстросъемом  9 м 20 атм</name>
<description>Шланг подкачки колес с быстросъемом  9 м 20 атм</description>
</offer>
<offer id="45811" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_nakonechnekom_prishchepka_6_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>496</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f90/ls8rpi4kvdqm0tubybcx2b37362a0rh4.jpg</picture>
<name>Шланг подкачки колес с наконечнеком &quot;прищепка&quot;  6 м 20 атм</name>
<description>Шланг подкачки колес с наконечнеком &quot;прищепка&quot;  6 м 20 атм</description>
</offer>
<offer id="45812" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_nakonechnekom_prishchepka_9_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>675</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2f5/ablyxlhx02w3hlcl7bbombe2ckv9qe0s.jpg</picture>
<name>Шланг подкачки колес с наконечнеком &quot;прищепка&quot;  9 м 20 атм</name>
<description>Шланг подкачки колес с наконечнеком &quot;прищепка&quot;  9 м 20 атм</description>
</offer>
<offer id="45813" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_nakonechnekom_prishchepka_12_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>836</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/451/ckq918y7hbvlat695o0otva0wz377drq.jpg</picture>
<name>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 12 м 20 атм</name>
<description>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 12 м 20 атм</description>
</offer>
<offer id="45814" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_nakonechnekom_prishchepka_18_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1181</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6ee/xyysoq8lpwnum9mncgq02fdlwneelxoc.jpg</picture>
<name>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 18 м 20 атм</name>
<description>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 18 м 20 атм</description>
</offer>
<offer id="45815" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_nakonechnekom_prishchepka_24_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1429</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f9a/4j09v5p2z5uvmderw40f85zl1636t08t.jpg</picture>
<name>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 24 м 20 атм</name>
<description>Шланг подкачки колес с наконечнеком &quot;прищепка&quot; 24 м 20 атм</description>
</offer>
<offer id="45816" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_bystrosemom_18_m_20_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1342</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/459/hoqdc7n43h7pp79pjp4771o2akntik1o.jpg</picture>
<name>Шланг подкачки колес с быстросъемом 18 м 20 атм</name>
<description>Шланг подкачки колес с быстросъемом 18 м 20 атм</description>
</offer>
<offer id="45817" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_zelenyy_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>72.6</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8c3/rmjlwlb1blvr4vq0hqzy0hbe925xo8oy.jpg</picture>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм зеленый 50 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм зеленый 50 м</description>
</offer>
<offer id="45818" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_zelyenyy_25_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>44</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a8a/15evsmi7xutzyj9bobawerx2h1todawe.jpg</picture>
<name>Шланг поливочный ТЭП 1/2&quot; 12,5 мм зелёный 25 м</name>
<description>Шланг поливочный ТЭП 1/2&quot; 12,5 мм зелёный 25 м</description>
</offer>
<offer id="45819" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_serebro_25_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e8c/rf6ayxdgs49xf49o3veu158950otvabq.jpg</picture>
<name>Шланг поливочный ТЭП 1/2&quot; 12,5 мм серебро 25 м</name>
<description>Шланг поливочный ТЭП 1/2&quot; 12,5 мм серебро 25 м</description>
</offer>
<offer id="45820" available="true">
<url>http://himopttorg.ru/catalog/steklotkan_shpagat/steklotkan_e3_200_1_vladimir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>55</price>
<currencyId>RUB</currencyId>
<categoryId>3321</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d50/xvpnps0cpddvua857d7m8kg3sju6ddd6.jpeg</picture>
<name>Стеклоткань Э3-200/1 Владимир</name>
<description>Стеклоткань Э3-200/1 Владимир</description>
</offer>
<offer id="45832" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_vl_02_zh_vedro_20_kg_kompl_16_osnova_4_kislotn_razbavitel_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>460</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b5e/cnb9wei3ym6dhxpq1xlufq368w24sqbm.jpg</picture>
<name>Грунт ВЛ-02 ж/ ведро 20 кг (компл 16 основа + 4 кислотн. разбавитель) ХИ</name>
<description>Грунт ВЛ-02 ж/ ведро 20 кг (компл 16 основа + 4 кислотн. разбавитель) ХИ</description>
</offer>
<offer id="45833" available="true">
<url>http://himopttorg.ru/catalog/steklotkan_shpagat/shpagat_polipropilenovyy_2200_teks_vladimir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>298</price>
<currencyId>RUB</currencyId>
<categoryId>3321</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fd5/4d2x3xoeoc2cwfkpblzpzssmfsg6bl44.jpeg</picture>
<name>Шпагат полипропиленовый 2200 текс Владимир</name>
<description>Шпагат полипропиленовый 2200 текс Владимир</description>
</offer>
<offer id="45834" available="true">
<url>http://himopttorg.ru/catalog/smazochnye_materialy_1/grafit_gl_1_b_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>149</price>
<currencyId>RUB</currencyId>
<categoryId>3314</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2af/9z8kh1ng0h0qfgcxojui9zdz20deonn5.jpg</picture>
<name>Графит ГЛ-1 б/меш 25 кг</name>
<description>Графит ГЛ-1 б/меш 25 кг</description>
</offer>
<offer id="45837" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/petroleynyy_efir_ch_40_70_st_but_0_7_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>494</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2a3/i12szrrsqjgwhdwgttz7s6aqx4777kwx.jpg</picture>
<name>Петролейный эфир Ч 40-70 ст/бут 0,7 кг  Экос-1</name>
<description>Петролейный эфир Ч 40-70 ст/бут 0,7 кг  Экос-1</description>
</offer>
<offer id="45838" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/chkhu_khch_evs_marka_b_1_6_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>732</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/651/3z57y5m8jj4k0c22sklbzfpdb8ylsop5.jpg</picture>
<name>ЧХУ ХЧ ЭВС марка Б 1,6 кг</name>
<description>ЧХУ ХЧ ЭВС марка Б 1,6 кг</description>
</offer>
<offer id="45839" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/metilen_khloristyy_dikhlormetan_osch_st_but_1_3_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c85/gdcuabvr8zv3i7d9d1cil6wxk4hrw9ak.jpg</picture>
<name>Метилен хлористый (дихлорметан) ОСЧ ст/бут 1,3 кг Экос-1</name>
<description>Метилен хлористый (дихлорметан) ОСЧ ст/бут 1,3 кг Экос-1</description>
</offer>
<offer id="45840" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/n_geksan_khch_dlya_khromatografii_st_but_0_65_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1024</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Н-Гексан ХЧ для хроматографии ст/бут 0,65 кг Экос-1</name>
<description>Н-Гексан ХЧ для хроматографии ст/бут 0,65 кг Экос-1</description>
</offer>
<offer id="45841" available="true">
<url>http://himopttorg.ru/catalog/kaltsiy_gipokhlorit/kaltsiy_gipokhlorit_57_63_bar_40_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3353</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1af/4q01g1d145g3ve75rnjuvv2flzatapai.jpg</picture>
<name>Кальций гипохлорит 57-63% бар 40 кг</name>
<description>Кальций гипохлорит 57-63% бар 40 кг</description>
</offer>
<offer id="45843" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_serebro_0_5_mpa_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>44</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c35/6s0lvhz0r4a0keqwrigurmbpkhq02i0e.jpg</picture>
<name>Шланг поливочный ТЭП 1/2&quot;  12,5 мм серебро 0,5 МПа 50 м</name>
<description>Шланг поливочный ТЭП 1/2&quot;  12,5 мм серебро 0,5 МПа 50 м</description>
</offer>
<offer id="45844" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_siniy_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>44</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c1d/ew9szae7pk421cgv0k7a3divnxa9c7s6.jpg</picture>
<name>Шланг поливочный ТЭП 1/2&quot; 12,5 мм синий 50 м</name>
<description>Шланг поливочный ТЭП 1/2&quot; 12,5 мм синий 50 м</description>
</offer>
<offer id="45846" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_siniy_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/955/qoajp9lns863rdtws5hejgals0uvbrne.jpg</picture>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм синий 50 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм синий 50 м</description>
</offer>
<offer id="45847" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_150_mm_4_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2498</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bcc/58tpfrpb4k5zro5ou3bs5pifwy50uee6.jpeg</picture>
<name>Рукав всасывающий Б 150 мм  4 м гр 1 СЗР</name>
<description>Рукав всасывающий Б 150 мм  4 м гр 1 СЗР</description>
</offer>
<offer id="45848" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>710</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/118/28mrcehx71jje2orlh5lejhtk0n9nuwh.jpg</picture>
<name>Шланг нап всас ПВХ 50 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 50 мм север зеленый -55С</description>
</offer>
<offer id="45849" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50_mm_0_5_mpa_mbs_siniy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>586</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/093/mddcejgq3efgpsrw8xqzskhhregrnvke.jpg</picture>
<name>Шланг нап всас ПВХ 50 мм 0,5 МПа МБС синий</name>
<description>Шланг нап всас ПВХ 50 мм 0,5 МПа МБС синий</description>
</offer>
<offer id="45851" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/meshki_d_m_60l_romashka_rul_20_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>60.5</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3c5/y1h916ayr2kjxbyme2qwshclaubiyqht.jpg</picture>
<name>Мешки д/м 60л РОМАШКА (рул 20 шт)</name>
<description>Мешки д/м 60л РОМАШКА (рул 20 шт)</description>
</offer>
<offer id="45853" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/venik_sorgo_3_kh_proshivnoy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>171</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/581/r8xiuvsv22exmn94tvyle2j7zcflktiu.jpg</picture>
<name>Веник сорго 3-х прошивной</name>
<description>Веник сорго 3-х прошивной</description>
</offer>
<offer id="45855" available="false">
<url>http://himopttorg.ru/catalog/kislota_ortofosfornaya_tekhnicheskaya/kislota_ortofosfornaya_tekh_tu_pl_kan_34_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>168</price>
<currencyId>RUB</currencyId>
<categoryId>3346</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c47/hyyo1a9qsyttbjzkjocv7vnnt87ko3ks.jpeg</picture>
<name>Кислота ортофосфорная тех ТУ пл/кан 34 кг </name>
<description>Кислота ортофосфорная тех ТУ пл/кан 34 кг </description>
</offer>
<offer id="45863" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_salatovaya_emlayt_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cf6/o36syt8o8gucbcxwehbvlrviif1lkty8.jpg</picture>
<name>Эмаль ПФ-115 салатовая Эмлайт бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 салатовая Эмлайт бар 25 кг Х-И</description>
</offer>
<offer id="45868" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_zelenaya_ral_6002_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>450</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/17c/k0c3xy29ullpkuw1g7adpsd9qdnmze4w.png</picture>
<name>Эмаль ПФС Стрела зеленая RAL 6002 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела зеленая RAL 6002 бар 45 кг Ярославль</description>
</offer>
<offer id="45869" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_zheltaya_ral_1003_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>419</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/16f/mebrmj852pfn8n4nynkmsqxe1ubargsd.png</picture>
<name>Эмаль ПФС Стрела желтая  RAL 1003 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела желтая  RAL 1003 бар 45 кг Ярославль</description>
</offer>
<offer id="45870" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_sinyaya_ral_5010_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>406</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bce/mxkjmht1g2wx07ux6i9c4anl4ln49il3.png</picture>
<name>Эмаль ПФС Стрела синяя RAL 5010 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела синяя RAL 5010 бар 45 кг Ярославль</description>
</offer>
<offer id="45871" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_sv_seraya_ral_7038_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>243</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a2c/bmh1qz7mgiprbmj8l8owawwe91a85eos.jpg</picture>
<name>Эмаль ПФ-115 св серая RAL 7038 бар 25 кг</name>
<description>Эмаль ПФ-115 св серая RAL 7038 бар 25 кг</description>
</offer>
<offer id="45872" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_p_32kh41_mm_0_7_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>450</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ff8/9o4kn6vpnamos2tgobv44xhqaugql4tl.jpeg</picture>
<name>Шланг напорный ПВХ арм нитью П 32х41 мм 0,7 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью П 32х41 мм 0,7 МПа МПТ-Пластик</description>
</offer>
<offer id="45873" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_400_2bknl_65_2_1_5_1_5_2l_5mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>796</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0be/9fcwwxt89fknvrehfrp9z6miphcmz11f.jpeg</picture>
<name>Лента кон  400-2БКНЛ-65-2-1,5-1,5 2Л    5мм</name>
<description>Лента кон  400-2БКНЛ-65-2-1,5-1,5 2Л    5мм</description>
</offer>
<offer id="45875" available="true">
<url>http://himopttorg.ru/catalog/izvest_khlornaya/izvest_khlornaya_p_mesh_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>95</price>
<currencyId>RUB</currencyId>
<categoryId>3354</categoryId>
<picture>http://himopttorg.ru/upload/iblock/63b/f9aj6o9apzk9csevz5vik13g3w184y1c.jpg</picture>
<name>Известь хлорная п/меш 20 кг</name>
<description>Известь хлорная п/меш 20 кг </description>
</offer>
<offer id="45876" available="true">
<url>http://himopttorg.ru/catalog/soda_kausticheskaya/soda_kausticheskaya_cheshuirovannaya_p_mesh_25_kg_kitay/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>92</price>
<currencyId>RUB</currencyId>
<categoryId>3113</categoryId>
<name>Сода каустическая чешуированная  п/меш 25 кг Китай</name>
<description>Сода каустическая чешуированная  п/меш 25 кг Китай</description>
</offer>
<offer id="45877" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_10_mm_1000kh1000/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2550</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/02b/lqey1ju85yh61qatxama271mhnstz6tp.jpg</picture>
<name>Пластина ТМКЩ 10 мм 1000х1000</name>
<description>Пластина ТМКЩ 10 мм 1000х1000</description>
</offer>
<offer id="45891" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_bezhevaya_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e20/1ukpsbc0z7k69x674eygw6vap68zxq8u.jpg</picture>
<name>Эмаль ПФ-115 бежевая бар 25 кг</name>
<description>Эмаль ПФ-115 бежевая бар 25 кг</description>
</offer>
<offer id="45893" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_zelenyy_25_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4de/1cekuwcfcdfhbd1qknqi7ry3litp5iov.jpg</picture>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм зеленый 25 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм зеленый 25 м</description>
</offer>
<offer id="45898" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/khloroform_khch_st_but_1_5_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>323</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Хлороформ ХЧ ст/бут 1,5 кг Экос-1</name>
<description>Хлороформ ХЧ ст/бут 1,5 кг Экос-1</description>
</offer>
<offer id="45899" available="false">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_norma_torro_8_16_972/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>46.8</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fc4/4fhm1bly8y5nj3o223gb5cruldwz1c9g.jpg</picture>
<name>Хомут NORMA TORRO  8-16/972</name>
<description>Хомут NORMA TORRO  8-16/972 </description>
</offer>
<offer id="45901" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_16_mm_1_0_mpa_tu_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e89/1l13qm54f7c5nenuyxyorv9fvln8s62t.jpeg</picture>
<name>Рукав напорный ВГ 16 мм 1,0 МПа ТУ СЗР</name>
<description>Рукав напорный ВГ 16 мм 1,0 МПа ТУ СЗР</description>
</offer>
<offer id="45902" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_18_mm_1_0_mpa_tu_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>118</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/142/1d2vl1cwhsh6kd90bduu1ihypffgusep.jpeg</picture>
<name>Рукав напорный ВГ 18 мм 1,0 МПа ТУ СЗР</name>
<description>Рукав напорный ВГ 18 мм 1,0 МПа ТУ СЗР</description>
</offer>
<offer id="45903" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_10_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1130</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3de/pz4dbn5alqp9qjtfsfidt133x32c2fcb.jpeg</picture>
<name>Рукав всасывающий Б  75 мм 10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б  75 мм 10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="45904" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_6_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/79f/edy1jdxlzm0fv0iya8ezsa320ska6n5y.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  6 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б  75 мм  6 м гр 2 р-5 СЗР</description>
</offer>
<offer id="45905" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_6_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1057</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/73a/garvtz7woad2y6crzraywv7rgd2zic3y.jpeg</picture>
<name>Рукав всасывающий В 100 мм  6 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий В 100 мм  6 м гр 2 р-5 СЗР</description>
</offer>
<offer id="45906" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_4_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>980</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/73a/tc1r49ji0oee64qp041mtv68vsfodola.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  4 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б  75 мм  4 м гр 2 р-5 СЗР</description>
</offer>
<offer id="45907" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_18kh31_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>384</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/91d/a5nzorbs4ptxpl0g0v92caqcmch57cqb.gif</picture>
<name>Рукав пневматический Г 18х31 мм 1,0 МПа Кварт</name>
<description>Рукав пневматический Г 18х31 мм 1,0 МПа Кварт</description>
</offer>
<offer id="45908" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_25_mm_720kh720_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3307</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/59b/1rgamr3tirym6hi7nzvd627wvgysmv7z.jpeg</picture>
<name>Пластина ТМКЩ 25 мм 720х720</name>
<description>Пластина ТМКЩ 25 мм 720х720</description>
</offer>
<offer id="45909" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_64_67_22_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>65.1</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/292/pkwiqvji2njj0sf6og99qf7qanpe2sfn.jpg</picture>
<name>Хомут силовой одноболтовый 64-67/22 W1</name>
<description>Хомут силовой одноболтовый 64-67/22 W1</description>
</offer>
<offer id="45910" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_86_91_24_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>80.6</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ee9/isrdu37q44ccwnqhfkjhgf66wffu8wjk.jpg</picture>
<name>Хомут силовой одноболтовый 86-91/24 W1</name>
<description>Хомут силовой одноболтовый 86-91/24 W1</description>
</offer>
<offer id="45911" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_2/rukav_napornyy_ii_9_mm_0_63_mpa_b_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>106</price>
<currencyId>RUB</currencyId>
<categoryId>243</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e0b/ik1dtpjq2cs9t8c0ad8bw3xjjjuj9emx.jpeg</picture>
<name>Рукав напорный II- 9 мм 0,63 МПа (Б) Кварт</name>
<description>Рукав напорный II- 9 мм 0,63 МПа (Б) Кварт</description>
</offer>
<offer id="45912" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_mister_proper_750ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>322</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство Мистер Пропер 750мл</name>
<description>Моющее средство Мистер Пропер 750мл </description>
</offer>
<offer id="45913" available="false">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_chda_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>408</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/58c/eztoa0pey7zace6e6sv0155jyh6zp5oy.jpg</picture>
<name>Изопропанол ЧДА ст/бут 0,8 кг Экос-1</name>
<description>Изопропанол ЧДА ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="45914" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/remontnoe_soedinenie_25_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>181</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f4a/y3c0vchh14a3g2qmr5ns0jwdmkblbj25.jpg</picture>
<name>Ремонтное соединение 25 мм</name>
<description>Ремонтное соединение 25 мм</description>
</offer>
<offer id="45915" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/remontnoe_soedinenie_50_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>474</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4e0/7y9e98pznxaqnzvq997xumqrh1cjyfgg.jpg</picture>
<name>Ремонтное соединение 50 мм</name>
<description>Ремонтное соединение 50 мм</description>
</offer>
<offer id="45918" available="false">
<url>http://himopttorg.ru/catalog/asboshnur/pukhshnur_shap_02/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>235</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c3f/balzvfraxevyliibtte0uydj2j592vr1.jpeg</picture>
<name>Пухшнур ШАП 02</name>
<description>Пухшнур ШАП 02</description>
</offer>
<offer id="45919" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_15_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>530</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/331/o7vbvygqli4vv97nhfjx9nobemlmlhvw.jpg</picture>
<name>Асбошнур 15 мм ВАТИ</name>
<description>Асбошнур 15 мм ВАТИ</description>
</offer>
<offer id="45920" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_khoz_lateksnye_dr_klin_xl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43.1</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/956/15ifwbh3iqrg07nicyxc8xro8nxfv0le.jpeg</picture>
<name>Перчатки хоз латексные Др.Клин  XL</name>
<description>Перчатки хоз латексные Др.Клин  XL</description>
</offer>
<offer id="45921" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_4_mm_2050kh3050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>13600</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/29a/gixp7fas03q9v2hcqirts74d834uf08u.jpeg</picture>
<name>Оргстекло  4 мм 2050х3050 ACRYMA</name>
<description>Оргстекло  4 мм 2050х3050 ACRYMA</description>
</offer>
<offer id="45922" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50_mm_0_7_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>202</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/02d/ln3a7qhjgawyuuqtxuamsgustvox291r.png</picture>
<name>Шланг нап всас ПВХ 50 мм 0,7 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 50 мм 0,7 МПа морозостойкий Снегирь</description>
</offer>
<offer id="45923" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_75_mm_0_7_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>550</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bde/voh4hmxnqazjfm11ilw9xuo04hvshajh.png</picture>
<name>Шланг нап всас ПВХ 75 мм 0,7 МПа  морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 75 мм 0,7 МПа  морозостойкий Снегирь</description>
</offer>
<offer id="45924" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_63_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1080</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bcf/xrmdq191u021czvsiwacbdv9b4rzaqqr.jpg</picture>
<name>Шланг нап всас ПВХ 63 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 63 мм север зеленый -55С</description>
</offer>
<offer id="45925" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_65_mm_10_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>772</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5e8/f8q4fu2b8dx1rb5fnqpu9qm71o1rd02y.jpeg</picture>
<name>Рукав всасывающий В  65 мм 10 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В 65 мм 10 м гр 1 СЗРТ</description>
</offer>
<offer id="45926" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_siniy_25_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75.1</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7b1/r6nkk8b5w7i98uajrn7ig52n0nxhcb4k.jpg</picture>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм синий 25 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм синий 25 м</description>
</offer>
<offer id="45928" available="false">
<url>http://himopttorg.ru/catalog/kislota_ortofosfornaya_tekhnicheskaya/kislota_ortofosfornaya_termich_pishch_marka_a_pl_kan_33_kg_voskresensk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>243</price>
<currencyId>RUB</currencyId>
<categoryId>3346</categoryId>
<picture>http://himopttorg.ru/upload/iblock/665/2kzec3crenmk5ipqhrma4rs7g9idr1rs.jpeg</picture>
<name>Кислота ортофосфорная термич пищ марка А пл/кан 33 кг Воскресенск</name>
<description>Кислота ортофосфорная термич пищ марка А пл/кан 33 кг Воскресенск</description>
</offer>
<offer id="45929" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/metilen_khloristyy_dikhlormetan_khch_st_but_1_3_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>414</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Метилен хлористый (дихлорметан) ХЧ ст/бут 1,3 кг Экос-1</name>
<description>Метилен хлористый (дихлорметан) ХЧ ст/бут 1,3 кг Экос-1</description>
</offer>
<offer id="45931" available="false">
<url>http://himopttorg.ru/catalog/syraya_rezina/izolenta_khb_chernaya_300_g_dvukhstoronnyaya_20_0_4/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>156</price>
<currencyId>RUB</currencyId>
<categoryId>256</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6a6/hob3s21867e1vkfv1lqek47z06i6a1hr.jpeg</picture>
<name>Изолента ХБ черная 300 г двухсторонняя (20*0,4)</name>
<description>Изолента ХБ черная 300 г двухсторонняя (20*0,4)</description>
</offer>
<offer id="45932" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/filtr_bezzolnyy_125_mm_sinyaya_lenta/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>163</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Фильтр беззольный 125 мм синяя лента</name>
<description>Фильтр беззольный 125 мм синяя лента</description>
</offer>
<offer id="45933" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/filtr_bezzolnyy_125_mm_belaya_lenta/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>163</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Фильтр беззольный 125 мм белая лента</name>
<description>Фильтр беззольный 125 мм белая лента</description>
</offer>
<offer id="45935" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/khromovyy_temno_siniy_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>25243</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Хромовый темно-синий ЧДА</name>
<description>Хромовый темно-синий ЧДА</description>
</offer>
<offer id="45937" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/ammoniy_khloristyy_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1246</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Аммоний хлористый ХЧ</name>
<description>Аммоний хлористый ХЧ</description>
</offer>
<offer id="45938" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/reagent_azotnokislyy_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>345300</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Реагент азотнокислый ХЧ</name>
<description>Реагент азотнокислый ХЧ</description>
</offer>
<offer id="45939" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/standart_titr_kislota_sernaya_0_1n/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1145</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Стандарт-титр кислота серная 0,1Н</name>
<description>Стандарт-титр кислота серная 0,1Н</description>
</offer>
<offer id="45940" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/standart_titr_trilon_b/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1219</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Стандарт-титр Трилон Б</name>
<description>Стандарт-титр Трилон Б</description>
</offer>
<offer id="45941" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/metilovyy_oranzhevyy_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>9604</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Метиловый оранжевый ЧДА</name>
<description>Метиловый оранжевый ЧДА</description>
</offer>
<offer id="45943" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/ammiak_vodnyy_chda_0_9kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>274</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Аммиак водный ЧДА 0,9кг</name>
<description>Аммиак водный ЧДА 0,9кг</description>
</offer>
<offer id="45946" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_5kh500kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3683</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f1d/2fuu3zc20sj38uisjzxijmfe99e09cm5.jpg</picture>
<name>Пластина силиконовая 5х500х500 мм</name>
<description>Пластина силиконовая 5х500х500 мм</description>
</offer>
<offer id="45947" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kompozitsiya_organosilikatnaya_os_51_03_krasno_korichnevaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>543</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Композиция органосиликатная ОС-51-03 красно-коричневая</name>
<description>Композиция органосиликатная ОС-51-03 красно-коричневая</description>
</offer>
<offer id="45948" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/etilatsetat_ch_pl_kan_9_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>481</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a46/o3hx17bxe4upu5fucvxtkrdsngq0eai5.jpeg</picture>
<name>Этилацетат Ч пл/кан 9 кг (10 л) Экос-1</name>
<description>Этилацетат Ч пл/кан 9 кг (10 л) Экос-1</description>
</offer>
<offer id="45949" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_zheltyy_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/261/sll1k86om302cyhy3huc2soajljhcbir.jpg</picture>
<name>Шланг поливочный ТЭП 1/2&quot;  12,5 мм желтый 50 м</name>
<description>Шланг поливочный ТЭП 1/2&quot;  12,5 мм желтый 50 м</description>
</offer>
<offer id="45950" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50_mm_sever_prozrachnyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>708</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<name>Шланг нап всас ПВХ 50 мм север прозрачный -55С</name>
<description>Шланг нап всас ПВХ 50 мм север прозрачный -55С</description>
</offer>
<offer id="45952" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_100_3bknl65_2_0_0_3_5mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eff/qpi7g4d0a2kipd0yivec9o1h7u2iavgz.jpg</picture>
<name>Лента кон  100-3БКНЛ65-2-0-0 3,5мм</name>
<description>Лента кон  100-3БКНЛ65-2-0-0 3,5мм</description>
</offer>
<offer id="45953" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/rastvoritel_r_4_a_pl_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2650</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c64/ehok20ljx1cd1q6voxqz8445h4sxt9r1.jpg</picture>
<name>Растворитель Р-4 А пл/кан 10 л</name>
<description>Растворитель Р-4 А пл/кан 10 л </description>
</offer>
<offer id="45954" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/trikhloretilen_osch_st_but_1_5_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>852</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Трихлорэтилен ОСЧ ст/бут 1,5 кг Экос-1</name>
<description>Трихлорэтилен ОСЧ ст/бут 1,5 кг Экос-1</description>
</offer>
<offer id="45955" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/etilatsetat_khch_st_but_0_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>552</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Этилацетат ХЧ ст/бут 0,9 кг Экос-1</name>
<description>Этилацетат ХЧ ст/бут 0,9 кг Экос-1</description>
</offer>
<offer id="45956" available="true">
<url>http://himopttorg.ru/catalog/atseton_1/atseton_chda_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>384</price>
<currencyId>RUB</currencyId>
<categoryId>3351</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1e0/v6svp6zutftp90609tey3r91inye4wye.jpeg</picture>
<name>Ацетон ЧДА ст/бут 0,8 кг Экос-1</name>
<description>Ацетон ЧДА ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="45958" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_200_2bknl_65_2_1_5_1_5_2l_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ca9/vls693l8qv7czhf2ch5bhc9b3b5w7v71.jpg</picture>
<name>Лента кон  200-2БКНЛ-65-2-1,5-1,5 2Л   5 мм</name>
<description>Лента кон  200-2БКНЛ-65-2-1,5-1,5 2Л   5 мм</description>
</offer>
<offer id="45960" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_zelenaya_u_bar_20_kg_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3a6/qbfk60cmgphe7ikajx4oiu5f0b1mssy6.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав зеленая У бар 20 кг  СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав зеленая У бар 20 кг  СПб</description>
</offer>
<offer id="45962" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_kruglaya_50mm_bartex/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>157</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Кисть круглая 50мм BARTEX</name>
<description>Кисть круглая 50мм BARTEX</description>
</offer>
<offer id="45964" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/kislota_sernaya_osch_11_5_st_but_1_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>312</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/105/jg9ms4bfirwzl3fmorwmk512hdfj531w.jpg</picture>
<name>Кислота серная ОСЧ 11-5 ст/бут 1,8 кг Экос-1</name>
<description>Кислота серная ОСЧ 11-5 ст/бут 1,8 кг Экос-1</description>
</offer>
<offer id="45966" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/tetraetoksisilan_osch_st_but_0_95_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1476</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/85a/7x4xvk9ec94ndtl7a8ii33lmx3y4ecc9.jpeg</picture>
<name>Тетраэтоксисилан ОСЧ ст/бут 0,95 кг</name>
<description>Тетраэтоксисилан ОСЧ ст/бут 0,95 кг</description>
</offer>
<offer id="45973" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_6_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dbc/phwbol0s20bydtzx2yvrc8p16fyfa2tr.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  6 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  75 мм  6 м гр 1 Химтекс</description>
</offer>
<offer id="45974" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1089</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1b0/9ec3wl2iupdb068c8u6o5ckshv9hk1fg.jpeg</picture>
<name>Рукав всасывающий В 100 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий В 100 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="45975" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1065</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b17/ca3w32e8xmsy5a7wft81ugq14fsnk124.jpeg</picture>
<name>Рукав всасывающий Б 100 мм  10 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б 100 мм  10 м гр 1 Химтекс</description>
</offer>
<offer id="45976" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_belaya_zh_ved_20_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>229</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 белая ж/вед 20 кг LIDA</name>
<description>Эмаль ПФ-115 белая ж/вед 20 кг LIDA</description>
</offer>
<offer id="45977" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_seraya_bar_20_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 серая бар 20 кг LIDA</name>
<description>Эмаль ПФ-115 серая бар 20 кг LIDA</description>
</offer>
<offer id="45978" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_chernaya_bar_20_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 черная бар 20 кг LIDA</name>
<description>Эмаль ПФ-115 черная бар 20 кг LIDA </description>
</offer>
<offer id="45979" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_38_mm_10_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>381</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e44/amy0v9k30n6tgl22k06b8f0s5b23s9cp.jpeg</picture>
<name>Рукав всасывающий В  38 мм 10 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  38 мм 10 м гр 1 СЗРТ</description>
</offer>
<offer id="45980" available="true">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_20kh41_mm_0_8_mpa_par_2_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>875</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/262/k2rbmgnpl8npa9l1l1mh6zweg9iw0d2d.gif</picture>
<name>Рукав паропроводный 20х41 мм 0,8 МПа пар-2 Химтекс</name>
<description>Рукав паропроводный 20х41 мм 0,8 МПа пар-2 Химтекс</description>
</offer>
<offer id="45981" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_40_60_9_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>18.8</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/498/7bchu0mn4pjm5rvk02024gredzwes2pu.jpeg</picture>
<name>Хомут червячный  40-60/9 W2</name>
<description>Хомут червячный  40-60/9 W2</description>
</offer>
<offer id="45982" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_25_mm_1_0_mpa_tu_szr_40m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/99c/r8bcxpwqky90i7z1dgi3etvf172bue0v.jpeg</picture>
<name>Рукав напорный ВГ 25 мм 1,0 МПа ТУ СЗР 40м</name>
<description>Рукав напорный ВГ 25 мм 1,0 МПа ТУ СЗР</description>
</offer>
<offer id="45983" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_6_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>628</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9dc/ncqomzsh3672wvjj4b92i4e5zv1u05r9.jpg</picture>
<name>Рукав всасывающий В  50 мм  6 м гр 1 Химтекс</name>
<description>Рукав всасывающий В  50 мм  6 м гр 1 Химтекс</description>
</offer>
<offer id="45985" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_90kh107_mm_0_98_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2078</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e9e/zfl9bdxkut4pzjn18fjizwc17s7z7lm7.jpeg</picture>
<name>Рукав с нит опл 90х107 мм 0,98 МПа КРТ</name>
<description>Рукав с нит опл 90х107 мм 0,98 МПа КРТ</description>
</offer>
<offer id="45986" available="true">
<url>http://himopttorg.ru/catalog/sredstva_dlya_vodopodgotovki/aminat_d_56_pl_kan_20_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>198</price>
<currencyId>RUB</currencyId>
<categoryId>301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac5/1eahaxeidbpypgi890l6gvaazxze10dg.jpg</picture>
<name>Аминат Д-56 пл/кан 20 кг Экос-1</name>
<description>Аминат Д-56 пл/кан 20 кг Экос-1</description>
</offer>
<offer id="45988" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/salfetka_mikrofibra_30kh30/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>24.7</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Салфетка микрофибра 30х30</name>
<description>Салфетка микрофибра 30х30</description>
</offer>
<offer id="45989" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_10_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1156</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3dc/8t892of04w3phn95l8h0xxxfz1fl0y4t.jpeg</picture>
<name>Рукав всасывающий Б  75 мм 10 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  75 мм 10 м гр 2 р-5 </description>
</offer>
<offer id="45990" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_40_mm_1000kh1000_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>154</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3b3/srub5ykgnvgnpovb3qb3f7ujcaj5b03g.jpeg</picture>
<name>Пластина ТМКЩ 40 мм 1000х1000 СПИ</name>
<description>Пластина ТМКЩ 40 мм 1000х1000 СПИ</description>
</offer>
<offer id="45991" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_5_mm_spi_1_2kh4_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e97/sohhxncw48h9zrquk5cfelomci2lvss4.gif</picture>
<name>Пластина МБС  5 мм  СПИ 1,2х4 м</name>
<description>Пластина МБС  5 мм СПИ</description>
</offer>
<offer id="45992" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_20_mm_1000kh1000_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>154</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f09/x5btyw2xi123mc07yvd67pbax5msxvf7.jpg</picture>
<name>Пластина ТМКЩ 20 мм 1000х1000 СПИ</name>
<description>Пластина ТМКЩ 20 мм 1000х1000 СПИ</description>
</offer>
<offer id="45993" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_10_mm_spi_1_2kh3_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>144</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5f2/gnrh0kqpxnj1x40k9ze6c2bw56bvo5fy.gif</picture>
<name>Пластина ТМКЩ 10 мм СПИ 1,2х3 м</name>
<description>Пластина ТМКЩ 10 мм СПИ</description>
</offer>
<offer id="45994" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_4_mm_spi_1_2kh8_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a6c/33m2j93rzjl2aoe0zjl5zznm9m3d6z9q.gif</picture>
<name>Пластина МБС  4 мм  СПИ 1,2х8 м</name>
<description>Пластина МБС  4 мм СПИ</description>
</offer>
<offer id="45995" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_10_mm_1000kh1000_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>154</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4fb/2u67h7jyf7690vc6wu8auab86ik7ril8.jpg</picture>
<name>Пластина ТМКЩ 10 мм 1000х1000 СПИ</name>
<description>Пластина ТМКЩ 10 мм  СПИ</description>
</offer>
<offer id="45996" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/urotropin_f_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1021</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Уротропин ф 1</name>
<description>Уротропин ф 1</description>
</offer>
<offer id="45997" available="false">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_250_mm_porolon/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>138</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0b2/fj5x1igvkq0ter68g3r84zt5rvljthyp.jpeg</picture>
<name>Валик в сборе 250 мм поролон</name>
<description>Валик в сборе 250 мм поролон</description>
</offer>
<offer id="45998" available="false">
<url>http://himopttorg.ru/catalog/kley_smola_ed_20_polietilenpoliamin/trietilentetramin_teta_pl_kan_1_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2530</price>
<currencyId>RUB</currencyId>
<categoryId>3322</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0a2/chxvvg0wu7zjddlqkhhgkc3c2hrak8dn.jpeg</picture>
<name>Триэтилентетрамин (ТЭТА) пл/кан  1 кг </name>
<description>Триэтилентетрамин (ТЭТА) пл/кан  1 кг </description>
</offer>
<offer id="46000" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_zheltaya_ral_1021_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>498</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef3/005ebeoc8gvtg7b0ezz1k5yslrc4zu53.png</picture>
<name>Эмаль ПФС Стрела желтая  RAL 1021 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела желтая  RAL 1021 бар 45 кг Ярославль</description>
</offer>
<offer id="46001" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_200_mm_4_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3318</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4dd/gl5y2vghmh4nu3x4ypbnf7i9siiayabv.jpeg</picture>
<name>Рукав всасывающий В 200 мм  4 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий В 200 мм  4 м гр 2 р-5 СЗР</description>
</offer>
<offer id="46002" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_pemolyuks_480g_morskoy_briz/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>95.2</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство пемолюкс 480г морской бриз</name>
<description>Моющее средство пемолюкс 480г морской бриз</description>
</offer>
<offer id="46003" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_ak_070_zheltyy_bar_40_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>420</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8ce/rqdg9mi8guov5mzayr992fpzp548v54i.png</picture>
<name>Грунт АК-070 желтый бар 40 кг</name>
<description>Грунт АК-070 желтый бар 40 кг </description>
</offer>
<offer id="46004" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/butilatsetat_khch_st_but_0_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>576</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3ce/agc3oo1xcq8sof32tkf9w3gx7rl4rwmk.jpg</picture>
<name>Бутилацетат ХЧ ст/бут 0,9 кг Экос-1</name>
<description>Бутилацетат ХЧ ст/бут 0,9 кг Экос-1</description>
</offer>
<offer id="46005" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/perkhloretilen_ch_st_but_1_6_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>463</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Перхлорэтилен Ч ст/бут 1,6 кг Экос-1</name>
<description>Перхлорэтилен Ч ст/бут 1,6 кг Экос-1</description>
</offer>
<offer id="46009" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/glitserin_chda_st_but_1_25_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d22/9ttm88z1eqnvehzglxeuua1ev0qoob8d.jpg</picture>
<name>Глицерин ЧДА ст/бут 1,25 кг Экос-1</name>
<description>Глицерин ЧДА ст/бут 1,25 кг Экос-1</description>
</offer>
<offer id="46011" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/ammiak_vodnyy_osch_0_9kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>621</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Аммиак водный ОСЧ 0,9кг</name>
<description>Аммиак водный ОСЧ 0,9кг</description>
</offer>
<offer id="46013" available="false">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaliya_nitrat_tekhnich_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Калия нитрат технич меш 25 кг</name>
<description>Калия нитрат технич меш 25 кг</description>
</offer>
<offer id="46014" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_gubchatye_1/plastina_poristaya_16_mm_1kh2_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>6372</price>
<currencyId>RUB</currencyId>
<categoryId>3307</categoryId>
<picture>http://himopttorg.ru/upload/iblock/733/21x8fcrmf0z52q7lsg2ixrcrnn1czjw3.jpeg</picture>
<name>Пластина пористая 16 мм 1х2 м</name>
<description>Пластина пористая 16 мм 1х2 м</description>
</offer>
<offer id="46016" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_65kh77_5_mm_0_29_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1254</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/59d/qqog3wvg84am48zo32y6a72i8un2jr48.jpg</picture>
<name>Рукав с нит опл 65х77,5 мм 0,29 МПа Кварт</name>
<description>Рукав с нит опл 65х77,5 мм 0,29 МПа Кварт</description>
</offer>
<offer id="46017" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_38_mm_0_5_mpa_mbs_siniy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>327</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/626/pla5nr0ufuellk5tbuaa8h8n934vsnhp.jpg</picture>
<name>Шланг нап всас ПВХ 38 мм 0,5 МПа МБС синий</name>
<description>Шланг нап всас ПВХ 38 мм 0,5 МПа МБС синий</description>
</offer>
<offer id="46018" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_100_mm_0_7_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>820</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/179/srq7jeox4tpot2q2qzhk1u2xw9giwbzo.png</picture>
<name>Шланг нап всас ПВХ 100 мм 0,7 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 100 мм 0,7 МПа морозостойкий Снегирь</description>
</offer>
<offer id="46021" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_38kh45_mm_0_6_mpa_900mv_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>433</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/569/241bv0bgnni28k4oeo6iw464il40qk9u.jpg</picture>
<name>Шланг нап всас ПВХ 38х45 мм 0,6 МПа 900МВ МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 38х45 мм 0,6 МПа 900МВ МПТ-Пластик</description>
</offer>
<offer id="46022" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50kh58_2_mm_0_6_mpa_900mv_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>648</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cfb/sm2dvf3cxj46hd0e26b1gmp3smecrk91.jpg</picture>
<name>Шланг нап всас ПВХ 50х58,2 мм 0,6 МПа 900МВ МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 50х58,2 мм 0,6 МПа 900МВ МПТ-Пластик</description>
</offer>
<offer id="46023" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_dorozhka_gryazesbornyy_1kh10mkh1_6_sm_sunster/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>23701</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/078/ev8ycb73j09yck1jmlwyw0slgakqdgvb.jpg</picture>
<name>Коврик-дорожка грязесборный 1х10мх1,6 см SUNSTER</name>
<description>Коврик-дорожка грязесборный 1х10мх1,6 см SUNSTER</description>
</offer>
<offer id="46024" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_100kh150kh1_6_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2000</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac1/c0yj3l9ldi6kbn9qod07ts4gqgtl6bic.jpeg</picture>
<name>Коврик грязесборный 100х150х1,6 см</name>
<description>Коврик грязесборный 100х150х1,6 см</description>
</offer>
<offer id="46027" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_ral7043_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>605</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав RAL7043 бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав RAL7043 бар 20 кг</description>
</offer>
<offer id="46028" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_150_3bknl65_0_0_3_5_4_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>185</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<name>Лента кон  150-3БКНЛ65-0-0   3,5-4 мм</name>
<description>Лента кон  150-3БКНЛ65-0-0   3,5-4 мм</description>
</offer>
<offer id="46029" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_nts_2139_matov_bar_16_kg_r_k_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>669</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/38d/do6mcum9qfo6kz7113qdbzqpyb22iads.jpg</picture>
<name>Лак НЦ-2139 матов бар  16 кг. Р.К. Ярославль</name>
<description>Лак НЦ-2139 матов бар  16 кг. Р.К. Ярославль</description>
</offer>
<offer id="46030" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/49c/3x08kgetthsz7kf0swkm2pli5b73gaw4.jpeg</picture>
<name>Рукав всасывающий Б  32 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  32 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="46031" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_zheltaya_ral_1023_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>453</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fe8/axsr909g3q2jtkoucjbudmizep77q03c.png</picture>
<name>Эмаль ПФС Стрела желтая  RAL 1023 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела желтая  RAL 1023 бар 45 кг Ярославль</description>
</offer>
<offer id="46032" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_belaya_ral_9010_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>421</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aaf/xbwh6lwjvkc5j16p8kg856qe6fcswabx.png</picture>
<name>Эмаль ПФС Стрела белая RAL 9010 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела белая RAL 9010 бар 45 кг Ярославль</description>
</offer>
<offer id="46036" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khs_436_zelenaya_kompl_s_otver_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>435</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/82d/71co5aqi2swvyuvq2vm6cvcyo01m4qgu.jpg</picture>
<name>Эмаль ХС-436 зеленая компл с отвер 20 кг</name>
<description>Эмаль ХС-436 зеленая компл с отвер 20 кг</description>
</offer>
<offer id="46037" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/vedro_otsinkovannoe_1_sort_12_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>382</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/16a/l4mrzgacz7jyieykajshf26ff84b81wp.jpg</picture>
<name>Ведро оцинкованное 1 сорт 12 л</name>
<description>Ведро оцинкованное 1 сорт 12 л</description>
</offer>
<offer id="46039" available="false">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_osch_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>481</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/456/fux3mi5rbtepqogxv8iri5lfpnqv1n11.jpg</picture>
<name>Изопропанол ОСЧ ст/бут 0,8 кг Экос-1</name>
<description>Изопропанол ОСЧ ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="46040" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/geptan_etalonnyy_st_but_0_7_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/19a/y1w9voqvpbxcbh64jura5hozesx5bwvx.jpg</picture>
<name>Гептан эталонный ст/бут 0,7 кг Экос-1</name>
<description>Гептан эталонный ст/бут 0,7 кг Экос-11</description>
</offer>
<offer id="46041" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_epoksidnaya_epostat_ral1023_po_metallu_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль эпоксидная Эпостат RAL1023 по металлу 20 кг</name>
<description>Эмаль эпоксидная Эпостат RAL1023 по металлу 20 кг</description>
</offer>
<offer id="46044" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_6_mm_2050kh3050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>25422</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4ff/wtgtrxwks3mrq6gh8z1jeqty9m1j2fp8.jpeg</picture>
<name>Оргстекло  6 мм 2050х3050 ACRYMA</name>
<description>Оргстекло  6 мм 2050х3050 ACRYMA</description>
</offer>
<offer id="46045" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_8_mm_2050kh3050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>28000</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0fd/fl583w6orglvbi2wjb4h9ji942oml3df.jpeg</picture>
<name>Оргстекло  8 мм 2050х3050 ACRYMA</name>
<description>Оргстекло  8 мм 2050х3050 ACRYMA</description>
</offer>
<offer id="46047" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_10_mm_spi_1_2kh3_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac5/mtz7jb7elt4liw2aeu4gko1ift50w7fp.gif</picture>
<name>Пластина МБС 10 мм СПИ 1,2х3 м</name>
<description>Пластина МБС 10 мм СПИ 1,2х3 м</description>
</offer>
<offer id="46048" available="true">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_2/rukav_napornyy_ii_9_mm_0_63_mpa_b_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>90.1</price>
<currencyId>RUB</currencyId>
<categoryId>243</categoryId>
<picture>http://himopttorg.ru/upload/iblock/50c/unbr8cb62qml2iek8002phq7zxl20f0m.jpeg</picture>
<name>Рукав напорный II- 9 мм 0,63 МПа (Б) СЗР</name>
<description>Рукав напорный II- 9 мм 0,63 МПа (Б) СЗР</description>
</offer>
<offer id="46049" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_1/rukav_napornyy_i_9_mm_0_63_mpa_atsetilen_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>54</price>
<currencyId>RUB</currencyId>
<categoryId>242</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a09/bz7o0sducx5epfqlcx5u3phfz9azuu8o.jpeg</picture>
<name>Рукав напорный I- 9 мм 0,63 МПа ацетилен КРТ</name>
<description>Рукав напорный I- 9 мм 0,63 МПа ацетилен КРТ </description>
</offer>
<offer id="46050" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_200_mm_4_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2868</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ae4/th3wq0i64fo7478oc3vvi0xi8s2anqgh.jpeg</picture>
<name>Рукав всасывающий В 200 мм  4 м гр 1 СЗР</name>
<description>Рукав всасывающий В 200 мм  4 м гр 1 СЗР</description>
</offer>
<offer id="46051" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_plita_10_mm_1000kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>9800</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<name>Полиамид ПА 6 (капролон) плита 10 мм 1000х1000 мм</name>
<description>Полиамид ПА 6 (капролон) плита 10 мм 1000х1000 мм</description>
</offer>
<offer id="46053" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/izo_oktan_etalonnyy_st_but_0_7_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1171</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3ec/pjkk70mgsi6wt8cftu2p44q0z4lu9jzr.jpeg</picture>
<name>Изо-октан эталонный ст/бут 0,7 кг Экос-1</name>
<description>Изо-октан эталонный ст/бут 0,7 кг Экос-1</description>
</offer>
<offer id="46054" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>365</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f50/zy1oq4dxld573o4yxx82ib1lr7g4j04z.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  25 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="46055" available="true">
<url>http://himopttorg.ru/catalog/kaltsiy_khloristyy_/kaltsiy_khloristyy_pishchevoy_p_mesh_25_kg_volgograd/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>60</price>
<currencyId>RUB</currencyId>
<categoryId>302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/540/94e0v9vgj2pj3n6cl9wine5bb4uk44b6.jpg</picture>
<name>Кальций хлористый пищевой п/меш 25 кг Волгоград</name>
<description>Кальций хлористый пищевой п/меш 25 кг Волгоград</description>
</offer>
<offer id="46056" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_20_32_9_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>14.9</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/03d/3o5adk8kenv0k7gyc40wzxmwibl8vfcc.jpeg</picture>
<name>Хомут червячный  20-32/9 W2</name>
<description>Хомут червячный  20-32/9 W2 </description>
</offer>
<offer id="46058" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_pozharnyy_50_mm_universal_1_0_mpa_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3000</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<name>Рукав пожарный 50 мм Универсал 1,0 МПа </name>
<description>Рукав пожарный 50 мм Универсал 1,0 МПа </description>
</offer>
<offer id="46060" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_50_mm_10_m_gr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>781</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c81/p3m3jj1pw4ckmecaarkf4ij2n0q36w91.jpeg</picture>
<name>Рукав всасывающий КЩ  50 мм 10 м гр 1</name>
<description>Рукав всасывающий КЩ  50 мм 10 м гр 1 </description>
</offer>
<offer id="46061" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_32_mm_0_5_mpa_mbs_siniy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>240</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a64/ey255dlqkzu806t6luiqem90w0yla5sn.jpg</picture>
<name>Шланг нап всас ПВХ 32 мм 0,5 МПа МБС синий</name>
<description>Шланг нап всас ПВХ 32 мм 0,5 МПа МБС синий</description>
</offer>
<offer id="46062" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_75_mm_0_5_mpa_mbs_siniy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>903</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/421/fsa25rcpzcz2topwwvln7y8c62lgn70g.jpg</picture>
<name>Шланг нап всас ПВХ 75 мм 0,5 МПа МБС синий</name>
<description>Шланг нап всас ПВХ 75 мм 0,5 МПа МБС синий</description>
</offer>
<offer id="46069" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_10_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1356</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c58/r08a3anj4u18akldizoc02zn10s7tqi3.jpeg</picture>
<name>Рукав всасывающий Б 100 мм  10 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б 100 мм  10 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="46070" available="true">
<url>http://himopttorg.ru/catalog/solvent/solvent_neft_nefras_a_130_150_pl_kan_10_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1905</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<name>Сольвент нефт (нефрас А 130/150) пл/кан 10 л Х-И</name>
<description>Сольвент нефт (нефрас А 130/150) пл/кан 10 л Х-И</description>
</offer>
<offer id="46072" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_siniy_zh_b_0_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>284</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/91a/z56h68q142zpv1hgui6qvceplwm26nae.jpeg</picture>
<name>Грунт-эмаль по ржав синий ж/б 0,9 кг</name>
<description>Грунт-эмаль по ржав синий ж/б 0,9 кг</description>
</offer>
<offer id="46073" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_zheltaya_zh_b_0_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>352</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9ff/kk1hbokzhgten34pz91as04v0htqwca8.jpeg</picture>
<name>Грунт-эмаль по ржав желтая ж/б 0,9 кг</name>
<description>Грунт-эмаль по ржав желтая ж/б 0,9 кг</description>
</offer>
<offer id="46074" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d65/bue6x2d0rafol90ctt5fqm3dezz3it66.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   4 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б 100 мм   4 м гр 1 Химтекс</description>
</offer>
<offer id="46075" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>496</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/539/wd1q6zw56iu1ukn71201st7jeuhyuqr6.jpeg</picture>
<name>Рукав всасывающий Б  38 мм 10 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  38 мм 10 м гр 1 Химтекс</description>
</offer>
<offer id="46076" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>587</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cbc/e3kjf4ka014u9c689j1u2bzzm2j3m998.jpg</picture>
<name>Рукав всасывающий В  50 мм  4 м гр 1 Химтекс</name>
<description>Рукав всасывающий В  50 мм  4 м гр 1 Химтекс</description>
</offer>
<offer id="46082" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/natriy_gidrookis_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>312</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Натрий гидроокись ЧДА</name>
<description>Натрий гидроокись ЧДА</description>
</offer>
<offer id="46087" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_100_mm_0_5_mpa_mbs_siniy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/19f/upx8l4bfeh549rl772her1bbkvv3pxbo.jpg</picture>
<name>Шланг нап всас ПВХ 100 мм 0,5 МПа МБС синий</name>
<description>Шланг нап всас ПВХ 100 мм 0,5 МПа МБС синий</description>
</offer>
<offer id="46088" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_bicoat_epoxy_401_ral7040_s_otverd_bi_er_01/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>606</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Bicoat Epoxy 401 RAL7040 с отверд Bi-er 01</name>
<description>Грунт-эмаль Bicoat Epoxy 401 RAL7040 с отверд Bi-er 01</description>
</offer>
<offer id="46093" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/dimetilformamid_khch_st_but_1_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>658</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/967/gtltxfxz3jg7t4ovor0a329am28p1xf1.jpg</picture>
<name>Диметилформамид ХЧ ст/бут 1 кг Экос-1</name>
<description>Диметилформамид ХЧ ст/бут 1 кг Экос-1</description>
</offer>
<offer id="46095" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_evopol_12_ral7004_ved_22_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Эвопол-12 RAL7004 вед 22 кг</name>
<description>Грунт-эмаль Эвопол-12 RAL7004 вед 22 кг</description>
</offer>
<offer id="46101" available="true">
<url>http://himopttorg.ru/catalog/aminat/aminat_dm_56_pl_kan_20_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>192</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<name>Аминат ДМ-56 пл/кан 20 кг Экос-1</name>
<description>Аминат ДМ-56 пл/кан 20 кг Экос-1</description>
</offer>
<offer id="46103" available="true">
<url>http://himopttorg.ru/catalog/aminat/aminat_dm_50_pl_kan_20_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>262</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<picture>http://himopttorg.ru/upload/iblock/669/c7ij2igbjaz0r7mae8i2gjm9wpngaevl.jpg</picture>
<name>Аминат ДМ-50 пл/кан 20 кг Экос-1</name>
<description>Аминат ДМ-50 пл/кан 20 кг Экос-1</description>
</offer>
<offer id="46106" available="false">
<url>http://himopttorg.ru/catalog/rastvoritel_r_4/rastvoritel_r_4_pl_kan_10_l_gost_tambov/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2200</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<name>Растворитель Р-4 пл/кан 10 л ГОСТ Тамбов</name>
<description>Растворитель Р-4 пл/кан 10 л ГОСТ Тамбов</description>
</offer>
<offer id="46107" available="false">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_zashchitnaya_bar_45_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>612</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b2c/dltkl6d6v4kmic858cztqxjc4ds6eiee.png</picture>
<name>Эмаль МЛ-12 защитная бар 45 кг LIDA</name>
<description>Эмаль МЛ-12 защитная бар 45 кг LIDA</description>
</offer>
<offer id="46108" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_belaya_bar_45_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>688</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9f1/8vht5l97jomod17grs79qbg8g0res04z.png</picture>
<name>Эмаль МЛ-12 белая бар 45 кг LIDA</name>
<description>Эмаль МЛ-12 белая бар 45 кг LIDA</description>
</offer>
<offer id="46109" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_50kh80_mm_0_8_mpa_par_2_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1339</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1db/ju780r1pgnoahm0zcwnlsbsq2eyedg3q.gif</picture>
<name>Рукав паропроводный 50х80 мм 0,8 МПа пар-2 Химтекс</name>
<description>Рукав паропроводный 50х80 мм 0,8 МПа пар-2 Химтекс</description>
</offer>
<offer id="46110" available="false">
<url>http://himopttorg.ru/catalog/izopropilovyy_spirt/izopropanol_osch_13_5_dlya_mikroelektroniki_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>426</price>
<currencyId>RUB</currencyId>
<categoryId>3352</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d20/dammc3nz2vuauds9oo15jrp0gmofq2a5.jpg</picture>
<name>Изопропанол ОСЧ 13-5 для микроэлектроники ст/бут 0,8 кг Экос-1</name>
<description>Изопропанол ОСЧ 13-5 для микроэлектроники ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="46111" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_krasnaya_ral_3000_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>399</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/40e/srkneqm92s971d040v2glhcu73he6p0q.png</picture>
<name>Эмаль ПФС Стрела красная RAL 3000 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела красная RAL 3000 бар 45 кг Ярославль</description>
</offer>
<offer id="46112" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_ral6001_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>487</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0c0/tc6r6gh9d5g499zi59xrc80rtgxvp2uf.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав RAL6001 бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав RAL6001 бар 20 кг</description>
</offer>
<offer id="46113" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_dlya_stekla_khelp_500_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>84.6</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/29b/w242abws0f9pxu76ebjnet2zumhv5t12.jpg</picture>
<name>Моющее средство для стекла ХЭЛП 500 мл</name>
<description>Моющее средство для стекла ХЭЛП 500 мл</description>
</offer>
<offer id="46114" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/meshki_d_m_30l_romashka_rul_30_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>63.6</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4e2/gs5fvv4k6fbii367ipj71741qrl75rzx.jpg</picture>
<name>Мешки д/м 30л РОМАШКА (рул 30 шт)</name>
<description>Мешки д/м 30л РОМАШКА (рул 30 шт)</description>
</offer>
<offer id="46117" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_75_mm_4_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1107</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3d7/k8rve83bgswli5o2f2lqkdzp19nae00u.jpeg</picture>
<name>Рукав всасывающий КЩ  75 мм 4 м гр 1 СЗР</name>
<description>Рукав всасывающий КЩ  75 мм 4 м гр 1 СЗР </description>
</offer>
<offer id="46118" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_75_mm_6_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/86c/arcsdcy3dbt0nwugl8kw76c993rcvpfs.jpeg</picture>
<name>Рукав всасывающий КЩ  75 мм 6 м гр 1 СЗР</name>
<description>Рукав всасывающий КЩ  75 мм 6 м гр 1 СЗР </description>
</offer>
<offer id="46119" available="true">
<url>http://himopttorg.ru/catalog/soda_kausticheskaya/soda_kausticheskaya_natr_edkiy_gran_p_mesh_25_kg_volgograd/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>118</price>
<currencyId>RUB</currencyId>
<categoryId>3113</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f0f/dma5xatypc30s3hss7ksn7ksvvuvd9fy.jpg</picture>
<name>Сода каустическая/натр едкий гран п/меш 25 кг Волгоград</name>
<description>Сода каустическая/натр едкий гран п/меш 25 кг Волгоград</description>
</offer>
<offer id="46122" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaliy_khromovokislyy_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5592</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Калий хромовокислый ХЧ</name>
<description>Калий хромовокислый ХЧ</description>
</offer>
<offer id="46123" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaliy_khromovokislyy_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3513</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Калий хромовокислый ЧДА</name>
<description>Калий хромовокислый ЧДА</description>
</offer>
<offer id="46129" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_sanitarnyy_sanoff_gel_750_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>82.1</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство санитарный Sanoff гель 750 мл</name>
<description>Моющее средство санитарный Sanoff гель 750 мл</description>
</offer>
<offer id="46132" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1462</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6c5/90mjcnv4arqa3af5zpee86lt3mrn1n6s.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б 100 мм   4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="46134" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_5_mm_1200kh5000_s_2_kordom/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1512</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Пластина ТМКЩ  5 мм 1200х5000 с 2 кордом</name>
<description>Пластина ТМКЩ  5 мм 1200х5000 с 2 кордом</description>
</offer>
<offer id="46135" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_8_mm_1200kh5000_s_1_kordom/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2162</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Пластина ТМКЩ  8 мм 1200х5000 с 1 кордом</name>
<description>Пластина ТМКЩ  8 мм 1200х5000 с 1 кордом</description>
</offer>
<offer id="46137" available="true">
<url>http://himopttorg.ru/catalog/manzhety/koltso_033_038_30/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>17</price>
<currencyId>RUB</currencyId>
<categoryId>327</categoryId>
<name>Кольцо 033-038-30</name>
<description>Кольцо 033-038-30</description>
</offer>
<offer id="46142" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_kh_b_6_ti_nitka_psh/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>82.2</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<name>Перчатки х/б 6-ти нитка ПШ</name>
<description>Перчатки х/б 6-ти нитка ПШ</description>
</offer>
<offer id="46145" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_32kh47_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>399</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f03/dnlrn63lsosh67oamxet3tcc5jvhxyr1.gif</picture>
<name>Рукав напорный ВГ 32х47 мм 1,0 МПа Химтекс</name>
<description>Рукав напорный ВГ 32х47 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="46146" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_sh_1/rukav_napornyy_sh_25kh41_mm_1_6_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>363</price>
<currencyId>RUB</currencyId>
<categoryId>3304</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fe2/8mvn3y9nt93qv6cngsjvq644gu406zgm.gif</picture>
<name>Рукав напорный Ш 25х41 мм 1,6 МПа Химтекс</name>
<description>Рукав напорный Ш 25х41 мм 1,6 МПа Химтекс</description>
</offer>
<offer id="46147" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_25kh40_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>316</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5ff/2t1shnf32s3n7eav7arapia36jyf2cht.gif</picture>
<name>Рукав напорный ВГ 25х40 мм 1,0 МПа Химтекс</name>
<description>Рукав напорный ВГ 25х40 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="46148" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_evopol_12_ral7038_ved_22_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>725</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Эвопол-12 RAL7038 вед 22 кг</name>
<description>Грунт-эмаль Эвопол-12 RAL7038 вед 22 кг</description>
</offer>
<offer id="46151" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_38kh47_5_mm_0_63_mpa_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>288</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/800/g5lwuzs73sugdm8ep2v9grnmtghay50m.jpg</picture>
<name>Рукав с нит опл 38х47,5 мм 0,63 МПа СЗРТ</name>
<description>Рукав с нит опл 38х47,5 мм 0,63 МПа СЗРТ</description>
</offer>
<offer id="46154" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_18kh26_mm_0_63_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>152</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3e4/yprwh033ip4frf0af9m3fp70ndxln6u8.jpeg</picture>
<name>Рукав с нит опл 18х26 мм 0,63 МПа СЗР</name>
<description>Рукав с нит опл 18х26 мм 0,63 МПа СЗР</description>
</offer>
<offer id="46158" available="false">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_pomol_3_mesh_30_kg_belarus/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>14.5</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль помол № 3 меш 30 кг Беларусь</name>
<description>Соль помол № 3 меш 30 кг Беларусь</description>
</offer>
<offer id="46160" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_12_mm_1500kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>24150</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/093/43q3iaklt5zmudc0b3ca88hk39qj6dmz.jpeg</picture>
<name>Оргстекло 12 мм 1500х2050 ACRYMA</name>
<description>Оргстекло 12 мм 1500х2050 ACRYMA</description>
</offer>
<offer id="46161" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/etilenglikol_khch_st_but_1_1_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>439</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Этиленгликоль ХЧ ст/бут 1,1 кг Экос-1</name>
<description>Этиленгликоль ХЧ ст/бут 1,1 кг Экос-1</description>
</offer>
<offer id="46163" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_125_mm_6_m_gr_1_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2266</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d67/qb4npmrbaul1r7t15o6vnooqlbl913mu.jpeg</picture>
<name>Рукав всасывающий В 125 мм  6 м гр 1 Кварт</name>
<description>Рукав всасывающий В 125 мм  6 м гр 1 Квар</description>
</offer>
<offer id="46164" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_14kh23_mm_1_6_mpa_vpt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3a0/3eynebgva3mftmxxq0s4af6hh0h1758d.jpeg</picture>
<name>Рукав с нит опл 14х23 мм 1,6 МПа ВПТ</name>
<description>Рукав с нит опл 14х23 мм 1,6 МПа ВПТ</description>
</offer>
<offer id="46178" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_8_mm_1200kh5000_s_1_kordom/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2487</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/98a/x37pvct7lu67hgpv8jl4f1t0pzm6s88l.gif</picture>
<name>Пластина МБС  8 мм 1200х5000 с 1 кордом</name>
<description>Пластина МБС  8 мм 1200х5000 с 1 кордом</description>
</offer>
<offer id="46179" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_dlya_dorozhnoy_tekhniki_tmkshch_s_1000kh250kh40_mm_stalnoy_tros_8_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3400</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/67c/fg0toeybdue9ldfvoyaaubu193eiphnd.jpg</picture>
<name>Пластина для дорожной техники ТМКЩ-С 1000х250х40 мм стальной трос 8 мм</name>
<description>Пластина для дорожной техники ТМКЩ-С 1000х250х40 мм стальной трос 8 мм</description>
</offer>
<offer id="46181" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_sv_ser_ral_7040_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>366</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e29/qzxi1gcnpwusmxewsporz8cvp7cmh122.png</picture>
<name>Эмаль ПФС Стрела св сер RAL 7040 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела св сер RAL 7040 бар 45 кг Ярославль</description>
</offer>
<offer id="46183" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khv_124_zashchitnaya_bar_40_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>415</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль ХВ-124 защитная бар 40 кг</name>
<description>Эмаль ХВ-124 защитная бар 40 кг</description>
</offer>
<offer id="46184" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/bumaga_indikatornaya_univ_ph_0_12/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>525</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Бумага индикаторная унив pH 0-12</name>
<description>Бумага индикаторная унив pH 0-12</description>
</offer>
<offer id="46185" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/standart_titr_natriy_gidrookis_0_1n/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>868</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Стандарт-титр натрий гидроокись 0,1Н</name>
<description>Стандарт-титр натрий гидроокись 0,1Н</description>
</offer>
<offer id="46186" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/trilon_b/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1171</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Трилон Б</name>
<description>Трилон Б</description>
</offer>
<offer id="46187" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/natriy_azotnokislyy_tekhn/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>197</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Натрий азотнокислый техн</name>
<description>Натрий азотнокислый техн</description>
</offer>
<offer id="46188" available="true">
<url>http://himopttorg.ru/catalog/aerozolnye_kraski/emal_aeroz_akril_belyy_glyants_ral_9003_520_ml_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>315</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<name>Эмаль аэроз акрил белый глянц RAL 9003 520 мл </name>
<description>Эмаль аэроз акрил белый глянц RAL 9003 520 мл</description>
</offer>
<offer id="46190" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_rebristyy_90kh150_sm_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1107</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef5/kg7zwoo0xhyzpsur9cx988ga0agp6sao.jpeg</picture>
<name>Коврик влаговпитывающий ребристый 90х150 см серый</name>
<description>Коврик влаговпитывающий ребристый 90х150 см серый</description>
</offer>
<offer id="46192" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_rezinovyy_antivibratsionnyy_62kh55_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>590</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/738/dw5lqk3llhrjmwcs0a0gqogzyqn3l8nq.jpg</picture>
<name>Коврик резиновый антивибрационный 62х55 см</name>
<description>Коврик резиновый антивибрационный 62х55 см</description>
</offer>
<offer id="46194" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_65kh79_mm_0_63_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>721</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/759/8ut1wzq11kjl9o0ldgo0gah0zl563n0e.gif</picture>
<name>Рукав напорный В  65х79 мм 0,63 МПа Химтекс</name>
<description>Рукав напорный В  65х79 мм 0,63 МПа Химтекс</description>
</offer>
<offer id="46195" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_16kh36_mm_0_8_mpa_par_2_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>691</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/23f/nuvwcij0gpxdkseu0fx21kvdkp3hifn4.gif</picture>
<name>Рукав паропроводный 16х36 мм 0,8 МПа пар-2 Химтекс</name>
<description>Рукав паропроводный 16х36 мм 0,8 МПа пар-2 Химтекс</description>
</offer>
<offer id="46196" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_4_m_gr_2_r_10/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>906</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1f1/9pz34oidpaq1sdelhauh9xgdfx0w4io8.jpeg</picture>
<name>Рукав всасывающий В  75 мм   4 м гр 2 р-10</name>
<description>Рукав всасывающий В  75 мм   4 м гр 2 р-10</description>
</offer>
<offer id="46197" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_6_m_gr_2_r_3_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1065</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/23d/so0ftt8fj93dkacrght2dadtcfgjiels.jpeg</picture>
<name>Рукав всасывающий Б 100 мм   6 м гр 2 р-3 СЗРТ</name>
<description>Рукав всасывающий Б 100 мм   6 м гр 2 р-3 СЗРТ</description>
</offer>
<offer id="46202" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_belaya_zh_b_0_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>289</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b6e/gnr8dtho4pen9d6unehv19bnumeex4xg.jpeg</picture>
<name>Грунт-эмаль по ржав белая ж/б 0,9 кг</name>
<description>Грунт-эмаль по ржав белая ж/б 0,9 кг</description>
</offer>
<offer id="46204" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khv_124_seraya_bar_50_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>450</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль ХВ-124 серая бар 50 кг</name>
<description>Эмаль ХВ-124 серая бар 50 кг</description>
</offer>
<offer id="46205" available="false">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_pomol_1_mesh_30_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>13.5</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль помол № 1 меш 30 кг </name>
<description>Соль помол № 1 меш 30 кг </description>
</offer>
<offer id="46206" available="false">
<url>http://himopttorg.ru/catalog/soda_kaltsinirovannaya_1/soda_kaltsinirovannaya_p_mesh_50_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>37</price>
<currencyId>RUB</currencyId>
<categoryId>3112</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c7b/o407au8fe0fagrlhis8qaowgi1fx3gz1.jpeg</picture>
<name>Сода кальцинированная п/меш 50 кг</name>
<description>Сода кальцинированная п/меш 50 кг</description>
</offer>
<offer id="46210" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_150kh162_4_mm_0_3_mpa_700n_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2434</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/880/66w7uor4b6u5blmwy0tqhx53f6se8872.jpeg</picture>
<name>Шланг нап всас ПВХ 150х162,4 мм 0,3 МПа 700N МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 150х162,4 мм 0,3 МПа 700N МПТ-Пластик</description>
</offer>
<offer id="46211" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovry_dielektricheskie_gruppa_1_1_2kh8_m_tolshch_6mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>376</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3d6/0fn07csan2cav8i5vuubmww5d75ui91q.jpeg</picture>
<name>Ковры диэлектрические группа 1 1,2х8 м толщ 6мм</name>
<description>Ковры диэлектрические группа 1</description>
</offer>
<offer id="46212" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_4_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>656</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c8f/0zwp73yj20lrd0wyop2p9pkthftyyonj.jpeg</picture>
<name>Шнур резиновый МБС  4 мм</name>
<description>Шнур резиновый МБС  4 мм </description>
</offer>
<offer id="46215" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_75_mm_10_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/842/3ph93hg5ovinz4z58lznsy1g3j7lzeuw.jpeg</picture>
<name>Рукав всасывающий КЩ  75 мм 10 м гр 1 СЗР</name>
<description>Рукав всасывающий КЩ  75 мм 10 м гр 1 СЗР</description>
</offer>
<offer id="46217" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_76_mm_pvc_rubex_clean/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>783</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5c6/4v6d6opo5sw55ul74c60g9pyhcaukd80.jpeg</picture>
<name>Шланг нап всас ПВХ 76 мм PVC RubEX CLEAN</name>
<description>Шланг нап всас ПВХ 76 мм PVC RubEX CLEAN</description>
</offer>
<offer id="46218" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_100_mm_pvc_rubex_clean/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1165</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c78/mbhjqyn9ra6taueuhz8nqmqjfxjk3akd.jpeg</picture>
<name>Шланг нап всас ПВХ 100 мм PVC RubEX CLEAN</name>
<description>Шланг нап всас ПВХ 100 мм PVC RubEX CLEAN</description>
</offer>
<offer id="46219" available="true">
<url>http://himopttorg.ru/catalog/shlangi_podkachki_koles/shlang_podkachki_koles_s_bystrosemom_18_m_6_3_atm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1025</price>
<currencyId>RUB</currencyId>
<categoryId>3197</categoryId>
<picture>http://himopttorg.ru/upload/iblock/26b/f1jjdbxzy29kyhy711jr3gmw2selm7sc.jpg</picture>
<name>Шланг подкачки колес с быстросъемом 18 м 6,3 атм</name>
<description>Шланг подкачки колес с быстросъемом 18 м 6,3 атм</description>
</offer>
<offer id="46220" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/uskoritel_sushki_021_ban_200_gr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>245</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ba8/a3442hob2h0bgit6nkauweoa9ww86ph0.png</picture>
<name>Ускоритель сушки 021 бан 200 гр</name>
<description>Ускоритель сушки 021 бан 200 гр</description>
</offer>
<offer id="46221" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_rebristyy_100kh200_sm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1615</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/776/8edw8rfdmwgpca1592kze9e6mwzmkgwk.jpeg</picture>
<name>Коврик влаговпитывающий ребристый 100х200 см коричневый</name>
<description>Коврик влаговпитывающий ребристый 100х200 см коричневый</description>
</offer>
<offer id="46227" available="true">
<url>http://himopttorg.ru/catalog/rukava_dyuritovye_tu_0056016_87/rukav_40u_44_7/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1000</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c51/sxpbyteq46l9guvu5uvp390x8hpi5gs1.jpg</picture>
<name>Рукав 40У-44-7</name>
<description>Рукав 40У-44-7</description>
</offer>
<offer id="46228" available="false">
<url>http://himopttorg.ru/catalog/ftoroplast/lenta_fum_10m_kh_12_mm_kh_0_1_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>29.4</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6b0/ww8fhhex3zctb3aiy8nzqyu9743hsfkj.jpeg</picture>
<name>Лента ФУМ 10м х 12 мм х 0,1 мм </name>
<description>Лента ФУМ 10м х 12 мм х 0,1 мм </description>
</offer>
<offer id="46229" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_15_mm_1525kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>26800</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b46/dcbfydffkxayw04c1ke3297ev59mxxiq.jpeg</picture>
<name>Оргстекло 15 мм 1525х2050 ACRYMA</name>
<description>Оргстекло 15 мм 1525х2050 ACRYMA</description>
</offer>
<offer id="46230" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_18_mm_1525kh2050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>39800</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/153/s9mthoe8itn588702f4v9liyfwydhw07.jpeg</picture>
<name>Оргстекло 18 мм 1525х2050 ACRYMA</name>
<description>Оргстекло 18 мм 1525х2050 ACRYMA</description>
</offer>
<offer id="46231" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_belaya_zh_b_6_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1685</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль по ржав белая ж/б 6 кг</name>
<description>Грунт-эмаль по ржав белая ж/б 6 кг</description>
</offer>
<offer id="46232" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_krasnaya_zh_b_0_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>283</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль по ржав красная ж/б 0,9 кг</name>
<description>Грунт-эмаль по ржав красная ж/б 0,9 кг</description>
</offer>
<offer id="46233" available="true">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_lizunets_briket_4_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>105</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f1c/ayasrez1dxt556ad8u50r89f3m4f9rhb.jpg</picture>
<name>Соль Лизунец брикет 4 кг</name>
<description>Соль Лизунец брикет 4 кг</description>
</offer>
<offer id="46245" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_6_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1005</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f4b/yte37el5osyo547onz17btdw2vebxih9.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  6 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  75 мм  6 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="46246" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_20_mm_0_4_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>89</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9dc/sg5gk53od17b0idgguej60b12xxqidw0.jpeg</picture>
<name>Рукав напорный В  20 мм 0,4 МПа СЗР</name>
<description>Рукав напорный В  20 мм 0,4 МПа СЗР</description>
</offer>
<offer id="46247" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_18_mm_0_4_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>85.5</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6b7/6pd6t86lsxfw2s1sz6c5gnj22wz0hiie.gif</picture>
<name>Рукав напорный В  18 мм 0,4 МПа СЗР</name>
<description>Рукав напорный В  18 мм 0,4 МПа СЗР</description>
</offer>
<offer id="46248" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_25_mm_0_4_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>123</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/101/wldf8bx34m0y33rk8bv0uhg6hbri8omu.jpeg</picture>
<name>Рукав напорный В  25 мм 0,4 МПа СЗР</name>
<description>Рукав напорный В  25 мм 0,4 МПа СЗР</description>
</offer>
<offer id="46252" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_pemolyuks_480g_limon/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>105</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство пемолюкс 480г лимон</name>
<description>Моющее средство пемолюкс 480г лимон</description>
</offer>
<offer id="46255" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_38kh44_mm_0_5_mpa_800l_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>261</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/54f/hmwu4hmv0kton00gcs0vmsfcz5jy10ol.jpeg</picture>
<name>Шланг нап всас ПВХ 38х44 мм 0,5 МПа 800L  МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 38х44 мм 0,5 МПа 800L  МПТ-Пластик</description>
</offer>
<offer id="46258" available="false">
<url>http://himopttorg.ru/catalog/polotno_kh_proshivnoe_1/polotno_kh_proshivnoe_1_5_m_kh_35_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3508</price>
<currencyId>RUB</currencyId>
<categoryId>3319</categoryId>
<name>Полотно х-прошивное (1,5 м х 35 м)</name>
<description>Полотно х-прошивное (1,5 м х 35 м)</description>
</offer>
<offer id="46261" available="false">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/voda_distilirovannaya_5_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>143</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Вода дистилированная 5 л</name>
<description>Вода дистилированная 5 л</description>
</offer>
<offer id="46269" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_100_mm_6_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1666</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f8e/iwsd293ovz9xlvf5paxtgf6lqd6v3ovw.jpeg</picture>
<name>Рукав всасывающий КЩ 100 мм 6 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий КЩ 100 мм 6 м гр 2 р-5 СЗР</description>
</offer>
<offer id="46270" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_10_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>855</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/659/bl7j37x9im5sv89tr0t5dtpt9g3dbi1i.jpeg</picture>
<name>Рукав всасывающий В  75 мм  10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий В  75 мм  10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="46271" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_4_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1170</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c13/ag3s0du04qj3ugjiir3m12dgi9u0e35f.jpeg</picture>
<name>Рукав всасывающий В 100 мм  4 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий В 100 мм  4 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="46272" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_100_mm_agro_elastik_evo/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2092</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/185/aq0rzq4ub7pihea8ol8u7dxfwnd6eleu.jpg</picture>
<name>Шланг нап всас ПВХ 100 мм  Агро Эластик Эво</name>
<description>Шланг нап всас ПВХ 100 мм  Агро Эластик Эво</description>
</offer>
<offer id="46273" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_76_mm_agro_elastik_evo/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1317</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/66b/ngos11mmpl9am95d6yh6y5koe6krq0tq.jpg</picture>
<name>Шланг нап всас ПВХ 76 мм  Агро Эластик Эво</name>
<description>Шланг нап всас ПВХ 76 мм  Агро Эластик Эво</description>
</offer>
<offer id="46274" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/n_geksan_ch_st_but_0_65_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>624</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Н-Гексан Ч ст/бут 0,65 кг Экос-1</name>
<description>Н-Гексан Ч ст/бут 0,65 кг Экос-1</description>
</offer>
<offer id="46275" available="false">
<url>http://himopttorg.ru/catalog/aminat/aminat_a_pl_kan_22_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>358</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<picture>http://himopttorg.ru/upload/iblock/29e/43hilqzvlek3i9itv5e0o198qk51j7qg.jpg</picture>
<name>Аминат А пл/кан 22 кг Экос-1</name>
<description>Аминат А пл/кан 22 кг Экос-1</description>
</offer>
<offer id="46276" available="false">
<url>http://himopttorg.ru/catalog/aminat/aminat_bp_pl_kan_20_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>449</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4a0/stdzg5uzlswtmkjcegyd6mydmbza4kae.jpg</picture>
<name>Аминат БП пл/кан 20 кг Экос-1</name>
<description>Аминат БП пл/кан 20 кг Экос-1</description>
</offer>
<offer id="46277" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/asboshnur_35_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>605</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/67d/fj7v1w40tcnbsibbjw030l56c560oxd7.jpg</picture>
<name>Асбошнур 35 мм ВАТИ</name>
<description>Асбошнур 35 мм ВАТИ</description>
</offer>
<offer id="46278" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/venik_sorgo_3_kh_luch_krasn_plenka/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>197</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/899/9ahqrc80zwdg8f1sb01a4kuz6p6ar03p.jpg</picture>
<name>Веник сорго 3-х луч красн пленка</name>
<description>Веник сорго 3-х луч красн пленка</description>
</offer>
<offer id="46279" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_2/rukav_napornyy_ii_6_3_mm_0_63_mpa_b_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>55</price>
<currencyId>RUB</currencyId>
<categoryId>243</categoryId>
<picture>http://himopttorg.ru/upload/iblock/07e/iq07ab0jkxcm2hdvc61rrip56xw87ghl.jpeg</picture>
<name>Рукав напорный II- 6,3 мм 0,63 МПа (Б) СЗР</name>
<description>Рукав напорный II- 6,3 мм 0,63 МПа (Б) СЗР</description>
</offer>
<offer id="46280" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_140kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<name>Полиамид ПА 6 (капролон) стерж 140х1000 мм</name>
<description>Полиамид ПА 6 (капролон) стерж 140 мм </description>
</offer>
<offer id="46283" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/bamper_rezinovyy_hdsyst_500u_500_250_100_mezhosevoe_320_340_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>6025</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Бампер резиновый HDSYST-500У (500*250*100) межосевое 320-340 мм</name>
<description>Бампер резиновый HDSYST-500У (500*250*100) межосевое 320-340 мм</description>
</offer>
<offer id="46285" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/kislota_solyanaya_osch_20_4_st_but_1_2_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>330</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Кислота соляная ОСЧ 20-4 ст/бут 1,2 кг Экос-1</name>
<description>Кислота соляная ОСЧ 20-4 ст/бут 1,2 кг Экос-1</description>
</offer>
<offer id="46286" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/o_ksilol_ch_st_but_0_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>408</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/42c/boacihbxm7bjybjymcmjjrgz9yivvt7b.jpg</picture>
<name>О-ксилол Ч ст/бут 0,9 кг Экос-1</name>
<description>О-ксилол Ч ст/бут 0,9 кг Экос-1</description>
</offer>
<offer id="46287" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_30_mm_720kh720/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>147</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a11/ly9478nv38vvrol1rdifi6v9gl27xzir.jpeg</picture>
<name>Пластина ТМКЩ 30 мм 720х720</name>
<description>Пластина ТМКЩ 30 мм 720х720 </description>
</offer>
<offer id="46288" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_nts_2139_matov_bar_45_kg_r_k_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>659</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/26e/ez26k9w2d802udynfryghabkygj33nhl.jpeg</picture>
<name>Лак НЦ-2139 матов бар 45 кг. Р.К. Ярославль</name>
<description>Лак НЦ-2139 матов бар 45 кг. Р.К. Ярославль</description>
</offer>
<offer id="46289" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_nts_2144_glyants_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>560</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0f8/wux2kqx9t11azasaaiii1xjsctk4808k.jpg</picture>
<name>Лак НЦ-2144 глянц бар 45 кг Ярославль</name>
<description>Лак НЦ-2144 глянц бар 45 кг Ярославль</description>
</offer>
<offer id="46291" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/salfetka_mikrofibra_70kh80/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>209</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/738/vumfyk8dut46mqu6hk74d1qotce5z7p8.jpg</picture>
<name>Салфетка микрофибра 70х80</name>
<description>Салфетка микрофибра 70х80</description>
</offer>
<offer id="46298" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/razbavitel_dlya_akrilovykh_lkm_kan_5_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3500</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Разбавитель для акриловых ЛКМ кан 5 л</name>
<description>Разбавитель для акриловых ЛКМ кан 5 л</description>
</offer>
<offer id="46299" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/kist_raklya_30kh100_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>236</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Кисть Ракля 30х100 мм</name>
<description>Кисть Ракля 30х100 мм </description>
</offer>
<offer id="46300" available="true">
<url>http://himopttorg.ru/catalog/aerozolnye_kraski/emal_aeroz_akril_chernyy_glyants_ral_9005_520_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>294</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<name>Эмаль аэроз акрил черный глянц RAL 9005 520 мл</name>
<description>Эмаль аэроз акрил черный глянц RAL 9005 520 мл</description>
</offer>
<offer id="46303" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_ak_511_belaya_zh_ved_33_kg_sprinter/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>320</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7ac/duae1xd0s6krrt83dg5iwlccog1z5nfe.png</picture>
<name>Эмаль АК-511 белая ж/вед 33 кг Спринтер</name>
<description>Эмаль АК-511 белая ж/вед 33 кг Спринтер</description>
</offer>
<offer id="46304" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_ak_511_g_zhyeltaya_zh_ved_33_kg_sprinter/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>320</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3fd/3tlqrhreb2rlovzt07aljuvlapf65rlh.png</picture>
<name>Эмаль АК-511-Г жёлтая ж/вед 33 кг Спринтер</name>
<description>Эмаль АК-511-Г жёлтая ж/вед 33 кг Спринтер</description>
</offer>
<offer id="46305" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_ak_511_g_chernaya_zh_ved_33_kg_sprinter/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>320</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/757/heu9tzcmwfqx46ra20h3jwkhz2vortlc.png</picture>
<name>Эмаль АК-511-Г черная ж/вед 33 кг Спринтер</name>
<description>Эмаль АК-511-Г черная ж/вед 33 кг Спринтер</description>
</offer>
<offer id="46307" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/o_ksilol_chda_st_but_0_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>444</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>О-ксилол ЧДА ст/бут 0,9 кг Экос-1</name>
<description>О-ксилол ЧДА ст/бут 0,9 кг Экос-1</description>
</offer>
<offer id="46310" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/atsetonitril_khch_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>963</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eb6/fz93sn1rze1yt5i507vmne3jnkwiaeop.jpeg</picture>
<name>Ацетонитрил ХЧ ст/бут 0,8 кг Экос-1</name>
<description>Ацетонитрил ХЧ ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="46311" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_12/rastvoritel_r_12_0_9_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>360</price>
<currencyId>RUB</currencyId>
<categoryId>3341</categoryId>
<picture>http://himopttorg.ru/upload/iblock/521/5xposx8ii6ssvkx71arf42k0fpux88fe.jpg</picture>
<name>Растворитель Р-12 0,9 л</name>
<description>Растворитель Р-12 0,9 л </description>
</offer>
<offer id="46312" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_50kh61_5_mm_1_6_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>743</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a1b/b5ac1k1896edonp02aopf8t7bc6raqgj.jpeg</picture>
<name>Рукав с нит опл 50х61,5 мм 1,6 МПа КРТ</name>
<description>Рукав с нит опл 50х61,5 мм 1,6 МПа КРТ</description>
</offer>
<offer id="46313" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khv_124_seraya_bar_40_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>415</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль ХВ-124 серая бар 40 кг</name>
<description>Эмаль ХВ-124 серая бар 40 кг</description>
</offer>
<offer id="46316" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_8kh15_mm_0_98_mpa_gib_dorn_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ed2/cf7gooz54p9e4x4bqh4826gon8ibbrj8.jpeg</picture>
<name>Рукав с нит опл  8х15 мм 0,98 МПа гиб.дорн СЗР</name>
<description>Рукав с нит опл  8х15 мм 0,98 МПа гиб.дорн СЗР </description>
</offer>
<offer id="46319" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_belaya_bar_20_kg_lkm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>139</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 белая бар 20 кг ЛКМ</name>
<description>Эмаль ПФ-115 белая бар 20 кг ЛКМ</description>
</offer>
<offer id="46320" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_seraya_bar_20_kg_lkm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>131</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 серая бар 20 кг ЛКМ</name>
<description>Эмаль ПФ-115 серая бар 20 кг ЛКМ</description>
</offer>
<offer id="46321" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_chernaya_bar_20_kg_lkm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>134</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 черная бар 20 кг ЛКМ</name>
<description>Эмаль ПФ-115 черная бар 20 кг ЛКМ</description>
</offer>
<offer id="46322" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_3_mm_spi_1_2kh10_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d6a/i4sa2apnf4yk9gm3kim5eelcgll2jch9.gif</picture>
<name>Пластина МБС  3 мм  СПИ 1,2х10 м</name>
<description>Пластина МБС  3 мм  СПИ </description>
</offer>
<offer id="46323" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_8_mm_spi_1_2kh4_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>147</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/802/blychr3g9mbr2efzuzg3mxeu6k2acwgs.gif</picture>
<name>Пластина ТМКЩ  8 мм СПИ 1,2х4 м</name>
<description>Пластина ТМКЩ  8 мм СПИ</description>
</offer>
<offer id="46324" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_10_mm_spi_1kh3_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>140</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c4e/tzaeyipqr31to94sw4jclmqxwm1ulh8n.gif</picture>
<name>Пластина ТМКЩ 10 мм СПИ 1х3 м</name>
<description>Пластина ТМКЩ 10 мм СПИ</description>
</offer>
<offer id="46325" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_4_mm_spi_1_2kh7_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/942/fn15kz0rjjjuggchc7gt9n8au1jq1iap.gif</picture>
<name>Пластина МБС  4 мм  СПИ 1,2х7 м</name>
<description>Пластина МБС  4 мм СПИ</description>
</offer>
<offer id="46326" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_2kh500kh500/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1498</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/61f/5aaum4adtytcclko8a8tfkav37qjomeu.jpg</picture>
<name>Пластина силиконовая 2Х500х500</name>
<description>Пластина силиконовая 2Х500х500</description>
</offer>
<offer id="46327" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_8kh500kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5944</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3b3/fc1eybale0ppci96wsqcrl36dq8x546c.jpg</picture>
<name>Пластина силиконовая 8х500х500 мм</name>
<description>Пластина силиконовая 8х500х500 мм</description>
</offer>
<offer id="46328" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/pakety_dlya_musora_120l_10sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>146</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<name>Пакеты для мусора 120л 10шт</name>
<description>Пакеты для мусора 120л 10шт</description>
</offer>
<offer id="46333" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_12kh20_mm_1_6_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>132</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/80b/24hxe8sme3aj6jse26ik0sgqrni928r8.jpeg</picture>
<name>Рукав с нит опл 12х20 мм 1,6 МПа СЗР</name>
<description>Рукав с нит опл 12х20 мм 1,6 МПа СЗР </description>
</offer>
<offer id="46334" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_65_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>700</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bb6/ef2kwk33rd8r1y4l3chglxfmeknwk0t0.jpeg</picture>
<name>Рукав всасывающий В  65 мм  4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  65 мм  4 м гр 1 СЗРТ</description>
</offer>
<offer id="46335" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_18_mm_1_0_mpa_tu_vpt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>87.5</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7c8/h073c0s6tlytm0mc48xebyxxacvohyph.jpeg</picture>
<name>Рукав напорный ВГ 18 мм 1,0 МПа ТУ ВПТ</name>
<description>Рукав напорный ВГ 18 мм 1,0 МПа ТУ ВПТ</description>
</offer>
<offer id="46336" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_b_8kh13_5_mm_1_7_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>76.9</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a64/seprc58lolojhj57sslrvuirwxo3i91w.jpg</picture>
<name>Шланг напорный ПВХ арм нитью Б  8х13,5 мм 1,7 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью Б  8х13,5 мм 1,7 МПа МПТ-Пластик</description>
</offer>
<offer id="46337" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_napornyy_pvkh_arm_nityu_b_10kh16_mm_1_5_mpa_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>94.5</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dd3/5e4lua5pfjth2cw1ybncmj6lm0lnz9bk.jpg</picture>
<name>Шланг напорный ПВХ арм нитью Б 10х16 мм 1,5 МПа МПТ-Пластик</name>
<description>Шланг напорный ПВХ арм нитью Б 10х16 мм 1,5 МПа МПТ-Пластик</description>
</offer>
<offer id="46338" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_aero_chernaya_zh_ved_26_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>257</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2d5/i716vqqa0hvao2ini2zu4c9z51akogyy.png</picture>
<name>Эмаль Линия АЭРО черная ж/вед 26 кг Ярославль</name>
<description>Эмаль Линия АЭРО черная ж/вед 26 кг Ярославль</description>
</offer>
<offer id="46339" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_800_3tk200_2_3_1_5_tip_2l_rb_7_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2046</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3fe/lp449byy4e73b59bhhrupb9xzc9r4ey1.jpg</picture>
<name>Лента кон  800-3ТК200-2-3-1,5 тип 2Л РБ  7,5 мм</name>
<description>Лента кон  800-3ТК200-2-3-1,5 тип 2Л РБ   </description>
</offer>
<offer id="46346" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_868_krasnaya_tes_termo_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>820</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b42/w4bubu883uzfbxxwwaafay9fxvsw67vo.jpg</picture>
<name>Эмаль КО-868 красная ТЕС-ТЕРМО бар 25 кг</name>
<description>Эмаль КО-868 красная ТЕС-ТЕРМО бар 25 кг</description>
</offer>
<offer id="46347" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_sinyaya_bar_40_kg_kazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>401</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро синяя бар 40 кг Казань</name>
<description>Эмаль НЦ-132 нитро синяя бар 40 кг Казань</description>
</offer>
<offer id="46348" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_266_zol_kor_zh_ved_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-266 зол кор ж/вед 25 кг</name>
<description>Эмаль ПФ-266 зол кор ж/вед 25 кг </description>
</offer>
<offer id="46369" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ak_1301_belaya_noch_zh_b_0_85_kg_vika/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1830</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль АК-1301 белая ночь ж/б 0,85 кг Vika</name>
<description>Эмаль АК-1301 белая ночь ж/б 0,85 кг Vika</description>
</offer>
<offer id="46380" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_vika_60_krasnaya_1015_zh_b_0_8_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1575</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль Vika 60 красная 1015 ж/б 0,8 кг</name>
<description>Эмаль Vika 60 красная 1015 ж/б 0,8 кг</description>
</offer>
<offer id="46381" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_ral_3011_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>216</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/719/bk65gv119vkk2v4hhh2mnr5byq5f2sfa.jpg</picture>
<name>Эмаль ПФ-115 RAL 3011 бар 25 кг</name>
<description>Эмаль ПФ-115 RAL 3011 бар 25 кг</description>
</offer>
<offer id="46383" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_chernaya_zh_b_6_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1628</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль по ржав черная ж/б 6 кг</name>
<description>Грунт-эмаль по ржав черная ж/б 6 кг</description>
</offer>
<offer id="46384" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_868_zheltaya_tes_termo_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>720</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/452/v0ld5aaeomdaz1q6t812arw3tn7n0zjt.jpg</picture>
<name>Эмаль КО-868 желтая ТЕС-ТЕРМО бар 25 кг</name>
<description>Эмаль КО-868 желтая ТЕС-ТЕРМО бар 25 кг</description>
</offer>
<offer id="46385" available="false">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_50kh70_mm_0_3_mpa_par_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1218</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/02a/o0dq9fm2wmgfjsbam04djvuk23mxu4dr.gif</picture>
<name>Рукав паропроводный 50х70 мм 0,3 МПа пар-1</name>
<description>Рукав паропроводный 50х70 мм 0,3 МПа пар-1</description>
</offer>
<offer id="46389" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_belaya_bar_40_kg_kazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>420</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро белая бар 40 кг Казань</name>
<description>Эмаль НЦ-132 нитро белая бар 40 кг Казань</description>
</offer>
<offer id="46390" available="true">
<url>http://himopttorg.ru/catalog/aerozolnye_kraski/emal_aeroz_alkidnaya_agatovo_ser_ral_7038_520_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<name>Эмаль аэроз алкидная агатово-сер RAL 7038 520 мл</name>
<description>Эмаль аэроз алкидная агатово-сер RAL 7038 520 мл </description>
</offer>
<offer id="46391" available="true">
<url>http://himopttorg.ru/catalog/aerozolnye_kraski/emal_aeroz_alkidnaya_pylno_ser_ral_7037_520_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<name>Эмаль аэроз алкидная пыльно-сер RAL 7037 520 мл</name>
<description>Эмаль аэроз алкидная пыльно-сер RAL 7037 520 мл </description>
</offer>
<offer id="46392" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_150_mm_4_m_gr_1_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3812</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f81/bqid9l0fl4ru5tucudbzg7w9mq4k7vz6.jpeg</picture>
<name>Рукав всасывающий КЩ 150 мм 4 м гр 1 </name>
<description>Рукав всасывающий КЩ 150 мм 4 м гр 1 </description>
</offer>
<offer id="46394" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_ak_11_ts_ral5005_ved_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>615</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль АК-11 ТС RAL5005 вед 20 кг</name>
<description>Грунт-эмаль АК-11 ТС RAL5005 вед 20 кг</description>
</offer>
<offer id="46398" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_metallik_topaz_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>73</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм металлик топаз 50 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм металлик топаз 50 м</description>
</offer>
<offer id="46400" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50_mm_1_0_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>430</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/089/2sxjb75hqfnqwxy8gh22pjx9i7dvbv6y.png</picture>
<name>Шланг нап всас ПВХ 50 мм 1,0 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 50 мм 1,0 МПа морозостойкий Снегирь</description>
</offer>
<offer id="46401" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_50_mm_0_7_mpa_morozostoykiy_snegir_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>251</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4ae/trincge1i2wbrru9mrsby2sg93i1qgdy.png</picture>
<name>Шланг нап всас ПВХ 50 мм 0,7 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 50 мм 0,7 МПа морозостойкий Снегирь</description>
</offer>
<offer id="46403" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_18_mm_0_4_mpa_vrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>78.6</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8a7/1m0yrmql603dnwf92e0foy8rno8yn0cp.gif</picture>
<name>Рукав напорный В  18 мм 0,4 МПа ВРТ</name>
<description>Рукав напорный В  18 мм 0,4 МПа ВРТ</description>
</offer>
<offer id="46404" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_20_mm_1000kh1000_arm_kordom/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>7262</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/579/65cjmc2s2jbqmf0qo1vanfdbf8gmgn62.jpg</picture>
<name>Пластина ТМКЩ 20 мм 1000х1000 арм кордом</name>
<description>Пластина ТМКЩ 20 мм 1000х1000 арм кордом</description>
</offer>
<offer id="46405" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_60_mm_720kh720/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>193</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cb1/tgm75pfg61lp0gyi81y8uus4il1y6yvm.jpg</picture>
<name>Пластина ТМКЩ 60 мм 720х720</name>
<description>Пластина ТМКЩ 60 мм 720х720</description>
</offer>
<offer id="46406" available="false">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/ognebiozashch_ekodom_rozovyy_indikatornyy_pl_kan_23_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2230</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/453/q6278f2wjunc80pfochp38fwgxrvozi0.png</picture>
<name>Огнебиозащ Экодом розовый индикаторный пл/кан 23 кг</name>
<description>Огнебиозащ Экодом розовый индикаторный пл/кан 23 кг</description>
</offer>
<offer id="46407" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/razbavitel_vika_60_0_35_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>194</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<name>Разбавитель Vika 60 0,35 л</name>
<description>Разбавитель Vika 60 0,35 л</description>
</offer>
<offer id="46412" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_gryazesbornyy_45kh75kh1_2_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>433</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/70f/c3mznsaa6zd5kqnp9wtrw1tilqoxqxif.jpeg</picture>
<name>Коврик грязесборный  45х75х1,2 см</name>
<description>Коврик грязесборный  45х75х1,2 см</description>
</offer>
<offer id="46413" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_80kh120kh0_6_sm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>568</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/971/hxwcihmj11dh23cehoohigzq3ul0sa51.jpeg</picture>
<name>Коврик влаговпитывающий 80х120х0,6 см коричневый</name>
<description>Коврик влаговпитывающий 80х120х0,6 см коричневый</description>
</offer>
<offer id="46415" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_90kh104_mm_0_29_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1731</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/96a/1q23matvom3192khd65ou2n5vvys2g2o.jpeg</picture>
<name>Рукав с нит опл 90х104 мм 0,29 МПа КРТ</name>
<description>Рукав с нит опл 90х104 мм 0,29 МПа КРТ</description>
</offer>
<offer id="46416" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_chernaya_ral_9004_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>368</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/98b/g0g8hnhr6osu9dy3066t8xfpeenaahjd.png</picture>
<name>Эмаль ПФС Стрела черная RAL 9004 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела черная RAL 9004 бар 45 кг Ярославль</description>
</offer>
<offer id="46417" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_oranzh_ral_2004_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/888/0jrfyvy55p7ythy762onk419ohr4q8lj.png</picture>
<name>Эмаль ПФС Стрела оранж  RAL 2004 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела оранж  RAL 2004 бар 45 кг Ярославль</description>
</offer>
<offer id="46419" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_metallik_perlamutr_25_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>45.3</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<name>Шланг поливочный ТЭП 1/2&quot; 12,5 мм металлик перламутр 25 м</name>
<description>Шланг поливочный ТЭП 1/2&quot; 12,5 мм металлик перламутр 25 м</description>
</offer>
<offer id="46420" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_fioletovyy_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75.1</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/202/t3gtfr88srdyuhlikt1gm6vivkinrbl0.jpg</picture>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм фиолетовый 50 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм фиолетовый 50 м</description>
</offer>
<offer id="46421" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_8kh16_5_mm_1_6_mpa_gib_dorn_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>122</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/322/u2uvt64o8f049lt7ok11si5f3dumqm8t.jpeg</picture>
<name>Рукав с нит опл  8х16,5 мм 1,6 МПа гиб.дорн СЗР</name>
<description>Рукав с нит опл  8х16,5 мм 1,6 МПа гиб.дорн СЗР</description>
</offer>
<offer id="46423" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_10_m_gr_2_r_10_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>778</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7bf/la7v3hf414vq19w4o7a3brmmqkjnmpca.jpeg</picture>
<name>Рукав всасывающий В  50 мм 10 м гр 2 р-10 СЗРТ</name>
<description>Рукав всасывающий В  50 мм 10 м гр 2 р-10 СЗРТ</description>
</offer>
<offer id="46425" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/n_geksan_khch_st_but_0_65_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>854</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Н-Гексан ХЧ ст/бут 0,65 кг Экос-1</name>
<description>Н-Гексан ХЧ ст/бут 0,65 кг Экос-1</description>
</offer>
<offer id="46427" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_but_1_l_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>144</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<name>Уайт-спирит бут 1 л </name>
<description>Уайт-спирит бут 1 л</description>
</offer>
<offer id="46428" available="false">
<url>http://himopttorg.ru/catalog/kley_88/kley_pva_universal_5_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>460</price>
<currencyId>RUB</currencyId>
<categoryId>231</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d8e/3m3gf0mv0c68w3r9w6krw99u3v8gd45l.jpeg</picture>
<name>Клей ПВА универсал.5 кг</name>
<description>Клей ПВА универсал.5 кг</description>
</offer>
<offer id="46431" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/khloramin_b/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>581</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Хлорамин Б</name>
<description>Хлорамин Б</description>
</offer>
<offer id="46433" available="false">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_3_mm_1000kh800_orenburg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c6d/kxbu4k6c82vgbu8s2fjnr6q1e2ed3g24.jpg</picture>
<name>Асбокартон КАОН  3 мм 1000х800 Оренбург</name>
<description>Асбокартон КАОН  3 мм 1000х800 Оренбург</description>
</offer>
<offer id="46434" available="false">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_5_mm_1000kh800_orenburg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>70</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/31f/9l1v6piw23oi9r9s0j5walgcjy0ahyrw.jpg</picture>
<name>Асбокартон КАОН  5 мм 1000х800 Оренбург</name>
<description>Асбокартон КАОН  5 мм 1000х800 Оренбург</description>
</offer>
<offer id="46436" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_10_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>543</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6ce/hlsblq9ujlw4y7n61nnojpsvl7tegxx4.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 10 м гр 2 Р-5 Химтекс</name>
<description>Рукав всасывающий Б  25 мм 10 м гр 2 Р-5 Химтекс</description>
</offer>
<offer id="46438" available="false">
<url>http://himopttorg.ru/catalog/rukava_dyuritovye_tu_0056016_87/rukav_40u_70_7/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2301</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>http://himopttorg.ru/upload/iblock/840/f33r6pm4py80f32fwv603wed8oozrb7x.jpeg</picture>
<name>Рукав 40У-70-7</name>
<description>Рукав 40У-70-7</description>
</offer>
<offer id="46439" available="false">
<url>http://himopttorg.ru/catalog/kislota_azotnaya/kislota_azotnaya_v_s_gost_57/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>58</price>
<currencyId>RUB</currencyId>
<categoryId>3348</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e65/99vpqq74pqu036zfc6hw2l738qvez7tj.jpg</picture>
<name>Кислота азотная в/с ГОСТ 57%</name>
<description>Кислота азотная в/с ГОСТ 57%</description>
</offer>
<offer id="46441" available="false">
<url>http://himopttorg.ru/catalog/rastvoritel_650/rastvoritel_650_pl_kan_10_l_holex/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2880</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>http://himopttorg.ru/upload/iblock/802/35ajx7iynp1qmcy5cjici6ja46m0q3nr.jpeg</picture>
<name>Растворитель 650 пл/кан 10 л Holex</name>
<description>Растворитель 650 пл/кан 10 л Holex</description>
</offer>
<offer id="46442" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/uskoritel_sushki_021_ban_80_gr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>106</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<name>Ускоритель сушки 021 бан 80 гр</name>
<description>Ускоритель сушки 021 бан 80 гр</description>
</offer>
<offer id="46443" available="false">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_tabletirovannaya_ekstra_mesh_25_kg_iran/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>38</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль таблетированная Экстра меш 25 кг Иран</name>
<description>Соль таблетированная Экстра меш 25 кг Иран</description>
</offer>
<offer id="46446" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/ammiak_vodnyy_tekhn/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>126</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Аммиак водный техн</name>
<description>Аммиак водный техн</description>
</offer>
<offer id="46447" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_siniy_u_bar_20_kg_ral5005_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>427</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef1/4dshew18pf03v8y0762farhk91ob2d24.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав синий У бар 20 кг RAL5005 СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав синий У бар 20 кг RAL5005 СПб</description>
</offer>
<offer id="46449" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_zheltaya_zh_b_1_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>674</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль по ржав желтая ж/б 1,9 кг</name>
<description>Грунт-эмаль по ржав желтая ж/б 1,9 кг</description>
</offer>
<offer id="46450" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_chernaya_zh_b_1_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>674</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль по ржав черная ж/б 1,9 кг</name>
<description>Грунт-эмаль по ржав черная ж/б 1,9 кг</description>
</offer>
<offer id="46454" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_6_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/962/v0sy5kw8wchhts1mc2nbpumsflqm1dcb.jpg</picture>
<name>Рукав всасывающий Б  50 мм  6 м гр 1 СЗРТ</name>
<description>Рукав всасывающий Б  50 мм  6 м гр 1 СЗРТ</description>
</offer>
<offer id="46455" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_300_2bknl_65_2_1_5_1_5_2l_5mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/82a/6885hm03nbm5e79zik9cnsjdg1lplajp.jpeg</picture>
<name>Лента кон  300-2БКНЛ-65-2-1,5-1,5 2Л 5мм</name>
<description>Лента кон  300-2БКНЛ-65-2-1,5-1,5 2Л 5мм</description>
</offer>
<offer id="46456" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_metallik_malakhit_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>73</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм металлик малахит 50 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм металлик малахит 50 м</description>
</offer>
<offer id="46457" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_3_4_20_mm_metallik_stal_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>65</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<name>Шланг поливочный ТЭП 3/4&quot; 20 мм металлик сталь 50 м</name>
<description>Шланг поливочный ТЭП 3/4&quot; 20 мм металлик сталь 50 м</description>
</offer>
<offer id="46459" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/standart_titr_natriy_sernovatistokislyy_5_vodnyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>958</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Стандарт-титр натрий серноватистокислый 5-водный</name>
<description>Стандарт-титр натрий серноватистокислый 5-водный</description>
</offer>
<offer id="46462" available="true">
<url>http://himopttorg.ru/catalog/aminat/aminat_ko_3_pl_kan_20_kg_travers/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>182</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<name>Аминат КО-3 пл/кан 20 кг Траверс</name>
<description>Аминат КО-3 пл/кан 20 кг Траверс</description>
</offer>
<offer id="46463" available="false">
<url>http://himopttorg.ru/catalog/syraya_rezina/tkanevaya_izolenta_khb_chernaya_300_g_dvukhstoronnyaya_shir_20mm_tolshch_0_4/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>183</price>
<currencyId>RUB</currencyId>
<categoryId>256</categoryId>
<name>Тканевая изолента ХБ черная 300 г двухсторонняя шир 20мм толщ 0,4</name>
<description>Тканевая изолента ХБ черная 300 г двухсторонняя шир 20мм толщ 0,4</description>
</offer>
<offer id="46464" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/gubka_kukh_10_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>64.2</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Губка кух 10 шт</name>
<description>Губка кух 10 шт</description>
</offer>
<offer id="46465" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_150kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<name>Полиамид ПА 6 (капролон) стерж 150х1000 мм</name>
<description>Полиамид ПА 6 (капролон) стерж 150х1000 мм </description>
</offer>
<offer id="46467" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/polotentse_beloe_2_sl_2sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>103</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<name>Полотенце белое  2-сл 2шт</name>
<description>Полотенце белое  2-сл 2шт</description>
</offer>
<offer id="46468" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1200_10000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/45c/3oixga750kr37bzfpk2rl2hwkayxbco9.jpeg</picture>
<name>Автодорожка пятачковая 1200*10000*5 мм СПИ</name>
<description>Автодорожка пятачковая 1200*10000*5 мм СПИ</description>
</offer>
<offer id="46469" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1500_10000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/17f/gwdz4c7qteu2giqyqjkgxbq7w1pfbltn.jpeg</picture>
<name>Автодорожка пятачковая 1500*10000*5 мм СПИ</name>
<description>Автодорожка пятачковая 1500*10000*5 мм СПИ</description>
</offer>
<offer id="46473" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_zheltyy_u_bar_20_kg_ral1003_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>458</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fa8/o5uu9qkcqab5je4ldd1okasxknbpl2g2.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав желтый У бар 20 кг RAL1003 СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав желтый У бар 20 кг RAL1003 СПб</description>
</offer>
<offer id="46474" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_ral6021_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/28d/4cvtrfi44n1gkdbk6aguzm63df8vpr62.jpg</picture>
<name>Грунт-эмаль ХВ-0278 по ржав RAL6021 бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав RAL6021 бар 20 кг</description>
</offer>
<offer id="46477" available="false">
<url>http://himopttorg.ru/catalog/smazochnye_materialy_1/smazka_aviks_lithium_grease_blue_met_vedro_18_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>470</price>
<currencyId>RUB</currencyId>
<categoryId>3314</categoryId>
<name>Смазка Aviks Lithium Grease Blue мет/ведро 18 кг</name>
<description>Смазка Aviks Lithium Grease Blue мет/ведро 18 кг</description>
</offer>
<offer id="46478" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_liniya_belaya_zh_ved_26_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f12/vtawmp8dzvpq47jz3hvdpijdhnj4soxg.png</picture>
<name>Эмаль Линия белая ж/вед 26 кг Ярославль</name>
<description>Эмаль Линия белая ж/вед 26 кг Ярославль</description>
</offer>
<offer id="46479" available="true">
<url>http://himopttorg.ru/catalog/zhidkoe_steklo/zhidkoe_steklo_pl_kan_20_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1750</price>
<currencyId>RUB</currencyId>
<categoryId>187</categoryId>
<name>Жидкое стекло пл/кан 20 л</name>
<description>Жидкое стекло пл/кан 20 л</description>
</offer>
<offer id="46483" available="true">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_lbs_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>720</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<name>Лак ЛБС-1</name>
<description>Лак ЛБС-1</description>
</offer>
<offer id="46484" available="false">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_tabletirovannaya_ekstra_mesh_25_kg_turtsiya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>38</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль таблетированная Экстра меш 25 кг Турция</name>
<description>Соль таблетированная Экстра меш 25 кг Турция</description>
</offer>
<offer id="46485" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_6_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>924</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dd4/5bsl7y9q4f4fa1ghbna6qv2x9k31zpgm.jpeg</picture>
<name>Рукав всасывающий В  75 мм   6 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий В  75 мм   6 м гр 2 р-5 СЗР</description>
</offer>
<offer id="46486" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_4_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>916</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/013/0ecj861u30qcmejsjsic4pp7psc1qbrj.jpeg</picture>
<name>Рукав всасывающий В  75 мм   4 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий В  75 мм   4 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="46487" available="false">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_6_mm_1000kh800_orenburg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>75</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/90a/yrdhhlqs3b2zyki7kj3r064keunhvwez.jpg</picture>
<name>Асбокартон КАОН  6 мм 1000х800 Оренбург</name>
<description>Асбокартон КАОН  6 мм 1000х800 Оренбург</description>
</offer>
<offer id="46488" available="false">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_8_mm_1000kh800_orenburg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>82</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b1b/yjlmiy31z8yc4qxys5x94jysafn8r9cq.jpg</picture>
<name>Асбокартон КАОН  8 мм 1000х800 Оренбург</name>
<description>Асбокартон КАОН  8 мм 1000х800 Оренбург</description>
</offer>
<offer id="46489" available="false">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_4_mm_1000kh800_orenburg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>70</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dc5/u0p441b1ebsrsuiy6wet72vskzurx3mm.jpg</picture>
<name>Асбокартон КАОН  4 мм 1000х800 Оренбург</name>
<description>Асбокартон КАОН  4 мм 1000х800 Оренбург</description>
</offer>
<offer id="46491" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_1000_2tk200_2_3_1_tip_2l_rb_6mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2289</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1af/lkm7jbuywqi7199zzh2q5vkn1ds4jift.jpg</picture>
<name>Лента кон 1000-2ТК200-2-3-1 тип 2Л РБ     6мм</name>
<description>Лента кон 1000-2ТК200-2-3-1 тип 2Л РБ  6 мм</description>
</offer>
<offer id="46492" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_650_3tk_200_2_5_2_rb_10_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2471</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/755/itahb1dkcjkbfe9x4kf0boem8i2o71ox.jpeg</picture>
<name>Лента кон  650-3ТК-200-2-5-2 РБ 10 мм</name>
<description>Лента кон  650-3ТК-200-2-5-2 РБ 10 мм</description>
</offer>
<offer id="46494" available="false">
<url>http://himopttorg.ru/catalog/aminat/aminat_d_k_pl_kan_23_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>291</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<picture>http://himopttorg.ru/upload/iblock/58d/s8gahsrfjtfqgwkt30t3kcwys4rhsq16.jpg</picture>
<name>Аминат Д(К) пл/кан 23 кг Экос-1</name>
<description>Аминат Д(К) пл/кан 23 кг Экос-1</description>
</offer>
<offer id="46497" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/kislota_solyanaya_khch_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>241</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Кислота соляная ХЧ </name>
<description>Кислота соляная ХЧ </description>
</offer>
<offer id="46500" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_ral5005_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>605</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав RAL5005 бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав RAL5005 бар 20 кг</description>
</offer>
<offer id="46517" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pa_3_0_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>550</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<name>Паронит ПА 3,0  мм ВАТИ</name>
<description>Паронит ПА 3,0 мм ВАТИ</description>
</offer>
<offer id="46531" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/chetyrekhkhloristyy_uglerod_ch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>384</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0b4/pdfy34jhp0zucy84n6xzrelntiqksse2.jpeg</picture>
<name>Четыреххлористый  углерод Ч</name>
<description>Четыреххлористый  углерод Ч </description>
</offer>
<offer id="46542" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/izoamilovyy_spirt_ch_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>704</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bf1/0jaqa51w29abr00dp5a1pgq8v125zcm0.jpeg</picture>
<name>Изоамиловый спирт Ч ст/бут 0,8 кг Экос-1</name>
<description>Изоамиловый спирт Ч ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="46545" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_32kh47_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>598</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/369/8szs9yo2pxi8g9umn6wylemo435ovkn0.gif</picture>
<name>Рукав пневматический Г 32х47 мм 1,0 МПа Кварт</name>
<description>Рукав пневматический Г 32х47 мм 1,0 МПа Кварт</description>
</offer>
<offer id="46547" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_130_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>504</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7c4/ujxr6zok5wvb7eb0cpt6mfnn5q71ujgf.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж 130 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж 130 мм Пермь</description>
</offer>
<offer id="46556" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_6_m_gr_2_r_5_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1192</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eac/saovjbasb0emwn8ds6vvxmtpoekcvnl8.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  6 м гр 2 р-5 Кварт</name>
<description>Рукав всасывающий Б  75 мм  6 м гр 2 р-5 Кварт</description>
</offer>
<offer id="46562" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_4kh_500kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1a7/dn99q059yf28p8ltt7fz41fos2gtdwiu.jpeg</picture>
<name>Фторопласт пласт  4х 500х500 мм</name>
<description>Фторопласт пласт  4х 500х500 мм </description>
</offer>
<offer id="46565" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kationit_ku_2_8/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>377</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Катионит КУ 2-8</name>
<description>Катионит КУ 2-8</description>
</offer>
<offer id="46566" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_2_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>205</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c02/ya9rk6xrychrc31fk9r6c68ygnflxdk3.gif</picture>
<name>Пластина ТМКЩ  2 мм</name>
<description>Пластина ТМКЩ  2 мм </description>
</offer>
<offer id="46572" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_12_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>637</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/38d/mdktbgb8afmi88fkp5kanzj5gyovb22h.jpeg</picture>
<name>Шнур резиновый МБС 12 мм</name>
<description>Шнур резиновый МБС 12 мм</description>
</offer>
<offer id="46578" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_tekhn_kshchs_tip_2_razmer_8/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/828/t0muymn1cvu4y6rrnui6ksmyec7qzuv9.jpeg</picture>
<name>Перчатки техн КЩС тип 2 размер 8</name>
<description>Перчатки техн КЩС тип 2 размер 8</description>
</offer>
<offer id="46580" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_tekhn_kshchs_tip_2_razmer_10/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dff/mt1psvd4dbtdacsast0h9b5mbw0npp43.jpeg</picture>
<name>Перчатки техн КЩС тип 2 размер 10</name>
<description>Перчатки техн КЩС тип 2 размер 10</description>
</offer>
<offer id="46589" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_30kh30_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1145</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4d2/k1a4wtu3jt7glzjnehgjx6cg1waj52t8.jpeg</picture>
<name>Набивка АПР-31 30х30 мм ВАТИ</name>
<description>Набивка АПР-31 30х30 мм ВАТИ</description>
</offer>
<offer id="46609" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/gruntovka_glubokogo_proniknoveniya_kan_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>963</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<name>Грунтовка глубокого проникновения кан 10 л</name>
<description>Грунтовка глубокого проникновения кан 10 л</description>
</offer>
<offer id="46618" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_15kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2d5/pxcc34bgpffztd9ifnskqx0tu9dp4z0s.jpeg</picture>
<name>Фторопласт стерж  15х1000 мм</name>
<description>Фторопласт стерж  15х1000 мм</description>
</offer>
<offer id="46621" available="true">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_25_mm_perm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>480</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<name>Полиамид ПА 6 (капролон) стерж  25 мм Пермь</name>
<description>Полиамид ПА 6 (капролон) стерж  25 мм Пермь</description>
</offer>
<offer id="46631" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_chernaya_bar_40_kg_kazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>405</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро черная бар 40 кг Казань</name>
<description>Эмаль НЦ-132 нитро черная бар 40 кг Казань</description>
</offer>
<offer id="46639" available="true">
<url>http://himopttorg.ru/catalog/atseton_1/atseton_ch_pl_kan_8_kg_10_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>318</price>
<currencyId>RUB</currencyId>
<categoryId>3351</categoryId>
<picture>http://himopttorg.ru/upload/iblock/580/lrxyqs4vuzekjpsvdd3q8lu60g4s166q.jpg</picture>
<name>Ацетон Ч пл/кан 8 кг (10 л)</name>
<description>Ацетон Ч пл/кан 8 кг (10 л) </description>
</offer>
<offer id="46642" available="true">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_v_s_pomol_1_mesh_50_kg_iletsk/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>15</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль в/с помол № 1  меш 50 кг Илецк</name>
<description>Соль в/с помол № 1  меш 50 кг Илецк</description>
</offer>
<offer id="46664" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_75_mm_10_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>975</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f86/piqbon14j4cjq7sveqqjukmbipkv4vag.jpeg</picture>
<name>Рукав всасывающий В  75 мм  10 м гр 1 Химтекс</name>
<description>Рукав всасывающий В  75 мм  10 м гр 1 Химтекс</description>
</offer>
<offer id="46672" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_32kh47_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>406</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/11b/vb9uiw0do93we5d1mx600orce2udny3f.gif</picture>
<name>Рукав пневматический Г 32х47 мм 1,0 МПа Химтекс</name>
<description>Рукав пневматический Г 32х47 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="46734" available="true">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_tekhnicheskaya_pom_3_mkr_1_tn/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>13.5</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль техническая  пом. №3 МКР  1 тн</name>
<description>Соль техническая  пом. №3 МКР  1 тн</description>
</offer>
<offer id="46839" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/vannochka_dlya_kraski_150kh290/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>72.1</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a7f/kalmvxu0kiuwdmf6wv6st3vxp4rsnnjr.jpeg</picture>
<name>Ванночка для краски 150х290</name>
<description>Ванночка для краски 150х290</description>
</offer>
<offer id="46884" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_6_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>836</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1d5/qa1kxodvvxx6dm8fuagx9jmsw13g019s.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  6 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий Б  50 мм  6 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="46907" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pon_b_2_mm_1700kh3000_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>155</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<name>Паронит ПОН-Б 2 мм 1700х3000 ВАТИ</name>
<description>Паронит ПОН-Б 2 мм 1700х3000 ВАТИ</description>
</offer>
<offer id="46908" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/benzol_chda_st_but_0_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>318</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/126/3e7hbyuq5k7e385ydql4bm9qrxo1bbpn.jpg</picture>
<name>Бензол ЧДА ст/бут 0,9 кг Экос-1</name>
<description>Бензол ЧДА ст/бут 0,9 кг Экос-1</description>
</offer>
<offer id="46987" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_10_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>650</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bc0/b6nasb8ss1ihzfczhkwfhbr0exeskqka.jpeg</picture>
<name>Рукав всасывающий Б  38 мм 10 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  38 мм 10 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="47074" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_krasnaya_bar_50_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 красная бар 50 кг LIDA</name>
<description>Эмаль ПФ-115 красная бар 50 кг LIDA</description>
</offer>
<offer id="47088" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/stakan_vysokiy_s_delen_v_1_150/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>192</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Стакан высокий с делен В-1-150</name>
<description>Стакан высокий с делен В-1-150</description>
</offer>
<offer id="47093" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_krucha_metal_flex_25_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>824</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d23/92njzpvpocembt5q1auz3y5wfde5tv43.jpeg</picture>
<name>Шланг ПВХ Круча Metal-Flex 25 мм</name>
<description>Шланг ПВХ Круча Metal-Flex 25 мм</description>
</offer>
<offer id="47126" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/stakan_1000_ml_p_p_graduir_s_ruchkoy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>345</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Стакан 1000 мл п/п градуир с ручкой</name>
<description>Стакан 1000 мл п/п градуир с ручкой</description>
</offer>
<offer id="47132" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_300_2bknl65_2_1_5_1_5_5_5_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<name>Лента кон 300-2БКНЛ65-2-1,5-1,5   5-5,5 мм</name>
<description>Лента кон 300-2БКНЛ65-2-1,5-1,5   5-5,5 мм</description>
</offer>
<offer id="47140" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_poliester_na_pvkh_43kh68smkh9_mm_sero_chern/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>336</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/de4/6efv6bb9oihwy0pyi2jos41hyzz39kb2.jpeg</picture>
<name>Коврик полиэстер на ПВХ 43х68смх9 мм серо-черн</name>
<description>Коврик полиэстер на ПВХ 43х68смх9 мм серо-черн</description>
</offer>
<offer id="47141" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_poliester_na_pvkh_43kh68smkh9_mm_korich_chern/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>336</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ab6/yckhqw0pveswfmsyv2zbzedfrzogoolo.jpeg</picture>
<name>Коврик полиэстер на ПВХ 43х68смх9 мм корич-черн</name>
<description>Коврик полиэстер на ПВХ 43х68смх9 мм корич-черн</description>
</offer>
<offer id="47143" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_10_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>543</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/307/c54mzh8mgj67qy2rglsqf4m4htv5stpk.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б  25 мм 10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="47146" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_akrilovye_s_pvkh_chyernye_osen/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>68.4</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<name>Перчатки акриловые с ПВХ чёрные Осень</name>
<description>Перчатки акриловые с ПВХ чёрные Осень</description>
</offer>
<offer id="47158" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_500_4tk200_2_3_1_tip_2l_7_5_8mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1804</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d73/t38mfb9yqcg86qztakvssgtpbdj8kwrb.jpg</picture>
<name>Лента кон  500-4ТК200-2-3-1 тип 2Л  7,5-8мм</name>
<description>Лента кон  500-4ТК200-2-3-1 тип 2Л   7,5-8 мм</description>
</offer>
<offer id="47183" available="true">
<url>http://himopttorg.ru/catalog/kisloty/kislota_sernaya_rastvor_37/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>104</price>
<currencyId>RUB</currencyId>
<categoryId>3312</categoryId>
<name>Кислота серная раствор 37%</name>
<description>Кислота серная раствор 37%</description>
</offer>
<offer id="47196" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_50kh69_mm_1_0_mpa_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1156</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2c5/1kjvuknl01klg11sar14w3euinffbbxp.gif</picture>
<name>Рукав пневматический Г 50х69 мм 1,0 МПа КВАРТ</name>
<description>Рукав пневматический Г 50х69 мм 1,0 МПа КВАРТ</description>
</offer>
<offer id="47219" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/lenta_malyarnaya_50_mmkh25_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>129</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Лента малярная 50 ммх25 м</name>
<description>Лента малярная 50 ммх25 м</description>
</offer>
<offer id="47224" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_ak_511_zheltaya_zh_ved_25_kg_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<name>Эмаль АК-511 желтая ж/вед 25 кг СПб</name>
<description>Эмаль АК-511 желтая ж/вед 25 кг СПб</description>
</offer>
<offer id="47226" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_4_m_gr_2_r_5/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>868</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/585/8nxluhf5syssuio0on166m7399plgywa.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  4 м гр 2 р-5</name>
<description>Рукав всасывающий Б  50 мм  4 м гр 2 р-5 </description>
</offer>
<offer id="47240" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/viniplast_10kh700kh1500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>550</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<name>Винипласт 10х700х1500 мм</name>
<description>Винипласт 10х700х1500 мм </description>
</offer>
<offer id="47291" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/soedinitel_dlya_rezinovykh_kovrikov_65kh65kh17_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>57.5</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Соединитель для резиновых ковриков 65х65х17 мм</name>
<description>Соединитель для резиновых ковриков 65х65х17 мм</description>
</offer>
<offer id="47331" available="true">
<url>http://himopttorg.ru/catalog/soda_kausticheskaya/soda_kausticheskaya_cheshuirovannaya_p_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>106</price>
<currencyId>RUB</currencyId>
<categoryId>3113</categoryId>
<name>Сода каустическая чешуированная  п/меш 25 кг</name>
<description>Сода каустическая чешуированная  п/меш 25 кг </description>
</offer>
<offer id="47342" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_60kh100kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1252</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 60х100х3 см</name>
<description>Коврик дезинфиц ЭКО 60х100х3 см</description>
</offer>
<offer id="47404" available="true">
<url>http://himopttorg.ru/catalog/dezinfetsiruyushchie_sredstva/trinatriyfosfat_p_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>288</price>
<currencyId>RUB</currencyId>
<categoryId>295</categoryId>
<name>Тринатрийфосфат п/меш 25 кг</name>
<description>Тринатрийфосфат п/меш 25 кг </description>
</offer>
<offer id="47436" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_3kh_500kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a66/hknfawsrpiwe6u5x6svn4z8k2bi0bvvt.jpeg</picture>
<name>Фторопласт пласт  3х 500х500 мм</name>
<description>Фторопласт пласт  3х 500х500 мм </description>
</offer>
<offer id="47520" available="true">
<url>http://himopttorg.ru/catalog/atseton_1/atseton_khch_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>610</price>
<currencyId>RUB</currencyId>
<categoryId>3351</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d8b/ui8sp69hllccmfhpe8h92plbrihblkob.jpeg</picture>
<name>Ацетон ХЧ ст/бут 0,8 кг Экос-1</name>
<description>Ацетон ХЧ ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="47532" available="true">
<url>http://himopttorg.ru/catalog/atseton_1/atseton_ch_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>402</price>
<currencyId>RUB</currencyId>
<categoryId>3351</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dbf/ifxrgvgsm7d6qwmyilb4avqcme4uu5ix.jpeg</picture>
<name>Ацетон Ч ст/бут 0,8 кг Экос-1</name>
<description>Ацетон Ч ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="47539" available="true">
<url>http://himopttorg.ru/catalog/asboshnur/nabivka_apr_31_6kh6_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1050</price>
<currencyId>RUB</currencyId>
<categoryId>3283</categoryId>
<picture>http://himopttorg.ru/upload/iblock/077/ruajqo4bpzqdi27mzfwzaxpy60phfthq.jpg</picture>
<name>Набивка АПР-31  6х6 мм ВАТИ</name>
<description>Набивка АПР-31  6х6 мм ВАТИ</description>
</offer>
<offer id="47548" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_8kh15_mm_0_98_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b3a/70gglm8li6v1fuhic7bgi021jobrc68r.jpeg</picture>
<name>Рукав с нит опл  8х15 мм 0,98 МПа СЗР</name>
<description>Рукав с нит опл  8х15 мм 0,98 МПа СЗР </description>
</offer>
<offer id="47549" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_sh_1/rukav_napornyy_sh_38kh57_mm_1_6_mpa_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>679</price>
<currencyId>RUB</currencyId>
<categoryId>3304</categoryId>
<picture>http://himopttorg.ru/upload/iblock/96c/vsp473w82tlqcf574yzh7b64afmvaoaw.gif</picture>
<name>Рукав напорный Ш 38х57 мм 1,6 МПа СЗР</name>
<description>Рукав напорный Ш 38х57 мм 1,6 МПа СЗР</description>
</offer>
<offer id="47579" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/stekloshariki_svetootrazh_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>80</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f93/x07wp483og43i570f87du8nsoavx6c8e.png</picture>
<name>Стеклошарики светоотраж меш 25 кг</name>
<description>Стеклошарики светоотраж меш 25 кг </description>
</offer>
<offer id="47580" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_10kh_500kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<picture>http://himopttorg.ru/upload/iblock/afb/nhpykrvduspep3xsqc99bhbqoujqvizh.jpeg</picture>
<name>Фторопласт пласт 10х 500х500 мм</name>
<description>Фторопласт пласт 10х 500х500 мм</description>
</offer>
<offer id="47650" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/metilen_khloristyy_ch_dikhlormetan_st_but_1_3_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>318</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Метилен хлористый Ч (дихлорметан) ст/бут 1,3 кг Экос-1</name>
<description>Метилен хлористый Ч (дихлорметан) ст/бут 1,3 кг Экос-1</description>
</offer>
<offer id="47679" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_sterzh_50kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>750</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/354/7gx1ujlt4rkplylcbuu8dk7zivm1icy8.jpeg</picture>
<name>Текстолит ПТ стерж  50х1000 мм</name>
<description>Текстолит ПТ стерж  50х1000 мм </description>
</offer>
<offer id="47722" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_14_mm_1000kh1000/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3837</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ec8/7xae2lffwvtmxh46lo3z0otcjtn3lfam.jpg</picture>
<name>Пластина ТМКЩ 14 мм 1000х1000</name>
<description>Пластина ТМКЩ 14 мм 1000х1000 </description>
</offer>
<offer id="47731" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_zelenaya_bar_20_kg_lkm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3663</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 зеленая бар 20 кг ЛКМ</name>
<description>Эмаль ПФ-115 зеленая бар 20 кг ЛКМ</description>
</offer>
<offer id="47751" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_seraya_zh_b_1_7_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>923</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<picture>http://himopttorg.ru/upload/iblock/526/q8kvae5xu2aemhakhcb8u0n5w34bcv9m.jpeg</picture>
<name>Эмаль НЦ-132 нитро серая ж/б 1,7 кг</name>
<description>Эмаль НЦ-132 нитро серая ж/б 1,7 кг</description>
</offer>
<offer id="47778" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_pozharnyy_50_mm_universal_1_0_mpa_s_golovkami_gr_50ap/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3375</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<name>Рукав пожарный 50 мм Универсал 1,0 МПа с головками ГР-50АП</name>
<description>Рукав пожарный 50 мм Универсал 1,0 МПа с головками ГР-50АП</description>
</offer>
<offer id="47779" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_100_mm_4_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1700</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/71f/4e0x3d6nrnj87o275h5zcj7u9lpfuvc8.jpeg</picture>
<name>Рукав всасывающий КЩ 100 мм 4 м гр 1 СЗР</name>
<description>Рукав всасывающий КЩ 100 мм 4 м гр 1 СЗР </description>
</offer>
<offer id="47794" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_zheltaya_zh_b_1_9_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>492</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 желтая ж/б 1,9 кг </name>
<description>Эмаль ПФ-115 желтая ж/б 1,9 кг </description>
</offer>
<offer id="47807" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_25_40_9_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>16.2</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5dc/yzoumenf3h2gduo33q8ce48bv4ld2yfh.jpeg</picture>
<name>Хомут червячный  25-40/9 W2</name>
<description>Хомут червячный  25-40/9 W2 </description>
</offer>
<offer id="47811" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/kislota_solyanaya_khch_pl_but_1_2_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>270</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Кислота соляная ХЧ пл/бут 1,2 кг Экос-1</name>
<description>Кислота соляная ХЧ пл/бут 1,2 кг Экос-1</description>
</offer>
<offer id="47812" available="true">
<url>http://himopttorg.ru/catalog/vodoemulsionnye_kraski/kraska_fasadnaya_bar_14_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1414</price>
<currencyId>RUB</currencyId>
<categoryId>3289</categoryId>
<name>Краска фасадная бар 14 кг</name>
<description>Краска фасадная бар 14 кг</description>
</offer>
<offer id="47846" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/uksusnaya_kislota_osch_14_3_gost_18270_72_1_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>612</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Уксусная кислота ОСЧ 14-3 ГОСТ 18270-72  1 кг Экос-1</name>
<description>Уксусная кислота ОСЧ 14-3 ГОСТ 18270-72  1 кг Экос-1</description>
</offer>
<offer id="47852" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_vika_60_chernaya_601_zh_b_0_8_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>964</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль Vika 60 черная 601 ж/б 0,8 кг</name>
<description>Эмаль Vika 60 черная 601 ж/б 0,8 кг</description>
</offer>
<offer id="47912" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_75_mm_10_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1206</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/444/2duuj6k61m8rpsd0csvct34s2fo4ch76.jpeg</picture>
<name>Рукав всасывающий КЩ  75 мм 10 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий КЩ  75 мм 10 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="47913" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_gf_92khs_kr_kor_bar_50_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>350</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль ГФ-92ХС кр кор бар 50 кг</name>
<description>Эмаль ГФ-92ХС кр кор бар 50 кг </description>
</offer>
<offer id="47932" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/sterzhen_poliuretan_70kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2250</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Стержень полиуретан  70х500 мм</name>
<description>Стержень полиуретан  70х500 мм</description>
</offer>
<offer id="47950" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_1000_3tk200_2_5_2_tip_2_2_rb_10_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3874</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2ef/fj2bh6b1vekqlcj2b400dh5b4qviwai5.jpeg</picture>
<name>Лента кон 1000-3ТК200-2-5-2 тип 2.2 РБ  10 мм</name>
<description>Лента кон 1000-3ТК200-2-5-2 тип 2.2 РБ  10 мм</description>
</offer>
<offer id="47951" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_ak_511_chernaya_zh_ved_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<name>Эмаль АК-511 черная ж/вед 25 кг</name>
<description>Эмаль АК-511 черная ж/вед 25 кг</description>
</offer>
<offer id="47959" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_po_rzhav_seryy_gladkaya_ral7004_zh_b_2_l_dali/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2560</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 по ржав серый гладкая RAL7004 ж/б 2 л DALI</name>
<description>Грунт-эмаль 3 в 1 по ржав серый гладкая RAL7004 ж/б 2 л DALI</description>
</offer>
<offer id="47961" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_po_rzhav_chernyy_gladkaya_ral9005_zh_b_2_l_dali/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2560</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 по ржав черный гладкая RAL9005 ж/б 2 л DALI</name>
<description>Грунт-эмаль 3 в 1 по ржав черный гладкая RAL9005 ж/б 2 л DALI</description>
</offer>
<offer id="47973" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_po_rzhav_oranzhevyy_gladkaya_ral2004_zh_b_2_l_dali/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2560</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 по ржав оранжевый гладкая RAL2004 ж/б 2 л DALI</name>
<description>Грунт-эмаль 3 в 1 по ржав оранжевый гладкая RAL2004 ж/б 2 л DALI</description>
</offer>
<offer id="47984" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/sterzhen_poliuretan_30kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Стержень полиуретан  30х500 мм</name>
<description>Стержень полиуретан  30х500 мм</description>
</offer>
<offer id="48001" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kislota_shchavelevaya_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1014</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Кислота щавелевая ЧДА</name>
<description>Кислота щавелевая ЧДА </description>
</offer>
<offer id="48003" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/benzol_khch_st_but_0_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>408</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/25a/sn30811uw16c2imovtjr9bj0zlrwgh7r.jpg</picture>
<name>Бензол ХЧ ст/бут 0,9 кг Экос-1</name>
<description>Бензол ХЧ ст/бут 0,9 кг Экос-1</description>
</offer>
<offer id="48017" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_32_50_9_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>15.4</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/862/xywmh31dyv97151v9mbwmb51m954oy5e.jpeg</picture>
<name>Хомут червячный  32-50/9 W2</name>
<description>Хомут червячный  32-50/9 W2</description>
</offer>
<offer id="48024" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/butilatsetat_khch_pl_kan_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>549</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b76/njn8gvaqmccfqtsapdqucd3xh8jhhsxb.jpg</picture>
<name>Бутилацетат ХЧ пл/кан 9 кг Экос-1</name>
<description>Бутилацетат ХЧ пл/кан 9 кг Экос-1</description>
</offer>
<offer id="48112" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_po_rzhav_korichnevyy_gladkaya_ral8017_zh_b_2_l_dali/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2500</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 по ржав коричневый гладкая RAL8017 ж/б 2 л DALI</name>
<description>Грунт-эмаль 3 в 1 по ржав коричневый гладкая RAL8017 ж/б 2 л DALI</description>
</offer>
<offer id="48118" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_indosingl_pu_80_ral5010_bar_27_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Индосингл ПУ 80 RAL5010 бар 27 кг</name>
<description>Грунт-эмаль Индосингл ПУ 80 RAL5010 бар 27 кг</description>
</offer>
<offer id="48119" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_indosingl_pu_80_ral5015_bar_27_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Индосингл ПУ 80 RAL5015 бар 27 кг</name>
<description>Грунт-эмаль Индосингл ПУ 80 RAL5015 бар 27 кг</description>
</offer>
<offer id="48120" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_indosingl_pu_80_ral7045_bar_27_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Индосингл ПУ 80 RAL7045 бар 27 кг</name>
<description>Грунт-эмаль Индосингл ПУ 80 RAL7045 бар 27 кг</description>
</offer>
<offer id="48121" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_indosingl_pu_80_ral7047_bar_27_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Индосингл ПУ 80 RAL7047 бар 27 кг</name>
<description>Грунт-эмаль Индосингл ПУ 80 RAL7047 бар 27 кг</description>
</offer>
<offer id="48122" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_indosingl_pu_80_ral9003_bar_27_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль Индосингл ПУ 80 RAL9003 бар 27 кг</name>
<description>Грунт-эмаль Индосингл ПУ 80 RAL9003 бар 27 кг</description>
</offer>
<offer id="48164" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_signalno_sinyaya_ral_5005_bar_20_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>255</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 сигнально синяя RAL 5005 бар 20 кг </name>
<description>Грунт-эмаль 3 в 1 сигнально синяя RAL 5005 бар 20 кг </description>
</offer>
<offer id="48178" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_vika_60_oranzhevaya_295_zh_b_0_8_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4050</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль Vika 60 оранжевая 295 ж/б 0,8 кг</name>
<description>Эмаль Vika 60 оранжевая 295 ж/б 0,8 кг</description>
</offer>
<offer id="48179" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_vika_60_golubaya_425_zh_b_0_8_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>816</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль Vika 60 голубая 425 ж/б 0,8 кг</name>
<description>Эмаль Vika 60 голубая 425 ж/б 0,8 кг</description>
</offer>
<offer id="48220" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_khs_010_seryy_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>420</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<name>Грунт ХС-010 серый бар 20 кг</name>
<description>Грунт ХС-010 серый бар 20 кг</description>
</offer>
<offer id="48236" available="true">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_pt_list_15kh1000kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>530</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d23/ukt7umvgfv9j33xqybiisxd7p29afbs3.jpeg</picture>
<name>Текстолит ПТ лист 15х1000х1000 мм</name>
<description>Текстолит ПТ лист 15х1000х1000 мм </description>
</offer>
<offer id="48266" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/areometr_aon_1_1120_1180/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1753</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Ареометр АОН-1 1120-1180</name>
<description>Ареометр АОН-1 1120-1180</description>
</offer>
<offer id="48268" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/butilatsetat_ch_pl_kan_9_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>506</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eb6/0ehymtdzgxkehdvfa14y2j2zoybtyjd7.jpg</picture>
<name>Бутилацетат Ч пл/кан 9 кг Экос-1</name>
<description>Бутилацетат Ч пл/кан 9 кг Экос-1</description>
</offer>
<offer id="48283" available="true">
<url>http://himopttorg.ru/catalog/paronit/paronit_pa_2_0_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<name>Паронит ПА 2,0  мм ВАТИ</name>
<description>Паронит ПА 2,0  мм ВАТИ</description>
</offer>
<offer id="48297" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_10_mm_1500kh1700_tosp/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>27600</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<name>Оргстекло 10 мм 1500х1700 ТОСП</name>
<description>Оргстекло 10 мм 1500х1700 ТОСП</description>
</offer>
<offer id="48312" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_khoz_lateksnye_dr_klin_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/113/fgc9kw225nbnrm86nbprmfc3otiepz2j.jpeg</picture>
<name>Перчатки хоз латексные Др.Клин  М</name>
<description>Перчатки хоз латексные Др.Клин  М</description>
</offer>
<offer id="48315" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>734</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1d9/m0jwyr5hmga50ly4cyseoz8xhg5ix3tp.jpeg</picture>
<name>Шнур резиновый МБС  5 мм</name>
<description>Шнур резиновый МБС  5 мм</description>
</offer>
<offer id="48316" available="false">
<url>http://himopttorg.ru/catalog/polotno_kh_proshivnoe_1/polotno_kh_proshivnoe_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4986</price>
<currencyId>RUB</currencyId>
<categoryId>3319</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2c1/i92gej0sge0onp9g12ipu31m0wbbf0gb.jpeg</picture>
<name>Полотно х-прошивное </name>
<description>Полотно х-прошивное </description>
</offer>
<offer id="48318" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/propanol_ch_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>450</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a8a/hofgeryhrstasfxs0yl4vmbpxe9fpext.jpeg</picture>
<name>Пропанол Ч пл/кан 8 кг (10 л) Экос-1</name>
<description>Пропанол Ч пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="48319" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_6_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>406</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/afc/fgw22aldrluidxr28tqxvnc4jh8nbn06.jpg</picture>
<name>Рукав всасывающий Б  38 мм 6 м гр 1  Химтекс</name>
<description>Рукав всасывающий Б  38 мм 6 м гр 1  Химтекс</description>
</offer>
<offer id="48320" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/35d/lfgc4mo7sknpc4fnc5n1e2gj3capkdql.jpeg</picture>
<name>Рукав всасывающий Б  38 мм 4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  38 мм 4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="48321" available="true">
<url>http://himopttorg.ru/catalog/polotno_kh_proshivnoe_1/polotno_kh_proshivnoe_1_5_m_kh_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5253</price>
<currencyId>RUB</currencyId>
<categoryId>3319</categoryId>
<name>Полотно х-прошивное (1,5 м х 50 м)</name>
<description>Полотно х-прошивное (1,5 м х 50 м)</description>
</offer>
<offer id="48323" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_1000_3bknl_65_2_2_0_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2132</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<name>Лента кон 1000-3БКНЛ-65-2-2/0  5 мм</name>
<description>Лента кон 1000-3БКНЛ-65-2-2/0  5 мм</description>
</offer>
<offer id="48325" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_80_mm_0_5_mpa_mbs_siniy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1013</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7e9/g1wqf5ck14uy0wwtqnt8cfwf0k2jteoo.jpg</picture>
<name>Шланг нап всас ПВХ 80 мм 0,5 МПа МБС синий</name>
<description>Шланг нап всас ПВХ 80 мм 0,5 МПа МБС синий</description>
</offer>
<offer id="48328" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_rezinovyy_mbs_1_4s_40_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>772</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<name>Шнур резиновый МБС 1-4с 40 мм </name>
<description>Шнур резиновый МБС 1-4с 40 мм </description>
</offer>
<offer id="48329" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/belizna_1000ml_ekomil/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>35.8</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2f3/0lvlslu3n703dw4ktuuvgpd4z7fmpryh.jpg</picture>
<name>Белизна 1000мл экомил</name>
<description>Белизна 1000мл экомил</description>
</offer>
<offer id="48330" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_50kh69_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>659</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d81/1popexh6nv36g3ajg0thn3kc0n2oup7i.gif</picture>
<name>Рукав пневматический Г 50х69 мм 1,0 МПа Химтекс</name>
<description>Рукав пневматический Г 50х69 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="48331" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_b_2/rukav_napornyy_b_20kh31_mm_1_0_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>267</price>
<currencyId>RUB</currencyId>
<categoryId>3324</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6bc/ir6a70dgyytpgxj7za6sykhyjrunwlwb.gif</picture>
<name>Рукав напорный Б  20х31 мм 1,0 МПа Химтекс</name>
<description>Рукав напорный Б  20х31 мм 1,0 МПа Химтекс</description>
</offer>
<offer id="48332" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_b_2/rukav_napornyy_b_25kh36_mm_0_63_mpa_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>276</price>
<currencyId>RUB</currencyId>
<categoryId>3324</categoryId>
<picture>http://himopttorg.ru/upload/iblock/11c/i1ucr3602p0agoq9swbbc840f1zd1asn.gif</picture>
<name>Рукав напорный Б  25х36 мм 0,63 МПа Химтекс</name>
<description>Рукав напорный Б  25х36 мм 0,63 МПа Химтекс</description>
</offer>
<offer id="48334" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>381</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f9d/u98xi6scjz1t2ohqjqzpv90lgx8wtnpp.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  25 мм 4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="48336" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_4_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>475</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bb7/uvif8q0jowo5k48wfgct1hfog6fyigy8.jpeg</picture>
<name>Рукав всасывающий Б  32 мм 4 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  32 мм 4 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="48337" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_6_m_gr_2_r_3_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>753</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f1f/ihmhcrfqktafhm1k6edyhcpg0izhp5wc.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  6 м гр 2 р-3 Химтекс</name>
<description>Рукав всасывающий Б  50 мм  6 м гр 2 р-3 Химтекс</description>
</offer>
<offer id="48338" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_6_m_gr_2_r_10_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>643</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd2/eo2zqn3531hpzmxxt025nibsnv1duq9n.jpg</picture>
<name>Рукав всасывающий В  50 мм  6 м гр 2 р-10 Химтекс</name>
<description>Рукав всасывающий В  50 мм  6 м гр 2 р-10 Химтекс</description>
</offer>
<offer id="48342" available="true">
<url>http://himopttorg.ru/catalog/remni_klinovye_1/remen_klinovoy_3lxp_825/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>221</price>
<currencyId>RUB</currencyId>
<categoryId>3325</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a13/gns050a427kk3t177ffd6c1ih6tosd09.jpeg</picture>
<name>Ремень клиновой 3LXP 825</name>
<description>Ремень клиновой 3LXP 825</description>
</offer>
<offer id="48343" available="true">
<url>http://himopttorg.ru/catalog/remni_klinovye_1/remen_klinovoy_spa_875_lp/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>91</price>
<currencyId>RUB</currencyId>
<categoryId>3325</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b7d/awa16vacelvzh0w0fsrbavso4klew3bs.jpeg</picture>
<name>Ремень клиновой SPА-875 Lp</name>
<description>Ремень клиновой SPА-875 Lp</description>
</offer>
<offer id="48344" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_16_mm_1000kh1000_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/885/8envznrhkexlw6j33ty3v5dj2r2m3uwg.jpg</picture>
<name>Пластина ТМКЩ 16 мм 1000х1000 СПИ</name>
<description>Пластина ТМКЩ 16 мм 1000х1000 СПИ</description>
</offer>
<offer id="48345" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1500_5000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/23a/8fd9dknmfeafagscjli3qs2c3efoyijb.jpeg</picture>
<name>Автодорожка пятачковая 1500*5000*5 мм СПИ</name>
<description>Автодорожка пятачковая 1500*5000*5 мм СПИ</description>
</offer>
<offer id="48347" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kolba_kn_2_250_50_s_deleniem/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>466</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Колба КН-2-250-50 с делением</name>
<description>Колба КН-2-250-50 с делением</description>
</offer>
<offer id="48350" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_kosoy_rubchik_1500_10000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cf7/bh89n68wz1lm6vrg0gx1fag0nweka1nm.jpeg</picture>
<name>Автодорожка косой рубчик 1500*10000*5 мм СПИ</name>
<description>Автодорожка косой рубчик 1500*10000*5 мм СПИ</description>
</offer>
<offer id="48351" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/izobutilovyy_spirt_chda_st_but_0_8_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>433</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f45/ftt9wks848oba7k0ddclvmrahmd5bzlj.jpg</picture>
<name>Изобутиловый спирт ЧДА ст/бут 0,8 кг Экос-1</name>
<description>Изобутиловый спирт ЧДА ст/бут 0,8 кг Экос-1</description>
</offer>
<offer id="48352" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_150_mm_4_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3306</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8e6/umzlq7rg13uwqevbrxl53qpomv9k4rkt.jpeg</picture>
<name>Рукав всасывающий В 150 мм  4 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий В 150 мм  4 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="48353" available="true">
<url>http://himopttorg.ru/catalog/lopaty_i_metly/lopata_sovkovaya_relsovaya_stal_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>275</price>
<currencyId>RUB</currencyId>
<categoryId>3138</categoryId>
<name>Лопата совковая рельсовая сталь </name>
<description>Лопата совковая рельсовая сталь </description>
</offer>
<offer id="48355" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_poliester_na_pvkh_58kh88smkh9_mm_sero_chern/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>592</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/dfc/isnr5e3qgmu432pj6pnweqoyatbxkhk4.jpeg</picture>
<name>Коврик полиэстер на ПВХ 58х88смх9 мм серо-черн</name>
<description>Коврик полиэстер на ПВХ 58х88смх9 мм серо-черн</description>
</offer>
<offer id="48356" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_poliester_na_pvkh_58kh88smkh9_mm_korich_chern/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>592</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e2b/qb8vhzykvr24cm8diq0o3oah7npnugnv.jpeg</picture>
<name>Коврик полиэстер на ПВХ 58х88смх9 мм корич-черн</name>
<description>Коврик полиэстер на ПВХ 58х88смх9 мм корич-черн</description>
</offer>
<offer id="48357" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_shchetinistyy_travka_45sm_kh_60sm_kh_12mm_zelenyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>161</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик щетинистый &quot;Травка&quot;  45см х 60см х 12мм зеленый</name>
<description>Коврик щетинистый &quot;Травка&quot;  45см х 60см х 12мм зеленый</description>
</offer>
<offer id="48358" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_6_mm_1_2kh4_m_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/00b/jqtkr43wqkgirccvak7w3v4sa8gegs4g.gif</picture>
<name>Пластина ТМКЩ  6 мм 1,2х4 м СПИ</name>
<description>Пластина ТМКЩ  6 мм 1,2х4 м СПИ</description>
</offer>
<offer id="48359" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_kosoy_rubchik_1500_5000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/14c/0ya54w2gn5mik4mnu9tk72q88ybcba6y.jpeg</picture>
<name>Автодорожка косой рубчик 1500*5000*5 мм СПИ</name>
<description>Автодорожка косой рубчик 1500*5000*5 мм СПИ</description>
</offer>
<offer id="48360" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1500_5000_4_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7f9/ziqjmdykmdgtsltyty1ietuaqvcsc9pw.jpeg</picture>
<name>Автодорожка пятачковая 1500*5000*4 мм СПИ</name>
<description>Автодорожка пятачковая 1500*5000*4 мм СПИ</description>
</offer>
<offer id="48361" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_kosoy_rubchik_1500_5000_4_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5af/rz282ex3buvmx87iquh43tgho3wbn6gx.jpeg</picture>
<name>Автодорожка косой рубчик 1500*5000*4 мм СПИ</name>
<description>Автодорожка косой рубчик 1500*5000*4 мм СПИ</description>
</offer>
<offer id="48362" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_200_mm_agro_elastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5165</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd6/xtlt24kuyxnchuudu05eyul207z90p68.jpeg</picture>
<name>Шланг нап всас ПВХ 200 мм  Агро Эластик</name>
<description>Шланг нап всас ПВХ 200 мм  Агро Эластик</description>
</offer>
<offer id="48363" available="true">
<url>http://himopttorg.ru/catalog/emali_pfs_strela/emal_pfs_strela_sv_ser_ral_7047_bar_45_kg_yaroslavl/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>340</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5c2/s76dvwjvd92dcw303zrz3nys06kulbfc.png</picture>
<name>Эмаль ПФС Стрела св сер RAL 7047 бар 45 кг Ярославль</name>
<description>Эмаль ПФС Стрела св сер RAL 7047 бар 45 кг Ярославль</description>
</offer>
<offer id="48364" available="false">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_a_list_5kh1000kh1000_mm_gost_2910_74/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<name>Текстолит А лист 5х1000х1000 мм ГОСТ 2910-74</name>
<description>Текстолит А лист 5х1000х1000 мм ГОСТ 2910-74</description>
</offer>
<offer id="48365" available="false">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_a_list_10kh1000kh1000_mm_gost_2910_74/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<name>Текстолит А лист 10х1000х1000 мм ГОСТ 2910-74</name>
<description>Текстолит А лист 10х1000х1000 мм ГОСТ 2910-74</description>
</offer>
<offer id="48366" available="false">
<url>http://himopttorg.ru/catalog/tekstolit/tekstolit_a_list_2kh1000kh1000_mm_gost_2910_74/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>780</price>
<currencyId>RUB</currencyId>
<categoryId>210</categoryId>
<name>Текстолит А лист 2х1000х1000 мм ГОСТ 2910-74</name>
<description>Текстолит А лист 2х1000х1000 мм ГОСТ 2910-74</description>
</offer>
<offer id="48367" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_kh_b_6_ti_nitka_s_pkhv_lyuks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>23</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a76/oow5iyg1mino9yaak7iq43e1hc6orgog.jpeg</picture>
<name>Перчатки х/б 6-ти нитка с пхв ЛЮКС</name>
<description>Перчатки х/б 6-ти нитка с пхв ЛЮКС</description>
</offer>
<offer id="48368" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_sanoks_gel_750_ml_ot_rzhavchiny/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>170</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство САНОКС ГЕЛЬ  750 мл от ржавчины</name>
<description>Моющее средство САНОКС ГЕЛЬ  750 мл от ржавчины</description>
</offer>
<offer id="48369" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_belaya_zh_b_2_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1206</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль МЛ-12 белая ж/б 2 кг LIDA</name>
<description>Эмаль МЛ-12 белая ж/б 2 кг LIDA</description>
</offer>
<offer id="48373" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_8_12_9_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>9.2</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<name>Хомут червячный  8-12/9 W2</name>
<description>Хомут червячный  8-12/9 W2 </description>
</offer>
<offer id="48375" available="false">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_pomol_3_mkr_1_tn/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>13.5</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль помол № 3 МКР 1 тн</name>
<description>Соль помол № 3 МКР 1 тн</description>
</offer>
<offer id="48377" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_2_mm_2050kh3050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>8100</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/69f/o2j6wu15of5q34wn4w6o0sron308aopa.jpeg</picture>
<name>Оргстекло  2 мм 2050х3050 ACRYMA</name>
<description>Оргстекло  2 мм 2050х3050 ACRYMA</description>
</offer>
<offer id="48378" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_5_mm_2050kh3050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>20500</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/14b/4q5adulpah67qyxvazen5ocdu70z50x8.jpeg</picture>
<name>Оргстекло  5 мм 2050х3050 ACRYMA</name>
<description>Оргстекло  5 мм 2050х3050 ACRYMA</description>
</offer>
<offer id="48379" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_ne_arm_5_0kh1_0_mm_pishchevaya_100m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>14.4</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3cb/az2gw108el4zgo07gw61569a24einfek.jpeg</picture>
<name>Трубка не арм  5,0х1,0 мм пищевая 100м</name>
<description>Трубка не арм  5,0х1,0 мм пищевая 100м</description>
</offer>
<offer id="48380" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_100_mm_10_m_gr_2_r_3_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1110</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8a7/n7hvhh9n6c9vilvx0hgxh73nnuvvkjd4.jpeg</picture>
<name>Рукав всасывающий Б 100 мм  10 м гр 2 р-3 СЗРТ</name>
<description>Рукав всасывающий Б 100 мм  10 м гр 2 р-3 СЗРТ</description>
</offer>
<offer id="48381" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_25_mm_10_m_gr_2_r_3_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>341</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/174/6sgaqjsmkao1zd12v2kzg0t4mr3i3vn3.jpeg</picture>
<name>Рукав всасывающий Б  25 мм 10 м гр 2 р-3 Химтекс</name>
<description>Рукав всасывающий Б  25 мм 10 м гр 2 р-3 Химтекс</description>
</offer>
<offer id="48382" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khs_436_zheltaya_kompl_s_otver_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>435</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/543/fobru8k1cb75n3erazemfuuis83n20wf.jpg</picture>
<name>Эмаль ХС-436 желтая компл с отвер 20 кг</name>
<description>Эмаль ХС-436 желтая компл с отвер 20 кг</description>
</offer>
<offer id="48383" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_kosoy_rubchik_1200_10000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fa7/astxeg63topa9pf3dtieoxtky68h291k.jpeg</picture>
<name>Автодорожка косой рубчик 1200*10000*5 мм СПИ</name>
<description>Автодорожка косой рубчик 1200*10000*5 мм СПИ</description>
</offer>
<offer id="48387" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_10_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4b8/wq7hu1ryl9c0uppi9s8zy843fotmn3hr.gif</picture>
<name>Пластина МБС 10 мм СЗР</name>
<description>Пластина МБС 10 мм СЗР</description>
</offer>
<offer id="48388" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_30_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/597/zixtvll7rj1wfuxxlx2xkz4be2ynvcv0.gif</picture>
<name>Пластина МБС 30 мм СЗР</name>
<description>Пластина МБС 30 мм СЗР</description>
</offer>
<offer id="48389" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_75_mm_10_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>979</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b95/e9q296qibnx94xcmllggz8rgaia9hbjq.jpeg</picture>
<name>Рукав всасывающий КЩ  75 мм 10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий КЩ  75 мм 10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="48396" available="false">
<url>http://himopttorg.ru/catalog/kaltsiy_khloristyy_/kaltsiy_khloristyy_pishchevoy_p_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>70</price>
<currencyId>RUB</currencyId>
<categoryId>302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/325/tmqmb11vlvxchhwq5kucvwdy77xzqgp3.jpeg</picture>
<name>Кальций хлористый пищевой п/меш 25 кг</name>
<description>Кальций хлористый пищевой п/меш 25 кг</description>
</offer>
<offer id="48398" available="false">
<url>http://himopttorg.ru/catalog/kaltsiy_khloristyy_/kaltsiy_khloristyy_tekhn_p_mesh_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>66</price>
<currencyId>RUB</currencyId>
<categoryId>302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d41/bhb1w4j1120n5l3kct4xx03m880y5u9a.gif</picture>
<name>Кальций хлористый техн. п/меш 25 кг </name>
<description>Кальций хлористый техн. п/меш 25 кг </description>
</offer>
<offer id="48399" available="false">
<url>http://himopttorg.ru/catalog/kaltsiy_khloristyy_/kaltsiy_khloristyy_tekhn_p_mesh_50_kg_iran/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>66</price>
<currencyId>RUB</currencyId>
<categoryId>302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/acc/9u22s98jr0ypn0pxdb1nw86egz5aokod.gif</picture>
<name>Кальций хлористый техн. п/меш 50 кг Иран</name>
<description>Кальций хлористый техн. п/меш 50 кг Иран</description>
</offer>
<offer id="48401" available="true">
<url>http://himopttorg.ru/catalog/kaltsiy_khloristyy_/kaltsiy_khloristyy_tekhn_p_mesh_25_kg_volgograd/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>50</price>
<currencyId>RUB</currencyId>
<categoryId>302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d6e/6itj5c6o10xxy2o5n9jw3p0dr5mio13i.jpg</picture>
<name>Кальций хлористый техн. п/меш 25 кг Волгоград</name>
<description>Кальций хлористый техн. п/меш 25 кг Волгоград</description>
</offer>
<offer id="48402" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_600_3tk200_2_3_1_5_2l_rb_7_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/84f/flw8ead186wf7kexviiguo7byo82h3ue.jpg</picture>
<name>Лента кон 600-3ТК200-2-3-1,5 2Л РБ 7,5 мм</name>
<description>Лента кон 600-3ТК200-2-3-1,5 2Л РБ </description>
</offer>
<offer id="48403" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_1500_2tk200_2_2_1_tip_2l_nb_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4054</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/811/vll1vvr109iel4rqfl5xp6wnwffrtojt.jpg</picture>
<name>Лента кон 1500-2ТК200-2-2-1 тип 2Л НБ</name>
<description>Лента кон 1500-2ТК200-2-2-1 тип 2Л НБ</description>
</offer>
<offer id="48407" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_20_mm_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>225</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/15c/0rbvh5kkpo1bcurlfsqw73rz6gxdv0m7.gif</picture>
<name>Пластина МБС 20 мм СЗР</name>
<description>Пластина МБС 20 мм СЗР</description>
</offer>
<offer id="48408" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_500_2tk200_2_3_1_2l_nb_6_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1547</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/42e/4yaxc2zumm25vdhrdr4867ywl2up7r09.jpg</picture>
<name>Лента кон  500-2ТК200-2-3-1 2Л НБ  6,5 мм</name>
<description>Лента кон  500-2ТК200-2-3-1 2Л НБ </description>
</offer>
<offer id="48409" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_6_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>475</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/047/zsm5o10vke2atn4ah3d28a9wcmwobahy.jpeg</picture>
<name>Рукав всасывающий Б  32 мм 6 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  32 мм 6 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="48410" available="false">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_krasnaya_bar_40_kg_kazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>425</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро красная бар 40 кг Казань</name>
<description>Эмаль НЦ-132 нитро красная бар 40 кг Казань</description>
</offer>
<offer id="48411" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_125_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/82d/0b9xmu0w6ypjmg0us9oq1ksm7ru643up.jpeg</picture>
<name>Рукав всасывающий В 125 мм  4 м гр 1 Химтекс</name>
<description>Рукав всасывающий В 125 мм  4 м гр 1 Химтекс</description>
</offer>
<offer id="48412" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_125_mm_6_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1782</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9f6/auvnrubbxq9poyml326q39xi3dkxkss2.jpeg</picture>
<name>Рукав всасывающий В 125 мм  6 м гр 1 Химтекс</name>
<description>Рукав всасывающий В 125 мм  6 м гр 1 Химтекс</description>
</offer>
<offer id="48414" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_seraya_bar_40_kg_kazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>403</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро серая бар 40 кг Казань</name>
<description>Эмаль НЦ-132 нитро серая бар 40 кг Казань</description>
</offer>
<offer id="48415" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_zelenaya_zh_b_0_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>289</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a13/b77x6mjtrp8f725fy6fx2co97bgrwfej.jpeg</picture>
<name>Грунт-эмаль по ржав зеленая ж/б 0,9 кг</name>
<description>Грунт-эмаль по ржав зеленая ж/б 0,9 кг</description>
</offer>
<offer id="48416" available="false">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_3_mm_2050kh3050_acryma/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>13500</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<picture>http://himopttorg.ru/upload/iblock/887/fdwgarfdzpc93yoki75xg099y10s94c9.jpeg</picture>
<name>Оргстекло  3 мм 2050х3050 ACRYMA</name>
<description>Оргстекло  3 мм 2050х3050 ACRYMA</description>
</offer>
<offer id="48417" available="false">
<url>http://himopttorg.ru/catalog/atseton_1/atseton_chda_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>339</price>
<currencyId>RUB</currencyId>
<categoryId>3351</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1fa/ibdg4xue7vzkynslljgk2gwjwa8pnzap.jpg</picture>
<name>Ацетон ЧДА пл/кан 8 кг (10 л) Экос-1</name>
<description>Ацетон ЧДА пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="48418" available="false">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/izobutilovyy_spirt_ch_pl_kan_8_kg_10_l_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>300</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d19/599e9fr10io4ka8qs8rf5o27fnqf0ceg.jpg</picture>
<name>Изобутиловый спирт Ч пл/кан 8 кг (10 л) Экос-1</name>
<description>Изобутиловый спирт Ч пл/кан 8 кг (10 л) Экос-1</description>
</offer>
<offer id="48419" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t202_1_60kh90_sm_8mm_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>356</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/79e/tbuquptn49s4t53we4fb1pde3xxidk2x.jpg</picture>
<name>Коврик влаговпитывающий Т202/1 60х90 см 8мм серый</name>
<description>Коврик влаговпитывающий Т202/1 60х90 см 8мм серый</description>
</offer>
<offer id="48420" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t202_1_80kh120_sm_8mm_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>651</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/45d/32t7jjulxttujw01lvqvppotf8p89x3z.jpg</picture>
<name>Коврик влаговпитывающий Т202/1 80х120 см 8мм серый</name>
<description>Коврик влаговпитывающий Т202/1 80х120 см 8мм серый</description>
</offer>
<offer id="48421" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t202_2_50kh80_sm_8mm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>270</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/05a/wetzjv5ynr5bisn4rj2h0jsjz5ezggtw.jpg</picture>
<name>Коврик влаговпитывающий Т202/2 50х80 см 8мм коричневый</name>
<description>Коврик влаговпитывающий Т202/2 50х80 см 8мм коричневый</description>
</offer>
<offer id="48422" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t202_2_80kh120_sm_8mm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>651</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/26c/tj0eawg78i2szzcg73f7bfdu1p6osscg.jpg</picture>
<name>Коврик влаговпитывающий Т202/2 80х120 см 8мм коричневый</name>
<description>Коврик влаговпитывающий Т202/2 80х120 см 8мм коричневый</description>
</offer>
<offer id="48423" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t202_2_90kh150_sm_8mm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>917</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/84b/j78qbnk0zckn641qidpsn2lmwvytr39j.jpg</picture>
<name>Коврик влаговпитывающий Т202/2 90х150 см 8мм коричневый</name>
<description>Коврик влаговпитывающий Т202/2 90х150 см 8мм коричневый</description>
</offer>
<offer id="48424" available="false">
<url>http://himopttorg.ru/catalog/kaprolon/poliamid_pa_6_kaprolon_sterzh_110kh1000mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>480</price>
<currencyId>RUB</currencyId>
<categoryId>206</categoryId>
<picture>http://himopttorg.ru/upload/iblock/366/275her5tqfnzdtxr6rj9e5smphu9q6eu.jpeg</picture>
<name>Полиамид ПА 6 (капролон) стерж 110х1000мм</name>
<description>Полиамид ПА 6 (капролон) стерж 110х1000мм </description>
</offer>
<offer id="48425" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_30kh37_mm_0_6_mpa_700n_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c03/1rvtpaoiyrimkcxpx7hbguf1cby6g5qe.jpeg</picture>
<name>Шланг нап всас ПВХ 30х37 мм 0,6 МПа 700N МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 30х37 мм 0,6 МПа 700N МПТ-Пластик</description>
</offer>
<offer id="48426" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_kosoy_rubchik_1200_5000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/968/wzysf0zh5se1qoxaagydcas616a4efnj.jpeg</picture>
<name>Автодорожка косой рубчик 1200*5000*5 мм СПИ</name>
<description>Автодорожка косой рубчик 1200*5000*5 мм СПИ</description>
</offer>
<offer id="48427" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1200_5000_5_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/371/jbyu6hf7ufstpw1b24ogc5wnr36a743t.jpeg</picture>
<name>Автодорожка пятачковая 1200*5000*5 мм СПИ</name>
<description>Автодорожка пятачковая 1200*5000*5 мм СПИ</description>
</offer>
<offer id="48428" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_6_mm_spi_1_2kh4_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c87/vnxw4gm2njda1p77uvkltl85gzboptez.gif</picture>
<name>Пластина МБС  6 мм  СПИ 1,2х4 м</name>
<description>Пластина МБС  6 мм  СПИ </description>
</offer>
<offer id="48429" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_50_mm_6_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>685</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/73d/m180vux7465ozjbi5kgpd2umsigdiqd0.jpeg</picture>
<name>Рукав всасывающий В  50 мм  6 м гр 1 СЗРТ</name>
<description>Рукав всасывающий В  50 мм  6 м гр 1 СЗРТ</description>
</offer>
<offer id="48430" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_20kh29_mm_1_6_mpa_gib_dorn_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>255</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/db8/ez0hrh98qejgf4ddrqkesj5gbyjb7016.jpeg</picture>
<name>Рукав с нит опл 20х29 мм 1,6 МПа гиб. дорн СЗР</name>
<description>Рукав с нит опл 20х29 мм 1,6 МПа гиб. дорн СЗР</description>
</offer>
<offer id="48431" available="true">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_25kh35_mm_1_6_mpa_gib_dorn_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>305</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6e7/w5uplln3yxcrz1kmrvcnwpxew49vu2v2.jpeg</picture>
<name>Рукав с нит опл 25х35 мм 1,6 МПа гиб. дорн СЗР</name>
<description>Рукав с нит опл 25х35 мм 1,6 МПа гиб. дорн СЗР</description>
</offer>
<offer id="48432" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_plast_6kh500kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<name>Фторопласт пласт  6х500х500 мм</name>
<description>Фторопласт пласт  6х500х500 мм</description>
</offer>
<offer id="48433" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132p_nitro_chernaya_bar_45_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>410</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132П нитро черная бар 45 кг </name>
<description>Эмаль НЦ-132П нитро черная бар 45 кг </description>
</offer>
<offer id="48434" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/salfetka_mikrofibra_30kh30_up_3_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>83.3</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Салфетка микрофибра 30х30 (уп 3 шт)</name>
<description>Салфетка микрофибра 30х30 (уп 3 шт)</description>
</offer>
<offer id="48435" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_100_120_9_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>96.4</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/673/dk2ly0ng6qg2bnk2u0ak2izhn45f50ol.jpeg</picture>
<name>Хомут червячный  100-120/9 W1</name>
<description>Хомут червячный  100-120/9 W1</description>
</offer>
<offer id="48436" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_6_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7ce/hy8grey6x7e0b3cu4tsraadsgbcdo42k.jpeg</picture>
<name>Рукав всасывающий Б  38 мм 6 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  38 мм 6 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="48437" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/glitserin_ch_1_25_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>480</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Глицерин Ч 1,25 кг </name>
<description>Глицерин Ч 1,25 кг </description>
</offer>
<offer id="48438" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1200_10000_4_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c4f/9d0xiij8ykb8fsiybhjx5s2ehlgogptw.jpeg</picture>
<name>Автодорожка пятачковая 1200*10000*4 мм СПИ</name>
<description>Автодорожка пятачковая 1200*10000*4 мм СПИ</description>
</offer>
<offer id="48439" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_76_mm_s_met_spiralyu/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2970</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/50f/81cnb7n3skwr0j7gwrqd5lw1fminte11.jpeg</picture>
<name>Шланг ПВХ 76 мм с мет спиралью</name>
<description>Шланг ПВХ 76 мм с мет спиралью</description>
</offer>
<offer id="48440" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_131_139_24_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>241</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1b2/6gok06umip40eksbnf2blnwukkf7sqiw.jpg</picture>
<name>Хомут силовой одноболтовый 131-139/24 W2</name>
<description>Хомут силовой одноболтовый 131-139/24 W2</description>
</offer>
<offer id="48441" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_dvukhboltovyy_130_150_24_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>780</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<name>Хомут силовой двухболтовый 130-150/24 W2</name>
<description>Хомут силовой двухболтовый 130-150/24 W2</description>
</offer>
<offer id="48442" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_3_9_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>687</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ff5/pcu7mq0jxkrr2nt4yz037hufjrnr72lh.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  3,9 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  50 мм  3,9 м гр 1 Химтекс</description>
</offer>
<offer id="48443" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_3_7_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>687</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/56f/ef5w9kwy7ziqhqywa44oyp1ixy3wrf8k.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  3,7 м гр 1 Химтекс</name>
<description>Рукав всасывающий Б  50 мм  3,7 м гр 1 Химтекс</description>
</offer>
<offer id="48444" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/shchetka_provolochnaya_latunnaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>123</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Щетка проволочная латунная</name>
<description>Щетка проволочная латунная</description>
</offer>
<offer id="48445" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_po_rzhav_b_sokhn_m_ral7024_bar_20_kg_corrnet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>396</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 по ржав б/сохн М RAL7024 бар 20 кг Corrnet</name>
<description>Грунт-эмаль 3 в 1 по ржав б/сохн М RAL7024 бар 20 кг Corrnet</description>
</offer>
<offer id="48446" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_zheltyy_25_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e5e/z3y106104zrlryvkwvl56jqexy4xpmok.jpg</picture>
<name>Шланг поливочный ТЭП 1/2&quot;  12,5 мм желтый 25 м</name>
<description>Шланг поливочный ТЭП 1/2&quot;  12,5 мм желтый 25 м</description>
</offer>
<offer id="48447" available="true">
<url>http://himopttorg.ru/catalog/shlangi_polivochnye/shlang_polivochnyy_tep_1_2_12_5_mm_fioletovyy_50_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>http://himopttorg.ru/upload/iblock/983/7p02qpz61tj2v2gpt8mwb8lk2o3dr9q6.jpg</picture>
<name>Шланг поливочный ТЭП 1/2&quot; 12,5 мм фиолетовый 50 м</name>
<description>Шланг поливочный ТЭП 1/2&quot; 12,5 мм фиолетовый 50 м</description>
</offer>
<offer id="48448" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl100kh113_mm_1_0_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1750</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4d6/51tb0q98k68cnakjwlpv8vk9kftuizdo.jpeg</picture>
<name>Рукав с нит опл100х113 мм 1,0 МПа КРТ</name>
<description>Рукав с нит опл100х113 мм 1,0 МПа КРТ</description>
</offer>
<offer id="48449" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_pvkh_19_mm_3_4_dvoynoy_vyazanyy_karkas_25m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2606</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<name>Шланг ПВХ 19 мм (3/4) двойной вязаный каркас 25м</name>
<description>Шланг ПВХ 19 мм (3/4) двойной вязаный каркас 25м</description>
</offer>
<offer id="48450" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_100_mm_natur_mekh/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d60/sgy444et9ufvebz25mz3bgekq2id13er.jpeg</picture>
<name>Валик в сборе 100 мм натур мех</name>
<description>Валик в сборе 100 мм натур мех</description>
</offer>
<offer id="48451" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_po_rzhav_b_sokhn_m_ral7004_bar_20_kg_corrnet/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>385</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 по ржав б/сохн М RAL7004 бар 20 кг Corrnet</name>
<description>Грунт-эмаль 3 в 1 по ржав б/сохн М RAL7004 бар 20 кг Corrnet</description>
</offer>
<offer id="48452" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_ral_9003_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>450</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/0b1/ep06f4uwcmrvo59i6lrc3rrwssxb24tz.jpg</picture>
<name>Эмаль ПФ-115 RAL 9003 бар 25 кг</name>
<description>Эмаль ПФ-115 RAL 9003 бар 25 кг</description>
</offer>
<offer id="48453" available="false">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaliy_azotnokislyy_ch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>562</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ae2/dnjsp2rc6xu80vzvyzinzf3d5qb8a1oj.jpg</picture>
<name>Калий азотнокислый Ч</name>
<description>Калий азотнокислый Ч</description>
</offer>
<offer id="48454" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_100kh150kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3163</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 100х150х3 см</name>
<description>Коврик дезинфиц ЭКО 100х150х3 см</description>
</offer>
<offer id="48455" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_iz_reziny_45sm_kh_75sm_kh_12mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>648</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик из резины 45см х 75см х 12мм</name>
<description>Коврик из резины 45см х 75см х 12мм</description>
</offer>
<offer id="48456" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t202_5_120kh180_sm_8mm_temno_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1472</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/916/j56vnjbh0vmwdv9e0fic7enh9waxcdam.jpg</picture>
<name>Коврик влаговпитывающий Т202/5 120х180 см 8мм темно-серый</name>
<description>Коврик влаговпитывающий Т202/5 120х180 см 8мм темно-серый</description>
</offer>
<offer id="48457" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_poliester_na_pvkh_80kh120smkh9_mm_sero_chern/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b7e/vs7j3yaxojad606lzte8c04bnnhy7y31.jpeg</picture>
<name>Коврик полиэстер на ПВХ 80х120смх9 мм серо-черн</name>
<description>Коврик полиэстер на ПВХ 80х120смх9 мм серо-черн</description>
</offer>
<offer id="48458" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_3_v_1_po_rzhav_zelenyy_mokh_gladkaya_ral6005_zh_b_0_75_l_dali/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1100</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль 3 в 1 по ржав зеленый мох гладкая RAL6005 ж/б 0,75 л DALI</name>
<description>Грунт-эмаль 3 в 1 по ржав зеленый мох гладкая RAL6005 ж/б 0,75 л DALI</description>
</offer>
<offer id="48459" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_14_mm_1000kh1000_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>154</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/82d/e55630j1eotn85q3du92h6g72bvajr77.jpg</picture>
<name>Пластина ТМКЩ 14 мм 1000х1000 СПИ</name>
<description>Пластина ТМКЩ 14 мм 1000х1000 СПИ</description>
</offer>
<offer id="48460" available="false">
<url>http://himopttorg.ru/catalog/perekis_vodoroda/perekis_vodoroda_pl_kan_11_4_kg_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>92</price>
<currencyId>RUB</currencyId>
<categoryId>3115</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b8f/xcojbrhrnjxav40a9v9ewjtt44565se0.jpg</picture>
<name>Перекись водорода пл/кан 11,4 кг</name>
<description>Перекись водорода пл/кан 11,4 кг</description>
</offer>
<offer id="48461" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_1/smyvka_universalnaya_pl_but_0_5_l_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>3293</categoryId>
<name>Смывка универсальная пл/бут 0,5 л СПБ</name>
<description>Смывка универсальная пл/бут 0,5 л СПБ</description>
</offer>
<offer id="48462" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_ral7000_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>550</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль ХВ-0278 по ржав RAL7000 бар 20 кг</name>
<description>Грунт-эмаль ХВ-0278 по ржав RAL7000 бар 20 кг</description>
</offer>
<offer id="48463" available="true">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_khv_0278_po_rzhav_seryy_temnyy_u_bar_20_kg_ral7024_spb/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>396</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5ff/74hiji4bkgrv7dl156a5ww42njwr7kiv.png</picture>
<name>Грунт-эмаль ХВ-0278 по ржав серый темный У бар 20 кг RAL7024 СПб</name>
<description>Грунт-эмаль ХВ-0278 по ржав серый темный У бар 20 кг RAL7024 СПб</description>
</offer>
<offer id="48464" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_19_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>173</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/88c/pjzcr9f6t16u9w8jtptwho5bwf5ss5c5.jpg</picture>
<name>Шланг нап всас ПВХ 19 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 19 мм север зеленый -55С</description>
</offer>
<offer id="48465" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_50_mm_4_m_gr_1_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>725</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/63f/h8yqo379mgs4is9zpajyvh34xmkqehvu.jpeg</picture>
<name>Рукав всасывающий КЩ  50 мм 4 м гр 1 Кварт</name>
<description>Рукав всасывающий КЩ  50 мм 4 м гр 1 Кварт</description>
</offer>
<offer id="48466" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_25_mm_720kh720/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>262</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/51c/v7g3wl49depn6sxf7g064kx5m1o0t9tp.jpeg</picture>
<name>Пластина МБС 25 мм 720х720</name>
<description>Пластина МБС 25 мм 720х720</description>
</offer>
<offer id="48467" available="true">
<url>http://himopttorg.ru/catalog/manzhety/manzheta_armirovannaya_salnik_1_2_50kh70kh10_gost_8752_79/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>32.5</price>
<currencyId>RUB</currencyId>
<categoryId>327</categoryId>
<name>Манжета армированная (сальник) 1,2-50х70х10 ГОСТ 8752-79</name>
<description>Манжета армированная (сальник) 1,2-50х70х10 ГОСТ 8752-79</description>
</offer>
<offer id="48468" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/mureksid_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>39820</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Мурексид ЧДА</name>
<description>Мурексид ЧДА</description>
</offer>
<offer id="48469" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_so_95_k_2_mm_1170kh1340_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>16000</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<name>Оргстекло СО-95-К 2 мм 1170х1340 </name>
<description>Оргстекло СО-95-К 2 мм 1170х1340 </description>
</offer>
<offer id="48470" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_so_95_k_3_mm_1500kh1700_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>28800</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<name>Оргстекло СО-95-К 3 мм 1500х1700 </name>
<description>Оргстекло СО-95-К 3 мм 1500х1700 </description>
</offer>
<offer id="48471" available="true">
<url>http://himopttorg.ru/catalog/orgsteklo/orgsteklo_so_95_k_8_mm_1500kh1700_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>74300</price>
<currencyId>RUB</currencyId>
<categoryId>207</categoryId>
<name>Оргстекло СО-95-К 8 мм 1500х1700 </name>
<description>Оргстекло СО-95-К 8 мм 1500х1700 </description>
</offer>
<offer id="48473" available="true">
<url>http://himopttorg.ru/catalog/rukava_rvd/rukav_silikonovyy_6_mm_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>http://himopttorg.ru/upload/iblock/022/t2u3t1netstf6qpnio8u5him3cs8pvhd.jpeg</picture>
<name>Рукав силиконовый 6 мм </name>
<description>Рукав силиконовый 6 мм </description>
</offer>
<offer id="48474" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/rulon_pvkh_fms_50s_5_mm_0_9kh10_m_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>693</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f10/amqab3nuakfy4mdjbyegf9mxqprtp9po.jpg</picture>
<name>Рулон ПВХ FMS 50S 5 мм 0,9х10 м серый</name>
<description>Рулон ПВХ FMS 50S 5 мм 0,9х10 м серый</description>
</offer>
<offer id="48475" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_poliester_na_pvkh_80kh120smkh9_mm_korichnevo_chern/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b5b/901zd2ilamv7bsd6qpj1v1jq5yoqvu8a.jpeg</picture>
<name>Коврик полиэстер на ПВХ 80х120смх9 мм коричнево-черн</name>
<description>Коврик полиэстер на ПВХ 80х120смх9 мм коричнево-черн</description>
</offer>
<offer id="48476" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t100_5_40kh60_sm_6mm_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>126</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/99e/2x9n3u6psvuxljfo3nvjblzoe590tnju.jpg</picture>
<name>Коврик влаговпитывающий Т100/5 40х60 см 6мм серый</name>
<description>Коврик влаговпитывающий Т100/5 40х60 см 6мм серый</description>
</offer>
<offer id="48477" available="true">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_3/rukav_napornyy_iii_12_mm_2_mpa_kislorod_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>100</price>
<currencyId>RUB</currencyId>
<categoryId>244</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8d0/o0br1oz4mwfuof8gt1s5qjhp3zcfxmb0.jpg</picture>
<name>Рукав напорный III-12 мм 2 МПа кислород СЗРТ</name>
<description>Рукав напорный III-12 мм 2 МПа кислород СЗРТ</description>
</offer>
<offer id="48478" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_8_mm_spi_1_2kh4_m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>200</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a7a/x07cgpfi7u8i0y8ytnjceilmmps14cc2.gif</picture>
<name>Пластина МБС  8 мм  СПИ 1,2х4 м</name>
<description>Пластина МБС  8 мм  СПИ </description>
</offer>
<offer id="48479" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_arm_16_0kh3_0_mm_pishchevaya_50m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>94.7</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e69/etey5q7hol04r1t3s4i13dz92jotve7y.jpeg</picture>
<name>Трубка арм 16,0х3,0 мм пищевая 50м</name>
<description>Трубка арм 16,0х3,0 мм пищевая 50м</description>
</offer>
<offer id="48480" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/trubka_arm_18_0kh3_0_mm_pishchevaya_50m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>102</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>http://himopttorg.ru/upload/iblock/435/3z90wcghz3eme3nfnz6bwuuj1ha4cxm9.jpeg</picture>
<name>Трубка арм 18,0х3,0 мм пищевая 50м</name>
<description>Трубка арм 18,0х3,0 мм пищевая 50м</description>
</offer>
<offer id="48481" available="false">
<url>http://himopttorg.ru/catalog/lopaty_i_metly/metla_sinteticheskaya_kruglaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>242</price>
<currencyId>RUB</currencyId>
<categoryId>3138</categoryId>
<name>Метла синтетическая круглая</name>
<description>Метла синтетическая круглая</description>
</offer>
<offer id="48482" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_v_1/rukav_vsasyvayushchiy_v_100_mm_10_m_gr_2_r_5_szr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1113</price>
<currencyId>RUB</currencyId>
<categoryId>3299</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bc5/3wbca2ytka6l3bmj4ea6jee560a132yj.jpeg</picture>
<name>Рукав всасывающий В 100 мм 10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий В 100 мм 10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="48483" available="false">
<url>http://himopttorg.ru/catalog/aminat/aminat_bk_pl_kan_20_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>311</price>
<currencyId>RUB</currencyId>
<categoryId>3361</categoryId>
<picture>http://himopttorg.ru/upload/iblock/25d/xmpxcbg8uwtmdase16of5ddlrql3venj.jpg</picture>
<name>Аминат БК пл/кан 20 кг Экос-1</name>
<description>Аминат БК пл/кан 20 кг Экос-1</description>
</offer>
<offer id="48486" available="false">
<url>http://himopttorg.ru/catalog/asbokarton/asbokarton_kaon_10_mm_1000kh800_orenburg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>72.1</price>
<currencyId>RUB</currencyId>
<categoryId>169</categoryId>
<picture>http://himopttorg.ru/upload/iblock/543/ifnn6b59jesk1kfzoxvs4vth8s68h0ts.jpg</picture>
<name>Асбокартон КАОН 10 мм 1000х800 Оренбург</name>
<description>Асбокартон КАОН 10 мм 1000х800 Оренбург</description>
</offer>
<offer id="48487" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kislota_sernaya_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>334</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Кислота серная ХЧ</name>
<description>Кислота серная ХЧ</description>
</offer>
<offer id="48488" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kislota_uksusnaya_ledyanaya_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>639</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Кислота уксусная ледяная ХЧ</name>
<description>Кислота уксусная ледяная ХЧ</description>
</offer>
<offer id="48489" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/salfetka_mikrofibra_80kh100/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>216</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8ef/vxiogwktqvg43yb4sfqx18oqnjq290jh.jpg</picture>
<name>Салфетка микрофибра 80х100</name>
<description>Салфетка микрофибра 80х100</description>
</offer>
<offer id="48490" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_krasnaya_zh_b_2_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>900</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль МЛ-12 красная ж/б 2 кг LIDA</name>
<description>Эмаль МЛ-12 красная ж/б 2 кг LIDA</description>
</offer>
<offer id="48491" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_zol_zheltaya_zh_b_2_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>900</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль МЛ-12 зол желтая ж/б 2 кг LIDA</name>
<description>Эмаль МЛ-12 зол желтая ж/б 2 кг LIDA</description>
</offer>
<offer id="48492" available="true">
<url>http://himopttorg.ru/catalog/avtomobilnye_kraski_1/emal_ml_12_sinyaya_transport_k_ral5017_zh_b_2_kg_lida/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>920</price>
<currencyId>RUB</currencyId>
<categoryId>3294</categoryId>
<name>Эмаль МЛ-12 синяя транспорт К RAL5017 ж/б 2 кг LIDA</name>
<description>Эмаль МЛ-12 синяя транспорт К RAL5017 ж/б 2 кг LIDA</description>
</offer>
<offer id="48493" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/avtodorozhka_pyatachkovaya_1500_4000_4_mm_spi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>206</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ef0/wg804soyx6k7bu824pozcvy5vb5xynwr.jpeg</picture>
<name>Автодорожка пятачковая 1500*4000*4 мм СПИ</name>
<description>Автодорожка пятачковая 1500*4000*4 мм СПИ</description>
</offer>
<offer id="48494" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_12_22_9_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>13</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<name>Хомут червячный  12-22/9 W2</name>
<description>Хомут червячный  12-22/9 W2</description>
</offer>
<offer id="48495" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_60_63_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>50.4</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd4/ujeqbv6a840wp2vp8gjf22h08yc4plrv.jpg</picture>
<name>Хомут силовой одноболтовый 60-63 W1</name>
<description>Хомут силовой одноболтовый 60-63 W1</description>
</offer>
<offer id="48496" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_64_67_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>52.5</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/70e/r5kf7yj5iej2vrrn0tc5ws24vx7mslqo.jpg</picture>
<name>Хомут силовой одноболтовый 64-67 W1</name>
<description>Хомут силовой одноболтовый 64-67 W1</description>
</offer>
<offer id="48497" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_86_91_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>76.2</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/25a/67m3lt07olmxnpdk91pdb8myoo6da5cn.jpg</picture>
<name>Хомут силовой одноболтовый 86-91 W1</name>
<description>Хомут силовой одноболтовый 86-91 W1</description>
</offer>
<offer id="48498" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_104_112_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>82.4</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/339/9qi0yj0r8w6maiczce3xrb0qmdll1p8z.jpg</picture>
<name>Хомут силовой одноболтовый 104-112 W1</name>
<description>Хомут силовой одноболтовый 104-112 W1</description>
</offer>
<offer id="48499" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_113_121_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>104</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/443/qabqtkbuz08pav4n941i549rk1eqc7zu.jpg</picture>
<name>Хомут силовой одноболтовый 113-121 W1</name>
<description>Хомут силовой одноболтовый 113-121 W1</description>
</offer>
<offer id="48500" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_kr_korichnevaya_profit_bar_25_kg_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>216</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<picture>http://himopttorg.ru/upload/iblock/810/nh1wkmoj7p0mekxlb63zf7g8a6fx941n.jpg</picture>
<name>Эмаль ПФ-115 кр коричневая Профит бар 25 кг Х-И</name>
<description>Эмаль ПФ-115 кр коричневая Профит бар 25 кг Х-И</description>
</offer>
<offer id="48501" available="false">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_3/rukav_napornyy_iii_16_mm_2_mpa_kislorod_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>166</price>
<currencyId>RUB</currencyId>
<categoryId>244</categoryId>
<picture>http://himopttorg.ru/upload/iblock/867/a76d9fhgxl59mooon1x0c28yxpxxhqm2.jpg</picture>
<name>Рукав напорный III-16 мм 2 МПа кислород СЗРТ</name>
<description>Рукав напорный III-16 мм 2 МПа кислород СЗРТ</description>
</offer>
<offer id="48502" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_75_mm_4_m_gr_2_r_5_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1666</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a92/iimrjh0x4lxbl80cecmtyd55qet8y4h3.jpeg</picture>
<name>Рукав всасывающий КЩ  75 мм 4 м гр 2 р-5 СЗРТ</name>
<description>Рукав всасывающий КЩ  75 мм 4 м гр 2 р-5 СЗРТ</description>
</offer>
<offer id="48503" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_politon_ur_uf_ral1021_marka_a_komplekt_25kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1082</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль Политон УР(УФ) RAL1021 марка А комплект 25кг</name>
<description>Эмаль Политон УР(УФ) RAL1021 марка А комплект 25кг</description>
</offer>
<offer id="48504" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_politon_ur_uf_ral3020_marka_a_komplekt_25kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1223</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль Политон УР(УФ) RAL3020 марка А комплект 25кг</name>
<description>Эмаль Политон УР(УФ) RAL3020 марка А комплект 25кг</description>
</offer>
<offer id="48505" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_politon_ur_uf_ral9003_marka_a_komplekt_25kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>975</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль Политон УР(УФ) RAL9003 марка А комплект 25кг</name>
<description>Эмаль Политон УР(УФ) RAL9003 марка А комплект 25кг</description>
</offer>
<offer id="48506" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/kompozitsiya_tsinep_ved_25kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1313</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Композиция Цинэп вед 25кг</name>
<description>Композиция Цинэп вед 25кг</description>
</offer>
<offer id="48507" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ep_izolep_mio_seraya_komplekt_28kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>716</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль ЭП ИЗОЛЭП-mio серая комплект 28кг</name>
<description>Эмаль ЭП ИЗОЛЭП-mio серая комплект 28кг</description>
</offer>
<offer id="48508" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_125kh137_4_mm_0_3_mpa_700n_mpt_plastik/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1424</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e81/4xc1puhs4bcybwc711obj8n5nh0wusck.jpg</picture>
<name>Шланг нап всас ПВХ 125х137,4 мм 0,3 МПа 700N МПТ-Пластик</name>
<description>Шланг нап всас ПВХ 125х137,4 мм 0,3 МПа 700N МПТ-Пластик</description>
</offer>
<offer id="48509" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_300_2bknl_65_2_1_5_1_5_nb_5mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9ac/un3ehusdqywiwcllv7rf5n87nj88xm4d.jpg</picture>
<name>Лента кон  300-2БКНЛ-65-2-1,5-1,5 НБ 5мм</name>
<description>Лента кон  300-2БКНЛ-65-2-1,5-1,5 НБ</description>
</offer>
<offer id="48510" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_65_mm_4_m_gr_1_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>812</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/16e/j02w8vtkyeys7s0nakwwzpc66j5qrpi7.jpeg</picture>
<name>Рукав всасывающий Б  65 мм 4 м гр 1 СЗР</name>
<description>Рукав всасывающий Б  65 мм 4 м гр 1 СЗР</description>
</offer>
<offer id="48511" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_75_mm_6_m_gr_2_r_10_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1166</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/da8/9f67ph51vmz0zv562fuc829k1o7y06q4.jpeg</picture>
<name>Рукав всасывающий Б  75 мм  6 м гр 2 р-10 СЗР</name>
<description>Рукав всасывающий Б  75 мм  6 м гр 2 р-10 СЗР</description>
</offer>
<offer id="48513" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_100_mm_4_m_gr_2_r_5_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1867</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/09e/va06o4elgw686nzh7sro50m395lautw0.jpg</picture>
<name>Рукав всасывающий КЩ 100 мм 4 м гр 2 р-5 Кварт</name>
<description>Рукав всасывающий КЩ 100 мм 4 м гр 2 р-5 Кварт</description>
</offer>
<offer id="48514" available="false">
<url>http://himopttorg.ru/catalog/rukava_s_nityanym_opletom/rukav_s_nit_opl_76kh91_mm_0_98_mpa_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1637</price>
<currencyId>RUB</currencyId>
<categoryId>253</categoryId>
<picture>http://himopttorg.ru/upload/iblock/ac9/5tafsnn9bhto1vyoeww9ca04awu6wx6c.jpeg</picture>
<name>Рукав с нит опл 76х91 мм 0,98 МПа КРТ</name>
<description>Рукав с нит опл 76х91 мм 0,98 МПа КРТ</description>
</offer>
<offer id="48515" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/shchetka_d_pola_b_ch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>243</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<name>Щетка д/пола б/ч</name>
<description>Щетка д/пола б/ч</description>
</offer>
<offer id="48516" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_polipropilenovyy_s_lateksnym_napyleniem_iz_pvkh_60kh90kh0_7_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>444</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик полипропиленовый с латексным напылением из ПВХ 60х90х0,7 см</name>
<description>Коврик полипропиленовый с латексным напылением из ПВХ 60х90х0,7 см</description>
</offer>
<offer id="48517" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_polipropilenovyy_s_lateksnym_napyleniem_iz_pvkh_67kh100kh0_7_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>754</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик полипропиленовый с латексным напылением из ПВХ 67х100х0,7 см</name>
<description>Коврик полипропиленовый с латексным напылением из ПВХ 67х100х0,7 см</description>
</offer>
<offer id="48520" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_25_mm_1_0_mpa_tu_vpt_45m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>150</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/978/qtvvu9333jo854b3smjzgw10x7xfm5sx.jpeg</picture>
<name>Рукав напорный ВГ 25 мм 1,0 МПа ТУ ВПТ 45м</name>
<description>Рукав напорный ВГ 25 мм 1,0 МПа ТУ ВПТ</description>
</offer>
<offer id="48521" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/bumaga_tual_ekonom_b_vtulki/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>14.7</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a48/5wcyonedbm31b4n0ibrtv2yayrgq3b33.jpg</picture>
<name>Бумага туал ЭКОНОМ  б/втулки</name>
<description>Бумага туал ЭКОНОМ б/втулки</description>
</offer>
<offer id="48522" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_50_mm_4_m_gr_2_r_5_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>864</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c29/bxk84150vt58jeof4ohersp0up891gc9.jpeg</picture>
<name>Рукав всасывающий КЩ  50 мм 4 м гр 2 р-5 Кварт</name>
<description>Рукав всасывающий КЩ  50 мм 4 м гр 2 р-5 Кварт</description>
</offer>
<offer id="48523" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_150_mm_4_m_gr_2_r_5_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2882</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/082/1dqj39vdmu41w94lh7l9h1c68uu1dumi.jpeg</picture>
<name>Рукав всасывающий КЩ 150 мм 4 м гр 2 р-5 </name>
<description>Рукав всасывающий КЩ 150 мм 4 м гр 2 р-5 </description>
</offer>
<offer id="48524" available="false">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_20_mm_1_0_mpa_tu_vpt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>113</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5af/2qseoq5sz2sp29jvp4qouh1zygw7f1u8.jpeg</picture>
<name>Рукав напорный ВГ 20 мм 1,0 МПа ТУ  ВПТ</name>
<description>Рукав напорный ВГ 20 мм 1,0 МПа ТУ  ВПТ</description>
</offer>
<offer id="48525" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/sterzhen_poliuretan_100kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2925</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Стержень полиуретан 100х500 мм</name>
<description>Стержень полиуретан 100х500 мм</description>
</offer>
<offer id="48526" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/sterzhen_poliuretan_120kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4225</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Стержень полиуретан 120х500 мм</name>
<description>Стержень полиуретан 120х500 мм</description>
</offer>
<offer id="48527" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/metilpirrolidon_khch_st_but_1_0_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>762</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Метилпирролидон ХЧ ст/бут 1,0 кг Экос-1</name>
<description>Метилпирролидон ХЧ ст/бут 1,0 кг Экос-1</description>
</offer>
<offer id="48528" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_200_2bknl_65_2_1_5_1_5_tip_4_nb_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>585</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9f1/teozderafbza70e2v5anclasg6qfs64c.jpg</picture>
<name>Лента кон  200-2БКНЛ-65-2-1,5-1,5 тип 4 НБ 5 мм</name>
<description>Лента кон  200-2БКНЛ-65-2-1,5-1,5 тип 4 НБ   </description>
</offer>
<offer id="48529" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_45kh75_sm_dzen_pp_na_rezine_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>450</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 45х75 см Dzen ПП на резине коричневый</name>
<description>Коврик влаговпитывающий 45х75 см Dzen ПП на резине коричневый</description>
</offer>
<offer id="48530" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_45kh75_sm_dzen_pp_na_rezine_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>437</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 45х75 см Dzen ПП на резине серый</name>
<description>Коврик влаговпитывающий 45х75 см Dzen ПП на резине серый</description>
</offer>
<offer id="48531" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_60kh90_sm_dzen_pp_na_rezine_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>772</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 60х90 см Dzen ПП на резине коричневый</name>
<description>Коврик влаговпитывающий 60х90 см Dzen ПП на резине коричневый</description>
</offer>
<offer id="48532" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/veshalka_plechiki_plastikovaya_s_neskolzyashchimi_vstavkami/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>26.2</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<name>Вешалка-плечики пластиковая с нескользящими вставками</name>
<description>Вешалка-плечики пластиковая с нескользящими вставками</description>
</offer>
<offer id="48533" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_90kh120_sm_dzen_pp_na_rezine_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1931</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 90х120 см Dzen ПП на резине коричневый</name>
<description>Коврик влаговпитывающий 90х120 см Dzen ПП на резине коричневый</description>
</offer>
<offer id="48534" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_90kh120_sm_dzen_pp_na_rezine_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1931</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 90х120 см Dzen ПП на резине серый</name>
<description>Коврик влаговпитывающий 90х120 см Dzen ПП на резине серый</description>
</offer>
<offer id="48535" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_40kh60_sm_diamant_pvkh_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 40х60 см Diamant ПВХ серый</name>
<description>Коврик влаговпитывающий 40х60 см Diamant ПВХ серый</description>
</offer>
<offer id="48536" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_60kh90_sm_diamant_pvkh_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>543</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 60х90 см Diamant ПВХ коричневый</name>
<description>Коврик влаговпитывающий 60х90 см Diamant ПВХ коричневый</description>
</offer>
<offer id="48537" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_60kh90_sm_diamant_pvkh_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>543</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 60х90 см Diamant ПВХ серый</name>
<description>Коврик влаговпитывающий 60х90 см Diamant ПВХ серый</description>
</offer>
<offer id="48538" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_80kh120_sm_diamant_pvkh_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1104</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 80х120 см Diamant ПВХ коричневый</name>
<description>Коврик влаговпитывающий 80х120 см Diamant ПВХ коричневый</description>
</offer>
<offer id="48539" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_80kh120_sm_diamant_pvkh_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1104</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 80х120 см Diamant ПВХ серый</name>
<description>Коврик влаговпитывающий 80х120 см Diamant ПВХ серый</description>
</offer>
<offer id="48540" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_40kh60_sm_diamant_pvkh_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 40х60 см Diamant ПВХ коричневый</name>
<description>Коврик влаговпитывающий 40х60 см Diamant ПВХ коричневый</description>
</offer>
<offer id="48541" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_shchetinistyy_gryazesbornyy_41kh54_sm_gras_pvkh_cherno_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>131</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик щетинистый грязесборный 41х54 см Gras ПВХ черно-серый</name>
<description>Коврик щетинистый грязесборный 41х54 см Gras ПВХ черно-серый</description>
</offer>
<offer id="48542" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_shchetinistyy_gryazesbornyy_54kh82_sm_gras_pvkh_cherno_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>285</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик щетинистый грязесборный 54х82 см Gras ПВХ черно-серый</name>
<description>Коврик щетинистый грязесборный 54х82 см Gras ПВХ черно-серый</description>
</offer>
<offer id="48543" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_60kh90_sm_dzen_pp_na_rezine_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>772</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик влаговпитывающий 60х90 см Dzen ПП на резине серый</name>
<description>Коврик влаговпитывающий 60х90 см Dzen ПП на резине серый</description>
</offer>
<offer id="48544" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/zhelezo_khlornoe_tekhnich_rastvor_f_25/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>149</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Железо хлорное технич раствор ф.25</name>
<description>Железо хлорное технич раствор ф.25</description>
</offer>
<offer id="48545" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_8104_seraya_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>715</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/085/uz209w9fmhxsr5qu076y7i8sp1woe2q2.jpg</picture>
<name>Эмаль КО-8104 серая бар 25 кг</name>
<description>Эмаль КО-8104 серая бар 25 кг</description>
</offer>
<offer id="48546" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_6_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>868</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/086/yft1dmh0c2xmr3bdfv3u7s5973ieayve.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  6 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  50 мм  6 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="48547" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_politon_ur_uf_ral5015_marka_a_komplekt_25kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1065</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль Политон УР(УФ) RAL5015 марка А комплект 25кг</name>
<description>Эмаль Политон УР(УФ) RAL5015 марка А комплект 25кг</description>
</offer>
<offer id="48548" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_politon_ur_uf_ral7004_marka_a_komplekt_25kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>941</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль Политон УР(УФ) RAL7004 марка А комплект 25кг</name>
<description>Эмаль Политон УР(УФ) RAL7004 марка А комплект 25кг</description>
</offer>
<offer id="48549" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_814_serebristaya_bar_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>720</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль КО-814 серебристая бар 25 кг</name>
<description>Эмаль КО-814 серебристая бар 25 кг</description>
</offer>
<offer id="48551" available="false">
<url>http://himopttorg.ru/catalog/polotno_kh_proshivnoe_1/polotno_kh_proshivnoe_1_5_50_plotn_200/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>85.4</price>
<currencyId>RUB</currencyId>
<categoryId>3319</categoryId>
<picture>http://himopttorg.ru/upload/iblock/719/sy3847vw8oi2gk95iuddn1tc2y57d8in.jpeg</picture>
<name>Полотно х-прошивное 1,5*50 плотн 200</name>
<description>Полотно х-прошивное  1,5*50 плотн 200</description>
</offer>
<offer id="48552" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_40kh60kh1_sm_romb_eva_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>244</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 40х60х1 см Romb ЭВА серый</name>
<description>Коврик придверный 40х60х1 см Romb ЭВА серый</description>
</offer>
<offer id="48553" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_40kh60kh1_sm_romb_eva_bezhevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>244</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 40х60х1 см Romb ЭВА бежевый</name>
<description>Коврик придверный 40х60х1 см Romb ЭВА бежевый</description>
</offer>
<offer id="48554" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_40kh60kh1_sm_romb_eva_chernyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>244</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 40х60х1 см Romb ЭВА черный</name>
<description>Коврик придверный 40х60х1 см Romb ЭВА черный</description>
</offer>
<offer id="48555" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_60kh80kh1_sm_romb_eva_bezhevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>469</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 60х80х1 см Romb ЭВА бежевый</name>
<description>Коврик придверный 60х80х1 см Romb ЭВА бежевый</description>
</offer>
<offer id="48556" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_60kh80kh1_sm_romb_eva_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>469</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 60х80х1 см Romb ЭВА серый</name>
<description>Коврик придверный 60х80х1 см Romb ЭВА серый</description>
</offer>
<offer id="48557" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_60kh80kh1_sm_romb_eva_chernyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>469</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 60х80х1 см Romb ЭВА черный</name>
<description>Коврик придверный 60х80х1 см Romb ЭВА черный</description>
</offer>
<offer id="48558" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_80kh130kh1_sm_romb_eva_bezhevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>965</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 80х130х1 см Romb ЭВА бежевый</name>
<description>Коврик придверный 80х130х1 см Romb ЭВА бежевый</description>
</offer>
<offer id="48559" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_80kh130kh1_sm_romb_eva_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>965</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 80х130х1 см Romb ЭВА серый</name>
<description>Коврик придверный 80х130х1 см Romb ЭВА серый</description>
</offer>
<offer id="48560" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_pridvernyy_80kh130kh1_sm_romb_eva_chernyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>965</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<name>Коврик придверный 80х130х1 см Romb ЭВА черный</name>
<description>Коврик придверный 80х130х1 см Romb ЭВА черный</description>
</offer>
<offer id="48561" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/chashka_petri_d_60_p_s_sterilnaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>21.6</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Чашка Петри d=60 п/с стерильная</name>
<description>Чашка Петри d=60 п/с стерильная</description>
</offer>
<offer id="48562" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/chashka_petri_d_90_p_s_sterilnaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>28.5</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Чашка Петри d=90 п/с стерильная</name>
<description>Чашка Петри d=90 п/с стерильная</description>
</offer>
<offer id="48563" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/tsilindr_1_500_1_s_nos/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4192</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Цилиндр 1-500-1 с нос.</name>
<description>Цилиндр 1-500-1 с нос.</description>
</offer>
<offer id="48564" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/trikhloretilen_khch_st_but_1_5_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>738</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Трихлорэтилен ХЧ ст/бут 1,5 кг Экос-1</name>
<description>Трихлорэтилен ХЧ ст/бут 1,5 кг Экос-1</description>
</offer>
<offer id="48565" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/atsetilatseton_chda_st_but_1_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3172</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Ацетилацетон ЧДА ст/бут 1 кг Экос-1</name>
<description>Ацетилацетон ЧДА ст/бут 1 кг Экос-1</description>
</offer>
<offer id="48566" available="true">
<url>http://himopttorg.ru/catalog/rastvoriteli_khimicheski_chistye/metiltsellozolv_ch_st_but_0_95_kg_ekos_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<name>Метилцеллозольв Ч ст/бут 0,95 кг Экос-1</name>
<description>Метилцеллозольв Ч ст/бут 0,95 кг Экос-1</description>
</offer>
<offer id="48567" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ep_773_seraya_bar_20_7_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>500</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль ЭП-773 серая бар 20,7 кг</name>
<description>Эмаль ЭП-773 серая бар 20,7 кг</description>
</offer>
<offer id="48568" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_2_mm_1000_5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2163</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fd4/etw2sd9p60o99nk971jpefeahd352xss.gif</picture>
<name>Пластина ТМКЩ  2 мм 1000*5000 мм</name>
<description>Пластина ТМКЩ  2 мм 1000*5000 мм</description>
</offer>
<offer id="48569" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_3_mm_1000_5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3320</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/425/v0zvnq5xhil93x22x9hcgfu4pgvmqsze.gif</picture>
<name>Пластина ТМКЩ  3 мм 1000*5000 мм</name>
<description>Пластина ТМКЩ  3 мм 1000*5000 мм</description>
</offer>
<offer id="48570" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_6_mm_1000_5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>6300</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/25c/b0ozsbuszmqnrljxzopju0bx4gdgwann.gif</picture>
<name>Пластина ТМКЩ  6 мм 1000*5000 мм</name>
<description>Пластина ТМКЩ  6 мм 1000*5000 мм</description>
</offer>
<offer id="48571" available="true">
<url>http://himopttorg.ru/catalog/rukava_pnevmaticheskie/rukav_pnevmaticheskiy_g_20kh33_mm_1_0_mpa_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>305</price>
<currencyId>RUB</currencyId>
<categoryId>252</categoryId>
<picture>http://himopttorg.ru/upload/iblock/778/qos5oxkv8bl6aa6ig5nieieuo8d4613p.gif</picture>
<name>Рукав пневматический Г 20х33 мм 1,0 МПа СЗРТ</name>
<description>Рукав пневматический Г 20х33 мм 1,0 МПа СЗРТ</description>
</offer>
<offer id="48575" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_taftingovyy_na_pvkh_osn_tf60902_60sm_x_90sm_kh_7mm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>688</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a4c/0luvq3nakwackvuxnqoir4kh7tus5yxc.jpg</picture>
<name>Коврик тафтинговый на ПВХ осн TF60902 60см x 90см х 7мм коричневый</name>
<description>Коврик тафтинговый на ПВХ осн TF60902 60см x 90см х 7мм коричневый</description>
</offer>
<offer id="48576" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_taftingovyy_na_pvkh_osn_tf60903_60sm_x_90sm_kh_7mm_temno_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>688</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/7ec/ksu8o9h9ny8w8mktukvh7ymx5kzii42t.jpg</picture>
<name>Коврик тафтинговый на ПВХ осн TF60903 60см x 90см х 7мм темно-серый</name>
<description>Коврик тафтинговый на ПВХ осн TF60903 60см x 90см х 7мм темно-серый</description>
</offer>
<offer id="48577" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_taftingovyy_na_pvkh_osn_tf901502_90sm_x_150sm_kh_7mm_korichnevyy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1721</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/813/tjhcx7ee7bnf8dakfd61fz81wmencwzf.jpg</picture>
<name>Коврик тафтинговый на ПВХ осн TF901502 90см x 150см х 7мм коричневый</name>
<description>Коврик тафтинговый на ПВХ осн TF901502 90см x 150см х 7мм коричневый</description>
</offer>
<offer id="48578" available="true">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_taftingovyy_na_pvkh_osn_tf901503_90sm_x_150sm_kh_7mm_temno_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1721</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/849/ueo8zzgw105hax46ju37x4n7nbqlpor6.jpg</picture>
<name>Коврик тафтинговый на ПВХ осн TF901503 90см x 150см х 7мм темно-серый</name>
<description>Коврик тафтинговый на ПВХ осн TF901503 90см x 150см х 7мм темно-серый</description>
</offer>
<offer id="48579" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_18_mm_720kh720/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>202</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/74c/jq9hp1sz5ty9sa87t3gsxcxilgts1ug2.jpeg</picture>
<name>Пластина ТМКЩ 18 мм 720х720</name>
<description>Пластина ТМКЩ 18 мм 720х720 </description>
</offer>
<offer id="48580" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_100_mm_4_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2020</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/290/3bsdorvfgut0ug9e1t0i0z906pjuaxlo.jpg</picture>
<name>Рукав всасывающий КЩ 100 мм 4 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий КЩ 100 мм 4 м гр 2 р-5 СЗР</description>
</offer>
<offer id="48581" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/gubka_dlya_posudy_10_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>95.4</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Губка для посуды 10 шт</name>
<description>Губка для посуды 10 шт</description>
</offer>
<offer id="48582" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/mylo_tualetnoe_100_gr_v_assortimente_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>21.3</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/01b/roh3k323i0jhb6jqu4dy1cy0f37grxrf.jpg</picture>
<name>Мыло туалетное 100 гр в ассортименте</name>
<description>Мыло туалетное 100 гр в ассортименте</description>
</offer>
<offer id="48583" available="true">
<url>http://himopttorg.ru/catalog/remni_klinovye_1/remen_klinovoy_spz_800/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>61.5</price>
<currencyId>RUB</currencyId>
<categoryId>3325</categoryId>
<picture>http://himopttorg.ru/upload/iblock/27b/9o0h21slaylr5qqrfe8nrh65aah66yw5.jpeg</picture>
<name>Ремень клиновой SPZ-800</name>
<description>Ремень клиновой SPZ-800</description>
</offer>
<offer id="48584" available="true">
<url>http://himopttorg.ru/catalog/remni_klinovye_1/remen_klinovoy_spz_812/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>62.9</price>
<currencyId>RUB</currencyId>
<categoryId>3325</categoryId>
<picture>http://himopttorg.ru/upload/iblock/668/fbcqdglswx67kusbtf8hp51wpgozjm5t.jpeg</picture>
<name>Ремень клиновой SPZ-812</name>
<description>Ремень клиновой SPZ-812</description>
</offer>
<offer id="48585" available="true">
<url>http://himopttorg.ru/catalog/remni_klinovye_1/remen_klinovoy_spz_825/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>64.2</price>
<currencyId>RUB</currencyId>
<categoryId>3325</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b88/gocn7ntyo3zxrfhre7s3iftg10c7sca2.jpeg</picture>
<name>Ремень клиновой SPZ-825</name>
<description>Ремень клиновой SPZ-825</description>
</offer>
<offer id="48586" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_250_mm_poliester/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>180</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Валик в сборе 250 мм полиэстер</name>
<description>Валик в сборе 250 мм полиэстер</description>
</offer>
<offer id="48587" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_mister_proper_1000ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>310</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство Мистер Пропер 1000мл</name>
<description>Моющее средство Мистер Пропер 1000мл</description>
</offer>
<offer id="48588" available="true">
<url>http://himopttorg.ru/catalog/perekis_vodoroda/perekis_vodoroda_pl_kan_11_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1125</price>
<currencyId>RUB</currencyId>
<categoryId>3115</categoryId>
<picture>http://himopttorg.ru/upload/iblock/83c/f8349t99o3c7fc63myveij0vzgzs7m96.jpg</picture>
<name>Перекись водорода пл/кан 11 кг</name>
<description>Перекись водорода пл/кан 11 кг</description>
</offer>
<offer id="48590" available="true">
<url>http://himopttorg.ru/catalog/kaltsiy_khloristyy_/protivogololednyy_material_aysmelt_mix_p_mesh_25_kg_20_s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>42.7</price>
<currencyId>RUB</currencyId>
<categoryId>302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/4da/cz02ahkybgtmhehrj1lfxgb5dq5lavli.jpg</picture>
<name>Противогололедный материал АйсМелт Mix п/меш 25 кг (-20 С)</name>
<description>Противогололедный материал АйсМелт Mix п/меш 25 кг (-20 С)</description>
</offer>
<offer id="48591" available="false">
<url>http://himopttorg.ru/catalog/kaltsiy_khloristyy_/protivogololednyy_material_bionord_universal_p_mesh_23_kg_30_s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>51.1</price>
<currencyId>RUB</currencyId>
<categoryId>302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/203/jargm49g1ica5t5393xko7us5leckogh.png</picture>
<name>Противогололедный материал Бионорд Universal п/меш 23 кг (-30 С)</name>
<description>Противогололедный материал Бионорд Universal п/меш 23 кг</description>
</offer>
<offer id="48593" available="false">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_feyri_900ml_v_assortimente/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>309</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d30/4ghihoba0c4whfa0pouulyjtsrlokrjb.jpg</picture>
<name>Моющее средство ФЕЙРИ 900мл в ассортименте</name>
<description>Моющее средство ФЕЙРИ 900мл в ассортименте</description>
</offer>
<offer id="48594" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_v_1/rukav_napornyy_v_25kh36_mm_1_0_mpa_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>395</price>
<currencyId>RUB</currencyId>
<categoryId>3301</categoryId>
<picture>http://himopttorg.ru/upload/iblock/131/f6m11632zeol0mvhjrhq5rw0593xdcny.gif</picture>
<name>Рукав напорный В  25х36 мм 1,0 МПа </name>
<description>Рукав напорный В  25х36 мм 1,0 МПа </description>
</offer>
<offer id="48595" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_4_mm_1000_5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4312</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fec/2lvlltetjjenxd4j30fdzvujahxddg00.gif</picture>
<name>Пластина ТМКЩ  4 мм 1000*5000 мм</name>
<description>Пластина ТМКЩ  4 мм 1000*5000 мм</description>
</offer>
<offer id="48596" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_150_4bknl65_0_0_4_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>290</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b0e/af8noaast9tsu2gco1015ud865f7cpf0.jpg</picture>
<name>Лента кон  150-4БКНЛ65-0-0     4,5 мм</name>
<description>Лента кон  150-4БКНЛ65-0-0     4,5 мм</description>
</offer>
<offer id="48597" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/tigel_3_farfor_nizkiy_10_ml_35_18_26/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>127</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Тигель №3 фарфор низкий 10 мл 35/18/26</name>
<description>Тигель №3 фарфор низкий 10 мл 35/18/26</description>
</offer>
<offer id="48598" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaolin_ochishchennyy_kr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>171</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Каолин очищенный КР-1</name>
<description>Каолин очищенный КР-1</description>
</offer>
<offer id="48599" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_75_mm_agrofleks_2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1651</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<name>Шланг нап всас ПВХ 75 мм  Агрофлекс-2</name>
<description>Шланг нап всас ПВХ 75 мм  Агрофлекс-2</description>
</offer>
<offer id="48601" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_63_mm_0_5_mpa_mbs_siniy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>732</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/5b6/lm0qp2ypu8cswoutpy6n13i9lrb2a0vp.jpg</picture>
<name>Шланг нап всас ПВХ 63 мм 0,5 МПа МБС синий</name>
<description>Шланг нап всас ПВХ 63 мм 0,5 МПа МБС синий</description>
</offer>
<offer id="48602" available="true">
<url>http://himopttorg.ru/catalog/aerozolnye_kraski/emal_aeroz_akril_chernyy_matovyy_ral_9005_520_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>314</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<name>Эмаль аэроз акрил черный матовый RAL 9005 520 мл</name>
<description>Эмаль аэроз акрил черный матовый RAL 9005 520 мл</description>
</offer>
<offer id="48603" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_zheltaya_bar_48_kg_kazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>406</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро желтая бар 48 кг Казань</name>
<description>Эмаль НЦ-132 нитро желтая бар 48 кг Казань</description>
</offer>
<offer id="48604" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/meshki_d_m_120l_10_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>123</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/aec/kxl4zmaeyquff7195f0ctq8y552wrsjg.jpg</picture>
<name>Мешки д/м 120л   10 шт</name>
<description>Мешки д/м 120л  10 шт</description>
</offer>
<offer id="48605" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_8101_serebristo_seraya_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>585</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль КО-8101 серебристо-серая </name>
<description>Эмаль КО-8101 серебристо-серая </description>
</offer>
<offer id="48606" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_ak_511_krasnaya_zh_ved_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2b4/sjzchznpao2ltjziey5ned9wmgmub5yd.png</picture>
<name>Эмаль АК-511 красная ж/вед 25 кг</name>
<description>Эмаль АК-511 красная ж/вед 25 кг</description>
</offer>
<offer id="48607" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/zhelezo_khlornoe_zhidkoe/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>80.7</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Железо хлорное жидкое</name>
<description>Железо хлорное жидкое</description>
</offer>
<offer id="48608" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_115kh120kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4538</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 115х120х3 см</name>
<description>Коврик дезинфиц ЭКО 115х120х3 см</description>
</offer>
<offer id="48609" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_120kh200kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5565</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 120х200х3 см</name>
<description>Коврик дезинфиц ЭКО 120х200х3 см</description>
</offer>
<offer id="48610" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_100kh200kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4188</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 100х200х3 см</name>
<description>Коврик дезинфиц ЭКО 100х200х3 см</description>
</offer>
<offer id="48611" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_60kh80kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1252</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 60х80х3 см</name>
<description>Коврик дезинфиц ЭКО 60х80х3 см</description>
</offer>
<offer id="48612" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_110kh200kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5565</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 110х200х3 см</name>
<description>Коврик дезинфиц ЭКО 110х200х3 см</description>
</offer>
<offer id="48613" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_108kh180kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5565</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 108х180х3 см</name>
<description>Коврик дезинфиц ЭКО 108х180х3 см</description>
</offer>
<offer id="48614" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_70kh110kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2940</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 70х110х3 см</name>
<description>Коврик дезинфиц ЭКО 70х110х3 см</description>
</offer>
<offer id="48615" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_120kh190kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5998</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 120х190х3 см</name>
<description>Коврик дезинфиц ЭКО 120х190х3 см</description>
</offer>
<offer id="48616" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_100kh190kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>4198</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 100х190х3 см</name>
<description>Коврик дезинфиц ЭКО 100х190х3 см</description>
</offer>
<offer id="48617" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_khv_110_seraya_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль ХВ-110 серая бар 20 кг</name>
<description>Эмаль ХВ-110 серая бар 20 кг</description>
</offer>
<offer id="48618" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_but_0_9_l_nolex/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>213</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<name>Уайт-спирит бут 0,9 л NOLEX</name>
<description>Уайт-спирит бут 0,9 л NOLEX</description>
</offer>
<offer id="48619" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/profil_p_obraznyy_pod_steklo_2mm_12kh1_5mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>446</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Профиль П-образный под стекло 2мм  12х1,5мм</name>
<description>Профиль П-образный под стекло 2мм  12х1,5мм</description>
</offer>
<offer id="48620" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kislota_azotnaya_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>340</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Кислота азотная ХЧ</name>
<description>Кислота азотная ХЧ</description>
</offer>
<offer id="48621" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kislota_ftoristovodorodnaya_ch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1049</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Кислота фтористоводородная Ч</name>
<description>Кислота фтористоводородная Ч</description>
</offer>
<offer id="48622" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/filtr_bezzolnyy_110_mm_belaya_lenta/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Фильтр беззольный 110 мм белая лента</name>
<description>Фильтр беззольный 110 мм белая лента</description>
</offer>
<offer id="48623" available="false">
<url>http://himopttorg.ru/catalog/kovry_rezinovye/kovrik_vlagovpityvayushchiy_t202_1_120kh180_sm_8mm_seryy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1461</price>
<currencyId>RUB</currencyId>
<categoryId>232</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b20/40panzns1mcpd33atwsg91q5rnh4734d.jpg</picture>
<name>Коврик влаговпитывающий Т202/1 120х180 см 8мм серый</name>
<description>Коврик влаговпитывающий Т202/1 120х180 см 8мм серый</description>
</offer>
<offer id="48624" available="true">
<url>http://himopttorg.ru/catalog/rukava_dlya_gazosvarki_tip_1/rukav_napornyy_i_6_3_mm_0_63_mpa_atsetilen_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>37.5</price>
<currencyId>RUB</currencyId>
<categoryId>242</categoryId>
<picture>http://himopttorg.ru/upload/iblock/01b/31pmu8iun4drdafmk3nf274jy0who314.jpeg</picture>
<name>Рукав напорный I- 6,3 мм 0,63 МПа ацетилен СЗРТ</name>
<description>Рукав напорный I- 6,3 мм 0,63 МПа ацетилен СЗРТ</description>
</offer>
<offer id="48625" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_100_4bknl65_2_0_0_4_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>284</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/731/guy5v0ypjalgu6l7au6uxpyvrmq2lj5j.jpg</picture>
<name>Лента кон  100-4БКНЛ65-2-0-0  4,5 мм</name>
<description>Лента кон  100-4БКНЛ65-2-0-0  4,5 мм</description>
</offer>
<offer id="48626" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_140kh1000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<name>Фторопласт стерж 140х1000 мм</name>
<description>Фторопласт стерж 140х1000 мм </description>
</offer>
<offer id="48627" available="true">
<url>http://himopttorg.ru/catalog/sol_tabletirovannaya_1/sol_tekhnich_mesh_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>14.5</price>
<currencyId>RUB</currencyId>
<categoryId>3124</categoryId>
<name>Соль технич меш 25 кг</name>
<description>Соль технич меш 25 кг</description>
</offer>
<offer id="48628" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_10kh1000kh5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>37500</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Пластина силиконовая 10х1000х5000 мм</name>
<description>Пластина силиконовая 10х1000х5000 мм</description>
</offer>
<offer id="48629" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_868_sereb_seraya_bar_25_kg_elcon/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>620</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2bb/bfwb9xf4j6so9e0wk33lbw2kh100x04b.jpg</picture>
<name>Эмаль КО-868 сереб-серая бар 25 кг Elcon</name>
<description>Эмаль КО-868 сереб-серая бар 25 кг Elcon</description>
</offer>
<offer id="48630" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_serebristaya_bar_25_kg_elcon_max_therm_700_gradusov/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>680</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<picture>http://himopttorg.ru/upload/iblock/f93/0w3mqigdehegr4zwdlm2fohvpke5iypz.jpg</picture>
<name>Эмаль серебристая бар 25 кг Elcon Max Therm 700 градусов</name>
<description>Эмаль серебристая бар 25 кг Elcon Max Therm 700 градусов</description>
</offer>
<offer id="48631" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_8101_sereb_seraya_bar_25_kg_elcon/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>597</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль КО-8101 сереб-серая бар 25 кг Elcon</name>
<description>Эмаль КО-8101 сереб-серая бар 25 кг Elcon</description>
</offer>
<offer id="48632" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/meshki_d_m_60l_romashka_rul_30_sht/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>81.2</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<picture>http://himopttorg.ru/upload/iblock/c26/hsf4oive4hmcmatsrmiy44sbv3gzai63.jpg</picture>
<name>Мешки д/м 60л РОМАШКА (рул 30 шт)</name>
<description>Мешки д/м 60л РОМАШКА (рул 30 шт)</description>
</offer>
<offer id="48633" available="true">
<url>http://himopttorg.ru/catalog/rukava_napornye_vg_1/rukav_napornyy_vg_16_mm_1_0_mpa_tu_szr_20m/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>95</price>
<currencyId>RUB</currencyId>
<categoryId>3302</categoryId>
<picture>http://himopttorg.ru/upload/iblock/247/u8j0dx95gp4xsi5qwcmr0sb4435vxn5t.jpeg</picture>
<name>Рукав напорный ВГ 16 мм 1,0 МПа ТУ СЗР 20м</name>
<description>Рукав напорный ВГ 16 мм 1,0 МПа ТУ СЗР</description>
</offer>
<offer id="48634" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_125_mm_4_m_gr_1_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2187</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/3ea/gk0tqzxyj73e9mtj9v42cwoee11z7udi.jpg</picture>
<name>Рукав всасывающий КЩ 125 мм 4 м гр 1 Химтекс</name>
<description>Рукав всасывающий КЩ 125 мм 4 м гр 1 Химтекс</description>
</offer>
<offer id="48635" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kaliy_yodistyy_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>19519</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Калий йодистый ХЧ</name>
<description>Калий йодистый ХЧ</description>
</offer>
<offer id="48636" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/natriy_sernovatistokislyy_5_vodnyy_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>765</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Натрий серноватистокислый 5-водный ЧДА</name>
<description>Натрий серноватистокислый 5-водный ЧДА</description>
</offer>
<offer id="48637" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_125_mm_4_m_gr_1_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2441</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/b2d/7a1gmfsg5rsf93n72maycuux7jsvpmun.jpg</picture>
<name>Рукав всасывающий КЩ 125 мм 4 м гр 1 СЗРТ</name>
<description>Рукав всасывающий КЩ 125 мм 4 м гр 1 СЗРТ</description>
</offer>
<offer id="48638" available="false">
<url>http://himopttorg.ru/catalog/laki_propitki_olify_pudra_1/lak_nts_218_bar_48kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>440</price>
<currencyId>RUB</currencyId>
<categoryId>3291</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e00/70nkdg1s9jhw34763cxmst5tbyujjqi3.jpg</picture>
<name>Лак НЦ-218 бар 48кг</name>
<description>Лак НЦ-218 бар 48 кг </description>
</offer>
<offer id="48639" available="true">
<url>http://himopttorg.ru/catalog/ftoroplast/ftoroplast_sterzh_160kh500_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1390</price>
<currencyId>RUB</currencyId>
<categoryId>204</categoryId>
<name>Фторопласт стерж 160х500 мм</name>
<description>Фторопласт стерж 160х500 мм</description>
</offer>
<offer id="48640" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_10_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>562</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/38a/uvp1uie21d62oni6hgsmz7gq67pe9iks.jpeg</picture>
<name>Рукав всасывающий Б  32 мм 10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б  32 мм 10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="48641" available="true">
<url>http://himopttorg.ru/catalog/perchatki_i_prochee_1/perchatki_kh_b_s_polnym_nitrilovym_pokrytiem/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>121</price>
<currencyId>RUB</currencyId>
<categoryId>3318</categoryId>
<name>Перчатки х/б с полным нитриловым покрытием</name>
<description>Перчатки х/б с полным нитриловым покрытием</description>
</offer>
<offer id="48642" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/talk_trpn/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>89.7</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Тальк ТРПН</name>
<description>Тальк ТРПН</description>
</offer>
<offer id="48643" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/ammoniy_shchavelevokislyy_1_vodnyy_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>3107</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Аммоний щавелевокислый 1-водный ЧДА</name>
<description>Аммоний щавелевокислый 1-водный ЧДА</description>
</offer>
<offer id="48644" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/kislota_limonnaya_1_vodnaya_khch/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>650</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Кислота лимонная 1-водная ХЧ</name>
<description>Кислота лимонная 1-водная ХЧ</description>
</offer>
<offer id="48645" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/filtr_afa_vp_20_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>43.5</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Фильтр АФА-ВП-20-1</name>
<description>Фильтр АФА-ВП-20-1</description>
</offer>
<offer id="48647" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_chervyachnyy_10_16_9_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>12.6</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<name>Хомут червячный  10-16/9 W2</name>
<description>Хомут червячный  10-16/9 W2</description>
</offer>
<offer id="48648" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_100_mm_poliester/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>140</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Валик в сборе 100 мм полиэстер</name>
<description>Валик в сборе 100 мм полиэстер</description>
</offer>
<offer id="48649" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_ak_070_zheltyy_bar_17_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>552</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<picture>http://himopttorg.ru/upload/iblock/18d/esy7n0ep2e0mqoyx7h72se51wggmrcve.png</picture>
<name>Грунт АК-070 желтый бар 17 кг</name>
<description>Грунт АК-070 желтый бар 17 кг</description>
</offer>
<offer id="48650" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnoboltovyy_80_85_24_w1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>80.6</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/2f1/gj08t00j43a3vgcnshe6ki6iyy6zposi.jpg</picture>
<name>Хомут силовой одноболтовый 80-85/24 W1</name>
<description>Хомут силовой одноболтовый 80-85/24 W1</description>
</offer>
<offer id="48651" available="false">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_0_4_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>220</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<picture>http://himopttorg.ru/upload/iblock/8fd/jjdtxrwr4sfn801yhn3c02bblkb4afpp.png</picture>
<name>Паронит ПМБ 0,4 мм ВАТИ</name>
<description>Паронит ПМБ 0,4 мм ВАТИ</description>
</offer>
<offer id="48652" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/bumaga_indikatornaya_kongo_krasnaya/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>419</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Бумага индикаторная конго красная</name>
<description>Бумага индикаторная конго красная</description>
</offer>
<offer id="48654" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_102_mm_assenizatorskiy_seryy_morozostoykiy_udaroprochnyy_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1426</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/487/re0n0tf2lgn8uhcs6r9kx2monq77mzr8.jpg</picture>
<name>Шланг нап всас ПВХ 102 мм  ассенизаторский серый морозостойкий ударопрочный </name>
<description>Шланг нап всас ПВХ 102 мм  ассенизаторский серый морозостойкий ударопрочный </description>
</offer>
<offer id="48655" available="false">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_kshch_1/rukav_vsasyvayushchiy_kshch_65_mm_10_m_gr_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>956</price>
<currencyId>RUB</currencyId>
<categoryId>3300</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e6a/u2aac86otovkuntvovm6v839s51ee3ot.jpeg</picture>
<name>Рукав всасывающий КЩ  65 мм 10 м гр 1</name>
<description>Рукав всасывающий КЩ  65 мм 10 м гр 1</description>
</offer>
<offer id="48656" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_80_mm_0_7_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>680</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cb0/sqblbp45q1jd1grvhql2opp3qby1jrbe.png</picture>
<name>Шланг нап всас ПВХ 80 мм 0,7 МПа морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 80 мм 0,7 МПа морозостойкий Снегирь</description>
</offer>
<offer id="48657" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_8_mm_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>120</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/713/tv3nr1zlf55i0q8qmcxjnorodqf0krla.gif</picture>
<name>Пластина ТМКЩ  8 мм Кварт</name>
<description>Пластина ТМКЩ  8 мм Кварт</description>
</offer>
<offer id="48658" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_krasnaya_zh_b_1_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>674</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль по ржав красная ж/б 1,9 кг</name>
<description>Грунт-эмаль по ржав красная ж/б 1,9 кг</description>
</offer>
<offer id="48659" available="false">
<url>http://himopttorg.ru/catalog/perekis_vodoroda/perekis_vodoroda_pl_kan_24_kg_1/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2325</price>
<currencyId>RUB</currencyId>
<categoryId>3115</categoryId>
<picture>http://himopttorg.ru/upload/iblock/eb0/1ylqqjzpkm5g1sn7q1qkwbl8vmociv83.jpeg</picture>
<name>Перекись водорода пл/кан 24 кг</name>
<description>Перекись водорода пл/кан 24 кг</description>
</offer>
<offer id="48663" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_300_5tk200_2_5_2_tip_2_2_nb_13_14_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2000</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/288/t3f77sdl6a4c9rysbwd31hanxzg94otr.jpg</picture>
<name>Лента кон  300-5ТК200-2-5-2  тип 2.2 НБ 13-14 мм</name>
<description>Лента кон  300-5ТК200-2-5-2  тип 2.2 НБ      13-14 мм </description>
</offer>
<offer id="48664" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_110_mm_agrofleks_2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2096</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<name>Шланг нап всас ПВХ 110 мм  Агрофлекс-2</name>
<description>Шланг нап всас ПВХ 110 мм  Агрофлекс-2</description>
</offer>
<offer id="48665" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_40_mm_sever_zelenyy_55s/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>408</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d7b/d78lrczb9s1mds4wxdh7dds8is4c4ftq.jpg</picture>
<name>Шланг нап всас ПВХ 40 мм север зеленый -55С</name>
<description>Шланг нап всас ПВХ 40 мм север зеленый -55С</description>
</offer>
<offer id="48666" available="true">
<url>http://himopttorg.ru/catalog/kislota_azotnaya/kislota_azotnaya_v_s_57/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>58</price>
<currencyId>RUB</currencyId>
<categoryId>3348</categoryId>
<picture>http://himopttorg.ru/upload/iblock/70d/jsaiz9as2miwvl5n6jvm1tq7dam4z7ob.jpg</picture>
<name>Кислота азотная в/с 57%</name>
<description>Кислота азотная в/с 57%</description>
</offer>
<offer id="48667" available="false">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_silikonovaya_8kh1000kh5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>33375</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<name>Пластина силиконовая 8х1000х5000 мм</name>
<description>Пластина силиконовая 8х1000х5000 мм</description>
</offer>
<offer id="48670" available="true">
<url>http://himopttorg.ru/catalog/rukava_paroprovodnye/rukav_paroprovodnyy_25kh46_mm_0_8_mpa_par_2_szrt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>841</price>
<currencyId>RUB</currencyId>
<categoryId>251</categoryId>
<picture>http://himopttorg.ru/upload/iblock/fb7/8vkpd7b4l8h0qu5olfdzsot03gj4361v.gif</picture>
<name>Рукав паропроводный 25х46 мм 0,8 МПа пар-2 СЗРТ</name>
<description>Рукав паропроводный 25х46 мм 0,8 МПа пар-2 СЗРТ</description>
</offer>
<offer id="48671" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_65_mm_10_m_gr_2_r_5_szr/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1125</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bc9/d34ofas16mh9v7gf3enqxmxpwhnstx9r.jpeg</picture>
<name>Рукав всасывающий Б  65 мм 10 м гр 2 р-5 СЗР</name>
<description>Рукав всасывающий Б  65 мм 10 м гр 2 р-5 СЗР</description>
</offer>
<offer id="48672" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_150_mm_poliester/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>160</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Валик в сборе 150 мм полиэстер</name>
<description>Валик в сборе 150 мм полиэстер</description>
</offer>
<offer id="48673" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/valik_v_sbore_180_mm_poliester/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>170</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Валик в сборе 180 мм полиэстер</name>
<description>Валик в сборе 180 мм полиэстер</description>
</offer>
<offer id="48675" available="true">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_115_chernaya_zh_b_2_6_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>371</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-115 черная ж/б 2,6 кг</name>
<description>Эмаль ПФ-115 черная ж/б 2,6 кг</description>
</offer>
<offer id="48676" available="false">
<url>http://himopttorg.ru/catalog/paronit/paronit_pmb_0_5_mm_vati/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>225</price>
<currencyId>RUB</currencyId>
<categoryId>3284</categoryId>
<name>Паронит ПМБ 0,5 мм ВАТИ</name>
<description>Паронит ПМБ 0,5 мм ВАТИ</description>
</offer>
<offer id="48677" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/zhelezo_sernokisloe_tekh_kuporos/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>325</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Железо сернокислое тех (купорос)</name>
<description>Железо сернокислое тех (купорос)</description>
</offer>
<offer id="48678" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kovrik_dezinfits_eko_180kh110kh3_sm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>5998</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Коврик дезинфиц ЭКО 180х110х3 см</name>
<description>Коврик дезинфиц ЭКО 180х110х3 см</description>
</offer>
<offer id="48679" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/ammiak_vodnyy_chda_9kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>137</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Аммиак водный ЧДА 9кг</name>
<description>Аммиак водный ЧДА 9кг</description>
</offer>
<offer id="48680" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_doma/tsement_m_500_25_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>312</price>
<currencyId>RUB</currencyId>
<categoryId>365</categoryId>
<name>Цемент М-500 25 кг</name>
<description>Цемент М-500 25 кг</description>
</offer>
<offer id="48687" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_tmkshch_1/plastina_tmkshch_8_mm_1000_5000_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>8775</price>
<currencyId>RUB</currencyId>
<categoryId>3310</categoryId>
<picture>http://himopttorg.ru/upload/iblock/129/2n4n9hr4ho3sttvu7n92z5iyfrt7na03.gif</picture>
<name>Пластина ТМКЩ  8 мм 1000*5000 мм</name>
<description>Пластина ТМКЩ  8 мм 1000*5000 мм</description>
</offer>
<offer id="48688" available="false">
<url>http://himopttorg.ru/catalog/emali_pf/emal_pf_266_zhelt_kor_zh_b_1_9_kg_/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>200</categoryId>
<name>Эмаль ПФ-266 желт кор ж/б 1,9 кг </name>
<description>Эмаль ПФ-266 желт кор ж/б 1,9 кг </description>
</offer>
<offer id="48689" available="true">
<url>http://himopttorg.ru/catalog/emali_nts_1/emal_nts_132_nitro_zheltaya_bar_40_kg_kazan/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>440</price>
<currencyId>RUB</currencyId>
<categoryId>3296</categoryId>
<name>Эмаль НЦ-132 нитро желтая бар 40 кг Казань</name>
<description>Эмаль НЦ-132 нитро желтая бар 40 кг Казань</description>
</offer>
<offer id="48690" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/moyushchee_sredstvo_pemolyuks_480g_yabloko/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>95.2</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Моющее средство пемолюкс 480г яблоко</name>
<description>Моющее средство пемолюкс 480г яблоко</description>
</offer>
<offer id="48696" available="true">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_150_mm_shs_1_3_mpa_morozostoykiy/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2021</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<name>Шланг нап всас ПВХ 150 мм ШС 1,3 МПа морозостойкий</name>
<description>Шланг нап всас ПВХ 150 мм ШС 1,3 МПа морозостойкий</description>
</offer>
<offer id="48697" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_seraya_zh_b_1_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>674</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<name>Грунт-эмаль по ржав серая ж/б 1,9 кг</name>
<description>Грунт-эмаль по ржав серая ж/б 1,9 кг</description>
</offer>
<offer id="48698" available="false">
<url>http://himopttorg.ru/catalog/grunt_emali_khv_0278_po_rzhavchine/grunt_emal_po_rzhav_chernaya_zh_b_0_9_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>352</price>
<currencyId>RUB</currencyId>
<categoryId>3286</categoryId>
<picture>http://himopttorg.ru/upload/iblock/1ee/axmiwaqbh1xvbuirswppq0650rgq2w4n.jpeg</picture>
<name>Грунт-эмаль по ржав черная ж/б 0,9 кг</name>
<description>Грунт-эмаль по ржав черная ж/б 0,9 кг</description>
</offer>
<offer id="48699" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_8_m_gr_2_r_3_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>900</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/d7b/v35kf8tdqt9dcay4xv9nejfbxmo49lb8.jpeg</picture>
<name>Рукав всасывающий Б  50 мм  8 м гр 2 р-3 Химтекс</name>
<description>Рукав всасывающий Б  50 мм  8 м гр 2 р-3 Химтекс</description>
</offer>
<offer id="48700" available="false">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_ko_814_sereb_seraya_kompl_20kg_1kg_pap_2_elcon/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>790</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль КО-814 сереб-серая (компл 20кг+1кг ПАП-2) Elcon</name>
<description>Эмаль КО-814 сереб-серая (компл 20кг+1кг ПАП-2) Elcon</description>
</offer>
<offer id="48701" available="true">
<url>http://himopttorg.ru/catalog/rastvoritel_r_5/rastvoritel_r_5_pl_kan_5_l_khi/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>3334</categoryId>
<name>Растворитель Р-5 пл/кан 5 л ХИ</name>
<description>Растворитель Р-5 пл/кан 5 л ХИ</description>
</offer>
<offer id="48702" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnobolt_nerzh_162_174_26_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>185</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/cb8/g2e17xi0q41ady1kjbv5ijaj5cqhtasb.jpg</picture>
<name>Хомут силовой одноболт.нерж.162-174/26 W2</name>
<description>Хомут силовой одноболт.нерж.162-174/26 W2</description>
</offer>
<offer id="48703" available="true">
<url>http://himopttorg.ru/catalog/khomuty_i_soedineniya/khomut_silovoy_odnobolt_nerzh_214_226_26_w2/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>208</price>
<currencyId>RUB</currencyId>
<categoryId>229</categoryId>
<picture>http://himopttorg.ru/upload/iblock/56b/u7833h3432gj8cl36xedy68ukqp3hhze.jpg</picture>
<name>Хомут силовой одноболт.нерж.214-226/26 W2</name>
<description>Хомут силовой одноболт.нерж.214-226/26 W2</description>
</offer>
<offer id="48704" available="true">
<url>http://himopttorg.ru/catalog/khimiya_prochaya/natriy_ftoristyy_chda/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>2442</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<name>Натрий фтористый ЧДА</name>
<description>Натрий фтористый ЧДА</description>
</offer>
<offer id="48705" available="true">
<url>http://himopttorg.ru/catalog/emali_gf_as_ko_ep_khv_khs/emal_bicoat_polyur_501_ral_7040_p_m_20kg_2_2kg_otv_bi_er_05/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>20740</price>
<currencyId>RUB</currencyId>
<categoryId>3295</categoryId>
<name>Эмаль BICOAT Polyur 501 RAL 7040 (П/М) 20кг + 2,2кг отв. Bi-Er 05</name>
<description>Эмаль BICOAT Polyur 501 RAL 7040 (П/М) 20кг + 2,2кг отв. Bi-Er 05</description>
</offer>
<offer id="48706" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_200_4bknl65_0_0_4_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>300</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/9ca/ockllpromjt5zlhgmwmafx5bksxs92rb.jpg</picture>
<name>Лента кон  200-4БКНЛ65-0-0    4,5 мм</name>
<description>Лента кон  200-4БКНЛ65-0-0   </description>
</offer>
<offer id="48707" available="true">
<url>http://himopttorg.ru/catalog/lenta_konveyernaya/lenta_kon_500_2bknl_65_2_1_5_1_5_nb_4_5_mm/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>800</price>
<currencyId>RUB</currencyId>
<categoryId>233</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e84/v6lrakd5by8mhah100bvt7wdh4a2scc4.jpg</picture>
<name>Лента кон  500-2БКНЛ-65-2-1,5-1,5 НБ   4,5 мм</name>
<description>Лента кон  500-2БКНЛ-65-2-1,5-1,5 НБ   </description>
</offer>
<offer id="48708" available="true">
<url>http://himopttorg.ru/catalog/kislota_sulfaminovaya/kislota_sulfaminovaya_p_mesh_25_kg_tambov/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>225</price>
<currencyId>RUB</currencyId>
<categoryId>3347</categoryId>
<name>Кислота сульфаминовая п/меш 25 кг Тамбов</name>
<description>Кислота сульфаминовая п/меш 25 кг Тамбов</description>
</offer>
<offer id="48709" available="true">
<url>http://himopttorg.ru/catalog/kislota_akkumulyatornaya_sernaya/kislota_sernaya_tekh_gost_2184_2013/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>70</price>
<currencyId>RUB</currencyId>
<categoryId>3360</categoryId>
<picture>http://himopttorg.ru/upload/iblock/584/40uezjpqt3tkmhu5ywsz0eq4fymeg4sd.jpg</picture>
<name>Кислота серная тех ГОСТ 2184-2013</name>
<description>Кислота серная тех ГОСТ 2184-2013</description>
</offer>
<offer id="48712" available="true">
<url>http://himopttorg.ru/catalog/shnury_i_trubki/shnur_1_2s_8_mm_gost_6467_79/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>462</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<name>Шнур 1-2С 8 мм ГОСТ 6467-79</name>
<description>Шнур 1-2С 8 мм ГОСТ 6467-79</description>
</offer>
<offer id="48713" available="true">
<url>http://himopttorg.ru/catalog/manzhety/manzheta_armirovannaya_salnik_ts_70kh110kh10_nbr70/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>78.7</price>
<currencyId>RUB</currencyId>
<categoryId>327</categoryId>
<name>Манжета армированная (сальник) ТС 70х110х10 NBR70</name>
<description>Манжета армированная (сальник) ТС 70х110х10 NBR70</description>
</offer>
<offer id="48714" available="true">
<url>http://himopttorg.ru/catalog/vodoemulsionnye_kraski/kraska_vdak_2180_novye_tekhnologii_w3_interernaya_14_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>108</price>
<currencyId>RUB</currencyId>
<categoryId>3289</categoryId>
<name>Краска ВДАК-2180 Новые технологии W3 интерьерная 14 кг</name>
<description>Краска ВДАК-2180 Новые технологии W3 интерьерная 14 кг</description>
</offer>
<offer id="48715" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_38_mm_1_0_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>260</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/bd9/hcegzrobylvrq9j0xt0rquzok2vjzrg9.png</picture>
<name>Шланг нап всас ПВХ 38 мм 1,0 МПа  морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 38 мм 1,0 МПа  морозостойкий Снегирь</description>
</offer>
<offer id="48716" available="true">
<url>http://himopttorg.ru/catalog/grunty_2/grunt_fl_03_k_bar_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>270</price>
<currencyId>RUB</currencyId>
<categoryId>3287</categoryId>
<name>Грунт ФЛ-03 К бар 20 кг</name>
<description>Грунт ФЛ-03 К бар 20 кг</description>
</offer>
<offer id="48717" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_32_mm_10_m_gr_2_r_5_khimteks/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>612</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e38/nntgk6exq9e4kqvtcevf62oerkprmilo.jpeg</picture>
<name>Рукав всасывающий Б  32 мм 10 м гр 2 р-5 Химтекс</name>
<description>Рукав всасывающий Б  32 мм 10 м гр 2 р-5 Химтекс</description>
</offer>
<offer id="48718" available="true">
<url>http://himopttorg.ru/catalog/vse_dlya_uborki/salfetka_tryapka_bytovaya_70kh80/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>130</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<name>Салфетка тряпка бытовая 70х80</name>
<description>Салфетка тряпка бытовая 70х80</description>
</offer>
<offer id="48719" available="true">
<url>http://himopttorg.ru/catalog/laboratornoe_oborudovanie/kapelnitsa_strasheyna_2_60_ml/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>484</price>
<currencyId>RUB</currencyId>
<categoryId>321</categoryId>
<name>Капельница Страшейна 2-60 мл</name>
<description>Капельница Страшейна 2-60 мл</description>
</offer>
<offer id="48720" available="false">
<url>http://himopttorg.ru/catalog/uayt_spirit/uayt_spirit_boch_150_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>21000</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<picture>http://himopttorg.ru/upload/iblock/6d7/9edhbpnxc8qvmolgqxi4s4n557f99t90.png</picture>
<name>Уайт-спирит боч 150 кг</name>
<description>Уайт-спирит боч 150 кг</description>
</offer>
<offer id="48721" available="true">
<url>http://himopttorg.ru/catalog/malyarnye_instrumenty_1/polumaska_filtruyushchaya_s_dvumya_filtrami_istok_300/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>630</price>
<currencyId>RUB</currencyId>
<categoryId>3292</categoryId>
<name>Полумаска фильтрующая с двумя фильтрами Исток-300</name>
<description>Полумаска фильтрующая с двумя фильтрами Исток-300</description>
</offer>
<offer id="48722" available="true">
<url>http://himopttorg.ru/catalog/dorozhnye_kraski_1/emal_ak_511_seraya_zh_ved_20_kg/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>280</price>
<currencyId>RUB</currencyId>
<categoryId>3290</categoryId>
<name>Эмаль АК-511 серая ж/вед 20 кг</name>
<description>Эмаль АК-511 серая ж/вед 20 кг</description>
</offer>
<offer id="48723" available="false">
<url>http://himopttorg.ru/catalog/shlangi_pvkh/shlang_nap_vsas_pvkh_19_mm_1_0_mpa_morozostoykiy_snegir/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>108</price>
<currencyId>RUB</currencyId>
<categoryId>3311</categoryId>
<picture>http://himopttorg.ru/upload/iblock/81f/0cnyh0w9zxmhszt5ekeeue011p1epbxn.png</picture>
<name>Шланг нап всас ПВХ 19 мм 1,0 МПа  морозостойкий Снегирь</name>
<description>Шланг нап всас ПВХ 19 мм 1,0 МПа  морозостойкий Снегирь</description>
</offer>
<offer id="48724" available="false">
<url>http://himopttorg.ru/catalog/nefras/nefras_s_2_80_120_br_2_galosha_pl_kan_5_l/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1600</price>
<currencyId>RUB</currencyId>
<categoryId>3338</categoryId>
<picture>http://himopttorg.ru/upload/iblock/858/kcjof14gq1ntlaju4l4j3mkoottndxu4.jpeg</picture>
<name>Нефрас С 2 80/120 БР-2 &quot;ГАЛОША&quot; пл/кан 5 л</name>
<description>Нефрас С 2 80/120 БР-2 &quot;ГАЛОША&quot; пл/кан 5 л</description>
</offer>
<offer id="48725" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_38_mm_10_m_gr_2_r_5_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>568</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/665/jgrvb5a0zzuctfngch0r3496ff4ggyem.jpeg</picture>
<name>Рукав всасывающий Б  38 мм 10 м гр 2 р-5 КРТ</name>
<description>Рукав всасывающий Б  38 мм 10 м гр 2 р-5 </description>
</offer>
<offer id="48727" available="true">
<url>http://himopttorg.ru/catalog/ksilol/ksilol_pl_kan_5_l_kh_i/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>1950</price>
<currencyId>RUB</currencyId>
<categoryId>3337</categoryId>
<picture>http://himopttorg.ru/upload/iblock/e63/d1joihn5xkfmv6dnk3au71yx76s761oo.jpg</picture>
<name>Ксилол пл/кан 5 л Х-И</name>
<description>Ксилол пл/кан 5 л Х-И</description>
</offer>
<offer id="48728" available="true">
<url>http://himopttorg.ru/catalog/rukava_vsasyvayushchie_b_1/rukav_vsasyvayushchiy_b_50_mm_10_m_gr_2_r_3_krt/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>904</price>
<currencyId>RUB</currencyId>
<categoryId>3298</categoryId>
<picture>http://himopttorg.ru/upload/iblock/30b/xegcap671c0fbnruvzb9fyqg7l3lanpf.jpeg</picture>
<name>Рукав всасывающий Б  50 мм 10 м гр 2 р-3 КРТ</name>
<description>Рукав всасывающий Б  50 мм 10 м гр 2 р-3 КРТ</description>
</offer>
<offer id="48729" available="true">
<url>http://himopttorg.ru/catalog/tekhplastiny_mbs_1/plastina_mbs_3_mm_kvart/?r1=<?echo $strReferer1; ?>&amp;r2=<?echo $strReferer2; ?></url>
<price>230</price>
<currencyId>RUB</currencyId>
<categoryId>3308</categoryId>
<picture>http://himopttorg.ru/upload/iblock/a34/npeii747js4h9u5qv0mgpa2vpptst66y.gif</picture>
<name>Пластина МБС  3 мм Кварт</name>
<description>Пластина МБС  3 мм Кварт</description>
</offer>
</offers>
</shop>
</yml_catalog>
