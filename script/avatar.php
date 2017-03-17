<?php
if ($_POST) {
    $err = 0;
    $types = array(
        '.jpg',
        '.jpeg',
        'JPG',
        '.gif',
        '.bmp',
        '.png');
    $max_size = 50200000; //������������ ������ ������������ ����� (5000-��)
    $path = 'images/'; //���������� ��� ��������
    $path_mini = 'images/'; //���������� ��� �������� ���������
    $fname = $_FILES['file']['name'];
    $ext = substr($fname, strpos($fname, '.'), strlen($fname) - 1); //���������� ��� ������������ �����

    /*�������� */
    //�������� �� ������������ �������
    if (!in_array($ext, $types)) {
        $f_err++;
        $mess = '<p style="color:red;">����������� ���� �� �������� ���������</p>';
    }

    //�������� ������� �����
    if (filesize($_FILES['file']['tmp_name']) > $max_size) {
        $f_err++;
        $mess = '<p style="color:red;">������ ����������� �������� ��������� 5 Mb</p>';
    }
    //����������� �� ��������� ���������� � �������� �� ������ �������� ��������
    if ($f_err == 0) {
        move_uploaded_file($_FILES['file']['tmp_name'], $path . $fname);

        //���� � ������������ �����
        $source_src = $path . $fname;

        //������� ���� � ��� ���������
        $new_name = md5($fname) . $ext;
        $resource_src = $path_mini . $new_name;

        //�������� ��������� ������������ �����
        $params = getimagesize($source_src);

        switch ($params[2]) {
            case 1:
                $source = imagecreatefromgif($source_src);
                break;
            case 2:
                $source = imagecreatefromjpeg($source_src);
                break;
        }

        //���� ������ ������ ������
        //��������� ����� ������
        if ($params[1] > $params[0]) {
            $newheight = 500;
            $newwidth = floor($newheight * $params[0] / $params[1]);
        }
        //���� ������ ������ ������
        //��������� ����� ������
        if ($params[1] < $params[0]) {
            $newwidth = 500;
            $newheight = floor($newwidth * $params[1] / $params[0]);
        }

        //������� ��������� ������������ �����������
        $resource = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($resource, $source, 0, 0, 0, 0, $newwidth, $newheight, $params[0],
            $params[1]);
        imagejpeg($resource, $resource_src, 80); //80 �������� �����������

        //��������� ����� �������
        chmod("$source_src", 0644);
        chmod("$resource_src", 0644);

        //������� ���������
        $mess = '<center><br><p style="color:green;">����������� ��������� !</p></center>';
        $ok = 1;
    }
}

?>