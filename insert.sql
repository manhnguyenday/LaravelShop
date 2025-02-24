INSERT INTO categories (name, description, created_at, updated_at) 
VALUES 
('Điện thoại Android', 'Danh mục dành cho các dòng điện thoại chạy hệ điều hành Android.', NOW(), NOW()),
('Điện thoại iPhone', 'Danh mục dành cho các dòng điện thoại iPhone của Apple.', NOW(), NOW()),
('Điện thoại Gaming', 'Danh mục dành cho các dòng điện thoại chuyên chơi game.', NOW(), NOW());

INSERT INTO products (name, description, price, category_id, stock, sku, image, created_at, updated_at) 
VALUES 
('Samsung Galaxy S23 Ultra', 'Smartphone cao cấp của Samsung với bút S-Pen và camera 200MP.', 299900, 
    (SELECT id FROM categories WHERE name = 'Điện thoại Android'), 50, 'SGS23U', 'samsung_s23_ultra.jpg', NOW(), NOW()),

('iPhone 14 Pro Max', 'Phiên bản cao cấp nhất của iPhone với chip A16 Bionic và màn hình Dynamic Island.', 329000, 
    (SELECT id FROM categories WHERE name = 'Điện thoại iPhone'), 30, 'IP14PM', 'iphone_14_pro_max.jpg', NOW(), NOW()),

('Asus ROG Phone 7', 'Điện thoại chuyên game với cấu hình mạnh mẽ và hệ thống tản nhiệt tối ưu.', 259900, 
    (SELECT id FROM categories WHERE name = 'Điện thoại Gaming'), 40, 'ROG7', 'asus_rog_phone_7.jpg', NOW(), NOW());
