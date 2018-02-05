<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{

    private $queries = <<<QRY

    -- admin_menu
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (1, 0, 1, 'Dashboard', 'fa-bar-chart', '/', NULL, '2018-01-26 00:19:56');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (2, 0, 8, 'Configuration', 'fa-cog', NULL, NULL, '2018-01-27 18:42:26');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (3, 2, 9, 'Admin Users', 'fa-user-secret', 'auth/users', NULL, '2018-01-26 17:12:18');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (4, 2, 10, 'Roles', 'fa-user', 'auth/roles', NULL, '2018-01-26 17:10:51');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (5, 2, 11, 'Permission', 'fa-ban', 'auth/permissions', NULL, '2018-01-26 17:10:51');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (6, 2, 12, 'Menu', 'fa-bars', 'auth/menu', NULL, '2018-01-26 17:10:51');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (7, 2, 13, 'Operation log', 'fa-history', 'auth/logs', NULL, '2018-01-26 17:10:51');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (14, 0, 2, 'Announcements', 'fa-bullhorn', '/announcements', '2018-01-26 00:17:48', '2018-01-26 00:17:54');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (15, 0, 3, 'Images', 'fa-image', '/images', '2018-01-26 00:18:19', '2018-01-26 00:18:25');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (16, 0, 4, 'Users', 'fa-group', '/users', '2018-01-26 00:18:55', '2018-01-26 00:19:03');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (17, 0, 5, 'Tools', 'fa-wrench', '/tools', '2018-01-26 00:19:32', '2018-01-26 00:19:37');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (18, 17, 6, 'Evidence Manager', 'fa-book', 'evidence', '2018-01-26 17:08:25', '2018-01-26 17:10:51');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (19, 17, 7, 'Statistics', 'fa-calculator', 'statistics', '2018-01-26 17:10:08', '2018-01-26 17:10:51');
    INSERT INTO admin_menu (id, parent_id, "order", title, icon, uri, created_at, updated_at) VALUES (20, 17, 0, 'IP Bans', 'fa-shield', 'ip-bans', '2018-01-26 17:14:14', '2018-01-26 17:18:28');
    
    
    -- admin_permissions
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (1, 'All permission', '*', '', '*', NULL, NULL);
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL);
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (3, 'Login', 'auth.login', '', '/auth/login
    
    /auth/logout', NULL, NULL);
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL);
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (5, 'Auth management', 'auth.management', '', '/auth/roles
    
    /auth/permissions
    
    /auth/menu
    
    /auth/logs', NULL, NULL);
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (6, 'Announcements', 'announcements', '', '/announcements*', '2018-01-25 21:31:01', '2018-01-26 00:26:20');
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (7, 'Images', 'images', '', '/images*', '2018-01-25 21:43:55', '2018-01-26 00:29:52');
    INSERT INTO admin_permissions (id, name, slug, http_method, http_path, created_at, updated_at) VALUES (9, 'Users', 'users', '', '/users*', '2018-01-26 01:07:33', '2018-01-26 01:07:44');    


    -- admin_role_menu

    --
    -- File generated with SQLiteStudio v3.1.1 on Sat Jan 27 20:56:52 2018
    --
    -- Text encoding used: System
    --
    PRAGMA foreign_keys = off;
    BEGIN TRANSACTION;

    -- Table: admin_role_menu
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 2, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 12, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 12, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 14, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 14, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 15, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 15, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 16, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 16, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 17, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 17, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 18, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 18, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 19, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 19, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (1, 20, NULL, NULL);
    INSERT INTO admin_role_menu (role_id, menu_id, created_at, updated_at) VALUES (2, 20, NULL, NULL);

    COMMIT TRANSACTION;
    PRAGMA foreign_keys = on;


    --
    -- File generated with SQLiteStudio v3.1.1 on Sat Jan 27 20:57:47 2018
    --
    -- Text encoding used: System
    --
    PRAGMA foreign_keys = off;
    BEGIN TRANSACTION;
    
    -- Table: admin_role_permissions
    INSERT INTO admin_role_permissions (role_id, permission_id, created_at, updated_at) VALUES (1, 1, NULL, NULL);
    INSERT INTO admin_role_permissions (role_id, permission_id, created_at, updated_at) VALUES (2, 2, NULL, NULL);
    INSERT INTO admin_role_permissions (role_id, permission_id, created_at, updated_at) VALUES (2, 6, NULL, NULL);
    INSERT INTO admin_role_permissions (role_id, permission_id, created_at, updated_at) VALUES (2, 4, NULL, NULL);
    INSERT INTO admin_role_permissions (role_id, permission_id, created_at, updated_at) VALUES (2, 7, NULL, NULL);
    INSERT INTO admin_role_permissions (role_id, permission_id, created_at, updated_at) VALUES (2, 9, NULL, NULL);
    
    COMMIT TRANSACTION;
    PRAGMA foreign_keys = on;
    

    --
    -- File generated with SQLiteStudio v3.1.1 on Sat Jan 27 20:58:36 2018
    --
    -- Text encoding used: System
    --
    PRAGMA foreign_keys = off;
    BEGIN TRANSACTION;
    
    -- Table: admin_role_users
    INSERT INTO admin_role_users (role_id, user_id, created_at, updated_at) VALUES (1, 1, NULL, NULL);
    INSERT INTO admin_role_users (role_id, user_id, created_at, updated_at) VALUES (2, 2, NULL, NULL);
    
    COMMIT TRANSACTION;
    PRAGMA foreign_keys = on;
    

    --
    -- File generated with SQLiteStudio v3.1.1 on Sat Jan 27 20:59:03 2018
    --
    -- Text encoding used: System
    --
    PRAGMA foreign_keys = off;
    BEGIN TRANSACTION;
    
    -- Table: admin_roles
    INSERT INTO admin_roles (id, name, slug, created_at, updated_at) VALUES (1, 'Administrator', 'administrator', '2018-01-25 20:18:56', '2018-01-25 20:18:56');
    INSERT INTO admin_roles (id, name, slug, created_at, updated_at) VALUES (2, 'Moderator', 'moderator', '2018-01-25 21:32:43', '2018-01-25 21:32:43');
    
    
    COMMIT TRANSACTION;
    PRAGMA foreign_keys = on;
    

QRY;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::unprepared($this->queries);
        App\User::create([
            'name' => 'cubeadmin',
            'email' => 'admin@cubeupload.com',
            'password' => Hash::make('cubeupload')
        ]);
    }
}
