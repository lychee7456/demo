<?php
// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action {
    public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }
}