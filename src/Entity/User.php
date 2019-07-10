<?php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tbl_users")
 * @ORM\AttributeOverrides({
 *     @ORM\AttributeOverride(name="password",
 *          column=@ORM\Column(
 *              name     = "passwd",
 *              type     = "string",
 *              nullable=false
 *          )
 *      ),
 *     @ORM\AttributeOverride(name="salt",
 *          column=@ORM\Column(
 *              name     = "passwd_salt",
 *              type     = "string",
 *              nullable=false
 *          )
 *      )
 * })
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facebook_id", type="integer", nullable=true)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=20, nullable=false)
     */
    private $firstName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=20, nullable=false)
     */
    private $lastName = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth_date", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_country", type="string", length=100, nullable=true)
     */
    private $ipCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_state", type="string", length=100, nullable=true)
     */
    private $ipState;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_country", type="integer", nullable=true)
     */
    private $idCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=255, nullable=true)
     */
    private $ipAddress = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *$arrPasswd
     * @ORM\Column(name="street", type="string", length=100, nullable=true)
     */
    private $street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postal_code", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $postalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=100, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=0, nullable=false, options={"default"="M"})
     */
    private $gender = 'M';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_logo", type="string", length=255, nullable=true, options={"default"="no_pic.jpg"})
     */
    private $userLogo = 'no_pic.jpg';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_logo_small", type="string", length=255, nullable=true, options={"default"="no_pic_small.jpg"})
     */
    private $userLogoSmall = 'no_pic_small.jpg';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_logo_large", type="string", length=255, nullable=true, options={"default"="no_pic_large.jpg"})
     */
    private $userLogoLarge = 'no_pic_large.jpg';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_status", type="string", length=255, nullable=true)
     */
    private $userStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_activity", type="datetime", nullable=true)
     */
    private $lastActivity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_loggedin", type="string", length=0, nullable=true, options={"default"="N"})
     */
    private $isLoggedin = 'N';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_delete", type="string", length=0, nullable=true, options={"default"="N"})
     */
    private $isDelete = 'N';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_verified", type="string", length=0, nullable=true, options={"default"="N"})
     */
    private $isVerified = 'N';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_active", type="string", length=0, nullable=true, options={"default"="Y"})
     */
    private $isActive = 'Y';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_fb_verified", type="string", length=0, nullable=true)
     */
    private $isFbVerified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_elite", type="string", length=0, nullable=true, options={"default"="N"})
     */
    private $isElite = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="is_leaderboard_block", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $isLeaderboardBlock = 'N';

    /**
     * @var string|null
     *
     * @ORM\Column(name="spotx_off", type="string", length=0, nullable=true, options={"default"="N"})
     */
    private $spotxOff = 'N';

    /**
     * @var string|null
     *
     * @ORM\Column(name="offerwalls_token", type="string", length=255, nullable=true)
     */
    private $offerwallsToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paypal_email", type="string", length=100, nullable=true)
     */
    private $paypalEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=false)
     */
    private $dateUpdated;


    public function __construct()
    {
        parent::__construct();
        $this->setDateCreated(new \DateTime());
        $this->setDateUpdated(new \DateTime());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFacebookId(): ?int
    {
        return $this->facebookId;
    }

    public function setFacebookId(?int $facebookId): self
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(?\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getIpCountry(): ?string
    {
        return $this->ipCountry;
    }

    public function setIpCountry(?string $ipCountry): self
    {
        $this->ipCountry = $ipCountry;

        return $this;
    }

    public function getIpState(): ?string
    {
        return $this->ipState;
    }

    public function setIpState(?string $ipState): self
    {
        $this->ipState = $ipState;

        return $this;
    }

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function setIdCountry(?int $idCountry): self
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getUserLogo(): ?string
    {
        return $this->userLogo;
    }

    public function setUserLogo(?string $userLogo): self
    {
        $this->userLogo = $userLogo;

        return $this;
    }

    public function getUserLogoSmall(): ?string
    {
        return $this->userLogoSmall;
    }

    public function setUserLogoSmall(?string $userLogoSmall): self
    {
        $this->userLogoSmall = $userLogoSmall;

        return $this;
    }

    public function getUserLogoLarge(): ?string
    {
        return $this->userLogoLarge;
    }

    public function setUserLogoLarge(?string $userLogoLarge): self
    {
        $this->userLogoLarge = $userLogoLarge;

        return $this;
    }

    public function getUserStatus(): ?string
    {
        return $this->userStatus;
    }

    public function setUserStatus(?string $userStatus): self
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    public function getLastActivity(): ?\DateTimeInterface
    {
        return $this->lastActivity;
    }

    public function setLastActivity(?\DateTimeInterface $lastActivity): self
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    public function getIsLoggedin(): ?string
    {
        return $this->isLoggedin;
    }

    public function setIsLoggedin(?string $isLoggedin): self
    {
        $this->isLoggedin = $isLoggedin;

        return $this;
    }

    public function getIsDelete(): ?string
    {
        return $this->isDelete;
    }

    public function setIsDelete(?string $isDelete): self
    {
        $this->isDelete = $isDelete;

        return $this;
    }

    public function getIsVerified(): ?string
    {
        return $this->isVerified;
    }

    public function setIsVerified(?string $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getIsActive(): ?string
    {
        return $this->isActive;
    }

    public function setIsActive(?string $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsFbVerified(): ?string
    {
        return $this->isFbVerified;
    }

    public function setIsFbVerified(?string $isFbVerified): self
    {
        $this->isFbVerified = $isFbVerified;

        return $this;
    }

    public function getIsElite(): ?string
    {
        return $this->isElite;
    }

    public function setIsElite(?string $isElite): self
    {
        $this->isElite = $isElite;

        return $this;
    }

    public function getIsLeaderboardBlock(): ?string
    {
        return $this->isLeaderboardBlock;
    }

    public function setIsLeaderboardBlock(string $isLeaderboardBlock): self
    {
        $this->isLeaderboardBlock = $isLeaderboardBlock;

        return $this;
    }

    public function getSpotxOff(): ?string
    {
        return $this->spotxOff;
    }

    public function setSpotxOff(?string $spotxOff): self
    {
        $this->spotxOff = $spotxOff;

        return $this;
    }

    public function getOfferwallsToken(): ?string
    {
        return $this->offerwallsToken;
    }

    public function setOfferwallsToken(?string $offerwallsToken): self
    {
        $this->offerwallsToken = $offerwallsToken;

        return $this;
    }

    public function getPaypalEmail(): ?string
    {
        return $this->paypalEmail;
    }

    public function setPaypalEmail(?string $paypalEmail): self
    {
        $this->paypalEmail = $paypalEmail;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateUpdated(): ?\DateTimeInterface
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(\DateTimeInterface $dateUpdated): self
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }
}
