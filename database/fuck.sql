use fuck;

create table if not exists agent_base(
    id int unsigned not null auto_increment,
    name varchar(255) not null default '' comment '姓名',
    gender tinyint comment '性别',
    status tinyint not null default 0 comment '状态',
    mobile varchar(50) not null default '' comment '手机',
    province int not null default 0 comment '省份',
    city int not null default 0 comment '城市',
    district int not null default 0 comment '区县',
    garden int not null default 0 comment '小区',
    pos varchar(50) not null default '' comment '位置pos',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '中介基础表';

create table if not exists province(
    id int unsigned not null auto_increment,
    name varchar(255) not null default '' comment '名称',
    status tinyint not null default 0 comment '状态',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '省份表';

create table if not exists city(
    id int unsigned not null auto_increment,
    name varchar(255) not null default '' comment '名称',
    status tinyint not null default 0 comment '状态',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '城市表';

create table if not exists district(
    id int unsigned not null auto_increment,
    name varchar(255) not null default '' comment '名称',
    status tinyint not null default 0 comment '状态',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '区县表';

create table if not exists garden(
    id int unsigned not null auto_increment,
    name varchar(255) not null default '' comment '名称',
    status tinyint not null default 0 comment '状态',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '小区表';

create table if not exists users(
    id int unsigned not null auto_increment,
    nick_name varchar(255) not null default '' comment '昵称',
    openid varchar(255) not null default '' comment '授权用户唯一标识',
    status tinyint not null default 0 comment '状态',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '用户表';

create table if not exists comments(
    id int unsigned not null auto_increment,
    user_id int unsigned not null default 0 comment '用户id',
    content varchar(2048) not null default '' comment '评论内容',
    status tinyint not null default 0 comment '状态',
    reply_id int unsigned not null default 0 comment '回复评论id',
    comment_type tinyint not null default 0 comment '评论类型',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '评论表';

insert agent_base(name, status, gender, mobile, province, city, district, garden) values('张三', 1, 1, '15000000000', 1, 1, 1, 1);
insert agent_base(name, status, gender, mobile, province, city, district, garden) values('李四', 1, 1, '15000000001', 1, 1, 1, 1);
insert agent_base(name, status, gender, mobile, province, city, district, garden) values('王二', 1, 1, '15000000002', 1, 1, 1, 1);
insert province(name, status) values('北京', 1);
insert city(name, status) values('北京', 1);
insert district(name, status) values('朝阳', 1);
insert garden(name, status) values('金盏嘉园', 1);
insert users(nick_name, status, openid) values('杀猪书生', 1, 'fuckfuckfuck');
insert comments(user_id, content, status) values(1, '无良中介', 1);


