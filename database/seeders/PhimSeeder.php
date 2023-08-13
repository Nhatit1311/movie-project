<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Khi seeder thì ta muốn xóa toàn bộ dữ liệu ở table đó
        DB::table('phims')->delete();

        // Reset id về lại 1
        DB::table('phims')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('phims')->insert([
            [
                'ten_phim' => "Em Đến Từ Tương Lai",
                'slug_ten_phim' => "em-den-tu-tuong-lai",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/em-den-tu-tuong-lai-thumb.jpg",
                'thoi_luong' => 30,
                'the_loai' => "Phim Tình Cảm",
                'quoc_gia' => "Trung Quốc",
                'dao_dien' => "Duy Nhất",
                'dien_vien' => "La Chính, Quý Mỹ Hàm, Yang Ze, Chen Si Che, Wang Kang, Jie Bing",
                'trailer' => "https://www.youtube.com/watch?v=Zisf3ahTfp8",
                'mo_ta' => "\\\"EmĐếnTừTươngLai\\\" do Châu Vĩnh đạo diễn, với sự tham gia của La Chính và Quý Mỹ Hàm\\nHạ Mạt tốt nghiệp đại học, mong muốn trở thành một blogger Hán phục. Cha mẹ của Hạ Mạt có một ngôi nhà ở Hải Thị, và Hạ Mạt quyết định lấy lại ngôi nhà. Người thuê nhà hiện tại.Thẩm Quân Nghiêu là chủ tịch của một công ty công nghệ, để thuận tiện cho công việc của mình, Thẩm Quân Nghiêu đã lắp đặt rất nhiều thiết bị nghiên cứu khoa học trong nhà. Hạ Mạt và Thẩm Quân Nghiêu ở chung nhà. Hạ Mạt không ngờ rằng nơi cô sắp làm việc lại cùng tập đoàn nơi Thẩm Quân Nghiêu làm việc. Hai người sống chung dưới một mái nhà đã ghét nhau lại còn phải làm chung với nhau. Dần Dần Thẩm Quân Nghiêu đã phát hiện ra rằng cô gái này có điểm gì đó dễ thương và Thẩm Quân Nghiêu cũng quyết định theo đuổi Hạ Mạt. \\nBộ phim này sẽ được phát sóng trực tuyến trên iQIYI quốc tế (iq.com).",
                'trang_thai' => 1,
                'link_phim' => "https://1080.opstream4.com/share/5669eb0ccfa4c6d23bf6d896ddd051ca",
            ],
            [
                'ten_phim' => "Cửa Hàn Tiện Lợi Saet Byul",
                'slug_ten_phim' => "cua-hang-tien-loi-saet-byul",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/cua-hang-tien-loi-saet-byul-thumb.jpg",
                'thoi_luong' => 60,
                'the_loai' => "Phim Hài Hước",
                'quoc_gia' => "Hàn Quốc",
                'dao_dien' => "Myung-woo Lee",
                'dien_vien' => "Ji Chang Wook, Kim You Jung, Angel Face",
                'trailer' => "https://www.youtube.com/watch?v=Zisf3ahTfp8",
                'mo_ta' => "Hoàng tử Quyến rũ đến đây! Vai chính được đảm nhận bởi Ji Chang Wook và Kim Yoo Jung, chuyển thể từ một webtoon rất nổi tiếng! Lấy bối cảnh cửa hàng tiện lợi, một nhân viên bán thời gian kỳ quặc gặp chủ cửa hàng vụng về nhưng duyên dáng, sau nhiều năm mở ra một chuyện tình cảm hài hước bất ngờ.",
                'trang_thai' => 1,
                'link_phim' => "https://aa.opstream6.com/share/acaa23f71f963e96c8847585e71352d6",
            ],
            [
                'ten_phim' => "ONE PIECE FILM: RED",
                'slug_ten_phim' => "one-piece-film-red",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/one-piece-film-red-thumb.jpg",
                'thoi_luong' => 116,
                'the_loai' => "Hoạt Hình",
                'quoc_gia' => "Nhật Bản",
                'dao_dien' => "Oda Eiichiro",
                'dien_vien' => "",
                'trailer' => "https://www.youtube.com/watch?v=L-aFL-bX1ao",
                'mo_ta' => "Đây là phần phim thứ mười lăm trong loạt phim điện ảnh của One Piece, dựa trên bộ truyện manga nổi tiếng cùng tên của tác giả Eiichiro Oda. Phim được công bố lần đầu tiên vào ngày 21 tháng 11, 2021 để kỷ niệm sự ra mắt của tập phim thứ 1000 của bộ anime One Piece và sau khi tập phim này được phát sóng, đoạn quảng cáo và áp phích chính thức của phim cũng chính thức được công bố. Phim dự kiến sẽ phát hành vào ngày 6 tháng 8 năm 2022. Bộ phim được giới thiệu sẽ là hành trình xoay quanh một nhân vật nữ mới cùng với Shanks \"Tóc Đỏ\".",
                'trang_thai' => 4,
                'link_phim' => "https://kd.opstream3.com/share/a96683574013404fbdc72bcb5f4c80e7",
            ],
            [
                'ten_phim' => "Tà Chú Cấm",
                'slug_ten_phim' => "ta-chu-cam",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/ta-chu-cam-thumb.jpg",
                'thoi_luong' => 124,
                'the_loai' => "Phim Kinh Dị",
                'quoc_gia' => "Thái Lan",
                'dao_dien' => "Sophon Sakdaphisit",
                'dien_vien' => "Nittha Jirayungyurn, Sukollawat Kanarot, Penpak Sirikul, Thanyaphat Mayuraleela, Namfon Pakdee, Suphithak Chatsuriyawong, Natniphaporm Ingamornrat, Pawarisa Surathin, Narupornkamol Chaisang, Piranpatch Teawsakul",
                'trailer' => "https://www.youtube.com/watch?v=db8puvbOhQw",
                'mo_ta' => "Bộ phim Tà Chú Cấm khám phá nỗi ám ảnh từ sự kiện thật tại Thái Lan, kể về gia đình Ning và Kwin khi họ chuyển đến căn hộ chung cư giá rẻ. Hành vi kỳ lạ của Kwin và hình xăm bí ẩn dẫn đến nguy hiểm đối với con gái Ing. Bí mật đen tối trong ngôi nhà thuê đang chờ đợi.",
                'trang_thai' => 2,
                'link_phim' => "https://1080.opstream4.com/share/1c4196d0ff7fe4e94bdca98fb251bc25",
            ],
            [
                'ten_phim' => "Lớp Học Điệp Viên Mùa 2",
                'slug_ten_phim' => "lop-hoc-diep-vien-mua-2",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/lop-hoc-diep-vien-mua-2-thumb.jpg",
                'thoi_luong' => 23,
                'the_loai' => "Phim Hoạt Hình",
                'quoc_gia' => "Nhật Bản",
                'dao_dien' => "",
                'dien_vien' => "",
                'trailer' => "",
                'mo_ta' => "Đây là một thế giới nơi các đặc vụ từ nhiều quốc gia bí mật thực hiện &quot;Cuộc chiến bóng tối&quot;. Klaus, đặc vụ mạnh nhất thế giới, có tỷ lệ thành công nhiệm vụ 100%, kỹ năng phi thường nhưng tính cách kỳ lạ. Anh thành lập tổ chức mang tên &quot;Light&quot;, chuyên thực hiện các &quot;phi vụ bất khả thi&quot; với tỷ lệ tử vong lên tới hơn 90%. Tuy nhiên, những thành viên anh ấy chọn là bảy cô gái không có kinh nghiệm thực tế. Đầu độc, cạm bẫy, dụ dỗ—cách duy nhất để các cô gái hoàn thành nhiệm vụ là đánh bại Klaus bằng mưu mô?",
                'trang_thai' => 4,
                'link_phim' => "https://hdbo.opstream5.com/share/87de7ec757b578fbfb67cd9f99236efd",
            ],
            [
                'ten_phim' => "Mặt Nạ Quỷ",
                'slug_ten_phim' => "mat-na-quy",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/mat-na-quy-thumb.jpg",
                'thoi_luong' => 103,
                'the_loai' => "Phim Kinh Dị",
                'quoc_gia' => "Âu Mỹ",
                'dao_dien' => "Lawrence Fowler",
                'dien_vien' => "Michaela Longden, Rebecca Phillipson, Victor Mellors, Simon Davies, Sarah Alexandra Marks, Honor Davis-Pye, Georgina Jane, Ivy Deakin, Alice Thoma, Stewart Magrath",
                'trailer' => "",
                'mo_ta' => "Đây là một thế giới nơi các đặc vụ từ nhiều quốc gia bí mật thực hiện &quot;Cuộc chiến bóng tối&quot;. Klaus, đặc vụ mạnh nhất thế giới, có tỷ lệ thành công nhiệm vụ 100%, kỹ năng phi thường nhưng tính cách kỳ lạ. Anh thành lập tổ chức mang tên &quot;Light&quot;, chuyên thực hiện các &quot;phi vụ bất khả thi&quot; với tỷ lệ tử vong lên tới hơn 90%. Tuy nhiên, những thành viên anh ấy chọn là bảy cô gái không có kinh nghiệm thực tế. Đầu độc, cạm bẫy, dụ dỗ—cách duy nhất để các cô gái hoàn thành nhiệm vụ là đánh bại Klaus bằng mưu mô?",
                'trang_thai' => 3,
                'link_phim' => "https://hd1080.opstream2.com/share/dac32acd4db4c29c230538b72f8dd87d",
            ],
            [
                'ten_phim' => "ZAMBEZIA: THÀNH PHỐ CÁC LOÀI CHIM",
                'slug_ten_phim' => "ambezia-thanh-pho-cac-loai-chim",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/zambezia-thanh-pho-cac-loai-chim-thumb.jpg",
                'thoi_luong' => 83,
                'the_loai' => "Hài Hước, Phiêu Lưu, Gia Đình",
                'quoc_gia' => "Nam Phi",
                'dao_dien' => "Wayne Thornley",
                'dien_vien' => "Samuel L. Jackson, Abigail Breslin, Leonard Nimoy, Jeremy Suarez, Jeff Goldblum, Jenifer Lewis, Noureen DeWulf, Richard E. Grant, Jamal Mixon, David Shaughnessy",
                'trailer' => "",
                'mo_ta' => "Một thành phố chim nhộn nhịp trên các cạnh của hùng vĩ Victoria Falls, \"Zambezia\" là câu chuyện của Kai, nhưng chim ưng trẻ cao tinh thần người đi đến thành phố chim \"Zambezia\", nơi ông phát hiện ra sự thật về nguồn gốc của mình và, trong việc bảo vệ thành phố, học làm thế nào để là một phần của một cộng đồng.",
                'trang_thai' => 4,
                'link_phim' => "https://kd.opstream3.com/share/0bbf479bf2780e276ffca0dfe4583aa4",
            ],
            [
                'ten_phim' => "NGƯỜI NHỆN: DU HÀNH VŨ TRỤ NHỆN",
                'slug_ten_phim' => "nguoi-nhen-du-hanh-vu-tru-nhen",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/nguoi-nhen-du-hanh-vu-tru-nhen-thumb.jpg",
                'thoi_luong' => 140,
                'the_loai' => "Hành Động, Viễn Tưởng, Phiêu Lưu, Khoa Học",
                'quoc_gia' => "Âu Mỹ",
                'dao_dien' => "Joaquim Dos Santos, Justin K. Thompson",
                'dien_vien' => "Shameik Moore, Hailee Steinfeld, Jake Johnson, Oscar Isaac, Issa Rae, Daniel Kaluuya, Karan Soni, Jason Schwartzman, Brian Tyree Henry, Luna Lauren Velez",
                'trailer' => "",
                'mo_ta' => "Miles Morales tái xuất trong phần tiếp theo của bom tấn hoạt hình từng đoạt giải Oscar - Spider-Man: Across the Spider-Verse. Sau khi gặp lại Gwen Stacy, chàng Spider-Man thân thiện đến từ Brooklyn phải du hành qua đa vũ trụ và gặp một nhóm Người Nhện chịu trách nhiệm bảo vệ các thế giới song song. Nhưng khi nhóm siêu anh hùng xung đột về cách xử lý một mối đe dọa mới, Miles buộc phải đọ sức với các Người Nhện khác và phải xác định lại ý nghĩa của việc trở thành một người hùng để có thể cứu những người cậu yêu thương nhất.",
                'trang_thai' => 4,
                'link_phim' => "https://1080.opstream4.com/share/425e4714036e70b93d1683fc33b757e6",
            ],
            [
                'ten_phim' => "THE GATES",
                'slug_ten_phim' => "the-gates",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/the-gates-thumb.jpg",
                'thoi_luong' => 111,
                'the_loai' => "Kinh Dị",
                'quoc_gia' => "Âu Mỹ",
                'dao_dien' => "Stephen Hall",
                'dien_vien' => "John Rhys-Davies, Michael Yare, Elena Delia, Richard Brake, David Pearse, Peter Coonan, Brian Fortune",
                'trailer' => "",
                'mo_ta' => "Một kẻ giết người hàng loạt đã bị kết án tử hình bằng ghế điện ở London vào những năm 1890, nhưng trong những giờ phút cuối cùng, hắn đã nguyền rủa nhà tù mà hắn đang ở và tất cả những người trong đó.",
                'trang_thai' => 2,
                'link_phim' => "https://hd1080.opstream2.com/share/3ead394a64cafeb28d8d7a3c9f79d350",
            ],
            [
                'ten_phim' => "TÔI VÀ CHÚNG TA Ở BÊN NHAU",
                'slug_ten_phim' => "toi-va-chung-ta-o-ben-nhau",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/toi-va-chung-ta-o-ben-nhau-thumb.jpg",
                'thoi_luong' => 50,
                'the_loai' => "Tình Cảm, Tâm Lý",
                'quoc_gia' => "Trung Quốc",
                'dao_dien' => "Đang cập nhật",
                'dien_vien' => "Khương Nghiên, Tôn Di, Trương Bân Bân",
                'trailer' => "",
                'mo_ta' => "Tôi Và Chúng Ta Ở Bên Nhau xoay quanh bốn người phụ nữ sắp bước sang tuổi ba mươi. Nhóm bạn thân Hạ Nhan, Lương Sảng, Triệu Tiểu Lôi và Hạng Nam quen biết nhau từ thời còn học đại học. Sau khi tốt nghiệp, họ cùng nhau làm việc và sinh sống ở cùng một thành phố. Mỗi người một tính cách, một giấc mơ riêng, tuy nhiên trải qua nhiều trắc trở, bốn cô gái trẻ cổ vũ và giúp đỡ lẫn nhau, cùng nhau giải quyết những vấn đề khó khăn xảy ra trong cuộc sống, cũng chứng kiến sự trưởng thành và thay đổi của nhau.",
                'trang_thai' => 1,
                'link_phim' => "https://hd1080.opstream2.com/share/e9c8064bc8dac39bed69dd1d0158c1cd",
            ],
            [
                'ten_phim' => "QUÁI VẬT TÀU ĐIỆN NGẦM",
                'slug_ten_phim' => "quai-vat-tau-dien-ngam",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/quai-vat-tau-dien-ngam-thumb.jpg",
                'thoi_luong' => 85,
                'the_loai' => "Kinh Dị, Bí ẩn",
                'quoc_gia' => "Âu Mỹ",
                'dao_dien' => "Christopher Smith",
                'dien_vien' => "Franka Potente, Vas Blackwood, Ken Campbell, Jeremy Sheffield, Paul Rattray",
                'trailer' => "",
                'mo_ta' => "Bị mắc kẹt trong một ga tàu điện ngầm ở London, một người phụ nữ đang bị truy đuổi bởi một kẻ tấn công tiềm năng đi vào mê cung đường hầm vô danh bên dưới đường phố của thành phố",
                'trang_thai' => 3,
                'link_phim' => "https://kd.opstream3.com/share/53a04eaf216f3b354d10a6d4d1721532",
            ],
            [
                'ten_phim' => "TRÒ CHƠI ĐỊNH MỆNH",
                'slug_ten_phim' => "tro-choi-dinh-menh",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/tro-choi-dinh-menh-thumb.jpg",
                'thoi_luong' => 93,
                'the_loai' => "Hành Động, Phiêu Lưu, Kinh Dị",
                'quoc_gia' => "Hàn Quốc",
                'dao_dien' => "Kim Tae Kyung",
                'dien_vien' => "Park Bo-young",
                'trailer' => "",
                'mo_ta' => "Một đoạn phim đã từng gây nhiều sự chú ý trên mạng, sau đó bị cấm và biến mất không dấu vết. Jung Mi đã nhờ bạn trai của chị gái mình là Joon Hyuk, làm việc cho đội điều tra đặc biệt chống tội phạm mạng để tải đoạn phim đó về. Sau khi xem đoạn phim đó hàng loạt những việc kì lạ xảy đến với Jung Mi. Chị gái của Jung Mi là See Hee cùng với Joon Hyuk cố gắng cứu cô nhưng Tất cả những ai xem đoạn phim này đều phải chết.",
                'trang_thai' => 3,
                'link_phim' => "https://1080.opstream4.com/share/95bf5763251f491480a0c1e5b76a16d8",
            ],
            [
                'ten_phim' => "ĐẢO HẢI TẶC: LỄ HỘI HẢI TẶC (2019)",
                'slug_ten_phim' => "dao-hai-tac-le-hoi-hai-tac-2019",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/dao-hai-tac-le-hoi-hai-tac-2019-thumb.jpg",
                'thoi_luong' => 101,
                'the_loai' => "Hành Động, Phiêu Lưu",
                'quoc_gia' => "Nhật Bản",
                'dao_dien' => "Takashi Otsuka",
                'dien_vien' => "TanakaMayumi, OkamuraAkemi, NakaiKazuya, YamaguchiKappei",
                'trailer' => "",
                'mo_ta' => "Bộ phim là câu chuyện về Lễ hội Hải tặc, một dịp cho cướp biển, hải quân và lực lượng cách mạng tranh giành quyền bá chủ.",
                'trang_thai' => 4,
                'link_phim' => "https://hd1080.opstream2.com/share/7f1de29e6da19d22b51c68001e7e0e54",
            ],
            [
                'ten_phim' => "BOBOIBOY 2: CUỘC CHIẾN NGÂN HÀ",
                'slug_ten_phim' => "boboiboy-2-cuoc-chien-ngan-ha",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/boboiboy-2-cuoc-chien-ngan-ha-thumb.jpg",
                'thoi_luong' => 116,
                'the_loai' => "Gia Đình",
                'quoc_gia' => "Malaysia",
                'dao_dien' => "Đang cập nhật",
                'dien_vien' => "Nurfathiah Diaz, Fadzli Mohd Rawi, Dzubir Mohamed Zakaria",
                'trailer' => "",
                'mo_ta' => "BoBoiBoy và những người bạn phải bảo vệ sức mạnh nguyên tố của cậu trước tên ác nhân cổ xưa đang tìm cách giành lại quyền kiểm soát sức mạnh đó cũng như tàn phá vũ trụ.",
                'trang_thai' => 4,
                'link_phim' => "https://1080.opstream4.com/share/45c48cce2e2d7fbdea1afc51c7c6ad26",
            ],
            [
                'ten_phim' => "Ô TÔ 3",
                'slug_ten_phim' => "o-to-3",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/o-to-3-thumb.jpg",
                'thoi_luong' => 116,
                'the_loai' => "Hài Hước, Thể Thao, Gia Đình",
                'quoc_gia' => "Âu Mỹ",
                'dao_dien' => "Đang cập nhật",
                'dien_vien' => "Đang cập nhật",
                'trailer' => "",
                'mo_ta' => "Lightning McQueen đặt ra để chứng minh cho một thế hệ tay đua mới mà anh ta vẫn là chiếc xe đua tốt nhất trên thế giới.",
                'trang_thai' => 4,
                'link_phim' => "https://1080.opstream4.com/share/1113d7a76ffceca1bb350bfe145467c6",
            ],
            [
                'ten_phim' => "NGƯỜI ẤY ĐÃ ĐẾN",
                'slug_ten_phim' => "nguoi-ay-da-den",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/nguoi-ay-da-den-thumb.jpg",
                'thoi_luong' => 70,
                'the_loai' => "Gia Đình, Chính kịch",
                'quoc_gia' => "Hàn Quốc",
                'dao_dien' => "Han Joon-seo",
                'dien_vien' => "Baek Jin-hee, Ahn Jae-hyun, Cha Joo-young, Jung Eui-jae, Kang Boo-ja, Hong Yo-seob, Cha Hwa-yeon, Kim Hye-ok, Kim Chang-wan, Ryu Jin",
                'trailer' => "",
                'mo_ta' => "Phim kể về Yeon-Doo , một bà mẹ đơn thân và nuôi con một mình. Cô gặp một người đàn ông độc thân Tae-Kyung, người đã chọn sống độc thân. Tae-Kyung làm việc như một OB-GYN. Họ đồng ý bắt đầu một mối quan hệ giả tạo.",
                'trang_thai' => 1,
                'link_phim' => "https://vie.opstream1.com/share/d4a12972fe22abc2a39bf7aff3e8a534",
            ],
            [
                'ten_phim' => "KHI CÁC GÓA PHỤ HÀNH ĐỘNG",
                'slug_ten_phim' => "khi-cac-goa-phu-hanh-dong",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/khi-cac-goa-phu-hanh-dong-thumb.jpg",
                'thoi_luong' => 129,
                'the_loai' => "	Hình Sự",
                'quoc_gia' => "Âu Mỹ, Anh",
                'dao_dien' => "Steve McQueen",
                'dien_vien' => "Viola Davis, Michelle Rodriguez, Elizabeth Debicki, Cynthia Erivo, Colin Farrell, Robert Duvall, Liam Neeson, Brian Tyree Henry, Daniel Kaluuya, Lukas Haas",
                'trailer' => "",
                'mo_ta' => "Nội dung của Khi Các Góa Phụ Hành Động xoay quanh câu chuyện nhóm cướp do Rawlins dẫn đầu bị cảnh sát giết chết sau một phi vụ thất bại. Song, họ cũng đã kịp giấu một số tiền lớn trước đó. Không chỉ đối mặt với nỗi đau mất chồng, bốn góa phụ gồm Veronia, Linda, Alice và Belle còn bị các điều tra viên bủa vây tứ phía. Đây là lúc họ bắt đầu phát hiện ra những âm mưu ngầm to lớn liên quan đến cái chết của chồng mình. Họ cũng chính thức bước vào cuộc đấu trí căng thẳng với những tay chính trị gia quan liêu như Jack và Tom Mulligan hay nhóm cảnh sát tham nhũng… Không còn sự lựa chọn, bốn người phụ nữ đã quyết định hợp lực để tiếp tục băng cướp, hoàn thành phi vụ trước đó của chồng, đồng thời bảo vệ gia đình mình trước những hiểm nguy.",
                'trang_thai' => 3,
                'link_phim' => "https://kd.opstream3.com/share/50ca3a3bb3e7bf160f31f82354221313",
            ],
            [
                'ten_phim' => "CÂU CHUYỆN ĐỒ CHƠI 4",
                'slug_ten_phim' => "cau-chuyen-do-choi-4",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/cau-chuyen-do-choi-4-thumb.jpg",
                'thoi_luong' => 129,
                'the_loai' => "Hài Hước, Gia Đình",
                'quoc_gia' => "Âu Mỹ",
                'dao_dien' => "Đang cập nhật",
                'dien_vien' => "Đang cập nhật",
                'trailer' => "",
                'mo_ta' => "Woody, Buzz Lightyear và phần còn lại của băng đảng bắt tay vào một chuyến đi đường với Bonnie và một món đồ chơi mới có tên Fordky. Cuộc hành trình phiêu lưu biến thành một cuộc hội ngộ bất ngờ khi đường vòng nhẹ của Woody dẫn anh ta đến người bạn đã mất từ lâu của mình Bo Peep. Như Woody và Bo thảo luận về những ngày xưa, họ sớm bắt đầu nhận ra rằng họ là hai thế giới khác nhau khi nói đến những gì họ muốn từ cuộc sống như một món đồ chơi",
                'trang_thai' => 4,
                'link_phim' => "https://hd1080.opstream2.com/share/77f959f119f4fb2321e9ce801e2f5163",
            ],
            [
                'ten_phim' => "BÃO TRẮNG 3: THIÊN ĐÀNG HAY ĐỊA NGỤC",
                'slug_ten_phim' => "bao-trang-3-thien-dang-hay-dia-nguc",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/bao-trang-3-thien-dang-hay-dia-nguc-thumb.jpg",
                'thoi_luong' => 125,
                'the_loai' => "Hành Động, Hình Sự, Chính kịch",
                'quoc_gia' => "Trung Quốc, Hồng Kông",
                'dao_dien' => "Herman Yau",
                'dien_vien' => "Aaron Kwok, Louis Koo, Lau Ching-wan, Yang Caiyu, Gallen Lo, Tse Kwan-Ho, Alex Fong, Power Chan, Timmy Hung, Wilfred Lau",
                'trailer' => "",
                'mo_ta' => "Quách Phú Thành, Cổ Thiên Lạc cùng truy quét ông trùm hàng tr.ắ.ng Lưu Thanh Vân cực căng từ Hongkong đến lãnh địa chất cấm vùng Tam Giác Vàng. Câu chuyện càng lắt léo khi cảnh sát chìm lại được Trùm hàng tr.ắ.ng cứu mạng, liệu kẻ nào sẽ đổi phe?",
                'trang_thai' => 5,
                'link_phim' => "",
            ],
            [
                'ten_phim' => "THÁM TỬ LỪNG DANH CONAN 26: TÀU NGẦM SẮT MÀU ĐEN",
                'slug_ten_phim' => "tham-tu-lung-danh-conan-26-tau-ngam-sat-mau-den",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/tham-tu-lung-danh-conan-26-tau-ngam-sat-mau-den-thumb.jpg",
                'thoi_luong' => 110,
                'the_loai' => "Hành Động, Hình Sự, Bí ẩn",
                'quoc_gia' => "Nhật Bản",
                'dao_dien' => "Yuzuru Tachikawa",
                'dien_vien' => "Minami Takayama, Wakana Yamazaki, Rikiya Koyama, Megumi Hayashibara, Shuichi Ikeda, Kazuhiko Inoue, Kenichi Ogata, Atsuko Yuya, Yukimasa Kishino, Yukitoshi Hori",
                'trailer' => "",
                'mo_ta' => "Địa điểm lần này được đặt ở vùng biển gần đảo Hachijo-jima, Tokyo. Các kỹ sư từ khắp nơi trên thế giới đã tập hợp để vận hành toàn diện 'Phao Thái Bình Dương', một cơ sở ngoài khơi để kết nối các camera an ninh thuộc sở hữu của lực lượng cảnh sát trên toàn thế giới. Một thử nghiệm về một 'công nghệ mới nhất' định dựa trên hệ thống nhận dạng khuôn mặt đang được tiến hành ở đó. Trong khi đó, Conan và Đội thám tử nhí đến thăm Hachijo-jima theo lời mời của Sonoko và nhận được một cuộc điện thoại từ Subaru Okiya thông báo rằng một nhân viên Europol đã bị sát hại ở Đức bởi Jin của Tổ chức Áo đen. Conan lo lắng, lẻn vào cơ sở và phát hiện ra rằng một nữ kỹ sư đã bị Tổ chức Áo đen bắt cóc...! Hơn nữa, một ổ USB chứa một số thông tin nhất định mà cô ấy sở hữu lại lọt vào tay tổ chức... Một bóng đen cũng len lỏi vào Ai Haibara..",
                'trang_thai' => 5,
                'link_phim' => "",
            ],
            [
                'ten_phim' => "LIVE STREAM",
                'slug_ten_phim' => "live-stream",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/live-stream-thumb.jpg",
                'thoi_luong' => 90,
                'the_loai' => "Hình Sự",
                'quoc_gia' => "Hàn Quốc",
                'dao_dien' => "Choi Ju-yeon",
                'dien_vien' => "Park Sung-woong, Park Sun-ho, Kim Hee-jung",
                'trailer' => "",
                'mo_ta' => "Đang trong giai đoạn chiến tranh lạnh với bạn gái, Dong Joo nhận được một đường link đến buổi phát sóng trực tiếp. Kinh khủng hơn khi cô gái sẽ bị lột trần làm thú vui trên mạng chính là bạn gái anh.",
                'trang_thai' => 5,
                'link_phim' => "",
            ],
            [
                'ten_phim' => "ĐỒNG CẢM VỚI QUỶ",
                'slug_ten_phim' => "dong-cam-voi-quy",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/dong-cam-voi-quy-thumb.jpg",
                'thoi_luong' => 90,
                'the_loai' => "Hình Sự",
                'quoc_gia' => "Âu Mỹ",
                'dao_dien' => "Yuval Adler",
                'dien_vien' => "Nicolas Cage, Joel Kinnaman, Alexis Zollicoffer, Cameron Lee Price, Oliver McCallum, Rich Hopkins, Nancy Goode, Kaiwi Lyman",
                'trailer' => "",
                'mo_ta' => "Sau khi bị buộc phải chĩa súng lái xe chở một hành khách bí ẩn, một người đàn ông thấy mình đang ở trong trò chơi mèo vờn chuột đầy rủi ro, nơi mọi thứ trở nên rõ ràng rằng không phải mọi thứ đều như vẻ ngoài của nó.",
                'trang_thai' => 5,
                'link_phim' => "https://1080.opstream4.com/share/f0b314f185b80cf35d986e298db53fe3",
            ],
            [
                'ten_phim' => "SAU KHI GẶP ĐƯỢC ANH",
                'slug_ten_phim' => "sau-khi-gap-duoc-anh-2022",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/sau-khi-gap-duoc-anh-2022-thumb.jpg",
                'thoi_luong' => 102,
                'the_loai' => "Tình Cảm",
                'quoc_gia' => "Trung Quốc",
                'dao_dien' => "Hầu Tổ Tân",
                'dien_vien' => "Hoàng Nghiêu, Lưu Tấn, Ngô Anh Triết, Phó Mĩ, Lý Hiểu Xuyên, Romano Reggiani, Hồ Hạo Phàm, Lui Di, Phạm Văn Phương",
                'trailer' => "",
                'mo_ta' => "Ở Rome, cuộc gặp tình cờ giữa một sinh viên đang gặp khó khăn và một thần tượng quyến rũ mở ra câu chuyện tình yêu không ngờ tới khiến các thế giới của họ đảo lộn.",
                'trang_thai' => 5,
                'link_phim' => "https://hd1080.opstream2.com/share/7b7b8fe6a7edcce3a60990b689411964",
            ],
            [
                'ten_phim' => "TẦNG 11 BIẾN MẤT",
                'slug_ten_phim' => "tang-11-bien-mat",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/tang-11-bien-mat-thumb.jpg",
                'thoi_luong' => 43,
                'the_loai' => "Hành Động, Hình Sự, Bí ẩn",
                'quoc_gia' => "Hồng kông",
                'dao_dien' => "Jiang Zhuo Yuan",
                'dien_vien' => "Pan Yue Ming, Chen Shu, Guo Jing Lin, Li Hong Tao, Vạn Bằng",
                'trailer' => "",
                'mo_ta' => "Một tập báo cáo của Tập đoàn Cự Luân nổi tiếng ở thành phố Thương Hải đã che đậy sự thật về vụ tai nạn hầm mỏ, khiến phó cục trưởng Khúc Giang Hà (do Phan Việt Minh thủ vai) trở thành tâm điểm trong cuộc chiến trừ gian diệt ác này. Cuốn vào cuộc điều tra, anh mới hay hóa ra cuộc chiến trắng đen vốn chẳng phân rõ hai màu đen trắng. Vì biết bao lợi ích mà đối thủ, bạn bè và thậm chí cả cấp trên của anh đều yêu cầu anh che đậy chân tướng thật sự, mà nữ cục trưởng mới được bổ nhiệm Nghiêm Cáp (do Trần Sác thủ vai) lại không ngờ thực tế lại tàn khốc và hoành tráng đến vậy. Che đậy là tội ác còn nghiêm trọng hơn cả phạm tội.",
                'trang_thai' => 5,
                'link_phim' => "https://hd1080.opstream2.com/share/90253ae61c07456e5fa65da0c0f17d9b",
            ],
            [
                'ten_phim' => "BỐ GIÀ",
                'slug_ten_phim' => "bo-gia-2021",
                'hinh_anh' => "https://img.ophim8.cc/uploads/movies/bo-gia-2021-thumb.jpg",
                'thoi_luong' => 128,
                'the_loai' => "Hài Hước, Gia Đình, Chính kịch",
                'quoc_gia' => "Việt Nam",
                'dao_dien' => "Trấn Thành, Vũ Ngọc Đãng",
                'dien_vien' => "Trấn Thành, Tuấn Trần, Ngân Chi, Ngọc Giàu, Lê Giang",
                'trailer' => "",
                'mo_ta' => "Câu chuyện về Ba Sang - con thứ hai trong 4 anh em ồn ào: Giàu, Sang, Phú, Quý. Ba Sang là một người ga lăng, quá tốt bụng và luôn hy sinh vì người khác dù họ có muốn hay không. Quân - Ba Sang son là một Youtuber trẻ hiện đại.",
                'trang_thai' => 5,
                'link_phim' => "https://kd.opstream3.com/share/b1562246c02be63bac86a26684cdce58",
            ],
        ]);
    }
}
