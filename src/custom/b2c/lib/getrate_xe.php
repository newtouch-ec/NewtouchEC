<?php
//��ȡ��Ԫ������һ���
//����ֵ 0���쳣
//���� ��0������ֵ
// add by Seven for BBC150519001-����ץȡ�ű�PHP
function GetRate(){
	$url = "http://www.xe.com/ucc/convert.cgi?Amount=1&From=JPY&To=CNY";
	$content = file_get_contents($url);
	$regex = "/1&nbsp;JPY&nbsp;=&nbsp;(.+?)&nbsp;CNY/"; //������ʽ.
	if(preg_match_all($regex, $content, $matches)) {
		return $matches[1][0];
	}
	else{
		return '0';
	}
}
?>