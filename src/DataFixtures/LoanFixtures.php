<?php

namespace App\DataFixtures;

use App\Entity\Loan;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoanFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        ### Term 12 ###
        $loan = new Loan();
        $loan->setAmount(1000);
        $loan->setFee(50);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(2000);
        $loan->setFee(90);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(3000);
        $loan->setFee(90);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(4000);
        $loan->setFee(115);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(5000);
        $loan->setFee(100);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(6000);
        $loan->setFee(120);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(7000);
        $loan->setFee(140);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(8000);
        $loan->setFee(160);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(9000);
        $loan->setFee(180);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(10000);
        $loan->setFee(200);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(11000);
        $loan->setFee(220);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(12000);
        $loan->setFee(240);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(13000);
        $loan->setFee(260);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(14000);
        $loan->setFee(280);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(15000);
        $loan->setFee(300);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(16000);
        $loan->setFee(320);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(17000);
        $loan->setFee(340);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(18000);
        $loan->setFee(360);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(19000);
        $loan->setFee(380);
        $loan->setTerm(12);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(20000);
        $loan->setFee(400);
        $loan->setTerm(12);
        $manager->persist($loan);

        ### Term 24 ###
        $loan = new Loan();
        $loan->setAmount(1000);
        $loan->setFee(70);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(2000);
        $loan->setFee(100);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(3000);
        $loan->setFee(120);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(4000);
        $loan->setFee(160);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(5000);
        $loan->setFee(200);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(6000);
        $loan->setFee(240);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(7000);
        $loan->setFee(280);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(8000);
        $loan->setFee(320);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(9000);
        $loan->setFee(360);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(10000);
        $loan->setFee(400);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(11000);
        $loan->setFee(440);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(12000);
        $loan->setFee(480);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(13000);
        $loan->setFee(520);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(14000);
        $loan->setFee(560);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(15000);
        $loan->setFee(600);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(16000);
        $loan->setFee(640);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(17000);
        $loan->setFee(680);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(18000);
        $loan->setFee(720);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(19000);
        $loan->setFee(760);
        $loan->setTerm(24);
        $manager->persist($loan);

        $loan = new Loan();
        $loan->setAmount(20000);
        $loan->setFee(800);
        $loan->setTerm(24);
        $manager->persist($loan);

        $manager->flush();
    }
}
