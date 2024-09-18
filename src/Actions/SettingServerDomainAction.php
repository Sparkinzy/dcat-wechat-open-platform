<?php

namespace Shanjing\DcatWechatOpenPlatform\Actions;

use App\Admin\Forms\Modal;
use Dcat\Admin\Grid\RowAction;
use Shanjing\DcatWechatOpenPlatform\Forms\MiniProgram\SettingServerDomainForm;

class SettingServerDomainAction extends RowAction
{
    /**
     * 按钮标题
     * @var string
     */
    protected $title = '配置服务器域名';

    /**
     * 弹框
     * @return Modal|string
     *
     * @author lou <lou@shanjing-inc.com>
     */
    public function render()
    {
        $modalForm = SettingServerDomainForm::make()->payload([
            'id' => $this->getKey(),
        ]);

        return Modal::make()
            ->xl()
            ->title($this->title)
            ->delay(300)
            ->body($modalForm)
            ->button($this->title);
    }
}