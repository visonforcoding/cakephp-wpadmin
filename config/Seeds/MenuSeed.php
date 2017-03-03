<?php
use Migrations\AbstractSeed;

/**
 * Menu seed.
 */
class MenuSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => '博文管理',
                'node' => '/admin/blog/index',
                'pid' => '2',
                'class' => 'icon-newspaper-o',
                'rank' => NULL,
                'is_menu' => '1',
                'status' => '1',
                'remark' => '',
            ],
            [
                'id' => '2',
                'name' => '内容管理',
                'node' => '',
                'pid' => '0',
                'class' => 'icon-list-alt',
                'rank' => NULL,
                'is_menu' => '1',
                'status' => '1',
                'remark' => '',
            ],
            [
                'id' => '3',
                'name' => '系统管理',
                'node' => '',
                'pid' => '0',
                'class' => 'icon-cog',
                'rank' => NULL,
                'is_menu' => '1',
                'status' => '1',
                'remark' => '',
            ],
            [
                'id' => '4',
                'name' => '菜单管理',
                'node' => '/admin/menu/index',
                'pid' => '3',
                'class' => 'icon-th-list',
                'rank' => NULL,
                'is_menu' => '1',
                'status' => '1',
                'remark' => '',
            ],
            [
                'id' => '5',
                'name' => '管理员管理',
                'node' => '/admin/admin/index',
                'pid' => '3',
                'class' => 'icon-user',
                'rank' => NULL,
                'is_menu' => '1',
                'status' => '1',
                'remark' => '',
            ],
        ];

        $table = $this->table('wp_menu');
        $table->insert($data)->save();
    }
}
