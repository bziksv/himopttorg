<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отсрочка платежа");
$APPLICATION->SetPageProperty("description","Купить химическую продукцию с доставкой во все регионы Центральной России отсроченным платежом");
?> 
<div class="block"> 	<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	Array(
		"START_FROM" => "1",
		"PATH" => "",
		"SITE_ID" => "-"
	),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);?> 	 
  <h1><?$APPLICATION->ShowTitle(false);?><?$APPLICATION->ShowProperty("ADDITIONAL_TITLE", "");?></h1>
 	 
  <p> </p>

  <p class="MsoNormal">ХИМОПТТОРГ для постоянных покупателей, закупающих продукцию ежемесячно на сумму 50 000 рублей на протяжении 4 месяцев и более, предлагает &laquo;ОТСРОЧКУ ПЛАТЕЖА&raquo;. Количество дней отсрочки определяется индивидуально для каждого покупателя. За дополнительной информацией обращайтесь к менеджерам по продажам.<o:p></o:p></p>
 
  <p class="MsoNormal" align="center" style="text-align: left; ">Перечень документов, предоставляемых Покупателем для заключения договора с отсрочкой платежа с ООО «ХИМОПТТОРГ:<o:p></o:p></p>
 
  <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; "> 
    <tbody> 
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: black; border-right-color: black; border-bottom-color: black; border-left-color: black; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; "><o:p> </o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: black; border-right-color: black; border-bottom-color: black; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-style: none; border-left-width: initial; border-left-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; "><b>Для Юридического лица<o:p></o:p></b></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: black; border-right-color: black; border-bottom-color: black; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-style: none; border-left-width: initial; border-left-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; "><b>Для индивидуального предпринимателя<o:p></o:p></b></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">1<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Свидетельства о государственной регистрации юридического лица (Свидетельство ОГРН)<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Свидетельства о государственной регистрации предпринимателя без образования юридического лица (Свидетельство ОГРНИП)<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">2<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Свидетельства о постановке на учет в налоговом органе (Свидетельство ИНН)<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Свидетельства о постановке на учет в налоговом органе (Свидетельство ИНН)<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">3<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Устава (1,2,3,4 и последний листы) (о создании юридического лица, учредительный договор) <o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия паспорта гражданина<span>  </span>РФ<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">4<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия документа, подтверждающего полномочия лица, подписывающего договор (доверенность или приказ о назначении руководителя)<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия документа, подтверждающего полномочия лица, подписывающего договор (доверенность или приказ о назначении руководителя)<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">5<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Выписки из Единого государственного реестра юридических лиц (ЕГРЮЛ) (не позднее 90 дней с момента выдачи в налоговом органе по месту регистрации)<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Выписки из Единого государственного реестра индивидуальных предпринимателей (ЕГРИП) (не позднее 90 дней с момента выдачи в налоговом органе по месту регистрации)<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">6<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия карточки предприятия (реквизиты, телефоны, адрес местонахождения)<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия карточки предприятия (реквизиты, телефоны, адрес местонахождения)<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">7<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия банковской карточки с образцами подписей<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия банковской карточки с образцами подписей<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">8<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Бухгалтерского баланса (за последний отчетный период)<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Бухгалтерского баланса (за последний отчетный период)<o:p></o:p></p>
         </td> </tr>
     
      <tr> <td width="22" valign="top" style="width: 16.4pt; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: black; border-bottom-color: black; border-left-color: black; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-top-style: none; border-top-width: initial; border-top-color: initial; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">9<o:p></o:p></p>
         </td> <td width="344" valign="top" style="width: 258.35pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Отчета о прибылях и убытках (за последний отчетный период)<o:p></o:p></p>
         </td> <td width="359" valign="top" style="width: 269.3pt; border-top-style: none; border-top-width: initial; border-top-color: initial; border-left-style: none; border-left-width: initial; border-left-color: initial; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1pt; border-right-style: solid; border-right-color: black; border-right-width: 1pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm; padding-left: 5.4pt; "> 
          <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal; ">Копия Отчета о прибылях и убытках (за последний отчетный период)<o:p></o:p></p>
         </td> </tr>
     </tbody>
   </table>
 
  <p class="MsoNormal" style="text-align: left; "><o:p>
      <br />
    </o:p></p>

  <p class="MsoNormal" style="text-align: left; "><o:p> </o:p>Все копии документов должны быть заверены подписью руководителя и печатью предприятия. <span> </span></p>
 
  <p class="MsoNormal"><o:p></o:p></p>
 
  <p></p>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>