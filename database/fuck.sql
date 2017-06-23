
create table agent_base(
    id int unsigned not null auto_increment,
    name varchar(255) not null default '' comment '姓名',
    gender tinyint comment '性别',
    status tinyint not null default 0 comment '状态',
    mobile varchar(50) not null default '' comment '手机',
    province int not null default 0 comment '省份',
    city int not null default 0 comment '城市',
    district int not null default 0 comment '区县',
    garden int not null default 0 comment '小区',
    add_time timestamp not null default CURRENT_TIMESTAMP comment '创建时间',
    update_time timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '更新时间',
    primary key(id)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '中介基础表';


