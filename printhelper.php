<?php
require 'utils.php';

class PrintHelper{
    /*
     * �û��豸��
     * $uuid �豸���
     * $userId ��ԶԻ�ƽ̨�������û�Ψһ��ʾ�����Լ�ϵͳ����ģ�
     */
    function userBind($uuid,$userId){
        $url = getUrl("/home/userbind");
        $jsonStr = json_encode(array('Uuid' => $uuid, 'UserId' => $userId));
        return http_post_json($url, $jsonStr); 
    }
    /*
     * ��ȡ�豸״̬
     * $uuid �豸���
     */
    function getDeviceState($uuid){
        $url = getUrl("/home/getdevicestate");
        $jsonStr = json_encode(array('Uuid' => $uuid));
        return http_post_json($url, $jsonStr);
    }
    /*
     * ��ӡ��Ϣ
     * $uuid �豸���
     * $content ��ӡ������
     * $OpenUserId ���� userBind�������ص�openUserId
     */
    function printContent($uuid,$content,$openUserId){
        $url = getUrl("/home/printcontent2");
        $jsonStr = json_encode(array('Uuid' => $uuid,'PrintContent'=>' '.$content,'OpenUserId'=>$openUserId));
        return http_post_json($url, $jsonStr);
    }
    /*
     * ��ѯ����״̬
     * $taskId ������
     */
    function getPrintTaskState($taskId){
        $url = getUrl("/home/getprinttaskstate");
        $jsonStr = json_encode(array('TaskId' => $taskId));
        return http_post_json($url, $jsonStr);
    }
}
?>