<?php
require 'printhelper.php';
//�豸���
$uuid="�����豸���";

//ʵ����
$helper = new PrintHelper();

/*
 * �û��豸��
 * �������ݸ�ʽ��{"OpenUserId":1251,"Code":200,"Message":"�ɹ�"}
 */
echo $helper->userBind(uuid, '100');//100 ��ϵͳ���û���ţ��Լ����壩���������

/*
 * ��ȡ�豸״̬
 * �������ݸ�ʽ��"}{"State":0,"Code":200,"Message":"�ɹ�"}
 */
echo $helper->getDeviceState(uuid);

//Ҫ��ӡ������
$content="���Դ�ӡ\n���Ի���";
$base64Str= base64_encode($content);
//��ʽ��� https://github.com/systemxgl/dui-api �� http://www.mstching.com/openapi.pdf
$jsonContent="[{\"Alignment\":0,\"BaseText\":\"".$base64Str."\",\"Bold\":0,\"FontSize\":0,\"PrintType\":0}]";
/*
 * ��ӡ��Ϣ
 * �������ݸ�ʽ��{"TaskId":1,"Code":200,"Message":"�ɹ�"}
 */
echo $helper->printContent($uuid, $jsonContent, "0");//0�ĳ��û��豸�󶨷��ص�OpenUserId
/*
 * ��ѯ����״̬
 * �������ݸ�ʽ {"State":1,"Code":200,"Message":"�ɹ�"}
 */
echo $helper->getPrintTaskState("0");//0�ĳ�������
?>