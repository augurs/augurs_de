# -FrontPage-

Options None

<Limit GET POST>
order deny,allow
deny from all
allow from all
require group administrators
</Limit>
<Limit PUT>
order deny,allow
deny from all
</Limit>
AuthType Basic
AuthName default_realm
AuthUserFile d:/frontpage\ webs/content/_vti_pvt/service.pwd
AuthGroupFile d:/frontpage\ webs/content/_vti_pvt/service.grp
